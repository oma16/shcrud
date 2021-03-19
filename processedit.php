<?php
session_start();
require_once('mysql-connect.php');


$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$phonenumber = $_POST["phonenumber"];
$gender = @$_POST["gender"];
$dob = $_POST["dob"];
$nationality = $_POST["nationality"];


$_SESSION["id"] = $id;  
$_SESSION["firstname"] = $firstname;  
$_SESSION["lastname"] = $lastname;
$_SESSION["email"] = $email ;
$_SESSION["password"] = $password;
$_SESSION["phonenumber"] = $phonenumber;
$_SESSION["gender"] = $gender;
$_SESSION["dob"] =  $dob ;
$_SESSION["nationality"] = $nationality;






if(isset($_POST["update"])){

    $error = [];  

    echo "<div style ='margin:20px; font-size:30px; color:red'> Welcome $firstname  $lastname, </div>";
   if(empty($_POST["firstname"])){
       
       $error[] = 'firstname is required';
       header('location:edit.php');


   }else if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
       $error[] = "Only letters and white space allowed";
       header('location:edit.php');

     }
   else{
       $firstname = trim($_POST['firstname']);
   }
   if(empty($_POST["lastname"])){
       
       $error[] = 'lastname is required';
       header('location:edit.php');


   }else if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
       $error[] = "Only letters and white space allowed";
       header('location:edit.php');

     }
   else{
        $lastname = trim($_POST['lastname']);
   }
   if(empty($_POST["email"])){
       
       $error[] = 'Email is required';
       header('location:edit.php');


   }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
       header('location:edit.php');

     }
   else{
        $email = trim($_POST['email']);
   }
   if(empty($_POST["password"])){
       
       $error[] = 'password is required';
       header('location:edit.php');

   }else{
        $password = trim($_POST['password']);
   }
      if(empty($_POST["phonenumber"])){
       
       $error[] = 'phone number is required';
       header('location:edit.php');

   }
   else{
        $phonenumber = trim($_POST['phonenumber']);
   }
   if(empty($_POST["gender"])){
       
       $error[] = 'gender is required';
       header('location:edit.php');


   }
   else{
        $gender = trim($_POST['gender']) ;
   }
   if(empty($_POST["dob"])){
       
       $error[] = 'dob is required';
       header('location:edit.php');


   }
   else{
            $dob = trim($_POST['dob']) ;
   }
   if(empty($_POST["nationality"])){
       
       $error[] = 'nationality is required';
       header('location:edit.php');

   }
   else{
        $nationality = trim($_POST['nationality']);
   }
   if(empty($error)){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $response = @mysqli_query( "SELECT FROM intern WHERE id=$id");
        $row =mysqli_fetch_array($response);
    }
  
   
   $query = "UPDATE intern SET  firstname  ='$firstname', lastname ='$lastname',
   email ='$email',password ='$password', phonenumber ='$phonenumber', gender='$gender',
   date_of_birth ='$dob',nationality ='$nationality', updated_at = NOW()  WHERE id ='$id' ";

if (mysqli_query($dbc, $query)) {
    $_SESSION['message'] = "Record updated successfully";
    header('location:index.php');

} else {
    echo "Error updating record: " . mysqli_error($dbc);
}
}else{
    echo "You need to enter the following data <br />";
    foreach($error as $error){
        echo $error;
}
}
}
mysqli_close($dbc);
?>