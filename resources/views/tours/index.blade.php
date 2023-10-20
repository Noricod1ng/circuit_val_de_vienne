<x-app-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg mx-auto">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Enregistrer un tour :
        </h2>
        <form method="POST" action="{{ route('tours.index') }}">
            @csrf

            <!-- Date -->
            <div class="mt-4">
                <x-input-label for="date" :value="__('Date de la session')"/>
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" required autofocus/>
                <x-input-error :messages="$errors->get('date')" class="mt-2"/>
            </div>

            <!-- Temps au tour -->
            <div class="mt-4">
                <x-input-label for="time" :value="__('Temps (mm:ss:mss)')"/>
                <x-text-input id="time" class="block mt-1 w-full" type="text" name="time" placeholder="00:00:000" required/>
                <x-input-error :messages="$errors->get('time')" class="mt-2"/>
            </div>

            <!-- Voiture -->
            <div class="mt-4">
                <x-input-label for="car" :value="__('Votre voiture')"/>
                <x-text-input id="car" class="block mt-1 w-full" type="text" name="car" placeholder="Porsche GT3 RS" required/>
                <x-input-error :messages="$errors->get('car')" class="mt-2"/>
            </div>

            <!-- Numéro de session -->
            <div class="mt-4">
                <x-input-label for="session_number" :value="__('Numéro de session (12 chiffres)')"/>
                <x-text-input id="session_number" class="block mt-1 w-full" type="number" name="session_number"
                              laceholder="000000000000" required/>
                <x-input-error :messages="$errors->get('session_number')" class="mt-2"/>
            </div>


            <!-- Numéro de session -->
            <div class="mt-4">
                <x-input-label for="category_id" :value="__('Catégorie')"/>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-right mt-4">
                <x-primary-button class="mt-4">{{ __('Ajouter') }}</x-primary-button>
            </div>
        </form>
    </div>

</x-app-layout>

