
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carshow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    include_once("config/connection.php");
?>
<footer>
        <div class="container-fluid">
          <footer class=" px-5 mt-5 border-top">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-lg-6 col-12 pt-2 footerlink">
                <img src="img/logo.png" alt="" width="150px" class="gym-logo">
                <p class="pt-1">Quick Links</p>
                <div class="links">
                <p>Are you planning on buying a new car? Well, we know that with so many car options available out there, it gets really difficult to find a good car which suits your need. Hence, we have put together a complete list of new cars.</p>
                </div>
                
              </div>
              <div class="col-xs-12 col-md-6 col-lg-6 col-12 py-5">
                  <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-12">
                  <h3 class="text-dark">carshow</h3>
                  <ul class="nav flex-column fs-6">
                    <li class="nav-item mb-2">
                      <a
                        href="./about.html"
                        class="nav-link p-0 text-body-secondary"
                        >About us</a
                      >
                    </li>
                    <li class="nav-item mb-2">
                      <a
                        href="./gallery.html"
                        class="nav-link p-0 text-body-secondary"
                        >Careers</a
                      >
                    </li>
                    <li class="nav-item mb-2">
                      <a
                        href="./contact.html"
                        class="nav-link p-0 text-body-secondary"
                        >Terms & Condition</a
                      >
                    </li>
                    <li class="nav-item mb-2">
                      <a
                        href="./contact.html"
                        class="nav-link p-0 text-body-secondary"
                        >Advertise</a
                      >
                    </li>
                  </ul>
                </div>
  
                <div class="col-xs-12 col-md-6 col-lg-6 col-12">
                  <h3 class="text-dark">GET IN TOUCH</h3>
                  <ul class="nav flex-column fs-6">
                    <li class="nav-item mb-2">
                      <a href="#" class="nav-link p-0 text-body-secondary"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-telephone-fill"
                          viewBox="0 0 16 16"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
                          /></svg>+91 9876543210</a
                      >
                    </li>
                    <li class="nav-item mb-2">
                      <a href="#" class="nav-link p-0 text-body-secondary">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-envelope-at-fill"
                          viewBox="0 0 16 16">
                          <path
                            d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"
                          />
                          <path
                            d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"
                          /></svg>info@gmail.com</a>
                    </li>
                  </ul>
                </div>
              </div>
              </div>
            </div>
          </footer>
        </div>
        <hr>
      </footer>
      <footer class="text-center my-1">
        Copyright &copy; carshow.com| All rights reserved
      </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/0e55dc6a03.js" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>