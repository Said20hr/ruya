<div class="dark:bg-dark ">
    <!-- Mobile & Responsive Screen -->
    <header class="xl:hidden
    {{ config('app.locale') == 'ar' ? "border-l" : 'border-r' }}
    fixed left-O top-0 xl:max-w-52 w-1/2 py-4 xl:px-6 px-4 h-full z-50 transition-all ease-soft-in-out duration-600 dark:bg-gray-900 bg-white border-slate-200 dark:border-slate-800"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-x-100"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 -translate-x-100"
            x-show="OpenNavResponsive">
        <nav class="sidebar " >
            <div class="navbar-collapse z-50" id="navbar-collapse">
                <div class="xl:block hidden">
                    <a class="site-brand" href="{{route('visuals')}}" title="home">
                        <img class="object-fit mb-4 2xl:w-24 xl:w-20 w-16" alt="" src="{{asset('assets/icons/Ruya Branding full Logo.png')}}">
                        <h6 class="text-black font-semibold">Ruya Studio</h6>
                    </a>
                    <p class="2xl:my-4 lg:text-xxs xl:text-sm">{{__('Mastering Motion Design & Software Development. Delivering captivating animations & innovative digital solutions.')}}</p>
                </div>
                <ul class="xl:pt-4 pt-16 px-0">
                    <li class="py-3 px-2 hover:bg-gray-200 dark:hover:bg-gray-700"><a href="{{route('visuals')}}" title="Visuals" class="text-base {{ Route::currentRouteName() == 'visuals' ? 'font-bold text-black dark:text-white' : 'text-gray-800 dark:text-gray-100' }}"><i class="fa fa-image mx-2"></i> Visuals</a></li>
                    <li class="py-3 px-2 hover:bg-gray-200 dark:hover:bg-gray-700"><a href="{{route('motion')}}" title="Motions" class="text-base {{ Route::currentRouteName() == 'motion' ? 'font-bold text-black dark:text-white' : 'text-gray-800 dark:text-gray-100' }}"><i class="fa fa-spinner mx-2"></i> Motions</a></li>
                    <li class="py-3 px-2 hover:bg-gray-200 dark:hover:bg-gray-700"><a href="{{route('dev')}}" title="Development" class="text-base {{ Route::currentRouteName() == 'dev' ? 'font-bold text-black dark:text-white' : 'text-gray-800 dark:text-gray-100' }}"><i class="fa fa-code mx-2"></i> Development</a></li>
                    <li class="py-3 px-2 hover:bg-gray-200 dark:hover:bg-gray-700"><a href="{{route('animation')}}" title="Development" class="text-base {{ Route::currentRouteName() == 'animation' ? 'font-bold text-black dark:text-white' : 'text-gray-800 dark:text-gray-100' }}"><i class="fa fa-cube mx-2"></i>3D Animation</a></li>
                    <li class="py-3 px-2 hover:bg-gray-200 dark:hover:bg-gray-700"><a href="{{route('services')}}" class="text-base dark:text-gray-100 {{ Route::currentRouteName() == 'services' ? 'font-bold text-black dark:text-white' : 'text-gray-800 dark:text-gray-100'  }}"><i class="fa fa-handshake-o mx-2"></i> Services</a></li>
                    <li class="py-3 px-2 hover:bg-gray-200 dark:hover:bg-gray-700"><a href="{{route('contact')}}" title="Contact" class="text-base {{ Route::currentRouteName() == 'contact' ? 'font-bold text-black dark:text-white' : 'text-gray-800 dark:text-gray-100' }}" ><i class="fa fa-envelope mx-2"></i> Contact Us</a></li>
                </ul>
                <div class="py-4 px-1 text-black" x-show="OpenNavResponsive" x-cloak="">
                    <div class="relative inline-block w-20 select-none" x-data="{ toggle: darkMode }"
                         @click.prevent="toggle = ! toggle" x-on:click="darkMode =! darkMode">
                        <div :class="{'translate-x-full': toggle}"
                             class="absolute z-10 border-gray-800 block w-10 h-8 px-1 rounded-full bg-white border-4 cursor-pointer transition duration-500 transform"></div>
                        <div class="overflow-hidden bg-gray-800 h-8 w-full rounded-full cursor-pointer flex justify-between items-center p-px p-0.5">
                            <!-- feathericons -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8  text-yellow-400 fill-current" viewBox="0 0 24 24" >
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z" />
                            </svg>
                            <!-- material icons -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8  text-blue-300 fill-current" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </div>
                        <input type="checkbox" class="hidden" aria-label="dark mode toggle" >
                    </div>
                </div>
            </div>

            <div class="fixed z-0 bottom-2">
                <p class="mb-3">
                    @if(setting('site.INSTAGRAM_LINK'))
                        <a class="text-base lg:text-xs mr-2 dark:text-white" href="{{setting('site.INSTAGRAM_LINK')}}" title="" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    @endif
                    @if(setting('site.TWITTER_LINK'))
                        <a class="xl:text-base lg:text-xs mr-2 dark:text-white" href="{{setting('site.TWITTER_LINK')}}" title="" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    @endif
                    @if(setting('site.LINKEDIN_LINK'))
                        <a class="xl:text-base lg:text-xs mr-2 dark:text-white" href="{{setting('site.LINKEDIN_LINK')}}" title="" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    @endif
                    @if(setting('site.DRIBBLE_LINK'))
                        <a class="xl:text-base lg:text-xs mr-2 dark:text-white" href="{{setting('site.DRIBBLE_LINK')}}" title="" target="_blank">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    @endif
                    @if(setting('site.BEHANCE_LINK'))
                        <a class="xl:text-base lg:text-xs mr-2 dark:text-white" href="{{setting('site.BEHANCE_LINK')}}" title="" target="_blank">
                            <i class="fa fa-behance"></i>
                        </a>
                    @endif
                    @if(setting('site.YOUTUBE_LINK'))
                        <a class="xl:text-base lg:text-xs mr-2 dark:text-white" href="{{setting('site.YOUTUBE_LINK')}}" title="" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    @endif
                    @if(setting('site.PINTEREST_LINK'))
                        <a class="xl:text-base lg:text-xs mr-2 dark:text-white" href="{{setting('site.PINTEREST_LINK')}}" title="" target="_blank">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    @endif
                </p>
                <p class="lg:text-xs dark:text-white">Copyright &copy; {{ date('Y') }} Ruya Studio <br> All Rights Reserved</p>
            </div>
        </nav>
    </header>
    <!-- Large Screen -->
    <header class="hidden xl:fixed xl:flex left-O top-0
      {{ config('app.locale') == 'ar' ? "border-l" : 'border-r' }}
     xl:max-w-56 w-1/2 py-4 xl:px-6 px-4 dark:bg-gray-900 duration-200 transition-colors bg-white h-full border-slate-200 dark:border-slate-800">
        <nav class="sidebar" >
            <div class="navbar-collapse fixed w-40 z-10" id="navbar-collapse">
                <div class="">
                    <a class="site-brand relative" href="{{route('visuals')}}" title="home">
                        <img class="object-fit mb-4 2xl:w-24 xl:w-20 w-16 flex dark:hidden absolute" src="{{asset('assets/icons/Ruya Branding full Logo.png')}}" alt="Logo">
                        <img class="object-fit mb-4 2xl:w-24 xl:w-20 w-16 dark:flex hidden absolute" src="{{asset('assets/icons/Logo-white.png')}}" alt="logo" >
                        <h6 class="text-black font-semibold pt-20 dark:text-white">Ruya Studio</h6>
                    </a>
                    <p class="2xl:my-4 2xl:text-sm xl:text-xxs xl:text-sm dark:text-gray-100">{{__('Mastering Motion Design & Software Development. Delivering captivating animations & innovative digital solutions.')}}</p>
                </div>
                <ul class="xl:pt-2 pt-8 pl-1 ">
                    <li class="mb-1 xl:mb-3"><a href="{{route('visuals')}}" title="Visuals" class="text-base 2xl:text-sm xl:text-xs hover:text-black  {{ Route::currentRouteName() == 'visuals' ? 'font-bold text-black dark:text-white' : 'text-gray-500 dark:text-gray-200' }}"><i class="fa fa-image mx-2"></i>{{__('Visuals')}} </a></li>
                    <li class="mb-1 xl:mb-3"><a href="{{route('motion')}}" title="Motions" class="text-base 2xl:text-sm xl:text-xs hover:text-black {{ Route::currentRouteName() == 'motion' ? 'font-bold text-black dark:text-white' : 'text-gray-500 dark:text-gray-200' }}"><i class="fa fa-spinner mx-2"></i>{{__('Motions')}} </a></li>
                    <li class="mb-1 xl:mb-3"><a href="{{route('dev')}}" title="Development" class="text-base 2xl:text-sm xl:text-xs hover:text-black {{ Route::currentRouteName() == 'dev' ? 'font-bold text-black dark:text-white' : 'text-gray-500 dark:text-gray-200' }}"><i class="fa fa-code mx-2"></i>{{__('Development')}}  </a></li>
                    <li class="mb-1 xl:mb-3"><a href="{{route('animation')}}" title="Development" class="text-base 2xl:text-sm xl:text-xs hover:text-black {{ Route::currentRouteName() == 'animation' ? 'font-bold text-black dark:text-white' : 'text-gray-500 dark:text-gray-200' }}"><i class="fa fa-cube mx-2"></i> {{__('3D & Animations')}} </a></li>
                    <li class="mb-1 xl:mb-3"><a href="{{route('services')}}" title="services" class="text-base 2xl:text-sm xl:text-xs hover:text-black {{ Route::currentRouteName() == 'services' ? 'font-bold text-black dark:text-white' : 'text-gray-500 dark:text-gray-200' }}"><i class="fa fa-handshake-o mx-2"></i> {{__('Services')}} </a></li>
                    <li class="mb-1 xl:mb-3"><a href="{{route('contact')}}" title="Contact" class="text-base 2xl:text-sm xl:text-xs hover:text-black {{ Route::currentRouteName() == 'contact' ? 'font-bold text-black dark:text-white' : 'text-gray-500 dark:text-gray-200' }}" ><i class="fa fa-envelope mx-2"></i> {{__('Contact Us')}} </a></li>
                </ul>
            </div>

            <div class="fixed z-0 bottom-2">

                <p class="mb-3">
                    @if(setting('site.INSTAGRAM_LINK'))
                        <a class="dark:text-white text-base lg:text-xs 2xl:text-sm xl:text-xxs mx-2" href="{{setting('site.INSTAGRAM_LINK')}}" title="" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    @endif
                    @if(setting('site.TWITTER_LINK'))
                        <a class="dark:text-white xl:text-base lg:text-xs 2xl:text-sm xl:text-xxs mx-2" href="{{setting('site.TWITTER_LINK')}}" title="" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    @endif
                    @if(setting('site.LINKEDIN_LINK'))
                        <a class="dark:text-white xl:text-base lg:text-xs 2xl:text-sm xl:text-xxs mx-2" href="{{setting('site.LINKEDIN_LINK')}}" title="" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    @endif
                    @if(setting('site.DRIBBLE_LINK'))
                        <a class="xl:text-base lg:text-xs 2xl:text-sm xl:text-xxs mx-2" href="{{setting('site.DRIBBLE_LINK')}}" title="" target="_blank">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    @endif
                    @if(setting('site.BEHANCE_LINK'))
                        <a class="dark:text-white xl:text-base lg:text-xs 2xl:text-sm xl:text-xxs mx-2" href="{{setting('site.BEHANCE_LINK')}}" title="" target="_blank">
                            <i class="fa fa-behance"></i>
                        </a>
                    @endif
                    @if(setting('site.YOUTUBE_LINK'))
                        <a class="dark:text-white xl:text-base lg:text-xs 2xl:text-sm xl:text-xxs mx-2" href="{{setting('site.YOUTUBE_LINK')}}" title="" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                    @endif
                    @if(setting('site.PINTEREST_LINK'))
                        <a class="dark:text-white xl:text-base lg:text-xs 2xl:text-sm xl:text-xxs mx-2" href="{{setting('site.PINTEREST_LINK')}}" title="" target="_blank">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    @endif
                </p>
                <p class="xl:text-xxs 2xl:text-sm lg:text-xs dark:text-gray-200">Copyright &copy; {{ date('Y') }} Ruya Studio <br> All Rights Reserved</p>
            </div>
        </nav>
    </header>
</div>

