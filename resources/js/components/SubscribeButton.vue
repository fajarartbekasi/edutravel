<template>

    <button :class="classes" @click="subscribe">Subscribes</button>

</template>
<script>
    export default {

        props: ['active'],

        computed: {

            classes() {

                return ['btn', this.active ? 'btn-outline-primary btn-sm mr-3' : 'btn-outline-secondary btn-sm mr-3'];

            }

        },

        
        methods: {

            
            subscribe() {
                
                
                axios[
                    
                    (this.active ? 'delete' : 'post')
                ](location.pathname + '/subscriptions');
                
                this.active = ! this.active;

                flash('Subscribe');

            }

        }

    }
</script>
