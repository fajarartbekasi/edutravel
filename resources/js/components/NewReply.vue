<template>
    <div class="mt-3">
        <div>
            <div class="media mb-3">
                <div class="pr-2 mr-2">
                    <img src="/../../img/318585.png"
                         alt=""
                         width="45"
                         height="45"
                         class="align-self-start mt-2 rounded-circle img-thumbnail bg-white border-white absolute"
                         >
                </div>
            </div>
            <div class="media-body bg-light-comment pl-3 pt-2 pr-3 ml-3 rounded-2 mb-3">
                <div class="ml-3 mt-2 mb-3 rounded-2 bg-white mb-3">
                    <div class="p-3">
                        <div class="form-group mb-3">
                            <textarea id="body"
                                    name="body"
                                    placeholder="You all will listen to answer...."
                                    class="form-control pl-0 border-0 mb-2"
                                    style="resize: none; overflow: hidden; height: 61px;"
                                    v-model="body"
                                    >
                            </textarea>
                        </div>
                    </div>
                </div>
                    <button class="btn btn-outline-primary mb-3 ml-3"
                            @click="addReply"
                    >
                        Post youre reply
                    </button>
            </div>
        </div>
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
