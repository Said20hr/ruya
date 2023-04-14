<x-guest-layout title="Motion">
    <div class="w-full min-h-screen xl:px-10 xl:py-12 p-2 container">
        <div class="w-full text-center mb-12">
            <div class="grid xl:grid-cols-3 gap-12">
                <div class="relative flex flex-col min-w-0 break-words w-full shadow-lg rounded-lg bg-black dark:bg-white">
                    <img alt="..." src="{{asset('assets/images/sensei.gif')}}" class="w-full align-middle border rounded-t-lg">
                    <blockquote class="relative p-6 mb-4">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height:95px;top:-94px">
                            <polygon points="-30,95 583,95 583,65" class="dark:text-white text-black fill-current "></polygon>
                        </svg>
                        <h4 class="2xl:text-2xl text-xl font-bold dark:text-slate-900 text-white">{{__('2D & 3D Motion Design')}}</h4>
                        <p class="text-md font-light mt-2 dark:text-slate-700 text-white">
                        {{__('2D & 3D motion design services bring your ideas to life with moving graphics and animations. Our professional designers create stunning visuals to convey your message and tell your story.')}}
                        </p>
                    </blockquote>
                </div>
                <div class="relative flex flex-col min-w-0 break-words w-full shadow-lg rounded-lg bg-black dark:bg-white">
                    <img alt="..."
                         src="{{asset('assets/images/dev.webp')}}" class="w-full align-middle border rounded-t-lg">
                    <blockquote class="relative p-6 mb-4">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height:95px;top:-94px">
                            <polygon points="-30,95 583,95 583,65" class="dark:text-white text-dark fill-current "></polygon>
                        </svg>
                        <h4 class="2xl:text-2xl text-xl font-bold dark:text-slate-900 text-white">{{__('Software development')}}</h4>
                        <p class="text-md font-light mt-2 dark:text-slate-700 text-white">
                        {{__('From web and mobile app development to bespoke software solutions, we bring your ideas to life with cutting-edge technology.')}}
                        </p>
                    </blockquote>
                </div>
                <div class="relative flex flex-col min-w-0 break-words w-full shadow-lg rounded-lg bg-black dark:bg-white">
                    <img alt="..."
                         src="{{asset('assets/images/photography.gif')}}" class="w-full align-middle border rounded-t-lg">
                    <blockquote class="relative p-6 mb-4">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height:95px;top:-94px">
                            <polygon points="-30,95 583,95 583,65" class="dark:text-white text-dark  fill-current "></polygon>
                        </svg>
                        <h4 class="2xl:text-2xl text-xl font-bold dark:text-slate-900 text-white">{{__('Visuals & photography')}}</h4>
                        <p class="text-md font-light mt-2 dark:text-slate-700 text-white">
                           {{__('Capture the essence of your brand with our expert visual and photographic services. From design to final product, we bring your vision to life.')}}</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
