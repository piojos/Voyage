<?php
/*
Single Work Template
Neue Raidho Website
*/

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
                <p class="small_paragraph">1886 - Hospital Americano</p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/300/technics">
                <p class="small_paragraph">1923 - Hospital Inglés</p>
            </li>
            <li>
                <img src="http://lorempixel.com/380/300/technics">
                <p class="small_paragraph">1941 - Centro Médico ABC American British Cowdray</p>
            </li>
        <ul>
    </div>



    <pre>

block: images random grid

block: two images no caption

block: three images no caption

block: slider

block: share

block: more projects
</pre>


<?php

/*
Extended Nav + Footer
*/

include "templates/footer.php";

?>
