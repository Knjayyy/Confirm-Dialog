<template layout="default">
    <div class="flex justify-center items-center">
      <ConfirmDialog v-if="showConfirm"
                    title="Practice"
                    :message="confirmMessage"
                    @confirm="okay()"
                    ></ConfirmDialog>
      <div class="text-center">
        <div class="mb-4">
          <textarea class="border rounded px-2 py-1 w-64 h-32" placeholder="Enter text here" v-model="confirmMessage"></textarea>
        </div>
        <button class="bg-gradient-to-r from-purple-500 to-pink-500 px-4 py-2 rounded-md text-white text-sm shadow-md hover:shadow-lg" @click="show(dialog)">ENTER</button>
      </div>
    </div>
  </template>

  <script setup>
  import { ref } from 'vue';
  import ConfirmDialog from '@/views/components/confirm-dialog.vue';

  const showConfirm = ref(false);
  const confirmMessage = ref('');

  function show(dialog) {
    showConfirm.value = true;
  }

  function okay() {
    showConfirm.value = false;
    confirmMessage.value = '';
  }

  </script>

  <style>
  /* You can add custom styles here if needed */
  </style>
