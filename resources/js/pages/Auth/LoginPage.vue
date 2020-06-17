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

    <label class="block">
        <input v-model="form.remember" type="checkbox">
        <span>Remember me</span>
    </label>

    <button type="submit">Login</button>
</form>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',
                password: '',
                remember: false,
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.post(this.$route('login.attempt'), this.form);
        },
    },
    metaInfo: {
        title: 'Login',
    },
};
</script>
