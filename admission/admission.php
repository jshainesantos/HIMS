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
  <div class="col-8 mt-5">
        <div class="card mt-5 pe-0">
          <div class="card-body m-1">
            <div class="d-flex justify-content-between mb-4">
              <h4>Doctors</h4>
              <div class="right d-flex">
                <form role="search">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
                <select class="ms-2 form-select form-select-sm" aria-label="Small select example">
                  <option selected>Order by</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>

            <ul class="nav nav-underline overflow-x-auto">
              <li class="nav-item">
                <a class="nav-link active text-success" aria-current="page" href="#">Internist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary " href="#">Gastroenterologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Nuerologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Cardiologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Pulmonologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Pediatricians</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Endoctronologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Otolaryngologists</a>
              </li>
            </ul>
            <table class="table table-striped mt-3 Add">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th class="text-center" scope="col">Name</th>
                  <th class="text-center" scope="col">No. Patients</th>
                  <th class="text-center" scope="col">Room Number</th>
                  <th class="text-center" scope="col">Availability</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-lg-1 bg-success text-white rounded-end-5 text-center">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item mt-3">
              <a class="mt-5 btn p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                <svg width="65" height="90" viewBox="0 0 65 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M1.58026 84V65.8182H5.42436V73.32H13.228V65.8182H17.0632V84H13.228V76.4893H5.42436V84H1.58026ZM24.0767 65.8182V84H20.2326V65.8182H24.0767ZM27.2394 65.8182H31.9802L36.9873 78.0341H37.2004L42.2075 65.8182H46.9482V84H43.2195V72.1658H43.0686L38.3634 83.9112H35.8243L31.1191 72.1214H30.9681V84H27.2394V65.8182ZM59.9787 71.0472C59.9077 70.3311 59.6029 69.7747 59.0643 69.3782C58.5257 68.9817 57.7947 68.7834 56.8714 68.7834C56.2441 68.7834 55.7144 68.8722 55.2823 69.0497C54.8503 69.2214 54.5188 69.4611 54.288 69.7688C54.0631 70.0766 53.9506 70.4258 53.9506 70.8164C53.9388 71.1419 54.0069 71.426 54.1548 71.6687C54.3087 71.9113 54.5188 72.1214 54.7852 72.299C55.0515 72.4706 55.3593 72.6216 55.7085 72.7518C56.0576 72.8761 56.4305 72.9826 56.8271 73.0714L58.4606 73.462C59.2537 73.6396 59.9817 73.8763 60.6445 74.1722C61.3074 74.4682 61.8815 74.8321 62.3668 75.2642C62.8522 75.6963 63.228 76.2053 63.4943 76.7912C63.7666 77.3771 63.9057 78.0489 63.9116 78.8065C63.9057 79.9192 63.6216 80.8839 63.0593 81.7006C62.503 82.5115 61.698 83.1418 60.6445 83.5916C59.5969 84.0355 58.3333 84.2575 56.8537 84.2575C55.3859 84.2575 54.1075 84.0326 53.0185 83.5827C51.9354 83.1329 51.089 82.4671 50.4794 81.5852C49.8757 80.6974 49.5591 79.5996 49.5295 78.2915H53.2493C53.2907 78.9012 53.4653 79.4102 53.7731 79.8185C54.0868 80.221 54.504 80.5258 55.0249 80.733C55.5516 80.9342 56.1464 81.0348 56.8093 81.0348C57.4603 81.0348 58.0256 80.9401 58.505 80.7507C58.9903 80.5613 59.3661 80.2979 59.6325 79.9606C59.8988 79.6232 60.032 79.2356 60.032 78.7976C60.032 78.3892 59.9106 78.0459 59.668 77.7678C59.4312 77.4896 59.082 77.2528 58.6204 77.0575C58.1647 76.8622 57.6054 76.6847 56.9425 76.5249L54.9627 76.0277C53.4298 75.6548 52.2195 75.0719 51.3317 74.2788C50.4439 73.4857 50.003 72.4174 50.0089 71.0739C50.003 69.973 50.2959 69.0112 50.8878 68.1886C51.4856 67.3659 52.3053 66.7237 53.3469 66.2621C54.3886 65.8004 55.5723 65.5696 56.8981 65.5696C58.2475 65.5696 59.4253 65.8004 60.4315 66.2621C61.4435 66.7237 62.2307 67.3659 62.793 68.1886C63.3552 69.0112 63.6452 69.9641 63.663 71.0472H59.9787Z"
                    fill="#9CCA9E" />
                  <path
                    d="M26.1358 2.72266L26.0186 3.67188C24.378 10.8789 28.4795 14.0617 28.4795 14.0617L29.7686 12.5383C29.7686 12.5383 26.9561 10.2227 27.6592 5.08984C32.4639 6.44922 34.4561 9.37891 35.1592 10.8086C30.003 12.6555 28.5967 17.5188 25.7842 21.1164L28.2452 20.6594L28.0108 24.3273C28.0108 24.3273 33.167 23.3078 36.0967 26.4016C36.6827 25.3938 37.0342 24.1867 36.7999 22.9797L36.4483 19.675C36.0967 19.5461 35.628 19.3234 35.1592 19.0422C33.753 18.1867 32.2295 16.8039 32.2295 16.8039C31.9952 16.5813 31.9952 16.1945 32.1124 15.8898C32.3467 15.5969 32.6983 15.4563 32.9327 15.5734C32.9327 15.5734 34.2217 15.9836 35.3936 16.3586C36.6827 16.8156 37.7374 18.0344 37.8545 19.4758C37.9717 20.4602 38.2061 21.6906 38.3233 22.7922C38.5577 24.5969 37.9717 26.4016 36.917 27.7961L37.7374 29.9406H42.1905L43.0108 27.7961C41.9561 26.4016 41.3702 24.5969 41.6045 22.7922C41.7217 21.6906 41.9561 20.4602 42.0733 19.4758C42.1905 18.0344 43.2452 16.8156 44.5342 16.3586C45.7061 15.9836 46.9952 15.5734 46.9952 15.5734C47.2295 15.4563 47.5811 15.5969 47.8155 15.8898C47.9327 16.1945 47.9327 16.5813 47.6983 16.8039C47.6983 16.8039 46.1749 18.1867 44.7686 19.0422C44.2999 19.3234 43.8311 19.5461 43.4795 19.675L43.128 22.9797C42.8936 24.1867 43.2452 25.3938 43.8311 26.4016C46.7608 23.3078 51.917 24.3273 51.917 24.3273L51.6827 20.6594L54.1436 21.1164C51.3311 17.5188 49.9249 12.6555 44.7686 10.8086C45.4717 9.37891 47.4639 6.44922 52.2686 5.08984C52.9717 10.2227 50.1592 12.5383 50.1592 12.5383L51.4483 14.0617C51.4483 14.0617 55.5499 10.8789 53.9092 3.67188L53.792 2.72266C48.7178 3.58047 43.7256 6.86758 40.9014 10.0938C40.2569 10.0785 39.671 10.0328 39.0264 10.0938C34.0108 6.02149 31.8428 3.51719 26.1358 2.72266ZM29.0303 26.7766C33.5069 33.0109 18.753 32.2375 11.0292 40.7805C7.96939 44.0617 7.21705 47.3781 7.98814 50.1906C9.42135 55.3469 16.4092 58.7453 24.8702 56.6359C30.7061 55.1125 36.1202 52.8859 40.667 51.9484C44.7803 51.0109 48.1436 51.3625 50.3116 54.7609L52.1045 54.175C51.7647 49.7219 50.417 46.1125 47.8272 43.9211C45.8585 42.257 43.1514 41.343 39.5186 41.4484C36.085 41.5422 31.796 42.5383 26.4874 44.6477C23.3233 45.7609 17.5225 47.8938 14.4874 46.1242C13.421 45.468 13.0928 44.3664 13.1749 43.2766C17.2061 49.3703 27.7178 40.1125 36.4366 39.093C36.4366 39.093 37.21 28.7453 29.0303 26.7766ZM51.1319 26.7766C44.9092 28.2297 43.6202 33.1164 43.4913 39.093C46.5967 39.0695 49.3389 41.8703 49.3389 41.8703C49.3389 41.8703 46.1749 30.3156 51.1319 26.7766ZM39.378 26.9289H40.5499C40.9014 26.9289 41.253 27.257 41.253 27.6672C41.253 28.0656 40.9014 28.3938 40.5499 28.3938H39.378C39.0264 28.3938 38.6749 28.0656 38.6749 27.6672C38.6749 27.257 39.0264 26.9289 39.378 26.9289ZM46.5733 45.4094C48.1788 46.7688 49.1749 48.7844 49.7139 51.2453C47.8624 49.8391 45.6124 49.3703 43.0225 49.6047C40.1983 49.8391 36.9405 50.7766 33.378 51.9484L36.4366 49.0188C33.1202 50.6594 30.2139 51.0109 27.6006 50.425L37.0811 45.7141L29.9092 47.0266C32.6983 44.6594 41.0655 40.9094 46.5733 45.4094Z"
                    fill="#9CCA9E" />
                </svg>

              </a>
            </li>

            <li class="nav-item mt-5">
              <svg width="60" height="60" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32.5" cy="32.5" r="32.5" fill="#C9E4CB" />
              </svg>

            </li>
            <p>STAFF NAME</p>
            <li class="nav-item mt-5">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                event_available
              </a>
            </li>
            <p>Admission</p>
            <li class="nav-item mt-4">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                clinical_notes
              </a>
            </li>
            <p>Patients</p>
            <li class="nav-item my-5 pt-3">
              <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white" href="#">
                logout
              </a>
              <p>Logout</p>
            </li>
          </ul>
        </div>
      </nav>

      <div class="col-3 mt-2 ps-5 pt-5">
        <div class="card text-center mb-3" style="width: 18rem;">
          <div class="card-body py-5 bg-success bg-opacity-75">
            <h5 class="card-text">date</h5>
            <h3 class="card-title">TIME</h3>
          </div>
        </div>
        <div class="card text-center mb-3" style="width: 18rem;">
          <div class="d-flex justify-content-around card-body py-5 bg-success bg-opacity-25">
            <h5 class="card-text"><svg width="112" height="112" viewBox="0 0 112 112" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="0.205078" y="0.620758" width="111.255" height="111.255" fill="url(#pattern0)" />
                <defs>
                  <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1132_11199" transform="scale(0.00195312)" />
                  </pattern>
                  <image id="image0_1132_11199" width="512" height="512"
                    xlink:href="data:image/png;base64,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" />
                </defs>
              </svg>
            </h5>
            <div class="right">
              <h1 class="card-title fw-bold">100</h1>
              <h3 class="card-title">Inpatient</h3>
            </div>

          </div>
        </div>
        <div class="card text-center mb-3" style="width: 18rem;">
          <div class="d-flex justify-content-around card-body py-5 bg-success bg-opacity-25">
            <h5 class="card-text"><svg width="113" height="114" viewBox="0 0 113 114" fill="none"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="0.03125" y="0.933594" width="112.522" height="112.522" fill="url(#pattern0)" />
                <defs>
                  <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_918_58" transform="scale(0.00195312)" />
                  </pattern>
                  <image id="image0_918_58" width="512" height="512"
                    xlink:href="data:image/png;base64,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" />
                </defs>
              </svg>

            </h5>
            <div class="right">
              <h1 class="card-title fw-bold">35</h1>
              <h3 class="card-title">Outpatient</h3>
            </div>

          </div>
        </div>
      </div>

      <div class="col-8 mt-5">
        <div class="card mt-5 pe-0">
          <div class="card-body m-1">
            <div class="d-flex justify-content-between mb-4">
              <h4>Doctors</h4>
              <div class="right d-flex">
                <form role="search">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
                <select class="ms-2 form-select form-select-sm" aria-label="Small select example">
                  <option selected>Order by</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>

            <ul class="nav nav-underline overflow-x-auto">
              <li class="nav-item">
                <a class="nav-link active text-success" aria-current="page" href="#">Internist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary " href="#">Gastroenterologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Nuerologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Cardiologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Pulmonologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Pediatricians</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Endoctronologist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary" href="#">Otolaryngologists</a>
              </li>
            </ul>
            <table class="table table-striped mt-3 Add">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th class="text-center" scope="col">Name</th>
                  <th class="text-center" scope="col">No. Patients</th>
                  <th class="text-center" scope="col">Room Number</th>
                  <th class="text-center" scope="col">Availability</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
                <tr>
                  <th scope="row">xx</th>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xxxxxx xxxxxx</td>
                  <td class="text-center">xxxxx</td>
                  <td class="text-center">xx</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>