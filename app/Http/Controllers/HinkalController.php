<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HinkalController extends Controller
{
    public function index() {
        $hinkals = [
            ['type' => 'Lezgi', 'base' => 'cheesy crust'],
            ['type' => 'Avar', 'base' => 'garlic crust'],
            ['type' => 'Lakskiy', 'base' => 'thin & crispy']
        ];
        return view('hinkal', 
        ['hinkals' => $hinkals,
        'name' => request('name')]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
