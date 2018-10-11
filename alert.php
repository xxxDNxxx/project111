<!doctype html>
<html lang="en" class = " bg-indexs">
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


	</style>
     <?php

		session_start();
		unset( $_SESSION['idforum']);
  		$connection= new MongoClient();
  		$db= $connection->ktonline;
  		$collection=$db->alert;
		$doc=array('forumuser'=>$_SESSION['username']);
		$cursor = $collection->find($doc);
		$rec=$cursor->count();

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
         
          <li><a href="profile.php">โปรไฟล์</a></li>
          <li class="is-active"><a href="alert.php">แจ้งเตือน</a></li>

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

  <section class = "section">
  
  <div class = " container ">
  
  

   <form  method="get" style = "margin-top : 3%">
 
 <?php
   foreach($cursor as $log){
	   $user=$log['ucomment'];
	   $name=$log['nameforum'];
 
 
	   echo "<div  class=\"notification is-primary is-small\"  role=\"alert\"><b><?php echo $user.\" <Comment>  $name </b></div>";
   }
	// $collection->remove(array("forumuser"=>$_SESSION['username']));
	 $_SESSION['num']=0;
 ?>
 
 </center>
 
 </form>
 

  </div>
  
  </section>
<section class = " section bg-index">

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
