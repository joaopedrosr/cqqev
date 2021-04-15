<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ingrediente;
use Livewire\Component;
use App\Models\Receita;



class ReceitasCreate extends Component
{
    public $orderIngredientes = [];
    public $ingredientes = [];

    public function mount()
    {
        
        $this->ingredientes = Ingrediente::all();
        $this->orderIngredientes = [
            ['ingrediente_id' => '', 'quantidade' => 1]
        ];
    }

    public function addIngrediente()
    {
        $this->orderIngredientes[] = ['ingrediente_id' => '', 'quantidade' => 1];
    }

    public function removeIngrediente($index)
    {
        unset($this->orderIngredientes[$index]);
        $this->orderIngredientes = array_values($this->orderIngredientes);
    }

    public function render()
    {
        info($this->orderIngredientes);
        return view('livewire.admin.receitas-create');
    }
}