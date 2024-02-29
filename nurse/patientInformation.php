<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<body>
    <div class="container-fluid">
        <div class="topContent">
            <div class="position-absolute top-0 end-0 mt-3 me-3">
                <!-- Button trigger modal -->
        <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Request Service
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
              <div class="modal-body">
                <div class="modalContent m-5 row">
                  <h1 class="text-center fw-bold">Request for a service</h1>
                  <p class="text-center">Choose which service to send request to.</p>
                  <div class="col">
                    <div class="card">
                      <div class="btn card-body bg-success bg-opacity-75 text-center">
                        <svg width="55" height="55" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M1.91369 15.9424C1.20535 15.9424 0.701882 15.6264 0.403271 14.9945C0.104659 14.3625 0.177576 13.7757 0.622021 13.234L5.24702 7.60905V2.60905H4.41369C4.17758 2.60905 3.97966 2.52919 3.81994 2.36947C3.66022 2.20974 3.58035 2.01183 3.58035 1.77572C3.58035 1.53961 3.66022 1.34169 3.81994 1.18197C3.97966 1.02224 4.17758 0.942383 4.41369 0.942383H11.0804C11.3165 0.942383 11.5144 1.02224 11.6741 1.18197C11.8338 1.34169 11.9137 1.53961 11.9137 1.77572C11.9137 2.01183 11.8338 2.20974 11.6741 2.36947C11.5144 2.52919 11.3165 2.60905 11.0804 2.60905H10.247V7.60905L14.872 13.234C15.3165 13.7757 15.3894 14.3625 15.0908 14.9945C14.7922 15.6264 14.2887 15.9424 13.5804 15.9424H1.91369ZM3.58035 13.4424H11.9137L9.08035 10.109H6.41369L3.58035 13.4424Z"
                            fill="white" />
                        </svg>

                        <h6 class="text-light mt-3">Laboratory Services</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card">
                      <div class="btn card-body bg-success bg-opacity-75 text-center">
                        <svg width="55" height="55" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.58594 59.1673C7.15538 59.1673 5.08941 58.3166 3.38802 56.6152C1.68663 54.9138 0.835938 52.8479 0.835938 50.4173C0.835938 49.5909 1.11545 48.8982 1.67448 48.3392C2.23351 47.7802 2.92622 47.5006 3.7526 47.5006C4.57899 47.5006 5.2717 47.7802 5.83073 48.3392C6.38976 48.8982 6.66927 49.5909 6.66927 50.4173C6.66927 51.2437 6.94878 51.9364 7.50781 52.4954C8.06684 53.0545 8.75955 53.334 9.58594 53.334C10.3151 53.334 11.1293 53.1152 12.0286 52.6777C12.928 52.2402 13.8637 51.6083 14.8359 50.7819C15.8082 49.9555 16.7682 49.0197 17.7161 47.9746C18.6641 46.9295 19.5998 45.7993 20.5234 44.584C22.3707 42.1048 23.9262 39.5527 25.1901 36.9277C26.454 34.3027 27.0859 31.9937 27.0859 30.0006V3.75065C27.0859 2.92426 27.3655 2.23155 27.9245 1.67253C28.4835 1.1135 29.1762 0.833984 30.0026 0.833984C30.829 0.833984 31.5217 1.1135 32.0807 1.67253C32.6398 2.23155 32.9193 2.92426 32.9193 3.75065V30.0006C32.9193 31.9937 33.5512 34.3027 34.8151 36.9277C36.079 39.5527 37.6345 42.1048 39.4818 44.584C40.4054 45.7993 41.3411 46.9295 42.2891 47.9746C43.237 49.0197 44.197 49.9555 45.1693 50.7819C46.1415 51.6083 47.0773 52.2402 47.9766 52.6777C48.8759 53.1152 49.6901 53.334 50.4193 53.334C51.2457 53.334 51.9384 53.0545 52.4974 52.4954C53.0564 51.9364 53.3359 51.2437 53.3359 50.4173C53.3359 49.5909 53.6154 48.8982 54.1745 48.3392C54.7335 47.7802 55.4262 47.5006 56.2526 47.5006C57.079 47.5006 57.7717 47.7802 58.3307 48.3392C58.8898 48.8982 59.1693 49.5909 59.1693 50.4173C59.1693 52.8479 58.3186 54.9138 56.6172 56.6152C54.9158 58.3166 52.8498 59.1673 50.4193 59.1673C49.2526 59.1673 47.9279 58.827 46.4453 58.1465C44.9627 57.4659 43.4436 56.518 41.888 55.3027C40.3325 54.0875 38.7891 52.6656 37.2578 51.0371C35.7266 49.4086 34.2804 47.6465 32.9193 45.7506C32.1901 44.7298 31.6189 44.0371 31.2057 43.6725C30.7925 43.3079 30.3915 43.1256 30.0026 43.1256C29.6137 43.1256 29.2127 43.3079 28.7995 43.6725C28.3863 44.0371 27.8151 44.7298 27.0859 45.7506C25.7248 47.6465 24.2786 49.4086 22.7474 51.0371C21.2161 52.6656 19.6727 54.0875 18.1172 55.3027C16.5616 56.518 15.0425 57.4659 13.5599 58.1465C12.0773 58.827 10.7526 59.1673 9.58594 59.1673ZM11.0443 49.7611L4.48177 44.4381C3.80122 43.9034 3.26649 43.2593 2.8776 42.5059C2.48872 41.7524 2.29427 40.9381 2.29427 40.0631C2.29427 39.1881 2.46441 38.3618 2.80469 37.584C3.14497 36.8062 3.65538 36.15 4.33594 35.6152C4.82205 35.2263 5.35677 35.0441 5.9401 35.0684C6.52344 35.0927 7.00955 35.3479 7.39844 35.834C7.78733 36.3201 7.96962 36.867 7.94531 37.4746C7.92101 38.0822 7.6658 38.5805 7.17969 38.9694C7.08246 39.0666 6.97309 39.2125 6.85156 39.4069C6.73003 39.6013 6.66927 39.8201 6.66927 40.0631C6.66927 40.2576 6.70573 40.4399 6.77865 40.61C6.85156 40.7802 6.98524 40.9381 7.17969 41.084L14.5443 46.9173C13.8637 47.5493 13.2318 48.1083 12.6484 48.5944C12.0651 49.0805 11.5304 49.4694 11.0443 49.7611ZM18.7734 42.3236L8.85677 34.3756C8.17621 33.8409 7.64149 33.1847 7.2526 32.4069C6.86372 31.6291 6.66927 30.8027 6.66927 29.9277C6.66927 29.0527 6.83941 28.2142 7.17969 27.4121C7.51996 26.61 8.03038 25.9416 8.71094 25.4069C9.19705 25.018 9.74392 24.8479 10.3516 24.8965C10.9592 24.9451 11.4575 25.2125 11.8464 25.6986C12.2352 26.1847 12.4054 26.7194 12.3568 27.3027C12.3082 27.8861 12.0408 28.3722 11.5547 28.7611C11.4089 28.8583 11.2873 29.0284 11.1901 29.2715C11.0929 29.5145 11.0443 29.7576 11.0443 30.0006C11.0443 30.1951 11.0807 30.3774 11.1536 30.5475C11.2266 30.7177 11.3602 30.8757 11.5547 31.0215L21.2526 38.7506C20.8637 39.3826 20.4627 39.9902 20.0495 40.5736C19.6363 41.1569 19.2109 41.7402 18.7734 42.3236ZM23.8047 32.9173L13.2318 24.3861C12.5512 23.8513 12.0165 23.1708 11.6276 22.3444C11.2387 21.518 11.0443 20.6673 11.0443 19.7923C11.0443 18.8687 11.2387 18.018 11.6276 17.2402C12.0165 16.4625 12.5512 15.7819 13.2318 15.1986C13.6693 14.8097 14.1918 14.6395 14.7995 14.6882C15.4071 14.7368 15.9054 15.0041 16.2943 15.4902C16.6832 15.9763 16.8533 16.5111 16.8047 17.0944C16.7561 17.6777 16.4887 18.1638 16.0026 18.5527C15.9054 18.65 15.7839 18.8201 15.638 19.0632C15.4922 19.3062 15.4193 19.5736 15.4193 19.8652C15.4193 19.9625 15.6137 20.327 16.0026 20.959L24.1693 27.5944V30.0006C24.1693 30.4868 24.1328 30.9729 24.0599 31.459C23.987 31.9451 23.9019 32.4312 23.8047 32.9173ZM24.1693 19.3548L17.4609 13.7402C16.7804 13.2055 16.27 12.5614 15.9297 11.8079C15.5894 11.0545 15.4193 10.2645 15.4193 9.43815C15.4193 7.8826 15.9783 6.54579 17.0964 5.42773C18.2144 4.30968 19.5512 3.75065 21.1068 3.75065C21.8845 3.75065 22.5894 3.87218 23.2214 4.11523C23.8533 4.35829 24.1693 4.96593 24.1693 5.93815C24.1693 6.91037 23.8533 7.51801 23.2214 7.76107C22.5894 8.00412 21.8845 8.12565 21.1068 8.12565C20.7179 8.12565 20.4019 8.27148 20.1589 8.56315C19.9158 8.85482 19.7943 9.17079 19.7943 9.51107C19.7943 9.70551 19.8307 9.87565 19.9036 10.0215C19.9766 10.1673 20.0859 10.2888 20.2318 10.3861L24.1693 13.6673V19.3548ZM36.2005 32.9173C36.1033 32.4312 36.0182 31.9451 35.9453 31.459C35.8724 30.9729 35.8359 30.4868 35.8359 30.0006V27.5944L44.0026 20.959C44.197 20.8132 44.3915 20.4486 44.5859 19.8652C44.5859 19.5736 44.513 19.3062 44.3672 19.0632C44.2214 18.8201 44.0998 18.65 44.0026 18.5527C43.5165 18.1638 43.2491 17.6777 43.2005 17.0944C43.1519 16.5111 43.322 15.9763 43.7109 15.4902C44.0998 15.0041 44.5981 14.7368 45.2057 14.6882C45.8134 14.6395 46.3602 14.8097 46.8464 15.1986C47.5269 15.7819 48.0495 16.4746 48.4141 17.2767C48.7786 18.0788 48.9609 18.9173 48.9609 19.7923C48.9609 20.6673 48.7665 21.5059 48.3776 22.3079C47.9887 23.11 47.454 23.7784 46.7734 24.3132L36.2005 32.9173ZM35.8359 19.3548V13.6673L39.7734 10.3861C39.9193 10.2888 40.0286 10.1673 40.1016 10.0215C40.1745 9.87565 40.2109 9.70551 40.2109 9.51107C40.2109 9.12218 40.0894 8.79405 39.8464 8.52669C39.6033 8.25933 39.2873 8.12565 38.8984 8.12565C38.1207 8.12565 37.4158 8.00412 36.7839 7.76107C36.1519 7.51801 35.8359 6.91037 35.8359 5.93815C35.8359 4.96593 36.1519 4.35829 36.7839 4.11523C37.4158 3.87218 38.1207 3.75065 38.8984 3.75065C40.454 3.75065 41.7908 4.30968 42.9089 5.42773C44.0269 6.54579 44.5859 7.8826 44.5859 9.43815C44.5859 10.2645 44.4158 11.0545 44.0755 11.8079C43.7352 12.5614 43.2248 13.2055 42.5443 13.7402L35.8359 19.3548ZM41.2318 42.3236C40.7943 41.7402 40.3689 41.1447 39.9557 40.5371C39.5425 39.9295 39.1415 39.3097 38.7526 38.6777L48.3776 30.9486C48.5234 30.8513 48.6936 30.4868 48.888 29.8548C48.888 29.7576 48.7422 29.393 48.4505 28.7611C47.9644 28.3722 47.697 27.8739 47.6484 27.2663C47.5998 26.6586 47.77 26.1118 48.1589 25.6257C48.5477 25.1395 49.0339 24.8722 49.6172 24.8236C50.2005 24.775 50.7352 24.9451 51.2214 25.334C51.9019 25.8687 52.4245 26.5371 52.7891 27.3392C53.1536 28.1413 53.3359 28.9798 53.3359 29.8548C53.3359 30.7298 53.1415 31.5684 52.7526 32.3704C52.3637 33.1725 51.829 33.8409 51.1484 34.3756L41.2318 42.3236ZM48.9609 49.7611C48.4748 49.4694 47.9401 49.0805 47.3568 48.5944C46.7734 48.1083 46.1415 47.5493 45.4609 46.9173L52.8255 41.084C52.9714 40.9868 53.1415 40.6465 53.3359 40.0631C53.3359 39.8201 53.2873 39.6013 53.1901 39.4069C53.0929 39.2125 52.9957 39.0666 52.8984 38.9694C52.4123 38.5805 52.145 38.0822 52.0964 37.4746C52.0477 36.867 52.2179 36.3201 52.6068 35.834C52.9957 35.3479 53.4818 35.0927 54.0651 35.0684C54.6484 35.0441 55.1832 35.2263 55.6693 35.6152C56.3498 36.15 56.8602 36.8062 57.2005 37.584C57.5408 38.3618 57.7109 39.1881 57.7109 40.0631C57.7109 40.9381 57.5286 41.7524 57.1641 42.5059C56.7995 43.2593 56.2769 43.9034 55.5964 44.4381L48.9609 49.7611Z"
                            fill="white" />
                        </svg>
                        <h6 class="text-light mt-3">Imaging Services</h6>
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
                <div class="card mt-5 pe-0 shadow rounded-4">
                    <div class="row overflow-auto mx-4" style="max-height: 37rem;">

                        <!-- Patient Complete History -->
                        <div class="row g-0">
                            <div class="d-flex justify-content-between mt-4">
                                <h5>Patient Complete History</h5>
                                <div class="btn btn-success rounded-pill px-4">Edit</div>
                            </div>
                            <div class="col-6 col-md-4 mt-3">Complete History:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Past Medical History:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Previous History:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Family History:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Personal/Social History:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">For Obsterical History:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Pedriatic Medical History:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Review of Systems:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Clinical Impression:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Work Up:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <h6 class="mt-5">Current Medications</h6>
                            <div class="col-6 col-md-4 mt-3">Name of Medication and dosage:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Frequency:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <div class="row g-0">
                            <div class="col-6 col-md-4 mt-3">Prescribing Physician:</div>
                            <div class="col-sm-6 col-md-8 mt-3">Details</div>
                        </div>

                        <!-- Nurses Remarks -->
                        <div class="row g-0 nurse-remarks mt-4">
                            <div class="d-flex justify-content-between mt-4 mb-2">
                                <h5>Nurses Remarks</h5>
                                <div class="btn btn-success rounded-pill">Add Remark</div>
                            </div>
                            <p class="fw-bold">Vital Signs</p>

                            <div class="row g-0">
                                <div class="col">
                                    <div class="card bg-light me-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="p">Temperature:</div>
                                                    <div class="p">Heart Rate:</div>
                                                    <div class="p">Pulse:</div>
                                                </div>
                                                <div class="col">
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                </div>
                                                <div class="col">
                                                    <div class="p">Blood Pressure:</div>
                                                    <div class="p">Respiratory Rate:</div>
                                                    <div class="p">Oxygen:</div>
                                                    <br>
                                                    <div class="d-flex text-secondary">
                                                        <small>Submitted by:</small>
                                                        <!-- <small class="ms-1">Details here</small> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="p">Temperature:</div>
                                                    <div class="p">Heart Rate:</div>
                                                    <div class="p">Pulse:</div>
                                                </div>
                                                <div class="col">
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                </div>
                                                <div class="col">
                                                    <div class="p">Blood Pressure:</div>
                                                    <div class="p">Respiratory Rate:</div>
                                                    <div class="p">Oxygen:</div>
                                                    <br>
                                                    <div class="d-flex text-secondary">
                                                        <small>Submitted by:</small>
                                                        <!-- <small class="ms-1">Details here</small> -->
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                    <div class="p">Details</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row g-0">
                                <h6 class="mt-4">Medications, Treatment, & etc.</h6>
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button bg-light" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                                aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                11:00 PM - 7:00 AM Shift <span
                                                    class="badge text-bg-success ms-2">New</span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <h6>
                                                    Medication
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>

                                                <h6>
                                                    Treatment
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>
                                                <h6>
                                                    Medication
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>
                                                <h6>
                                                    Notes
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-light" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                3:00 PM - 11:00 AM Shift
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <h6>
                                                    Medication
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>

                                                <h6>
                                                    Treatment
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>
                                                <h6>
                                                    Medication
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>
                                                <h6>
                                                    Notes
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-light" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                                aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                7:00 AM - 3:00 PM Shift
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <h6>
                                                    Medication
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>

                                                <h6>
                                                    Treatment
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>
                                                <h6>
                                                    Medication
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>
                                                <h6>
                                                    Notes
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                    exercitationem, excepturi nulla repellendus voluptatem enim
                                                    voluptatum
                                                    doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                    consectetur velit quam iusto autem aut.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Progress Notes -->
                        <div class="row g-0 progress-notes mt-4">
                            <div class="d-flex justify-content-between mt-4 mb-2">
                                <h5>Progress Notes</h5>
                                <div class="btn btn-success rounded-pill">Add Progress Notes</div>
                            </div>

                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                            aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            11:00 PM - 7:00 AM Shift <span class="badge text-bg-success ms-2">New</span>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <h6>
                                                Focus
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                exercitationem, excepturi nulla repellendus voluptatem enim
                                                voluptatum
                                                doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                consectetur velit quam iusto autem aut.</p>

                                            <h6>
                                                Notes
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                exercitationem, excepturi nulla repellendus voluptatem enim
                                                voluptatum
                                                doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                consectetur velit quam iusto autem aut.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            3:00 PM - 11:00 AM Shift
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <h6>
                                                Focus
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                exercitationem, excepturi nulla repellendus voluptatem enim
                                                voluptatum
                                                doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                consectetur velit quam iusto autem aut.</p>

                                            <h6>
                                                Notes
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                exercitationem, excepturi nulla repellendus voluptatem enim
                                                voluptatum
                                                doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                consectetur velit quam iusto autem aut.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-4">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            7:00 AM - 3:00 PM Shift
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <h6>
                                                Focus
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                exercitationem, excepturi nulla repellendus voluptatem enim
                                                voluptatum
                                                doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                consectetur velit quam iusto autem aut.</p>

                                            <h6>
                                                Notes
                                            </h6>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                                                exercitationem, excepturi nulla repellendus voluptatem enim
                                                voluptatum
                                                doloribus perspiciatis aut, aspernatur, nemo earum. Cumque illum
                                                consectetur velit quam iusto autem aut.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
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