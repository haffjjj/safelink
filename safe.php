<?php
include "db.php";
$url = $_GET['url'];
$querylink = mysqli_query($connect, "SELECT * FROM link where generate = '$url'") or die (mysqli_error());
if(mysqli_num_rows($querylink) == 0)
{
  echo "Url Tidak di temukan";
}
else {
  ?>
  <html>
  <head>
    <title>SafeLink</title>
  </head>
  <body>
    <?php
    while($r = mysqli_fetch_array($querylink)):?>
    <a href="<?php echo $r['link']; ?>"><h2>Download</h2></a>
    <?php
  endwhile;
}
$querypost = mysqli_query($connect, "SELECT * FROM post order by rand() limit 1") or die (mysqli_error());
while($r = mysqli_fetch_array($querypost)):
?>
  <h2><?php echo $r['judul'] ?></h2>
  <p><?php echo $r['isi'] ?></p?>
<?php
endwhile;
?>
</body>
</html>
