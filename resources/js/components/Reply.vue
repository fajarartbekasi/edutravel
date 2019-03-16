<template>
  <div :id="'reply-'+id" >
     <div id="comment-1">
        <div class="media mb-3">
           <div class="pr-2 mr-1">
              <img src="/../../img/318585.png"
                   alt="Chaerul Fajar Subhi"
                   width="45"
                   height="45"
                   class="align-self-start mt-2 rounded-circle img-thumbnail bg-white border-white absolute">
           </div>
           <div class="media-body bg-light-header pl-3 pt-3 pr-3 ml-3 rounded-2 body-content">
              <div v-if="editting">
                 <div class="form-group">
                    <textarea name="" id="" class="form-control alert alert-danger" v-model="body">
                    </textarea>
                 </div>
                 <button type="button" class="btn btn-outline-secondary " @click="editting = false">Cancel</button>
                 <button type="button" class="btn btn-outline-info" @click="update">Update youre reply</button>
              </div>
              <h5 class="pl-2 mr-5" v-else v-text="body"></h5>
              <div class="mb-3 ml-2">
                 <span class="text-info" v-text="data.owner.name"></span>
                    Published
                 <span v-text="ago"></span>
                 <div class="float-right media ">
                    <favorite :reply="data" > </favorite>
                       <div v-if="canUpdate">
                          <div v-if="signedIn">
                              <button class="btn btn-outline-warning btn-sm ml-2 mr-2"
                                      title="What wrong men with me"
                                      @click="editting = true"
                                      >
                                      <span class="fa fa-pencil"></span>
                              </button>
                              <button type="button"
                                      class="btn btn-outline-danger btn-sm"
                                      title="are you sure send me go to trash :("
                                      @click="destroy"
                                      >
                                      <span class="fa fa-trash"></span>
                              </button>
                          </div>
                       </div>
                 </div>
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
