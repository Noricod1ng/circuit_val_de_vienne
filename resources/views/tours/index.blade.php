<x-app-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">

        <form method="POST" action="{{ route('tours.store') }}">
            @csrf

            <!-- Date -->
            <div class="mt-4">
                <x-input-label for="date" :value="__('Date de la session')"/>
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" required autofocus/>
                <x-input-error :messages="$errors->get('date')" class="mt-2"/>
            </div>

            <!-- Temps au tour -->
            <div>
                <x-input-label for="time" :value="__('Temps (mm:ss:mss)')"/>
                <x-text-input id="time" class="block mt-1 w-full" type="text" name="time" placeholder="00:00:000"
                              required/>
                <x-input-error :messages="$errors->get('time')" class="mt-2"/>
            </div>

            <!-- Voiture -->
            <div class="mt-4">
                <x-input-label for="car" :value="__('Votre voiture')"/>
                <x-text-input id="car" class="block mt-1 w-full" type="text" name="car" placeholder="Porsche GT3 RS"
                              required/>
                <x-input-error :messages="$errors->get('car')" class="mt-2"/>
            </div>

            <!-- Numéro de session -->
            <div class="mt-4">
                <x-input-label for="session_number" :value="__('Numéro de session (XXXXXXXXXXXX)')"/>
                <x-text-input id="session_number" class="block mt-1 w-full" type="number" name="session_number"
                              laceholder="000000000000" required/>
                <x-input-error :messages="$errors->get('session_number')" class="mt-2"/>
            </div>

            <x-primary-button class="mt-4">{{ __('Tour') }}</x-primary-button>
        </form>
    </div>


</x-app-layout>
