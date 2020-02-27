<!DOCTYPE html>
<html lang="en" class="bg-primary">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KATOO - TELL YOUR STORY</title>
    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="./stylesheet.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <?php 
      session_start();
     session_destroy();
    $connection = new MongoClient();
    $db = $connection->ktonline;
    $collection = $db->user;
    if((isset($_POST['username'])&&isset($_POST['password']))){
      $doc = array("username"=>$_POST['username'],"password"=>$_POST['password']);
      $cursor = $collection->find($doc);
      foreach($cursor as $log){
        if($_POST['username']==$log['username']&&$_POST['password']==$log['password']){
          session_start();
      
          $_SESSION['username']=$_POST['username'];
          $_SESSION['status']=$_POST['status'];

          header('Location:index.php');
          exit;
        }
      }

    }
    ?>
</head>
<body >

    <section class="hero is-primary  is-medium  ">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      <nav class="navbar">

        <div class="container">
          <div class="navbar-brand">
          <!--  <a class="navbar-item">
              <img src="https://www.picz.in.th/images/2018/09/17/f8MP1q.png" alt="Logo">
            </a>-->
            <span class="navbar-burger burger" data-target="navbarMenuHeroA">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenuHeroA" class="navbar-menu">

            <div class="navbar-end">
                <a class="navbar-item is-active"href="login.php">
                     เข้าใช้งาน
                  </a>
                  <a class="navbar-item" href="contact.php">
                     แจ้งปัญหา
                    </a>
            </div>


            </div>

          </div>
        </div>
      </nav>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
<br><br><br>
    </div>

  </section>


  <section class="section bg-login">


  <form class="eiei" method="POST">

      <div class="columns">
      <div class="column" >


          <div class="label is-large">ลงชื่อเข้าใช้งาน</div>

          <div class="field">

              <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="ชื่อผู้ใช้งาน" value="" name="username">
                <span class="icon is-small is-left">
                  <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user"></i> -->
                </span>
              </div>
            </div>

            <div class="field">
                <p class="control has-icons-left">
                  <input class="input" type="password" placeholder="รหัสผ่าน" name="password">
                  <span class="icon is-small is-left">
                    <svg class="svg-inline--fa fa-lock fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"></path></svg><!-- <i class="fas fa-lock"></i> -->
                  </span>
                </p>
              </div>


                <div class="navbar-end">

                    <button type="submit" class="button is-primary is-inverted is-outlined">
                        <span class="icon">
                          <img src="./img/login-icon-256.png">
                        </span>
                        <span>เข้าใช้งาน</span>
                      </button>
                                   <h3 class="navbar-item">     </h3>
                    <a href="register.php" class="button is-primary is-inverted is-outlined">
                        <span class="icon">
                          <img src="./img/regis.png">
                        </span>
                        <span>สมัครสมาชิก</span>
                      </a>


                </div>





      </div>


  </form>


    </section>
</body>
</html>
