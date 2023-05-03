<template layout="default">
    <div class="bg-gradient-to-b from-cyan-400">
      <div class="flex py-60">
        <div class="w-1/2 bg-gray-50 rounded-lg shadow dark:border mx-auto md:mt-0 sm:max-w-md xl:p-0">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8 relative">
            <a href="/" class="absolute top-0 right-0 mt-4 mr-4 text-gray-600 hover:text-gray-900">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </a>
            <h1 class="text-xl font-bold text-cnpm renter leading-tight tracking-tight text-gray-900">
              Log in
            </h1>
            <div class="text-sm text-red-500 text-center" v-if="form.errors.authentication">{{ form.errors.authentication }}</div>
            <form class="space-y-4 md:space-y-6" @submit.prevent="submit">
              <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                <input v-model="form.username" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                <div class="text-sm text-red-500 italic" v-if="form.errors.username">{{ form.errors.username }}</div>
              </div>
              <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input v-model="form.password" type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                <div class="text-sm text-red-500 italic" v-if="form.errors.password">{{ form.errors.password }}</div>
              </div>
              <button type="submit" class="w-full text-white bg-blue-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Log in</button>
            </form>
          </div>
        </div>
      </div>
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
