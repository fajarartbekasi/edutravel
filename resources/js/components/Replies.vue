<template>
    <div >
        <div v-for="(reply, index) in items" :key="reply.id">
            <reply :data="reply" @deleted="remove(index)">
            </reply>
        </div>
        <nav aria-label="Page navigation example">
            <new-reply @created="add"></new-reply>
            <paginator :dataSet="dataSet" @changed="fetch"></paginator>
        </nav>
    </div>
</template>
<script>
    import Reply from './Reply.vue';
    import NewReply from './NewReply.vue';
    import colletion from '../mixins/collection.js';
    export default {
        props: ['data'],
        components: { Reply, NewReply },
        mixins:[colletion],
        data() {
            return { dataSet: false };
        },
        created() {
            this.fetch();
        },
        methods: {
            fetch(page) {
                axios.get(this.url(page)).then(this.refresh);
            },
            url(page) {
                if(! page ) {
                    let query = location.search.match(/page=(\d+)/);
                    page = query ? query [1] : 1;
                }
                return `${location.pathname}/replies?page=${page}`;
            },
            refresh({data}) {
                this.dataSet = data;
                this.items = data.data;
                window.scrollTo(0,0);
            }
        }
    }
</script>
