<template>
    <nav class="bg-gradient-to-b from-cyan-400 p-3 pb-64">
        <div class="">  Current user: {{ user.username }}</div>
        <div class="container flex items-center justify-center mx-auto">
            <ul class="hidden md:flex space-x-4">
                <Link v-if="user" class="text-gray-50 hover:text-blue-600 font-medium" href="/random">Practice</Link>
                <Link v-if="user" class="text-gray-50 hover:text-blue-600 font-medium" href="/members">Members</Link>
                <Link v-if="user" class="text-gray-50 hover:text-blue-600 font-medium" href="/companies">Companies</Link>
                <Link v-if="user" class="text-gray-50 hover:text-blue-600 font-medium" href="/logout">Logout</Link>
            </ul>
        </div>
    </nav>
</template>

<script setup>
import {onMounted} from 'vue'
import { Link } from '@inertiajs/inertia-vue3'
import { defineProps } from 'vue'
defineProps({
    user: ''
})

onMounted(() => {
    const menu = document.getElementById('navbar-solid-bg')
    const btn = document.getElementById('toggle-btn')

    btn.addEventListener('click', () => {
        if(menu.style.display == 'none') {
            menu.style.display = 'block'
        }else{
            menu.style.display = 'none'
        }
    })
})
</script>

