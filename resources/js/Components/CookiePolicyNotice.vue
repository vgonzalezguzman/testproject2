<template>
    <div v-if="!accepted" class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4">
        <p class="text-center">
            Utilizamos cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web. Al continuar, aceptas nuestra
            <a href="#" @click.prevent="showPolicy">politica de cookies</a>.
            <button @click="accept"
                class="ml-4 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-500">
                Accept
            </button>
        </p>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const accepted = ref(localStorage.getItem('cookiesAccepted') === 'true');

const accept = () => {
    accepted.value = true;
    localStorage.setItem('cookiesAccepted', true);
};

onMounted(() => {
    if (!accepted.value) {
        showPolicy();
    }
});
</script>