<template>
    <div :id="'reply-'+id" >
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <div v-if="signedIn">
                <favorite :reply="data" > </favorite>
                
            </div>
            <a :href="'/profiles/'+data.owner.name" >
                <h5 class="card-title pb-2 mb-0 text-info font-weight-bold" v-text="data.owner.name"> </h5>
            </a>

            <strong class="text-info font-weight-bold">
               
                <strong class="text-muted"> 
                    <span v-text="ago" class="font-weight-bold"></span> . 
                </strong> 
                
            </strong>
            <div v-if="editting">
                <div class="form-group"> 

                    <textarea name="" id="" class="form-control" v-model="body">

                    </textarea>
                </div>
                <button type="button" class="btn btn-outline-secondary " @click="editting = false">Cancel</button>
                <button type="button" class="btn btn-outline-info" @click="update">Update youre reply</button>
            </div>
            <p class="mb-0 text-muted"  v-else v-text="body">
                
            </p>
            
            <div class="py-3 text-md-left">
                <div v-if="canUpdate">

                    <button class="btn btn-outline-info btn-sm"  @click="editting = true">

                        <span class="fa fa-pencil fa fa-1x "> Edit reply</span>
                        
                    </button>
                        
                    <button type="button" class="btn btn-outline-danger btn-sm" @click="destroy">

                        <span class="fa fa-trash fa fa-1x "> Deleted reply</span>
                        
                    </button>

                </div>

            </div>
        
        </div>
    </div>
</template>

<script>

    import Favorite from './Favorite.vue';
    
    import moment from 'moment';

    export default {

        props: ['data'],

        components: { Favorite },

        data(){
 
            return{
                
                editting: false,
                id: this.data.id,
                body: this.data.body
            
            };

        },
        computed: {

            ago() {

                return moment(this.data.created_at).fromNow()+'....';

            },

            signedIn() {

                return window.App.signedIn;

            },

            canUpdate() {

               return this.authorize(user => this.data.user_id == user.id);
                

            }

        },
        methods: {

            update(){

                axios.patch('/replies/' + this.data.id, {
                    
                    body: this.body
                });

                this.editting = false;

                flash('Update');

            },
            
            destroy(){

                axios.delete('/replies/' + this.data.id);

                this.$emit('deleted', this.data.id);


            }

        }

    }
</script>


