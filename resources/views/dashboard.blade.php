<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenida a GastaSabiamente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-center">
                    <h3 class="text-lg font-bold mb-4">¡Bienvenido!</h3>
                    <p class="text-gray-600 mb-6">Tu herramienta ideal para gestionar gastos personales.</p>
                    <a href="{{ route('expenses.index') }}"
                        class="bg-blue-600 text-white px-5 py-3 rounded-md shadow hover:bg-blue-700 transition duration-200">
                        Comienza a gestionar tus gastos
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
