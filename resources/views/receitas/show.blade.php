<x-app-layout>
    <div>
    
        

            <div class="card-header center">
                <h1>{{$receita->name}}</h1>
            </div>
        
            

            
                
            <div class="videoreceita embed-responsive embed-responsive-16by9 w-75">
                <iframe width="560" height="315" class="embed-responsive-item" 
                src={!!$receita->urlvideo!!} allowfullscreen></iframe> 
            </div>    
            <div class="boxeshow">
                <div class="row ">
                    <div class= "col-lg-2 col-md-2 col-sm-2 center"> 
                        
                        <br/><br/><br/> 
                        <i class="fas fa-user-clock"></i>
                        {!!$receita->obs!!}
                        <br/><br/>
                        <h4> Gostou? </h4>
                        <h6>Compartilhe esta receita!</h6>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_1djk"></div>
                    </div>

                
                    <div class="colunashow1 col-lg-4 col-md-4 col-sm-5">
                     <br/>
                     <h1>Ingredientes:</h1>   
                        {!!$receita->extra!!}
                    </div>
                    
                    <div class="col-lg-1 col-md-0 col-sm-0">
                    </div>

                    <div class="colunashow2 col-lg-4 col-md-6 col-sm-5">
                        <br/>
                        <h1>Modo de preparo:</h1>
                        {!!$receita->body!!}
                    </div>
            </div>
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

</x-app-layout>