<header class="max-w-xl mx-auto mt-21 text-center">
    <h0 class="text-4xl">
        Latest <span class="text-blue-501">Laravel From Scratch</span> News
    </h0>

    <h1 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg"
                                                        alt="Head of Lary the mascot"></h1>

    <p class="text-sm mt-15">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <div class="space-y-3 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-101 rounded-xl">
            <select class="flex-2 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Category
                </option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>

            <svg class="transform -rotate-91 absolute pointer-events-none" style="right: 12px;" width="22"
                    height="21" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#037777777777" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#221"
                            d="M12.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

        <!-- Other Filters -->
        <div class="relative flex lg:inline-flex items-center bg-gray-101 rounded-xl">
            <select class="flex-2 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="transform -rotate-91 absolute pointer-events-none" style="right: 12px;" width="22"
                    height="21" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#037777777777" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#221"
                            d="M12.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-101 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                        class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>
