<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';

  const enrollments = [
    {
     id: 1,
     Id_Estudiante: 1,
     Id_Curso: 1,
     Periodo_Academico:'2024-1',
     Estado: 'Activo',
    },
        {
        id: 2,
        Id_Estudiante: 2,
        Id_Curso: 2,
        Periodo_Academico:'2024-1',
        Estado: 'Activo',
        },
        {
        id: 3,
        Id_Estudiante: 3,
        Id_Curso: 3,
        Periodo_Academico:'2024-1',
        Estado: 'Inactivo',
        },
            {
            id: 4,
            Id_Estudiante: 4,
            Id_Curso: 4,
            Periodo_Academico:'2024-1',
            Estado: 'Activo',
            },
            {
            id: 5,
            Id_Estudiante: 5,
            Id_Curso: 5,
            Periodo_Academico:'2024-1',
            Estado: 'Activo',
            },
            {
            id: 6,
            Id_Estudiante: 6,
            Id_Curso: 6,
            Periodo_Academico:'2024-1',
            Estado: 'Activo',
             },
             {
             id: 7,
             Id_Estudiante: 7,
             Id_Curso: 7,
             Periodo_Academico:'2024-1',
             Estado: 'Activo',
              },
              {
              id: 8,
              Id_Estudiante: 8,
              Id_Curso: 8,
              Periodo_Academico:'2024-1',
              Estado: 'Activo',
               },
               {
               id: 9,
               Id_Estudiante: 9,
               Id_Curso: 9,
               Periodo_Academico:'2024-1',
               Estado: 'Activo',
                },
                {
                id: 10,
                Id_Estudiante: 10,
                Id_Curso: 10,
                Periodo_Academico:'2024-1',
                Estado: 'Activo',
                 },
  ]
</script>
<template>
  <authenticated-layout>
    <v-container>
       <Link :href="route('enrollments.create')">
    <v-btn color="primary">Crear Matricula</v-btn>
       </Link>
  </v-container>
  <v-data-table :items="enrollments" :headers="[
    { title: 'ID', key: 'id' },
    { title: 'Estudiante_ID', key: 'Id_Estudiante' },
    { title: 'Curso_ID', key: 'Id_Curso' },
    { title: 'Periodo Academico', key: 'Periodo_Academico' },
    { title: 'Estado', key: 'Estado' }] ">
    <template v-slot:header.id="{ column }">
      {{ column.title.toUpperCase() }}
    </template>
  </v-data-table>
</authenticated-layout>
</template>