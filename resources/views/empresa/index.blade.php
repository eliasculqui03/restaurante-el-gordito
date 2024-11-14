@extends('layouts.landing')



@section('content')
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white sm:text-4xl">
                    Ready to hire us?
                </h1>
                <p class="mt-1 text-gray-600 dark:text-gray-200">
                    Tell us your story and we'll be in touch.
                </p>
            </div>

            <div class="mt-12">
                <!-- Form -->
                <form>
                    <div class="grid gap-4 lg:gap-6">
                        <!-- Grid -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                            <div>
                                <label for="hs-firstname-hire-us-2"
                                    class="block mb-2 text-sm text-gray-800 dark:text-neutral-200">First
                                    Name</label>
                                <input type="text" name="hs-firstname-hire-us-2" id="hs-firstname-hire-us-2"
                                    class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-gray-700 dark:text-gray-400">
                            </div>

                            <div>
                                <label for="hs-firstname-hire-us-2"
                                    class="block mb-2 text-sm text-gray-800 dark:text-neutral-200">Last
                                    Name</label>
                                <input type="text" name="hs-lastname-hire-us-2" id="hs-lastname-hire-us-2"
                                    class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="hs-work-email-hire-us-2"
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Work Email</label>
                            <input type="email" name="hs-work-email-hire-us-2" id="hs-work-email-hire-us-2"
                                autocomplete="email"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        </div>

                        <!-- Grid -->
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                            <div>
                                <label for="hs-company-hire-us-2"
                                    class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Company</label>
                                <input type="text" name="hs-company-hire-us-2" id="hs-company-hire-us-2"
                                    class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            </div>

                            <div>
                                <label for="hs-company-website-hire-us-2"
                                    class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Company
                                    Website</label>
                                <input type="text" name="hs-company-website-hire-us-2" id="hs-company-website-hire-us-2"
                                    class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="hs-about-hire-us-2"
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Details</label>
                            <textarea id="hs-about-hire-us-2" name="hs-about-hire-us-2" rows="4"
                                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"></textarea>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <!-- Checkbox -->
                    <div class="flex mt-3">
                        <div class="flex">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="shrink-0 mt-1.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-800">
                        </div>
                        <div class="ms-3">
                            <label for="remember-me" class="text-sm text-gray-600 dark:text-gray-400">By submitting this
                                form I have read and acknowledged the <a
                                    class="font-medium text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                    href="#">Privacy policy</a></label>
                        </div>
                    </div>
                    <!-- End Checkbox -->

                    <div class="grid mt-6">
                        <button type="submit"
                            class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white transition-all bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 dark:focus:ring-offset-gray-800">Send
                            inquiry</button>
                    </div>

                    <div class="mt-3 text-center">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            We'll get back to you in 1-2 business days.
                        </p>
                    </div>
                </form>
                <!-- End Form -->
            </div>

        </div>
    </div>
@endsection
