<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Renollet Nataël - Développeur web</title>
  <meta name="description" content="Diplômé en Développement Web et Web Mobile, je suis passionné par la création de sites web et d'applications mobiles performants. Avec des compétences solides en HTML5, CSS3, JavaScript, PHP et MySQL, je m'apprête à combiner ces compétences avec une formation Bac +3 en Design UI/UX.  
            Mon objectif est de fusionner mes compétences de développeur avec une solide compréhension du design pour créer des expériences utilisateur exceptionnelles. En constante recherche de nouvelles technologies, je suis déterminé à rester à la pointe de l'industrie.
            Je suis toujours prêt à relever de nouveaux défis dans le domaine du développement web.">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            "text-color": "#DED8CE",
            "title-color": "#B8A28E",
            "default": "#36422E",
            "h-button": "#769960"
          }
        }
      }
    }
  </script>

  <style>
    @layer utilities {

      .bg-header {
        background: linear-gradient(rgba(1, 1, 1, 0.1), rgba(1, 1, 1, 0.1)), url('assets/img/bg/background-header.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
      }

      .bg-page {
        background: linear-gradient(rgba(1, 1, 1, 0.1), rgba(1, 1, 1, 0.1)), url('assets/img/bg/background-page.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: coutain;
        background-attachment: fixed;
      }

      .bg-end {
        background: linear-gradient(rgba(1, 1, 1, 0.1), rgba(1, 1, 1, 0.1)), url('assets/img/bg/background-end.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: coutain;
        background-attachment: fixed;
      }
    }
  </style>
</head>

<body>

  <!--___________________________-->

  <main class="text-text-color">

    <?php include('includes/navbar.php'); ?>

    <!--HEADER SECTION-->
    <header class="h-full bg-header px-10 py-16">

      <div class="flex 
              max-lg:items-center
              max-lg:flex-col-reverse
              lg:justify-between
              xl:justify-around xl:items-center">

        <div class="text-left 
                sm:w-2/3 sm:px-4 
                md:w-2/3
                lg:w-3/4
                xl:w-2/5">

          <h1 class="my-4 font-thin text-title-color text-4xl tracking-widest
                 sm:text-5xl
                 lg:my-8 lg:text-6xl
                 xl:my-12
                 2xl:text-7xl">RENOLLET Nataël</h1>

          <p class="my-4 text-lg font-light tracking-widest
                sm:text-xl
                lg:my-8 lg:text-1xl
                xl:my-12">
            Passionné par le web, je suis un développeur web/mobile diplômé de Simplon et étudiant en Design UI/UX à
            Charleville-Mézières. <br>En constante quête d’apprentissage, je cherche à fusionner le développement web et
            le
            design pour créer des expériences utilisateur complètes et engageantes. Mon objectif n’est pas seulement de
            devenir un Designer UI/UX, mais d’acquérir un ensemble complet de compétences web, me permettant de prendre
            en charge tous les aspects d’un projet, de la conception à la mise en œuvre.
          </p>
          <br>
          <a href="#contact" class="bg-default py-2 px-4 rounded-full uppercase
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl lg:text-right
                                xl:text-1xl xl:py-4 xl:px-6">Contactez-moi</a>
        </div>
        <div>
          <img src="assets/img/profil.png" alt="Photo de profil" class="max-h-64 
                                                                    md:max-h-72
                                                                    xl:max-h-96" />
        </div>
      </div>
      <div class="mt-16">
        <?php include('includes/socialicons.php'); ?>
      </div>
    </header>
    <!--END HEADER SECTION-->

    <!--################################-->

    <!--PROJECTS BLOC-->
    <section class="bg-page">

      <!--####-->
      <div class="mx-auto text-left px-10 py-16
              lg:w-3/4">

        <h2 class="my-4 font-thin text-title-color text-4xl uppercase tracking-wider
                 sm:text-5xl
                 lg:my-8 lg:text-7xl lg:w-3/4
                 xl:my-12 xl:w-7/12
                 ">Je créer avec passion !</h2>

        <p class="my-4 text-lg font-light tracking-widest
                sm:text-xl
                lg:my-8 lg:text-1xl
                xl:my-12 lg:text-2xl">
          La passion est l'essence même de ma pratique en tant que développeur.
          Chaque projet est une occasion de me surpasser, d'apprendre de nouvelles
          compétences et de relever de nouveaux défis. Ma passion pour la création
          ne se limite pas seulement au développement, mais se reflète également
          dans mon approche globale de la vie professionnelle !
          <br><br>
          <span class="underline text-title-color">Voyez par vous même :</span>
        </p>
        <!-- <div class="w-full lg:text-right">
          <a href="#project" class="bg-default py-2 px-4 rounded-full uppercase
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl lg:text-right
                                xl:text-1xl xl:py-4 xl:px-6">Découvrir</a>
        </div> -->

        <!--####-->

        <div class="container px-6 py-16 mx-auto" id="project">
          <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 lg:grid-cols-2">
            <a href="wfbcorp.php">
              <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                style="background-image:url('assets/img/wfbcorp.png')">
                <div
                  class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                  <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">WFB Corp - Projet
                    formation</h2>
                  <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Site internet</p>
                </div>
              </div>
            </a>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
              style="background-image:url('assets/img/allosimplon.png')">
              <div
                class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">AlloSimplon - Projet
                  formation</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Site internet</p>
              </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
              style="background-image:url('assets/img/wfbcorp.png')">
              <div
                class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Ton’s of mobile
                  mockup</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Mockups</p>
              </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
              style="background-image:url('assets/img/wfbcorp.png')">
              <div
                class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Huge collection of
                  animation</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Animation</p>
              </div>
            </div>
          </div>
          <br><br>
          <!-- <div class="flex justify-center">
            <a href="" class="bg-default py-2 px-4 mt-16 mx-auto rounded-full uppercase
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl lg:text-right
                                xl:text-1xl xl:py-4 xl:px-6">Voir +</a>
          </div> -->
        </div>
      </div>
    </section>
    <!--END PROJECTS BLOC-->

    <!--################################-->

    <!--BANNER CONTACT-->
    <!-- Container for demo purpose -->
    <div class="bg-default mx-auto md:px-6">
      <!-- Section: Design Block -->
      <section class="text-center">
        <div class="p-4 md:p-12">
          <h2 class="my-12 text-2xl md:text-5xl  leading-tight tracking-tight">
            Restons en contact <br />
            <span class="text-title-color">Rejoignez-moi sur les réseaux sociaux</span>
          </h2>
          <?php include('includes/socialicons.php'); ?>
          <div class="flex flex-wrap justify-center space-x-2">
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->
    <!--END --BANNER CONTACT-->

    <!--################################-->

    <!--COMPETENCES SECTION-->
    <section class="bg-page px-10 py-4
               lg:py-12
               xl:py-20" id="competences">
      <br><br>
      <article class="2xl:flex flex-row-reverse justify-around items-center">

        <div class="2xl:w-6/12">

          <h2 class="font-thin text-title-color text-4xl uppercase tracking-wider
               lg:text-5xl
               xl:text-6xl">Mes compétences</h2>
          <br>

          <ul class="md:grid md:grid-cols-2">

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">HTML5 & CSS3</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">Je maîtrise les fondamentaux du HTML5 et du CSS3, ce qui me permet de créer des sites web
                structurés et esthétiquement plaisants. J’ai une bonne compréhension des concepts tels que le
                positionnement, la mise en page responsive, et l’utilisation des balises sémantiques en HTML5.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">JavaScript & Ajax</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J’ai une solide connaissance de JavaScript, y compris ES6, et j’ai de l’expérience avec Ajax
                pour créer des applications web interactives et dynamiques. Je suis capable de manipuler le DOM, de
                gérer les événements et de faire des appels API asynchrones.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">PHP</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J’ai une bonne connaissance de PHP pour le développement côté serveur. Je suis capable de créer
                des applications web dynamiques, de gérer les sessions et les cookies, et d’interagir avec les bases de
                données.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Fondamentaux POO</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">Je comprends les principes de la programmation orientée objet, y compris l’encapsulation,
                l’héritage et le polymorphisme. J’ai de l’expérience avec la conception et l’implémentation de classes
                et d’objets en PHP et JavaScript.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Fondamentaux SQL</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J’ai une bonne connaissance des bases de données relationnelles et du langage SQL. Je suis
                capable de créer, de lire, de mettre à jour et de supprimer des données dans une base de données, et de
                concevoir des schémas de base de données efficaces.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Tailwind CSS</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J’ai de l’expérience avec Tailwind CSS pour créer des designs modernes et responsives. Je suis
                capable d’utiliser les utilitaires de Tailwind pour construire rapidement des interfaces utilisateur
                personnalisées. (Notamment mon portfolio !)</p>
            </li>

            <li class="py-4 px-4 text-justify xl:block">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Boostrap</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J’ai une solide connaissance de Bootstrap pour le développement rapide d’applications web
                responsives. Je suis capable d’utiliser les composants de Bootstrap pour créer des interfaces
                utilisateur cohérentes et attrayantes.</p>
            </li>

            <li class="py-4 px-4 text-justify xl:block">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">WordPress</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J’ai de l’expérience avec WordPress pour la création et la gestion de sites web. Je suis
                capable d’installer et de configurer WordPress, de gérer les thèmes et les plugins, et de créer du
                contenu personnalisé.</p>
            </li>

          </ul>
        </div>

        <div class="xl:w-6/12 2xl:w-5/12 mx-auto pt-16">
          <a href="assets/img/cv.pdf" target="blank" class="hover:cursor-pointer">
            <img src="assets/img/cv.png" alt="Visualisation de mon CV" />
          </a>
        </div>

      </article>
    </section>
    <!--END --COMPETENCES SECTION-->

    <!--################################-->

    <!--CONTACT SECTION-->
    <section id="contact" class="bg-end px-10 py-16
               sm:py-16
               lg:py-12
               xl:py-20">
      <div class="py-8 lg:py-16 px-8 mx-auto max-w-screen-md bg-default rounded-lg">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-title-color text-center capitalize">Contactez-moi
        </h2>
        <p class="mb-8 lg:mb-16 font-light text-center sm:text-xl">Une question ? Un projet en tête ? Vous avez la
          possibilité de me contactez directement ! </p>
        <form action="#" class="space-y-8 flex flex-col">
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-title-color">Votre mail :</label>
            <input type="email" id="email"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="exemple@gmail.com" required>
          </div>
          <div>
            <label for="subject" class="block mb-2 text-sm font-medium text-title-color">Objet :</label>
            <input type="text" id="subject"
              class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
              placeholder="La raison de votre email.." required>
          </div>
          <div class="sm:col-span-2">
            <label for="message" class="block mb-2 text-sm font-medium text-title-color">Votre message :</label>
            <textarea id="message" rows="6"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Votre commentaire..."></textarea>
          </div>
          <button type="submit" class="bg-title-color text-default mx-auto py-2 px-4 my-16 rounded-full uppercase
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl lg:text-right
                                xl:text-1xl xl:py-4 xl:px-6">Envoyer votre message</button>
        </form>
      </div>
    </section>
    <!--END CONTACT SECTION-->

    <!--################################-->

    <!--FOOTER SECTION-->
    <footer class="bg-default">
      <?php include('includes/socialicons.php'); ?>
      <p class="text-center">
        Portfolio 2023 © RENOLLET Nataël
        <br>
        <a href="">Mentions Légales</a>
      </p>
    </footer>
    <!--END FOOTER SECTION-->

    <!-- Implement the Back Top Top Button -->
    <button id="to-top-button" onclick="goToTop()" title="Go To Top"
      class="hidden fixed z-50 bottom-8 right-8 border-0 w-16 h-16 rounded-full drop-shadow-md bg-default text-white text-3xl font-bold">&uarr;</button>

  </main>

  <!--___________________________-->


  <!--################################-->

  <!--SCRIPTS-->
  <script>
    var toTopButton = document.getElementById("to-top-button");

    // When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function () {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        toTopButton.classList.remove("hidden");
      } else {
        toTopButton.classList.add("hidden");
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function goToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>
  <!--END SCRIPTS-->

  <!--################################-->
</body>

</html>