<template>
    <div class="image-input mb-1 w-100">
        <div v-if="value" class="text-center">
            <img class="mx-auto mb-1 w-75 d-block" :src="value.src">
            <button @click="removeImage">Remove image</button>
        </div>
        <div v-else class="form-group w-100">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="postImage" @change="changeImage">
                <label class="custom-file-label" for="postImage">
                    <i class="fas fa-search"></i> Choose image file
                </label>
            </div>
        </div>

    </div>
</template>

<script>
    import LocalImage from "../../models/LocalImage";
    import WebImage from "../../models/WebImage";

    export default {
        name: "ImageInput",

        props: ['value'],//WebImage or LocalImage
        methods:{
           async changeImage(event){
                let files = event.target.files || event.dataTransfer.files;
                if (!files.length)
                    return;
                let image=new LocalImage(files[0]);
               this.$emit('input', image);
            },
            removeImage(){
                this.$emit('input', null);
            }
        }

    }
</script>

<style scoped>

</style>