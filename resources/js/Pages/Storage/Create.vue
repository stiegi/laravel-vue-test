<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';


const form = useForm({
    name: null,
    description: null,
})

defineProps({errors: Object});

</script>

<template>
    <Head title="Lagerverwaltung"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Lagerverwaltung</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="relative flex text-gray-800 antialiased flex-col justify-center overflow-hidden py-2 sm:py-4">
                    <div class="relative py-1 w-96 mx-auto text-center">
                        <span class="text-2xl font-light ">Neues Lager erstellen</span>
                        <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                            <div class="h-2 bg-indigo-500 rounded-t-md"></div>
                            <form class="px-8 py-6" @submit.prevent="form.post('/lagerverwaltung')">
                                <label class="block font-semibold"> Name </label>
                                <input type="text" v-model="form.name"
                                       class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                                <label class="block mt-3 font-semibold"> Beschreibung </label>
                                <input type="text" v-model="form.description"
                                       class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                                <p v-if="errors" class="p-2 text-red-600">
                                    {{errors.name}}
                                </p>

                                <div class="flex justify-between  p-2 mt-6">
                                    <Link href="/lagerverwaltung"
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

<style>

</style>
