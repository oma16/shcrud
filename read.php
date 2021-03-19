<?php
session_start();
require_once('mysql-connect.php');
require_once('header.php'); 

if(isset($_GET['id'])){
    $id = $_GET['id'];
$query = @mysqli_query($dbc, "SELECT * FROM intern WHERE id='$id' ");
        
 

 if($query){
     
    
     while ($row = mysqli_fetch_array($query)){
        echo "<div style ='margin:20px; font-size:30px; color:green'>". 'Welcome ' . $row['firstname'] . '  ' . $row['lastname']."</br>"; "</div>";
         echo'Id :'. $row['id'] ."</br>";
          echo 'Firstname :'.$row['firstname']."</br>";
          echo'Lastname : '.$row['lastname']."</br>"; 
           echo 'Email : '. $row['email']."</br>";
         echo  'Phonenumber : '. $row['phonenumber']."</br>" ;
         echo 'Gender: '. $row['gender']."</br>";
         echo 'Date of birth : '.  $row['date_of_birth']."</br>";
          echo 'Nationality : '. $row['nationality']."</br>";
         echo 'Reg_date: '. $row['reg_date']."</br>";
         echo 'Updated_at : '. $row['updated_at']."</br>";
         
         
     }
        
    }else{
        echo " couldn't issue database query";
        echo mysqli_error($dbc);

    }
       }       mysqli_close($dbc);
?>