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
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));

        return redirect('/');
    }
}
