<template>
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->

    <!--PATTERN-->
    <!--    <div class="relative py-16 bg-white overflow-hidden">-->
    <!--        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">-->
    <!--            <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">-->
    <!--                <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"-->
    <!--                     viewBox="0 0 404 384">-->
    <!--                    <defs>-->
    <!--                        <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"-->
    <!--                                 patternUnits="userSpaceOnUse">-->
    <!--                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>-->
    <!--                        </pattern>-->
    <!--                    </defs>-->
    <!--                    <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"/>-->
    <!--                </svg>-->
    <!--                <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404"-->
    <!--                     height="384" fill="none" viewBox="0 0 404 384">-->
    <!--                    <defs>-->
    <!--                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"-->
    <!--                                 patternUnits="userSpaceOnUse">-->
    <!--                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>-->
    <!--                        </pattern>-->
    <!--                    </defs>-->
    <!--                    <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>-->
    <!--                </svg>-->
    <!--                <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none"-->
    <!--                     viewBox="0 0 404 384">-->
    <!--                    <defs>-->
    <!--                        <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"-->
    <!--                                 patternUnits="userSpaceOnUse">-->
    <!--                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>-->
    <!--                        </pattern>-->
    <!--                    </defs>-->
    <!--                    <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"/>-->
    <!--                </svg>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--END OF PATTERN-->

    <div class="relative bg-white h-screen">
        <div class="lg:fixed">
            <div class="lg:fixed w-full">
                <img class="h-56 w-full object-cover lg:fixed lg:h-full"
                     src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-1.2.1&ixqx=5XGNHivJgT&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80"
                     alt="">
            </div>
        </div>
        <div
            class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-20 lg:max-w-3xl lg:mx-auto bg-white h-full justify-items-center">


            <h2 class="text-center	text-3xl font-extrabold tracking-tight sm:text-4xl">
                {{ $page['props']['site']['title'] }}
            </h2>
            <p class="text-center	mb-4 mt-4 text-lg text-gray-500 sm:mt-3 sm:mb-4">
                I’d love to hear from you! Send me a message using the forms below, or email me.
            </p>


            <!--LIST OF FORMS-->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <ul v-if="$page['props']['topics'].length">
                <li v-for="(topic) in $page['props']['topics']"
                    class="group">
                    <inertia-link :href="route('site.form.show', {
                                site:  site.uuid,
                                form: topic.uuid
                            })">
                        <div class="mb-5 bg-white shadow sm:rounded-lg sm:mb-4">
                            <div class="px-4 py-5 sm:p-6">
                                <div class="sm:flex sm:items-start sm:justify-between">
                                    <div>
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            {{ topic.text }}
                                        </h3>
                                        <!--                                            <div class="mt-2 max-w-xl text-sm text-gray-500">-->
                                        <!--                                                <p>-->
                                        <!--                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae-->
                                        <!--                                                    voluptatibus corrupti atque repudiandae nam.-->
                                        <!--                                                </p>-->
                                        <!--                                            </div>-->
                                    </div>
                                    <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                                        <button type="button"
                                                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                            Go
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </inertia-link>
                </li>
            </ul>
            <div v-else class="mt-2 max-w-xl text-sm text-gray-500">
                <!--                        <p>-->
                <!--                            No questions-->
                <!--                        </p>-->
            </div>


            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>

</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ['site'],
    name: "Show",
    components: {AppLayout}
}
</script>

<style scoped>

</style>
