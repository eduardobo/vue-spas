<template>
    <div>
        <h1 class="font-normal text-3xl gray-dark-font leading-none mb-8">Loaders and Animations</h1>

        <p>This spinner uses AirBnb's <a href="http://airbnen.io/lotti/#/web" class="text-blue font-bold">Lottie</a>
            library to render its animation. You may download the necessary assets below</p>
        <div class="border rounded-lg flex align-items-center justify-center mb-8">
            <div ref="lottie" class="w-64" style="height: 457px"></div>
        </div>

        <a href="/images/logo.svg"
            class="border px-10 py-2 rounded-full text-black-50 font-bold text-xs"
        >spinner.zip</a>
    </div>
</template>

<script>
    import lottie from 'lottie-web';

    export default {
        mounted() {
            lottie.loadAnimation({
                container: this.$refs.lottie,
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '/animations/spinner.json'
            })
        }
    }
</script>
