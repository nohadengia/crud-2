
<?php
include("db.php");
$name= '';
$password= '';
$gender= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM test WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $name = $row['name'];
    $password = $row['password'];
    $gender = $row['gender'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];

  $query = "UPDATE test set name = '$name', password = '$password',gender = '$gender' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
          <div class="form-group">
            <input value="<?php echo $name?>" name="name" type="text" class="form-control" placeholder="Update your name">
          </div>
          <div class="form-group">
            <input value="<?php echo $password?>" name="password" class="form-control" cols="30" rows="10" placeholder="Update your password">
          </div>
          <div class="form-group">
            <input value="<?php echo $gender?>" name="gender" type="text" class="form-control" placeholder="Update your gender">
          </div>
          <button class="btn btn-info" name="update">
            Update

          </button>

          <a href="index.php" class="btn btn-warning btn-info"> <i class="fa fa-list" aria-hidden="true"></i> go back</a> 
        </div>

      </div>
    </form>

  </div>
</div>
</div>
<?php include('includes/footer.php'); ?>
