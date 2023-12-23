<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Renollet Nataël - Développeur web</title>
    <meta name="description"
        content="Explorez mes réalisations et découvrez mes projets dans le domaine du développement web et mobile. Parcourez cette vitrine de compétences variées et innovantes.">

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
               xl:text-6xl">Mes créations</h1>
                <br>
                <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 lg:grid-cols-2">
                    <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                        style="background-image:url('assets/img/wfbcorp.png')">
                        <div
                            class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                            <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Best
                                website
                                collections</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">
                                Website</p>
                        </div>
                    </div>

                    <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                        style="background-image:url('assets/img/wfbcorp.png')">
                        <div
                            class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                            <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Block of
                                Ui kit
                                collections</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Ui
                                kit</p>
                        </div>
                    </div>

                    <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                        style="background-image:url('assets/img/wfbcorp.png')">
                        <div
                            class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                            <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Ton’s of
                                mobile
                                mockup</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">
                                Mockups</p>
                        </div>
                    </div>

                    <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96"
                        style="background-image:url('assets/img/wfbcorp.png')">
                        <div
                            class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                            <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">Huge
                                collection of
                                animation</h2>
                            <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">
                                Animation</p>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="flex justify-center">
                    <nav aria-label="paginationForPortfolio">
                        <ul class="list-style-none flex">
                            <li class="rounded-full hover:bg-default hover:text-title-color">
                                <a
                                    class="pointer-events-none relative block rounded-full px-3 py-1.5 text-sm transition-all duration-300 ">Previous</a>
                            </li>
                            <li>
                                <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm transition-all duration-300 hover:bg-default hover:text-title-color"
                                    href="#!">1</a>
                            </li>
                            <li aria-current="page">
                                <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm font-medium text-primary-700 transition-all duration-300 hover:bg-default hover:text-title-color"
                                    href="#!">2
                                </a>
                            </li>
                            <li>
                                <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm transition-all duration-300 hover:bg-default hover:text-title-color"
                                    href="#!">3</a>
                            </li>
                            <li class="rounded-full hover:bg-default hover:text-title-color">
                                <a class="relative block rounded-full px-3 py-1.5 text-sm transition-all duration-300 "
                                    href="#!">Next</a>
                            </li>
                        </ul>
                    </nav>
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