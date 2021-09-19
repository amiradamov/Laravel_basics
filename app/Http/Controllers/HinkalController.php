<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hinkal;
use App\Models\Member;
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

    public function member() {
        $members = Member::all();
        return view('layouts.member', [
            'members' => $members,
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
        $hinkal->toppings = request('toppings');
        $hinkal->hide = 0;
        $hinkal->save();

        // return request('toppings');

        return redirect('/')->with('mssg', 'Thanks for your order'); 
    }

    public function destroy($id) {
        $hinkal = Hinkal::findorFail($id);
        $hinkal->hide = "1";
        $hinkal->save();
        return redirect('/');
    }
}
