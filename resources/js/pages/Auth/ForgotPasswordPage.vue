<template>
<form @submit.prevent="submit">
    <div>
        <label>Email</label>
        <input v-model="form.email" type="email">
    </div>

    <button type="submit">Submit</button>
</form>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: '',
            },
        };
    },
    methods: {
        submit() {
            this.$inertia.post(this.$route('password.email'), this.form);
        },
    },
    metaInfo: {
        title: 'Request Password Reset',
    },
};
</script>
