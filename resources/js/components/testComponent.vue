
<template>
    <div class="test-componen">{{ message }}</div>
    
</template>

<script>
    export default {
        data() {
            return {
                message: 'This is my first component using binding data'
            }
        }
    }
</script>

<style lang="scss" scoped>
    .test-componen {
        color: red;
    }
   
</style>