
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FT SignUp</title>
    <link rel="stylesheet" href="./signin.css">
</head>
<body>
    
    <header class="header"> 
        <div class="header-title">          
            <h1><a href="#header-title">Flex Tourism</a></h1>
        </div>                 
                
        <div class="menu"></div>
            <nav class="menu-items">
                 <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./signup.php">Sign Up</a></li>
                    
                </ul>
            </nav>
        </div>           
    </header>
    
    <main class="main-container">
        <div class="sign-up-container">

            <h2 class="title-container">Sign In</h2>

            <div class="form-container">
                <form action="./signindata.php" method="post" class="form">                      
                    <div class="form-element">
                        <label for="email">E-mail</label>
                        <input type="email" id="emailsignin" name="email" placeholder="Enter your E-mail"/>
                        <div class="error-text" id="email-error"></div>
                    </div> 
                    <div class="form-element">
                        <label for="password">Password</label>
                        <input type="password" id="passwordsignin" name="clientpassword" placeholder="Enter your Password"/>
                        <div class="error-text" id="password-error"></div>
                    </div>
                    <div class="form-element">
                        <button type="submit" id="sign-in" >Sign In</button>
                    </div>
                                                            
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div id="by">          
            <p>Developed by: Talita Caldato </p>  
        </div>  
    </footer>
</body>
<script src="FlexTourism.js"></script>
</html>

