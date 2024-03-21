<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class insertTransaction extends Controller
{
    public function insertController(Request $request) {
        $createTransaction = Transaction::create([
            'user_id' => $request->user_id,
            'diamond_id' => $request->diamond_id,
            'price' => $request->price,
            'status' => $request->status
        ]);
        return new TransactionResource(true, 'Success insert Transaction', $createTransaction);
    }
}
