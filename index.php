<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Renollet Nataël - Développeur web</title>
  <!--description-->

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            "text-color": "#B8A28E",
            "title-color": "#76614F",
            "default": "#36422E"
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .bg-header {
        background: linear-gradient(rgba(1, 1, 1, 0.1), rgba(1, 1, 1, 0.1)), url('assets/img/bg/background-header.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        /* -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; */
      }
        .bg-page {
        background: linear-gradient(rgba(1, 1, 1, 0.1), rgba(1, 1, 1, 0.1)), url('assets/img/bg/background-page.png'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: coutain;
        background-attachment: fixed;
        /* filter: brightness(50%) */
        /* -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; */
      }
      .bg-end {
        background: linear-gradient(rgba(1, 1, 1, 0.1), rgba(1, 1, 1, 0.1)), url('assets/img/bg/background-end.png'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: coutain;
        background-attachment: fixed;
        /* filter: brightness(50%) */
        /* -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; */
      }
    }
  </style>

</head>

<body>
  <main class="text-text-color">
    <!--HEADER SECTION-->
    <header class="bg-header px-10 pt-16 
                   sm:pt-32
                   lg:pt-24
                   xl:pt-40">

      <div class="flex 
                  max-sm:flex-col-reverse
                  lg:justify-between
                  xl:justify-around">

        <div class="max-sm:text-center 
                    md:text-justify md:w-2/3
                    lg:w-3/4
                    xl:w-2/5">

          <h1 class="my-4 font-thin text-title-color text-4xl
                     sm:text-5xl
                     lg:my-8 lg:text-6xl
                     xl:my-12
                     2xl:text-7xl">Nataël RENOLLET</h1>

          <p class="my-4 text-lg
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
          <a href="#contact"
            class="bg-default py-2 px-4 rounded-full uppercase tracking-wider hover:font-semibold">Contactez-moi</a>
        </div>
        <div>
          <img src="assets/img/profil.png" alt="Photo de profil" class="max-h-64 
                                                                        md:max-h-72
                                                                        xl:max-h-96" />
        </div>
      </div>
      <?php include('includes/socialicons.php'); ?>
    </header>
    <!--END HEADER SECTION-->

    <!--PROJECTS BLOC-->
    <section class="bg-page px-10">
      <h2>Je créer avec passion !</h2>
      <p>
        La passion est l'essence même de ma pratique en tant que développeur.
        Chaque projet est une occasion de me surpasser, d'apprendre de nouvelles
        compétences et de relever de nouveaux défis. Ma passion pour la création
        ne se limite pas seulement au développement, mais se reflète également
        dans mon approche globale de la vie professionnelle !
      </p>
      <a href="#project">Découvrez ce que j'ai fais</a>
    </section>
    <!--END PROJECTS BLOC-->

    <!--VITRINE SECTION-->
    <section class="bg-page px-10">

    </section>
    <!--END VITRINE SECTION-->

    <!--COMPETENCES SECTION-->
    <section class="bg-page px-10">
      <article>
        <a href="assets/img/cv.pdf" target="blank" class="hover:cursor-pointer">
          <img src="assets/img/cv.png" alt="Visualisation de mon CV" class="" />
        </a>

        <h2>Mes compétences</h2>
        <ul>

          <li>
            <h3>Perfectionniste</h3>
            <p>J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles étaient
              prévues
              à
              la base.</p>
          </li>

          <li>
            <h3>Perfectionniste</h3>
            <p>J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles étaient
              prévues
              à
              la base.</p>
          </li>

          <li>
            <h3>Perfectionniste</h3>
            <p>J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles étaient
              prévues
              à
              la base.</p>
          </li>

          <li>
            <h3>Perfectionniste</h3>
            <p>J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles étaient
              prévues
              à
              la base.</p>
          </li>

          <li>
            <h3>Perfectionniste</h3>
            <p>J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles étaient
              prévues
              à
              la base.</p>
          </li>

          <li>
            <h3>Perfectionniste</h3>
            <p>J'ai le sens du détail et j'aime que les choses soit au rendu final exactement comme elles étaient
              prévues
              à
              la base.</p>
          </li>

        </ul>
      </article>
    </section>
    <!--END --COMPETENCES SECTION-->

    <!--CONTACT SECTION-->
    <section id="contact" class="bg-end px-10">
      <form action="" method="">
        <h3>contactez-moi</h3>
        <input type="text" name="name" placeholder="Votre nom" />
        <input type="email" name="email" placeholder="Votre email" />
        <input type="text" name="subject" placeholder="La raison de votre message" />
        <input type="text" name="email" placeholder="Votre message" />

        <input type="submit" value="Envoyer">
      </form>
    </section>
    <!--END CONTACT SECTION-->

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
</body>

</html>