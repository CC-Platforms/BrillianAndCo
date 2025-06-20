<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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