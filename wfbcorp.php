<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Renollet Nataël - WFB Corp</title>
    <meta name="description"
        content="Explorez mes réalisations et découvrez mes projets dans le domaine du développement web et mobile. Parcourez cette vitrine de qui explique la création du projet.">

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
        <header></header>
        <!--END HEADER SECTION-->

        <!--################################-->

        <!--PROJECTS BLOC-->
        <section class="bg-page">
            <div class="container px-6 py-10 mx-auto">
                <h1 class="font-thin text-center text-title-color text-4xl uppercase tracking-wider
               lg:text-5xl
               xl:text-6xl">WFB Corp - Agence Web "projet fictif"</h1>
                <br>
                <img src="assets/img/wfbcorp.png" alt="WFB Corp" />

                <h1 class="my-4 font-thin text-title-color text-4xl tracking-widest
                 sm:text-5xl
                 lg:my-8 lg:text-6xl
                 xl:my-12
                 2xl:text-7xl">Informations complémentaires</h1>

                <div class="text-left">

                    <div class="text-justify">

                        <!--################################-->
                        <div class="grid grid-col-4 grid-flow-col gap-8
                        max-xl:grid-rows-2 content-around">
                            <!--START --Head SECTION-->
                            <div class="hover:border-l-2">
                                <h2 class="my-4 font-thin text-title-color text-3xl tracking-widest
                 sm:text-4xl
                 lg:my-8 lg:text-5xl
                 xl:my-12
                 2xl:text-6xl">Découvrez l'Agence Web WFB Corp</h2>


                                <p class="my-4 text-lg font-light tracking-widest
                sm:text-xl
                lg:my-8 lg:text-1xl
                xl:my-12">
                                    Dans le cadre d'une formation collaborative, nous avons conçu l'Agence Web WFB Corp.
                                    Ma
                                    contribution s'est concentrée sur la création de la page de présentation, une
                                    fenêtre
                                    ouverte sur notre univers.
                                </p>
                            </div>
                            <!--END --Head SECTION-->

                            <!--START --Head SECTION-->
                            <div class="hover:border-l-2 col-start-2">
                                <h2 class="my-4 font-thin text-title-color text-3xl tracking-widest
                 sm:text-4xl
                 lg:my-8 lg:text-5xl
                 xl:my-12
                 2xl:text-6xl">Ce que vous y trouverez :</h2>


                                <p class="my-4 text-lg font-light tracking-widest
                sm:text-xl
                lg:my-8 lg:text-1xl
                xl:my-12">
                                    Une interface soignée avec une barre de navigation fluide et un pied de page discret
                                    pour une expérience de navigation agréable. Le point d'entrée ? Un header percutant
                                    qui attire le regard et vous invite à explorer.

                                    J'ai intégré la bibliothèque Révolution Sliders pour donner vie au contenu,
                                    enrichissant ainsi ma compréhension du JavaScript.
                                </p>
                            </div>
                            <!--END --Head SECTION-->

                            <!--START --Head SECTION-->
                            <div class="hover:border-l-2 col-start-3 max-xl:col-start-1 max-xl:row-start-2">
                                <h2 class="my-4 font-thin text-title-color text-3xl tracking-widest
                 sm:text-4xl
                 lg:my-8 lg:text-5xl
                 xl:my-12
                 2xl:text-6xl">Dynamisme et Contenu :</h2>


                                <p class="my-4 text-lg font-light tracking-widest
                sm:text-xl
                lg:my-8 lg:text-1xl
                xl:my-12">
                                    Les données proviennent d'une base solide et tout le backend a été élaboré en PHP
                                    8.2, la dernière version à ce moment-là. Vous découvrirez trois pôles essentiels -
                                    développement, design et référencement - accessibles via une simple flèche. À
                                    gauche, des informations détaillées et les derniers projets liés à chaque pôle, et à
                                    droite, une illustration évocatrice.
                                </p>
                            </div>
                            <!--END --Head SECTION-->

                            <!--START --Head SECTION-->
                            <div class="hover:border-l-2 col-start-4 max-xl:col-start-2 max-xl:row-start-2">
                                <h2 class="my-4 font-thin text-title-color text-3xl tracking-widest
                 sm:text-4xl
                 lg:my-8 lg:text-5xl
                 xl:my-12
                 2xl:text-6xl">En Conclusion :</h2>


                                <p class="my-4 text-lg font-light tracking-widest
                sm:text-xl
                lg:my-8 lg:text-1xl
                xl:my-12">
                                    Cette page de présentation est le fruit de notre passion pour le développement web
                                    collaboratif. Elle incarne notre engagement à créer des interfaces à la fois
                                    fonctionnelles et esthétiques, tout en offrant une expérience immersive aux
                                    visiteurs. Bienvenue dans l'univers captivant de l'Agence Web WFB Corp !
                                </p>
                            </div>
                            <!--END --Head SECTION-->
                        </div>
                        <!--################################-->

                    </div>

                    <br>

                    <a href="index.php#project" class="bg-default py-2 px-4 rounded-full uppercase
                            hover:font-semibold hover:bg-h-button
                            lg:tracking-widest lg:text-xl lg:text-right
                            xl:text-1xl xl:py-4 xl:px-6">Retour aux projets</a>

                    <a href="index.php#contact" class="bg-default py-2 px-4 rounded-full uppercase
                            hover:font-semibold hover:bg-h-button
                            lg:tracking-widest lg:text-xl lg:text-right
                            xl:text-1xl xl:py-4 xl:px-6">Contactez-moi</a>
                </div>

            </div>
        </section>
        <!--END PROJECTS BLOC-->

        <!--################################-->


        <!--################################-->

        <!--SECTION-->

        <!--SECTION-->

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


    <!--################################-->

    <!--SCRIPTS-->

    <!--END SCRIPTS-->

    <!--################################-->
</body>

</html>