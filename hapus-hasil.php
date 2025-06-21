<?php
  include("koneksi.php");

  $query = "DELETE FROM tb_users where id=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
    header("location:pakar-hasil.php");
  }
 ?>
