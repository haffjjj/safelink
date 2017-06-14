<?php
include "db.php";
if (isset($_POST['judul'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $queryadd = mysqli_query($connect, "INSERT INTO post VALUES('','$judul','$isi')") or die(mysqli_error());
  if ($queryadd == 1)
  {
    $status = 'success';
  }
  else
  {
    $status = 'failed';
  }
}
else
{
  $status = "-";
}

?>

<html>
<head>
  <title>Post</title>
</head>
<body>
  <form method="POST" action="">
    <p>Judul</p>
    <input type="text" name="judul">
    <p>Isi</p>
    <textarea type="text" name="isi" rows="20" cols="80"></textarea><br>
    <input type="submit" value="POST">
  </form>
  <p>Status : <?php echo $status ?></p>
</body>
</html>
