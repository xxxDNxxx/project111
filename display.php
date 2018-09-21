<?php
 	$connection= new MongoClient();
  $db= $connection->ktonline;
  $collection=$db->answer;
	$collection->insert(array("_id"=>1,"วันที่"=>date("Y-m-d"),"เวลา"=>date("H:i"),"username"=>"chainrocker","contend"=>"xxxxxxxxxxx","commentid"=>1));
	?>
