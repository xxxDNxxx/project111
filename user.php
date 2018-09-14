<?php
 	$connection= new MongoClient();
  $db= $connection->weblog;
  $collection=$db->forum;
//$collection->insert(array("forumname"=>"กล้วยน้ำหว่า","forumid"=>1,"username"=>"chainrocker","type"=>"ข่าว"));
//$collection->insert(array("username"=>"kachain","forumid"=>17));
 $doc=array('_id'=>1);
	 $collection->update(array("_id"=>1),array('$set'=>array("like"=>15)));
	?>