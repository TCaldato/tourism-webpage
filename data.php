<?php 
        $username ='flexturism';
        $password = 'flexturism';
        $host = 'localhost';
        $database = 'flexturism';

        $conn = new mysqli($host, $username, $password, $database);

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $clientpassword = $_POST["clientpassword"];

        $statement = $conn->prepare("INSERT INTO clients(firstname, lastname, email, clientpassword) VALUES (?,?,?,?)");
        $statement->bind_param("ssss", $firstname, $lastname, $email, $clientpassword);

        $statement->execute();

        if($statement->error) {
            echo "Error executing";
        }
        

        header('Location:./signin.php');

    ?>

