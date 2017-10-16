<?php
    define("TITLE", "Home | Latimer Development");
    include('includes/header.php');
?>

<section class="cover">
    <div id="shadow">
        <div class="cover-text">
            <h1>Latimer Development</h1>
            <p class="lead">Professional, user-friendly, website development for your business and personal interests</p>
            <a href="#about" role="button" class="btn btn-danger btn-lg">Learn More</a>
        </div>
    </div>
</section>
<section class="about" id="about">
        <div class="aboutGrid">
            <div class="aboutImage">
                <img src="images/ProfPicture1.jpg" alt="Picture of me">
            </div>
            <div class="aboutContent">
                <h2>About Latimer Development</h2>
                <p>My name is Tyler Latimer and I am a freelance web developer. I have recently embarked on the path of web development and have enjoyed every minute of it so far. Most of my knowledge in web development has been self-taught through online resources mixed with personal projects. I am also working to complete a Master's of Science in Information Technology with a concentration in Software Development. I plan to use this knowledge to help improve the quality of the projects I do for clients. I enjoy working on projects that challenge me and require me to learn more!</p>
            </div>
        </div> 
</section>
<section class="services">
    <h2>My Services</h2>
    <div class="grid">
        <div class="hosting box">
            <span class="glyphicon glyphicon-tasks icon"></span>
            <h3>Hosting</h3>
            <p>Not sure how to host your website? I can host your website using accounts I already have with my hosting provider! I can manage your website for you for a small monthly fee. This would include any updates that are required or changes that you wish to see! By hosting with me, you can reduce some costs compared to if you were to host it yourself as well as lessen the burden maintaining the site as I will do it for you!</p>
        </div>
        <div class="webDev box">
            <span class="glyphicon glyphicon-bookmark icon"></span>
            <h3>Web Development &amp; Design</h3>
            <p>Whether you have a design for your website already or are not sure what you want your site to look like, I can provide the perfect solution for you! I can design your website as well as develop it. Clients have the option to have their website developed through Wordpress or manually as well as add any plugins or special features they wish. If I haven't performed task before, I will learn how to just for your site!</p>
        </div>
        <div class="custom box">
            <span class="glyphicon glyphicon-pushpin icon"></span>
            <h3>Fully-Customizeable</h3>
            <p>I do my absolute best to produce websites that are exactly what my client's want! I work closely with my clients through every step of the process to ensure the website is meeting their expectations. The wonderful part of web development is that a website can be designed in many different ways. If a client disagrees with a part of their site, I will gladly go in and change it!</p>
        </div>
    </div>  
</section>
<section class="portfolio">
        <h2>My Portfolio</h2>
        <div class="portfolioGrid">
            <figure class="portfolio1">
                <img class="image" src="images/porftolioProject.png" alt="Portfolio project screenshot">
                <figcaption>
                    <h4>Portfolio Project</h4>
                    <p>Projet for Udacity nanodegree</p>
                    <p><a href="#" class="btn btn-success" role="button">View</a></p>
                </figcaption>
            </figure>
            <figure class="portfolio2">
                <img class="image" src="images/movie.jpg" alt="Movie website screenshot">
                <figcaption>
                    <h4>Movie Website</h4>
                    <p>Website displaying movies and information</p>
                    <p><a href="http://latimerdevelopment.com/patatapclone/circles.html" class="btn btn-success" role="button">View</a></p>
                </figcaption>
            </figure>
            <figure class="portfolio3">
                <img class="image" src="images/Orbit.png" alt="Orbit Project">
                <figcaption>
                    <h4>Orbit Project</h4>
                    <p>Class project made with HTML and CSS</p>
                    <p><a href="http://latimerdevelopment.com/orbitproject/orbit.html" class="btn btn-success" role="button">View</a></p>
                </figcaption>
            </figure>
        </div>
        <div class="portfolioLink">
            <p id="portfolioButton"> Or, go directly to my portfolio!
            <a href="portfolio.php" class="btn btn-success" role="button" id="portfolio">View Portfolio!</a></p>
        </div>
</section>
<section class="contact">
    <div class="contactContainer">
        <h2>Contact Me</h2>
        <div class="content">
            <p id="content">If you have any questions or would like to request a meeting to discuss a project, please submit a request!</p>
            <a href="contact.php" class="btn btn-lg btn-success request">Request Information</a>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?>