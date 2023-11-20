<?php

namespace App\Console\Commands;

use App\Models\Book;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Console\Command;

class FinedUserLate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trx-fined-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fined User who late return book';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $transactions = Transaction::where([
            ['status', 'active',],
            ['return_date', '<=', now()]
        ])->get();

        foreach ($transactions as $transaction) {
            $late = Carbon::parse($transaction->return_date)->diffInDays(now());
            $transaction->update([
                'status' => 'late',
                'note' => 'Anda terlamat mengembalikan buku, denda berlaku',
                'fine' => 1000 * $late,
            ]);
            $transaction->user->update([
                'status' => 'suspend'
            ]);
        }
    }
}
