<?php 
include ('db_connect.php');

if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])) {
    header ('Location: index.php');
}
elseif (!empty($_POST['username']) && !empty($_POST['password'])) {

	$username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);

	$checklogin = mysql_query("SELECT * FROM User WHERE Username = '".$username."' AND Password = '".$password."'");

    if(mysql_num_rows($checklogin) == 1)
    {
        $user = mysql_query("SELECT * FROM User WHERE Username = '".$username."' ");
    	$row = mysql_fetch_array($user);
        $username = $row['Username'];

        //Set session variables
        $_SESSION['Username'] = $username;   
        $_SESSION['LoggedIn'] = 1;

        // set a cookie that expires after thirty days
        $expire=time()+60*60*24*30;
        setcookie("user", $username, $expire);

        header ('Location: index.php');    
    }
    
    else
    {
    	echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. 
        Please <a href=\"../public_html/login.html\">click here to try again</a>.</p>";
    }
}
?>

</body>
</html>