<template>
<div>
    Before proceeding, please check your email for a verification link. If you did not receive the email
    <form class="inline" @submit.prevent="submit">
        <button type="submit">click here to request another</button>.
    </form>
</div>
</template>

<script>
export default {
    methods: {
        submit() {
            this.$inertia.post(this.$route('verification.resend'), this.form);
        },
    },
    metaInfo: {
        title: 'Email Verification',
    },
};
</script>
