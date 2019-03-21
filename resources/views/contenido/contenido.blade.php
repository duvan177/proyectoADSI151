

@extends ('principal')

@section('contenido')

<template v-if="menu == 0">

<body>



<form action="" method="POST" role="form">
<h1> Editar Perfil </h1>

<div class="form-group">
<label for="">nombre</label>
<input type="text" class="form-control" id="" placeholder="input">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>

    
</body>
        
</template>


        <template v-if="menu == 1">
<div>


<form  action="/componentes" method="POST">
  {{ csrf_field() }}
  
        <div class="form-group">
                <label for="exampleInputEmail1">Nombre del componente</label>
                <input type="text" class="form-control" name="Nombre">
        </div>
              <div class="form-group">
                <label>Tipo Componente</label>
                <input type="text" class="form-control" name="TipoComp">
              </div>
              <div class="form-group">
                <label>Estado</label>
                  <input type="text" class="form-control" name="Estado">
          
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<!--GESTION -->


              
        </template>

        <template v-if="menu == 2">

        <example-component></example-component>
              
        </template>
        <template v-if="menu == 3">
        
                <monitoreo></monitoreo>
        </template>
        <template v-if="menu == 4">
            <Example></Example>
        </template>
        <template v-if="menu == 5">
                <h1>contenido 5</h1>
        </template>
        <template v-if="menu == 6">
                <h2>menu del contenido 6 </h2>
        </template>
        <template v-if="menu == 7">
                <perfil></perfil>
        </template>
        <template v-if="menu == 8">
                <h2>menu del contenido 8 </h2>
        </template>

        <template v-if="menu == 9">
                <h2>menu del contenido 9 </h2>
        </template>
        <template v-if="menu ==10">
                <h2>menu del contenido 10 </h2>
        </template>
    

        @endsection