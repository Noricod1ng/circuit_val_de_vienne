<x-app-layout>
    @auth
        <div class="text-right mt-4 mx-5">
            <a href='{{ route('tours.create') }}'>
                <x-primary-button class="mt-4">{{ __('Ajouter un tour') }}</x-primary-button>
            </a>
        </div>
    @endauth

    <form method="GET">
        <label for="category">Filtrer par catégorie :</label>
        <select name="category" id="category" onchange="this.form.submit()">
            @foreach ($categories as $categoryId => $categoryName)
                <option value="{{ $categoryId }}" {{ Request::get('category') == $categoryId ? 'selected' : '' }}>
                    {{ $categoryName }}
                </option>
            @endforeach
        </select>
    </form>


    <div class="mt-6 mx-5 bg-white shadow-sm rounded-lg divide-y">


        <div class="row">
            <div class="col-2" style="background-color: #D5D5D5FF">
                <p class="font-semibold">NOM</p>
            </div>
            <div class="col-1">
                <p class="font-semibold">DATE</p>
            </div>
            <div class="col-2" style="background-color: #D5D5D5FF">
                <p class="font-semibold">TEMPS AU TOUR</p>
            </div>
            <div class="col-2">
                <p class="font-semibold">CATEGORIE</p>
            </div>
            <div class="col-3" style="background-color: #D5D5D5FF">
                <p class="font-semibold">VOITURE</p>
            </div>

        </div>

        @foreach ($tours as $tour)
            <div class="row">
                <div class="col-2" style="background-color: #D5D5D5FF">
                    <p>{{ $tour->user->name }}</p>
                </div>
                <div class="col-1">
                    <p>{{ $tour->date }}</p>
                </div>
                <div class="col-2 text-center" style="background-color: #D5D5D5FF">
                    <p>{{ $tour->time }}</p>
                </div>
                <div class="col-2">
                    <p>{{ $tour->category->name }}</p>
                </div>
                <div class="col-3" style="background-color: #D5D5D5FF">
                    <p>{{ $tour->car }}</p>
                </div>
                <div class="col-1">
                    @if ($tour->user->is(auth()->user()))
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('tours.edit', $tour)">
                                    {{ __('Modifier') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('tours.destroy', $tour) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('tours.destroy', $tour)"
                                                     onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Supprimer') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endif
                </div>
            </div>
        @endforeach


        {{ $tours->links() }}

    </div>
</x-app-layout>


{{--
 <div class="p-6 flex space-x-2">

                    <div class="flex-1">

                        <div class="flex justify-between items-center">

                            <div>

                                <span class="text-gray-800">{{ $tour->user->name }}</span>
                                <p class="mt-4 text-lg text-gray-900">{{ $tour->date }}</p>
                                <p class="mt-4 text-lg text-gray-900">{{ $tour->time }}</p>
                                <p class="mt-4 text-lg text-gray-900">{{ $tour->car }}</p>

                                <small class="ml-2 text-right text-sm text-gray-600">Mis à jour le {{ $tour->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($tour->created_at->eq($tour->updated_at))
                                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless

                            </div>
                            @if ($tour->user->is(auth()->user()))
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('tours.edit', $tour)">
                                            {{ __('Modifier') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('tours.destroy', $tour) }}">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('tours.destroy', $tour)"
                                                             onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Supprimer') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @endif
                        </div>

                    </div>

                </div>
                --}}
