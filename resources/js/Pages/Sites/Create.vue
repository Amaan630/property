<template>
    <app-layout>
        <!--        <form @submit.prevent="form.post('/site/create/new')"-->
        <!--        >-->
        <template #header>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight sm:truncate">
                        New Site
                    </h2>
                    <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                        <!--                        <div class="mt-2 flex items-center text-sm text-gray-500">-->
                        <!--                            &lt;!&ndash; Heroicon name: solid/briefcase &ndash;&gt;-->
                        <!--                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"-->
                        <!--                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">-->
                        <!--                                <path fill-rule="evenodd"-->
                        <!--                                      d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"-->
                        <!--                                      clip-rule="evenodd"/>-->
                        <!--                                <path-->
                        <!--                                    d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>-->
                        <!--                            </svg>-->
                        <!--                            Full-time-->
                        <!--                        </div>-->
                        <!--                        <div class="mt-2 flex items-center text-sm text-gray-500">-->
                        <!--                            &lt;!&ndash; Heroicon name: solid/location-marker &ndash;&gt;-->
                        <!--                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"-->
                        <!--                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">-->
                        <!--                                <path fill-rule="evenodd"-->
                        <!--                                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"-->
                        <!--                                      clip-rule="evenodd"/>-->
                        <!--                            </svg>-->
                        <!--                            Remote-->
                        <!--                        </div>-->

                        <!--                        <div class="mt-2 flex items-center text-sm text-gray-500">-->
                        <!--                            &lt;!&ndash; Heroicon name: solid/currency-dollar &ndash;&gt;-->
                        <!--                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"-->
                        <!--                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">-->
                        <!--                                <path-->
                        <!--                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>-->
                        <!--                                <path fill-rule="evenodd"-->
                        <!--                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"-->
                        <!--                                      clip-rule="evenodd"/>-->
                        <!--                            </svg>-->
                        <!--                            &lt;!&ndash;                            {{ $page['props']['property']['price'] | currency }}&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                            {11 | currency}&ndash;&gt;-->
                        <!--                        </div>-->
                        <!--                        <div class="mt-2 flex items-center text-sm text-gray-500">-->
                        <!--                            &lt;!&ndash; Heroicon name: solid/calendar &ndash;&gt;-->
                        <!--                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"-->
                        <!--                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">-->
                        <!--                                <path fill-rule="evenodd"-->
                        <!--                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"-->
                        <!--                                      clip-rule="evenodd"/>-->
                        <!--                            </svg>-->
                        <!--                            Closing on January 9, 2020-->
                        <!--                        </div>-->
                    </div>
                </div>

                <div class="mt-5 flex lg:mt-0 lg:ml-4">

                    <form @submit.prevent="form.post('/site/create/new')"
                          class="sm:max-w-xl sm:mx-auto lg:mx-0">
                        <template v-if="form.processing">
                        <span class="sm:ml-3">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <!-- Loading icon -->
                               <svg
                                   class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                   xmlns="http://www.w3.org/2000/svg" fill="none"
                                   viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12"
                                                    r="10"
                                                    stroke="currentColor"
                                                    stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                Creating...
                            </button>
                        </span>
                        </template>


                        <template v-else-if="form.recentlySuccessful">
                        <span class="sm:ml-3">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <!-- Heroicon name: solid/check -->
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Created
                            </button>
                        </span>
                        </template>


                        <template v-else>
                        <span class="sm:ml-3">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <!-- Heroicon name: solid/check -->
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                     fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Create
                            </button>
                        </span>
                        </template>
                    </form>

                    <!-- Dropdown -->
                    <span class="ml-3 relative sm:hidden">
      <button type="button"
              class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              id="mobile-menu" aria-haspopup="true">
        More
          <!-- Heroicon name: solid/chevron-down -->
        <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"/>
        </svg>
      </button>

                        <!--
                          Dropdown panel, show/hide based on dropdown state.

                          Entering: "transition ease-out duration-200"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
      <div
          class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
          aria-labelledby="mobile-menu" role="menu">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Edit</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">View</a>
      </div>
    </span>
                </div>
            </div>
        </template>


        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <form-section @submit.prevent="form.post('/addjob')">
                        <!--                        @submitted="updateProfileInformation">-->
                        <template #title>
                            General Information
                        </template>

                        <template #description>
                            Set the type of the site and its name.
                        </template>

                        <template #form @submit.prevent="form.post('/site')">
                            <!--                            <div class="col-span-6 sm:col-span-4">-->

                            <!--Type-->
                            <!--                                <jet-label for="type" value="Type"/>-->
                            <!--                                <jet-input id="type" type="text" v-model="form.type" class="mt-1 block w-full"/>-->
                            <!--                            </div>-->


                            <div class="col-span-6 sm:col-span-4">

                                <!--Site Name-->
                                <jet-label for="name" value="Name"/>
                                <jet-input id="name" type="text" v-model="form.title" class="mt-1 block w-full"/>
                            </div>
                            <!--                                <jet-input-error :message="form.errors.name" class="mt-2" />-->
                        </template>

                        <template #actions>
                            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                                Saved.
                            </jet-action-message>
                            <jet-action-message :on="form.processing" class="mr-3">
                                Processing...
                            </jet-action-message>

                            <jet-button class="'opacity-25'">
                                Save
                            </jet-button>
                        </template>

                    </form-section>

                    <section-border/>
                </div>

                <div>
                    <form-section>
                        <template #title>
                            Cover Photo
                        </template>

                        <template #description>
                            This photo will be displayed large, so make sure you choose a high-resolution photo.
                        </template>

                        <template #form>
                            form
                        </template>

                        <template #actions>
                            actions
                        </template>

                    </form-section>

                    <section-border/>
                </div>

                <button type="button" onClick="addItem()"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 justify-self-end">
                    Add a Form
                </button>

                <script type="application/javascript">

                    // Define the addItem() function
                    // to be called through onclick
                    function addItem() {

                        // Get type of element from form
                        // let type = document.getElementById("form-section").value;

                        // Get the text/value for the tag
                        // from the form
                        let value = document.getElementById("value").value;

                        // createElement() is used for
                        // creating a new element
                        // type
                        //     = document.createElement(type);

                        // Use value as textnode in this example
                        // type.appendChild(
                        //     document.createTextNode(value));

                        // Append as child to the parent
                        // tag i.e. ol
                        document.getElementById(
                            "form-section").appendChild(type);
                    }
                </script>

            </div>
        </div>
        <!--        </form>-->
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import SectionBorder from "@/Jetstream/SectionBorder";
import FormSection from "@/Jetstream/FormSection";
import JetLabel from '@/Jetstream/Label';
import JetInput from '@/Jetstream/Input';
import JetButton from '@/Jetstream/Button';
import JetActionMessage from '@/Jetstream/ActionMessage'

export default {
    name: "Create",
    components: {
        AppLayout,
        FormSection,
        JetLabel,
        JetInput,
        JetButton,
        JetActionMessage,
        SectionBorder
    },

    // methods: {
    data() {
        return {
            form: this.$inertia.form({
                title: '',
                type: 'property',
                team_id: 0,
                topic: 'Topic',
            }),
        }
    },
    // }
}
</script>

<style scoped>

</style>
