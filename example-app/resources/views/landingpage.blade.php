<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <div class="w-full h-40 bg-blue-500 sticky top-0">
            <div class="flex justify-between w-full h-full ">
                <div class=" ml-20">
                    <h1 class="text-7xl font-bold text-[#F5F5DC] mt-16">EduTrack</h1>
                </div>
                <div class="align-center mr-20">
                    <a href="">
                        <div class="w-52 h-20 border-2 border-white rounded-2xl mt-14 shadow-md ">
                            <h3 class="text-xl font-bold text-white text-center mt-5 font-monserrat">Go to app</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full bg-[#015483] border-box">
            <h3 class="text-white text-2xl ml-20 py-3 font-monserrat">Track your activity here!</h3>
        </div>
    </header>

    <section>
        <div class="flex pl-20">
            <div class="w-1/2">
                <div class="w-[80%] ">
                    <h2 class="mt-20 text-4xl font-semibold text-primary font-monserrat">Raih Informasi dan Perkembangan
                        akademik anak di sekolah secara REAL-TIME.</h2>
                </div>
                <div class="flex">
                    <button class="w-52 h-16 border-2 border-white bg-primary rounded-2xl mt-14 shadow-md mr-5">
                        <h4 class="font-monserrat text-white text-md pr-20 pb-3">Get Started</h4>
                    </button>
                    <button class="w-52 h-16 border-2 border-primary bg-white rounded-2xl mt-14 shadow-md">
                        <h4 class="font-monserrat text-primary text-md pr-20 pb-3">Learn More</h4>
                    </button>
                </div>
                <div class="flex space-x-20 mt-10">
                    <div>
                        <h1 class="text-primary text-3xl font-monserrat font-semibold mx-auto text-center">100K+</h1>
                        <p class="text-primary text-lg font-monserrat font-semibold">Student</p>
                    </div>
                    <div>
                        <h1 class="text-primary text-3xl font-monserrat font-semibold text-center">1K+</h1>
                        <p class="text-primary text-lg font-monserrat font-semibold">Indicators</p>
                    </div>
                    <div>
                        <h1 class="text-primary text-3xl font-monserrat font-semibold text-center">100+</h1>
                        <p class="text-primary text-lg font-monserrat font-semibold">Student</p>
                    </div>
                </div>
            </div>
            <div class="w-1/2 ">
            <div class="w-[75%] h-[75%] ">
                <img class="object-cover" src="hero.png" alt="">
            </div>
            </div>
        </div>
    </section>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#007EC5',
                    }
                }
            }
        }
    </script>
</body>

</html>
