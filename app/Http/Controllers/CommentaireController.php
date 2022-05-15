<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    //
    public function index()
    {
        $commentaire = Commentaire::all();
        return response()->json($commentaire);
    }

    public function create(Request $request)
    {
        $commentaire = Commentaire::create($request->all());
        return response()->json($commentaire);
    }

    public function update(Request $request, $id)
    {
        $commentaire = Commentaire::find($id);
        $commentaire->update($request->all());
        return response()->json($commentaire);
    }

    public function delete($id)
    {
        $commentaire = Commentaire::find($id);
        $commentaire->delete();
        return response()->json('suppression réusie');
    }
    public function show($id)
    {
      $commentaire = Commentaire::find($id);
        return response()->json($commentaire);
    }

}
