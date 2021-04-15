<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingrediente;

class IngredienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.ingredientes.index')->only('index');
        $this->middleware('can:admin.ingredientes.create')->only('create', 'store');
        $this->middleware('can:admin.ingredientes.index')->only('edit', 'update'); 
        $this->middleware('can:admin.ingredientes.destroy')->only('destroy');

 
    }




    public function index()
    {
        $ingredientes = Ingrediente::all();

        return view('admin.ingredientes.index', compact('ingredientes'));
    }


    public function create()
    {
        return view('admin.ingredientes.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug'=>'required|unique:ingredientes',
            
        ]);

        $ingrediente = Ingrediente::create($request->all());

        return redirect()->route('admin.ingredientes.edit', compact('ingrediente'))
        ->with('info', 'Ingrediente criado com sucesso!');

    }

    public function edit(Ingrediente $ingrediente)
    {
        return view('admin.ingredientes.edit', compact('ingrediente'));
    }


    public function update(Request $request, Ingrediente $ingrediente)
    {
        $request->validate([
            'name' => 'required',
            'slug'=>"required|unique:ingredientes,slug,$ingrediente->id"

        ]);
        
        
        $ingrediente->update($request->all());

        return redirect()->route('admin.ingredientes.edit', $ingrediente)
        ->with('info', 'Ingrediente atualizado corretamente');


    }


    public function destroy(Ingrediente $ingrediente)
    {
        $ingrediente->delete();
        return redirect()->route('admin.ingredientes.index')->with('info', 'Ingrediente eliminado!');
    }
}
