<template>
    <form-section @submitted="createTeam">
        <template #title>
            Team Details
        </template>

        <template #description>
            Create a new team to collaborate with others on projects.
        </template>

        <template #form>
            <div class="col-span-6">
                <label value="Team Owner" />

                <div class="flex items-center mt-2">
                    <img class="w-12 h-12 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">

                    <div class="ml-4 leading-tight">
                        <div>{{ $page.props.user.name }}</div>
                        <div class="text-gray-700 text-sm">{{ $page.props.user.email }}</div>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="name" value="Team Name" />
                <input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus />
                <input-error :message="form.errors.name" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Create
            </button>
        </template>
    </form-section>
</template>

<script>
    import Button from '@/Jetstream/Button'
    import FormSection from '@/Jetstream/FormSection'
    import Input from '@/Jetstream/Input'
    import InputError from '@/Jetstream/InputError'
    import Label from '@/Jetstream/Label'

    export default {
        components: {
            Button,
            FormSection,
            Input,
            InputError,
            Label,
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                })
            }
        },

        methods: {
            createTeam() {
                this.form.post(route('teams.store'), {
                    errorBag: 'createTeam',
                    preserveScroll: true
                });
            },
        },
    }
</script>
