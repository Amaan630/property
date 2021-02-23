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
    <div class="relative bg-white">
        <div class="lg:absolute lg:inset-0">
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full min-h-screen object-cover lg:absolute lg:h-full"
                     src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-1.2.1&ixqx=5XGNHivJgT&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80"
                     alt="">
            </div>
        </div>
        <div class="relative pt-12 pb-16 px-4 sm:pt-16 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2">
            <div class="lg:pr-8">
                <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                        {{ $page['props']['title'] }}
                    </h2>
                    <!--                    <p class="mt-4 text-lg text-gray-500 sm:mt-3">-->
                    <!--                        We’d love to hear from you! Send us a message using the form opposite, or email us. We’d love to-->
                    <!--                        hear from you! Send us a message using the form opposite, or email us.-->
                    <!--                    </p>-->
                    <form action="#" method="POST" v-if="$page['props']['questions'].length"
                          class="mt-9 block w-full space-y-0 sm:grid sm:grid-cols-1 sm:gap-y-6 sm:space-y-0 lg:grid-cols-1">


                        <ul class="block w-full space-y-0 sm:grid sm:grid-cols-1 sm:gap-x-6 sm:gap-y-6 sm:space-y-0 lg:grid-cols-1 lg:gap-x-8">
                            <li v-for="question in $page['props']['questions']" class="group">
                                <div class="sm:col-span-2">
                                    <label for="email"
                                           class="block text-sm font-medium text-gray-700">{{ question.text }}</label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email"
                                               class="block w-full shadow-sm sm:text-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="text-right sm:col-span-2">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit
                            </button>
                        </div>

                    </form>

                    <p v-else class="mt-4 text-lg text-gray-500 sm:mt-3">
                        We don't have any questions for you right now, but keep in touch!
                    </p>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Form.vue"
}
</script>

<style scoped>

</style>
