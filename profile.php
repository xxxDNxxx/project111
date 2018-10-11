<!doctype html>
<html lang="en" class = "bg-indexs">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="./stylesheet.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>


    <style type="text/css">
    
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}


  .header-image2 {/*https://www.picz.in.th/images/2018/09/17/f8MP1q.png*/

/*background-image: url("https://www.picz.in.th/images/2018/09/17/fHdgtW.png"); */
background-image: url("https://www.picz.in.th/images/2018/09/18/fHTIGu.png");
/*background-image: url("https://www.picz.in.th/images/2018/09/17/f8MP1q.png"); */

background-position: center center;
background-repeat: no-repeat;
background-attachment: initial;
background-size: 100%;
background-color: rgb(93, 250, 185);
}


	 input{
	border:2px solid #d1c7ac;
	width: 400px;
	color:#333333;
	padding:3px;
	margin-right:4px;

	font-family:tahoma, arial, sans-serif;


	 }
	


    </style>
     <?php
	  $connection= new MongoClient();
  $db= $connection->ktonline;
  $collection=$db->user;
  	session_start();
	if(isset($_POST['update2'])){
		if((isset($_POST['username'])&&isset($_POST['password']))){
			$collection->update(array("username"=>$_POST['username']),array('$set'=>array("password"=>$_POST['password'],
			"name"=>$_POST['name'],"email"=>$_POST['email'],"address"=>$_POST['address'],"district"=>$_POST['district'],
			"province"=>$_POST['province'],"city"=>$_POST['city'],"zipcode"=>$_POST['zipcode'])));

		}
		}

	 	$doc=array("username"=>$_SESSION['username']);
		$cursor=$collection->find($doc);
		foreach($cursor as $log){
		$user=$log['username'];
		$password=$log['password'];
		$email=$log['email'];
		//$gender=$log['gender'];
		//$day=$log['dayregister'];
		}




  ?>

    <title>KATOO - TELL YOUR STORY</title>
  </head>
<body class = "bg-indexs">
<section class="hero is-primary  is-small  ">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      <img src = "img/trong.png" alt ="logo " width = "30%"  height = "auto" >
    </div>

        <!-- Hero content: will be in the middle -->
    <div class="hero-foot">
      
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li >
            <a href= "index.php">หน้าหลัก</a>
          </li>
          <li ><a href="create.php">สร้างกระทู้</a></li>
          <li><a href="userhome.php?set=true">กระทู้ของฉัน</a></li>
         
          <li class="is-active"><a href="profile.php">โปรไฟล์</a></li>
          <li><a href="alert.php">แจ้งเตือน</a></li>

          <li><a href="login.php">ออกจากระบบ</a></li>

<div class="navbar-end">
 <!-- <a class="navbar-item"> -->
       <li>  <?php echo "ชื่อผู้ใช้"."   ".$_SESSION['username'];?></li>
  <!--  </a> -->



</div>

        </ul>
      </div>
    </nav>
  </div>

  </section>

<section class="section">
<div class = "container">
<div class = "columns">

<form method="post" style = "margin-left : 33%">

<div class = "column">
<p>
   <b>ชื่อผู้ใช้</b>
     <input name="username" type="text"  id="username" style="margin-left:10px"  value="<?php echo $user ?>" readonly>
     </p>
</div>

<div class = "column">
     <p>
 <b>รหัสผ่าน</b>
    <input name="password"type="password"  id="password" style="margin-left:11px" value="<?php echo $password ?>">
    </p>

</div>


<div class = "column">

    <p>
  <b>เพศ</b>
  <input name="gender" type="text"  id="gender" style="margin-left:51px" value="<?php echo $gender ?>">
	     </p>

</div>


<div class = "column">


         <p>
   <b>อีเมล</b>
      <input name="email" type="email"  id="email" style="margin-left:40px" value="<?php echo $email ?>">
      </p>
</div>



<div class = "column">

      <p>
<b>วันที่สมัคร</b>
 <input name="day" type="text"  id="day" style="margin-left:8px" value="<?php echo $day ?>" readonly>
</p>

</div>

<br>
  <input style="margin-left: 40%; width:100px" type="submit"  class="button is-primary is-outlined"  name="update2" onclick="return confirm('Are you sure?')" value="แก้ไขข้อมูล">


</form>
</div>

</div>


</section>
 
 <section class = "section">
 
<footer class="footer bg-indexs">
  <div class="content has-text-centered">
    <p>
  Copyright Katoo Online 2018
  <p>Contact information: <a href="https://www.google.com/intl/th/gmail/about/#">katoo_admin@gmail.com</a></p>
    </p>
  </div>
</footer>
 </section>
  </body>
</html>
