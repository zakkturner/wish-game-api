<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameWinner;
class GameWinnersController extends Controller
{
    //
    public function index(){
        $winners = Gamewinner::all();
        return view ( 'game',compact('winners') );
    }
    public function add(){
        // $email = $request->get('email');
        // $score = $request->get('score');
        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'score' => 'required',
            'shoe' => 'required',

        ]);
        // return GameWinner::create([
        //     'firstname' => request('firstname'),
        //     'lastname' => request('lastname'),
        //     'email' => request('email'),
        //     'score' => request('score'),
        //     'shoe' => request('shoe'),

        // ]);
        $winner = GameWinner::firstOrNew(['email' => request('email')]);
        if(GameWinner::where(['email' => request('email')] )->exists()){
            $winner->firstname = request('firstname');
            $winner->lastname = request('lastname');
            $winner->email = request('email');
            if((int)request('score') < $winner->score){
                $winner->score = request('score');
            }
            $winner->shoe = request('shoe');
            $winner->save();
             return["Success", $winner];

        }else{
            return GameWinner::create([
                        'firstname' => request('firstname'),
                        'lastname' => request('lastname'),
                        'email' => request('email'),

                        'score' => request('score'),
                        'shoe' => request('shoe'),

                    ]);
            }



    }
    public function updateScore(){

        request()->validate([


            'score' => 'required',

        ]);

        $winner = GameWinner::firstOrNew(['email' => request('email')]);


            // $winner->email = request('email');
            if( (int)request('score') < $winner->score || $winner->score == "0"){
                $winner->score = request('score');
            }


        $winner->update();
        return["Success", $winner];
    }

}
