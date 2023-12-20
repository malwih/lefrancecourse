<aside id="logo-sidebar" class="fixed h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <!-- component -->
    <div class="flex flex-wrap bg-gray-100 w-full h-screen">
        <div class="w-full bg-white rounded p-12 pt-20 shadow-lg">
            <div class="flex items-center space-x-4 p-2 mb-5">
                <img class="w-12 h-12 rounded-full" src="https://play-lh.googleusercontent.com/O8mvDQlw4AwmGfUrh4lviZD_PwwhRHz2etA25F77SbXrm3qEHOt2826aNkKar4D0yw" alt="{{ auth()->user()->name }}">
                <div>
                    <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{ auth()->user()->name }}</h4>
                </div>
            </div>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="/dashboard" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-orange-500 bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/myprofile" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-orange-500 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/mycourses" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-orange-500 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                        </span>
                        <span>My Courses</span>
                    </a>
                </li>
            </ul>



            @can('admin')
            <ul class="space-y-2 text-sm pt-4 mt-4 font-medium border-t border-gray-200 dark:border-gray-700">
                <span>Administrator</span>
                <li>
                    <a href="/dashboard/courses" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:hover:bg-orange-500 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </span>
                        <span>Courses</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/categories" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:hover:bg-orange-500 focus:bg-gray-200 focus:shadow-outline">
                        <span class="text-gray-600">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                            </svg>
                        </span>
                        <span>Category</span>
                    </a>
                </li>
            </ul>
            @endcan

        </div>
    </div>
</aside>