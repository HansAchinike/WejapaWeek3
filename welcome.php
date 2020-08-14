<!DOCTYPE html>
<html>
<body style = " background-color : <?php echo  $_SESSION['color']; ?> ">

 <?php
    echo '<h3 align ="center"><i> You are welcome '. $_POST['name'].' '. $_POST['lname']. ',</i></h3>';
    echo '<h3 align ="center"><i> You have officially Registered as a member of the ' .$_POST["dept"].' department</i></h3>';
    echo '<h3 align ="center"><i> Your email address is '. $_POST['email'].'</i></h3>';
    echo '<h3 align ="center"><i> Your Date of birth is '. $_POST['dob'].'.</i></h3>';
    echo '<h1 align ="center"><strong> Explore <strong></h1>';
	
?>					

</body>
</html>




