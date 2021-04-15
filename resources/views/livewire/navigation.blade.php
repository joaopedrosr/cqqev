<nav class="navbar navbar-expand-lg navbar-light bg-light">              
  
               <a class="navbar-brand" href="/"> 
                <img class="shadow-none" src="{{ asset('img/logo.png') }}" width="80" height="80" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" 
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>


    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active" role="tablist">
                      <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                      
                      <a class="nav-link" href="{{route('receitas.list')}}">Todas as receitas</a>
                    
                    </li>
                   


                    <li class="nav-item">
                      <a class="nav-link" href="#">Sobre nós</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">Contato</a>
                    </li>

                  </ul> 
                </div>
    
                 
                <div class= "nav justify-content-end" >

{{--                   <form class="form-inline my-2 my-lg-0"">
                    <input wire:model="search" class="form-control mr-sm-2" type="search" placeholder="Busque aqui no máximo três ingredientes" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busque</button>
                  </form>  --}}
                  @auth

                  <li>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ auth()-> user()->profile_photo_url }}" class="img-fluid rounded-circle avatar mr-2 "alt="imagem de perfil">
                      
                    Perfil
                    </a>
                    <div class="dropdown-menu dropdown-menu-right justify-content-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{('profile.show')}}"title= "Perfil">Meu perfil</a>
                      
                     @can('admin.home')
                      <a class="dropdown-item" href="{{route('admin.home')}}"title= "Perfil">Área de administrador</a>
                     @endcan


                      <a class="dropdown-item" href="#"title= "Quiches salvas">Minhas quiches favoritas</a>
                      <div class="dropdown-divider"></div>
                     

                      <form method="POST" action="{{ route('logout') }}">
                        @csrf 
                    <a href="{{ route('logout') }}" class="dropdown-item" title= "Logout" onclick="event.preventDefault();
                    this.closest('form').submit();">Logout</a>
                    </form>

                    </div>
                  </li>

                @else
                <div class="btn-group" role="group" aria-label="">
                 
                    <a  href="{{route('login')}}"title= "Faça seu login">
                    <button class="btn btn-light" type="button">Login</button>
                    </a>

                    
                  <a  href="{{route('register')}}"title= "Registre-se">
                    <button class="btn btn-light" type="button">Registre-se</button></a>
                    
                 
                </div>

                @endauth
                

                
        </div>
</nav>

         
        

