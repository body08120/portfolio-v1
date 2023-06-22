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
    <section class="bg-page px-10 py-4
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
      <section class="border-y-2 py-4 my-8 border-default text-center lg:px-16">

        <h2 class="my-4 font-thin text-title-color text-4xl uppercase tracking-wider
               sm:text-5xl
               lg:my-8 lg:text-7xl
               xl:my-12
               ">Quelques-uns de mes projets !</h2>

        <div class="sm:flex">

          <!-- card -->
          <div class="h-full bg-white shadow-md rounded m-4">
            <div class="h-3/4 w-full">
              <img class="w-full h-full object-cover rounded-t" src="assets/img/wfbcorp.png" alt="piña"
                onclick="showModal('assets/img/wfbcorp.png')" />
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
              <img class="w-full h-full object-cover rounded-t" src="assets/img/wfbcorp.png" alt="piña"
                onclick="showModal('assets/img/wfbcorp.png')" />
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
              <img class="w-full h-full object-cover rounded-t" src="assets/img/wfbcorp.png" alt="piña"
                onclick="showModal('assets/img/wfbcorp.png')" />
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
              <img class="w-full h-full object-cover rounded-t" src="assets/img/wfbcorp.png" alt="piña"
                onclick="showModal('assets/img/wfbcorp.png')" />
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

      <form action="" method="" class="bg-title-color rounded-xl py-10 px-12 w-max">
        <h3 class="font-thin text-default text-4xl uppercase tracking-wider
               lg:text-5xl
               xl:text-6xl">contactez-moi</h3>
               <br>
        <div class="flex flex-col w-full">
          <input type="text" name="name" placeholder="Votre nom" class="bg-text-color rounded-lg py-2 my-2 text-default" />
          <input type="email" name="email" placeholder="Votre email" class="bg-text-color rounded-lg py-2 my-2 text-default" />
          <input type="text" name="subject" placeholder="La raison de votre message" class="bg-text-color rounded-lg py-2 my-2 text-default" />
          <textarea name="message" id="message" cols="30" rows="10" placeholder="Tapez votre message ici !"
            class="bg-text-color rounded-lg py-2 my-2 text-default"></textarea>

          <input type="submit" value="ENVOYER" class="bg-default py-2 px-4 rounded-lg uppercase text-center
                                hover:font-semibold hover:bg-h-button
                                lg:tracking-widest lg:text-xl
                                xl:text-1xl xl:py-4 xl:px-6">
        </div>
      </form>
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

  <script src="assets/js/img-modal-cards.js"></script>
</body>

</html>