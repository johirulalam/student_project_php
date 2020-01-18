
<?php include 'header.php'; ?>

<!-- Default form login -->
<form class="text-center border border-light p-5"  method="POST">

    <p class="h4 mb-4">Student Sign in</p>

    <!-- Email -->
    
    <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4 col-md-6 " placeholder="E-mail" >
 
    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4 col-md-6 " placeholder="Password" >

    
    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4"  type="submit" name="submit">Sign in</button>



    <!-- Register -->
    <p>Not a member?
        <a href="reg.php">Register</a>
    </p>

    <?php 

      if (isset($_POST['submit'])) {
        $email     = $_POST['email'];
        $password  = $_POST['password'];

        $sql = "SELECT * FROM student WHERE email = '$email' AND password='$password' ";
        $result = $connect->query($sql);

        if ( mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);
            $id = $row['id']; 
          
          header('location: student.php');

        } else {
          echo '<b style="color:red;">Your Email or Password is wrong</b>';
        }
        
      }


      ?>

    <?php include 'footer.php'; ?>