<?php 
    if (isset($_POST['user_name2']) && isset($_POST['password'])) {
        function validate_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
        
    }else{
        $em = "Unknown error occurred";
        header("Location: ../login.php?error=$em");
        exit();
    }
?>