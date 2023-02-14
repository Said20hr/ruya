<div>
    <!-- Mobile & Responsive Screen -->
    <header class="xl:hidden fixed left-O top-0 xl:max-w-52 w-1/2 py-4 xl:px-6 px-4 bg-white h-full z-50 transition-all ease-soft-in-out duration-600 "
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-x-100"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 -translate-x-100"
            x-show="OpenNavResponsive">
        <div >
            <i class="fa fa-bars border px-1.5 py-1 rounded-sm border-gray-200 cursor-pointer bg-gray-100" x-on:click="OpenNavResponsive = !OpenNavResponsive"></i>
            <a href="{{route('visuals')}}" class="navbar-brand">Ruya Studio</a>
        </div>
        <nav class="sidebar" >
            <div class="navbar-collapse" id="navbar-collapse">
                <div class="xl:block hidden">
                    <a class="site-brand" href="{{route('visuals')}}" title="home">
                        <img class="object-fit mb-4 2xl:w-24 xl:w-20 w-16" alt="" src="{{asset('assets/icons/Ruya Branding full Logo.png')}}">
                        <h6 class="text-black font-semibold">Ruya Studio</h6>
                    </a>
                    <p class="2xl:my-4 lg:text-xxs xl:text-sm">{{__('Mastering Motion Design & Software Development. Delivering captivating animations & innovative digital solutions.')}}</p>
                </div>
                <ul class="xl:pt-4 pt-8 pl-1">
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('visuals')}}" title="Visuals" class="text-xs {{ Route::currentRouteName() == 'visuals' ? 'font-bold text-black' : 'text-gray-800' }}"><i class="fa fa-image mr-2"></i> Visuals</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('motion')}}" title="Motions" class="text-xs {{ Route::currentRouteName() == 'motion' ? 'font-bold text-black' : 'text-gray-800' }}"><i class="fa fa-spinner mr-2"></i> Motions</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('dev')}}" title="Development" class="text-xs {{ Route::currentRouteName() == 'dev' ? 'font-bold text-black' : 'text-gray-800' }}"><i class="fa fa-code mr-2"></i> Development</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="" title="services" class="text-xs {{ Route::currentRouteName() == 'services' ? 'font-bold' : '' }}"><i class="fa fa-handshake-o mr-2"></i> Services</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('contact')}}" title="Contact" class="text-xs {{ Route::currentRouteName() == 'contact' ? 'font-bold text-black' : 'text-gray-800' }}" ><i class="fa fa-envelope mr-2"></i> Contact Us</a></li>
                </ul>

                <nav class="fixed bottom-2">
                    <p class="mb-3">
                        @if(setting('site.INSTAGRAM_LINK'))
                            <a class="text-base lg:text-xs mr-2" href="{{setting('site.INSTAGRAM_LINK')}}" title="" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        @endif
                        @if(setting('site.TWITTER_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.TWITTER_LINK')}}" title="" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        @endif
                        @if(setting('site.LINKEDIN_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.LINKEDIN_LINK')}}" title="" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        @endif
                        @if(setting('site.DRIBBLE_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.DRIBBLE_LINK')}}" title="" target="_blank">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        @endif
                        @if(setting('site.BEHANCE_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.BEHANCE_LINK')}}" title="" target="_blank">
                                <i class="fa fa-behance"></i>
                            </a>
                        @endif
                        @if(setting('site.YOUTUBE_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.YOUTUBE_LINK')}}" title="" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                        @endif
                        @if(setting('site.PINTEREST_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.PINTEREST_LINK')}}" title="" target="_blank">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        @endif
                    </p>
                    <p class="lg:text-xs">Copyright &copy; {{ date('Y') }} Ruya Studio <br> All Rights Reserved</p>
                </nav>
            </div>
        </nav>
    </header>
    <!-- Large Screen -->
    <header class="hidden xl:fixed xl:flex left-O top-0 xl:max-w-52 w-1/2 py-4 xl:px-6 px-4 bg-white h-full">
        <nav class="sidebar" >
            <div class="navbar-collapse" id="navbar-collapse">
                <div class="">
                    <a class="site-brand" href="{{route('visuals')}}" title="home">
                        <img class="object-fit mb-4 2xl:w-24 xl:w-20 w-16" alt="" src="{{asset('assets/icons/Ruya Branding full Logo.png')}}">
                        <h6 class="text-black font-semibold">Ruya Studio</h6>
                    </a>
                    <p class="2xl:my-4 lg:text-xxs xl:text-sm">{{__('Mastering Motion Design & Software Development. Delivering captivating animations & innovative digital solutions.')}}</p>
                </div>
                <ul class="xl:pt-4 pt-8 pl-1">
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('visuals')}}" title="Visuals" class="xl:text-xs text-xxs {{ Route::currentRouteName() == 'visuals' ? 'font-bold text-black' : 'text-gray-800' }}"><i class="fa fa-image mr-2"></i> Visuals</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('motion')}}" title="Motions" class="xl:text-xs text-xxs {{ Route::currentRouteName() == 'motion' ? 'font-bold text-black' : 'text-gray-800' }}"><i class="fa fa-spinner mr-2"></i> Motions</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('dev')}}" title="Development" class="xl:text-xs text-xxs {{ Route::currentRouteName() == 'dev' ? 'font-bold text-black' : 'text-gray-800' }}"><i class="fa fa-code mr-2"></i> Development</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="" title="services" class="xl:text-xs text-xxs {{ Route::currentRouteName() == 'services' ? 'font-bold' : '' }}"><i class="fa fa-handshake-o mr-2"></i> Services</a></li>
                    <li class="mb-1 xl:mb-2.5"><a href="{{route('contact')}}" title="Contact" class="xl:text-xs text-xxs {{ Route::currentRouteName() == 'contact' ? 'font-bold text-black' : 'text-gray-800' }}" ><i class="fa fa-envelope mr-2"></i> Contact Us</a></li>
                </ul>

                <nav class="fixed bottom-2">
                    <p class="mb-3">
                        @if(setting('site.INSTAGRAM_LINK'))
                            <a class="text-base lg:text-xs mr-2" href="{{setting('site.INSTAGRAM_LINK')}}" title="" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        @endif
                        @if(setting('site.TWITTER_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.TWITTER_LINK')}}" title="" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        @endif
                        @if(setting('site.LINKEDIN_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.LINKEDIN_LINK')}}" title="" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        @endif
                        @if(setting('site.DRIBBLE_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.DRIBBLE_LINK')}}" title="" target="_blank">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        @endif
                        @if(setting('site.BEHANCE_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.BEHANCE_LINK')}}" title="" target="_blank">
                                <i class="fa fa-behance"></i>
                            </a>
                        @endif
                        @if(setting('site.YOUTUBE_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.YOUTUBE_LINK')}}" title="" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                        @endif
                        @if(setting('site.PINTEREST_LINK'))
                            <a class="xl:text-base lg:text-xs mr-2" href="{{setting('site.PINTEREST_LINK')}}" title="" target="_blank">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        @endif
                    </p>
                    <p class="lg:text-xs">Copyright &copy; {{ date('Y') }} Ruya Studio <br> All Rights Reserved</p>
                </nav>
            </div>
        </nav>
    </header>
</div>

