<template>
    <div>
        <h1 class="font-normal text-3xl gray-dark-font leading-none mb-8">Logo Symbol</h1>
        <div>
            <div class="mb-8">
                <picture style="height: 382px" class="block shadow rounded-lg flex align-items-center justify-center mb-6">
                    <img src="/images/symbol-original.svg">
                </picture>

                <div class="center flex justify-content-between align-items-center">
                    <p>Original symbol on <strong>white</strong> background</p>

                    <a href="/images/symbol-original.svg" class="border border-gray-800 px-3 py-1 rounded-full text-black font-bold text-xs">symbol-original.svg</a>
                </div>
            </div>

            <div class="mb-8">
                <picture style="height: 382px" class="block shadow rounded-lg flex align-items-center justify-center mb-6 bg-blue">
                    <img src="/images/symbol-negative.svg">
                </picture>

                <div class="center flex justify-content-between align-items-center">
                    <p>Original symbol on <strong>white</strong> background</p>

                    <a href="/images/symbol-negative.svg" class="border border-gray-800 px-3 py-1 rounded-full text-black font-bold text-xs">symbol-negative.svg</a>
                </div>
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
