<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function upload(Request $request)
    {

        // Valider l'image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
        ]);

        // Récupérer l'image uploadée
        $image = $request->file('image');

        // Donner un nom unique à l'image
        $name = time() . '.' . $image->extension();

        // Déplacer l'image vers un répertoire spécifique
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);

        // Enregistrer l'image dans la base de données (optionnel)
        // $image = new Image;
        // $image->name = $name;
        // $image->save();

        return back()
            ->with('success', 'Image uploadée avec succès.')
            ->with('image', $name);
    }
}
