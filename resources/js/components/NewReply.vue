<template>
    <div v-if="signedIn">
        <div class="comment-wrap">
            <div class="photo">
                <img src="/../../img/318585.png" class="media-object rounded-circle ml-3 mr-3 mb-3" height="30" width="30">
            </div>
            <div class="comment-block">
                <textarea name=""
                        id=""
                        cols="100"
                        rows="3"
                        placeholder="You all will listen to answer...."
                        required
                        v-model="body"
                >
                </textarea>
            </div>
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
            <a href="/login">Please sign in</a>
            to participate in this discussion.
        </p>
    </div>
</template>
<script>
    export default {
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
                axios.post(location.pathname + '/replies', { body: this.body })
                .then(({data}) => {
                    this.body = '';
                    flash('Youre reply hasben published now.');
                    this.$emit('created', data);
                });
            }
        }
    }
</script>
