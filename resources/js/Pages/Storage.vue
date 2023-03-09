<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {onMounted, ref} from "vue";
defineProps({ storages: Array });


</script>

<template>
    <Head title="Lagerverwaltung" />

    <AuthenticatedLayout>
        <template #header>
            <h2  class="font-semibold text-xl text-gray-800 leading-tight">Lagerverwaltung</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">        <div class="bg-white rounded-lg shadow-lg">
                        <table class="w-full table-auto border-collapse">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">#</th>
                                <th class="px-4 py-2 text-left">First Name</th>
                                <th class="px-4 py-2 text-left">Last Name</th>
                                <th class="px-4 py-2 text-left">Age</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">John</td>
                                <td class="border px-4 py-2">Doe</td>
                                <td class="border px-4 py-2">30</td>
                            </tr>
                            <tr class="bg-gray-100">
                                <td class="border px-4 py-2">2</td>
                                <td class="border px-4 py-2">Jane</td>
                                <td class="border px-4 py-2">Doe</td>
                                <td class="border px-4 py-2">30</td>
                            </tr>
                            </tbody>
                        </table>
                    </div></div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
