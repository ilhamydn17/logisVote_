<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use Laravel\Fortify\Contracts\LoginResponse;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Laravel\Fortify\Contracts\LogoutResponse;
use RealRashid\SweetAlert\Facades\Alert;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->instance(
            LoginResponse::class,
            new class implements LoginResponse {
            public function toResponse($request)
            {
                if (auth()->user()->role == 'admin') {
                    return redirect()->route('admin.home');
                }

                if (auth()->user()->role == 'user') {
                    return redirect()->route('user.home');
                }

                // if(auth()->user()->role == 'admin'){
                //     return $request->wantsJson() ?
                //         response()->json(['two_factor'=>false]) :
                //         redirect()->intended(config('fortify.home'));
                // }

                // if(auth()->user()->role == 'user'){
                //     return $request->wantsJson() ?
                //         response()->json(['two_factor'=>false]) :
                //         redirect()->intended(config('fortify.home'));
                // }
            }
            }
        );

        $this->app->instance(
            LogoutResponse::class,
            new class implements LogoutResponse{
                public function toResponse($request){
                return redirect()->route('login');
                }
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(
            UpdateUserProfileInformation::class
        );
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $username = (string) $request->username;
            return Limit::perMinute(5)->by($username . $request->ip());
        });

        // RateLimiter::for('two-factor', function (Request $request) {
        //     return Limit::perMinute(5)->by($request->session()->get('login.id'));
        // });

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('username', $request->username)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                if ($user->is_voted) {
                    Alert::toast('Anda sudah melakukan voting!', 'error');
                    return false;
                }
                Alert::toast('Selamat Datang ' . $user->name, 'success');
                return $user;
            }
        });

        Fortify::loginView(function () {
            return view('app.auth.login');
        });
    }
}
