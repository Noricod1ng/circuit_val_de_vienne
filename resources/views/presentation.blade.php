<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Présentation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Bootstrap Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('storage/aerien.png')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/pitstop.png')}}" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Premier paragraphe "Bienvenue" -->
            <div class="mt-6 text-center">
                <h1 class="font-semibold text-3xl text-gray-800 dark:text-gray-200" style="font-size: 2.25rem;">VAL DE VIENNE</h1>
                <p class="mt-6 text-gray-900 dark:text-gray-100">
                    Le Circuit du Val de Vienne est né de la rencontre de passionnés de sports mécaniques et d’habitants désireux de développer leur territoire.<br>

                    Réalisé par le Pays Montmorillonnais et financé par plusieurs collectivités territoriales, il voit le jour en 1990 et reçoit sa première compétition en 1992 avec les voitures du Championnat de France Supertourisme.<br>

                    Le Championnat de France Superbike suivra bientôt et depuis cette époque, chaque année, les grands championnats font étape dans la Vienne.<br>

                    Réputé comme un des plus techniques de France, il s’est doté en 2008 de la seule caractéristique qui lui manquait, à savoir une vitesse de pointe élevée. En raccordant deux lignes droites afin d’obtenir une accélération continue de près de 1000 mètres, la vitesse maxi en catégorie GT franchit les 270 Km/h.<br>
                    C’est à cette même époque que le circuit a été admis dans le cercle très fermé des circuits homologués au grade 2 de la FIA.

                    Géré depuis le 1er Janvier 2012 par la SAS Les Deux Arbres, le Circuit du Val de Vienne a bénéficié de la plus importante modernisation de son histoire. La Tour de contrôle et les stands présentent désormais les équipements de confort, de puissance électrique et de connectivité indispensables. Le Centre de contrôle vidéo, les salles de presse et de briefing sont dans les standards des circuits internationaux. Le paddock, déjà réputé pour son ergonomie, offre un confort de travail et de vie remarquable grâce à la qualité de sa distribution électrique, ses équipements sanitaires et son offre de restauration.<br>

                    Désormais équipé, le circuit du Val de Vienne est une des places incontournable du sport mécanique et a su, malgré tout, rester accueillant et convivial.<br>
                </p>
            </div>



            <!-- Deuxième paragraphe "Actualités" -->
            <div class="mt-6 text-center">
                <h1 class="font-semibold text-3xl text-gray-800 dark:text-gray-200" style="font-size: 2.25rem;">Actualités</h1>
                <div class="mt-4 row">
                    <!-- Carte 1 -->
                    <div class="col-md-4">
                        <a href="https://les-2-arbres.e-catalogues.info/" class="hover:no-underline" target="_blank">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <img src="{{asset('storage/historic_tour.png')}}" alt="Actualité 1">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Historic Tour</h3>
                                    <p class="mt-2 text-gray-900 dark:text-gray-100">21 - 22 Octobre 2023</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Carte 2 -->
                    <div class="col-md-4">
                        <a href="https://les-2-arbres.e-catalogues.info/" class="hover:no-underline" target="_blank">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <img src="{{asset('storage/drift.png')}}" alt="Actualité 2">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Championnat de France de Drift</h3>
                                    <p class="mt-2 text-gray-900 dark:text-gray-100">28 - 29 Octobre 2023</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Carte 3 -->
                    <div class="col-md-4">
                        <a href="https://www.circuitvaldevienne.com/images/pdf/journee-touristique-1-novembre-2023.pdf" class="hover:no-underline" target="_blank">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <img src="{{asset('storage/journee_touristique.png')}}" alt="Actualité 3">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Journée Touristique</h3>
                                    <p class="mt-2 text-gray-900 dark:text-gray-100">1er Novembre 2023</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <a class="mt-6 mx-auto" href="https://www.youtube.com/watch?v=DSd51Pm5fMs" style="display: block; width: 940px; height: 150px;" target="_blank">
                <img src="{{asset('storage/bandeau_video_residence.png')}}" alt="Bandeau vidéo Résidence">
            </a>
        </div>
    </div>
</x-app-layout>
