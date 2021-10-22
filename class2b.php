<?php

/*
Design a login form with username and password

On form submission, test whether the username and password from the user matches your own hardcoded username and password

if equal - hide the login and show the welcome h2

if not - show the login form and display username and password incorrect
*/



function validate($u, $p){
  $correct_username = 'arnold';
  $correct_pwd = '123456';

  if($u==$correct_username && $p == $correct_pwd){
    return 'success';
  }else{
    return 'failed';
  }
}

$result = '';

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = validate($username, $password);
}




?>


<html>

<body>
  <?php if($result=='failed' || $result==''){ ?>
    <div class="">
      <?php if($result=='failed'){ ?>
      <h6>Incorrect username and/or password</h6>
      <?php } ?>
      <form action="" method="POST">
        <div class=""><label>Username:</label><br>
          <input type="text" name="username" />
        </div>
        <div class=""><label>Password:</label><br>
          <input type="password" name="password" />
        </div>
        <button type="submit" name="login">Login</button>
      </form>
    </div>
    <?php }elseif($result=='success'){ ?>
      <h2>Welcome <?php echo $username; ?></h2>

      <?php } ?>
</body>

</html>