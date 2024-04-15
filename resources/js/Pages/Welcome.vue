<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Nav from '../Components/Nav.vue';
import Carousel from '../Components/Carousel.vue';
import CookiePolicy from '../Components/CookiePolicyNotice.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

</script>

<template>

    <Head title="Benvingut" />
    <div class="bg-gray-50 w-full">
        <Nav></Nav>
        <!-- <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="rounded-md px-3 py-2 text-black trNansition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
            Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')"
                    class="rounded-md px-3 py-2 text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="rounded-md px-3 py-2 text-black transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                Register
                </Link>
            </template>
</nav> -->
        <div class="relative min-h-screen w-98 flex flex-col items-center justify-center">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl h-100">
                <Carousel></Carousel>
            </div>
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl h-100">
                <div>
                    <p>¡Bienvenido!</p>
                    <p>
                        ¿Estás cansado/a de estar todo el día en clase y no aprender nada? Te aburres delante de la
                        pantalla y
                        sólo haces
                        ¿que mirar “Tik-Tok” o “Instagram”? Bien, quizás necesitas una motivación extra, y qué mejor si
                        tienes uno
                        EVA (Entorno Virtual de Aprendizaje) que sea "guay" ya tu gusto!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <CookiePolicy></CookiePolicy>
</template>
