<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function showTicketPage(Request $request)
    {
        return view('ticket');
    }
}