<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head , Link} from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue'

defineProps({products: Object});


</script>

<template>
    <Head title="Lagerverwaltung"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Produkte - Seite {{ products.current_page }} von {{ products.last_page }}</h2>
        </template>
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-start m-2 p-2">
                    <Link href="/lager/neu" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">Neues Produkt erstellen</Link>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="w-full table-auto border-collapse">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">ID</th>
                                <th class="px-4 py-2 text-left">Titel</th>
                                <th class="px-4 py-2 text-left hidden lg:block">Beschreibung</th>
                                <th class="px-4 py-2 text-left">Lager</th>
                                <th class="px-4 py-2 text-left">Menge</th>
                                <th class="px-4 py-2 text-left">Preis</th>
                            </tr>
                            </thead>
                            <tbody class="[&>*:nth-child(odd)]:bg-gray-100">
                            <tr v-for="product in products.data" :key="product.id">
                                <td class="border px-4 py-2">{{ product.id }}</td>
                                <td class="border px-4 py-2">{{ product.title }}</td>
                                <td class="border px-4 py-2 hidden lg:block">{{ product.description }}</td>
                                <td class="border px-4 py-2">{{ product.storage.name }}</td>
                                <td class="border px-4 py-2">{{ product.amount }}</td>
                                <td class="border px-4 py-2">{{ product.price }}€</td>
                                <td class="border px-4 py-2">
                                    <Link :href="`/lager/${product.id}/edit`" class="px-2 py-1 bg-indigo-500 hover:bg-indigo-600 text-white rounded">Edit</Link>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <Pagination class="mt-6" :links="products.links" />
                    </div>

                </div>

            </div>

        </div>
    </AuthenticatedLayout>
</template>

<style>

</style>
