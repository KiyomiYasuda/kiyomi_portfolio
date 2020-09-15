<?php

require_once '../class/deleteItem.php';
$delete = new Delete();

$item_id = $_GET['item_id'];


$delete->deleteItem($item_id); 

?>