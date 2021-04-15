<?php

namespace App\Http\Livewire;

use App\Models\Ingrediente;
use App\Models\Receita;
use Livewire\Component;
use Livewire\WithPagination;


class ReceitasIndex extends Component
{   
    use WithPagination;
    protected $paginationTheme ="bootstrap";
    
    public $selectedIngredientes = [];

    public $ingredientes;

    public function mount()
    {
        $this->ingredientes = Ingrediente::pluck('name', 'id');
    }

    public function render()
    {
        $receitas = Receita::with('ingredientes')
            ->where(function ($query) {
                $query->when(!empty($this->selectedIngredientes), function ($query) {
                    $query->whereHas('ingredientes', function ($query) {
                        $query->whereIn('id', $this->selectedIngredientes);
                    })->orWhereDoesntHave('ingredientes');
                });
            })
            ->latest('id')
            ->paginate(9);

        return view('livewire.receitas-index', [
            'selectedIngredientes' => $this->selectedIngredientes,
            'ingredientes' => $this->ingredientes,
            'receitas' => $receitas
        ]);
    }

    public function filterIngredientes($id)
    {
        if (($key = array_search($id, $this->selectedIngredientes)) !== false) {
            unset($this->selectedIngredientes[$key]);
        } else {
            $this->selectedIngredientes[] = $id;
        }
    }
}
