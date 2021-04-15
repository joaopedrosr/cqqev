<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Receita;
use Livewire\WithPagination;

class ReceitasIndex extends Component
{   
    use WithPagination;
    protected $paginationTheme ="bootstrap";
    public $search;
    
    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
       $receitas = Receita::where('name', 'LIKE','%'. $this->search . '%')
            ->latest('id')
            ->paginate(); 

        return view('livewire.admin.receitas-index',compact('receitas'));
    }
}
