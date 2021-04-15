<x-app-layout>

    <article class="page-welcome"><!-- texto de bem-vindos-->
        <div>
            <h1>Venha conosco aprender mais uma receita!</h1>
                <p>Descubra novas receitas e opções para uma boa alimentação</p>
                    <p>Com tres ou mais ingredientes é possível fazer quiches maravilhosas</p>
                    <p>Ligue o forno! </p>
        </div>
    </article>
    <main>        
        <article><!-- contenido principal -->
            <header class="center">
            <h1>Receitas de quiche!</h1>
                <p>Texto de intro...</p>
            </header>
            <div class="wrapper">
                <div class="row">
                    <div class="column">

                        <h2>Salgadas</h2>

                                @foreach ($receitassalgada as $receitasalgada)

                                <a href = "{{route('receitas.show', $receitasalgada)}}">
                                        <img src="@if($receitasalgada->image){{Storage::url($receitasalgada->image->url)}}@endif" alt="quiches salgadas">
                                </a>
                                <br/>
                                      <a class= "text-decoration-none " href = "{{route('receitas.show', $receitasalgada)}}">  <h4 class="text-dark">{{$receitasalgada->name}}</h4></a>
                                <br/>
                                <a href = "{{route('receitas.salgada')}}">
                                    <button class="bt-viewmore" > ver todas as quiches salgadas</button>
                                </a>
                                @endforeach 
                    </div>

                    <div class="column">

                        
                        <h2>Doces</h2>

                                @foreach ( $receitasdoce as $receitadoce )

                                <a href = "{{route('receitas.show', $receitadoce)}}">
                                        <img src="@if($receitadoce->image){{Storage::url($receitadoce->image->url)}}@endif" alt="quiches doces">
                                </a>
                                <br/>
                                      <a class="text-decoration-none" href = "{{route('receitas.show', $receitadoce)}}">  <h4 class="text-dark">{{$receitadoce->name}}</h4></a>
                                <br/>
                                <a href = "{{route('receitas.doce')}}">
                                    <button class="bt-viewmore" > ver todas as quiches doces</button>
                                </a>
                                @endforeach    
                            
                    </div>
                    
                </div>

<br><br><br><br><br>

            <div class="carousel mt-5">
                <div class="carousel__contenedor">
                    <button aria-label="Anterior" class="carousel__anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>
            
                     
            
                    <div class="carousel__lista">
                        <div class="carousel__elemento px-md-2">
                            <img src="@if($receitadoce->image){{Storage::url($receitadoce->image->url)}}@endif" alt="Rock and Roll Hall of Fame">
                            <p>Rock and Roll Hall of Fame</p>
                        </div>
                        <div class="carousel__elemento px-md-2">
                            <img src="@if($receitadoce->image){{Storage::url($receitadoce->image->url)}}@endif" alt="Constitution Square - Tower I">
                            <p>Constitution Square - Tower I</p>
                        </div>
                        <div class="carousel__elemento px-md-2">
                            <img src="@if($receitadoce->image){{Storage::url($receitadoce->image->url)}}@endif" alt="Empire State Building">
                            <p>Empire State Building</p>
                        </div>
                        <div class="carousel__elemento px-md-2">
                            <img src="@if($receitadoce->image){{Storage::url($receitadoce->image->url)}}@endif" alt="Rock and Roll Hall of Fame">
                            <p>Rock and Roll Hall of Fame</p>
                        </div>
                        <div class="carousel__elemento px-md-2">
                            <img src="@if($receitadoce->image){{Storage::url($receitadoce->image->url)}}@endif" alt="Constitution Square - Tower I">
                            <p>Constitution Square - Tower I</p>
                        </div>
                        <div class="carousel__elemento px-md-2">
                            <img src="@if($receitadoce->image){{Storage::url($receitadoce->image->url)}}@endif" alt="Empire State Building">
                            <p>Empire State Building</p>
                        </div>
                        
                    </div>
                    
                        <button aria-label="Siguiente" class="carousel__siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                </div>
            
                <div role="tablist" class="carousel__indicadores"></div>
            </div>
        </div>
        

{{--         <form action="{{ route('search') }}" method="GET">
            <input type="text" name="search" required/>
            <button type="submit">Search</button>
        </form>
 --}}
        
    </article>
<!-- contenido principal -->
</main>
      

























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
    </div>   
</body>






</x-app-layout>