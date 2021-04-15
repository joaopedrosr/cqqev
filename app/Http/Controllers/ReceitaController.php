<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use App\Models\Receita;



class ReceitaController extends Controller
{
 


    public function index(){
        $receitasdoce = Receita::where('status', 2)->where('type', 'doce')->latest('id')->paginate(1);
        $receitassalgada = Receita::where('status', 2)->where('type', 'salgada')->latest('id')->paginate(1);
        $receitas = Receita::where('status', 2)->latest('id')->paginate(9);
        


        return view ('receitas.index', compact('receitasdoce', 'receitassalgada', 'receitas'));
    }


    public function show(Receita $receita){
      
        $this->authorize('published', $receita);

        return view ('receitas.show', compact('receita'));

    }


    public function list()
    {
        

        return view ('receitas.list');
    }

    public function doce()
    {
        $doces = Receita::where('status', 2)
                                ->where('type', 'doce')
                                ->latest('id')
                                ->paginate(9);

        

        return view ('receitas.doce', compact('doces'));
    }

    public function salgada()
    {
        $salgadas = Receita::where('status', 2)
                                ->where('type', 'salgada')
                                ->latest('id')
                                ->paginate(9);

        

        return view ('receitas.salgada', compact('salgadas'));
    }

    /* public function list(){
        
        $ingredientes=Ingrediente::all();

        $receitas = Receita::where('status', 2)->latest('id')->paginate(9);
        return view ('receitas.list', compact('receitas', 'ingredientes'));

    } */

/*      public function search(){
        $receitas = Receita::where('status', 2)->latest('id')->paginate(9);
        return view ('receitas.search', compact('receitas'));

    }  */  

}