<?php
    $connection1 = mysqli_connect('localhost','root','root','book_db');
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $card = $_POST['card'];
        $exp = $_POST['expiry'];
        $cvv = $_POST['cvv'];
        $email = $_POST['email'];
       

        $request1="insert into pay_table (name,card,exp,cvv,email) values ('$name','$card','$exp','$cvv','$email')";

        mysqli_query($connection1 ,$request1);


        header('location:p.php');
        echo "saved";
        }else
        {
            echo 'not saved';
        }
        
    
        