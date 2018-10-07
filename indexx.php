<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


     <?php
	  			$check=0;
				session_start();
				$_SESSION['key']=0;
				$_SESSION['total']=0;
				$_SESSION['type']="";
				$_SESSION['idforum']=-1;

			     $connection= new MongoClient();
 				 $db= $connection->ktonline;

  				 $collection=$db->forum;
 				 $cursor = $collection->find();
				 $totalRec=$cursor->count();//นับ
				 $i=0;
				 $j=0;
				 $listtem[]=array();
				 $listIDtem[]=array();
				 $listTypetem[]=array();
				  unset($listtem);
				 unset($listIDtem);
				 unset($listTypetem);
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
 					$regex=array('name' => new MongoRegex("/$q/i"));//จะเหมือนกับคำสั่ง LIKE '%$q%'
 					$cursor = $collection->find($regex);//หมายถึง ให้เมธอด fine ค้นหา ตามคีย์เวิร์ดที่เป็นพารามิเตอร์
					foreach($cursor as $log){
					 $listtem[$j]=$log['name'];
					 //echo $listtem[$j];
					 $listIDtem[$j]=$log['_id'];
					 $listTypetem[$j]=$log['doc_type'];
					 $j++;
				 }
					}
				 }


				  if(isset($_GET['tob10'])){
					  $check=1;
					 $listtem=array();
					 $listIDtem=array();
					 $listTypetem=array();
					  unset($listtem);
				 unset($listIDtem);
				 unset($listTypetem);

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

					$j=0;
 					$cursor = $collection->find()->sort(array('comment'=>-1))->limit(10);//หมายถึง ให้เมธอด fine ค้นหา ตามคีย์เวิร์ดที่เป็นพารามิเตอร์
					foreach($cursor as $log){
					 $listtem[$j]=$log['name'];
					 //echo $listtem[$j];
					 $listIDtem[$j]=$log['_id'];
					 $listTypetem[$j]=$log['doc_type'];
					 $j++;

				 }
					}
				   if(isset($_GET['tob11'])){
					  $check=1;
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

					$j=0;
 					$cursor = $collection->find()->sort(array('like'=>-1))->limit(10);//หมายถึง ให้เมธอด fine ค้นหา ตามคีย์เวิร์ดที่เป็นพารามิเตอร์
					foreach($cursor as $log){
					 $listtem[$j]=$log['name'];
					 //echo $listtem[$j];
					 $listIDtem[$j]=$log['_id'];
					 $listTypetem[$j]=$log['doc_type'];
					 $j++;

				 }
					}




				 unset($list);
				 unset($listID);
				 unset($listType);
				 $t=0;
				 if($check==0){
				 for($a=$j-1;$a>=0;$a--){
					 $list[$t]=$listtem[$a];
					 $listID[$t]=$listIDtem[$a];
					 $listType[$t]=$listTypetem[$a];
					 $t++;
				 }
				 }else{
				 for($a=0;$a<$j;$a++){
					 $list[$a]=$listtem[$a];
					 $listID[$a]=$listIDtem[$a];
					 $listType[$a]=$listTypetem[$a];
					 $t++;
				 }
				 }

 	?>



<title>KATOO - TELL YOUR STORY</title>


    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="./stylesheet.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>


<style>
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


</head>
<body>


    <section class="hero is-primary  is-small  ">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
    <img src = "img/trong.png" alt ="logo " width = "30%"  height = "auto" >
    </div>
    
    <!-- Hero content: will be in the middle -->
    <div class="hero-foot">
    <nav class="tabs">
      <div class="container">
        <ul>
          <li class="is-active"><a href="index.php">หน้าหลัก</a></li>
      <!--    <li><a href="login.php">เข้าสู่ระบบ</a></li> -->
          <li><a href="login.php">สร้างกระทู้</a></li>
         <!-- <li><a href="user.php">UserHome</a></li> -->
          <li><a href="login.php">โปรไฟล์</a></li>
        
          <li><a href="login.php">แจ้งเตือน</a></li>
        </ul>




      </div>  

      <div class = container>
      
      
      <div class="navbar-end">
                <a class="navbar-item "href="login.php">
                     เข้าใช้งาน
                  </a>
                  <a class="navbar-item" href="register.php">
                     สมัครสมาชิก
                    </a>
                    <a class="navbar-item" href="contact.php">
                     ติดต่อเรา
                    </a>
                 
            </div>


      </div>
    </nav>
  

  </div>

  </section>

