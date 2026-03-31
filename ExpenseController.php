<?php
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('index', compact('expenses'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        Expense::create([
            'title' => $request->title,
            'amount' => $request->amount
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $expense = Expense::find($id);
        return view('edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $expense = Expense::find($id);
        $expense->update([
            'title' => $request->title,
            'amount' => $request->amount
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Expense::destroy($id);
        return redirect('/');
    }
}