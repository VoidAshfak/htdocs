<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website project</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo.png" alt="logo">
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Creat With Vertual Reality</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi cumque recusandae quibusdam facere nesciunt quae ipsum rem voluptatem</p>
            <a href="#" class="main-btn">Contact</a>
        </div>
    </section>
    <section class="features">
        <div class="feature-container">
            
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/web.png" alt="Web_dev">
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/soft.png" alt="Soft_dev">
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/app.png" alt="App_dev">
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

        </div>
    </section>
    <section class="about">
        <div class="about-img">
            <img src="images/bg.jpg" alt="aboutbg">
        </div>
        <div class="about-text">
            <h2>Start tracking your statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus tempore iusto harum dolores rem asperiores culpa sint facilis ratione ea maiores quia distinctio sunt officiis aliquid, modi fugiat esse repudiandae?</p>
            <button href="" class="main-btn">Read More</button>
        </div>
    </section>
    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate odio fugit quis ipsam iure porro suscipit, reiciendis temporibus in a ducimus laudantium quo dicta incidunt beatae eos atque architecto odit!</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-mail"/>
            <textarea name="message" placeholder="Type your message here......"></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>
</body>
</html>