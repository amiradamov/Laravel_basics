<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hinkal;
class HinkalController extends Controller
{
    public function index() {
        $hinkals = Hinkal::all();
        // $hinkals = Hinkal::orderBy('name', 'desc')->get();
        // $hinkals = Hinkal::where('type', 'slim dough')->get();
        // $hinkals = Hinkal::latest()->get;
        return view('hinkals.index', [
            'hinkals' => $hinkals, 
    ]);
    }

    public function show($id) {
        $hinkal = Hinkal::findOrFail($id);
        return view('hinkals.show', ['hinkal' => $hinkal]);
    }

    public function create() {
        return view('hinkals.create');
    }

    public function store() {
        $hinkal = new Hinkal();      
        $hinkal->name = request('name');
        $hinkal->type = request('type');
        $hinkal->base = request('base');

        $hinkal->save();

        error_log($hinkal);

        return redirect('/');
    }
}
