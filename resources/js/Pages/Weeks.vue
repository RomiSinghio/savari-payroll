<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import WeekTable from '@/Components/WeekTable.vue';
</script>

<template>
    <AppLayout title="Weeks">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Weeks
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <WeekTable />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
