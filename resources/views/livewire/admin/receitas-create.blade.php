
  <form action="{{ route('admin.receitas.store') }}" method="POST">  
    @csrf  
    
    <div class="card-body">

        @foreach ($orderIngredientes as $index => $orderIngrediente)
        
        <div class="row">
            
            <div class="col">
                <label>

                    <select name="orderIngredientes[{{$index}}][ingrediente_id]"
                            wire:model="orderIngredientes.{{$index}}.ingrediente_id"
                            class="form-control">
                        <option value="">Escolha o ingrediente</option>
                        @foreach ($ingredientes as $ingrediente)
                            <option value="{{ $ingrediente->id }}">
                                {{ $ingrediente->name }} 
                            </option>
                        @endforeach
                    </select>
                </label>
            </div>
{{--        @error('ingrediente_id')
        
        <small class="text-danger">{{$message}}</small>
        
        @enderror --}}
            
            
                
{{--              <div class="col">
                    <input type="number"
                            name="orderIngredientes[{{$index}}][quantidade]"
                            class="form-control"
                            wire:model="orderIngredientes.{{$index}}.quantidade" />
                        </div>  --}} 

                            
                    <td>
                        <a class = "btn btn-danger btn-sm" href="#" 
                        wire:click.prevent="removeIngrediente({{$index}})">Delete</a>
                    </td>
                    

            </div>
            @endforeach
                    
                        <br/>

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-sm btn-secondary"
                    wire:click.prevent="addIngrediente">+ Add outro Ingrediente</button>
            </div>

            </div>
        
        
        
        
        </div>

  </form>


