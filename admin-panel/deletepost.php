<?php
require("config.php");

if (empty(trim($_GET["delid"]))) {
    header("Location: /admin/posts?msg=0");
    exit();
} 

$id = trim($_GET["delid"]);
// sql to delete a record
$sql = "DELETE FROM posts WHERE id=$id";

if ($mysqli->query($sql) === TRUE) {
    header("Location: /admin/posts?msg=1");
} else {
    header("Location: /admin/posts?msg=0");
}

$mysqli->close();
?>