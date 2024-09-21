<template>
      <h2>child component</h2>
  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>Jumbotron Example</h1> 
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p> 

    <button v-on:click="changeText">
        Hi, {{ text }}
    </button>

    <br><br>
    <p>{{ "count: " + count }}</p>
    <button v-on:click="count++">Count</button>
    <button v-on:click="addCount(5)">Count 5</button>
    <button v-on:click="count -= 2">Count -2</button>

    <button v-on:click.once="createAlert">Create Alert</button>
  </div>
</template>

<script>
export default {
    
    data() {
        return {
            text: 'Anonymous',
            count: 0
        }
    },
    methods: {
        changeText() {
            this.text = 'Hello World!'
        },

        createAlert() {
            alert("Alert created from button click")
        },

        addCount(number) {
            this.count = this.count + number
        }
    },

}
</script>