<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function create(Request $request)
    {
        if (auth()->user()->isSuspend()) {
            return response()->json([
                'message' => 'You are suspend, cannot make any transactions'
            ], 401);
        }

        $data = $request->validate([
            'book_id' => ['required', 'numeric', 'exists:books,id'],
            'duration' => ['required', 'in:3,7,14,30']
        ]);

        $return_date = Carbon::now()->addDays($request['duration']);
        if ($return_date->dayOfWeek == Carbon::SUNDAY || Carbon::now()->dayOfWeek == Carbon::SUNDAY) $return_date->addDays(1);

        $data['user_id'] = auth()->user()->id;
        $data['book_id'] = $request['book_id'];
        $data['transaction_id'] = Str::random(8);
        $data['return_date'] = $return_date;

        $transaction = Transaction::create($data);

        return response()->json([
            'message' => 'Success create a transaction',
            'transaction' => $transaction
        ], 201);
    }

    public function userTransaction()
    {
        $transactions = Transaction::whereBelongsTo(auth()->user())
            ->latest()
            ->get();

        if (!count($transactions) > 0) {
            return response()->json([
                'message' => 'Transactions Data Not Found',
                'data' => []
            ], 404);
        } else {
            return response()->json([
                'message' => 'Success fetch user transactions',
                'data' => $transactions
            ], 200);
        }
    }
}
