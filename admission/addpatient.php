<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<body>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-lg-1 bg-success sidebar p-0">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="" href="#">
                HIMS
              </a>
            </li>
            <li class="nav-item">
              <a class="" href="#">
                Staff Name
              </a>
            </li>
            <li class="nav-item">
              <a class="" href="#">
                Admission
              </a>
            </li>
            <li class="nav-item">
              <a class="" href="#">
                Patients
              </a>
            </li>
            <li class="nav-item">
              <a class="" href="#">
                Specialist
              </a>
            </li>
            <li class="nav-item">
              <a class="" href="#">
                Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="col-6 mt-5">
        <h1>Add Patient</h1>

        <div class="row m-4 shadow">
          <h5>I. Patient Information</h5>
          <div class="col">

            <h6>First Name</h6>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            <h6>Birth Date</h6>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            <h6>Contact Number</h6>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col">
            <h6>Last Name</h6>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            <h6>Gender</h6>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            <h6>Address</h6>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>

        <div class="row m-4 shadow">
          <h5>II. Person In Charge Information</h5>
          <div class="col">

            <h6>First Name</h6>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            <h6>Relationship to Patient</h6>
            <input type="text" class="form-control" placeholder="Relationship" aria-label="First name">

          </div>
          <div class="col">
            <h6>Last Name</h6>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            <h6>Contact Number</h6>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>

        <div class="row m-4 shadow">
          <h5>III. Admit Person Information</h5>
          <div class="col">

            <h6>First Name</h6>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            <h6>Contact Number</h6>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">

          </div>
          <div class="col">
            <h6>Last Name</h6>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
          </div>
        </div>
      </div>


    </div>
  </div>

</body>

</html>