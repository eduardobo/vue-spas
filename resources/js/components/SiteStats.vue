<template>
    <div>
        <h1 class="font-normal text-3xl gray-dark-font leading-none mb-8">Laracasts Stats</h1>

        <ul>
            <li>
                <strong>Total Series:</strong> {{ series }}
            </li>

            <li>
                <strong>Total Lessons:</strong> {{ lessons }}
            </li>
        </ul>
    </div>
</template>

<script type="text/javascript">
    export default {
        data() {
            return {
                lessons: 0,
                series: 0
            }
        },
        created() {
            axios.get('http://127.0.0.1:8000/api/stats')
                .then((response) => {
                    this.handleStatsRequest(response.data);
                });
        },
        methods: {
            async handleStatsRequest (data) {
                this.lessons = data.lessons;
                this.series = data.series;
            }
        }
    };
</script>
