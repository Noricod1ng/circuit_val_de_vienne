<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bootstrap Carousel -->
            <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('storage/image1.png')}}" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('storage/image2.png')}}" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="image3.jpg" alt="Image 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Premier paragraphe "Bienvenue" -->
            <div class="mt-4">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Bienvenue</h2>
                <p class="mt-2 text-gray-900 dark:text-gray-100">
                    Votre texte de bienvenue ici.
                </p>
            </div>

            <!-- Deuxième paragraphe "Actualités" -->
            <div class="mt-8">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Actualités</h2>
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <!-- Carte 1 -->
                    <a href="#" class="hover:no-underline">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <img src="actualite1.jpg" alt="Actualité 1">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Titre Actualité 1</h3>
                                <p class="mt-2 text-gray-900 dark:text-gray-100">Description de l'actualité 1.</p>
                            </div>
                        </div>
                    </a>

                    <!-- Carte 2 -->
                    <a href="#" class="hover:no-underline">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <img src="actualite2.jpg" alt="Actualité 2">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Titre Actualité 2</h3>
                                <p class="mt-2 text-gray-900 dark:text-gray-100">Description de l'actualité 2.</p>
                            </div>
                        </div>
                    </a>

                    <!-- Carte 3 -->
                    <a href="#" class="hover:no-underline">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <img src="actualite3.jpg" alt="Actualité 3">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Titre Actualité 3</h3>
                                <p class="mt-2 text-gray-900 dark:text-gray-100">Description de l'actualité 3.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
