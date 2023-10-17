<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('tours.update', $tour) }}">
            @csrf
            @method('patch')
            <textarea
                name="car"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('car', $tour->car) }}</textarea>
            <x-input-error :messages="$errors->get('car')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('tours.list') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
