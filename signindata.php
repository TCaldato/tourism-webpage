
    <?php 
         
        
        $username ='flexturism';
        $password = 'flexturism';
        $host = 'localhost';
        $database = 'flexturism';

        $conn = new mysqli($host, $username, $password, $database);

        $email = $_REQUEST["email"];
        $clientpassword = $_REQUEST["clientpassword"];

        $sql = $conn->prepare("SELECT * FROM clients WHERE email = ? and clientpassword = ?");
        $sql->bind_param("ss", $email, $clientpassword);
        $sql->execute();
        $results = $sql->get_result();
            

        if($results->num_rows > 0) {         
            header('Location: ./signin.php');        
             }
           else{
           header('Location: ./signinphp.php');
           }

    ?>
