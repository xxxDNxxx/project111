<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">
     body {
	
	background-image:url(1511.jpg);
	background-size:cover;
	background-attachment:fixed;
	 }
	.mar{
		
		
		color:#F00;
		margin-left:390px;
		
		border-color:#000;
		width:900px;
		border-radius:10px;
		font-family:Verdana, Geneva, sans-serif;
		
	}
	.mar2{
		
		margin-top:50px;
		border-style:solid;
		color:#000;
		margin-left:280px;
		background:#CFC;
		border-color:#000;
		width:1000px;
		height:auto;
		border-radius:5px;
		box-shadow:10px 10px;
		padding:18px;
		font-family:Verdana, Geneva, sans-serif;
		border-radius:20px;
	
	}
	.mar3{
		
		margin-top:50px;
		border-style:solid;
		color:#000;
		margin-left:200px;
		background:#AEFFFF;
		border-color:#000;
		width:1000px;
		height:auto;
		border-radius:5px;
		box-shadow:10px 10px;
		padding:18px;
		font-family:Verdana, Geneva, sans-serif;
		border-radius:20px;
	
	}
	.mar4{
		
		margin-top:50px;
		border-style:solid;
		color:#000;
		margin-left:280px;
		background:#FFC;
		border-color:#000;
		width:1000px;
		height:auto;
		border-radius:5px;
		box-shadow:10px 10px;
		padding:18px;
		font-family:Verdana, Geneva, sans-serif;
		border-radius:20px;
	
	}
	.mar5{
		
		
		color:#F00;
		margin-left:600px;
		
		border-color:#000;
		width:900px;
		border-radius:10px;
		font-family:Verdana, Geneva, sans-serif;
		
	}
	
	
    </style>
    
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script>
	function check(){
		$(function(){
			$("#manage").prop( "disabled", true );

			$("#manage2").prop( "disabled", true );

		
		});
	}
	function check2(){
		$(function(){
			$("#manage").prop( "disabled", true );

			$("#manage2").prop( "disabled", false );

		
		});
	}
	function check3(){
		$(function(){
			$("#manage").prop( "disabled", false );
			$("#manage2").prop( "disabled", true );

		
		});
	}
	</script>
     <?php 
	 $f;
	 session_start();
	  $connection= new MongoClient();
 	 $db= $connection->weblog;
	 if($_SESSION['idforum']==-1){
		 if(isset($_GET['set'])){
		 	$f=$_GET['set'];
		 }
	 }else{
		 if(isset($f)){
			  $f=$_GET['set'];
		 }
		 else{
			 $f=$_SESSION['idforum'];
			 }
		  
	 }
	 if(isset($_POST['c1'])){
		 if(!empty($_POST['c1'])){
		 $collection=$db->comment;
		 $cursor = $collection->find(); 
		 $totalrec=$cursor->count();
		 $pid=$totalrec+1;
		 $collection->insert(array("_id"=>$pid,"วันที่"=>date("d-m-Y"),"เวลา"=>date("H:i")
		 ,"username"=>$_SESSION['username'],"contend"=>$_POST['c1'],"forumid"=>(int)$f));
		 
		 
		  $collection=$db->forum;
     $doc=array('_id'=>(int)($f));
	
	
 	 $cursor = $collection->find($doc); 
     foreach($cursor as $log){
	
		 $title=$log['name'];
		 $userforum=$log['username'];
		 if($userforum!=$_SESSION['username']){
		  $collection=$db->alert;
	   $collection->insert(array("nameforum"=>$title,"วันที่"=>date("d-m-Y")
	   ,"ucomment"=>$_SESSION['username'],"forumuser"=>$userforum,"forumid"=>(int)$f));
		 }
		 }
		 
		 
	 }else{
		  echo "<script type='text/javascript'>alert('กรุณากรอกรายละเอียด');</script>";
	 }
	 
	 
	 }
	 	if(isset($_GET['clike'])){
		 $collection=$db->like;
		 $doc=array('forumid'=>(int)($f),'username'=>$_SESSION['username']);
		 $cursor = $collection->find($doc); 
		 $totalrec=$cursor->count();
		 if($totalrec<1){
			  $collection->insert(array("username"=>$_SESSION['username'],"forumid"=>(int)$f));
		 }else{
			 echo "<script type='text/javascript'>alert('กดได้เพียง 1 ครั้งต่อกระทู้');</script>";
		 }
		
		}
		
		if(isset($_GET['cfollow'])){
		 $collection=$db->follow;
		 $doc=array('forumid'=>(int)($f),'username'=>$_SESSION['username']);
		 $cursor = $collection->find($doc); 
		 $total=$cursor->count();
		 if($total<1&&$_SESSION['username']!=$_GET['usercheck']){
			 echo $_GET['title'];
			  $collection->insert(array("forumname"=>$_GET['title'],"forumid"=>(int)$f,"username"=>$_SESSION['username'],"type"=>$_GET['type']));
			 
			  
			  
		 }else{
			 echo "<script type='text/javascript'>alert('กดได้เพียง 1 ครั้งต่อกระทู้หรือเจ้าของกดไม่ได้');</script>";
		 }
		
		}
		if(isset($_GET['cdel'])){
		 $collection=$db->forum;
		 $doc=array('_id'=>(int)($f));
		 if($totalrec<1&&$_SESSION['username']==$_GET['usercheck']||$_SESSION['status']=='admin'){
			  $collection->remove(array("_id"=>(int)$f));
			  echo "<script type='text/javascript'>alert('ลบแล้วเรียบร้อย');</script>";
			   header('Location:index.php');
			   exit;
			  
		 }else{
			 echo "<script type='text/javascript'>alert('ต้องเป็นเจ้าของกระทู้เท่านั้น');</script>";
		 }
		
		}
	 
	 
	 $day;
	 $time;
	 $titie;
	 $user;
	 $contend;
	 $type;
	 $star="";
	 $price="";
	 $product="";
	 $commentid;
	 
	 $collection=$db->like;
     $doc=array('forumid'=>(int)($f));
 	 $cursor = $collection->find($doc); 
     $like=$cursor->count();	 
  	 $collection=$db->forum;
     $doc=array('_id'=>(int)($f));
	 $collection->update(array("_id"=>(int)$f),array('$set'=>array("like"=>$like)));
 	 $cursor = $collection->find($doc); 
     foreach($cursor as $log){
		 $day=$log['วันที่'];
		 $time=$log['เวลา'];
		 $title=$log['name'];
		 $userforum=$log['username'];
		 $contend=$log['contend'];
		 $type=$log['doc_type'];	 
		 if($type=="ขายของ"){
		 $price=", ราคา : ".$log['ราคา']. " บาท!!";
		 $product="สินค้า : ".$log['สินค้า'];
		 }
		 if($type=="รีวิว"){
		 $product="คะแนน : ".$log['star'];
		 }
				 }
			if($_SESSION['username']==$userforum&&$_SESSION['status']!='user'){
			 echo"<script language='javascript'>
					check();
			 </script>";
			}
			$collection=$db->forum;
     		$doc=array('_id'=>(int)($f));
			$cursor = $collection->find($doc);
			
			
			 foreach($cursor as $log){
				 $qq=$log['username'];
			 }
				 if($_SESSION['username']==$qq){
			 echo"<script language='javascript'>
					check2();
			 </script>";
		
			}
			if($_SESSION['username']!=$userforum){
			 echo"<script language='javascript'>
					check3();
			 </script>";
			 
			  }
			 
			
			
			
			
	?>    
  	
    
