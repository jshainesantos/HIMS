<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<body>

      <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="col-8">
          <div class="card shadow p-5">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-6">
                  <img src="" alt="" />
                </div>
                <div class="col-6">
                  <h3 class="text-center fw-bold pb-3">
                    Hospital Information Management System
                  </h3>

                  <input
                    type="email"
                    class="form-control mb-3"
                    placeholder="Email Address"
                  />
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                  />

                  <div class="remember-forgot d-flex align-items-center justify-content-between mt-3">
                    <div class="form-check form-check-inline">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="rememberMe"
                      />
                      <label
                        class="form-check-label mb-3"
                        htmlFor="rememberMe"
                      >
                        Remember me
                      </label>
                    </div>
                    <a
                      class="form-check-label mb-3 text-decoration-none"
                      htmlFor="rememberMe"
                    >
                      Forgot Password?
                    </a>
                  </div>

                  <div class="d-grid gap-2">
                    <button class="btn btn-success" type="button">
                      Sign In
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 


</body>
</html>