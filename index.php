<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Renollet Nataël - Développeur web</title>
  <meta name="description"
    content="Je suis un développeur web junior passionné par la création d'expériences en ligne. 
            Ma maîtrise du HTML, CSS et PHP me permet de concevoir des sites web esthétiques et fonctionnels.  
            En constante évolution, j'ai récemment commencé à explorer le potentiel du JavaScript pour ajouter des fonctionnalités interactives à mes projets.
            Grâce à ma formation au pôle UIMM, j'ai acquis des compétences solides et je suis prêt à relever de nouveaux défis dans le domaine du développement web.">

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

    <!--HEADER SECTION-->
    <header class="h-full bg-header px-10 pt-16 
               sm:pt-32
               lg:pt-24
               xl:pt-40">

      <div class="flex 
              max-sm:flex-col-reverse
              max-sm:items-center
              lg:justify-between
              xl:justify-around">

        <div class="text-justify
                sm:w-2/3
                max-sm:text-center 
                md:w-2/3
                lg:w-3/4
                xl:w-2/5">

          <h1 class="my-4 font-thin text-title-color text-4xl tracking-widest
                 sm:text-5xl
                 lg:my-8 lg:text-6xl
                 xl:my-12
                 2xl:text-7xl">Nataël RENOLLET</h1>

          <p class="my-4 text-lg font-light tracking-widest
                sm:text-xl
                lg:my-8 lg:text-1xl
                xl:my-12">
            Je suis passionné par internet et le web, je suis actuellement
            diplômé développeur web et web mobile à Simplon au pôle formation
            UIMM de Charleville-Mézières. J'aime apprendre en continu et suis
            toujours à la recherche de nouvelles compétences à acquérir pour
            améliorer mes capacités en programmation et de desginer. Mon objectif est donc d'évoluer
            dans la même structure en tant que "Designer UI/UX" afin de combiner la puissance du développement avec
            l'esthétique du design.
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
      <div class="mx-auto text-justify px-10 py-16
              max-sm:text-center
              lg:w-3/4">

        <h2 class="my-4 font-thin text-title-color text-4xl uppercase tracking-wider
                 sm:text-5xl
                 lg:my-8 lg:text-7xl lg:w-3/4
                 xl:my-12 xl:w-5/12
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
        </p>
        <br>
        <div class="w-full lg:text-right">
          <a href="#project" class="bg-default py-2 px-4 rounded-full uppercase
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl lg:text-right
                                xl:text-1xl xl:py-4 xl:px-6">Découvrir</a>
        </div>
        <br>
        <!--####-->

        <div class="container px-6 py-10 mx-auto">
          <h1 class="font-thin text-center text-title-color text-4xl uppercase tracking-wider
               lg:text-5xl
               xl:text-6xl" id="project">Mon Portfolio</h1>
          <br>
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
          <h2 class="my-12 text-5xl font-bold leading-tight tracking-tight">
            Restons en contact <br />
            <span class="text-title-color">Rejoignez-nous sur les réseaux sociaux</span>
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
               xl:py-20">
      <br><br>
      <article class="lg:flex flex-row-reverse justify-around">

        <div class="lg:w-6/12">

          <h2 class="font-thin text-title-color text-4xl uppercase tracking-wider
               lg:text-5xl
               xl:text-6xl">Mes compétences</h2>
          <br>

          <ul class="md:grid md:grid-cols-2">

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

            <li class="py-4 px-4 text-justify">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

            <li class="hidden py-4 px-4 text-justify xl:block">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

            <li class="hidden py-4 px-4 text-justify xl:block">
              <h3 class="uppercase font-semibold tracking-wider text-title-color text-lg
                        md:text-xl
                        lg:text-1xl">Perfectionniste</h3>
              <p class="text-text-color text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles
                étaient
                prévues
                à
                la base.</p>
            </li>

          </ul>
        </div>

        <div class="lg:w-5/12">
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
          <button type="submit" class="bg-title-color mx-auto py-2 px-4 my-16 rounded-full uppercase
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

  </main>

  <!--___________________________-->


  <!--################################-->

  <!--SCRIPTS-->

  <!--END SCRIPTS-->

  <!--################################-->
</body>

</html>