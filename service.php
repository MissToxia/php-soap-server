<?php

include './client.php';
$id = $_GET["id"];
$id_array = array('id' => $id);
echo $client->getName($id_array);

?>