<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KATOO - TELL YOUR STORY</title>
    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
  
    <?php

    try{
    session_start();
    session_destroy();
       $connection= new MongoClient();
      $db= $connection->weblog;
       $collection=$db->user;
     if((isset($_POST['username'])&&isset($_POST['password']))){
     $doc=array("username"=>$_POST['username'],"password"=>$_POST['password']);

     $cursor=$collection->find($doc);
     foreach($cursor as $log){

       if((isset($log['username'])&&isset($log['password']))){
         session_start();
         $_SESSION['username']=$_POST['username'];
         $_SESSION['status']=$log['status'];
        header('Location:index.php');
        exit;
       }


     }

      $message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";		}

  }catch(Exception $e){
  
  }
    ?> 
<script>
if(window.back()){
	header('Location:login.php');
}
</script>
</head>
<body >
    <section class="hero is-primary  is-fullheight header-image">
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
                <a class="navbar-item is-active">
                     เข้าใช้งาน
                  </a>
                  <a href="register.php" class="navbar-item">
                     สมัครสมาชิก
                    </a>
                  <a class="navbar-item">
                     ติดต่อเรา
                    </a>
            </div>


            </div>

          </div>
        </div>
      </nav>
    </div>
  
    <!-- Hero content: will be in the middle -->
    <div class="hero-body">


    <!--  <div class="container has-text-centered">
  <h1 class="title">
          Title
        </h1>
        <h2 class="subtitle">
          Subtitle
        </h2>
      </div>
    -->

    </div>
  
    <!-- Hero footer: will stick at the bottom -->
    <!--<div class="hero-foot">
      <nav class="tabs">
        <div class="container">
          <ul>
            <li class="is-active"><a>Overview</a></li>
            <li><a>Modifiers</a></li>
            <li><a>Grid</a></li>
            <li><a>Elements</a></li>
            <li><a>Components</a></li>
            <li><a>Layout</a></li>
          </ul>
        </div>
      </nav>
    </div> -->
  </section>


  <section class="section bg-login" align="center">
  
   
<div class="label is-large">ลงชื่อเข้าใช้งาน</div>
    <div class="columns">
    <div class="column" >


        <div class="field">
            <p class="control has-icons-left has-icons-left">
              <input class="input" name="username" type="email" placeholder="ชื่อผู้ใช้งาน">
              <span class="icon is-small is-left">
                  <img src="./img/TiNY2_BASICS_Profile-512.png">
              </span>
            </p>

            
          </div>


          <div class="field"> 
        
              <p class="control has-icons-left">
                <input class="input" name="password" type="password" placeholder="รหัสผ่าน">
                <span class="icon is-small is-left">
                  <img src="./img/password2-128.png">
                </span>
              </p>
           

            </div>


              <div class="navbar-end">
 
                  <a class="button  is-inverted">
                      <span class="icon">
                        <img src="./img/login-icon-256.png">
                      </span>
                      <span>เข้าใช้งาน</span>
                    </a>
                             

              </div>


        


    </div>


    </section> 


</body>
</html>