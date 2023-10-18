<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Bootstrap Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('storage/circuit_aerien.png')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/motos.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('storage/voitures.png')}}" alt="Third slide">
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
                <h1 class="font-semibold text-3xl text-gray-800 dark:text-gray-200" style="font-size: 2.25rem;">Bienvenue</h1>
                <p class="mt-6 text-gray-900 dark:text-gray-100">
                    Les Deux Arbres exploitent désormais le Circuit du Val de Vienne. En 18 mois après des travaux considérables, la piste du Vigeant est entrée dans une nouvelle ère.
                    Les stands, le paddock, les salles de réception, la restauration, la salle de presse, la salle de conférence, le podium, le contrôle vidéo sécurité, la sonorisation, les liaisons internet, ont été refondées et reconstruites pour offrir une nouvelle dimension aux utilisateurs et spectateurs.
                </p>
            </div>



            <!-- Deuxième paragraphe "Actualités" -->
            <div class="mt-6 text-center">
                <h1 class="font-semibold text-3xl text-gray-800 dark:text-gray-200" style="font-size: 2.25rem;">Actualités</h1>
                <div class="mt-4 row">
                    <!-- Carte 1 -->
                    <div class="col-md-4">
                        <a href="#" class="hover:no-underline" target="_blank">
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
