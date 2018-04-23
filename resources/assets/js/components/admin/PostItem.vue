<template>
    <div class="card">

        <img v-if="model.image" class="card-img-top" width="350px" height="250px" :src="model.image.src"
             alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{model.title}}</h5>
            <p class="card-text"> {{model.body}}</p>
            <div class="btn-toolbar justify-content-between" role="toolbar"
                 aria-label="Toolbar with button groups">

                <div class="btn-group" role="group">
                    <button class="btn btn-outline-primary" data-toggle="modal"
                            :data-target="'#postEditor'+model.id"><i class="fas fa-edit"></i></button>
                </div>
                <div class="btn-group" role="group">
                    <button class="btn btn-outline-danger" v-on:click="remove"><i class="fas fa-trash"></i></button>
                </div>
                <post-form title="Edit" :id="'postEditor'+model.id" v-model="model" tabindex="-1" role="dialog"
                           aria-labelledby="postEditor" aria-hidden="true">
                </post-form>

            </div>

        </div>
    </div>

</template>

<script>
    import PopupNotification from "../../notifications/PopupNotification";

    export default {
        name: "PostItem",
        props: ['model'],
        data() {
            return {notification: new PopupNotification(this)}
        },
        methods: {
            remove() {
                this.model.delete()
                    .then(({data}) => {
                        this.notification.success('Deleted!');
                        this.model.posts.paginate();
                        this.$emit('remove');
                    })
                    .catch(({response}) => {
                        this.notification.error('Not Deleted!')
                    });

            }
        }
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
</style>