<?php

namespace App\Http\Controllers;

use App\Models\Billet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            if (Billet::where('user_id', Auth::user()->id)->exists() ) {
                $infoBillet = DB::table('billets')->where('user_id', Auth::user()->id)->get();
                $exist = true;
                return view('index', compact('infoBillet', 'exist'));
            } else {
                return view('index');
            }
        } else {
            return view('index');
        }
    }
}
