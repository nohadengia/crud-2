
  <link rel="stylesheet" href="CSS/bootstrap.css"/>


  <?php

session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'test'
) or die(mysqli_erro($mysqli));

//Main code starts here
  $name = $_POST['name'];
  $password = $_POST['password'];
   $gender = $_POST['gender'];  

  $query = "INSERT INTO test(name,password,gender) VALUES ('$name', '$password','$gender')";
  $result = mysqli_query($conn, $query);

  /*if(!$result) {
    die("Query Failed.");
  }*/

/*  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');*/
header('Location: index.php');

