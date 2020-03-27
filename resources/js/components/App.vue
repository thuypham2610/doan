<template>
    <main class="py-4">
        <div class="container chats">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card card-default">
                        <div class="card-header">Chats</div>

                        <div class="card-body">
                            <chat-messages :messages="messages"></chat-messages>
                        </div>
                        <div class="card-footer">
                            <chat-form @messagesent="addMessage"></chat-form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li>
                            @{{ user.name }}
                            <span v-if="user.typing" class="badge badge-primary"
                                >typing...</span
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
import ChatForm from "./ChatForm.vue";
import ChatMessages from "./ChatMessages.vue";
export default {
    props: ["u"],
    name: "chat",
    components: {
        ChatForm,
        ChatMessages
    }
};
</script>
