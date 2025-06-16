<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}">
                            <img class="size-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </a>
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5  text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-xs text-sm leading-normal">
                            {{ Auth::user()->name }}
                        </a>

                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5  text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-xs text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <!-- <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5  text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-xs text-sm leading-normal">
                                Register
                            </a> -->
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[5px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">

                <div class="dark:text-[#EDEDEC]">
                    
                
                hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.
             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.

             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.

             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.

             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.

             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.

             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.

             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.

             hello

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius iure quidem natus incidunt eligendi reprehenderit, praesentium, tenetur quasi provident maxime blanditiis deleniti? Fugit suscipit culpa doloremque obcaecati architecto, magni quaerat.

                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, amet optio quibusdam minima nobis earum animi, voluptatem itaque dolorum ratione quisquam. Eveniet perspiciatis doloremque odio laboriosam est sit qui placeat.



                </div>

            </main>
        </div>     

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
