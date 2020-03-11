<?php

include('includes/db.php');

$id=$_REQUEST["id"];
$sql="delete from mascotas where id='$id'";

$result=DB::query($sql);


header ('location: index.php');


?>