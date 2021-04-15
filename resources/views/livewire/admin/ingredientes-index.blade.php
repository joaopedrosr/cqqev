<div class="card">
    
    <div class="card-header">
    <input wire:model="search" class="form-control" placeholder="Pesquise o ingrediente pelo nome">
    </div>

    @if ($ingredientes->count())
     
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
           @foreach ($ingredientes as $ingrediente)
               <tr>
                   <td>{{$ingrediente->id}}</td>
                   <td>{{$ingrediente->name}}</td>
                   <td with="10px">
                    @can('admin.ingredientes.edit')
                        <a class = "btn btn-primary btn-sm" href ="{{route('admin.ingredientes.edit', $ingrediente)}}">Editar</a>
                    @endcan
                   </td>
                   <td with="10px">
                    @can('admin.ingredientes.destroy')
                       <form action="{{route('admin.ingredientes.destroy', $ingrediente)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Apagar</button>
                       </form>
                    @endcan
                   </td>
               </tr>
           @endforeach 
        </tbody>
    
    
        </table>


    </div>

            <div class="card-footer">
                {{$ingredientes->links()}}
            </div>
            @else
            <div class ="card-body">
            <strong>Não existe nenhuma quiche com esse nome :( </strong>
            </div>

            @endif



</div>