<!doctype html>
<html lang="en" class = "" >
  <head>
 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="./stylesheet.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>


    <style >
  
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

	  if (isset($_GET['set'])) {
    					$_SESSION['key']=0;
	  }
				 session_start();
	  							  function pre() {
						if($_SESSION['key']>0){
    						$_SESSION['key']-=10;
						}
				}
				function nex() {
						if($_SESSION['key']<$_SESSION['total']-10){
    						$_SESSION['key']+=10;
						}
				}
				 if (isset($_GET['hello1'])) {
    					pre();
  					}
				 if (isset($_GET['hello2'])) {
    					nex();
  				 }




				  if (isset($_GET['story'])) {
    					story();
  					}
				 if (isset($_GET['store'])) {
    					store();
  				 }
				  if (isset($_GET['news'])) {
    					news();
  					}
				 if (isset($_GET['review'])) {
    					review();
  				 } if (isset($_GET['que'])) {
    					que();
  					}
				 function story() {
    					unset($_SESSION['type']);
						$_SESSION['type']="บทความ";
				}
				function store() {
    					unset($_SESSION['type']);
						$_SESSION['type']="ขายของ";
				}
				function news() {
    					unset($_SESSION['type']);
						$_SESSION['type']="ข่าว";
				}
				function review() {
    					unset($_SESSION['type']);
						$_SESSION['type']="รีวิว";
				}
				function que() {
    					unset($_SESSION['type']);
						$_SESSION['type']="คำถาม";
				}

			     $connection= new MongoClient();
 				 $db= $connection->ktonline;
  				 $collection=$db->forum;
				 $doc=array('username'=>$_SESSION['username']);
 				 $cursor = $collection->find($doc);
				 $_SESSION['total']=$cursor->count();
				 $i=$_SESSION['key'];

				 $j=0;

				 $listtem[]=array();
				 $listIDtem[]=array();
				 $listTypetem[]=array();
				 foreach($cursor as $log){
					 $listtem[$j]=$log['name'];
					 $listIDtem[$j]=$log['_id'];
					 $listTypetem[$j]=$log['doc_type'];
					 $j++;
				 }

				 if(isset($_GET['search'])){
					 $listtem=array();
					 $listIDtem=array();
					 $listTypetem=array();
					 unset($listtem);
				 unset($listIDtem);
				 unset($listTypetem);
						$_SESSION['key']=0;

					 echo '   <script type="text/javascript">
	$(document).ready(function(){
    	$("#p1").empty();
        $("#p2").empty();
        $("#p3").empty();
        $("#p4").empty();
        $("#p5").empty();
        $("#p6").empty();
        $("#p7").empty();
        $("#p8").empty();
        $("#p9").empty();
        $("#p10").empty();
		});
</script>';
				if(isset($_GET['q'])!=''){//Search

					$j=0;
 					$q=$_GET['q'];
 					$regex=array('name' => new MongoRegex("/$q/i"),
					'username'=>$_SESSION['username']);//จะเหมือนกับคำสั่ง LIKE '%$q%'
 					$cursor = $collection->find($regex);//หมายถึง ให้เมธอด fine ค้นหา ตามคีย์เวิร์ดที่เป็นพารามิเตอร์
					$_SESSION['total']=$cursor->count();
					foreach($cursor as $log){
					 $listtem[$j]=$log['name'];
					 //echo $listtem[$j];
					 $listIDtem[$j]=$log['_id'];
					 $listTypetem[$j]=$log['doc_type'];
					 $j++;
				 }
					}
				 }

				  if(isset($_GET['topost'])){

					 $listtem=array();
					 $listIDtem=array();
					 $listTypetem=array();

					 echo '   <script type="text/javascript">
	$(document).ready(function(){
    	$("#p1").empty();
        $("#p2").empty();
        $("#p3").empty();
        $("#p4").empty();
        $("#p5").empty();
        $("#p6").empty();
        $("#p7").empty();
        $("#p8").empty();
        $("#p9").empty();
        $("#p10").empty();
		});
</script>';
				 	$doc=array('username'=>$_SESSION['username']);
					$j=0;
 					$cursor = $collection->find($doc);//หมายถึง ให้เมธอด fine ค้นหา ตามคีย์เวิร์ดที่เป็นพารามิเตอร์
					foreach($cursor as $log){
					 $listtem[$j]=$log['name'];
					 //echo $listtem[$j];
					 $listIDtem[$j]=$log['_id'];
					 $listTypetem[$j]=$log['doc_type'];
					 $j++;

				 }
					}


					 if(isset($_GET['tofollow'])){

					 $listtem=array();
					 $listIDtem=array();
					 $listTypetem=array();

					 echo '   <script type="text/javascript">
	$(document).ready(function(){
    	$("#p1").empty();
        $("#p2").empty();
        $("#p3").empty();
        $("#p4").empty();
        $("#p5").empty();
        $("#p6").empty();
        $("#p7").empty();
        $("#p8").empty();
        $("#p9").empty();
        $("#p10").empty();
		});
</script>';

					 $collection=$db->follow;
					 $doc=array('username'=>$_SESSION['username']);
 					$cursor = $collection->find($doc);
					$j=0;
					foreach($cursor as $log){
					 $listtem[$j]=$log['forumname'];
					 //echo $listtem[$j];
					 $listIDtem[$j]=$log['forumid'];
					 $listTypetem[$j]=$log['type'];
					 $j++;

				 }
					}

				 unset($list);
				 unset($listID);
				 unset($listType);
				 $t=0;

				 for($a=$j-1;$a>=0;$a--){
					 $list[$t]=$listtem[$a];
					 $listID[$t]=$listIDtem[$a];
					 $listType[$t]=$listTypetem[$a];
					 $t++;
				 }

 	?>
       <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script>
	function check(){
		$(function(){
			$("#manage").hide();

		});
	}
	</script>



    <?php
			if($_SESSION['status']=='user'){
			 echo"<script language='javascript'>
					check();
			 </script>";
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
          <li class="is-active"><a href="userhome.php?set=true">กระทู้ของฉัน</a></li>
         
          <li ><a href="profile.php">โปรไฟล์</a></li>
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

<section class = " section">
<br><br>
<div class = " container">



    <form class="bg-index" method="get" style = "margin-left :0%">





  <table width="100%" border="0">
<div class = " columns">
<div class = " column">

<a href="userhome.php?hello1=true" style="margin-left:0%" class="button is-primary is-outlined" >ก่อนหน้า</a>
&nbsp;<a href="userhome.php?hello2=true"  class="button is-primary is-outlined" >ถัดไป</a>


 &nbsp; 

  <input placeholder="ค้นหากระทู้" type="text" name="q" id="q" style = "margin-left : 35%" >
  <input type="submit" class="button is-primary" name="search" id="search" value="ค้นหา" />
 
 

</div>


</div>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script></td>
      <td width="70%" valign="top">
	  <div id="p1"  class="notification is-primary" role="alert"><a href="look.php?set= <?php echo $listID[$i]."\"";?>><?php if(isset($list[$i])) {echo "  <".$listType[$i].">  ".$list[$i];} ?></a></div>
        <div id="p2" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+1]."\"";?>><?php if(isset($list[$i+1])){echo "  <".$listType[$i+1].">  ".$list[$i+1];} ?></a></div>
        <div id="p3" class="notification is-primary" role="alert"><a href="look.php?set= <?php echo $listID[$i+2]."\"";?>><?php if(isset($list[$i+2])){echo "  <".$listType[$i+2].">  ".$list[$i+2];} ?></a></div>
        <div id="p4" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+3]."\"";?>><?php if(isset($list[$i+3])) {echo "  <".$listType[$i+3].">  ".$list[$i+3];} ?></a></div>
        <div id="p5" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+4]."\"";?>><?php if(isset($list[$i+4])) {echo "  <".$listType[$i+4].">  ".$list[$i+4];} ?></a></div>
        <div id="p6" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+5]."\"";?>><?php if(isset($list[$i+5])) {echo "  <".$listType[$i+5].">  ".$list[$i+5];} ?> </a></div>
        <div id="p7" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+6]."\"";?>><?php if(isset($list[$i+6])) {echo "  <".$listType[$i+6].">  ".$list[$i+6];} ?></a></div>
        <div id="p8" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+7]."\"";?>><?php if(isset($list[$i+7])) {echo "  <".$listType[$i+7].">  ".$list[$i+7];} ?></a></div>
        <div id="p9" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+8]."\"";?>><?php if(isset($list[$i+8])) {echo "  <".$listType[$i+8].">  ".$list[$i+8];} ?></a></div>
      	<div id="p10" class="notification is-primary" role="alert"> <a href="look.php?set= <?php echo $listID[$i+9]."\"";?>><?php if(isset($list[$i+9])) {echo "  <".$listType[$i+9].">  ".$list[$i+9];} ?></a></div>


        <td width="10%" valign="top"></td>
      <th width="20%" valign="top"  >&ensp;        <!-- Optional JavaScript -->
      
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <div class="list-group">
         
		 <p><h3 class="navi" style="padding:10px;border-radius:10px;border-style:solid;border-color:#00d0b1;"> เมนู </h3></p>
		 <h3 class="navbar-item">     </h3>  <p><input type="submit" class="list-group-item list-group-item-action" name="topost" id="topost" value="กระทู้ที่โพส" />           </p>
		 <h3 class="navbar-item">     </h3>  <p><input type="submit" class="list-group-item list-group-item-action" name="tofollow" id="tofollow" value="กระทู้ที่ติดตาม" />           </p>
		 <h3 class="navbar-item">     </h3>  <p><a href="admin.php" id="manage" class="list-group-item list-group-item-action ">จัดการกับ User</a></p>
         </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script></th>
    </tr>
  </table>
 
</form>


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
 </section>

  
  </body>
</html>

