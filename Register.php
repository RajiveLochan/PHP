<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="homepage.css"/>
  <link rel="stylesheet" type="text/css" href="loginandsignup.css" />
<title>Untitled Document</title>


</head>

<body>

    <body style="background-color:#FFE4C4	;">
    <ul>

        <li><a href="Homepage.html">Home</a></li>
        <li class="dropdown">
            <a href="Menu.html" class="dropbtn">Menu</a>
            <li><a href="specialoffers.html">Special Offers</a></li>
            <li><a href="Homepage.html#AboutUs">About Us</a></li>
            <li><a href="Homepage.html#ContactUs"></a></li>
            <li style="float: right"><a href="LoginR.php">LOGIN</a></li>
            <li style="float: right"><a href="Register.php">REGISTER</a></li>
    </ul>


<?php
if (isset($_POST['Submit']))

{ include("connection.php");
session_start();
    $UserID=$_POST['u_id'];
    $Usertype=$_POST['u_type'];
    $Firstname=$_POST['u_fname'];
    $Lastname=$_POST['u_lname'];
    $Email=$_POST['u_email'];
    $useraddress=$_POST['u_address'];
    $password=$_POST['u_password'];
    $username=$_POST['uname'];

     echo "Your userid is ".$UserID."<br>";

    echo "Your Usertype is ".$Usertype."<br>";

    echo "Your Firstname is ".$Firstname."<br>";

    echo "Your Lastname is ".$Lastname."<br>";

    echo "Your Email is ".$Email."<br>";

    echo "Your useraddress is ".$useraddress."<br>";

     echo "Your password is ".$password."<br>";

    echo "Your username is ".$username."<br>";
    $sql = "INSERT INTO users "."(u_id,u_type,u_fname,u_lname,u_email,u_address,u_password,uname)"."VALUES('$UserID','$Usertype','$Firstname','$Lastname','$Email','$useraddress',
    '$password','$username')";

    $Result = mysqli_query($conn,$sql);

    if(!$Result)
    {
        die('Could not enter data: '.mysqli_error($conn));
    }

    echo "Entered Data Successfully";

}
else{
?>


<form name="form" form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">


 <label for="UserID"> User ID :</label>
 <input type="text" name="u_id" size="50" id="u_id" /><br /><br />

 <label for="Usertype"> User Type :</label>
<input type="text" name="u_type" size="50" id="u_type" /><br /><br />

 <label for=Firstname""> First name :</label>
 <input type="text" name="u_fname" size="50" id="u_fname" /><br /><br />

<label for="Lastname"> Last name :</label>
 <input type="text" name="u_lname" size="50" id="u_lname" /><br /><br />

     <label for="Email"> Email :</label>
 <input type="text" name="u_email" size="50" id="u_email" /><br /><br />

     <label for="useraddress"> Address :</label>
 <input type="text" name="u_address" size="50" id="u_address" /><br /><br />

  <label for="">Username</label>
 <input type="text" name="uname" size="50" id="uname" /><br /><br />

     <label for=""> Password :</label>
 <input type="password" name="u_password" size="50" id="u_password" /><br /><br />



 <input type="submit" name="Submit" value="SUBMIT" />
 <input type="reset" name="Reset" value="RESET" />

</form>




<?php
    }

?>


</body>

</html>
