<template>
    <div class="container mt-3">
    <h2>Example of Jumbotron</h2>
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ name }}</h1>
        <p>{{ content }}</p>
    </div>
    </div>
</template>

<script>
export default {
    props: {
        name: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        };
    },
    mounted() {
        console.log("Element1 component mounted!");
    },

}
</script>