<title>Weblog</title>
</head>
<body>
<div align="center">
  <img  src="31344686_1704141333000568_3657415830821404672_n.png" width="100%" height="200" >
  </div>
 <br>
   <form  method="post"> 
  <a href="index.php"  class="btn btn-primary" style="margin-left:560px">Home</a>
  <a href="create.php" class="btn btn-success" style="margin-left:30px" >สร้างกระทู้</a> 
&ensp;&ensp;&ensp; 
<a href="userhome.php?set=true" class="btn btn-info">User Home</a> &ensp;&ensp;&ensp;
<a href="alert.php" type="button" class="btn btn-primary"> แจ้งเตือน <span class="badge badge-light"><?php echo  $_SESSION['num'] ?></span> <span class="sr-only"></span></a>
&ensp;&ensp;&ensp;
<a href="profile.php" class="btn btn-light">Profile </a>
&ensp;&ensp;&ensp;
<a href="login.php" class="btn btn-dark">Logout </a>
 </form></P>
<p>&nbsp;</p>

<form>

<h4  style="margin-left:200px;border-color:#333;border-radius:5px;border-style:solid;width:1000px;background-color:#FC3;padding:10px;"><?php echo "หัวข้อ : ".$title; ?></h4>
	

</form>
<div class="mar3">
	<p ><h3 style="color:#F00"><?php echo $star."   ".$product."   ".$price ?></h3></p>
  <p>	
	<?php echo $contend; ?>
    </p>
    
     <br>
     <br>
    <p>
    <a <?php echo "href=\"look.php?clike=true&set=".$f."\""?>><button type="submit"><img src="like.png" width="30px" height="30px"></button></a>
    <?php echo $like." " ?>
    
     <a <?php echo "href=\"look.php?cfollow=true&set=".$f."&usercheck=".$userforum."&title=".$title."&type=".$type."\""?>><button id="manage" class="btn btn-primary">ติดตาม</button></a>
    
     <a <?php echo "href=\"look.php?cdel=true&set=".$f."&usercheck=".$userforum."\""?>><button id="manage2" class="btn btn-primary" onclick="return confirm('Are you sure?')">ลบกระทู้</button></a>
    
    <Align=right class="mar"><?php echo $userforum."  วันที่ ".$day." เวลา ".$time; ?> </right></p>
