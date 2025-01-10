<x-app-layout>
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        @if (session('success'))
            <div class="text-green-500 mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex items-center justify-between mb-6">
            <a href="{{ route('expenses.create') }}"
                class="bg-blue-600 text-white px-3 py-5 rounded-md shadow hover:bg-blue-700 transition duration-200">Agregar
                Gasto</a>

            <form action="{{ route('expenses.index') }}" method="GET" class="flex items-center">
                <div class="mb-4 md:mb-0 md:mr-4">
                    <label for="kind" class="block text-gray-700 mb-2">Categoría</label>
                    <select name="kind" id="kind" class="w-full p-2 border border-gray-300 rounded-md">
                        <option value="">Todas</option>
                        <option value="Alimentación" {{ request('kind') == 'Alimentación' ? 'selected' : '' }}>
                            Alimentación</option>
                        <option value="Transporte" {{ request('kind') == 'Transporte' ? 'selected' : '' }}>
                            Transporte</option>
                        <option value="Ocio" {{ request('kind') == 'Ocio' ? 'selected' : '' }}>Ocio</option>
                        <option value="Vivienda" {{ request('kind') == 'Vivienda' ? 'selected' : '' }}>Vivienda
                        </option>
                        <option value="Salud" {{ request('kind') == 'Salud' ? 'selected' : '' }}>Salud</option>
                    </select>
                </div>

                <div class="mb-4 md:mb-0 md:mr-4">
                    <label for="start_date" class="block text-gray-700 mb-2">Fecha de Inicio</label>
                    <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}"
                        class="w-full p-2 border border-gray-300 rounded-md">
                </div>

                <div class="mb-4 md:mb-0 md:mr-4">
                    <label for="end_date" class="block text-gray-700 mb-2">Fecha de Fin</label>
                    <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}"
                        class="w-full p-2 border border-gray-300 rounded-md">
                </div>

                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition duration-200">Filtrar</button>
            </form>
        </div>


        @if ($expenses->isEmpty())
            <p class="text-gray-600">No tienes gastos registrados.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border-b p-3 text-left text-gray-600">Categoría</th>
                            <th class="border-b p-3 text-left text-gray-600">Descripción</th>
                            <th class="border-b p-3 text-left text-gray-600">Monto</th>
                            <th class="border-b p-3 text-left text-gray-600">Fecha</th>
                            <th class="border-b p-3 text-left text-gray-600">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                            <tr class="hover:bg-gray-50">
                                <td class="border-b p-3">{{ $expense->kind }}</td>
                                <td class="border-b p-3">{{ $expense->description }}</td>
                                <td class="border-b p-3">${{ number_format($expense->amount) }}</td>
                                <td class="border-b p-3">{{ $expense->date }}</td>
                                <td class="border-b p-3">
                                    <a href="{{ route('expenses.edit', $expense) }}"
                                        class="text-yellow-500 hover:underline mx-2">Editar</a>
                                    <form action="{{ route('expenses.destroy', $expense) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline"
                                            onclick="return confirm('¿Estás seguro de eliminar este gasto?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <div class="mt-6 bg-white p-4 shadow-md rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Totales por Categoría</h3>
                    <div class="space-y-2">
                        @foreach ($totalsByCategory as $category)
                            <div class="flex font-bold text-gray-800">
                                <span>{{ $category->kind }}:  </span>
                                <span>  ${{ number_format($category->total) }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="border-t mt-4 pt-2">
                        <div class="flex font-bold text-gray-900">
                            <span>Total de Gastos:  </span>
                            <span>  ${{ number_format($total) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
