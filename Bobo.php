<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style.css">
    <title>Site touristique</title>
</head>
<body>
<?php include ("nav.php") ?>
    <!-- <header> -->
        <!-- <nav>
            <ul>
                <li><a href="Acceuil.php">Acceuil</a></li>
                <li><a href="Service.php">Service</a></li>
                <li><a href="Galerie.php">Galerie culturelle</a></li>
                <li><a href="Contact.php">Contacter</a></li>
            </ul>
            <a href="" class="btn-reservation">Visiter Maintenant</a>
        </nav>
     -->
    <!-- </header> -->
    <section id="bobo-1">
        <h2>Quel est votre choix de tourisme dans la ville de Bobo dioulasso</h2>
        <div id="bobo-2">
            <div>
            <img src="./pause-circle-outline.svg" alt="">
            <p> <strong>la vielle mosquee de dioulassoba </strong> connu pour sa viellesse et son histoire , la vielle mosquee de bobo
                 en effet raconte l'histoire des bobos des voyageurs et
                 montre à quel point bobo etait une ville marchande car la mosquee a ete batie par les voyageurs musulmane </p>
        </div>
        <div>
            <img src="./pause-circle-outline.svg" alt="">
            <p><strong>la guinguetta "espace vert"</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt sequi reprehenderit
                 perspiciatis consequatur dolorum aspernatur quas sapiente, accusamus fuga maiores et. Ipsam dolor rem dicta recusandae
                  repudiandae maiores, reprehenderit ullam!</p>
        </div>
        <div>
            <img src="./pause-circle-outline.svg" alt="">
           <p> <strong>les silures sacrées de dafra </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Odio voluptatem eius delectus animi minus
            laudantium numquam dicta quos ipsa? Nesciunt nihil beatae iure aut nam excepturi velit quo omnis quaerat!</p>
        </div>
        </div>
<!-- <div id="">
    <img src="./mosque.jpg" alt="">
    <img src="./mosquee.jpg" alt="">
</div> -->
    </section>
    <section id="dioula">
    <div>
<img class="bobod" src="./mosquee.jpg" alt="">
<h1>La vielle mosquée de bobo</h1>
<p>Elle a été construite en 1890 par l'Almani Sidiki SANON.
     Les visites se font dans la matinée uniquement. La célèbre
      mosquée Dioulassoba est construite en banco. Grande pièce
       montée de couleur beige, l'édifice qui a été construit par
        l'Almany Sidiki Sanou en 1880 ressemble à une structure moderne. 
      </p>
</div>
<!-- <img src="./mosque.jpg" alt="">
<img src="./mosquee.jpg" alt=""></div> -->
</section>
<section id="dioula">
    <div>
<img class="bobod" src="./silures.jpg" alt="">
<h1>Les silures de dafra</h1>
<p>
      </p>
</div>
<!-- <img src="./mosque.jpg" alt="">
<img src="./mosquee.jpg" alt=""></div> -->
</section>
<section id="dioula">
    <div>
<img class="bobod" src="./nasso.jpg" alt="">
<h1>Les Guingettes de Nasso</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> <p>
     Nesciunt numquam repellendus quaerat iste omnis,</p> <p> iure unde rem ipsam nulla quasi
     eveniet debitis </p> <p> explicabo maxime facilis voluptate soluta non! Facilis, enim.</p>
      </p>
</div>
<!-- <img src="./mosque.jpg" alt="">
<img src="./mosquee.jpg" alt=""></div> -->
</section>

    <div id="center">
    <section id="contact">
        <h2>On y va ????????</h2>
        <p>Qu'attendez-vous pour profiter de vacances exceptionnelles à un prix exceptionnel? Envoyez-nous 
            votre demande par mail au formulaire ci-dessous et nous vous renverrons un devis 
       <strong>gratuit</strong> sous 48h.</p>
       <form action="mailto:exemple@exemple.com" method="post" enctype="text/plain">
        <label for="nom">Votre nom et prénom :</label>
        <input type="text" id="nom" name=" Votre nom" required>
        <label for="email">Votre email ici :</label>
        <input type="email" id="email" name=" Votre email" required>
        <label for="depart">Votre lieu de résidence :</label>
        <input type="text" id="depart" name=" Votre lieu de départ" required>
        <label for="destination">Destination souhaitée :</label>
        <input type="text" id="email" name=" Votre destination souhaitée" required>
        <label for="durée">Durée du séjour(en nombre de nuits) :</label>
        <input type="number" min="0" max="100" id="durée" name="Durée du séjour(en nombre de nuits)" required>
        
        <button type="submit">Envoyer !</button>
        <p>*Vous serez redirigé vers votre messagerie . <br> Il vous suffira d'envoyer le mail 
        automatiquement crée *</p>
      
        </form>
    </section>
    </main>
</div> 

    <!-- lier footer -->

<?php include ("footer.php") ?> 

</body>
</html>