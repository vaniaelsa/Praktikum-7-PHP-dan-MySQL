<!DOCTYPE html>
<html>
<head>
	<title> Halaman Log In </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    h1 {
        text-align: center;
        font-family: tahoma;
        color:black;
        background-color: lightcoral;
    }

    /* style pada tag body */
    body {
        background-image: url("gambar/background.jpg"); 
        background-size: auto;
        }
    </style>
</head>
<body>
    <h1 >
        HALAMAN LOGIN
    </h1>
    
	<div id="container">
        <form action="login.php" method="post">	
            <label for="fname"> Username:</label>
            <input type="text" name="Username" placeholder="Masukan Username">
            <label for="lname"> Password:</label>
            <input type="password" name="Password" placeholder="Masukan Password">
            <input type="submit" value="Login">
            <input type="reset" value="Reset">
          </form>
	</div>
	
</body>

</html>