</div>
	<?php 
    $collection=$db->comment;
     $doc=array('forumid'=>(int)$f);
 	 $cursor = $collection->find($doc); 
	 $c=0;
	 $com=0;
     foreach($cursor as $log){
		 $c++;
		  $cursor = $collection->find($doc); 
		 $day=$log['วันที่'];
		 $time=$log['เวลา'];
		 $user=$log['username'];
		 $contend=$log['contend'];
		 $commentid=$log['_id'];
		 if($user==$_SESSION['username']){
			  echo "<div class=\"mar2\"><p style=\"color:#06F\";>ความเห็นที่:".$c."</p><p>".$contend."</p><Align=right class=\"mar5\">".$user."  วันที่ ".$day." เวลา ".$time."</right></div>";
		 }else{
			 $com++;
		 echo "<div class=\"mar4\"><p style=\"color:#06F\";>ความเห็นที่:".$c."</p><p>".$contend."</p><Align=right class=\"mar5\">".$user."  วันที่ ".$day." เวลา ".$time."</right></div>";}
		
		
   /* $collection=$db->answer;
     $doc1=array('commentid'=>$commentid);
 	 $cursor = $collection->find($doc1); 
     foreach($cursor as $log){
		 $day=$log['วันที่'];
		 $time=$log['เวลา'];
		 $user=$log['username'];
		 $contend=$log['contend'];
		 echo "<div class=\"mar4\"><p style=\"color:#06F\";>คำตอบ</p> <p>".$contend."</p><Align=right class=\"mar5\">".$user."  วันที่ ".$day." เวลา ".$time."</right></div>";
		}*/
		
		}
		
		 $collection=$db->forum;
	     $collection->update(array("_id"=>(int)$f),array('$set'=>array("comment"=>$com)));;
		
		?>

    <form method="post">
  <center><textarea style="border-radius:10px;margin:60px;padding:20px;width:1100px;height:300px;border-style:solid;border-width:3px;border-color:
  #000" name="c1"  id="textfield" placeholder="แสดงความคิดเห็น"></textarea></center>
  <P Align=right> <button type="submit" style="margin-right:180px" class="btn btn-info"> แสดงความคิดเห็น </button></P>
   </form>
    <p>&nbsp;</p>
    <br>
    <br><br>

</body>
</html>