<template>
    <div class="container-fluid mb-2 p-2 bg-light">
        <div class="btn-toolbar mb-2  p-1">
            <div class="btn btn-primary" data-toggle="modal" data-target="#newPost"><i class="fas fa-plus"></i>
                New Post
            </div>

            <post-form title="Create" id="newPost" v-model="post" @store="onStore" tabindex="-1" aria-labelledby="newPost"
                       aria-hidden="true"></post-form>
        </div>
        <post-list :models="posts.values" @remove="fetch"></post-list>


    </div>

</template>

<script>

    import Post from "../../models/Post";
    import PostList from "./PostList";
    import Posts from "../../models/Posts";

    export default {
        name: "Featured",
        components: {PostList},
        data() {
            return {
                saved: false,
                post: new Post(),
                //{id: null, title: null, image: {file: null, base64: null}, body: null},

                posts: new Posts()
            }
        },
        async created() {
            await this.fetch();
        },
        methods: {
            onStore(post) {
                this.posts.add(post);
                this.post = new Post();
                this.saved=true;
            },
            async fetch(){
                await this.posts.paginate();
            }
        },

    }
</script>

<style lang="scss" scoped>
    .card {
        .card-text, .card-title {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
    }

    .image-input {

    }
</style>