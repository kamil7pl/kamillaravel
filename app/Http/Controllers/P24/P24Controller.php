<?php

namespace App\Http\Controllers\P24;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Przelewy24\Przelewy24;

class P24Controller extends Controller
{
    public function index()
    {
        $przelewy24 = new Przelewy24([//Dane mozna probowac dac do config np. p24.php.
            'merchant_id' => 'x', //login: x_y
            'crc' => 'crc z sandboxa',
            'live' => false, // `true` for production/live mode
            ]);
    
        $transaction = $przelewy24->transaction([
                'session_id' => 'test4064',//wygenerowane z aplikacji sprzedawcy
                'url_return' => 'https://github.com/kamil7pl?tab=repositories',
                'url_status' => 'url to which the transaction status webhook will be sent',
                'amount' => 2021,
                'description' => 'transaction description',
                'email' => 'kamil7.pl@gmail.com',
            ]);
            
            return view('p24.index')
            ->with('url', $transaction->redirectUrl());
    }
    public function resp()
    {
        $przelewy24 = new Przelewy24([
            'merchant_id' => 'jak wyzej',
            'crc' => 'jak wyzej',
            'live' => false, // `true` for production/live mode
            ]);
        $webhook = $przelewy24->handleWebhook();
        $przelewy24->verify([
            'session_id' => 'test4064',//jak wyzej
            'order_id' => $webhook->orderId(),   // przelewy24 order id
            'amount' => 2021
        ]);
        //kod po udanej transakcji
        
    }
}
