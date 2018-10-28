<script>
    export default {

        props: ['attributes'],


        data(){
 
            return{

                body: this.attributes.body,
                editting: false
            
            };

        },
        methods: {

            update(){

                axios.patch('/replies/' + this.attributes.id, {
                    
                    body: this.body
                });

                this.editting = false;

                flash('Update');

            },
            destroy(){

                axios.delete('/replies/' + this.attributes.id);

                $(this.$el).fadeOut(300, () => {
                    
                    flash('Your reply has been deleted');

                });


            }

        }

    }
</script>


