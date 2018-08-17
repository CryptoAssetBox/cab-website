
<?php include 'header.php';  ?>
    <title>Floating labels example for Bootstrap</title>
    <link rel="stylesheet" href="assets/default/css/login.css">

  </head>

  <body>
    <section class="mbr-fullscreen" id="login-panel">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="img-fluid">
              <div class="text-center mb-4">
                      <img class="mb-4" src="assets/images/logo-primary.svg" alt="" width="82" height="82">
                      <h1 class="h3 mb-3 font-weight-normal">Ctypto Asset Box</h1>
                    </div>
            </div>
            <ul class="nav nav-tabs border-0 align-center d-flex" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registration</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form class="form-signin">
                   

                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
                  </form>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form class="form-signin">
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputEmail">Username</label>
                    </div>

                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>
                    <div class="form-label-group">
                      <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required>
                      <label for="inputConPassword">Confirm Password</label>
                    </div>

                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="btn btn-lg btn-success btn-block" type="submit">Sign up</button>

                    <p class="mt-5 mb-3 text-muted text-center">© Copyright <?php echo date("Y"); ?> CryptoAssetBox.All Rights Reserved.</p>
                  </form>

              </div>
            </div>
            
          </div>
        </div>
      </div>
      
    </section>
    
<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script src="assets/aos/dist/aos.js"></script>
  <script src="assets/default/js/default.js"></script>
  
  
  <script>
      //document.addEventListener('contextmenu', event => event.preventDefault());

  </script>
  <script>
      AOS.init();
  </script>
</body>
</html>
