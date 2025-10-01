<script setup lang="js">
import { Head, InfiniteScroll } from '@inertiajs/vue3';

defineProps({
    locations: Object
})
</script>

<template>
    <Head title="Welcome"></Head>
    <div>
        <InfiniteScroll data="locations" preserve-url>
            <div class="mb-96" v-for="location in locations.data" :key="location.id">
                {{ location.name }}
            </div>
        </InfiniteScroll>
    </div>
</template>
