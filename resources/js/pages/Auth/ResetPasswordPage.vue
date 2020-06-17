<template>
<form @submit.prevent="submit">
    <div>
        <label>Email</label>
        <input v-model="form.email" type="email">
    </div>

    <div>
        <label>Password</label>
        <input v-model="form.password" type="password">
    </div>

    <div>
        <label>Password Confirmation</label>
        <input v-model="form.password_confirmation" type="password">
    </div>

    <button type="submit">Update Password</button>
</form>
</template>

<script>
export default {
    props: {
        token: {
            type: String,
            required: true,
        },
        email: {
            type: String,
            default() {
                return '';
            },
        },
    },
    data() {
        return {
            form: {
                email: this.email,
                token: this.token,
                password: '',
                password_confirmation: '',
            },
        }
    },
    methods: {
        submit() {
            this.$inertia.post(this.$route('password.update'), this.form);
        },
    },
    metaInfo: {
        title: 'Reset Password',
    },
};
</script>
