 {{--{{Auth::user()}}--}}
    <a  class ="btn btn-primary " href="{{route("recetas.create")}}">
     <svg class="icono"  xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
     <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
     </svg>
    
    Crear Receta</a>
    <a  class ="btn btn-dark " href="{{route("perfiles.edit",['perfil'=>Auth::user()->id])}}">
      <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
      </svg>
    
    Editar Perfil </a> 
    <a  class ="btn btn-warning " href="{{route("perfiles.show",['perfil'=>Auth::user()->id])}}">
     <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
     <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
     </svg>
    Ver Perfil </a> 