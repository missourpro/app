<template>
    <div class="card-columns">
        <post-item  :model="model"  v-for="(model, index) in models" :key="model.id">
        </post-item>
    </div>
</template>

<script>
    import PostItem from "./PostItem";
    export default {
        name: "PostList",
        components: {PostItem},
        props:{
            models :{
                type: Array
            }
        },

        methods:{
            remove(index){
                this.models.splice(index, 1)
            }
        }
    }
</script>

<style scoped>

</style>