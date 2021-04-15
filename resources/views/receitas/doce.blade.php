<x-app-layout>
<div class="wrapper">
    <div class="row"> 


  

    @foreach ($doces as $doce)


        <div class=" col-md-4 col-sm-4 col-lg-4 ">         
    <div class="item">  <a href="{{route('receitas.show', $doce)}}">
        <div class="content-overlay rounded left: 0; top: 0;"></div>
    
    <img class="content-image rounded mb-3 shadow" src="@if($doce->image){{Storage::url($doce->image->url)}} @endif" alt="">
       
                <div class="content-details fadeIn-bottom">
                    <h3 class= "content-title">{{$doce->name}}</h3>
                    
                </div>
            </a> </div>
         
        </div> 
               
        
@endforeach
</div> 



</div> 
<div class="pagination">
{{$doces->links()}}
</div>
</x-app-layout>

