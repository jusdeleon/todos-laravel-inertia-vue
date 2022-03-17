<template>
    <div class="block mt-4">
        <div class="flex justify-between">
            <div class="flex items-center">
                <BreezeCheckbox name="remember" v-model:checked="completed" @change="toggleCompleted"/>
                <span class="ml-2">{{ name }}</span>
            </div>
            <div>
                <button @click="deleteTodo" type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import BreezeCheckbox from '@/Components/Checkbox.vue';

export default {
    components: {
        BreezeCheckbox
    },
    props: {
        id: Number,
        name: String,
        completed: Boolean
    },
    methods: {
        toggleCompleted() {
            this.$inertia.put(`/todos/${this.id}`, {
                completed: this.completed
            })
        },
        deleteTodo() {
            this.$inertia.delete(`/todos/${this.id}`)
        }
    }
}
</script>
