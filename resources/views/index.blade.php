<x-layouts.app>
    <!-- Search Section -->
    <section class="bg-search-section bg-cover bg-center">
        <div class="flex bg-black bg-opacity-60 py-36">
            <div class="container flex flex-col space-y-12 justify-center text-white">
                <!-- Caption -->
                <div class="flex-col text-center space-y-4 text-4xl xl:text-5xl 2xl:text-6xl">
                    <p class="font-bold">Great Job</p>
                    <p class="font-medium">Greater Talent</p>
                </div>
                <!-- Search -->
                <div class="flex space-x-2 w-full 2xl:max-w-2xl mx-auto px-2">
                    <div class="flex-grow">
                        <input
                            class="h-full w-full px-4 py-2 text-gray-600 focus:outline-none focus:ring focus:ring-jh-green-400"
                            type="text" name="search" placeholder="Search for jobs">
                    </div>
                    <div class="flex-none">
                        <button class="h-16 w-20 text-xl bg-jh-green-400"><i class="las la-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Search Section End-->

    <!-- Popular Categories Section -->
    <section class="text-gray-700 mt-12">
        <h2 class="text-center text-3xl font-bold">Popular Categories</h2>

        <div class="py-12">
            <h2 class="text-2xl font-bold">Unstyled</h2>
            <p class="mt-2 text-lg text-gray-600">This is how form elements look out of the box.</p>
            <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <label class="block">
                        <span class="text-gray-700">Full name</span>
                        <input type="text" class="mt-1 block w-full" placeholder="">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Email address</span>
                        <input type="email" class="mt-1 block w-full" placeholder="john@example.com">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">When is your event?</span>
                        <input type="date" class="mt-1 block w-full p-4">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">What type of event is it?</span>
                        <select class="block w-full p-4 mt-1">
                            <option>Corporate event</option>
                            <option>Wedding</option>
                            <option>Birthday</option>
                            <option>Other</option>
                        </select>
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Additional details</span>
                        <textarea class="mt-1 block w-full" rows="3"></textarea>
                    </label>
                    <div class="block">
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="checkbox" checked="">
                                    <span class="ml-2">Email me news and special offers</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- Popular Categories Section End -->

</x-layouts.app>

