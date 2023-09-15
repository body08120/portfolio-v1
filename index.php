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
               lg:pt-24 lg:h-screen
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
            apprenti développeur web et web mobile à Simplon au pôle formation
            UIMM de Charleville-Mézières. J'aime apprendre en continu et suis
            toujours à la recherche de nouvelles compétences à acquérir pour
            améliorer mes capacités en programmation. Mon objectif est d'obtenir
            mon diplôme et d'évoluer dans la même structure en tant que
            "Concepteur Développeur d'application".
          </p>
          <br>
          <a href="#contact" class="bg-default py-2 px-4 rounded-full uppercase tracking-wider 
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl">Contactez-moi</a>
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
    <section class="bg-page px-10 pt-4
               sm:py-16
               lg:py-12
               xl:py-20">
      <div class="mx-auto text-justify py-16
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
      </div>

      <!--SECTION CARDS-->
      <section class="pt-4 mt-8 text-center lg:px-16" id="project">

        <h2 class="my-4 font-thin text-title-color text-4xl uppercase tracking-wider
               sm:text-5xl
               lg:my-8 lg:text-7xl
               xl:my-12
               ">Quelques-uns de mes projets !</h2>

        <div class="sm:flex">

          <!-- card -->
          <div class="h-full bg-white shadow-md rounded m-4">
            <div class="h-3/4 w-full">
              <img class="w-full h-full object-cover rounded-t hover:cursor-pointer" src="assets/img/wfbcorp.png"
                alt="piña" onclick="showModal('assets/img/wfbcorp.png')" />
            </div>
            <div class="w-full h-1/4 p-3">
              <a href="#" class=" hover:text-yellow-600 text-gray-700">
                <span class="text-lg font-semibold uppercase tracking-wide ">Pineapple</span>
              </a>
              <p class="text-gray-600 text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

              <div class="py-2 text-white text-xs text-center grid grid-cols-2 gap-2
            md:text-sm
            xl:text-base">

                <span class="bg-default rounded-full px-2">HTML/CSS</span>
                <span class="bg-default rounded-full px-2">PHP</span>
                <span class="bg-default rounded-full px-2">JAVASCRIPT</span>
              </div>
            </div>
          </div>

          <!-- card -->
          <div class="h-full bg-white shadow-md rounded m-4">
            <div class="h-3/4 w-full">
              <img class="w-full h-full object-cover rounded-t hover:cursor-pointer" src="assets/img/wfbcorp.png"
                alt="piña" onclick="showModal('assets/img/wfbcorp.png')" />
            </div>
            <div class="w-full h-1/4 p-3">
              <a href="#" class=" hover:text-yellow-600 text-gray-700">
                <span class="text-lg font-semibold uppercase tracking-wide ">Banana</span>
              </a>
              <p class="text-gray-600 text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

              <div class="py-2 text-white text-xs text-center grid grid-cols-2 gap-2
            md:text-sm
            xl:text-base">

                <span class="bg-default rounded-full px-2">HTML/CSS</span>
                <span class="bg-default rounded-full px-2">PHP</span>
                <span class="bg-default rounded-full px-2">JAVASCRIPT</span>
              </div>
            </div>
          </div>

          <!-- card -->
          <div class="hidden h-full bg-white shadow-md rounded m-4 lg:block">
            <div class="h-3/4 w-full">
              <img class="w-full h-full object-cover rounded-t hover:cursor-pointer" src="assets/img/wfbcorp.png"
                alt="piña" onclick="showModal('assets/img/wfbcorp.png')" />
            </div>
            <div class="w-full h-1/4 p-3">
              <a href="#" class=" hover:text-yellow-600 text-gray-700">
                <span class="text-lg font-semibold uppercase tracking-wide ">Mango</span>
              </a>
              <p class="text-gray-600 text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

              <div class="py-2 text-white text-xs text-center grid grid-cols-2 gap-2
            md:text-sm
            xl:text-base">

                <span class="bg-default rounded-full px-2">HTML/CSS</span>
                <span class="bg-default rounded-full px-2">PHP</span>
                <span class="bg-default rounded-full px-2">JAVASCRIPT</span>
              </div>
            </div>
          </div>

          <!-- cards -->
          <div class="hidden h-full bg-white shadow-md rounded m-4 2xl:block">
            <div class="h-3/4 w-full">
              <img class="w-full h-full object-cover rounded-t hover:cursor-pointer" src="assets/img/wfbcorp.png"
                alt="piña" onclick="showModal('assets/img/wfbcorp.png')" />
            </div>
            <div class="w-full h-1/4 p-3">
              <a href="#" class=" hover:text-yellow-600 text-gray-700">
                <span class="text-lg font-semibold uppercase tracking-wide ">Mango</span>
              </a>
              <p class="text-gray-600 text-sm leading-5 mt-1
            md:text-base
            xl:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

              <div class="py-2 text-white text-xs text-center grid grid-cols-2 gap-2
            md:text-sm
            xl:text-base">

                <span class="bg-default rounded-full px-2">HTML/CSS</span>
                <span class="bg-default rounded-full px-2">PHP</span>
                <span class="bg-default rounded-full px-2">JAVASCRIPT</span>
              </div>
            </div>
          </div>

        </div>

        <br><br>
        <a href="#moreProjects" class="bg-default py-2 px-4 my-16 rounded-full uppercase
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl lg:text-right
                                xl:text-1xl xl:py-4 xl:px-6">Voir +</a>
        <br><br>

        <!-- The Modal -->
        <div id="modal"
          class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center">

          <!-- The close button -->
          <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
            onclick="closeModal()">&times;</a>

          <!-- A big image will be displayed here -->
          <img id="modal-img" class="max-w-[800px] max-h-[600px] object-cover" src="#" alt="modal" />
        </div>
      </section>

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
            Let's stay in touch <br />
            <span class="text-title-color">Join our social media</span>
          </h2>
          <?php include('includes/socialicons.php'); ?>
          <div class="flex flex-wrap justify-center space-x-2">
            <!-- Facebook -->
            <!-- <button type="button" data-te-ripple-init data-te-ripple-color="light"
              class="mb-2 flex items-center rounded bg-[#1877f2] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="mr-2 h-4 w-4">
                <path fill="currentColor"
                  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
              </svg>
              Facebook
            </button> -->

            <!-- Twitter -->
            <!-- <button type="button" data-te-ripple-init data-te-ripple-color="light"
              class="mb-2 flex items-center rounded bg-[#1da1f2] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 h-4 w-4">
                <path fill="currentColor"
                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
              </svg>
              Twitter
            </button> -->

            <!-- Google -->
            <!-- <button type="button" data-te-ripple-init data-te-ripple-color="light"
              class="mb-2 flex items-center rounded bg-[#ea4335] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" class="mr-2 h-4 w-4">
                <path fill="currentColor"
                  d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
              </svg>
              Google
            </button> -->

            <!-- Instagram -->
            <!-- <button type="button" data-te-ripple-init data-te-ripple-color="light"
              class="mb-2 flex items-center rounded bg-[#c13584] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="mr-2 h-4 w-4">
                <path fill="currentColor"
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>
              Instagram
            </button> -->
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
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-title-color text-center">Contactez-moi</h2>
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
        Mentions Légales
      </p>
    </footer>
    <!--END FOOTER SECTION-->

  </main>

  <!--___________________________-->

  <!--SCRIPTS-->
  <script src="assets/js/img-modal-cards.js"></script>
  <!--END SCRIPTS-->
</body>

</html>