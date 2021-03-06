 <html>
  <head>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/index_style.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src = "js/bootstrap.js"></script>
    <title>Fantasy Frenzy</title>
    </head>
     <body>
      <div id="titleHero">
        Fantasy Frenzy
      </div>
      <form class="existing" action="php_actions/login.php" method="post">
        <h3 class="text">Login here:</h3>
        <div class="rect">
          <div>
            <input name = "username" type = "text" class = "form-control" placeholder = "Username" required>
          </div> 
          <div>
            <input name = "password" type = "password" class = "form-control" placeholder = "Password" required>
          </div>
          <br/>
          <div style="text-align:center">
             <input id = "submit" name = "submit" type = "submit" value = "Submit">
          </div>
        </div>
      </form>
      <form class="new" action="php_actions/signup.php" method="post">
        <h3 class="text">New User? Sign up here:</h3>
        <div class="rect">
          <div>
            <input name = "email" type = "text" class = "form-control" placeholder = "Email" required>
          </div> 
          <div>
             <input name = "username" type = "text" class = "form-control" placeholder = "Username" required>
          </div>
          <div>
             <input name = "password" type = "password" class = "form-control" placeholder = "Password" required>
          </div>
          <div>
             <input name = "confirm_password" type = "password" class = "form-control" placeholder = "Confirm Password" required>
          </div>
          <br/>
          <div style="text-align:center;">
              <input id = "submit" name = "submit" type = "submit" value = "Submit">
          </div>
        </div>
      </form>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   
      <!-- <form action = "php_actions/reset.php" method = "post">
         <input id = "submit" name = "submit" type = "submit" value = "Reset">
      </form>
       <form action = "php_actions/update_data.php" method = "post">
         <input id = "submit" name = "submit" type = "submit" value = "Update Data">
      </form> -->
      <br/><br/><br/><br/><br/>
      <div class="col-md-12 center-block">
          <button href = "#myModal" data-toggle = "modal" name="singlebutton" class="btn btn-primary center-block">
            About this Website
          </button>
      </div>

     <div class = "modal" id = "myModal">
        <div class = "modal-dialog">
          <div class = "modal-content">
            <div class = "modal-header">
              <h2>About Fantasy Frenzy<h2>
            </div>
            <div class = "modal-body">
            <p>Tired of managing multiply fantasy teams across many leagues? 
              Try Fantasy Frenzy! We combined football, basketball, and soccer to create one unique fantasy platform. 
              Sign up now to get your randomized team instantly and see how your players stack up amongst others in the league. 
              Our website develops a unique conversion system across all three sports as it updates constantly based on 
              the frequency of statistics obtained in football (NFL), basketball (NBA), and soccer (EPL). Try it now for free!</p>
            </div>
            <div class = "modal-footer">
              <button type = "button" class = "btn btn-primary" data-dismiss = "modal">Close</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </body>
</html>