<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';

const props = defineProps({errors: Object, storages: Array, selected_storage: String});

const form = useForm({
    title: null,
    description: null,
    amount: 1,
    price: 0,
    storage_id: props.selected_storage
});



</script>

<template>
    <Head title="Neues Produkt erstellen"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Produktverwaltung</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="relative flex text-gray-800 antialiased flex-col justify-center overflow-hidden py-2 sm:py-4">
                    <div class="relative py-1 w-96 mx-auto text-center">
                        <span class="text-2xl font-light ">Neues Produkt erstellen</span>
                        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                            <div class="h-2 bg-indigo-500 rounded-t-md"></div>
                            <form class="px-8 py-6" @submit.prevent="form.post('/produkte')">
                                <label class="block font-semibold"> Titel </label>
                                <input type="text" v-model="form.title"
                                       class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                                <label class="block mt-3 font-semibold"> Lager </label>
                                <select v-model="form.storage_id" class="border w-full px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                                    <option :value="storage.id" v-for="storage in storages" :key="storage.id">{{ storage.name }}</option>
                                </select>
                                <label class="block mt-3 font-semibold"> Beschreibung </label>
                                <input type="text" v-model="form.description"
                                       class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                                <label class="block mt-3 font-semibold"> Menge </label>
                                <input type="number" v-model="form.amount" min="0"
                                       class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                                <label class="block mt-3 font-semibold"> Preis (???) </label>
                                <input type="number" v-model="form.price" min="0"
                                       class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">


                                <p v-if="errors" class="p-2 text-red-600">
                                    {{errors.title}}{{errors.price}}{{errors.amount}}
                                </p>

                                <div class="flex justify-between  p-2 mt-6">
                                    <Link href="/lager"
                                          class="text-center w-32 m1 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">
                                        Abbrechen
                                    </Link>
                                    <button type="submit"
                                            class="text-center w-32 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded">
                                        Erstellen
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
