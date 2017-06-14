<?php
include "db.php";
$query = mysqli_query($connect, "SELECT * FROM link") or die (mysqli_error());
if(mysqli_num_rows($query) == 0)
{
  echo "tidak ada safelink";
}
else {
  ?>
  <html>
  <head>
    <title>
    </title>
  </head>
  <body>
    <center>
      <h2>Safelink</h2>
      <table border="1">
        <tr>
          <th>link</th>
          <th>safelink</th>
        </tr>
        <?php while($r = mysqli_fetch_array($query)):?>
          <tr>
            <td><?php echo $r['link'] ?></td>
            <td>http://localhost/neo/safelink/safe.php?url=<?php echo $r['generate'] ?></td>
          </tr>
          <?php
        endwhile;
      }
      ?>
    </table>
    <a href="http://localhost/neo/safelink/linkgen.php">Generate Link</a>
    <a href="http://localhost/neo/safelink/postgen.php">Post
  </center>
</body>
</html>
