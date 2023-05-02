<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewTransaction;

class FiltersController extends Controller
{
    public function viewTransactionFilter()
    {
        try {
            return ViewTransaction::filter()->get();
        } catch (\Throwable $th) {
            return [];
        }
    }
}
