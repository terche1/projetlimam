<?php

namespace App\Http\Controllers;

use App\Models\ActeVente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function show()
    {
        $acte_vente = ActeVente::all(); 
        return view('home', compact('acte_vente'));
    }
    public function showw()
    {
        $acte_vente = ActeVente::all(); 
        return view('ajout', compact('acte_vente'));
    }
    
    public function add(Request $request)
    {
        
        $vente=new ActeVente();
        $vente->NomVendeur=$request->input('NomVendeur');
        $vente->NNIVendeur=$request->input('NNIVendeur');
        $vente->DateNaissanceVendeur=$request->input('DateNaissanceVendeur');
        $vente->NomAcheteur=$request->input('NomAcheteur');
        $vente->NNIAcheteur=$request->input('NNIAcheteur');
        $vente->DateNaissanceAcheteur=$request->input('DateNaissanceAcheteur');
        $vente->ChoseVendu=$request->input('ChoseVendu');
        $vente->Prix=$request->input('Prix');
        $vente->Temoin1=$request->input('Temoin1');
        $vente->NNITemoin1=$request->input('NNITemoin1');
        $vente->Temoin2=$request->input('Temoin2');
        $vente->NNITemoin2=$request->input('NNITemoin2');
        $vente->save();
        return redirect()->route('home')->with('msg', 'Acte de vente a été ajoutée avec succès.');
    }
 


    public function save($id){
        $vente=ActeVente::findOrFail( $id);


        return view('imprimer',compact( 'vente'));
    }
}
