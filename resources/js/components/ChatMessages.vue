<template>
    <div class="message-list">
        <div
            id="chat-messages"
            class="message-group"
            v-chat-scroll="{ smooth: true }"
        >
            <div
                class="message"
                v-for="(message, index) in messages"
                :key="index"
            >
                <div class="clearfix">
                    <h4 class="message-title">{{ message.user.name }}</h4>
                </div>
                <p class="message-text">
                    {{ message.message }}
                </p>
                <div class="clearfix">
                    <small class="text-muted float-right">{{
                        message.created_at
                    }}</small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import VueChatScroll from "vue-chat-scroll";
Vue.use(VueChatScroll);
export default {
    props: ["messages"]
};
</script>
<style>
.message-list {
    margin-bottom: 15px;
    padding-right: 15px;
}
.message-group {
    height: 65vh !important;
    overflow-y: scroll;
}
.message {
    border: 1px solid lightblue;
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 15px;
}
.message-title {
    font-size: 1rem;
    display: inline;
}
.message-text {
    color: gray;
    margin-bottom: 0;
}
.user-typing {
    height: 1rem;
}
</style>
