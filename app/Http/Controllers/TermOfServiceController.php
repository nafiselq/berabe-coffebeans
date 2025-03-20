<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TermOfServiceController extends Controller
{
    public function index()
    {
        //
        return Inertia::render('TermOfService/Index');
    }
}
