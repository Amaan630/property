<template>
    <app-layout>
        <template #header>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight sm:truncate">
                        {{ $page['props']['topic']['text'] }}
                    </h2>

                </div>
                <div class="mt-5 flex lg:mt-0 lg:ml-4">

                </div>
            </div>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>

                    <!-- FORMS HEADER -->
                    <div class="pb-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Questions
                        </h3>
                        <p class="max-w-4xl mt-4 text-sm text-gray-500">Note: you must hit enter after typing to save an
                            edit</p>
                    </div>


                    <!--MAKE A NEW QUESTION-->
                    <div class="bg-white shadow sm:rounded-lg ">
                        <div class="px-4 py-5 sm:p-6">

                            <div class="flex justify-between items-center">

                                <jet-input id="create" type="text" class="mt-1 block w-full mr-10"
                                           v-model="addQuestion.question"
                                           placeholder="New Question"/>


                                <form @submit.prevent="addQuestion.post('/site/edit/new-question')">

                                    <!--                                    <template v-if="addQuestion.processing">-->
                                    <!--                                        <button type="submit"-->
                                    <!--                                                @click="addQuestion.topic_id = $page['props']['topic']['id']"-->
                                    <!--                                                class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">-->
                                    <!--                                            <svg-->
                                    <!--                                                class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"-->
                                    <!--                                                xmlns="http://www.w3.org/2000/svg" fill="none"-->
                                    <!--                                                viewBox="0 0 24 24">-->
                                    <!--                                                <circle class="opacity-25" cx="12" cy="12"-->
                                    <!--                                                        r="10"-->
                                    <!--                                                        stroke="currentColor"-->
                                    <!--                                                        stroke-width="4"></circle>-->
                                    <!--                                                <path class="opacity-75" fill="currentColor"-->
                                    <!--                                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>-->
                                    <!--                                            </svg>-->
                                    <!--                                            Adding-->
                                    <!--                                        </button>-->
                                    <!--                                    </template>-->

                                    <!--                                    <template v-else-if="addQuestion.recentlySuccessful">-->
                                    <!--                                        <button type="submit"-->
                                    <!--                                                @click="addQuestion.topic_id = $page['props']['topic']['id']"-->
                                    <!--                                                class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">-->
                                    <!--                                            Added.-->
                                    <!--                                        </button>-->
                                    <!--                                    </template>-->

                                    <!--                                    <template v-else>-->
                                    <button type="submit"
                                            @click="addQuestion.topic_id = $page['props']['topic']['id']"
                                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                        Add
                                    </button>
                                    <!--                                    </template>-->
                                </form>


                            </div>
                        </div>
                    </div>

                    <section-border/>

                    <!-- THE LIST OF QUESTIONS -->
                    <ul v-if="$page['props']['questions'].length"
                        class="space-y-12 sm:grid sm:grid-cols-1 sm:gap-x-6 sm:gap-y-6 sm:space-y-0 lg:grid-cols-1 lg:gap-x-8">
                        <li v-for="(question, index) in $page['props']['questions']" class="group">


                            <!-- Question boxes -->
                            <div class="bg-white shadow sm:rounded-lg">
                                <div class="px-4 py-5 sm:p-6">

                                    <div class="flex justify-between items-center">

                                        <!--                                        <div class="col-span-6 sm:col-span-4">-->
                                        <form class="block w-full mr-10"
                                              @submit.prevent="updateQuestion.post('/site/edit/update-form')">
                                            <jet-input type="text" class="mt-1 block w-full"
                                                       :value="question.text"
                                                       v-on:input="updateQuestion.question = $event; updateQuestion.question_id = question.id
                                                                    updateQuestion.topic_id = question.topic_id"/>
                                        </form>
                                        <!--                                        </div>-->
                                        <!--                                        <jet-input class="text-lg leading-6 font-medium text-gray-900"-->
                                        <!--                                                   value="'question.text'"/>-->
                                        <!--                                        <h3 class="text-lg leading-6 font-medium text-gray-900">-->
                                        <!--                                            {{ question.text }}-->
                                        <!--                                        </h3>-->


                                        <form @submit.prevent="deleteQuestion.post('/site/delete-question')">

                                            <!--                                            <template v-if="deleteQuestion.processing">-->
                                            <!--                                                <button :value="question.id"-->
                                            <!--                                                        @click="deleteQuestion.question_id = $event.target.value; deleteQuestion.topic_id = question.topic_id"-->
                                            <!--                                                        type="submit"-->
                                            <!--                                                        class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">-->
                                            <!--                                                    <svg-->
                                            <!--                                                        class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"-->
                                            <!--                                                        xmlns="http://www.w3.org/2000/svg" fill="none"-->
                                            <!--                                                        viewBox="0 0 24 24">-->
                                            <!--                                                        <circle class="opacity-25" cx="12" cy="12"-->
                                            <!--                                                                r="10"-->
                                            <!--                                                                stroke="red"-->
                                            <!--                                                                stroke-width="4"></circle>-->
                                            <!--                                                        <path class="opacity-75" fill="currentColor"-->
                                            <!--                                                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>-->
                                            <!--                                                    </svg>-->
                                            <!--                                                    Deleting-->
                                            <!--                                                </button>-->
                                            <!--                                            </template>-->

                                            <!--                                            <template v-else-if="deleteQuestion.recentlySuccessful">-->
                                            <!--                                                <button :value="question.id"-->
                                            <!--                                                        @click="deleteQuestion.question_id = $event.target.value; deleteQuestion.topic_id = question.topic_id"-->
                                            <!--                                                        type="submit"-->
                                            <!--                                                        class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">-->
                                            <!--                                                    Deleted.-->
                                            <!--                                                </button>-->
                                            <!--                                            </template>-->

                                            <!--                                            <template v-else>-->
                                            <button :value="question.id"
                                                    @click="deleteQuestion.question_id = $event.target.value; deleteQuestion.topic_id = question.topic_id"
                                                    type="submit"
                                                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">
                                                Delete
                                            </button>
                                            <!--                                            </template>-->
                                        </form>


                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>


                    <!-- IN CASE THERE ARE NONE -->
                    <p v-else class="max-w-4xl text-sm text-gray-500">Create your first question using the button
                        above!</p>

                </div>
            </div>
        </div>


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import JetLabel from "@/Jetstream/Label";
import JetInput from "@/Jetstream/Input";
import SectionBorder from "@/Jetstream/SectionBorder";

export default {
    components: {
        AppLayout,
        JetLabel,
        JetInput,
        SectionBorder,
    },

    name: "FormEdit.vue",

    props: ['site'],

    data: function () {
        return {
            // site_id: this.site.id,


            updateQuestion: this.$inertia.form({
                question: '',
                question_id: 0,
                topic_id: 0,
                site_id: this.site.id,
            }),
            addQuestion: this.$inertia.form({
                question: '',
                topic_id: 0,
                site_id: this.site.id,
            }),
            deleteQuestion: this.$inertia.form({
                question_id: 0,
                topic_id: 0,
                site_id: this.site.id,
            }),
        }
    }
}
</script>

<style scoped>

</style>
