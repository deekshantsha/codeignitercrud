<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="w3-container w3-center w3-animate-top " >
  <h1>Update</h1>
  
</div>
<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['id'];?>">

  <!-- End of Navbar -->
  <div class="container" style="">
  	<h3 class="w3-btn  w3-blue" disabled>Update User</h3>
  	<hr>
  	

  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group">
  				<label class="w3-text-blue"><b> Name</b></label>
      <input name="name" value="<?php echo set_value('name',$user['name']);?>" class="w3-input w3-border" type="text">
      <?php echo form_error('name');?>

      <label class="w3-text-blue"><b> E-mail</b></label>
      <input name="email" value="<?php echo set_value('email',$user['email']);?>" class="w3-input w3-border" type="email" >
      <?php echo form_error('email');?> <br>

      <button  class="w3-btn w3-blue">update</button>
      <a type="button" class="btn btn-danger w3-btn w3-gray"href="<?php echo base_url().'index.php/user/index';?>">Cancel</a>

  			</div>
  		</div>
  	</div>
  </div>
</form>
</body>
</html>