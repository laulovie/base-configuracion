<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';

  const docentes = [
    {
     id: 1,
     employee_id: 'D001',
     name: 'Abraham Sikaffy',
     specialty: 'Ingeniero en Ciencias de la Computación',
     hire_date: '2020-01-15',
     status: 'Activo',
    },
    {
        id: 2,
        employee_id: 'D002',
        name: 'Beatriz Martínez',
        specialty: 'Ingeniera en Sistemas de Información',
        hire_date: '2019-08-01',
        status: 'Activo',
    },
    {
        id: 3,
        employee_id: 'D003',
        name: 'Carlos Gómez',
        specialty: 'Ingeniero en Software',
        hire_date: '2021-03-10',
        status: 'Inactivo',
    },
    {
        id: 4,
        employee_id: 'D004',
        name: 'Diana Rodríguez',
        specialty: 'Ingeniera en Informática',
        hire_date: '2018-11-20',
        status: 'Activo',
    },
    {
        id: 5,
        employee_id: 'D005',
        name: 'Eduardo Fernández',
        specialty: 'Ingeniero en Computación',
        hire_date: '2022-05-05',
        status: 'Activo',
     },
        {
            id: 6,
            employee_id: 'D006',
            name: 'Fernanda López',
            specialty: 'Ingeniera en Software',
            hire_date: '2019-02-28',
            status: 'Inactivo',
        },
        {
            id: 7,
            employee_id: 'D007',
            name: 'Gabriel Sánchez',
            specialty: 'Ingeniero en Sistemas de Información',
            hire_date: '2020-09-15',
            status: 'Activo',
        },
        {
            id: 8,
            employee_id: 'D008',
            name: 'Helena Torres',
            specialty: 'Ingeniera en Informática',
            hire_date: '2021-12-01',
            status: 'Activo',
        },
        {
            id: 9,
            employee_id: 'D009',
            name: 'Ignacio Ramírez',
            specialty: 'Ingeniero en Ciencias de la Computación',
            hire_date: '2018-06-10',
            status: 'Inactivo',
        },
        {
            id: 10,
            employee_id: 'D010',
            name: 'Julia Morales',
            specialty: 'Ingeniera en Computación',
            hire_date: '2022-01-20',
            status: 'Activo',
            }
  ]
</script>
<template>
    <authenticated-layout>
    <v-container>
          <Link :href="route('teacher.create')">
    <v-btn color="primary">Crear Docente</v-btn>
         </Link>
  </v-container>
  <v-data-table :items="docentes" :headers="[
    { title: 'ID', key: 'id' },
    { title: 'ID Empleado', key: 'employee_id' },
    { title: 'Nombre', key: 'name' },
    { title: 'Especialidad', key: 'specialty' },
    { title: 'Fecha de Contratación', key: 'hire_date' },
    { title: 'Estado', key: 'status' }]">
    <template v-slot:header.id="{ column }">
      {{ column.title.toUpperCase() }}
    </template>
    </v-data-table>
    </authenticated-layout>
</template>