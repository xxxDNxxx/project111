<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style type="text/css">


    table{
    margin-right: center;
    margin-left: center;
    }

    div.ex1{
      width: auto;
      height: 200px;
    }

    .button5:hover {
    background-color: #555555;
    color: white;
}

   body {

	/* background-image:url(logoKT.png); */
   /* background-image: url("KT.ONLINE-v2.png");
	background-size:contain;
	background-attachment:fixed; */
  background-image: url("KTBG.png");

     background-repeat: no-repeat;
     /* position: relative; */
     background-repeat: no-repeat;
 background-position: center center;
 background-attachment: fixed;
 background-size: cover;
	 }
    </style>


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

    <title>Weblog</title>
</head>
  <body>
    <div class="ex1">
<img src="ktheader.png" alt="headerkt" width="100%" height="300px" >
  </div>

  <!-- <img  src="KT.ONLINE.png" width="100%" height="200" > -->
    &ensp;&emsp;&ensp;&ensp;
    <table width="200" border="0" align="center" cellpadding="120">

      <tr>

        <td  nowrap  "><form name="form1" method="post">
          <div class="form-group">
            <h3> <label style="color:#eae754">Username</label></h3>
            <input style="color:#E8C16E" name="username" class="form-control"  placeholder="Username"
  			</div>
          <div class="form-group">
           <h3> <label  style="color:#eae754">Password</label></h3>
            <input name="password" type="password" class="form-control" placeholder="Password">
          </div>

          <!-- <button  class="btn btn-primary" >Login</button> -->
          <!-- <button type="submit" class="w3-button w3-black w3-round-large">Login</button> -->
          <button type="submit" class="btn border1 border111">Login</button>

  &ensp;&emsp;&ensp;&ensp;

  <a href="register.php" class="btn border1 border111" action="register.php">สมัครสมาชิก</a>


</form></td>
      </tr>
  </table>
</body>
</html>
