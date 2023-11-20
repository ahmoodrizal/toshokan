<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function index()
    {
        $transactions = Transaction::with('book', 'user')
            ->latest()
            ->paginate(10);

        return view('admin.transaction.index', compact('transactions'));
    }

    public function dashboard()
    {
        $transactions = Transaction::with('book')
            ->whereUserId(auth()->user()->id)
            ->latest()
            ->get();

        return view('dashboard', compact('transactions'));
    }

    public function create(Book $book)
    {
        if (auth()->user()->isSuspend()) {
            return redirect(route('transaction.dashboard'));
        }

        return view('transaction.create', compact('book'));
    }

    public function store(Request $request, Book $book)
    {
        $data = $request->validate([
            'agree' => ['required'],
            'duration' => ['required', 'in:3,7,14,30']
        ]);

        $return_date = Carbon::now()->addDays($request['duration']);

        if ($return_date->dayOfWeek == Carbon::SUNDAY || Carbon::now()->dayOfWeek == Carbon::SUNDAY) $return_date->addDays(1);

        $data['user_id'] = auth()->user()->id;
        $data['book_id'] = $book->id;
        $data['transaction_id'] = Str::random(8);
        $data['return_date'] = $return_date;

        Transaction::create($data);

        return redirect(route('transaction.dashboard'))->with('success', 'Congratulaion, You success rent a book');
    }

    public function edit(Transaction $transaction)
    {
        return view('admin.transaction.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $data = $request->validate([
            'status' => ['nullable', 'in:pending,active,done,late'],
            'note' => ['nullable']
        ]);

        $transaction->update($data);

        return redirect(route('admin.transactions.index'))->with('success', 'Success update transaction data');
    }

    public function success()
    {
        return view('transaction.success');
    }
}
