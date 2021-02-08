<template>
    <!--    <div id="fixed  bg-gray-100 dark:bg-gray-900"></div>-->
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <!--        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">-->
        <!--        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
        <!--            <inertia-link v-if="$page.props.user" href="/dashboard" class="text-sm text-gray-700 underline">-->
        <!--                Dashboard-->
        <!--            </inertia-link>-->

        <!--            <template v-else>-->
        <!--                <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">-->
        <!--                    Login-->
        <!--                </inertia-link>-->

        <!--                <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">-->
        <!--                    Register-->
        <!--                </inertia-link>-->
        <!--            </template>-->
        <!--        </div>-->

        <!--        Marketing Page-->
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
        <div class="min-h-screen">
            <div class="relative overflow-hidden">
                <main>
                    <div
                        class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                        <div class="mx-auto max-w-7xl lg:px-8">
                            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                                <div
                                    class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                                    <div class="lg:py-24">
                                        <!--                                        <a href="#"-->
                                        <!--                                           class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">-->
                                        <!--                                            <span-->
                                        <!--                                                class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">We're hiring</span>-->
                                        <!--                                            <span class="ml-4 text-sm">Visit our careers page</span>-->
                                        <!--                                            &lt;!&ndash; Heroicon name: solid/chevron-right &ndash;&gt;-->
                                        <!--                                            <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"-->
                                        <!--                                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">-->
                                        <!--                                                <path fill-rule="evenodd"-->
                                        <!--                                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"-->
                                        <!--                                                      clip-rule="evenodd"/>-->
                                        <!--                                            </svg>-->
                                        <!--                                        </a>-->
                                        <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                            <span class="block">A better way to</span>
                                            <span class="block text-indigo-400">promote your property</span>
                                        </h1>
                                        <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                            Own Your Leads offers property websites that
                                            include mandatory contact fields, ensuring you always stay on top of leads.
                                        </p>
                                        <div class="mt-10 sm:mt-12">
                                            <form @submit.prevent="form.post('/waitlist')"
                                                  class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                                <div class="sm:flex">
                                                    <div class="min-w-0 flex-1 text-white">
                                                        <label for="email" class="sr-only">Email address</label>
                                                        <input id="email" type="email" placeholder="Enter your email"
                                                               v-model="form.email"
                                                               class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">
                                                        <div class="mt-3 text-red-600" v-if="form.errors.email">
                                                            {{ form.errors.email }}
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 sm:mt-0 sm:ml-3">
                                                        <button type="submit"
                                                                class="block w-full py-3 px-4 rounded-md shadow bg-indigo-500 text-white font-medium hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">
                                                            <template v-if="form.processing">
                                                                <div class="flex items-center">
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
                                                                    <span>Working on it...</span>
                                                                </div>
                                                            </template>

                                                            <template v-else-if="form.recentlySuccessful">
                                                                All Set!
                                                            </template>

                                                            <template v-else>
                                                                Keep Me in the Loop!
                                                            </template>
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="mt-3 text-sm text-gray-300 sm:mt-4">Join our mailing list to
                                                    be the first to know when we launch. Your email will not be shared
                                                    with anyone.</p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                        <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                                        <img
                                            class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                            src="https://tailwindui.com/img/component-images/cloud-illustration-indigo-400.svg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--                    Content-->
                    <!--
                      This example requires Tailwind CSS v2.0+

                      This example requires some changes to your config:

                      ```
                      // tailwind.config.js
                      module.exports = {
                        // ...
                        plugins: [
                          // ...
                          require('@tailwindcss/typography'),
                        ]
                      }
                      ```
                    -->
                    <div class="relative py-16 bg-white overflow-hidden">
                        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
                            <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                                <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384"
                                     fill="none" viewBox="0 0 404 384">
                                    <defs>
                                        <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20"
                                                 height="20" patternUnits="userSpaceOnUse">
                                            <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                                  fill="currentColor"/>
                                        </pattern>
                                    </defs>
                                    <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)"/>
                                </svg>
                                <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32"
                                     width="404" height="384" fill="none" viewBox="0 0 404 384">
                                    <defs>
                                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20"
                                                 height="20" patternUnits="userSpaceOnUse">
                                            <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                                  fill="currentColor"/>
                                        </pattern>
                                    </defs>
                                    <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)"/>
                                </svg>
                                <svg class="absolute bottom-12 left-full transform translate-x-32" width="404"
                                     height="384" fill="none" viewBox="0 0 404 384">
                                    <defs>
                                        <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20"
                                                 height="20" patternUnits="userSpaceOnUse">
                                            <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                                  fill="currentColor"/>
                                        </pattern>
                                    </defs>
                                    <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)"/>
                                </svg>
                            </div>
                        </div>
                        <div class="relative px-4 sm:px-6 lg:px-8">
                            <div class="text-lg max-w-prose mx-auto">
                                <h1>
                                    <span
                                        class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">Introducing</span>
                                    <span
                                        class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Own Your Leads</span>
                                </h1>
                                <p class="mt-8 text-xl text-gray-500 leading-8">Own Your Leads is a homegrown lead-gen
                                    software focused on the realtor experience. For years, we've worked with countless
                                    realtors and have seen firsthand how challenging and expensive generating leads can
                                    be. Now, we're ready to provide our own option by combining lead-gen with stunning
                                    property websites</p>
                            </div>
                            <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                                <p>Faucibus commodo massa rhoncus, volutpat. <strong>Dignissim</strong> sed <strong>eget
                                    risus enim</strong>. Mattis mauris semper sed amet vitae sed turpis id. Id dolor
                                    praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit.
                                    Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. <a
                                        href="#">Mattis mauris semper</a> sed amet vitae sed turpis id.</p>
                                <ul>
                                    <li>Quis elit egestas venenatis mattis dignissim.</li>
                                    <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
                                    <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
                                </ul>
                                <p>Quis semper vulputate aliquam venenatis egestas sagittis quisque orci. Donec commodo
                                    sit viverra aliquam porttitor ultrices gravida eu. Tincidunt leo, elementum mattis
                                    elementum ut nisl, justo, amet, mattis. Nunc purus, diam commodo tincidunt turpis.
                                    Amet, duis sed elit interdum dignissim.</p>
                                <h2>From beginner to expert in 30 days</h2>
                                <p>Id orci tellus laoreet id ac. Dolor, aenean leo, ac etiam consequat in. Convallis
                                    arcu ipsum urna nibh. Pharetra, euismod vitae interdum mauris enim, consequat
                                    vulputate nibh. Maecenas pellentesque id sed tellus mauris, ultrices mauris.
                                    Tincidunt enim cursus ridiculus mi. Pellentesque nam sed nullam sed diam turpis
                                    ipsum eu a sed convallis diam.</p>
                                <blockquote>
                                    <p>Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed
                                        consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu
                                        morbi.</p>
                                </blockquote>
                                <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis
                                    mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio
                                    penatibus risus viverra tellus varius sit neque erat velit.</p>
                                <figure>
                                    <img class="w-full rounded-lg"
                                         src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=facearea&w=1310&h=873&q=80&facepad=3"
                                         alt="" width="1310" height="873">
                                    <figcaption>Sagittis scelerisque nulla cursus in enim consectetur quam.</figcaption>
                                </figure>
                                <h2>Everything you need to get up and running</h2>
                                <p>Purus morbi dignissim senectus mattis <a href="#">adipiscing</a>. Amet, massa quam
                                    varius orci dapibus volutpat cras. In amet eu ridiculus leo sodales cursus
                                    tristique. Tincidunt sed tempus ut viverra ridiculus non molestie. Gravida quis
                                    fringilla amet eget dui tempor dignissim. Facilisis auctor venenatis varius nunc,
                                    congue erat ac. Cras fermentum convallis quam.</p>
                                <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis
                                    mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio
                                    penatibus risus viverra tellus varius sit neque erat velit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- More main page content here... -->
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="relative bg-white py-16 sm:py-24 lg:py-32">
                        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                            <h2 class="text-base font-semibold tracking-wider text-indigo-600 uppercase">Deploy
                                faster</h2>
                            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                                Everything you need to deploy your app
                            </p>
                            <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
                                Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis
                                nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
                            </p>
                            <div class="mt-12">
                                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                                    <div class="pt-6">
                                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                            <div class="-mt-6">
                                                <div>
                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/cloud-upload -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                  </svg>
                </span>
                                                </div>
                                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Push
                                                    to Deploy</h3>
                                                <p class="mt-5 text-base text-gray-500">
                                                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                                    magna sit morbi lobortis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                            <div class="-mt-6">
                                                <div>
                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/lock-closed -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                  </svg>
                </span>
                                                </div>
                                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">SSL
                                                    Certificates</h3>
                                                <p class="mt-5 text-base text-gray-500">
                                                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                                    magna sit morbi lobortis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                            <div class="-mt-6">
                                                <div>
                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/refresh -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                  </svg>
                </span>
                                                </div>
                                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Simple
                                                    Queues</h3>
                                                <p class="mt-5 text-base text-gray-500">
                                                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                                    magna sit morbi lobortis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                            <div class="-mt-6">
                                                <div>
                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/shield-check -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                  </svg>
                </span>
                                                </div>
                                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">
                                                    Advanced Security</h3>
                                                <p class="mt-5 text-base text-gray-500">
                                                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                                    magna sit morbi lobortis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                            <div class="-mt-6">
                                                <div>
                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/cog -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
                </span>
                                                </div>
                                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">
                                                    Powerful API</h3>
                                                <p class="mt-5 text-base text-gray-500">
                                                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                                    magna sit morbi lobortis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-6">
                                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                            <div class="-mt-6">
                                                <div>
                <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/server -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                  </svg>
                </span>
                                                </div>
                                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">
                                                    Database Backups</h3>
                                                <p class="mt-5 text-base text-gray-500">
                                                    Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et
                                                    magna sit morbi lobortis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--                    Final COntact Us-->
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
                    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
                        <div class="relative max-w-xl mx-auto">
                            <svg class="absolute left-full transform translate-x-1/2" width="404" height="404"
                                 fill="none" viewBox="0 0 404 404" aria-hidden="true">
                                <defs>
                                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20"
                                             height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                              fill="currentColor"/>
                                    </pattern>
                                </defs>
                                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"/>
                            </svg>
                            <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404"
                                 height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                                <defs>
                                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20"
                                             height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                              fill="currentColor"/>
                                    </pattern>
                                </defs>
                                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"/>
                            </svg>
                            <div class="text-center">
                                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                    Stay Notified
                                </h2>
                                <p class="mt-4 text-lg leading-6 text-gray-500">
                                    Be the first to know when Own Your Leads officially launches.
                                </p>
                            </div>
                            <div class="mt-12">
                                <form action="#" method="POST"
                                      class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <div class="mt-1">
                                            <input type="text" name="first_name" id="first_name"
                                                   autocomplete="given-name"
                                                   class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <div class="mt-1">
                                            <input type="text" name="last_name" id="last_name"
                                                   autocomplete="family-name"
                                                   class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="company"
                                               class="block text-sm font-medium text-gray-700">Company</label>
                                        <div class="mt-1">
                                            <input type="text" name="company" id="company" autocomplete="organization"
                                                   class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <div class="mt-1">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                   class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                                                <button type="button"
                                                        class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                        aria-pressed="false">
                                                    <span class="sr-only">Agree to policies</span>
                                                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                                    <span aria-hidden="true"
                                                          class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                                </button>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-base text-gray-500">
                                                    By selecting this, you agree to the
                                                    <a href="#" class="font-medium text-gray-700 underline">Privacy
                                                        Policy</a>
                                                    and
                                                    <a href="#" class="font-medium text-gray-700 underline">Cookie
                                                        Policy</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <button type="submit"
                                                class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Let's talk
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </main>
            </div>
        </div>

    </div>
</template>

<style scoped>
.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
    }

    .dark\:bg-gray-900 {
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--tw-border-opacity));
    }

    .dark\:text-white {
        color: #fff;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }
}
</style>

<script>
export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    data() {
        return {
            form: this.$inertia.form({
                email: ''
            }),
        }
    },
}
</script>
