<template>
    <button type="submit" :class="classes" @click="toggle">
        <span class="fa fa-heart fa fa-1x mr-3"> Favorite</span>
        <span v-text="count"></span>
    </button>
</template>
<script>
    export default {
        props: ['reply'],
        data() {
            return {
                count: this.reply.favoritesCount,
                active: this.reply.isFavorited
            }
        },
        computed: {
            classes() {
                return ['btn', this.active ? 'btn-outline-primary  btn-sm subscribes' : 'btn-outline-secondary btn-sm subscribes'];
            },
            endpoint() {
                return '/replies/' + this.reply.id +'/favorites';
            }
        },
        methods: {
            toggle() {
                this.active ? this.destroy() : this.create();
            },
            create() {
                axios.post(this.endpoint);
                this.active = true;
                this.count++;
            },
            destroy() {
                axios.delete(this.endpoint);
                this.active = false;
                this.count--;
            }
        }
    }
</script>
