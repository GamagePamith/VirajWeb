<?php
include "connection.php";

$search_rs = $_POST["rs"];

    Database::search("SELECT * FROM `notes` WHERE `note_title` LIKE '%".$search_rs."%' ");

?>