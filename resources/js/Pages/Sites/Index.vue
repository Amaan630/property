<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Sites
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
                <div class="space-y-12">
                    <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">


                        <!--CREATE BUTTON-->
                        <!--                        <inertia-link :href="route('site.create')">-->
                        <button @click="isOpen=!isOpen"
                                class="focus:outline-none aspect-w-3 aspect-h-2 rounded-lg justify-center items-center text-lg leading-6 font-medium">
                            <div class="space-y-4">
                                <div
                                    class="aspect-w-3 aspect-h-2 border-2 border-gray-300 rounded-lg justify-center items-center border-dashed	">
                                    <!--                                    <span-->
                                    <!--                                        class="text-9xl text-gray-300 align-bottom leading-loose w-max text-center">&#43;</span>-->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-8 -8 40 40"
                                         stroke="currentColor" class="text-gray-300">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    <!--                                    <img class="object-cover shadow-lg rounded-lg"-->
                                    <!--                                         src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/suburban-house-royalty-free-image-1584972559.jpg?crop=1.00xw:0.752xh;0,0.120xh&resize=1200:*"-->
                                    <!--                                         alt="">-->
                                </div>

                                <div class="space-y-2">
                                    <div class="text-lg leading-6 font-medium space-y-1">
                                        <h3 class="text-left">Create a New Site</h3>
                                        <!--                                        <p class="text-indigo-600">It Takes Only Minutes!</p>-->
                                    </div>
                                </div>
                            </div>
                        </button>


                        <!-- MODAL-->
                        <!-- This example requires Tailwind CSS v2.0+ -->
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
                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
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
                                             role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                            <div>
                                                <div
                                                    class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-purple-100">
                                                    <!-- Heroicon name: outline/check -->
                                                    <svg class="h-6 w-6 text-purple-600"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                         aria-hidden="true">
                                                        <!--                                                    <path stroke-linecap="round" stroke-linejoin="round"-->
                                                        <!--                                                          stroke-width="2"-->
                                                        <!--                                                          d="M5 13l4 4L19 7"/>-->
                                                        <!--                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                                        <!--                                                    </svg>-->
                                                    </svg>
                                                </div>
                                                <div class="mt-3 text-center sm:mt-5">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                        id="modal-headline">
                                                        Create a New Site
                                                    </h3>
                                                    <div class="mt-2">
                                                        <div class="col-span-6 sm:col-span-4">
                                                            <jet-label for="name" value="Name"/>
                                                            <jet-input id="name" type="text" v-model="form.title"
                                                                       :placeholder="$page['props']['name']"
                                                                       class="mt-1 block w-full"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <form @submit.prevent="form.post('/site/new')">
                                                <div
                                                    class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">

                                                    <!--LOADING-->
                                                    <template v-if="form.processing">
                                                        <!--                                                    <span class="sm:ml-3">-->
                                                        <button type="submit"
                                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
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
                                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
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


                        <!--LIST OF SITES-->
                        <li v-for="site in $page['props']['sites']" class="group">
                            <inertia-link :href="route('site.edit', site.uuid)">
                                <div class="space-y-4">
                                    <div class="aspect-w-3 aspect-h-2">
                                        <!--                                             src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/suburban-house-royalty-free-image-1584972559.jpg?crop=1.00xw:0.752xh;0,0.120xh&resize=1200:*"-->
                                        <img class="object-cover shadow-lg rounded-lg"
                                             src="https://png.pngtree.com/thumb_back/fh260/background/20190828/pngtree-dark-vector-abstract-background-image_302715.jpg"
                                             alt="">
                                    </div>

                                    <div class="space-y-2">
                                        <div class="text-lg leading-6 font-medium space-y-1">
                                            <h3>{{ site.title }}</h3>
                                            <p class="text-indigo-600">
                                                {{ site.type == "home" ? "Linktree Homepage" : "Property Site" }}</p>
                                        </div>
                                        <!--                                        <ul class="flex space-x-5">-->
                                        <!--                                            <li>-->
                                        <!--                                                <a href="#" class="text-gray-400 hover:text-gray-500">-->
                                        <!--                                                    <span class="sr-only">Twitter</span>-->
                                        <!--                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"-->
                                        <!--                                                         aria-hidden="true">-->
                                        <!--                                                        <path-->
                                        <!--                                                            d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>-->
                                        <!--                                                    </svg>-->
                                        <!--                                                </a>-->
                                        <!--                                            </li>-->
                                        <!--                                            <li>-->
                                        <!--                                                <a href="#" class="text-gray-400 hover:text-gray-500">-->
                                        <!--                                                    <span class="sr-only">LinkedIn</span>-->
                                        <!--                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"-->
                                        <!--                                                         aria-hidden="true">-->
                                        <!--                                                        <path fill-rule="evenodd"-->
                                        <!--                                                              d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"-->
                                        <!--                                                              clip-rule="evenodd"/>-->
                                        <!--                                                    </svg>-->
                                        <!--                                                </a>-->
                                        <!--                                            </li>-->
                                        <!--                                        </ul>-->
                                    </div>
                                </div>
                            </inertia-link>
                        </li>

                        <!-- More items... -->
                    </ul>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import JetLabel from "@/Jetstream/Label";
import JetInput from "@/Jetstream/Input";

export default {
    components: {
        AppLayout,
        JetLabel,
        JetInput,
    },

    data: function () {
        return {
            isOpen: false,

            form: this.$inertia.form({
                title: '',
                type: 'home',
                team_id: 1,
                // topic: 'Topic',
            }),
        };
    }

    // data() {
    //     return {
    //         form: this.$inertia.form({
    //             title: '',
    //             type: 'property',
    //             team_id: 0,
    //             topic: 'Topic',
    //         }),
    //     }
    // },
}
</script>

<style scoped>

</style>
