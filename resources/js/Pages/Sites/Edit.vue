<template>
    <app-layout>
        <template #header>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight sm:truncate">
                        {{ $page['props']['site']['title'] }}
                    </h2>

                </div>
                <div class="mt-5 flex lg:mt-0 lg:ml-4">

                    <span class="hidden sm:block ml-3">
<!--                                      :href="route('site.show', $page['props']['property']['uuid'])"-->
                        <button type="button"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                    <!-- Heroicon name: solid/link -->
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                      clip-rule="evenodd"/>
                            </svg>
                            Copy Link
                        </button>
                    </span>

                    <span class="sm:ml-3">
                        <inertia-link
                            :href="route('site.show', site.uuid)"
                            as="button" type="button"
                            class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <!-- Heroicon name: solid/check -->
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd"/>
                            </svg>
                        Preview
                        </inertia-link>
                    </span>

                    <!-- Dropdown -->
                    <span class="ml-3 relative sm:hidden">
<!--                        <button type="button"-->
                        <!--                                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"-->
                        <!--                                id="mobile-menu" aria-haspopup="true">-->
                        <!--                            More-->
                        <!--                            &lt;!&ndash; Heroicon name: solid/chevron-down &ndash;&gt;-->
                        <!--                            <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"-->
                        <!--                                 viewBox="0 0 20 20"-->
                        <!--                                 fill="currentColor" aria-hidden="true">-->
                        <!--                                <path fill-rule="evenodd"-->
                        <!--                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"-->
                        <!--                                      clip-rule="evenodd"/>-->
                        <!--                            </svg>-->
                        <!--                        </button>-->

                        <!--                        &lt;!&ndash;-->
                        <!--                          Dropdown panel, show/hide based on dropdown state.-->

                        <!--                          Entering: "transition ease-out duration-200"-->
                        <!--                            From: "transform opacity-0 scale-95"-->
                        <!--                            To: "transform opacity-100 scale-100"-->
                        <!--                          Leaving: "transition ease-in duration-75"-->
                        <!--                            From: "transform opacity-100 scale-100"-->
                        <!--                            To: "transform opacity-0 scale-95"-->
                        <!--                        &ndash;&gt;-->
                        <!--                        <div-->
                        <!--                            class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"-->
                        <!--                            aria-labelledby="mobile-menu" role="menu">-->
                        <!--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit</a>-->
                        <!--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">View</a>-->
                        <!--                        </div>-->

                        <!--                                      :href="route('site.show', $page['props']['property']['uuid'])"-->
                        <inertia-link
                            :href="route('site.show', 'uuid1')"
                            as="button" type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                    <!-- Heroicon name: solid/link -->
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                      clip-rule="evenodd"/>
                            </svg>
                            Copy Link
                        </inertia-link>
                    </span>
                </div>
            </div>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <!--CREATE FORM BUTTON-->
                    <div class="bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Add a form
                            </h3>
                            <div class="mt-2 max-w-xl text-sm text-gray-500">
                                <p>
                                    Forms are how customers will interact with your page and how you'll generate leads.
                                </p>
                            </div>
                            <div class="mt-5">
                                <div class="relative inline-block text-left">
                                    <button type="button" @click="isOpen=!isOpen"
                                            class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                        New Form
                                    </button>

                                    <!--
                                    Dropdown panel, show/hide based on dropdown state.

                                    Entering: "transition ease-out duration-100"
                                    From: "transform opacity-0 scale-95"
                                    To: "transform opacity-100 scale-100"
                                    Leaving: "transition ease-in duration-75"
                                    From: "transform opacity-100 scale-100"
                                    To: "transform opacity-0 scale-95"

                                    DROPDOWN COPIED TO MY NOTES
                                    -->

                                    <!--MODAL-->
                                    <transition
                                        enter-active-class="transition ease-out duration-300"
                                        enter-from-class="opacity-0"
                                        enter-to-class="opacity-100"
                                        leave-active-class="transition ease-in duration-200"
                                        leave-from-class="opacity-100"
                                        leave-to-class="opacity-0">
                                        <div class="fixed z-10 inset-0 overflow-y-auto " v-show="isOpen">
                                            <div
                                                class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <!--
                                                  Background overlay, show/hide based on modal state.

                                                  Entering: "ease-out duration-300"
                                                    From: "opacity-0"
                                                    To: "opacity-100"
                                                  Leaving: "ease-in duration-200"
                                                    From: "opacity-100"
                                                    To: "opacity-0"
                                                -->
                                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                </div>

                                                <!-- This element is to trick the browser into centering the modal contents. -->
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                      aria-hidden="true">&#8203;</span>
                                                <transition
                                                    enter-active-class="transition ease-out duration-300"
                                                    enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    enter-to-class="opacity-100 translate-y-0 sm:scale-100"
                                                    leave-active-class="transition ease-in duration-200"
                                                    leave-from-class="opacity-100 translate-y-0 sm:scale-100"
                                                    leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                                    <!--
                                                      Modal panel, show/hide based on modal state.

                                                      Entering: "ease-out duration-300"
                                                        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        To: "opacity-100 translate-y-0 sm:scale-100"
                                                      Leaving: "ease-in duration-200"
                                                        From: "opacity-100 translate-y-0 sm:scale-100"
                                                        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                    -->
                                                    <div v-if="isOpen"
                                                         class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                                                         role="dialog" aria-modal="true"
                                                         aria-labelledby="modal-headline">
                                                        <div>
                                                            <div
                                                                class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-purple-100">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="h-6 w-6 text-purple-600"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     fill="none" viewBox="0 0 24 24"
                                                                     stroke="currentColor"
                                                                     aria-hidden="true">
                                                                    <!--                                                    <path stroke-linecap="round" stroke-linejoin="round"-->
                                                                    <!--                                                          stroke-width="2"-->
                                                                    <!--                                                          d="M5 13l4 4L19 7"/>-->
                                                                    <!--                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          stroke-width="2"
                                                                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                                                    <!--                                                    </svg>-->
                                                                </svg>
                                                            </div>
                                                            <div class="mt-3 text-center sm:mt-5">
                                                                <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                    id="modal-headline">
                                                                    Create a New Form
                                                                </h3>
                                                                <div class="mt-2">
                                                                    <div class="col-span-6 sm:col-span-4">
                                                                        <jet-label for="title" value="Title"/>
                                                                        <jet-input id="name" type="text"
                                                                                   v-model="form.text"
                                                                                   class="mt-1 block w-full"/>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>


                                                        <form @submit.prevent="form.post('/site/form')">
                                                            <div
                                                                class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">

                                                                <!--LOADING-->
                                                                <template v-if="form.processing">
                                                                    <!--                                                    <span class="sm:ml-3">-->
                                                                    <button type="submit"
                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                                                                        <svg
                                                                            class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24">
                                                                            <circle class="opacity-25" cx="12" cy="12"
                                                                                    r="10"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="4"></circle>
                                                                            <path class="opacity-75" fill="currentColor"
                                                                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                                        </svg>
                                                                        Create
                                                                    </button>
                                                                    <!--                                                    </span>-->
                                                                </template>

                                                                <!--COMPLETED-->
                                                                <template v-else-if="form.recentlySuccessful">
                                                                    <!--                                                    <span class="sm:ml-3">-->
                                                                    <button type="submit"
                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                                                                        <!-- Heroicon name: solid/check -->
                                                                        <svg class="-ml-1 mr-2 h-5 w-5"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 20 20"
                                                                             fill="currentColor"
                                                                             aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                  clip-rule="evenodd"/>
                                                                        </svg>
                                                                        Created
                                                                    </button>
                                                                    <!--                                                    </span>-->
                                                                </template>

                                                                <!--REGULAR CREATE-->
                                                                <template v-else>
                                                                    <!--                                                    <span class="sm:ml-3">-->
                                                                    <button type="submit"
                                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                                                                        Create
                                                                    </button>
                                                                    <!--                                                    </span>-->
                                                                </template>


                                                                <button type="button" @click="isOpen=!isOpen"
                                                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </transition>
                                            </div>
                                        </div>
                                    </transition>
                                </div>
                            </div>
                        </div>
                    </div>


                    <section-border/>


                    <!-- LINKS HEADER -->
                    <div class="pb-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Links
                        </h3>
                    </div>

                    <!-- IN CASE THERE ARE NONE -->
                    <p class="mt-2 max-w-4xl text-sm text-gray-500">
                        Coming soon!
                    </p>


                    <section-border/>

                    <!-- FORMS HEADER -->
                    <div class="pb-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Forms
                        </h3>
                    </div>


                    <!-- THE LIST OF FORMS -->
                    <ul v-if="$page['props']['topics'].length"
                        class="space-y-12 sm:grid sm:grid-cols-1 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-1 lg:gap-x-8">
                        <li v-for="(topic, index) in $page['props']['topics']" class="group">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="bg-gray-50 sm:rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        {{ topic.text }}
                                    </h3>

                                    <!--                                    <ul v-if="$page['props']['questions'][index]['questions'].length">-->
                                    <!--                                        <li v-for="(question, index) in $page['props']['questions'][0]['questions']"-->
                                    <!--                                            class="group">-->
                                    <!--                                            <div class="mt-2 max-w-xl text-sm text-gray-500">-->
                                    <!--                                                <p>-->
                                    <!--                                                    {{-->
                                    <!--                                                        question == null ? "No questions" : (index + 1) + ". " +-->
                                    <!--                                                            question['text']-->
                                    <!--                                                    }}-->
                                    <!--                                                </p>-->
                                    <!--                                            </div>-->
                                    <!--                                        </li>-->
                                    <!--                                    </ul>-->

                                    <div v-if="$page['props']['questions'][index]['questions'].length"
                                         class="mt-2 max-w-xl text-sm text-gray-500">
                                        <p>
                                            {{
                                                $page['props']['questions'][index]['questions'].length + " questions"
                                            }}
                                        </p>
                                    </div>

                                    <div v-else class="mt-2 max-w-xl text-sm text-gray-500">
                                        <p>
                                            No questions
                                        </p>
                                    </div>

                                    <div class="mt-5 flex justify-between">


                                        <button type="button"
                                                class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                            Edit form
                                        </button>

                                        <form @submit.prevent="form.post('/site/delete-form')">


                                            <button :value="topic.id"
                                                    @click="form.topic_id = $event.target.value"
                                                    type="submit"
                                                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:text-sm">
                                                Delete
                                            </button>
                                        </form>


                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>


                    <!-- IN CASE THERE ARE NONE -->
                    <p v-else class="mt-2 max-w-4xl text-sm text-gray-500">You haven't made any forms yet. Click the
                        create form button on the top to get started!</p>

                </div>
            </div>
        </div>


    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import FormSection from "@/Jetstream/FormSection";
import SectionBorder from "@/Jetstream/SectionBorder";
import JetLabel from '@/Jetstream/Label';
import JetInput from '@/Jetstream/Input';
import JetButton from '@/Jetstream/Button';
import JetActionMessage from '@/Jetstream/ActionMessage'
import Button from "@/Jetstream/Button";

export default {
    name: "Edit",
    // components: {}
    components: {
        Button,
        SectionBorder,
        FormSection,
        AppLayout,
        JetLabel,
        JetInput,
        JetButton,
        JetActionMessage,
    },

    props: ['site'],

    data: function () {
        return {
            isOpen: false,
            addQuestion: false,

            form: this.$inertia.form({
                text: '',
                question: '',
                topic_id: 0,
                site_id: this.site.id,
            }),
        }
    }
}
</script>

<style scoped>

</style>
