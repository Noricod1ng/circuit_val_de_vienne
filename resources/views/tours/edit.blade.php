<x-app-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg mx-auto">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Modifier le tour :
        </h2>
        <form method="POST" action="{{ route('tours.update', $tour) }}">
            @csrf
            @method('patch')

            <!-- Voiture -->
            <div class="mt-4">
                <x-input-label for="car" :value="__('Votre voiture')"/>
                <x-text-input id="car" class="block mt-1 w-full" type="text" name="car" value="{{ old('car', $tour->car) }}" required/>
                <x-input-error :messages="$errors->get('car')" class="mt-2"/>
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

            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('tours.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
