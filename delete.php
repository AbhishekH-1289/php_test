<?php
include "db.php";

if(isset($_GET)){
    $id=$GET["id"];
    $sql = $conn -> prepare("delete from courses where id=?");
    $sql -> bind_param("i",$id);
}

?>