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
<link rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-lg-1 bg-success p-0 text-white rounded-end-5 text-center">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item mt-5">
              <a class="btn p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                home_health
              </a>
            </li>
            <p>HIMS</p>
            <li class="nav-item mt-5">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined rounded-circle text-white"
                href="#">
                account_circle
              </a>
            </li>
            <p>STAFF NAME</p>
            <li class="nav-item mt-4">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                event_available
              </a>
            </li>
            <p>Admission</p>
            <li class="nav-item mt-3">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                clinical_notes
              </a>
            </li>
            <p>Patients</p>
            <li class="nav-item mt-3">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                local_hospital
              </a>
              <p>Specialist</p>
            </li>
            <li class="nav-item my-5">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                logout
              </a>
              <p>Logout</p>
            </li>
          </ul>
        </div>
      </nav>

      <div class="col-4">
        <ul class="nav nav-pills mt-5">
          <li class="nav-item">
            <a class="btn btn-light active p-5 bg-success" aria-current="page" href="#">
              TIME
            </a>
          </li>
          <span class="nav-item shadow rounded">
            <a class="btn btn-light p-5" href="#">
              Date
            </a>
          </span>
        </ul>

        <div class="row mt-5">
          <div class="col-6">
            <div class="card mt-3">
              <div class="card-body">
                <h1 class=" material-symbols-outlined">
                  inpatient
                </h1>
                <h2 class="card-title float-end">100</h2>
                <h6 class="card-subtitle mb-2 text-body-secondary">

                  In Patient
                </h6>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="card mt-3">
              <div class="card-body">
                <h5 class="card-title">20</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  Outpatient
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-7 mt-2">
        <button class="btn btn-success float-end">🛎️</button>
        <button class="btn btn-success float-end me-3">
          + Add Patient
        </button>

        <table class="table m-3 mt-5">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">No. Patients</th>
              <th scope="col">Room Number</th>
              <th scope="col">Clinic Hours</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
            <tr>
              <th scope="row">xx</th>
              <td>xxxxx</td>
              <td>xxxxxx xxxxxx</td>
              <td>xxxxx</td>
              <td>xx</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>