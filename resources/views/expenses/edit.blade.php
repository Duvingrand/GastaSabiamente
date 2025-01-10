<x-app-layout>
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Editar Gasto</h1>

        @if ($errors->any())
            <ul class="text-red-500 mb-4">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('expenses.update', $expense) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="kind" class="block text-gray-700 mb-2">Categoría</label>
                <select name="kind" id="kind" class="w-full p-2 border border-gray-300 rounded-md">
                    <option value="Alimentación" {{ $expense->kind == 'Alimentación' ? 'selected' : '' }}>Alimentación</option>
                    <option value="Transporte" {{ $expense->kind == 'Transporte' ? 'selected' : '' }}>Transporte</option>
                    <option value="Ocio" {{ $expense->kind == 'Ocio' ? 'selected' : '' }}>Ocio</option>
                    <option value="Vivienda" {{ $expense->kind == 'Vivienda' ? 'selected' : '' }}>Vivienda</option>
                    <option value="Salud" {{ $expense->kind == 'Salud' ? 'selected' : '' }}>Salud</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 mb-2">Descripción</label>
                <input type="text" name="description" id="description" value="{{ old('description', $expense->description) }}" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Descripción del gasto" required>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 mb-2">Fecha de Compra</label>
                <input type="date" name="date" id="date" value="{{ old('date', $expense->date) }}" class="w-full p-2 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-gray-700 mb-2">Monto</label>
                <input type="number" name="amount" id="amount" value="{{ old('amount', $expense->amount) }}" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Monto gastado" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md shadow hover:bg-blue-700 transition duration-200">Actualizar Gasto</button>
            </div>
        </form>

        <div class="mt-4">
            <a href="{{ route('expenses.index') }}" class="text-blue-500 hover:underline">Volver a Mis Gastos</a>
        </div>
    </div>
</x-app-layout>
