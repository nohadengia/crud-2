
	 <link rel="stylesheet" href="CSS/bootstrap.css"/>
<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM test WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: index.php');
}

?>
<?php  ?>
