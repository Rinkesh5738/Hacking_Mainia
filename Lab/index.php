<!DOCTYPE html>
<html>
<head>
	<title>Hacking Mania</title>

	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div>
    <header><b>Hacker Mania</b></header>
     <form action="login.php" method="get">
     	<h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
     	<label id="label1">User Name </label>
     	<input type="text" name="uname" placeholder="User Name"><br>
     	<label id="label2">Password </label>
     	<input type="password" name="pass" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
     </div>
    
</body>
</html>