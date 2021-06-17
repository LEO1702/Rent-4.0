<?php
   $n = $_POST['itemname'];
   $address = nl2br($_POST['address']);
   $p = $_POST['itempics'];
   $t = $_POST['itemtypes'];
   $price = $_POST['price'];
   $per = $_POST['pricetypes'];
   $note = nl2br($_POST['mota']);
   echo "<p>Item's Name : ".$itemrname."</p>";
   echo "<p>Address : ".$."address."</p>";
   echo "<p>Pictures : ".$itempics."</p>";
   echo "<p>Type : ".$itemtypes."</p>";
   echo "<p>Price : ".$price."</p>";
   echo "<p>Per : ".$pricetype."</p>";
   echo "<p>Note : ".$note."</p>";


?>


