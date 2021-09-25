@extends('layouts.app')

  @section('botones')
    @include('ui.navegacion')
  @endsection  
  @section('nav')
  @endsection
   
  @section('content')
  <h2 class="text-center mb-3">Administra tus Recetas</h2>

    
  <div class="cold-md-10 mx-auto bg-white p-3">
    <table class="table">
    
          <thead class="bg-primary text-light">

            <tr>
                <th scole="col"><i class="fas fa-file-signature"></i>Nombre</td>
                <th scole="col"><i class="fas fa-certificate"></i>Categoria</td>
                <th scole="col"><i class="fas fa-exclamation-circle"></i>Acciones</td>
            
            </tr>
                    
          </thead>

          <tbody>

           @foreach($userRecetas as $userReceta)

               <tr>
                  <td>{{$userReceta->nombre}}</td>
                  <td>{{$userReceta->categoriaReceta->nombre}}</td>
                  <td>
                    <a href="{{route('recetas.show',['receta'=>$userReceta->id])}}" class="btn btn-success d-block"> <i class="far fa-eye"></i> Ver</a>
                    <a href="{{route('recetas.edit',['receta'=>$userReceta->id])}}" class="btn btn-dark  d-block mt-1"> <i class="fas fa-edit"></i>Editar </a>                    
                    <eliminar-receta receta-id={{$userReceta->id}}><i class="far fa-trash-alt"></i></eliminar-receta>
                    
                    
                    
                  </td>
              
              </tr>
             
           @endforeach
             
          
          </tbody>
    
    </table>
    <div class="cold-12 mt-4 justify-content-center d-flex">
    
      {{$userRecetas->links()}}
    </div>
   {{--}} {{Auth::user()->ilike}} --}}

    {{--{{$ilikes}} --}}
    @if(count($iLikes)>0)
          
      <h2 class="text-center my-5">Recetas que te gustan</h2>
      <div class="col-md-10 mx-auto bg-white p-3">
            <ul class="list-group">
                @foreach($iLikes as $recetaLike)
                  <li class="list-group-item d-flex justify-center-between align-items-center">
                    <p>{{$recetaLike->nombre}}</p>
                    <a  class ="btn btn-dark " href="{{route('recetas.show',['receta'=>$recetaLike->id])}}">Ver</a>
                  </li>
                @endforeach
            </ul>
      </div>

    @else
      <p class="text-center my-5 font-weight-bold"> Aun no tienes Recetas que te gustan</p>
    @endif
 </div>
 

@endsection  