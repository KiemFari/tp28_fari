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
        </nav> -->
    
    <!-- </header> -->
<!-- ------acceuil section --------->
<section id="maison-1">
<h1>Ouagadougou capitale economique</h1>
<p>Ouagadougou est la capitale economique du burkina faso
     elle est une ville tres acceuillante entre autre des hommes economiques 
     les hommes d'affaire politique des commercants et surtout des touristes... venus d'ailleurs d'Afrique et dans le monde , ouaga est la capitale du cinema Afriqque en effet , elle abrite le CIAO chaque deux ans</p>
</section>
<section id="maison">
   <div class="ouaga2">
    <img class="ouaga2" src="./ouaga1.jpg" alt="">
   </div>
   <div class="ouaga2-1">
    <h1>les differentes sites tourisitiques</h1>
    <p>Ouagadougou regorge de plusieurs sites touristiques en son sein entre autre :</p>
    <img  id="chevron"  src="chevron-down-outline.svg" alt="">Loumbila Beach <br><br><br><br>
    <img  id="chevron"  src="chevron-down-outline.svg" alt="">Le monument de la mère et de l'enfant. <br><br><br><br>
    <img  id="chevron"  src="chevron-down-outline.svg" alt="">Le monument de YENNEGA. <br><br><br><br>
    <img  id="chevron"  src="chevron-down-outline.svg" alt="">Le monument des cinéastes africains. <br><br><br><br>
    <img  id="chevron"  src="chevron-down-outline.svg" alt="">Le monument des sportifs. <br><br><br><br>
    <img  id="chevron"  src="chevron-down-outline.svg" alt="">La place Naaba Koom. <br><br><br><br>
    <img id="chevron" src="chevron-down-outline.svg" alt="">Le monument des Nations Unies........ <br><br><br><br>
    <a href="" class="btn-reservation home-btn">Visiter Maintenant</a> <br><br><br><br>
   </div>      
</section>
<section id="maison-2">
<h1>La place Naba koom</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dolorum rem nesciunt natus laudantium. Recusandae rerum error cupiditate mollitia, possimus ipsa, deserunt provident laudantium odio, eius magni eaque porro? Est. </p>
<div id="loumbila">
<img src="./loumbila.jpg" alt="">
<img src="./loumbila2.jpg" alt="">
<img src="./loumbila.jpg" alt=""></div>
</section>
<section id="maison-2">
<h1>Le Monument des Nations Unies</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum rem placeat architecto iure maiores unde omnis atque obcaecati. Delectus, voluptatibus. Harum impedit obcaecati asperiores cumque assumenda, quis numquam nam repudiandae? </p>
<div id="loumbila-2">
<img src="./ouaga1.jpg" alt="">
<img src="./ouaga1.jpg" alt="">
<img src="./ouaga1.jpg" alt=""></div>
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