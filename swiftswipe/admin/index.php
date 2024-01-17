<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="../image/logo.png">
<title>Admin Login</title>
</head>

<nav class="navbar fixed-top " style="background-color: white;">
  <div class="container-fluid">
    <div class="navbar-brand">
      <img
        src="../image/logo.png"
        class="me-2"
        height="50"
        alt="MDB Logo"
        loading="lazy"
      />
      <large>Swiftswipe</large>
</div>
  </div>
</nav>
</nav>

<body>


<div class="d-flex min-vh-100 justify-content-center align-items-center">
<div class="divcolorwhite p-3">
     <form action="login.php" method="post">

	 <div class="p-2 bd-highlight">
     	<h2 class="text-center bluetext">ADMIN LOGIN</h2>
		 </div>
		 <div class="p-2 bd-highlight">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 </div>
		 <div class="p-2 bd-highlight">
     	<input class="inputtext" type="text" name="uname" placeholder="Usermame"><br>
		 </div>
		 <div class="p-2 bd-highlight">
     	<input class="inputtext" type="password" name="password" placeholder="Password"><br>
		 </div>
		 <div class="p-2 bd-highlight">
     	<button type="submit" class="yellowbutton">Login</button>
		 </div>

     </form>
	</div>
	</div>
</body>


<nav class="fixed-bottom text-center text-lg-start">

  <div class="text-center p-3" style="background-color: white;">
    <p class="text-body">This is not an official website of National University © 2024 Copyright </p>
  </div>

</nav>
</html>