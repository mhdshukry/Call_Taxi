<html>
<head>
    <meta charset="utf-8">
    <title>Call Taxi</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="../assets/Js/login.js"></script>

</head>

  <body class="login-body">
    <div class="row">
      <div class="input-cart col s12 m10 push-m1 z-depth-2 grey lighten-5">
        <div class="col s12 m5 login">
          <h4 class="center">Log in</h4>
          <br>
          <form action="check.php" method="post" autocomplete="off">
            <div class="row">
              <div class="input-field">
                <input type="text" id="user" name="username" class="validate" required="required" placeholder="Username">
                <label for="user">
                  <i class="material-icons">person</i>                </label>
              </div>  
            </div>
            <div class="row">
              <div class="input-field">
                <input type="password" id="pass" name="password" class="validate" required="required" placeholder="Password">
                <label for="pass">
                <i class="material-icons">lock</i>
                </label>
              </div>  
            </div>
            <div class="row">
              <div class="switch col s6">
                <label>
                  <input type="checkbox">
                  <span class="lever"></span>
                  Remember Me
                </label>
              </div>
              <div class="col s6">
                <button type="submit" name="login" class="btn waves-effect waves-light blue right">Log in</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Signup form -->
        <div class="col s12 m7 signup">
        <div class="signupForm">
          <h4 class="center">Sign up</h4>
          <br>
          <form action="regCheck.php" name="signup" method="post" autocomplete="off">
            <div class="row">
              <div class="input-field col s12 m6">
                <input type="text" id="name-picked" name="namepicked" class="validate" required="required" placeholder="Enter a username">
                <label for="name-picked">
                       <i class="material-icons">person_add</i>       
                </label>
              </div>
              <div class="input-field col s12 m6">
                <input type="password" id="pass-picked" name="passpicked" class="validate" required="required" placeholder="Password">
                <label for="pass-picked">
                  <i class="material-icons">lock</i>                    </label>
              </div>  
            </div>
            <div class="row">
              <div class="input-field email">
                <div class="col s12">
                  <input type="text" id="email" name="email" class="validate" required="required" placeholder="Enter your email">
                  <label for="email">
                    <i class="material-icons">mail</i> 
                  </label>
                </div>
              </div>  
            </div>
          </form>
          <div class="row">
            <button type="submit" name="btn-signup" class="btn blue right waves-effect waves-light">Sign Up</button>
          </div>
          </div>
          <div class="signup-toggle center" >
            <h4 class="center">Have No Account ? <a href="signup.php">Sign Up</a></h4>
          </div>
        </div>
        <div class="col s12">
          <br>
          <div class="legal center">
          </div>
          <div class="legal center">
          <div class="col s12 m7 right">
            <p class="grey-text policy center">By signing up, you agree on our <a href="#!">Privacy Policy</a> and  <a href="#!">Terms of Use</a> including <a href="#!">Cookie Use</a>.</p>
          </div>
          <div class="col s12 m5">
            <p class="center grey-text" style="font-size: 14px;">Coding : <a href="http://fb.com/celyes01" class="main-title red-text" target="_blank">Celyes</a></p>
          </div>
          </div>

        </div>
      </div>
    </div>
    <div class="fixed-action-btn toolbar">
      <a class="btn-floating btn-large amber black-text">
        Login
      </a>
      <ul>
        <li><a class="indigo center" href="#!">Login with FB</a></li>
        <li><a class="blue center" href="#!">Login with Twitter</a></li>
        <li><a class="red center" href="#!">Login with Google +</a></li>
      </ul>
    </div>
  </body>
</html>