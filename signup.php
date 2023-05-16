<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FT SignUp</title>
    <link rel="stylesheet" href="./sigup.css">
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
                    <li><a href="./signinphp.php"> Sign In</a></li>                    
                </ul>
            </nav>
        </div>           
    </header>

    <main class="main-container">
        <div class="sign-up-container">

            <h2 class="title-container">Sign Up</h2>

            <div class="form-container">
                <form action="./data.php" method="post" class="form">
                    <div class="form-element">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter your First Name"/>
                        <div class="error-text" id="firstname-error"></div>
                    </div> 
                    <div class="form-element">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter your Last Name"/>
                        <div class="error-text" id="lastname-error"></div>
                    </div>  
                    <div class="form-element">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Enter your E-mail"/>
                        <div class="error-text" id="email-error"></div>
                    </div> 
                    <div class="form-element">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="clientpassword" placeholder="Enter your Password"/>
                        <div class="error-text" id="password-error"></div>
                    </div>
                    <div class="form-element">
                        <label for="repassword">Re-Password</label>
                        <input type="password" id="repassword" name="repassword" placeholder="Re-enter Password"/>
                        <div class="error-text" id="repassword-error"></div>
                    </div>
                    <div class="form-element">
                        <button type="submit" id="sign-up" disabled>Sign Up</button>
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