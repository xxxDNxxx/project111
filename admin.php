<!doctype html>
<html lang="en">
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
    body {
	
	background-color: rgb(93, 250, 185);
	background-size:cover;
	background-attachment:fixed;
	

	 }
	 input{

		

	border:1px solid #000000;
	width: 400px;
	color:#333333;
	padding:3px;
	margin-right:4px;
	
	font-family:tahoma, arial, sans-serif;
		
		 
	 }
	 b{
	margin-right:50px;
	 }
	 p{
		 margin:15px;
		 margin-left:500px;
	 }
	 
	
    </style>
     <?php
	$user="";
	$password="";
	$name="";
	$email="";
	$gender="";
	$status="";
	$connection= new MongoClient();
  	$db= $connection->ktonline;
  	$collection=$db->user;
  	session_start();
	if(isset($_POST['update2'])){
		if((isset($_POST['username'])&&isset($_POST['password']))){
			$collection->update(array("username"=>$_POST['username']),array('$set'=>array("password"=>$_POST['password']
			,"gender"=>$_POST['sex'],"email"=>$_POST['email'],"status"=>$_POST['status'])));
			
		}
		}
	if(isset($_POST['del'])){
		$regex=array('username' =>$_POST['username']);
 		$cursor = $collection->find($regex);
		$having=$cursor->count();
		 if($having==1){
			  $collection->remove(array("username"=>$_POST['username']));
			
		
		 }else{
			 echo "<script type='text/javascript'>alert('ไม่มี username นี้');</script>";
		 }
	}
		

				if(isset($_GET['q'])!=''){//Search
				
					$j=0;
 					$q=$_GET['q'];
 					$regex=array('username' =>$q);
 					$cursor = $collection->find($regex);
					$having=$cursor->count();
					if($having==1){
						foreach($cursor as $log){
						$user=$log['username'];
						$password=$log['password'];
						$gender=$log['sex'];
						$email=$log['email'];
						$status=$log['status'];
		}
					}
					else{
						echo "<script type='text/javascript'>alert('ไม่พบ username นี้');</script>";
					}
					}
				 

	
	 	
		
		
		

  ?>
   
    <title>Weblog</title>
  </head>
<body>
<section class="hero is-primary  is-small  ">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      
    </div>

        <!-- Hero content: will be in the middle -->
    <div class="hero-foot">
      
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active">
            <a href= "index.php">หน้าหลัก</a>
          </li>
          <li><a href="create.php">สร้างกิจกรรม</a></li>
          <li><a href="userhome.php?set=true">กิจกรรมของฉัน</a></li>
         
          <li><a href="profile.php">จัดการโปรไฟล์</a></li>
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
 
<br>
<br>
<br>
<form method="get">
 <center >
  <label  for="q"></label><b style="color:#FFFFFF;border:1px solid #000;padding:8px">ค้นหา username</b>
  <input style="width:200px;" type="text" name="q" id="q"  />
  <input  class="button is-primary is-1" type="submit" class="btn btn-light" name="search" id="search" value="ค้นหา"  />
  </center>
  </form>
<br>
<br>

<form method="post">
<p>
   <b>Username</b>
     
     <input name="username" type="text"  id="username" style="margin-left:10px"  value="<?php echo $user ?>" readonly>
     </p>
     <p>
 <b>password</b>
    <input name="password" type="text"  id="password" style="margin-left:11px" value="<?php echo $password ?>">
    </p>
   <p>
  <b>เพศ</b>
  <input name="gender" type="text"  id="gender" style="margin-left:51px" value="<?php echo $gender ?>">
	     </p>
         <p>
   <b>Email</b>
      <input name="email" type="email"  id="email" style="margin-left:40px" value="<?php echo $email ?>">
      </p>
<p>
<b>Status</b>
 <input name="status" type="text"  id="status" style="margin-left:31px" value="<?php echo $status ?>" readonly>
</p>

  <input style="margin-left:830px; width:100px" type="submit"  class="btn btn-primary"  name="update2" onclick="return confirm('Are you sure?')" value="แก้ไขข้อมูล">
  <input style="margin-left:32px; width:100px" type="submit"  class="btn btn-primary"  name="del" onclick="return confirm('Are you sure?')" value="ลบ">
 

</form>
 <br>
  <br>
 <br>
  
  </body>
</html>