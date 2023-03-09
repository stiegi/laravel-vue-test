<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({storages: Array});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Alle Lager</h2>
        </template>

        <div class="py-12">

                <div class="flex flex-wrap">
                    <Link v-for="storage in storages" :key="storage.id" :href="`/lager/${storage.id}`" class="m-1 block w-48 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ storage.name }}</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">{{ storage.description }}</p>
                    </Link>

                </div>

        </div>
    </AuthenticatedLayout>
</template>
