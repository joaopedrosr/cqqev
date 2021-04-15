<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Ingrediente;
use Livewire\WithPagination;

class IngredientesIndex extends Component
{   
    use WithPagination;
    protected $paginationTheme ="bootstrap";
    public $search;
    
    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
       $ingredientes = Ingrediente::where('name', 'LIKE','%'. $this->search . '%')->latest('id')->paginate(); 
            
            
            

        return view('livewire.admin.ingredientes-index',compact('ingredientes'));
    }
}
