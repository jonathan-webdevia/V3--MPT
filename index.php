<?php

require('./componants/header.php');

/**
 * require cookies alert
 */

?>

<section id="videoIndex" class="position-relative">
    <video muted autoplay loop>
        <source src="./file/video/index.mp4" type="video/mp4">
    </video>
    <div class="d-none d-lg-block" id="explanation">
        <div class="d-flex align-items-center">
            <img src="./file/img/icones/idea.png" alt="">
            <h1>Voyagez malin</h1>
        </div>
        <div class="d-flex align-items-center">
            <img src="./file/img/icones/budget.png" alt="">
            <h1>Economiser</h1>
        </div>
        <div class="d-flex align-items-center">
            <img src="./file/img/icones/save.png" alt="">
            <h1>Sauvegarder</h1>
        </div>
    </div>
    <div id="carouselExampleControls" class="d-block d-lg-none carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-around align-items-center">
                    <img src="./file/img/icones/idea.png" alt="">
                    <h1>Voyagez malin</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-around align-items-center">
                    <img src="./file/img/icones/budget.png" alt="">
                    <h1>Economiser</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-around align-items-center">
                    <img src="./file/img/icones/save.png" alt="">
                    <h1>Sauvegarder</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="servicesIndex">
    <h1>Une solution pour voyager</h1>
    <p>
        Organiser un voyage, ça n'est jamais facile.<br>
        Avec monPtitTrip, on construit ses aventures<br>
        pas à pas et jour après jour.
    </p>
    <div class="servicesContainer d-flex flex-column align-items-start">

        <div class="serviceItem left d-flex align-items-center">
            <img class="rotate right" src="./file/img/icones/puzzle.png" alt="">
            <p>
                Une communauté qui partage...<br>
                Va vous permettre de créer votre voyage pièce par pièce !<br>
                Comme on assemble un puzzle.
            </p>
        </div>

        <div class="serviceItem right d-flex align-items-center">
            <img class="rotate right" src="./file/img/icones/light.png" alt="">
            <p>
                Quelques tips...<br>
                Voyager dans un autre pays ? Pas si facile !<br>
                On va essayer de t'aider.
            </p>
        </div>

        <div class="serviceItem left d-flex align-items-center">
            <img src="./file/img/icones/calendar.png" alt="">
            <p style="padding-left: 20px;" class="m-0">
                Quand on organise un voyage...<br>
                On l'organise jour après jour !<br>
                Tu trouvera un journal de bord pour t'aider.
            </p>
        </div>

        <div class="serviceItem right d-flex align-items-center">
            <img src="./file/img/icones/adresses.png" alt="">
            <p style="padding-left: 20px;" class="m-0">
                On n'est pas un site de résa en ligne...<br>
                Mais on peut toujours te donner de bonne adresses !<br>
                Et ouais plus facile avec MonPtitTrip.fr.
            </p>
        </div>

        <div class="serviceItem left d-flex align-items-center">
            <img class="rotate left" src="./file/img/icones/flight.png" alt="">
            <p>Une fois tes billets réserver...<br>
            Tu pourra les enregistrer dans ton espace perso !<br>
            Un seul mot d'ordre, tout centraliser.
            </p>
        </div>

        <div class="serviceItem right d-flex align-items-center">
            <img src="./file/img/icones/money.png" alt="">
            <p style="padding-left: 20px;" class="m-0">
                Ca coûte cher un voyage...<br>
                On va t'aider à budgetiser !<br>
                Et oui un voyage ça vide le porte-monnaie.
            </p>
        </div>
    </div>
</section>

<section id="roadTransition" class="d-none d-md-block">
    <div id="roadContainer">
        <div>
            <img class="carimg" src="./file/img/roadTransition/1.png" alt="">
            <img class="carimg" src="./file/img/roadTransition/2.png" alt="">
            <img class="carimg" src="./file/img/roadTransition/5.png" alt="">
        </div>
        <div></div>
        <div>
            <img class="carimg" src="./file/img/roadTransition/4.png" alt="">
            <img class="carimg" src="./file/img/roadTransition/3.png" alt="">
        </div>
    </div>
</section>

<section id="roadTransitionResp" class="d-block d-md-none">
    <img class="w-100" src="./file/img/roadTransition/responisveBanner.png" alt="">
</section>

<?php

require('./componants/footer.php');

?>