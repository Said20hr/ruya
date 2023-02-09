<header class="">
    <div class="navbar navbar-default visible-xs">
        <button type="button" class="navbar-toggle collapsed">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="{{route('visuals')}}" class="navbar-brand">Ruya Studio</a>
    </div>

    <nav class="sidebar">
        <div class="navbar-collapse" id="navbar-collapse">
            <div class="site-header hidden-xs">
                <a class="site-brand" href="{{route('visuals')}}" title="home">
                    <img class="img-responsive site-logo w-28" alt="" src="{{asset('assets/icons/Ruya Branding full Logo.png')}}">
                    Ruya Studio
                </a>
                <p>{{__('Mastering Motion Design & Software Development. Delivering captivating animations & innovative digital solutions.')}}</p>
            </div>
            <ul class="nav">
                <li><a href="{{route('visuals')}}" title="Visuals" class="{{ Route::currentRouteName() == 'visuals' ? 'active' : '' }}">Visuals</a></li>
                <li><a href="{{route('motion')}}" title="Motions" class="{{ Route::currentRouteName() == 'motion' ? 'active' : '' }}">Motions</a></li>
                <li><a href="{{route('dev')}}" title="Development" class="{{ Route::currentRouteName() == 'dev' ? 'active' : '' }}">Development</a></li>
                <li><a href="{{route('contact')}}" title="Contact" class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" >Contact Us</a></li>

            </ul>

            <nav class="nav-footer">
                <p class="nav-footer-social-buttons">
                    @if(env('INSTAGRAM_LINK'))
                        <a class="fa-icon" href="{{env('INSTAGRAM_LINK')}}" title="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    @endif
                        @if(env('TWITTER_LINK'))
                            <a class="fa-icon" href="{{env('TWITTER_LINK')}}" title="">
                                <i class="fa fa-twitter"></i>
                            </a>
                        @endif
                        @if(env('LINKEDIN_LINK'))
                            <a class="fa-icon" href="{{env('LINKEDIN_LINK')}}" title="">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        @endif
                        @if(env('DRIBBLE_LINK'))
                            <a class="fa-icon" href="{{env('DRIBBLE_LINK')}}" title="">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        @endif
                        @if(env('BEHANCE_LINK'))
                            <a class="fa-icon" href="{{env('BEHANCE_LINK')}}" title="">
                                <i class="fa fa-behance"></i>
                            </a>
                        @endif
                        @if(env('YOUTUBE_LINK'))
                            <a class="fa-icon" href="{{env('YOUTUBE_LINK')}}" title="">
                                <i class="fa fa-youtube"></i>
                            </a>
                        @endif
                </p>
                <p>© 2023 Copyright | Ruya Studio</p>
            </nav>
        </div>
    </nav>
</header>
