<div class="form-group">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Hmm, quiche nova? Coloque o nome aqui!']) !!}

    @error('name')
    
    <small class="text-danger">{{$message}}</small>
    
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Aqui vai aparecer o final da URL','readonly']) !!}

    @error('slug')
    
    <small class="text-danger">{{$message}}</small>
    
    @enderror

</div>



{{-- @livewire('admin.receitas-create') --}} 

<div class="form-group">

      
        @foreach ($ingredientes as $ingrediente)                    
        
            <label class="mr-2">
                {!! Form::checkbox('ingredientes[]', $ingrediente->id,null) !!}
                {{$ingrediente->name}}
            </label>

        @endforeach
    </div>

       
          
<div class="form-group">
   <p class="font-weight-bold">Estado</p>
    <label class = "mr-3">
        {!! Form::radio('status', 1, true) !!}
        Rascunho
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    
    <hr>

    @error('status')
    
    <small class="text-danger">{{$message}}</small>
    
    @enderror

</div>
    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset($receita->image)
                    <img id="picture"src="{{Storage::url($receita->image->url)}}">
                @else
                    <img id="picture"src="https://cdn.pixabay.com/photo/2016/03/09/15/24/cake-1246638_960_720.jpg" alt="quiche">
                @endisset

            </div>
        </div>
    

    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagem que aparecerá na receita') !!}
            {!! Form::file('file', ['class'=> 'form-control-file', 'accept' => 'image/*']) !!}
        
        
        @error('file')
            <span class="text-danger">{{$message}}</span>
        @enderror
        
        </div>

        <p>Coloque a imagem aqui para conseguir agregar a sua quiche, é importante a imagem não ter mais de
            1080x920 (não faço nem ideia, só coloquei qualquer merda).<br/><br/>
            Tem mais alguma que eu não sei mais
            ficaram ótimas as etiquetas ali em cima. Adoraria ter que escolher assim pelas etiquetas, MENTIRA. 
        </p>
    </div>
</div>

<div class="form-group">
    <p class= "font-weight-bold">Tipo:</p>

    <label class = "mr-4">
        {!! Form::radio('type', 'salgada', true) !!}
        Salgada
    </label>
    <label>
        {!! Form::radio('type', 'doce') !!}
        Doce
    </label>
</div>

<div class="form-group">
    {!! Form::label('urlvideo', 'Link YouTube:') !!}
    <p>Para encontrar o link que eu necessito você precisa ir no video do YouTube, 
        clicar em <b>compartilhar</b> e logo depois em <b>inserir</b>, tem um desenho assim "< >"<br/> 
        ai dentro é só copiar o link que está depois do <i>src=</i> -> <b>Sem as aspas</b> : )</p> 
    {!! Form::text('urlvideo', null, ['class' => 'form-control', 'placeholder' => 'Cole aqui o video do youtube referente a essa receita']) !!}

    @error('urlvideo')
    
    <small class="text-danger">{{$message}}</small>
    
    @enderror

</div>

<div class="form-group">
    {!! Form::label('extra', 'Ingredientes:') !!}
    <p>Aqui o ideal é colocar os ingredientes escolhendo a opção de lista por números
        assim vai ficar mais ordenado e vai aparecer melhor no layout final.</p> 
    {!! Form::textarea('extra', null, ['class' => 'form-control']) !!}

    @error('extra')
    
    <small class="text-danger">{{$message}}</small>
    
    @enderror
<br>
<div class="form-group">
    {!! Form::label('body', 'Receita completa:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
    
    <small class="text-danger">{{$message}}</small>
    
    @enderror

</div>

<div class="form-group">
    {!! Form::label('obs', 'Obs:') !!}
    <p>Uma observação completa é o ideal pro usuário, experimente colocar
        tempo de preparo, quantas porções rendem ou outra coisa que você ache<br/>
        interessante adicionar para o usuário ter uma boa experiência. É <b>obrigatório</b> escolher a aspas no editor</p>
    {!! Form::textarea('obs', null, ['class' => 'form-control']) !!}

    @error('obs')
    
    <small class="text-danger">{{$message}}</small>
    
    @enderror

</div>
