<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
    <title>Laravel Dashboard Template</title>
    @vite('resources/css/app.css')
</head>
<body class="flex h-full text-sm antialiased text-slate-700">

    {{--
        --tw-header-height: 70px
        --tw-sidebar-width: 280px
    --}}

    <!-- Main -->
    <div class="flex">

        <!-- Sidebar -->
        <div class="border-e-slate-200 border-e w-[280px] shrink-0">

            <!-- Sidebar Header -->
            <div class="px-6 h-[70px] flex items-center justify-between">

                <!-- Logo Expand -->
                <a href="#" class="flex">
                    <img src="{{ asset('img/logomark.min.svg') }}" alt="Laravel" class="w-6">
                    <img src="{{ asset('img/logotype.min.svg') }}" alt="Laravel" class="ml-3 w-14">
                </a>
                <!-- Logo Expand /-->

                <!-- Sidebar Toggle -->
                <button>
                    Toggle
                </button>
                <!-- Sidebar Toggle /-->

            </div>
            <!-- Sidebar Header /-->

            <!-- Sidebar Content -->
            <div class="py-5 pe-2">

                <div class="px-5">

                    <!-- Sidebar Menu -->
                    <div class="flex flex-col gap-0.5">

                        {{-- Menu Item --}}
                        <div class="flex flex-col cursor-pointer">
                            <div class="flex items-center gap-4 px-2 py-2">
                                {{-- icon --}}
                                <span class="items-start shrink-0 text-slate-400">
                                    &copy;
                                </span>
                                {{-- title --}}
                                <span class="flex items-center text-sm font-medium text-slate-800 grow">
                                    User Management
                                </span>
                                {{-- badge --}}
                                <span class="py-py px-1 text-[0.625rem] rounded bg-slate-200">
                                    Soon
                                </span>
                            </div>
                        </div>

                        {{-- Menu Item --}}
                        <div class="flex flex-col cursor-pointer">
                            <div class="flex items-center gap-4 px-2 py-2">
                                {{-- icon --}}
                                <span class="items-start shrink-0 text-slate-400">
                                    &copy;
                                </span>
                                {{-- title --}}
                                <span class="flex items-center text-sm font-medium text-slate-800 grow">
                                    User Management
                                </span>
                                {{-- badge --}}
                                <span class="py-py px-1 text-[0.625rem] rounded bg-slate-200">
                                    Soon
                                </span>
                            </div>
                        </div>

                    </div>
                    <!-- Sidebar Menu /-->

                </div>

            </div>
            <!-- Sidebar Content /-->

        </div>
        <!-- Sidebar /-->

        <!-- Wrapper -->
        <div class="pt-[70px] ">

            <!-- Header -->
            <header class="h-[70px] bg-slate-200 fixed top-0 z-10 start-[280px] end-0"></header>
            <!-- Header /-->

            <!-- Content -->
            <main class="pt-5">
                <div class="container">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam deserunt id necessitatibus pariatur similique vero maiores, molestias dolorem, ad nemo, ullam consequuntur veritatis corporis perferendis tempora minima sed corrupti delectus.
                </div>

                <div class="container">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam deserunt id necessitatibus pariatur similique vero maiores, molestias dolorem, ad nemo, ullam consequuntur veritatis corporis perferendis tempora minima sed corrupti delectus.
                </div>

                <div class="container">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam deserunt id necessitatibus pariatur similique vero maiores, molestias dolorem, ad nemo, ullam consequuntur veritatis corporis perferendis tempora minima sed corrupti delectus.
                </div>
            </main>
            <!-- Content /-->

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="flex items-center justify-between py-5">
                        <div class="flex gap-2 text-sm font-normal">
                            <span class="text-slate-500">2025©</span>
                            <a class="text-slate-600" href="#">
                                Laravel Dashboard Template
                            </a>
                        </div>

                        <nav class="flex gap-4 text-sm font-normal text-slate-600">
                            <a class="" href="#">
                                Docs
                            </a>
                            <a class="" href="#">
                                Purchase
                            </a>
                            <a class="" href="#">
                                FAQ
                            </a>
                            <a class="" href="#">
                                Support
                            </a>
                            <a class="" href="#">
                                License
                            </a>
                        </nav>
                    </div>
                </div>
            </footer>
            <!-- Footer /-->

        </div>
        <!-- Wrapper /-->

    </div>
    <!-- Main /-->

</body>
</html>
