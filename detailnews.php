<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="./stylesheet.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
   
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

   img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
	.klong{
		border-style:solid;
		background:#0C0;
		width:200px;
		padding:5px;
		border-color:#F00;
		margin-left:250px;
		margin-bottom:50px;
		padding:20px;
		background:#69F;
	}
	.area{
		margin-left:280px;
	}

    </style>


  <?php

		session_start();
		unset( $_SESSION['idforum']);
  $connection= new MongoClient();
  $db= $connection->ktonline;
  $collection=$db->forum;
  $cursor = $collection->find();
  $totalrec=$cursor->count();
 $pid=rand(1,100000000);
  foreach($cursor as $log){
		$ch=$log['_id'];
		if($pid==$ch){
			$pid=rand(1,100000000);
		}
				 }
    if(!empty($_POST['title'])&&!empty($_POST['contend'])){

	$collection->insert(array("_id"=>$pid,"วันที่"=>date("d-m-Y"),"เวลา"=>date("H:i"),"doc_type"=>"ข่าว","name"=>$_POST['title'],
	"contend"=>$_POST['contend'],"username"=>$_SESSION['username'],"like"=>0,"comment"=>0));
	 $_SESSION['idforum']=$pid;
	 header('Location:look.php');
	}else{
		if(isset($_POST['title'])&&isset($_POST['contend'])){
		 echo "<script type='text/javascript'>alert('กรุณาป้อนข้อมูลให้ครบ!!');</script>";	}
		}

?>
<title>KATOO - TELL YOUR STORY</title>
</head>
<body>
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
          <li class="is-">
            <a href= "index.php">หน้าหลัก</a>
          </li>
          <li class = "is-active"><a href="create.php">สร้างกระทู้</a></li>
          <li><a href="userhome.php?set=true">กระทู้ของฉัน</a></li>
         
          <li><a href="profile.php">โปรไฟล์</a></li>
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


  <section class = "sectuion bg-indexs">
  
<br/>
  <p class = "title is-1" style = " text-align : center ; margin-top ; 3%; text-shadow: 3px 2px black; color :  #ffffff"> ข่าว</p>

<form method="post">

  <table width="70%" border="0" align="center">
    <tr>
      <td><div class="input-group mb-3">
        <div class="input-group-prepend"> <span class="input-group-text" id="inputGroup-sizing-default"><b>หัวข้อ</b></span> </div>
        <input type="text" name="title" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
      </div></td>
    </tr>
  </table>
  
	<div  style="margin-left:15%" class="input-group-prepend"> <span style="color:#fffff" class="input-group-text" id="inputGroup-sizing-default"><b>รายละเอียด</b></span> </div>

    <label for="textfield"></label>
    <textarea style="border-radius:10px;
    margin:10px;
    padding:20px;
    margin-left:15%;
    width:70%;
    height:300px;
    border-style:solid;
    border-width:0px;
    border-color:#000" name="contend"  id="textfield" placeholder="พิมพ์รายละเอียด"></textarea>

  <br>
  <br>
<button  type="submit" class="btn btn-primary" style="margin-left:80%;" onclick="return confirm('Are you sure?')" >ตั้งกระทู้</button>
</form>
<br>
<br>


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
