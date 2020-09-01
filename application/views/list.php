<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="w3-container w3-center w3-animate-top " >
  <h1 style="background-color: red; "class="" >View Users </h1>

  <hr>
  
<div class="row">
	<div class="col-md-12">
		<?php
		$success = $this->session->userdata('success');
		if($success != "") {
		?>
		<div class="alert alert-success"><?php echo $success ?></div>
	<?php
     } 
     ?>

     	<?php
		$success = $this->session->userdata('failure');
		if($success != "") {
		?>
		<div class="alert alert-"><?php echo $failure ?></div>
	<?php
     } 
     ?>
	</div>		
</div>

 <div class="row ">
 	 <div class="container" style="padding-top: 10px; margin-bottom: 5%; ">
  <div class="col-md-12  text-right">
  	<a type="button" class="btn btn-warning btn-lg fa fa-plus" href="<?php echo base_url().'index.php/user/create';?>"></a>  CREATE ACCOUNT</button>
  </div>
  </div>
 </div>




  <div class="row">
  	
  	<div class="col-md-12">
  		<table class="table table-striped">
  <tr>
  	  <th>ID</th>
  	  <th>Name</th>
  	  <th>Email</th>
  	  <th width="70">Edit</th>
  	  <th width="70">Delete</th>
  </tr>


  <?php if(!empty($users)) { foreach($users as $user) {?>
  <tr>
  	<td><?php echo $user['id']; ?></td>
  	<td><?php echo $user['name']; ?></td>
  	<td><?php echo $user['email']; ?></td>
  	 <td>
  	 	<a  type="button" class="btn btn-primary fa fa-pencil" href="<?php echo base_url().'index.php/user/edit/'.$user['id']; ?>"> UPDATE</a>
  	 	<!-- <a href="<?php echo base_url().'index.php/user/edit/'.$user['id']; ?>"class="fa fa-pencil" class="btn" style="color-red;" > Edit</a> -->
  	 	</td>
  	 	<td>
  	 		<a  type="button" class="btn btn-danger fa fa-trash-o" href="<?php echo base_url().'index.php/user/delete/'.$user['id']; ?>"> DELETE   </a>
  	 	<!-- <i href="<?php echo base_url().'index.php/user/delete/'.$user['id']; ?>"class="fa fa-trash-o" class="btn" > Delete</i> -->
  	 	</td>
  	
  </tr>
<?php } } else {?>
     <tr>
  	<td class="col-span-5">Records not found</td>
  </tr>
<?php }?>
</table>
  	</div>
  </div>
</div>

</body>
</html>
