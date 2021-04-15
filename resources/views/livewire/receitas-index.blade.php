<div class="card-body">
    <p class="mb-2">
        <h3> Ingredientes: </h3><br/>
        @foreach ($ingredientes as $id => $ingrediente)
        <label>    
        
            <div class="badge{{ in_array($id, $selectedIngredientes) ? ' badge-dark text-white' : '' }}" wire:click="filterIngredientes({{ $id }})">
                
                <h5 class = "px-2">{{ $ingrediente }}</h5>
                
            </div>
        </label> 
        @endforeach
    </p>
<div class=  "wrapper">
    <div class="row">
        @foreach ($receitas as $receita)
        <div class="col-md-4 col-sm-4 col-lg-4 ">
                <div class="float-left mt-2 mr-2">
{{--                     @forelse($receita->ingredientes as $ingrediente)
                        <span class="h4 mr-1 text-white bg-warning rounded p-1">{{ $ingrediente->name }}</span>
                    @empty
                        <span class="h4 mr-1 text-white bg-warning rounded p-1">ALL</span>
                    @endforelse --}}
                </div>
                <div class="item">  <a href="{{route('receitas.show', $receita)}}">
                    <div class="content-overlay rounded left: 0; top: 0;"></div>
                
                <img class="content-image rounded mb-3 shadow" src="@if($receita->image){{Storage::url($receita->image->url)}} @endif" alt="">
                   
                            <div class="content-details fadeIn-bottom">
                                <h3 class= "content-title">{{$receita->name}}</h3>
                                
                            </div>
                        </a> </div>
            </div>
        @endforeach
        <div class="pagination footer ">
            {{$receitas->links()}}
        </div>

    </div>
</div>





{{-- <div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Pesquise a receita pelo nome">
    </div>

    @if ($receitas->count())
     
   <div class="row"> 


  

    @foreach ($receitas as $receita)


        <div class=" col-md-4 col-sm-4 col-lg-4 ">         
    <div class="item">  <a href="{{route('receitas.show', $receita)}}">
        <div class="content-overlay rounded left: 0; top: 0;"></div>
    
    <img class="content-image rounded mb-3 shadow" src="@if($receita->image){{Storage::url($receita->image->url)}}@endif" alt="">
       
                <div class="content-details fadeIn-bottom">
                    <h3 class= "content-title">{{$receita->name}}</h3>
                    
                </div>
            </a> </div>
         
        </div> 
               
        
@endforeach
</div> 

@endif

</div> 
<div class="pagination">
{{$receitas->links()}}
</div>

</div>



<footer class="page-footer center">
<div class="page-footer-container">
<small> Copyrigth © 2021
</small><br/>
<i class="fab fa-youtube-square"></i>
<i class="fab fa-facebook-square"></i>
<i class="fab fa-instagram-square"></i>
<p>Powered by Sorrentino</p>
<p>Email: <a href="mailto:joaopedrosr@gmail.com">joaopedrosr@gmail.com</a></p>
</div>
</footer>



</div>
 --}}
</div>