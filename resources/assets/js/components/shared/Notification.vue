<template>
    <div v-if="shown" :class="{alert, 'alert-success': type==='success', 'alert-error' : type==='error'}" alert-dismissible fade show role="alert">
    {{message}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</template>

<script>
    export default {
        name: "Notification",
        data(){
            return {
                message : null,
                type: null,
                shown:false
            }
        },
        methods: {
        },
        created(){
          // Vue.$on('notify', (event)=>{
          //
          //     this.type=event.type;
          //     this.message=event.message;
          //     this.shown=true;
          // }) ;
        }
    }
</script>

<style scoped>

</style>