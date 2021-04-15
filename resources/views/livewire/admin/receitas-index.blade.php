<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Pesquise a receita pelo nome">
    </div>

    @if ($receitas->count())
     
<div class ="card-body">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th colapsan="2">  </th>
            </tr>
        </thead>

        <tbody>
           @foreach ($receitas as $receita)
               <tr>
                   <td>{{$receita->id}}</td>
                   <td>{{$receita->name}}</td>
                   <td with="10px">
                        <a class = "btn btn-primary btn-sm" href ="{{route('admin.receitas.edit', $receita)}}">Editar</a>

                   </td>
                   <td with="10px">
                       <form action="{{route('admin.receitas.destroy', $receita)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm" type="submit">Apagar</button>
                       </form>
                   </td>
               </tr>
           @endforeach 
        </tbody>
    
    
    </table>


</div>

<div class="card-footer">
    {{$receitas->links()}}
</div>
@else
<div class ="card-body">
<strong>Não existe nenhuma quiche com esse nome :( </strong>
</div>

@endif



</div>
