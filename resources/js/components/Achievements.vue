<template>
    <div>
        <h1 class="font-normal text-3xl gray-dark-font leading-none mb-12">Your Achievements</h1>

        <ul>
            <li v-for="achievement in achievements"
                v-text="achievement.name"></li>
        </ul>
    </div>
</template>

<script type="text/javascript">
    export default {
        data() {
            return {
                achievements: []
            };
        },
        created() {
            axios.get('http://127.0.0.1:8000/api/achievements')
                .then(response => {
                    this.achievements = response.data;
                });
        }
    }
</script>
