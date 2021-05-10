<template>
    <div>
        <h1 class="font-normal text-3xl gray-dark-font leading-none mb-8">Colors</h1>

        <div>
            <p class="text-xl mb-4">Primary - Bue, White, Dark Grey</p>

            <div class="flex">
                <div class="text-center">
                    <div class="bg-blue rounded-full shadow" style="height: 90px; width: 90px"></div>

                    <p>#328AF1</p>
                </div>

                <div class="text-center px-5">
                    <div class="bg-white rounded-full shadow" style="height: 90px; width: 90px"></div>

                    <p>#FFF</p>
                </div>

                <div class="text-center">
                    <div class="bg-dark rounded-full shadow" style="height: 90px; width: 90px"></div>

                    <p>#222222</p>
                </div>
            </div>

            <div>
                <p class="text-xl mb-4">Secondary - Category Color & Accents</p>

                <div class="flex">
                    <div class="text-center">
                        <div class="rounded-full shadow bg-laravel" style="height: 90px; width: 90px;"></div>

                        <div class="flex">
                            <div>
                                <div class="rounded-full" style="height: 25px; width: 25px; background-color: #EC454F"></div>

                                <p>#EC454F</p>
                            </div>

                            <div>
                                <div class="rounded-full" style="height: 25px; width: 25px; background-color: #F44881"></div>

                                <p>#F44881</p>
                            </div>
                        </div>

                        <p>Laravel</p>
                    </div>

                    <div class="text-center px-4">
                        <div class="bg-white rounded-full shadow" style="height: 90px; width: 90px"></div>

                        <p>#FFF</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-dark rounded-full shadow" style="height: 90px; width: 90px"></div>

                        <p>#222222</p>
                    </div>
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
