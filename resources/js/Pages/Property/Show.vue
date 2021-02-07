<template>
    <app-layout>
        <!--        <template #header>-->
        <!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">-->
        <!--                View Property-->
        <!--            </h2>-->
        <!--        </template>-->

        <div class="w-screen h-screen bg-cover bg-no-repeat bg-center"
             :style="{background: 'url(' + $page['props']['primary_photo']+')'}"></div>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Show",
    components: {AppLayout}
}
</script>

<style scoped>

</style>
