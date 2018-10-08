<!doctype html>
<html lang="en" class = "bg-indexs">
  <head>
  <?php 
  session_start();
  ?>
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

<title>Weblog</title>
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
          <li class="is-active">
            <a href= "index.php">หน้าหลัก</a>
          </li>
          <li><a href="create.php">สร้างกระทู้</a></li>
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
<!-- ชุดปุ่ม menu เก่า
<form  method="get"> 
  <a href="index.php"  class="btn btn-primary" style="margin-left:560px">Home</a>
  <a href="create.php" class="btn btn-success" style="margin-left:30px" >สร้างกระทู้</a> 
&ensp;&ensp;&ensp; 
<a href="userhome.php?set=true" class="btn btn-info">User Home</a> &ensp;&ensp;&ensp;
<a href="alert.php" type="button" class="btn btn-primary"> แจ้งเตือน <span class="badge badge-light"><?php  echo $_SESSION['num'] ?></span> <span class="sr-only"></span></a>
&ensp;&ensp;&ensp;
<a href="profile.php" class="btn btn-light">Profile </a>
&ensp;&ensp;&ensp;
<a href="login.php" class="btn btn-dark">Logout </a>
 </form></P>
<p>&nbsp;</p>
 &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;
 

 -->

<div class = "container">
<section class="section">

      <div class="columns ">
   
          <div class="column field is-horizontal">
    
      <div class="tile is-parent ">
          <article class="tile is-child">

              <p class="title">
                  บทความ
                </p>
              <figure class="image is-128x128 ">
                <a href = "detailstory.php">   <img src="type-20180426T121636Z-001/type/blog.png"> </a>
                </figure>

          </article>


        </div>
     


        <div class="tile is-parent ">
            <article class="tile is-child ">
  
                <p class="title">
                    ข่าว
                  </p>
                <figure class="image is-128x128">
                <a href = "detailnews.php">   <img src="type-20180426T121636Z-001/type/news.png"> </a>
                  </figure>

            </article>
  
  
          </div>
       


          <div class="tile is-parent ">
              <article class="tile is-child ">
    
                  <p class="title">
                      คำถาม
                    </p>
                  <figure class="image is-128x128">
                  <a href = "detailque.php">   <img src=" type-20180426T121636Z-001/type/quaion.png"> </a>
                </figure>
  
              </article>
    
    
            </div>


            
          <div class="tile is-parent ">
              <article class="tile is-child ">
                  <p class="title">
                      รีวิว
                    </p>
                  <figure class="image is-128x128">
                  <a href = "detailreview.php">   <img src="type-20180426T121636Z-001/type/review.png"> </a>
              </figure>
  
              </article>
    
    
            </div>



            
          <div class="tile is-parent ">
              <article class="tile is-child ">
                  <p class="title">
                      ขายของ
                    </p>
                  <figure class="image is-128x128">
                  <a href = "detailstore.php">   <img src="type-20180426T121636Z-001/type/shop.png"> </a>
              </figure>
  
              </article>
    
    
            </div>


    </div>
  </div>



<footer class="footer bg-indexs">
  <div class="content has-text-centered">
    <p>
  Copyright Katoo Online 2018
  <p>Contact information: <a href="https://www.google.com/intl/th/gmail/about/#">katoo_admin@gmail.com</a></p>
    </p>
  </div>
</footer>



  </section>
  <!-- 

  <table width="200" border="0" align="center">
   <tr>
     <th nowrap><h2>เลือกประเภท</h2></th>
   </tr>
 </table>

 <table width="812" border="0" align="center" cellpadding="25">
  
   <tr>
      <td width="160" height="500" align="center" valign="middle"><p> <a href="detailstory.php"><img src="type-20180426T121636Z-001/type/blog.png" align="middle">				       </a></p>
        <p>&nbsp;</p>
     <p><B>บทความ</B></p></td>
      <td width="153" align="center" valign="middle" nowrap><p>&nbsp;
        </p>
        <p>&nbsp;</p>
        <p> <a href="detailnews.php" ><img src="type-20180426T121636Z-001/type/news.png" width="153" height="156" align="middle"></a>
        </p>
        <p>&nbsp;</p>
        <p><b>ข่าว</b></p>
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td width="160" align="center" valign="middle"><form>
        <p> <a href="detailque.php"> <img src="type-20180426T121636Z-001/type/quaion.png" align="middle"></a>
        </p>
        <p>&nbsp;</p>
      </form>
      <p><B>คำถาม</B></p></td>
      <td width="160" align="center" valign="middle" nowrap><p><a href="detailreview.php"><img src="type-20180426T121636Z-001/type/review.png" align="middle"></a></p>
        <p>&nbsp;</p>
        <p><b>รีวิว</b></p>
        <p></td>
      <td width="157" align="center" valign="middle" nowrap><form>
        <p>&nbsp;        </p>
        <p> <a href="detailstore.php" ><img src="type-20180426T121636Z-001/type/shop.png" align="middle"></a>
        </p>
        <p>&nbsp;</p>
      </form>
      <p><B>ขายของ</B></p>
      <p>&nbsp;</p></td>
   </tr>
</table>

  -->
</div>

</body>
</html>