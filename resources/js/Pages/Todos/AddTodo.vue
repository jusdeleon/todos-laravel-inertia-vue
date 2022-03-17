<template>
    <form @keydown.enter.prevent="submit">
        <div>
            <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" placeholder="Add a todo"/>
        </div>
    </form>
</template>

<script>
import BreezeInput from '@/Components/Input.vue';

export default {
    components: {
        BreezeInput
    },
    data() {
        return {
            form: this.$inertia.form({
                name: null,
            }),
        }
    },
    methods: {
        submit() {
            this.form.post('/todos', {
                preserveScroll: true,
                onSuccess: () => this.form.reset('name'),
            })
        },
    },
}
</script>
