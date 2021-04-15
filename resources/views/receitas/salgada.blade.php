<x-app-layout>
<div class="wrapper ">
    <div class="row"> 


  

    @foreach ($salgadas as $salgada)


        <div class="col-md-4 col-sm-4 col-lg-4 ">         
    <div class="item">  <a href="{{route('receitas.show', $salgada)}}">
        <div class="content-overlay rounded left: 0; top: 0;"></div>
    
    <img class="content-image rounded mb-3 shadow" src="@if($salgada->image){{Storage::url($salgada->image->url)}} @endif" alt="">
       
                <div class="content-details fadeIn-bottom">
                    <h3 class= "content-title">{{$salgada->name}}</h3>
                    
                </div>
            </a> </div>
         
        </div> 
               
        
@endforeach
</div> 



</div> 
<div class="pagination footer">
{{$salgadas->links()}}
</div>
</x-app-layout>