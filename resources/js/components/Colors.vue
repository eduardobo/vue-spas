<template>
    <div>
        <h1 class="font-normal text-3xl gray-dark-font leading-none mb-8">Colors</h1>

        <div class="">
            <h2 class="text-xl mb-4">Primary - Bue, White, Dark Grey</h2>

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

            <div class="mb-16">
                <h2 class="text-xl mb-4">Secondary - Category Color & Accents</h2>

                <div class="flex">
                    <!-- Laravel color -->
                    <div class="flex flex-column align-items-center mr-8">
                        <div class="rounded-full shadow bg-laravel mb-3" style="height: 90px; width: 90px;"></div>

                        <div class="flex justify-center mb-3">
                            <div class="flex flex-column mr-4 align-items-center">
                                <div class="rounded-full mb-3" style="height: 25px; width: 25px; background-color: #EC454F"></div>

                                <p class="text-xs">#EC454F</p>
                            </div>

                            <div class="flex flex-column align-items-center">
                                <div class="rounded-full mb-3" style="height: 25px; width: 25px; background-color: #F44881"></div>

                                <p class="text-xs">#F44881</p>
                            </div>
                        </div>

                        <p>Laravel</p>
                    </div>
                    <!-- End Laravel color -->

                    <color-range
                        from="#637BFF"
                        to="#21C8F6"
                        name="PHP">
                    </color-range>

                    <color-range
                        from="#50A88D"
                        to="#6EDCC4"
                        name="TESTING">
                    </color-range>

                    <color-range
                        from="#E59D3E"
                        to="#F19A1A"
                        name="JavaScript">
                    </color-range>

                    <color-range
                        from="#8465E5"
                        to="#AA76B9"
                        name="Tooling">
                    </color-range>
                </div>
            </div>
        </div>

    </div>
</template>

<script type="text/javascript">
    import ColorRange from './ColorRange';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{
            ColorRange
        }
    }
</script>
