<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;

class getTransaction extends Controller
{
    public function GetTransaction()
    {
        $Transaction = Transaction::all();
        return new TransactionResource(true, 'List Transaction', $Transaction);
    }
}
