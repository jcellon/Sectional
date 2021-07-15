<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        //******************************************************************************
        //$title = 'Welcome to Interior Define';
        //return view('pages.index', compact('title')); //One
        //return view('pages.index')->with('title', $title); //Two
        //******************************************************************************
        $dta = array(
            'products' => ['Sectionals', 'Sofas', 'Chairs']
        );
        return view('pages.index')->with($dta);
    }


    public function features() {
        $dta = array(
            'features' => ['Fabrics', 'Length', 'Cushions', 'Bracket']
        );
        return view('pages.features')->with($dta);
    }

    public function services() {
        $dta = array(
            'services' => ['item-1', 'item-2', 'item-3']
        );
        return view('pages.services')->with($dta);
    }

}
