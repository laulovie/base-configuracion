<template>
  <v-data-table
    v-model:sort-by="sortBy"
    :headers="headers"
    :items="desserts"
  ></v-data-table>

  <pre>{{ sortBy }}</pre>
</template>
<script setup>
  import { ref } from 'vue'
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

  //  const sortBy = ref([{ key: 'calories', order: 'asc' }])

  const headers = [
    {
      title: 'ID',
      align: 'start',
      sortable: false,
      key: 'name',
    },
    { title: 'Student_Code', key: 'calories' },
    { title: 'Name', key: 'fat' },
    { title: 'Email', key: 'carbs' },
    { title: 'Semester', key: 'protein' },
    { title: 'Status', key: 'iron' },
    { title: 'Faculty_ID', key: 'iron' },
  ]
  const desserts = [
    {
      name: 'Frozen Yogurt',
      calories: 200,
      fat: 6,
      carbs: 24,
      protein: 4,
      iron: '1%',
    },
    {
      name: 'Ice cream sandwich',
      calories: 200,
      fat: 9,
      carbs: 37,
      protein: 4.3,
      iron: '1%',
    },
    {
      name: 'Eclair',
      calories: 300,
      fat: 16,
      carbs: 23,
      protein: 6,
      iron: '7%',
    },
    {
      name: 'Cupcake',
      calories: 300,
      fat: 3.7,
      carbs: 67,
      protein: 4.3,
      iron: '8%',
    },
    {
      name: 'Gingerbread',
      calories: 400,
      fat: 16,
      carbs: 49,
      protein: 3.9,
      iron: '16%',
    },
    {
      name: 'Jelly bean',
      calories: 400,
      fat: 0,
      carbs: 94,
      protein: 0,
      iron: '0%',
    },
    {
      name: 'Lollipop',
      calories: 400,
      fat: 0.2,
      carbs: 98,
      protein: 0,
      iron: '2%',
    },
    {
      name: 'Honeycomb',
      calories: 400,
      fat: 3.2,
      carbs: 87,
      protein: 6.5,
      iron: '45%',
    },
    {
      name: 'Donut',
      calories: 500,
      fat: 25,
      carbs: 51,
      protein: 4.9,
      iron: '22%',
    },
    {
      name: 'KitKat',
      calories: 500,
      fat: 26,
      carbs: 65,
      protein: 7,
      iron: '6%',
    },
  ]
</script>