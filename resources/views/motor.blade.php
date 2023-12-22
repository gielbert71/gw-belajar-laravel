<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPREMACY</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='//fonts.googleapis.com/css?family=Montserrat:thin,extra-light,light,100,200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="supremacy bnp.png" type="image/x-icon">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat';
            color: white;
            background-color: black;


        }

        .bgm {
            background-image: linear-gradient(black, grey);
            background-blend-mode: overlay;
            transition: all 1s;
        }

        .bgmotor {
            background-image: url("{{asset('bgmotor.jpg')}}");
            background-repeat: no-repeat;
            transition: background-image ease 0.5s;
            animation: fadeInOut 1s ease infinite;
        }



        .teksa {
            opacity: 1;
            transition: all ease 1s;
        }

        .bgmotor:hover .bgmotor2 {
            opacity: 1;
        }

        .teks-spr {
            transition: all ease 1s;
        }

        .supremacy_color {
            background: linear-gradient(to right, #6666ff, #b700ff, #ff008c, #d633ff, #6666ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: supremacy_text 6s ease-in-out infinite;
            background-size: 400% 100%;
        }

        @keyframes supremacy_text {

            0%,
            100% {
                background-position: 0 0;
            }

            50% {
                background-position: 100% 0;
            }
        }

        @media screen and (min-width: 1450px) {
            .teks-spr {
                font-size: 150px;
            }

            .produks {
                height: 1000px;
            }

            .klien {
                height: 1000px;
            }
        }

        @media screen and (max-width: 1450px) {
            .teks-spr {
                font-size: 40px;
                margin-right: 5%;
            }
        }

        #scrollToTopBtn {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(to right, #6666ff, #b700ff, #ff008c, #d633ff, #6666ff);
            animation: supremacy_text 6s ease-in-out infinite;
            background-size: 400% 100%;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            transition: all ease 0.5s;
        }

    </style>
</head>

