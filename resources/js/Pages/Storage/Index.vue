<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head , Link} from '@inertiajs/vue3';

defineProps({storages: Array});


</script>

<template>
    <Head title="Lagerverwaltung"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Lagerverwaltung</h2>
        </template>
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-start m-2 p-2">
                    <Link href="/lager/neu" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">Neues Lager erstellen</Link>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="w-full table-auto border-collapse">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">ID</th>
                                <th class="px-4 py-2 text-left">Name</th>
                                <th class="px-4 py-2 text-left">Beschreibung</th>
                            </tr>
                            </thead>
                            <tbody class="[&>*:nth-child(odd)]:bg-gray-100">
                            <tr v-for="storage in storages" :key="storage.id">
                                <Link :href="`/lager/${storage.id}`" class="border px-4 py-2 cursor-pointer hover:bg-gray-200" as="td">{{ storage.id }}</Link>
                                <Link :href="`/lager/${storage.id}`" class="border px-4 py-2 cursor-pointer hover:bg-gray-200" as="td">{{ storage.name }}</Link>
                                <Link :href="`/lager/${storage.id}`" class="border px-4 py-2 cursor-pointer hover:bg-gray-200" as="td">{{ storage.description }}</Link>

                                <td class="border px-4 py-2">
                                    <Link :href="`/lager/${storage.id}/edit`" class="px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white rounded">Edit</Link>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </AuthenticatedLayout>
</template>

<style>

</style>
