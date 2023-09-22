<?php 
$server = 'localhost';
$user = 'root';
$password = '';
$database_name = 'book_db';
$connection = '';

$connection = mysqli_connect($server,$user, $password, $database_name);
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $persons = $_POST['persons'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

 $request = "insert into book_form(name,email,phone,address,location,persons,arrivals,leaving) values
        ('$name','$email','$phone','$address','$location','$persons',' $arrivals',' $leaving')";

        mysqli_query($connection,$request);

        header('location:book.php');
    }
    else{
        echo 'Something went wrong try again';
    }
?>