<body>
    <button id="scrollToTopBtn" title="Go to top"><img src="{{asset('arrow-up-solid.svg')}}" alt=""></button>
    <!-- LOGO -->
    <div class="flex justify-around items-center" style="background-color: black;">

        <div style="height: auto; margin-left: 20px"><img src="{{asset('supremacy bnp.png')}}" style="height: auto; width: 60%;" alt="">
        </div>
        <!-- <div class="flex text-3xl font-bold justify-content justify-center">nono</div> -->
        <h1 class="teks-spr font-black justify-center supremacy_color">SUPREMACY</h1>
    </div>
    <!-- END OF LOGO -->

    <!-- NAVBAR -->
    <div>

        <nav class="bg-white border-gray-200 profile" id="profile" style="background-color: black;">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4">
                <!-- <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Supremacy</span>
                </a> -->
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-16 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700" style="background-color: black;">
                        <li>
                            <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600" style="background-color: black;">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#produk" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Products</a>
                                    </li>
                                    <li>
                                        <a href="#klien" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Clients</a>
                                    </li>
                                    <!-- <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li> -->
                                </ul>
                                <!-- <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </div> -->
                            </div>
                        </li>
                        <li>
                            <a href="#profile" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Profile</a>
                        </li>
                        <li>
                            <a href="#galeries" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Galeries</a>
                        </li>
                        <li>
                            <a href="#kontak" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- END OF NAVBAR -->
    <!-- main content -->
    <!-- main profile -->
    <div style="height: 1080px;" class="bgmotor flex justify-items justify-center profile" id="bgElement">

        <div class="bgmotor2 flex justify-content justify-center items-center">
            <div style="padding: 10%; margin-bottom: 8%;">
                <h1 class="text-6xl sm:text-9xl font-black text-center teksa">SUPREMACY</h1>
                <p class="text-center mx-12 mt-8 mb-8 teksa">Not just a motorcycle club; it's a brotherhood forged on
                    the
                    asphalt of endless highways and the camaraderie of like-minded souls. Born out of a passion for the
                    open road and a love for the rumble of engines, Supremacy embodies the spirit of freedom, power, and
                    a relentless pursuit of excellence. Founded in Pontianak, 2023. The best club in town.</p>
            </div>
        </div>
    </div>
    <!-- end of main profile -->
    <!-- GALERIES -->
    <div style="height: 870px;" class="galeries" id="galeries">
        <div class="justify-content justify-center items-center">
            <h1 class="text-6xl sm:text-6xl mt-10 font-black text-center mb-12" style="margin-top: 10%">GALERIES</h1>

            <!-- <h1 class="text-4xl sm:text-6xl mt-10 font-bold text-center">VISION</h1>
            <p class="mt-6 sm:text-xl font-medium">To be a leader in providing unforgettable motorcycle riding experiences, inspiring adventures, and building a strong community.</p>
            <h1 class="text-4xl sm:text-6xl mt-10 font-bold text-center" style="margin-top: 10%;">MISSION</h1>
            <div class="sm:text-xl mt-6 text-center font-medium">

                <p>1. Giving Best Riding Experiences</p>
                <p>2. Companionship</p>
                <p>3. Riding Safety</p>
                <p>4. Social Contribution</p>
                <p>5. Innovation</p>
            </div> -->
            <div id="controls-carousel" class="relative w-full" data-carousel="static" style="margin-top: 3%;">
                <!-- Carousel wrapper -->
                <div class="relative h-96 overflow-hidden rounded-lg md:h-96" style="height: 620px;">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('galeri1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{asset('bgmotor.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('galeri3.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('galeri4.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('galeri5.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 6 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('galeri6.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <br>
    </div>
    <!-- END OF GALERIES -->

    <!-- PRODUCTS -->
    <div style="background-color: black; color: white;" class="items-center produk produks" id="produk">
        <h1 class="text-6xl sm:text-6xl text-center font-black" style="padding-top: 60px;">PRODUCTS</h1>
        <div class="mx-4">
            <div class="flex flex-col md:flex-row justify-center items-center" style="margin-top: 60px;">
                <div style="margin: 40px;">

                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('products/kytnxrace.png')}}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">KYT NX Race
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">One of our best helmets used in
                                race.</p>
                            <p class="font-black text-blue-600 hover:text-blue-300">Order now!</p>
                        </div>
                    </a>

                </div>
                <div style="margin: 40px;">
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('products/agvpista.png')}}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">AGV PISTA
                                GP RR</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">One of our best helmets used in
                                race.</p>
                            <p class="font-black text-blue-600 hover:text-blue-300">Order now!</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center">
                <div style="margin: 40px;">
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="products/helmarai.png" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Arai RX7X
                                SRC</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">One of our best helmets used in
                                race.</p>
                            <p class="font-black text-red-600">Sold out</p>
                        </div>
                    </a>
                </div>
                <div style="margin: 40px;">
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('products/sharkracerpro.png')}}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Shark Race
                                R Pro</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">One of our best helmets used in
                                race.</p>
                            <p class="font-black text-blue-600 hover:text-blue-300">Order now!</p>
                        </div>
                    </a>
                </div>
            </div>
            <h1 class="text-center font-bold text-2xl">MORE PRODUCTS COMING SOON</h1>
        </div>

    </div>

    <!-- END OF PRODUCTS -->

    <!-- Clients -->
    <div style="background-color: black;" class="klien" id="klien">
        <h1 class="font-black text-6xl text-center">OUR CLIENTS</h1>
        <h1 class="text-center">What did they say?</h1>
        <div class="grid mb-8  rounded-lg shadow-sm  md:mb-12 md:grid-cols-2" style="margin-top: 5%; background-color: black;">
            <figure class="flex flex-col items-center justify-center p-8 text-center rounded-t-lg md:rounded-t-none md:rounded-ss-lg " style="background-color: black;">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Safety and Style Combined</h3>
                    <p class="my-4">"I've been a MotoGP racer for years, and the MotoGP helmet is the perfect blend of
                        safety and style. The aerodynamic design not only enhances performance but also looks sleek on
                        the track. Safety is paramount, and this helmet provides the confidence and protection every
                        rider needs."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9" src="{{asset('aleix.jpg')}}" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Aleix Espargaro</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 ">MotoGP Racer</div>
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center md:rounded-se-lg" style="background-color: black;">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Unmatched Visibility and Focus</h3>
                    <p class="my-4">"Riding at high speeds demands a helmet that keeps you comfortable and focused. The
                        MotoGP helmet delivers just that. Its lightweight design and superior ventilation make it a joy
                        to wear even during long rides. It's not just a helmet; it's a companion that enhances the
                        thrill of every ride."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9" src="{{asset('marc.jpg')}}" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Marc Marquez</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">MotoGP Racer</div>
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white  md:rounded-es-lg " style="background-color: black;">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ultimate Comfort on the Fast Lane
                    </h3>
                    <p class="my-4">"Riding at high speeds demands a helmet that keeps you comfortable and focused. The
                        MotoGP helmet delivers just that. Its lightweight design and superior ventilation make it a joy
                        to wear even during long rides. It's not just a helmet; it's a companion that enhances the
                        thrill of every ride."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9" src="{{asset('lorenzo.jpg')}}" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Jorge Lorenzo</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">MotoGP Racer</div>
                    </div>
                </figcaption>
            </figure>
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white" style="background-color: black;">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Precision Engineering at Its Best
                    </h3>
                    <p class="my-4">"As a MotoGP rider, precision and performance are everything. The MotoGP helmet is a
                        testament to exceptional engineering. The attention to detail, from the aerodynamic shape to the
                        advanced materials used, ensures that I can trust my safety gear while pushing the limits on the
                        track. It's a helmet that meets the demands of elite riders."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9" src="{{asset('rossi.jpg')}}" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Valentino Rossi</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">MotoGP Racer</div>
                    </div>
                </figcaption>
            </figure>
        </div>

    </div>
    <!-- end of Clients -->

    <!-- FOOTER & CONTACT -->

    <div class="flex justify-around items-center kontak" style="background-color: black;" id="kontak">

        <div style="height: auto; margin-left: 20px">
            <h1 class="font-bold text-3xl">Contact us at:</h1>
            <ul>
                <li class="font-bold">Email:</li>
                <li>contact@supremacy.id</li>
                <li class="font-bold">Phone:</li>
                <li>
                    <a href="https://wa.me/6281348061047">
                        +62 813-4806-1047
                    </a>
                </li>
                <li class="font-bold">Address</li>
                <li>Jl. Gajah Mada, Pontianak, Kalimantan Barat, Indonesia.</li>
            </ul>
        </div>
        <h1 class="teks-spr font-black justify-center supremacy_color">SUPREMACY</h1>

    </div>


    <!-- END OF FOOTER AND CONTACT -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        const bgElement = document.getElementById('bgElement');
        const imageUrls = ['galeri1.jpg', 'bgmotor.jpg'];
        let currentIndex = 0;

        function changeBackgroundImage() {
            bgElement.style.backgroundImage = `url(${imageUrls[currentIndex]})`;
            currentIndex = (currentIndex + 1) % imageUrls.length;
        }

        // Change the background image every 3 second
        setInterval(changeBackgroundImage, 3000);

        var mybutton = document.getElementById("scrollToTopBtn");

        // When the user scrolls down 540px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 540 || document.documentElement.scrollTop > 540) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", function() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        });
    </script>
</body>

</html>