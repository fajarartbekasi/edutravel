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

            }

        }

    }
</script>


