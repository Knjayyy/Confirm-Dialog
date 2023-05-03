<template layout="default">
    <div class="container-md mx-auto p-8 w-3/4 -mt-48">
      <div class="flex justify-between items-center mb-3">
        <h1 class="text-3xl font-semibold text-white hover:text-blue-600">Companies</h1>
        <Link href="/companies/create" class="text-black rounded-lg border-2 border-solid hover:border-blue-500 hover:bg-gray-50 hover:text-gray-700 px-3 py-1 bg-gray-50">+ Add Company</Link>
      </div>
      <table class="w-full text-sm text-left text-gray-400">
        <thead class="text-sm text-gray-900 uppercase bg-cyan-700">
          <tr>
            <th scope="col" class="px-6 py-3"> ID </th>
            <th scope="col" class="px-6 py-3"> Company name</th>
            <th scope="col" class="px-6 py-3"> Type </th>
            <th scope="col" class="px-6 py-3"> Address </th>
            <th scope="col" class="px-6 py-3"> Networth </th>
            <th scope="col" class="px-6 py-3 text-center"> Actions </th>
          </tr>
        </thead>
        <tbody v-for="company of companies" :key="company.id">
          <tr class="bg-white border-b">
            <td class="px-6 py-4"> {{ company.id }} </td>
            <td class="px-6 py-4"> {{ company.name }} </td>
            <td class="px-6 py-4"> {{ company.type }} </td>
            <td class="px-6 py-4"> {{ company.address }} </td>
            <td class="px-6 py-4"> {{ company.net_worth }} </td>
            <td class="px-6 py-4 text-center">
              <Link :href="'/companies/edit/' + company.id" class="hover:text-blue-400"><i class="fa-solid fa-pen"></i></Link>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
</template>

  <script setup>
  import { Link } from '@inertiajs/inertia-vue3'

  defineProps({
    'companies': Array
  })

  </script>
