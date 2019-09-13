<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">

    <?php include "./templates/sidebar.php"; ?>
<?php
include ("connection.php");




  $view_query = mysqli_query($connections, "SELECT * FROM `products`");

  echo "<table border='1' width='50%'>";
  echo "<tr>
      <td>product_id</td>
      <td>product_cat</td>
      <td>product_store</td>
      <td>product_title</td>
      <td>product_price</td>
      <td>product_desc</td>
      <td>product_image</td>
      <td>product_keywords</td>
      </tr>";
  while($row = mysqli_fetch_assoc($view_query)){
    $db_product_id = $row["product_id"];
    $db_product_cat = $row["product_cat"];
    $db_product_store = $row["product_store"];
    $db_product_title = $row["product_title"];
     $db_product_price = $row["product_price"];
      $db_product_desc = $row["product_desc"];
       $db_product_image = $row["product_image"];
        $db_product_keywords = $row["product_keywords"];

    echo "<tr>
      <td>$db_product_id</td>
      <td>$db_product_cat</td>
      <td>$db_product_store</td>
      <td>$db_product_title</td>
      <td>$db_product_price</td>
      <td>$db_product_desc</td>
      <td>$db_product_image</td>
      <td>$db_product_keywords</td>
      <td>
      <a href='ConfirmDelete.php?id=$db_product_id'>Delete</>
      </td>
      </tr>";
  }
  echo "</table>";
?>