<x-app-layout>


    @livewire('receitas-index')

{{-- <div class="wrapper">
    <aside>
        <h1>Escolha os ingredientes</h1>
        @foreach ($ingredientes as $ingrediente)
        {!! Form::checkbox('ingredientes[]', $ingrediente->id,null) !!}
        {{$ingrediente->name}}
        @endforeach

    </aside> 
    
    
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
    </footer><!-- politica de privacidad, otro contacto... -->
 --}}
</x-app-layout>



