<template layout>
    <div class="flex items-center justify-center h-screen">
      <p class="text-sm font-light text-gray-500">
        <button
          class="font-medium text-primary-600 hover:underline text-center hover:text-blue-600"
          @click="$inertia.visit('/login')"
        >
          Kien J Montanez BSIT-3 SIA Midterm
        </button>
      </p>
    </div>
  </template>

  <script setup>
  import {useForm, Link} from '@inertiajs/inertia-vue3'
  let form = useForm({
      'username': '',
      'password': ''
  })
  let submit = () => {
      form.post('/login')
  }
  </script>
