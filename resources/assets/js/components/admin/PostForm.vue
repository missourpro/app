<template>
    <div ref="modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="PostFormTitle">{{title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent>

                    <div class="modal-body">

                        <div class="form-row">
                            <div class="form-group w-100">
                                <input id="postTitle" type="text" class="form-control" placeholder="Title"
                                       v-model="value.title">
                            </div>


                        </div>
                        <div class="form-row">
                            <image-input v-model="value.image"></image-input>

                        </div>
                        <div class="form-row">
                            <div class="form-group w-100">
                                                        <textarea name="postBody" id="postBody"
                                                                  rows="10"
                                                                  class="form-control" placeholder="Type here..."
                                                                  v-model="value.body"></textarea>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">
                            Close
                        </button>
                        <button class="btn btn-primary" @click="save">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
    import Post from "../../models/Post";
    import PopupNotification from "../../notifications/PopupNotification";

    export default {
        name: "PostForm",
        props: {
          value: {
              type: Post,
              required:true
          },
            title:{
              type : String
            }
        },
        data(){
            return {
                saved: false,
                errors: [],
                notification: new PopupNotification(this)
            }
        },
        methods: {
            save() {
                this.value.save()
                    .then(({data})=>{
                            if(!this.value.id){
                                this.value.id=data.data.id;
                                this.$emit('store', this.value);
                            }
                            else{
                                this.$emit('update', this.value);
                            }
                            this.saved=true;
                            this.notification.success('Saved!')



                    })
                    .catch(({response})=>{
                        this.errors=response.data.errors;
                        this.$popup({message:'Error!', delay: 4, backgroundColor: 'rgba(255, 0, 0, 0.8)'})
                        this.notification.error('Not Saved!')

                    });



            },
            setErrors(response) {
                //this.errors = response.data.errors;
            },

            setSuccessMessage() {
                this.reset();
                //this.$emit('input', this.post);
            },

            reset() {
                this.errors = [];
                //this.post = {title: null, image: {file: null, base64: null}, body: null};
            }
        }
    }
</script>

<style scoped>

</style>