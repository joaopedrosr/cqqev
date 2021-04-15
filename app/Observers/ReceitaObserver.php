<?php

namespace App\Observers;

use App\Models\Receita;
use Illuminate\Support\Facades\Storage;

class ReceitaObserver
{

    public function creating(Receita $receita)
    {
        if(! \App::runningInConsole()){
        $receita->user_id = auth()->user()->id;
        }
    }

   

    public function deleting(Receita $receita)
    {
        if ($receita->image){
            Storage::delete($receita->image->url);
        }
    }

}
