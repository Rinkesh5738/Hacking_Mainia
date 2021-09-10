<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
    <center>
    <header><b>Hacking Mania</b></header>

    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <form methiod="post">
     <input type="text" name="name">
     <input type="submit" value="submit">
     <br>
     <a href="finduser.php">Next</a>
     </form>
     </center>

     <?php

//header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    // Get input
    $name = str_replace( '/<(.)s(.)c(.)r(.)i(.)p(.)t/i', '', $_GET[ 'name' ] );

    // Feedback for end user
    echo "<pre>Hello ${name}</pre>";
}

?>
</body>
</html>


<?php 
}
 ?>