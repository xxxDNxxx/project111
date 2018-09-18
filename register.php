<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
 
    <?php
	try{
  $connection= new MongoClient();
  $db= $connection->weblog;
  $collection=$db->user;
    if((isset($_POST['username'])&&isset($_POST['password']))){
	 $doc=array("username"=>$_POST['username']);
		$cursor=$collection->find($doc);
		$user;
		foreach($cursor as $log){
			if($log['username']==$_POST['username']){
			   $user=$log['username'];
			}
		}
		if($user==$_POST['username']){
		$message = "Username ซ้ำ\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}else{	
				     $collection->insert(array("username"=>$_POST['username'],"password"=>$_POST['password'],"name"=>$_POST['name'],
	  				"gender"=>$_POST['gender'],"email"=>$_POST['email'],"address"=>$_POST['address2'],"city"=>$_POST['city'],
	  				"district"=>$_POST['district'],"province"=>$_POST['province'],"zipcode"=>$_POST['zipcode'],"status"=>"user",
					"dayregister"=>date("d-m-Y")));
	  				 header('Location:login.php');}
	  
    }  	  
	}catch(Exception $e){}
  ?>
    <title>KATOO - TELL YOUR STORY</title>
  </head>
  <body>

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
                <a href="login.php" class="navbar-item ">
                     เข้าใช้งาน
                  </a>
                  <a class="navbar-item is-active">
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
 
</section>

<section class = "section bg-login">
  
<div class="label is-large">สมัครสมาชิก</div>
   


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

   <div class="field"> 
              <p class="control has-icons-left">
                <input class="input" name="password" type="password" placeholder="ยืนยันรหัสผ่าน">
                <span class="icon is-small is-left">
                  <img src="./img/password2-128.png">
                </span>
              </p>
            </div>

            <div class="label ">เพศ</div>
            <div class="control">
  <label class="radio">
    <input type="radio" name="answer">
    ชาย
  </label>
  <label class="radio">
    <input type="radio" name="answer">
    หญิง
  </label>
  <label class="radio">
    <input type="radio" name="answer">
    อื่นๆ
  </label>
  
</div>

<div class="navbar-end">
<a action="register.php" class="button  is-inverted">
                      <span class="icon">
                        <img src="./img/regis.png">
                      </span>
                      <span>สมัครสมาชิก</span>
                    </a>
</div>


</section>

  
  </body>
</html>