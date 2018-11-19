<template>
    <li class="nav-item dropdown" v-if="notifications.length">
        <span class="nav-link dropdown-toggle fa fa-bell text-muted"
            id="dropdown01"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
        &nbsp; Notifications
        </span>
        <ul class="dropdown-menu dropdown-menu-right"  >
            <li v-for="notification in notifications" :key="notification.id">
                <a class="dropdown-item"
                   :href="notification.data.link"
                   v-text="notification.data.message"
                   @click="markAsRead(notification)"
                >
                </a>
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
        data() {
            return { notifications: false }
        },
        created() {
            axios.get("/profiles/" + window.App.user.name + "/notifications")
                 .then(response => this.notifications = response.data);
        },
        methods: {
            markAsRead(notification) {
                axios.delete('/profiles/' + window.App.user.name + '/notifications/' + notification.id)
            }
        }
    }
</script>
