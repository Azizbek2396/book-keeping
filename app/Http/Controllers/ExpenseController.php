<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expense;
use App\Models\Tip;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('expense.index');
    }

    public function create()
    {
        $tips = Tip::get();
        $categories = Category::get();

        return view('expense.form', compact('tips', 'categories'));
    }

    public function store(Request $request)
    {
        $params = $request->all();
        $lastExpense = Expense::all()->last();

//        dd($lastExpense->total);

        $expense = new Expense();

        $expense->tip = $params['tip'];
        $expense->category = $params['category'];
        $expense->money = $params['money'];
        $expense->comment = $params['comment'];

        if ($params['tip'] === 'Доход') {
            $expense->total = $lastExpense->total + $params['money'];
            $expense->save();

            return redirect()->route('expense.index');
        } else {
            if($lastExpense->total >= $params['money']) {
                $expense->total = $lastExpense->total - $params['money'];
                $expense->save();

                return redirect()->route('expense.index');
            } else {
                session()->flash('warning', 'Не достоточный денег!');

                return redirect()->route('expense.index');
            }
        }


//        dd($params['money']);
//        if ($params['money']) {
//
//        }
    }
}
