@extends('layouts.app')
@section('content')

    
        <article class="contenido-receta">
        <h1 class="text-center mb-4"> {{$receta->nombre}} </h1>
        <div class="imagen-receta">
            <img src="/recetas/storage/app/public/{{$receta->imagen}}" class="w-50"> 
        
        </div>
        <div class="receta-data">
            <p>
                <span class="font-weight-bold text-primary">Categoria: </span>    
                {{$receta->categoriaReceta->nombre}}
            </p>

             <p>
                <span class="font-weight-bold text-primary">Autor: </span>    
                {{$receta->autorReceta->name}}
            </p>

            <p>
                <span class="font-weight-bold text-primary">Fecha: </span>    
                {{date('d-m-Y', strtotime($receta->created_at))}} 
            </p>
        
        </div class="ingredientes">
            <h2 class="my-3 text-primary">Ingredientes</h2>
            {!!$receta->ingredientes!!}

        <div>

         </div class="ingredientes">
            <h2 class="my-3 text-primary">Preparacion</h2>
            {!!$receta->preparacion!!}

           <div>
               
        </div>
        
          <diV class="justify-content-center row text-center">
               <like-button receta-id="{{$receta->id}}" like="{{$like}}"  likes="{{$likes}}" ></like-button>
          </div> 
        {{-- {{$likes}} --}}
        </article>

@endsection