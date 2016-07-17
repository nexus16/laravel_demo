<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Card;
use App\User;

class CardsController extends Controller
{
    //

    public function index(){
    	$cards = Card::all();
    	return view('card.index',compact('cards'));
    }


    public function show(Card $card){
    	//$card = Card::find($id);
    	
    	return view('card.show',compact('card'));
    }

}
