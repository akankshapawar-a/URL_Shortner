<?php
include("connect.php");



if(isset($_POST['sc']))
{

$url=$_POST['sc'];



$sql="select long_url from short_urls where short_url='$url'";
   
$result=$conn->query($sql);



while($row=$result->fetch_assoc())
echo "<a href=".$row["long_url"]." target=_new >".$row["long_url"]."</a>";
    
}
?>