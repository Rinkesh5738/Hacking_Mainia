<!DOCTYPE html>
<html>
<head>
    <title>Find User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
    <header><b>Hacking Mania</b></header>
     <form method="get">
        <h2>LOGIN</h2>
        <label id="label3">User ID</label>
        <input type="text" name="uid" placeholder="Enter User Id Number"><br>
        <a href="logout.php">Logout</a>

        <button type="submit" name="submit" id="submitbtn">Find</button>
         
     </form>
     </div>
     
     <div id="message" >

     <?php
     include "db_conn.php";

    if( isset( $_GET['submit'])){
    // Get input
    $id = $_GET['uid'];

    // Check database
    $getid  = "SELECT fname FROM users WHERE id = '$id';";
    $result = mysqli_query($conn,$getid ); // Removed 'or die' to suppress mysql errors

    // Get results
    $num = @mysqli_num_rows( $result ); // The '@' character suppresses errors
    if( $num > 0 ) {
        // Feedback for end user
        echo '<pre>User ID exists in the database.</pre>';
    }
    else {
        // User wasn't found, so the page wasn't!
        header( $_SERVER[ 'SERVER_PROTOCOL' ] . ' 404 Not Found' );

        // Feedback for end user
        echo '<pre>User ID is MISSING from the database.</pre>';
    }

    //((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
}

?>  
</div>

</body>
</html>
