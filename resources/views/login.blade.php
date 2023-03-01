<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
      .Container {
        background: linear-gradient(to top right, #657faa 0%, #f9c64b 100%);
        position: absolute;
        width: 100%;
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <!-- CARD -->
    <div class="Container position-relative">
      <div class="card text-center mb-3 px-4 py-4 position-absolute top-50 start-50 translate-middle" style="width: 30rem">
        <div class="card-body">
          <h2 class="card-title mb-5" style="font-weight: bold">SIGN IN</h2>
          <!-- FORM LOGIN -->
          <form action="">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-2">
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" />
            </div>
            <div class="input-group mb-5 mr-5 text-end">
              <a href="" style="color: black">Forgot Password?</a>
            </div>
            <input class="btn btn-primary px-4" type="submit" value="LOGIN" />
          </form>
          <!-- END FORM LOGIN -->
        </div>
      </div>
    </div>
    <!-- End CARD -->
  </body>
</html>
