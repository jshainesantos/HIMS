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
        <div class="topContent">
            <div class="position-absolute top-0 end-0 mt-3 me-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Request Service
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="modalContent m-5 row">
                                    <h1 class="text-center">Add Patient</h1>
                                    <p class="text-center">is the patient inpatient or outpatient?</p>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body bg-success bg-opacity-75 text-center">
                                                <h1><svg width="70" height="70" viewBox="0 0 70 70" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <rect width="70" height="70" fill="url(#pattern0)" />
                                                        <defs>
                                                            <pattern id="pattern0"
                                                                patternContentUnits="objectBoundingBox" width="1"
                                                                height="1">
                                                                <use xlink:href="#image0_1132_22539"
                                                                    transform="scale(0.0078125)" />
                                                            </pattern>
                                                            <image id="image0_1132_22539" width="128" height="128"
                                                                xlink:href="data:image/png;base64,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" />
                                                        </defs>
                                                    </svg>
                                                </h1>
                                                <h3 class="text-light">Inpatient</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body bg-success bg-opacity-75 text-center">
                                                <h1><svg width="70" height="70" viewBox="0 0 70 70" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <rect width="70" height="70" fill="url(#pattern0)" />
                                                        <defs>
                                                            <pattern id="pattern0"
                                                                patternContentUnits="objectBoundingBox" width="1"
                                                                height="1">
                                                                <use xlink:href="#image0_1132_22543"
                                                                    transform="scale(0.0078125)" />
                                                            </pattern>
                                                            <image id="image0_1132_22543" width="128" height="128"
                                                                xlink:href="data:image/png;base64,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" />
                                                        </defs>
                                                    </svg>
                                                </h1>
                                                <h3 class="text-light">Outpatient</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-light"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.6286 15.9989C20.5508 15.9052 20.4744 15.8114 20.3994 15.7209C19.3682 14.4736 18.7443 13.7208 18.7443 10.1897C18.7443 8.36156 18.3069 6.86156 17.4449 5.73656C16.8093 4.90547 15.9501 4.275 14.8176 3.80906C14.803 3.80096 14.79 3.79032 14.7791 3.77766C14.3718 2.41359 13.2571 1.5 11.9999 1.5C10.7427 1.5 9.62849 2.41359 9.22115 3.77625C9.21027 3.78845 9.19744 3.79875 9.18318 3.80672C6.54036 4.89469 5.25599 6.98203 5.25599 10.1883C5.25599 13.7208 4.63302 14.4736 3.60083 15.7195C3.52583 15.81 3.44943 15.9019 3.37161 15.9975C3.17061 16.2399 3.04326 16.5348 3.00464 16.8473C2.96601 17.1598 3.01772 17.4769 3.15365 17.7609C3.44286 18.3703 4.05927 18.7486 4.76286 18.7486H19.2421C19.9424 18.7486 20.5546 18.3708 20.8447 17.7642C20.9813 17.4801 21.0335 17.1628 20.9952 16.8499C20.9569 16.537 20.8297 16.2417 20.6286 15.9989ZM11.9999 22.5C12.6773 22.4995 13.3418 22.3156 13.9232 21.9679C14.5045 21.6202 14.9809 21.1217 15.3018 20.5252C15.3169 20.4966 15.3244 20.4646 15.3234 20.4322C15.3225 20.3999 15.3133 20.3684 15.2966 20.3407C15.2799 20.313 15.2563 20.2901 15.2281 20.2742C15.2 20.2583 15.1682 20.25 15.1358 20.25H8.8649C8.83252 20.2499 8.80066 20.2582 8.77243 20.274C8.7442 20.2899 8.72055 20.3128 8.7038 20.3405C8.68704 20.3682 8.67774 20.3997 8.67682 20.4321C8.67588 20.4645 8.68335 20.4965 8.69849 20.5252C9.01936 21.1216 9.49567 21.6201 10.0769 21.9678C10.6581 22.3155 11.3226 22.4994 11.9999 22.5Z"
                            fill="#808080" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-lg-1 bg-success text-white rounded-end-5 text-center">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item mt-3">
                            <a class="mt-1 btn p-2 text-dark bg-opacity-25 material-symbols-outlined text-white"
                                href="#">
                                <svg width="65" height="90" viewBox="0 0 65 90" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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
                            <svg width="60" height="60" viewBox="0 0 65 65" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32.5" cy="32.5" r="32.5" fill="#C9E4CB" />
                            </svg>

                        </li>
                        <p>NURSE NAME</p>
                        <li class="nav-item mt-5">
                            <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white"
                                href="#">
                                event_available
                            </a>
                        </li>
                        <p>Patients</p>
                        <li class="nav-item mt-2">
                            <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white"
                                href="#">
                                experiment
                            </a>
                        </li>
                        <p>Laboratory</p>
                        <li class="nav-item mt-2">
                            <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white"
                                href="#">
                                rib_cage
                            </a>
                        </li>
                        <p>Imaging Services</p>
                        <li class="nav-item my-4 pt-2">
                            <a class="btn bg-light p-2 text-dark bg-opacity-25 material-symbols-outlined text-white"
                                href="#">
                                logout
                            </a>
                            <p>Logout</p>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-3 mt-5 pt-5">
                <div class="d-flex">
                    <div class="back-btn">
                        <span class="btn"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_559_1453" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="40" height="40">
                                    <rect width="40" height="40" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_559_1453)">
                                    <path
                                        d="M19.6693 21.6673H25.0026C25.4748 21.6673 25.8707 21.5076 26.1901 21.1882C26.5095 20.8687 26.6693 20.4729 26.6693 20.0007C26.6693 19.5284 26.5095 19.1326 26.1901 18.8132C25.8707 18.4937 25.4748 18.334 25.0026 18.334H19.6693L21.1693 16.834C21.4748 16.5284 21.6276 16.1395 21.6276 15.6673C21.6276 15.1951 21.4748 14.8062 21.1693 14.5007C20.8637 14.1951 20.4748 14.0423 20.0026 14.0423C19.5304 14.0423 19.1415 14.1951 18.8359 14.5007L14.5026 18.834C14.1693 19.1673 14.0026 19.5562 14.0026 20.0007C14.0026 20.4451 14.1693 20.834 14.5026 21.1673L18.8359 25.5007C19.1415 25.8062 19.5304 25.959 20.0026 25.959C20.4748 25.959 20.8637 25.8062 21.1693 25.5007C21.4748 25.1951 21.6276 24.8062 21.6276 24.334C21.6276 23.8618 21.4748 23.4729 21.1693 23.1673L19.6693 21.6673ZM20.0026 36.6673C17.697 36.6673 15.5304 36.2298 13.5026 35.3548C11.4748 34.4798 9.71094 33.2923 8.21094 31.7923C6.71094 30.2923 5.52344 28.5284 4.64844 26.5007C3.77344 24.4729 3.33594 22.3062 3.33594 20.0007C3.33594 17.6951 3.77344 15.5284 4.64844 13.5007C5.52344 11.4729 6.71094 9.70898 8.21094 8.20898C9.71094 6.70898 11.4748 5.52148 13.5026 4.64648C15.5304 3.77148 17.697 3.33398 20.0026 3.33398C22.3082 3.33398 24.4748 3.77148 26.5026 4.64648C28.5304 5.52148 30.2943 6.70898 31.7943 8.20898C33.2943 9.70898 34.4818 11.4729 35.3568 13.5007C36.2318 15.5284 36.6693 17.6951 36.6693 20.0007C36.6693 22.3062 36.2318 24.4729 35.3568 26.5007C34.4818 28.5284 33.2943 30.2923 31.7943 31.7923C30.2943 33.2923 28.5304 34.4798 26.5026 35.3548C24.4748 36.2298 22.3082 36.6673 20.0026 36.6673Z"
                                        fill="#418363" />
                                </g>
                            </svg></span>
                    </div>

                    <div class="bg-light rounded-bottom-4 shadow">
                        <div class="card-body bg-success bg-opacity-25 rounded-4 p-4">
                            <h3 class="fw-bold">Bob G. Cruz</h3>
                            <h6 class="fw-bold">123ABC</h6>
                            <div class="d-flex">
                                <p class="fw-bold me-5 pe-5">23</p>
                                <p class="fw-bold">Female</p>
                            </div>
                            <div class="d-flex justify-content-evenly">
                                <div class="left me-5">
                                    <p>Weight</p>
                                    <p class="text-center">xx</p>
                                </div>
                                <div class="right">
                                    <p>Blood Pressure</p>
                                    <p class="text-center">xx</p>
                                </div>
                            </div>
                        </div>

                        <div class="bottom">
                            <h5 class="fw-bold ms-4 mt-4">Patient Information</h5>
                            <div class="infos px-4">
                                <div class="d-flex">
                                    <p>Birth Date:</p>
                                    <p></p>
                                </div>
                                <div class="d-flex">
                                    <p>Contact No:</p>
                                    <p></p>
                                </div>
                                <div class="d-flex">
                                    <p>Address:</p>
                                    <p></p>
                                </div>
                            </div>
                            <h5 class="fw-bold ms-4 mt-2">Person In-charge Information</h5>
                            <div class="infos px-4">
                                <div class="d-flex">
                                    <p>Infos:</p>
                                    <p></p>
                                </div>
                                <div class="d-flex">
                                    <p>Infos:</p>
                                    <p></p>
                                </div>
                                <div class="d-flex">
                                    <p>Infos:</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8 mt-5">
                <div class="card mt-5 pe-0">
                    <div class="card-body m-1">
                        <div class="d-flex justify-content-between mb-4">
                            <h4>Laboratory Results</h4>
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
                                <a class="nav-link active text-success" href="#">Chemistry</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="#">Hematology Procedures</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="#">BB-IS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="#">Parasitology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="#">Microbiology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="#">Microscopy</a>
                            </li>
                        </ul>
                        <table class="table table-striped mt-3 Add">
                            <thead>
                                <tr>
                                    <th scope="col">File Name</th>
                                    <th class="text-center" scope="col">Date Performed</th>
                                    <th class="text-center" scope="col">Time Performed</th>
                                    <th class="text-center" scope="col">Medtech on duty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="material-symbols-outlined mt-3 ms-2 text-success">image
                                        </span></th>
                                    <td class="text-center">xxxxx</td>
                                    <td class="text-center">xxxxxx xxxxxx</td>
                                    <td class="text-center">xxxxx</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="material-symbols-outlined mt-3 ms-2 text-success">image
                                        </span></th>
                                    <td class="text-center">xxxxx</td>
                                    <td class="text-center">xxxxxx xxxxxx</td>
                                    <td class="text-center">xxxxx</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="material-symbols-outlined mt-3 ms-2 text-success">image
                                        </span></th>
                                    <td class="text-center">xxxxx</td>
                                    <td class="text-center">xxxxxx xxxxxx</td>
                                    <td class="text-center">xxxxx</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="material-symbols-outlined mt-3 ms-2 text-success">image
                                        </span></th>
                                    <td class="text-center">xxxxx</td>
                                    <td class="text-center">xxxxxx xxxxxx</td>
                                    <td class="text-center">xxxxx</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="material-symbols-outlined mt-3 ms-2 text-success">image
                                        </span></th>
                                    <td class="text-center">xxxxx</td>
                                    <td class="text-center">xxxxxx xxxxxx</td>
                                    <td class="text-center">xxxxx</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="material-symbols-outlined mt-3 ms-2 text-success">image
                                        </span></th>
                                    <td class="text-center">xxxxx</td>
                                    <td class="text-center">xxxxxx xxxxxx</td>
                                    <td class="text-center">xxxxx</td>
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