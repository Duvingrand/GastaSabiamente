<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    $query = Expense::where('user_id', auth()->id());

    // Filtrar por categoría
    if ($request->filled('kind')) {
        $query->where('kind', $request->kind);
    }

    // Filtrar por rango de fechas
    if ($request->filled('start_date') && $request->filled('end_date')) {
        $query->whereBetween('date', [$request->start_date, $request->end_date]);
    }

    $expenses = $query->orderBy('date', 'asc')->get();

    // Totales por categoría
    $totalsByCategory = Expense::where('user_id', auth()->id())
    ->select('kind', DB::raw('sum(amount) as total'))
    ->groupBy('kind')
    ->get();

    $total = $expenses->sum('amount');

    return view('expenses.index', compact('expenses', 'total', 'totalsByCategory'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenses.create'); // Ajusta la vista según tu estructura
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseRequest $request)
    {
        Expense::create($request->validated() + ['user_id' => auth()->id()]);
        return redirect()->route('expenses.index')->with('success', 'Gasto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return view('expenses.show', compact('expense')); // Ajusta la vista según tu estructura
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        return view('expenses.edit', compact('expense')); // Ajusta la vista según tu estructura
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        $expense->update($request->validated());
        return redirect()->route('expenses.index')->with('success', 'Gasto actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Gasto eliminado exitosamente.');
    }
}
