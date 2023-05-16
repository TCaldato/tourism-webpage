<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adm. Page</title>
    <link rel="stylesheet" href="./adm.css">
</head>
<body>
    <header class="header"> 
        <div class="header-title">          
            <h1><a href="#header-title">Flex Tourism </a></h1>
        </div>                 
                
        <div class="menu"></div>
            <nav class="menu-items">
                 <ul>
                    <li><a href="./index.php">Home</a></li>                                        
                </ul>
            </nav>
        </div>           
    </header>
    <?php 
        $username ='flexturism';
        $password = 'flexturism';
        $host = 'localhost';
        $database = 'flexturism';

        $conn = new mysqli($host, $username, $password, $database);

        $statement = $conn->prepare("Select * from clients");

        $statement->execute();

        if($statement->error) {
            echo "Error executing";
        }

        $results = $statement->get_result();
        

    $conn->close();       
    
    ?>
    <main class="main-container">
        <h2 id="title">Administrative Page</h2>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Password</th>            
            </tr>
            <?php 
                if($results->num_rows > 0) {
                    while($row = $results->fetch_assoc()) {
                        echo "<tr><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["clientpassword"] . "</td></tr>";
                    }
        
                }else {
                    echo "0 results";
                }
            
            ?>
        </table>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div id="by">          
            <p>Developed by: Talita Caldato </p>  
        </div>  
    </footer>
</body>
</html>

    
