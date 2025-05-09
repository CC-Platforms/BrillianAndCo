<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.index');
    }
}