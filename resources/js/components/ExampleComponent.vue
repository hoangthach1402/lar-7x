
<template>
    <div class="example-component">{{ message }}</div>
    <div class="example-component"><button class="example-component" @click="sayHello">Click me</button></div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'This is my first component using binding data'
            }
        },

        methods: {
            sayHello() {
                alert('Hello World')
            }
        },
    }
</script>

<style lang="scss" scoped>
    .example-component {
        color: red;
    }
   
</style>