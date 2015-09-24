<?php

/*
Single Work Template
Neue Raidho Website					:	50%
Missing:
- Slider template (Linda)
*/

$bclass = "page";
include "templates/header.php";
?>

    <?php /* LINDA: añadir funcionalidad de slider más adelante */ ?>
    <img class="full_width_image" src="http://lorempixel.com/1280/740/technics">

    <div class="wrap">
		<div>
            <h1>Centro Médico ABC</h1>
            <h2 class="Leitura">American British Cowdray</h2>

            <h2 class="Leitura">After more than 25 years without a major brand redesign, we had the opportunity to completely revamp the brand and visual identity for this 130 years old hospital.</h2>
        </div>
    </div>

    <?php // three pics one caption ?>
    <div class="bl-party-three-one-caption">
        <div><img src="http://lorempixel.com/640/750/technics"></div>
        <div><img src="http://lorempixel.com/640/374/technics"></div>
        <div><img src="http://lorempixel.com/640/374/technics"></div>
        <div>
            <p>Centro de Cáncer ABC. Photos by: Blake Marvin, HKS Inc.</p>
        </div>
    </div>

    <?php // titles ?>
    <div class="wrap">
        <div>
            <p class="blue Decima">Centro Médico ABC</p>
            <p class="Leitura medium_title">The ABC Hospital is ore than 120 years old, and it hadn’t undergo any major brand identity revamp since almost 20 years.</p>
        </div>
    </div>

    <?php // three images with caption ?>
    <div class="wrap bl-party-three-w-captions">
        <ul>
            <li>
                <img src="http://lorempixel.com/380/300/technics">
                <p class="small_paragraph Decima">1886 - Hospital Americano</p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/300/technics">
                <p class="small_paragraph Decima">1923 - Hospital Inglés</p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/300/technics">
                <p class="small_paragraph Decima">1941 - Centro Médico ABC American British Cowdray</p>
            </li>
        <ul>
    </div>

    <?php // two pics no caption ?>
    <div class="bl-party-two-no-captions">
        <div><img src="http://lorempixel.com/640/374/technics"></div>
        <div><img src="http://lorempixel.com/640/374/technics"></div>
    </div>

    <?php // three pics no caption ?>
    <div class="bl-party-three-no-captions">
        <div><img src="http://lorempixel.com/640/374/technics"></div>
        <div><img src="http://lorempixel.com/640/374/technics"></div>
        <div><img src="http://lorempixel.com/640/374/technics"></div>
    </div>

    <?php // random grid ?>
    <div class="wrap bl-party-random-grid section_pad">
        <div class="rand-grid-a left">
            <div class="rand-grid-a-top">
                <img class="rand-grid-img-1" src="http://lorempixel.com/480/355/technics">
            </div>
            <div class="rand-grid-a-bottom">
                <div>
                    <img class="rand-grid-img-2" src="http://lorempixel.com/380/240/technics">
                    <img class="rand-grid-img-3" src="http://lorempixel.com/280/260/technics">
                </div>
                <div>
                    <img class="rand-grid-img-4" src="http://lorempixel.com/380/770/technics">
                </div>
            </div>
        </div>
        <div class="rand-grid-c right">
            <img class="rand-grid-img-5" src="http://lorempixel.com/280/260/technics">
            <img class="rand-grid-img-6" src="http://lorempixel.com/380/240/technics">
            <img class="rand-grid-img-7" src="http://lorempixel.com/280/260/technics">
            <img class="rand-grid-img-8" src="http://lorempixel.com/380/240/technics">
        </div>
    </div>

<?php // share this project ?>
<section class="contact-banner">
        <div class="wrap bl-party-share">
            <h2 class="Leitura">Share this project:</h2>
            <ul>
                <li><a class="btn" href="#">Share on Facebook</a></li>
                <li><a class="btn" href="#">Share on Twitter</a></li>
                <li><a class="btn" href="#">Copy URL</a></li>
            </ul>
            <h2 class="Leitura">¿Think we should work together?</h2>
            <form>
                <ul>
                    <li><input type="text" name="name" placeholder="Your name"></li>
                    <li><input type="email" name="email" placeholder="Your email"></li>
                    <li><input type="submit" name="submit" value="Send"></li>
                </ul>

            </form>
        </div>
</section>

<?php // more projects ?>
<section class="gray_light_bg">
    <div class="wrap bl-party-three-w-captions">
        <h2 class="Decima">Explore More Projects</h2>
        <ul>
            <li>
                <img src="http://lorempixel.com/380/380/technics">
                <p>Penguin Books. <span class="Leitura">An Expanding Universe Keynote.</span></p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/380/technics">
                <p>Comunidad VIVEX. <span class="Leitura">Re-defining the News in Mexico.</span></p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/380/technics">
                <p>Knock your Wear. <span class="Leitura">Professional Image Consulting.</span></p>
            </li>
        <ul>
    </div>
</section>

<?php

/*
Extended Nav + Footer
*/

include "templates/footer.php";

?>
