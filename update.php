<?php include 'header.php'; ?>


<?php 

$id = $_GET['updateId'];

$sql = "SELECT * FROM student WHERE id = '$id'; ";

$result = $connect->query($sql);

$row = mysqli_fetch_assoc($result);

$name    = $row['name'];
$email   = $row['email'];
$phone   = $row['phone'];
$address = $row['address'];

 ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Update Student</h1>
        <form  method="POST">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text"  class="form-control" name="name" value="<?php echo $name; ?>" >
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" >
          </div>

          <div class="form-group">
            <label>Phone</label>
            <input type="text"  class="form-control" name="phone" value="<?php echo $phone; ?>" >
          </div>

           <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>"  >
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" >
          </div>

          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password"  class="form-control" name="confirmpassword">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-sm" value="Update Student" name="register">
          </div>

        </form>


        <?php 

        	if(isset($_POST['register'])) {

        		$name            = $_POST['name'];
        		$email           = $_POST['email'];
        		$phone           = $_POST['phone'];
        		$address         = $_POST['address'];
        		$password        = $_POST['password'];
        		$confirmPassword = $_POST['confirmpassword'];


        		$sql = "UPDATE student SET name='$name', email='$email', phone ='$phone', address = '$address', password = '$password' WHERE id ='$id' ; ";

        		$result = $connect->query($sql);

        		if(!$result) {
        			echo "Student update failed ".$connect->error."<br>";
        		} else {
        			header('location: admin.php');
        		}
        	}


         ?>



      


      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>