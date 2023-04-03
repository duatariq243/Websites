<?php
$connection = mysqli_connect ('localhost' ,'root' ,'' ,'form_db');

if(isset($_POST['send'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $eventname =$_POST['eventname'];
    $guests=$_POST['guests'];
    $startdate =$_POST['startdate'];
    $enddate =$_POST['enddate'];
    
    $request ="insert into book_form(name	,email,	phone	,address ,	eventname, guests ,	startdate	,
    enddate) values('$name','$email','$phone' , '$address' ,'$eventname','$guests' ,'$startdate','$enddate') ";


    mysqli_query($connection,$request);
    header('location:book.php');

} 
else{
    echo 'something went wrong try again';
}







?>