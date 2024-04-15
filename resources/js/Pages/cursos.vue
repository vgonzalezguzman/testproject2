<template>
    <div class="w-full">
        <Nav></Nav>
        <div class="relative min-h-screen w-98 flex flex-col items-center justify-center">
            <div class="overflow-x-auto">
                <table id="cursosTable" class="relative w-full max-w-2xl px-6 lg:max-w-7xl h-100">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">Nom</th>
                            <th class="px-4 py-2">Etapa</th>
                            <th class="px-4 py-2">Descripcio</th>
                            <th class="px-4 py-2">Actiu</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
import Nav from '../Components/Nav.vue';
import { ref, onMounted } from 'vue';
import axios from 'axios';
import dt from 'datatables.net-vue3';

const cursos = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get('/api/cursos');
        cursos.value = response.data;

        // Initialize DataTable
        const cursosTable = $('#cursosTable').DataTable({
            data: cursos.value,
            columns: [
                { data: 'Nom' },
                { data: 'Etapa' },
                { data: 'Descripcio' },
                { data: 'Actiu', render: (data) => data ? 'Yes' : 'No' }
            ],
            // Add any additional configurations here
        });
    } catch (error) {
        console.error('Error fetching cursos:', error);
    }
});
</script>

<style scoped>
/* Add any custom styles here */
</style>