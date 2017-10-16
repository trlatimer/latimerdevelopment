<?php
    define('TITLE', "Portfolio | Latimer Development");
    include('includes/header.php');
?>

<section class="portfolioPage">
    <div class="portfolioContainer">
        <h1>My Portfolio</h1>
        <p>Click images to view live or download!</p>
        <div class="portfolioPageGrid">
            <figure class="portfolioItem" item="portfolioPage1">
                <a href="https://github.com/trlatimer/ud036_StarterCode"><img src="images/movie.jpg" alt="Movie website screenshot"></a>
                <figcaption class="description">
                    <h2>Movie Website</h2>
                    <p>This website lists movies and displays the poster image, trailer, and description. This project was created with python and bootstrap</p>
                </figcaption>
            </figure>
            <figure class="portfolioItem" item="portfolioPage2">
                <a href="http://www.latimerdevelopment.com/portfolioProject/"><img src="images/porftolioProject.png" alt="Portfolio project screenshot"></a>
                <figcaption class="description">
                    <h2>Portfolio Project</h2>
                    <p>Based off of a PSD layout, this project is customized to fit my style and displays projects I have completed and am working on.</p>
                </figcaption>
            </figure>
            <figure class="portfolioItem" item="portfolioPage3">
                <a href="http://www.latimerdevelopment.com/codePHP/"><img src="images/franklins.png" alt="Franklin's screenshot"></a>
                <figcaption class="description">
                    <h2>Franklin's Fine Dining</h2>
                    <p>A sample website for a small diner. Created with PHP, HTML, and CSS. This project was created during the Practical PHP: Master the Basics and Code Dynamic Websites course taught by Brad Hussey on Udemy.com</p>
                </figcaption>
            </figure>
            <figure class="portfolioItem" item="portfolioPage4">
                <a href="http://latimerdevelopment.com/orbitproject/orbit.html"><img src="images/Orbit.png" alt="Orbit screenshot"></a>
                <figcaption class="description">
                    <h2>Orbit Animation</h2>
                    <p>The Orbit animation is a project I completed during the Ultimate Web Designer &amp; Developer Course taught by Brad Hussey on Udemy.com. This project is made only with HTML and CSS. The animation shows the Earth rotating around the sun with the moon rotating around the Earth.</p>
                </figcaption>
            </figure>
            <figure class="portfolioItem" item="portfolioPage5">
                <a href="http://latimerdevelopment.com/patatapclone/circles.html"><img src="images/PatatapClone.png" alt="Patatap Clone screenshot"></a>
                <figcaption class="description">
                    <h2>Patatap Clone</h2>
                    <p>The Patatap Clone projet was a project I completed during the Web Developer Bootcamp course taught by Colt Steele on Udemy.com. This project is made using jQuery and creates sound and circles when a button is pushed. Every button creates a different color of circle as well as a different sound.</p>
                </figcaption>
            </figure>
        </div>
    </div>
</section>


<?php include('includes/footer.php'); ?>