<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs = Auteur::get();
        // return view('auteurs.index',compact('auteurs'));
        return view('auteurs.powergrid_auteurs',compact('auteurs'));
    }



    public function livresofAuteur($id)
    {

        
        $liv = Livre::where('auteur_id',$id)->get();
        $auteur = Auteur::findOrFail($id);
       

        return view('auteurs.livresofauteur',compact(['liv','auteur']));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function show(Auteur $auteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Auteur $auteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auteur $auteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auteur $auteur)
    {
        //
    }
}
