<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';

  const cursos = [
    {
     id: 1,
     Nombre: 'Programacion Web',
     Codigo: 'M101',
     Descripcion: 'Curso de programacion web',
     Creditos: 5,
     Id_Docente: 1,
     Periodo_Academico:'2024-1',
     Capacidad: 30,
     Estado: 'Activo',
    },
    {
     id: 2,
     Nombre: 'Base de Datos',
     Codigo: 'M102',
     Descripcion: 'Curso de base de datos',
     Creditos: 4,
     Id_Docente: 2,
     Periodo_Academico:'2024-1',
     Capacidad: 25,
     Estado: 'Activo',
    },
     {
     id: 3,
     Nombre: 'Estructura de Datos',
     Codigo: 'M103',
     Descripcion: 'Curso de estructura de datos',
     Creditos: 4,
     Id_Docente: 3,
     Periodo_Academico:'2024-1',
     Capacidad: 20,
     Estado: 'Inactivo',
    },
        {
        id: 4,
        Nombre: 'Algoritmos',
        Codigo: 'M104',
        Descripcion: 'Curso de algoritmos',
        Creditos: 5,
        Id_Docente: 4,
        Periodo_Academico:'2024-1',
        Capacidad: 30,
        Estado: 'Activo',
        },
        {
        id: 5,
        Nombre: 'Inteligencia Artificial',
        Codigo: 'M105',
        Descripcion: 'Curso de inteligencia artificial',
        Creditos: 5,
        Id_Docente: 5,
        Periodo_Academico:'2024-1',
        Capacidad: 30,
        Estado: 'Activo',
        },
        {
        id: 6,
        Nombre: 'Redes de Computadoras',
        Codigo: 'M106',
        Descripcion: 'Curso de redes de computadoras',
        Creditos: 4,
        Id_Docente: 6,
        Periodo_Academico:'2024-1',
        Capacidad: 25,
        Estado: 'Inactivo',
        },
            {
        id: 7,
        Nombre: 'Seguridad Informática',
        Codigo: 'M107',
        Descripcion: 'Curso de seguridad informática',
        Creditos: 4,
        Id_Docente: 7,
        Periodo_Academico:'2024-1',
        Capacidad: 20,
        Estado: 'Activo',
        },
            {
        id: 8,
        Nombre: 'Desarrollo de Software',
        Codigo: 'M108',
        Descripcion: 'Curso de desarrollo de software',
        Creditos: 5,
        Id_Docente: 8,
        Periodo_Academico:'2024-1',
        Capacidad: 30,
        Estado: 'Activo',
        },
            {
        id: 9,
        Nombre: 'Sistemas Operativos',
        Codigo: 'M109',
        Descripcion: 'Curso de sistemas operativos',
        Creditos: 5,
        Id_Docente: 9,
        Periodo_Academico:'2024-1',
        Capacidad: 30,
        Estado: 'Inactivo',
        },
            {
                id: 10,
                Nombre:'Computacion en la Nube',
                Codigo:'M110',
                Descripcion:'Curso de computacion en la nube',
                Creditos: 4,
                Id_Docente: 10,
                Periodo_Academico:'2024-1',
                Capacidad: 25,
                Estado: 'Activo',
             },
  ]
</script>
<template>
  <authenticated-layout>
    <v-container>
            <Link :href="route('course.create')">
    <v-btn color="primary">Crear Curso</v-btn>
         </Link>
  </v-container>
  <v-data-table :items="cursos" :headers="[
    { title: 'ID', key: 'id' },
    { title: 'Nombre', key: 'Nombre' },
    { title: 'Codigo', key: 'Codigo' },
    { title: 'Descripcion', key: 'Descripcion' },
    { title: 'Creditos', key: 'Creditos' },
    { title: 'Id_Docente', key: 'Id_Docente' },
    { title: 'Periodo_Academico', key: 'Periodo_Academico' },
    { title: 'Capacidad', key: 'Capacidad' },
    { title: 'Estado', key: 'Estado' }]">
    <template v-slot:header.id="{ column }">
      {{ column.title.toUpperCase() }}
    </template>
  </v-data-table>
</authenticated-layout>
</template>