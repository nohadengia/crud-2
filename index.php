
<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message']?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php session_unset(); } ?>

        <!-- ADD TASK FORM -->

        <div class="card card-body">
          <form action="save_task.php" method="POST">
            <form action="script" method="POST">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="enter your name" autofocus>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="enter your password" autofocus>
              </div>
              <div class="form-group">
                <select name="gender" class="form-control">
                  <option value="male">male</option>
                  <option value="female">female</option>
                </select>
              </div>
              
              <div>                        
                <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save">
              </div>   
            </form>
          </div>
          
        </div>
        <div class="col-md-8">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>name</th>
                <th>password</th>
                <th>gender</th>
                <th>Action</th>


              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * FROM test";
              $result_tasks = mysqli_query($conn, $query);    

              while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  
                  <td>
                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-info">
                      <i class="fas fa-marker"></i>edit
                    </a>
                    <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                      <i class="far fa-trash-alt"></i>delete
                    </a>
                    
                    
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </main>
