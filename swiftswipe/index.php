<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="image/slogo1.png">
</head>
<body style="background-color: white;">


<nav class="navbar fixed-top " style="background-color: white; box-shadow: 0 0 10px 5px rgba(0,0,0,0.1);">
  <div class="container-fluid">
    <div class="navbar-brand">
      <img
        src="image/slogo1.png"
        class="me-2"
        height="50"
        alt="nu logo"
        loading="lazy"
      />
      <large>Swiftswipe</large>
</div>
  </div>
</nav>

<div class="d-flex min-vh-100 justify-content-center align-items-center">

<div class="p-3" style="background-color: white;">
     <form action="user/login.php" method="post">


	 <div class="d-flex flex-column bd-highlight mb-3">     

     	<h2 class="text-center bluetext">LOGIN</h2>
		 <div class="p-2 bd-highlight">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 </div>


		
	     
     <div class="p-2 bd-highlight">
     	<input class="inputtext2" type="email" name="uname" placeholder="Email" required>
		 </div>

		 <div class="p-2 bd-highlight">
     	<input class="inputtext2 " type="password" name="password" placeholder="Password" required>
		 </div>

		
	
		 <div class="p-2 bd-highlight">
		  <button type="submit" class="button1">Login</button>
		  </div>
		  <div class="p-2 bd-highlight">
          <p>Doesn't Have an account? <a class="text-center ablue" href="user/signup.php" >Register</a></p>
		  </div>
		  
		</div>
    </form>
	</div>
	</div>

	
<nav class="fixed-bottom text-center text-lg-start">

  <div class="text-center p-3 gray" style="background-color: white; color:#D4D6DC;" >
    <p>This is not an official website of National University © Swiftswipe 2024 Copyright </p>
  </div>

</nav>
</body>


</html>