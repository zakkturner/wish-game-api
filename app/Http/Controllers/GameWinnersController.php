<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameWinner;
class GameWinnersController extends Controller
{
    //
    public function index(){
        $winners = Gamewinner::all();
        return view ( 'welcome',compact('winners') );
    }
    public function add(){
        // $email = $request->get('email');
        // $score = $request->get('score');
        request()->validate([
            'email' => 'required',
            'score' => 'required',
            'shoe' => 'required'
        ]);
        return GameWinner::create([
            'email' => request('email'),
            'score' => request('score'),
            'shoe' => request('shoe'),
        ]);
    }
}
