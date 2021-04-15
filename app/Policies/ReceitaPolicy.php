<?php

namespace App\Policies;
use App\Models\Receita;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceitaPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Receita $receita){
        if($user->id == $receita->user_id){
            return true;
        }else{
            return false;
        }
    }   

    public function published(?User $user, Receita $receita){
        if($receita->status == 2){
            return true;
        }else{
            return false;
        }

    }

}

