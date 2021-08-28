<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Przelewy24\Przelewy24;

class P24Controller extends Controller
{
    public function index()
    {
        $przelewy24 = new Przelewy24([
            'merchant_id' => env('P24_MERCHAND_ID', ''), //login to x_y, merchant_id to x
            'crc' => env('P24_CRC', ''),
            'live' => false, // `true` for production/live mode
            ]);

        $transaction = $przelewy24->transaction([
                'session_id' => 'test202108281616',//wygenerowane z aplikacji sprzedawcy
                'url_return' => 'https://github.com/kamil7pl?tab=repositories',
                'url_status' => 'url to which the transaction status webhook will be sent',
                'amount' => 1053,
                'description' => 'transaction description',
                'email' => 'kamil7.pl@gmail.com',
            ]);

            return view('p24.index')
            ->with('url', $transaction->redirectUrl());
    }
    public function resp()
    {
        $przelewy24 = new Przelewy24([
            'merchant_id' => env('P24_MERCHAND_ID', ''), //login to x_y, merchant_id to x
            'crc' => env('P24_CRC', ''),
            'live' => false, // `true` for production/live mode
            ]);
        $webhook = $przelewy24->handleWebhook();
        $przelewy24->verify([
            'session_id' => 'test202108281616',//jak wyzej
            'order_id' => $webhook->orderId(),   // przelewy24 order id
            'amount' => 1053
        ]);
        //Można spróbować dodać kod po udanej transakcji, np. zapis do pliku.

    }
}