
<?php

include("connect.php");

$url=$_POST["url_value"];
$short_url=substr(md5($url.mt_rand()),0,8);

$sql = "insert into short_urls values('','$url','$short_url')";

if ($conn->query($sql) === TRUE) {
  echo "The Short Code for the URL is :".$short_url."";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>