<script setup>
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

// Load Flowbite and datepicker scripts
const loadScripts = () => {
    const flowbiteScript = document.createElement('script');
    flowbiteScript.src = 'https://flowbite.com/docs/flowbite.min.js';
    document.head.appendChild(flowbiteScript);

    const datepickerScript = document.createElement('script');
    datepickerScript.src = 'https://flowbite.com/docs/datepicker.min.js';
    document.head.appendChild(datepickerScript);
};

// Trigger dropdown toggle
const triggerDropdown = () => {
    const dropdownEl = document.querySelector('[data-dropdown-toggle]');
    if (dropdownEl) {
        dropdownEl.click();
    }
};

// Trigger modal toggle
const triggerModal = () => {
    const modalEl = document.querySelector('[data-modal-toggle]');
    if (modalEl) {
        modalEl.click();
    }
};

// Focus on date range picker
const focusDateRangePicker = () => {
    const dateRangePickerEl = document.querySelector('[data-rangepicker] input');
    if (dateRangePickerEl) {
        dateRangePickerEl.focus();
    }
};

// Trigger drawer show
const triggerDrawer = () => {
    const drawerEl = document.querySelector('[data-drawer-show]');
    if (drawerEl) {
        drawerEl.click();
    }
};

onMounted(() => {
    loadScripts();
    preventDefaultForAnchors();
    triggerDropdown();
    triggerModal();
    focusDateRangePicker();
    triggerDrawer();
});
</script>

<template>
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <ApplicationLogo class="w-9 h-9 fill-current text-gray-500" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">EVA</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Abrir menú principal</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100">Inicio</a>
                    </li>
                    <li>
                        <a href="/dashboard" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100">Panel de
                            control</a>
                    </li>
                    <li>
                        <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100">Entrar</a>
                    </li>
                    <li>
                        <a href="/register"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
