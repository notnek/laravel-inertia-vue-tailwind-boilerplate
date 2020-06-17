<template>
<form @submit.prevent="submit">
    <div>
        <label>Name</label>
        <input v-model="form.name" type="text">
    </div>

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

    <button type="submit">Register</button>
</form>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',
                name: '',
                password: '',
                password_confirmation: '',
            },
        };
    },
    methods: {
        submit() {
          this.$inertia.post(this.$route('register.attempt'), this.form);
        },
    },
    metaInfo: {
        title: 'Register',
    },
};
</script>
