<x-guest-layout>
    <div class="row">
        <div class="col-xs-12">
            @if (session('success_message'))
                <div class="duration-800 transition-opacity pb-6 text-center mt-12">
                    <img src="{{asset('assets/images/mail.webp')}}" alt="thank you" class="w-1/2 mx-auto" >
                    <div class="text-cyan-700 text-3xl pb-6">
                        {{ __( session('success_message') ) }}
                    </div>
                </div>
            @else
            <div class="section-container-spacer">
                <h1>{{__('Contact')}}</h1>
                <p>{{__('Need to get in touch with Ruya Studio?')}} <br>
                    {{__(' We\'re here to help!
                     Whether you have a question, want to request a quote for a project,
                     or are interested in our services, we encourage you to reach out to us.')}}
                  </p>
                  <p>{{__('
                     Simply send us an email and we will respond as soon as possible. <br>
                     Our team is dedicated to providing the best possible customer experience and will be happy to assist you in any way we can.
                     We look forward to hearing from you!')}}
                  </p>
              </div>
              <div class="section-container-spacer">
                  <form action="{{route('contact.store')}}" method="post" class="reveal-content">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{__('Name')}}">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="{{__('Email')}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="{{__('Subject')}}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="3" placeholder="{{__('Enter your message')}}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">{{__('Send')}}</button>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled address-container">
                                @if(setting('site.Email'))
                                <li>
                                    <span class="fa-icon">
                                        <i class="fa fa-at" aria-hidden="true"></i>
                                    </span>
                                    {{setting('site.Email')}}
                                </li>
                                @endif
                                    @if(setting('site.PHONE_ONE'))
                                        <li>
                                            <span class="fa-icon">
                                                <i class="fa fa-at" aria-hidden="true"></i>
                                            </span>
                                            {{setting('site.PHONE_ONE')}}
                                        </li>
                                    @endif
                                    @if(setting('site.PHONE_TWO'))
                                        <li>
                                    <span class="fa-icon">
                                        <i class="fa fa-at" aria-hidden="true"></i>
                                    </span>
                                            {{setting('site.PHONE_TWO')}}
                                        </li>
                                    @endif
                                @if(setting('site.ADDRESS_ONE'))
                                <li>
                                    <span class="fa-icon">
                                        <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                    {{setting('site.ADDRESS_ONE')}}
                                </li>
                                @endif
                                @if(setting('site.ADDRESS_TWO'))
                                    <li>
                                    <span class="fa-icon">
                                        <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                        {{setting('site.ADDRESS_TWO')}}
                                    </li>
                                @endif
                            </ul>
                            <h3>{{__('Follow me on social networks')}}</h3>
                            @if(setting('site.INSTAGRAM_LINK'))
                                <a class="fa-icon" href="{{setting('site.INSTAGRAM_LINK')}}" title="">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            @endif
                            @if(setting('site.TWITTER_LINK'))
                                <a class="fa-icon" href="{{setting('site.TWITTER_LINK')}}" title="">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            @endif
                            @if(setting('site.LINKEDIN_LINK'))
                                <a class="fa-icon" href="{{setting('site.LINKEDIN_LINK')}}" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>
</x-guest-layout>
