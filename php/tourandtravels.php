<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tourandtravels.css">
    <title>Travel GO</title>
</head>
<body>
    <!-- this is home section -->
    <a name="home"></a>

    <div class="content">
            <div class="nav">
                <!-- this is left navigation bar -->
                <div class="left">
                    <ul>
                         <li><a href="#">Travel GO</a></li>
                    </ul>
                </div>  
                <!-- this is center navigation bar -->
                <div class="center">
                    <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#box">Destination</a></li>
                    <li><a href="#contect">contact Us</a></li>
                    <li><a href="#about">about Us</a></li>
                    </ul>
                </div>
                <!-- this is right navigation bar -->
                <div class="right">
                    <ul>    
                        <li><a href="registration.php">Sign Up</a></li>
                        <li><a href="login.php">Sign In</a></li>
                    </ul>
                </div>   
            </div>
                        
            <label id="explore">Explore The World</label>
            <label id="quotes">Live with no excuses and travel with no regrets</label>
            <label class="button"><a href="#box">Get Started</a></label>
    </div>
    <hr>

    <!-- this is a different boxes -->
    <a name="box"></a>

    <div class="boxes">
        <h2 id="purchase">Book and Explore The World</h2>
        <div class="b1">
            <h1>India</h1>
            <img src="india.jpg"width="300px"height="200px">
            <label class="buy"><a href="book.html">Book Now</a></label>
        </div>
        
        <div class="b2">
            <h1>America</h1>
            <img src="usa.jpg"width="300px"height="200px">
            <label class="buy"><a href="book.html">Book Now</a></label>
        </div>
        
        <div class="b3">
            <h1>Australia</h1>
            <img src="australia.jpg"width="300px"height="200px">
            <label class="buy"><a href="book.html">Book Now</a></label>
        </div><br>
        
        <div class="b4">
            <h1>Thialand</h1>
            <img src="thiland.jpg"width="300px"height="200px">
            <label class="buy"><a href="book.html">Book Now</a></label>
        </div>
        
        <div class="b5">
            <h1>Spanish</h1>
            <img src="spain.jpg"width="300px"height="200px">
            <label class="buy"><a href="book.html">Book Now</a></label>
        </div>
        
        <div class="b6">
            <h1>Egypt</h1>
            <img src="egypt.jpg"width="300px"height="200px">
            <label class="buy"><a href="book.html">Book Now</a></label>
        </div>
    </div>
    <hr>

        <a name="contect"></a>
        <!-- contact us section -->
        <form action="contact.php"method="POST">
            <h2 class="form">Contact Us</h2>
            <div class="contact">
                <label class="name">Name:</label>
                <input type="text"class="data"name="name">
                <label class="name"class="data">Email:</label>
                <input type="email"name="email">
                <label class="name"class="data">Message:</label><br>
                <textarea class="textarea"name="message">
                </textarea><br>
                <button class="submit">Submit</button>
            </div>
        </form>
        <hr>
    <!-- this is about us section -->
    <a name="about"></a>
    <div id="Aboutus">
        <h2 class="h2">About Us</h2>
        <!-- <img src="profile.jpg"class="profile"> -->
        <p class="details">
        Travel Go  is the digital consumer brand within the world Travel Media website. A comprehensive guide to the world’s best travel destinations, its print heritage stretches back 30 years.
            Available in English versions, the Travel Go provides detailed and accurate travel content designed to inspire global travellers. 
          It covers all aspects, from cities to airports, cruise ports to ski and beach resorts, attractions to events.
        </p>
        <label class="thank">"Thank You For Visit"</label>   
        </div>
</body>
</html>
