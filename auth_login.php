<!--
=========================================================
* Soft UI Dashboard PRO - v1.1.1
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-dashboard-pro 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <title>
    WEB Accounting Management
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.1.1" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Masukan email dan password anda untuk masuk</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Masuk</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                <img src="/assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                <div class="position-relative">
                  <img class="max-width-500 w-100 position-relative z-index-2" src="/assets/img/illustrations/chat.png" alt="chat-img">
                </div>
                <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
                <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Kanban scripts -->
  <script src="/assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="/assets/js/plugins/jkanban/jkanban.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/soft-ui-dashboard.min.js?v=1.1.1"></script>
</body>

</html>