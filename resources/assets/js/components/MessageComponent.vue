<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div
                    class="alert alert-danger alert-dismissible"
                    role="alert"
                    v-for="m in messages"
                >
                    <button type="button" class="close" data-dismiss="alert" aria-label="閉じる"><span aria-hidden="true">×</span></button>
                    {{m}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['userId'],
    data: function () {
        return {
            messages: []
        }
    },
    mounted() {
        window.Echo
            .private('user.logined.'+this.userId)
            .listen('BroadcastUserLogined', (e) => {
                this.messages.push('別の場所からログインがありました(IPアドレス:'+ e.client_ip+')')
            })
    }
}
</script>
