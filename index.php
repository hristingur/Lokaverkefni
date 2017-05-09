<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Flex SCSS demo</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<header class="banner">
      
</header>
       
        <div id="buttons">

            <ul class="navigationMenu">
                <li>
                    <a class="home" href="index.php">
                        <span>Home</span>
                    </a>
                </li>
                
                <li>
                    <a class="about" href="about.php">
                        <span>About</span>
                    </a>
                </li>
                
                <li>
                     <a class="contact" href="contact.php">
                        <span>Contact Us</span>
                     </a>
                </li>
    
  
            </ul>
    
        </div>
        

        <div class="allabout">

            <h1 class="text">It's All About The Gifs! </h1>

             </div>

            <!--- Let the gifs begin!  -->

    		<div class="gifRow">
                <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/kall.gif" > 
                    </div>
                </div><!--- box div -->

                <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/snow.gif" > 
                    </div>
                </div><!--- box div -->
            </div><!-- numer1 div -->


    		<div class="gifRow">
                 <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/eating.gif" >  
                    </div>
                </div><!--- box div -->

                <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/karate.gif" alt="Wanna fight me!!??" > 
                    </div>
                </div><!--- box div -->
            </div><!-- numer2  div -->


    		<div class="gifRow">
                   <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/machine.gif" >
                    </div>
                </div><!--- box div -->

                <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/presley.gif">
                    </div>
                </div><!--- box div -->

            </div> <!-- numer3 div -->

            <div class="gifRow">
                   <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/running.gif" >
                    </div>
                </div><!--- box div -->

                <div class="box">
                    <div class="gif">
                        <img class="giffin" src="gif/smooth.gif" >
                    </div>
                </div><!--- box div -->

            </div> <!-- numer4 div -->


      
       


		<div class="smallContainer">
            <input type="checkbox" id="hnappur">
            <label for="hnappur">&#8801;</label>
                <ul class="valmynd">
                    <ul class="navigationMenu">
                        <li>
                            <a class="home" href="#">
                                 <span>Home</span>
                            </a>
                        </li>
                    
                        <li>
                            <a class="about" href="about.php">
                                <span>About</span>
                            </a>
                        </li>
                    
                        <li>
                            <a class="contact" href="contact.php">
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </ul>
        </div>

	
 <?php
        include'footer.php';

        ?>

</body>
</html>

