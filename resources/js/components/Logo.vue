<template>
    <div>
        <h1 class="font-normal text-3xl gray-dark-font leading-none mb-8">Full Logo</h1>
        <div class="mb-8">
            <picture style="height: 382px" class="block shadow rounded-lg flex align-items-center justify-center mb-6">
               <img src="/images/logo.svg" alt="logo">
            </picture>

            <div class="flex justify-content-between align-items-center">
                <p>Original Logo on <strong>white</strong> background</p>

                <a href="/images/logo.svg" class="border border-gray-800 px-8 py-1 rounded-full text-black font-bold text-xs">logo.svg</a>
            </div>
        </div>

        <div class="mb-8">
            <picture style="height: 382px" class="block shadow rounded-lg flex align-items-center justify-center mb-6 bg-blue">
                <img src="/images/negative-logo.svg" alt="logo">
            </picture>

            <div class="flex justify-content-between align-items-center">
                <p>Negative Logo on <strong>white</strong> background</p>

                <a href="/images/negative-logo.svg" class="border border-gray-800 px-8 py-1 rounded-full text-black font-bold text-xs">negative-logo.svg</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
