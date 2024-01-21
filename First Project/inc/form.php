<?php

$firstname = $_POST['firstname']; // Read and post Variable 
$lastname = $_POST['lastname']; // Read and post Variable 
$email = $_POST['email']; // Read and post Variable 

$errors = [
    'firstnameError' => '',
    'lastnameError' => '',
    'EmailError' => '',
];
if (isset($_POST['submit'])){ // To Send Variables to Database when press submit
    // check firstname
    if(empty($firstname)){ // To Check If variable Empty or no
        $errors['firstnameError'] = 'الأسم الأول فارغ !'; //Array To print Error message
        }
        //check lastname
        if(empty($lastname)){ // To Check If variable Empty or no
        $errors['lastnameError'] = 'الأسم الأخير فارغ !'; //Array To print Error message
        }
        //check email
        if(empty($email)){ // To Check If variable Empty or no
        $errors['EmailError'] = 'البريد الألكتروني فارغ !'; //Array To print Error message
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){// To check is email ture or not
        $errors['EmailError'] = 'أكتب بريد صحيح !'; //Array To print Error message
    }
    
    if(!array_filter($errors)){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']); 
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);  
        $email = mysqli_real_escape_string($conn, $_POST['email']); 
        $sql = "INSERT INTO users(firstname, lastname, email) VALUES('$firstname', '$lastname', '$email')"; // to storge variables in table than to rows 
    

        if( mysqli_query($conn, $sql)){ // after press submit will refresh page
            header('Location: ' . $_SERVER['PHP_SELF']); 
            }else{
             echo 'Error : ' . mysqli_error($conn); // if has any error will print it in page
            }
        }


}
?>