<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receita;
use App\Models\Ingrediente;
use App\Http\Requests\ReceitaRequest;

use Illuminate\Support\Facades\Storage;

class ReceitaController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:admin.receitas.index')->only('index');
        $this->middleware('can:admin.receitas.create')->only('create', 'store');
        $this->middleware('can:admin.receitas.index')->only('edit', 'update'); 
        $this->middleware('can:admin.receitas.destroy')->only('destroy');

 
    }

    public function index()
    {
        

        $receitas = Receita::all();

        return view('admin.receitas.index', compact('receitas'));
    }


    public function create()
    {

        $ingredientes = Ingrediente::all();
        return view ('admin.receitas.create', compact('ingredientes'));
    }


    public function store(ReceitaRequest $request)
    {

        $receita= Receita::create($request->all());

        if ($request->file('file')){
            $url = Storage::put('posts', $request->file('file'));
            
            $receita->image()->create([
                'url'=> $url
            ]);
        
        }

        if($request->ingredientes){
            $receita->ingredientes()->sync($request->ingredientes);
        }

        return redirect()->route('admin.receitas.edit', $receita)->with('info','Quiche criada com sucesso!');
    }


    public function edit(Receita $receita)
    {

        $ingredientes = Ingrediente::all();
        return view ('admin.receitas.edit', compact('receita','ingredientes'));
    }



    public function update(ReceitaRequest $request, Receita $receita)
    {


        $receita->update($request->all());
        
        if ($request->file('file')){
            $url = Storage::put('receitas', $request->file('file'));

            if($receita->image){
                Storage::delete($receita->image->url);

                $receita->image->update([
                    'url'=> $url
                ]);
            }else{
                $receita->image()->create([
                    'url'=> $url
                ]);
            }

        }

        if($request->ingredientes){
            $receita->ingredientes()->sync($request->ingredientes);
        }

        return redirect()->route('admin.receitas.edit', $receita)->with('info','A receita foi atualizada com sucesso!!');
    }


    public function destroy(Receita $receita)
    {


        $receita->delete();

        return redirect()->route('admin.receitas.index', $receita)->with('info','Você apagou a Quiche!');
    }



}



