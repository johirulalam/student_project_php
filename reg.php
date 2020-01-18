<?php include 'header.php'; ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Register New Student</h1>
        <form  method="POST">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text"  class="form-control" name="name" >
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" name="email"  >
          </div>

          <div class="form-group">
            <label>Phone</label>
            <input type="text"  class="form-control" name="phone"  >
          </div>

           <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address"  >
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
            <input type="submit" class="btn btn-primary btn-sm" value="Register New Student" name="register">
          </div>


        </form>

        <?php 
          if (isset($_POST['register'])) {
            $name            = $_POST['name'];
            $email           = $_POST['email'];
            $phone           = $_POST['phone'];
            $address         = $_POST['address'];
            $password        = $_POST['password'];
            $confirmPassword = $_POST['confirmpassword'];

            $sql = "INSERT INTO student (name, email, phone, address, password) VALUES ('$name', '$email', '$phone', '$address', '$password');";

            $result = $connect->query($sql);

            if(!$result) {
              echo "registration failed, Try again ".$connect->error;
            } else {
              header('location: studentlogin.php');
            }
          }
         ?>


      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>