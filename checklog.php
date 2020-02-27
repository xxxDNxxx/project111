<?php
  $connection = new MongoClient();
  $db = $connection->faceverification;
  $collection = $db->user;
  $captcha;


    if(isset($_POST['username'])&&isset($_POST['password'])){
      if(isset($_POST['g-recaptcha-response'])){
        $captcha = $_POST['g-recaptcha-response'];
      }
      if(!$captcha){
        echo("<script>
        setTimeout(delaypopbot(),3000)

        function delaypopbot(){
          alert('กรุณายืนยันว่าคุณไม่ใช่หุ่นยนต์');
        }
        </script>");
        header('Location:register.php');

      }

      $secretKey = "6Lc25HEUAAAAAKqjyFrWDQvSu7470VR6EC2cdeRl";
      $ip = $_SERVER['REMOTE_ADDR'];
      $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
      $responseKeys = json_decode($response,true);
      if(intval($responseKeys["success"])!==1){
        echo("<script>
        setTimeout(delaypopbot(),3000)

        function delaypopbot(){
          alert('กรุณายืนยันว่าคุณไม่ใช่หุ่นยนต์');
        }
        </script>");
        header('Location:register.php');
      }else{
        $collection->insert(array("username"=>$_POST['username'],"password"=>$_POST['password'],"email"=>$_POST['email'],"sex"=>$_POST['sex'],"status"=>"user"));
        header('Location:login.php');
      }
  }

?>
