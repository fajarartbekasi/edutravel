<template>
    <div>
        <div v-if="signedIn">
            <div class="form-group">

                <textarea name="body" 
                            id="" 
                            cols="30" 
                            rows="10" 
                            class="form-control" 
                            placeholder="You all will listen to answer...."
                            required
                            v-model="body"
                
                >
                
                </textarea>

            </div>

            <div class="float-right">

                <button type="submit" 
                        class="btn btn-outline-primary"
                        @click="addReply"
                >
                    Post Your Reply
                </button>

            </div>
        </div>
        
        <div v-else>

            <p class="float-left" >

                <a href="/login">

                    Please sign in 

                </a>

                to participate in this discussion.

            </p>

        </div> 
            
    </div>
</template>

<script>
    export default {

        props: ['endpoint'],

        data() {

            return {

                body: ''

            }

        },

        computed: {

            signedIn() {

                return window.App.signedIn;

            }

        },
        methods: {

            
            addReply() {

                axios.post(this.endpoint, { body: this.body })

                .then(({data}) => {

                    this.body = '';

                    flash('Youre reply hasben published now.');

                    this.$emit('created', data);
                });

            }

        }

    }
</script>

