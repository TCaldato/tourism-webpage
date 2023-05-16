
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <title>Flex Tourism</title>
    <link rel="stylesheet" href="./styles1.css">
</head>
<body>
    <header class="header"> 
        <div class="header-title">       
            <h1><a href="#header-title">Flex Tourism</a></h1>
        </div>                 
                
        <div class="menu"></div>
            <nav class="menu-items">                
                <div>
                    <ul>
                        <li><a href="#section1">Home</a></li>
                        <li><a href="#section2">Who we are</a></li>
                        <li><a href="#section3">Services</a></li>
                        <li><a href="#section4">Plans</a></li>
                    </ul>
                </div>                
            </nav>
            <div class="wrapper">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="toggle">
                        <label class="checkbox" for="toggle">
                            <div class="trace"></div>
                            <div class="trace"></div>
                            <div class="trace"></div>
                        </label>
                        <div class="menu-checkbox"></div>
                        <nav class="menu-checkbox-item">
                            <ul>
                                <li>
                                    <a href="./signup.php">Sign Up</a>
                                </li>
                                <li>
                                    <a href="./signinphp.php">Sign In</a>
                                </li>
                                <li>
                                    <a href="./admpage.php">Administrative</a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                </div>
        </div>  
               
        
    </header>

                <!-- Section 1 -->
    <main class="flex-container1">
        <section class="section1" id="section1">
            <div class="section1-description">
                <h1 id="section1-title"><stronge>Flex Tourism </stronge></h1>
                <p id="section1-txt">The best turism service just for you!</p>
                <p id="section1-txt2">Lorem Ipsum has been the industry's standard dummy text ever 
                since the 1500s, when an unknown printer took a galley of type and 
                scrambled it to make a type specimen book. <br></br> It has survived not only five 
                centuries, but also the leap into electronic typesetting, remaining 
                essentially unchanged. </p>
                
            </div>

            <div class="section1-card">
                <div class="section1-img">
                    <h2>Be Ready</h2>
                    <p>For an Amazing Experience</p>
                </div>
            </div>
        </Section>

                <!-- Section 2 -->
        <section class="section2" id="section2">
            <div class="section2-card">
                <div class="section2-img">
                    <h2>Enjoy It</h2>
                    <p>Easy Way to Travel</p>
                </div>
            </div>

            <div class="section2-description">
                <h2 id="section2-title"><stronge>Who we are</stronge></h2>
                <p id="section2-txt">It is a long established fact that a reader will be distracted 
                    by the readable content of a page when looking at its layout. 
                    <br></br>
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution 
                    of letters, as opposed to using 'Content here, content here',
                    making it look like readable English.
                </p>
                
            </div>
        </section>
    </main>
    <br id="section3">
    <br/>

                <!-- Section 3 -->
    <section class="section3" >        
        
        <div id="section3-title">
            <h2>Services</h2>
        </div>

        <div class="section3-img-container">

            <div class="section3-img">
                <img id="section3-icon" src="./images/icon-1.png" alt="pacote de viagens">
                <p id="section3-txt" >Flights</p>
                
            </div>
            
            <div class="section3-img">
                 <img id="section3-icon" src="./images/icon-2.png" alt="hospedagens">
                <p id="section3-txt" >Accommodation</p>
                
            </div>

            <div class="section3-img">
                <img id="section3-icon" src="./images/icon-3.png" alt="roteiros personalizados">
                <p id="section3-txt" >Customized Itineraries</p>
                
            </div>

        </div>
        
    </section>
    <br id="section4">
    <br/>

                <!-- Section 4 -->
    <section class="section4">
        <div id="section4-title">
            <h2>Plans</h2>
        </div>

        <div class="section4-container"> 

            <div class="section4-Plans">
                <h3 id="section4-h3">Plan 1</h3>
                <ul id="section4-list">
                    <li>24/7 Support</li>
                    <li>Room Service</li>
                    <li>Tour Guide</li>
                </ul>
                <button id="section4-button"><a id="section4-link" href="./signup.php">Sign Up</a></button>
                <button id="section4-button"><a id="section4-link" href="./signinphp.php">Sign In</a></button>
            </div>

            <div class="section4-Plans">
                <h3 id="section4-h3">Plan 2</h3>
                <ul id="section4-list">
                    <li>24/7 Support</li>
                    <li>Room Service</li>
                    <li>Tour Guide</li>
                    <li>Itinerary of Trails</li>
                    <li>Personalized Service</li>
                </ul>
                <button id="section4-button"><a id="section4-link" href="./signup.php">Sign Up</a></button>
                <button id="section4-button"><a id="section4-link" href="./signinphp.php">Sign In</a></button>
            </div>

            <div class="section4-Plans">
                <h3 id="section4-h3" >Plan 3</h3>
                <ul id="section4-list">
                    <li>24/7 Support</li>
                    <li>Room Service</li>
                    <li>Tour Guide</li>
                    <li>Itinerary of Trails</li>
                    <li>Personalized Service</li>
                    <li>Vip Area</li>
                </ul>
                <button id="section4-button"><a id="section4-link" href="./signup.php">Sign Up</a></button>
                <button id="section4-button"><a id="section4-link" href="./signinphp.php">Sign In</a></button>
            </div>
        </div>
    </section>

                <!-- Footer -->
    <footer class="footer">
        <div id="by">          
            <p>Developed by: Talita Caldato </p>  
        </div>  
    </footer>
</body>

</html>