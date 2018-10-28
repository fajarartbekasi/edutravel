<template>
   <div class="col-md-6 py-4">
        <div class="alert alert-success alert-flash" role="alert" v-show="show">
            <strong>Atention Pleas!</strong> {{ body }}.
            
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['message'],

        data(){
            return {
                body: '',
                show: false

            }
        },

        created(){

            if(this.message) {
                
                this.flash(this.message);
            
            }

            window.events.$on('flash', message => this.flash(message));
        },

        methods:{

            flash(message) {
                this.body = message;
                this.show = true;

                this.hide();

            },

            hide() {

                setTimeout(() => {
                    this.show = false;
                }, 3000);

            }

        }

    }
</script>
<style>
    .alert-flash{
        position: relative;
        top: 20px;
        left: 25px
    }
</style>
