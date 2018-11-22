<template>
    <div :id="'reply-'+id" >
        <div class="comment pt-3">
            <div class="comment-wrap">
                <div class="photo">
                    <img src="/../../img/318585.png"
                        class="media-object rounded-circle ml-3 mr-3 mb-3" height="30" width="30">
                </div>

                    <div class="comment-block">
                        <div v-if="editting">
                            <div class="form-group">
                            <textarea name="" id="" class="form-control alert alert-danger" v-model="body">
                            </textarea>
                        </div>
                        <button type="button" class="btn btn-outline-secondary " @click="editting = false">Cancel</button>
                        <button type="button" class="btn btn-outline-info" @click="update">Update youre reply</button>
                    </div>
                    <p class="comment-text alert alert-info" v-else v-text="body">

                    </p>

                <div class="bottom-comment">
                    <div class="comment-date">
                        <a :href="'/profiles/'+data.owner.name" >
                            <strong class="text-info font-weight-bold" v-text="data.owner.name"> </strong>
                        </a>
                        <strong class="text-muted" v-text="ago" ></strong>
                    </div>
                    <div v-if="canUpdate">
                        <ul class="comment-actions">
                            <div v-if="signedIn">
                                <button class="btn btn-outline-info btn-sm complain"  @click="editting = true">
                                    <span class="fa fa-pencil fa fa-1x "> Edit reply</span>
                                </button>
                                <button type="button" class="btn btn-outline-danger btn-sm reply" @click="destroy">
                                    <span class="fa fa-trash fa fa-1x "> Deleted reply</span>
                                </button>
                            </div>
                        </ul>
                    </div>
                    <favorite :reply="data" > </favorite>
                </div>
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
