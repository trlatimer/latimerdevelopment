<?php
    define('TITLE', "Portfolio | Latimer Development");
    include('includes/header.php');
?>

<section class="portfolioPage">
    <div class="portfolioBox">
        <h1>Welcome to My Portfolio!</h1>
        <div class="portolioPageGrid">
            <figure class="project1">
                <img src="images/TGK.jpg" alt="The Great Kingdom">
                <figcaption>
                    <h4>The Great Kingdom</h4>
                    <p class="content">The Great Kingdom is my first personal project outside of this website. I created it for a gaming community I am involved in. It involves various features such as users and profiles as well as a Steam API. This site uses node.js with express and several addons.</p>
                    <p><a href="#" class="btn btn-success" role="button">View</a></p>
                </figcaption>
            </figure>
            <figure class="project2">
                <img src="images/PatatapClone.png" alt="PatatapClone">
                <figcaption>
                    <h4>Patatap Clone</h4>
                    <p>The Patatap Clone projet was a project I completed during the Web Developer Bootcamp course taught by Colt Steele on Udemy.com. This project is made using jQuery and creates sound and circles when a button is pushed. Every button creates a different color of circle as well as a different sound.</p>
                    <p><a href="http://latimerdevelopment.com/patatapclone/circles.html" class="btn btn-success" role="button">View</a></p>
                </figcaption>
            </figure>
            <figure class="project3">
                <img src="images/Orbit.png" alt="Orbit Project">
                <figcaption>
                    <h4>Orbit Animation</h4>
                    <p>The Orbit animation is a project I completed during the Ultimate Web Designer &amp; Developer Course taught by Brad Hussey on Udemy.com. This project is made only with HTML and CSS. The animation shows the Earth rotating around the sun with the moon rotating around the Earth.</p>
                    <p><a href="http://latimerdevelopment.com/orbitproject/orbit.html" class="btn btn-success" role="button">View</a></p>
                </figcaption>
            </figure>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?>