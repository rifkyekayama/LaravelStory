<template>
    <div>
        <form action="">
            <div class="form-group">
                <label>Search</label>
                <input class="form-control" type="text" v-model="query">
            </div>
        </form>
    </div>
</template>

<script>
    const client = algoliasearch('PWGX8HVIQN', 'a9a31a64f0f6367d1b2e22061445430b');
    const index = client.initIndex('scouts');
    export default {
        data() {
            return {
                query: '',
            }
        },
        watch: {
            query(event) {
                console.log(event);
            }
        },
        methods: {
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
