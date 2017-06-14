<?php
include "db.php";

if (isset($_POST['link'])) {
  $link = $_POST['link'];
  $generate = md5(uniqid(rand(), true));
  $safelink = "http://localhost/neo/safelink/safe.php?url=$generate";
  $queryadd = mysqli_query($connect, "INSERT INTO link VALUES('','$generate','$link')") or die(mysqli_error());
  if ($queryadd == 1) {
    $status = 'success';
  }
  else {
    $status = 'failed';
  }
}
else {
  $link = "";
  $safelink = "";
  $status = "";
}
?>
<html>
<head>
  <title> Generate Link </title>
</head>
<body>
  <form method="POST" action="">
    <p>Masukan Link</p>
    <input type="text" name="link">
    <input type="submit" value="Generate">
  </form>
  <p>link : <b> <?php echo $link ?> </b></p>
  <p>safelink : <a href="<?php echo $safelink ?>"><b> <?php echo $safelink ?> </a></b></p>
  <p>status : <b> <?php echo $status ?> </b></p>
</body>
</html>
