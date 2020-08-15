<?php
session_start();

?>

<!DOCTYPE html>
<html>
<body style = " background-color : <?php echo  $_SESSION['color']; ?> ">

 <?php
    echo '<h3 align ="center"><i> You are welcome '. $_SESSION['name'].' '. $_SESSION['lname']. ',</i></h3>';
    echo '<h3 align ="center"><i> You have officially Registered as a member of the ' .$_SESSION["dept"].' department</i></h3>';
    echo '<h3 align ="center"><i> Your email address is '. $_SESSION['email'].'</i></h3>';
    echo '<h3 align ="center"><i> Your Date of birth is '. $_SESSION['dob'].'.</i></h3>';
    echo '<h1 align ="center"><strong> Explore <strong></h1>';
	
?>					

</body>
</html>




