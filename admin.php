<?php include 'header.php'; ?> 

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Sl.</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  	<?php 

  		$sql = "SELECT * FROM student;";
  		$result = $connect->query($sql);
  		$serial = 0;
  		while( $row = mysqli_fetch_assoc($result) ) {

  			$id      = $row['id'];
  			$name    = $row['name'];
  			$email   = $row['email'];
  			$phone   = $row['phone'];
  			$address = $row['address'];
  			$serial++;



   ?>

  			<tr>
               <th scope="row"><?php echo $serial; ?></th>
               <td><?php echo $id; ?></td>
               <td><?php echo $name; ?></td>
               <td><?php echo $email; ?></td>
               <td><?php echo $phone; ?></td>
               <td><?php echo $address; ?></td>
               
               <td class="btn-group">
				      	<a href="update.php?updateId=<?php echo $id; ?>" class="btn btn-primary btn-sm" >Update</a>
				      	<a href="admin.php?deleteId=<?php echo $id; ?>" class="btn btn-danger btn-sm">Delete</a>
			    </td>
               
            </tr>




  		<?php  } ?>



<?php 


if(isset($_GET['deleteId'])) {
	$delete = $_GET['deleteId'];
	$sql = "DELETE FROM student WHERE id='$delete'; ";
	$connect->query($sql);

	if(!$result) {
		echo "failed to delete ".$connect->error."<br>";
	} else {
	//	header('location: admin.php');
	}
}


 ?>


    

  </tbody>
</table>


<?php include 'footer.php'; ?>