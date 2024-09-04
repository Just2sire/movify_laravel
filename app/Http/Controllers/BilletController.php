<?php

namespace App\Http\Controllers;

use App\Models\Billet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BilletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('billets');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|max:50',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
            'movie' => 'required|min:6',
            'number' => 'required',
        ]);

        $data = $request->input();

        // Donner un nom unique à l'image
        $name = time() . '.' . $request->image->extension();

        // Déplacer l'image vers un répertoire spécifique
        $request->image->move(public_path('/images'), $name);

        $billet = Billet::create([
            'name' => $data['name'],
            'movie' => $data['movie'],
            'number' => $data['number'],
            'image' => $name,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('/index')->with('success', 'Votre commande a été effectué avec succès.')
            ->with('image', $name);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
