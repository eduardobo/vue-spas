<template>
    <div class="mr-8 flex flex-column align-items-center">
        <div class="rounded-full shadow mb-3" style="height: 90px; width: 90px;"
             :style="`background: linear-gradient(90deg, ${from}, ${to})`"></div>

        <div class="flex justify-center mb-3">
            <div class="flex flex-column align-items-center mr-4">
                <div class="rounded-full shadow mb-3" style="height: 25px; width: 25px"
                     :style="`background-color: ${to}`"></div>

                <p class="text-xs">{{ to }}</p>
            </div>

            <div class="flex flex-column align-items-center">
                <div class="rounded-full shadow mb-3" style="height: 25px; width: 25px"
                     :style="`background-color: ${from}`"></div>

                <p class="text-xs">{{ from }}</p>
            </div>
        </div>

        <h5 class="uppercase text-2xs text-grey font-normal">{{ name }}</h5>
    </div>
</template>

<script type="text/javascript">
    export default {
        props: [ 'from', 'to', 'name']
    }
</script>
