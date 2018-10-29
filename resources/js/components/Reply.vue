<template>
    
        <div class="discuss-show container">
            <div class="media">
                <div class="media-body ">  
                    <div class="row">
                        <div class="col-md-12">
                            <div :id="'reply-'+id" class="discuss-body">
                                    
                                    <p>
                                        <a :href="'/profiles/'+data.owner.name" v-text="data.owner.name">
                                            
                                        </a>
                                        
                                        <strong class="text-muted">
                                            <span class="text-muted">Published {{ data.created_at }}</span>
                                        </strong>
                                        
                                    </p>
                                    
                                    <div v-if="editting">
                                        <div class="form-group"> 

                                            <textarea name="" id="" class="form-control" v-model="body">
    
                                            </textarea>
                                        </div>
                                        <button type="button" class="btn btn-outline-secondary " @click="editting = false">Cancel</button>
                                        <button type="button" class="btn btn-outline-info" @click="update">Update youre reply</button>
                                    </div>
                                    <div v-else v-text="body">

                                       
                                    </div>
                                    <br>
                                    <div v-if="signedIn">
                                        <favorite :reply="data"></favorite>
                                        
                                    </div>
                                    <div v-if="canUpdate">

                                        <button class="btn btn-outline-warning btn-sm"  @click="editting = true">

                                            <span class="fa fa-pencil fa fa-1x "> Edit reply</span>
                                            
                                        </button>
                                            
                                        <button type="button" class="btn btn-outline-danger btn-sm" @click="destroy">

                                            <span class="fa fa-trash fa fa-1x "> Deleted reply</span>
                                            
                                        </button>

                                    </div>

                                    
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
            </div>
        </div>
   
</template>

<script>

    import Favorite from './Favorite.vue';

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