<section class="section bg-indexs" >

    <form class="bg-index" method="get" style = "margin-left :20%">

  <!--<a href="alert.php" type="button" class="btn btn-primary"> แจ้งเตือน <span class="badge badge-light"><?php echo $_SESSION['num'] ?></span> <span class="sr-only"></span></a>-->

   </P>

    <br>
    <br>

    <!--
    <center >
    <label  for="q"></label><b style="color:#F00;">ค้นหาข้อมูล</b>
    <input type="text" name="q" id="q"  />
    <input type="submit" class="btn btn-light" name="search" id="search" value="ค้นหา" />
    </center>
          -->

  <p>&nbsp;</p>
  <div style="margin-left:0%">
   <input type="submit" class="button is-primary is-outlined" name="tob10" id="top10" value="10กระทู้ยอดคอมเมนต์สูงสุด" />
   <input type="submit" class="button is-primary is-outlined" name="tob11" id="top11" value="10กระทู้ยอดถูกใจสูงสุด" />

  </div>

    <table width="1344" border="0">

      
        &ensp;<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script></td>
        <td width="70%" valign="top">&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp;

          <div id="p1" class="notification is-primary is-small" role="alert"><a href="lookk.php?set= <?php echo $listID[$i]."\"";?>><?php if(isset($list[$i])) {echo "  <".$listType[$i].">  ".$list[$i];} ?></a></div>
          <div id="p2" class="notification is-primary" role="alert"><a href="lookk.php?set= <?php echo $listID[$i+1]."\"";?>><?php if(isset($list[$i+1])){echo "  <".$listType[$i+1].">  ".$list[$i+1];} ?></a></div>
          <div id="p3" class="notification is-primary" role="alert"><a href="lookk.php?set= <?php echo $listID[$i+2]."\"";?>><?php if(isset($list[$i+2])){echo "  <".$listType[$i+2].">  ".$list[$i+2];} ?></a></div>
          <div id="p4" class="notification is-primary role="alert"> <a href="lookk.php?set= <?php echo $listID[$i+3]."\"";?>><?php if(isset($list[$i+3])) {echo "  <".$listType[$i+3].">  ".$list[$i+3];} ?></a></div>
          <div id="p5" class="notification is-primary" role="alert"> <a href="lookk.php?set= <?php echo $listID[$i+4]."\"";?>><?php if(isset($list[$i+4])) {echo "  <".$listType[$i+4].">  ".$list[$i+4];} ?></a></div>
          <div id="p6" class="notification is-primary" role="alert"> <a href="lookk.php?set= <?php echo $listID[$i+5]."\"";?>><?php if(isset($list[$i+5])) {echo "  <".$listType[$i+5].">  ".$list[$i+5];} ?> </a></div>
          <div id="p7" class="notification is-primary" role="alert"> <a href="lookk.php?set= <?php echo $listID[$i+6]."\"";?>><?php if(isset($list[$i+6])) {echo "  <".$listType[$i+6].">  ".$list[$i+6];} ?></a></div>
          <div id="p8" class="notification is-primary" role="alert"> <a href="lookk.php?set= <?php echo $listID[$i+7]."\"";?>><?php if(isset($list[$i+7])) {echo "  <".$listType[$i+7].">  ".$list[$i+7];} ?></a></div>
          <div id="p9" class="notification is-primary" role="alert"> <a href="lookk.php?set= <?php echo $listID[$i+8]."\"";?>><?php if(isset($list[$i+8])) {echo "  <".$listType[$i+8].">  ".$list[$i+8];} ?></a></div>
        	<div id="p10" class="notification is-primary" role="alert"> <a href="lookk.php?set= <?php echo $listID[$i+9]."\"";?>><?php if(isset($list[$i+9])) {echo "  <".$listType[$i+9].">  ".$list[$i+9];} ?></a></div>
        
          <td width="10%" valign="top"></td>
        <th width="20%" valign="top"  >&ensp;        <!-- Optional JavaScript -->
        
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <div class="list-group">
            <p><h3 class="navi" style="padding:10px;border-radius:10px;border-style:solid;border-color:#00d0b1;"> ประเภทกระทู้ </h3></p>
            <h3 class="navbar-item">     </h3>
            <p><a href="select.php?story=true" class="list-group-item list-group-item-action">บทความ</a>            </p>
            <h3 class="navbar-item">     </h3>
            <p><a href="select.php?news=true" class="list-group-item list-group-item-action">ข่าว</a>            </p>
            <h3 class="navbar-item">     </h3>
            <p><a href="select.php?que=true" class="list-group-item list-group-item-action">คำถาม</a>            </p>
            <h3 class="navbar-item">     </h3>
            <p><a href="select.php?review=true" class="list-group-item list-group-item-action ">รีวิว</a></p>
            <h3 class="navbar-item">     </h3>
            <p> <a href="select.php?store=true" class="list-group-item list-group-item-action " >ขายของ</a> </p></div>
           </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script></th>
      </tr>
    </table>
    <table width="200" border="0" align="right">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br> <br>
    <br>
    <br>

  </form>

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
