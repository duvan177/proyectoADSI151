

@extends ('principal')

@section('contenido')

<template v-if="menu == 0">

        <example-component></example-component>
</template>


        <template v-if="menu == 1">
                <h1>hola componente 1</h1>
              
        </template>

        <template v-if="menu == 2">

               <animacion></animacion>
        </template>
        <template v-if="menu == 3">
                <h2>menu del contenido 3 </h2>
        </template>
        <template v-if="menu == 4">
                <h2>menu del contenido 4 </h2>
        </template>
        <template v-if="menu == 5">
                <h1>contenido 5</h1>
        </template>
        <template v-if="menu == 6">
                <h2>menu del contenido 6 </h2>
        </template>
        <template v-if="menu == 7">
                <h2>menu del contenido 7 </h2>
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