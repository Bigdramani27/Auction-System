<!DOCTYPE html>
<html lang="en">
<head>

  <title>Divanta Register</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/x-icon" href="../view/assets/images/logo/fav.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Libs CSS -->
  <link href="../view/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="../view/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
  <link href="../view/assets/libs/slick-carousel/slick/slick.css" rel="stylesheet" />
  <link href="../view/assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet" />
  <link href="../view/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
  <link href="../view/assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
  <link href="../view/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
  <link href="../view/assets/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet" />
  <link href="../view/assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <link rel="stylesheet" href="../view/assets/css/intlTelInput.css">
  <!-- Theme CSS -->
  <link rel="stylesheet" href="../view/assets/css/theme.min.css">
  </head>
  <style>
    .fa.fa-instagram {
  color: transparent;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  background-clip: text;
  -webkit-background-clip: text;
  }.testing{
              padding: 35px 35px;
              border-radius: 10px;
              -webkit-border-radius: 10px;
              -moz-border-radius: 10px;
              box-shadow: 0px 6px 18px 0px rgba(16, 5, 54, 0.17);
  }
  </style>
  <body>

    <!-- navigation -->
    <header>
      <div class="border-bottom shadow-sm">
      <div class="navbar navbar-light py-lg-4 pt-3 px-0 pb-0">
        <div class="container">
          <div class="row w-100 align-items-center g-lg-2 g-0">
            <div class="col-xxl-2 col-lg-3">
              <a class="navbar-brand d-none d-lg-block" href="index.html">
                <img src="../view/assets/images/logo/6.png" style="width:200px">
              </a>
              <div class="d-flex justify-content-between d-lg-none">
                <a class="navbar-brand" href="index.html">
                  <img src="../view/assets/images/logo/6.png" style="width:150px">
                </a>
                <div class="d-flex align-items-center lh-1">
                  <div class="list-inline me-4">
                    <div class="list-inline-item">
                      <a href="favorites.html" class="btn btn-dark btn-sm" ><i class="fa fa-money"
                        style="font-size:16px; color:white"> Sell</i> 
                    </a>
                    </div>
                    <div class="list-inline-item">
                      <a href="login" style="font-size:16px;">Register</a>
                    </div>
                    <div class="list-inline-item">
                      <a href="login" style="font-size:16px;">Login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-lg-5 d-none d-lg-block">
            </div>
           
            <div class="col-md-4 col-xxl-4 text-end d-none d-lg-block">
              <div class="list-inline">
                <div class="list-inline-item">
                <a href="seller_login.html"><i class="fas fa-store"
                    style="font-size:20px;"> Sell</i> 
                </a>
                </div>
                <div class="list-inline-item">
                  <a href="register.html" style="font-size:16px;">Register</a>
                </div>
                <div class="list-inline-item">
                  <a href="login.html" style="font-size:16px;">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </header>
    <main>
  <section class="my-lg-14 my-8">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
          <!-- img -->
          <img src="../view/assets/images/logo/11.png" alt="" class="img-fluid">
        </div>
        <!-- col -->
        <div class="col-12 col-md-6 offset-lg-1 col-lg-4">
          <!-- form -->
          <form class="testing">
            <div class="mb-lg-9 mb-5">
              <h1 class="mb-1 h2 fw-bold" style="text-align:center">Create an account</h1>
            </div>
            <div class="row g-3">
              <!-- col -->
              <div class="col-6">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div>
              <div class="col-6">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                  >
              </div>
              <div class="col-6">
                <label>Country</label>
                <select class="countrypicker form-select"></select>
              </div>
              <div class="col-6">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="eg. 4th Street Tesano"
                  >
              </div>
              <div class="col-12">
                <label>Email</label>
              <input type="email" class="form-control" id="email" placeholder="eg. test21@gmail.com">
              </div>
              <div class="col-12">
                <label>Phone number</label>
                <input type="tel" class="form-control" id="phone" size='100'placeholder="eg. +233 548342821">
                </div>
              <div class="col-6">
                <label>Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password"
              >
              </div>
              <div class="col-6">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm password"
                >
                </div> <p><small><input class="form-check-input" type="checkbox" required>&nbsp; By checking this, you agree to our <a href="#!"> Terms of Service</a> & <a href="#!">Privacy
                  Policy</a></small></p>
              <!-- btn -->
              <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">Register</button>
                <div>Already have an account? <a href="login.html">Login</a></div>
              </div>
                    
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  </main>
 <!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
          <div class="col-md-3">
            <h3 class="mb-4 text-white">Categories</h3>
            <ul class="nav flex-column border-top py-4">
              <li class="nav-item mb-2"><a href="#!" class="nav-link"><img src='../images/01.png' style="height:30px; width:30px"> Cars</span></a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"><img src='../images/02.png' style="height:30px; width:30px"> Jewelries</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"><img src='../images/03.png' style="height:30px; width:30px"> Watches</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"><img src='../images/04.png' style="height:30px; width:30px"> Electronics</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"><img src='../images/05.png' style="height:30px; width:30px"> Sports</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"><img src='../images/06.png' style="height:30px; width:30px"> Houses</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"><img src='../images/07.png' style="height:30px; width:30px"> Art</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="mb-4 text-white">Further Information</h3>
            <ul class="nav flex-column border-top py-4">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Want to donate?</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Want to be a seller?</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Want to Report?</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="mb-4 text-white">Get to know us</h3>
            <ul class="nav flex-column border-top py-4">
              <li class="nav-item mb-2"><a href="about.html" class="nav-link">Company</a></li>
              <li class="nav-item mb-2"><a href="about.html" class="nav-link">About</a></li>
              <li class="nav-item mb-2"><a href="contact.html" class="nav-link">Help Center</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="mb-4 text-white">Reach us on</h3>
            <ul class="nav flex-column border-top py-4">
              <li class="nav-item mb-2"><a href="https://wa.me/233553058208"><i class="fa fa-twitter fa-2x" style="color:#4169e1"></i> <span class='text-white'>Twitter</span></a></li>
              <li class="nav-item mb-2"><a href="https://wa.me/233553058208"><i class="fa fa-instagram fa-2x"></i><span class='text-white'>&nbsp; Instagram</span></a></li>
              <li class="nav-item mb-2">  <a href="https://wa.me/233553058208"><i class="fa fa-whatsapp fa-2x"style="color:green"></i> <span class='text-white'>&nbsp;WhatsApp</span></a></li>
            </ul>
          </div>
        
      </div>
    </div>
    <div class="border-top py-4">
      <div class="row align-items-center" >
        <div class="col-md-12" style="text-align:center;"><span class="text-white">2022 ?? Copyright - All Rights Reserved. |
         Created by <a href="mailto:alhassan.dramani@ashesi.edu.gh" style="color:yellow;">Dramani Alhassan</a></span></div>
      </div>
    </div>
</footer>
<script src="../view/assets/build/js/intlTelInput.js"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    utilsScript: "..view/assets/build/js/utils.js",
  });
</script>
<script src="//cdn.tutorialjinni.com/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script>
</body>
</html>