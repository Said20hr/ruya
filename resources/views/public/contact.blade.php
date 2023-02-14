<x-guest-layout title="Contact us">
    <div class="w-full min-h-screen xl:p-8 p-2">
        <div class="">
                <h2>{{__('Contact')}}</h2>
                <p>{{__('Need to get in touch with Ruya Studio?')}} <br>
                    {{__(' We\'re here to help!
                     Whether you have a question, want to request a quote for a project,
                     or are interested in our services, we encourage you to reach out to us.')}}
                  </p>
                  <p>{{__('
                     Simply send us an email and we will respond as soon as possible.')}} <br>
                      {{__(' Our team is dedicated to providing the best possible customer experience and will be happy to assist you in any way we can.
                       We look forward to hearing from you!')}}
                  </p>
              </div>
        @if (session('success_message'))
            <div class="duration-800 transition-opacity pb-6 text-center mt-6 transition-opacity duration-1000">
                <img src="{{asset('assets/images/mail.webp')}}" alt="thank you" class="w-1/2 mx-auto" >
                <div class="text-cyan-700 text-xl pb-6">
                    {{ __( session('success_message') ) }}
                </div>
            </div>
        @else
            <div class="my-12">
                  <form action="{{route('contact.store')}}" method="post" class="reveal-content">
                    @csrf
                    <div class="grid grid-cols-1 xl:grid-cols-2 xl:gap-12 gap-6">
                        <div class="w-full">
                            <div class="mb-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{__('Name')}}">
                            </div>
                            <div class="mb-6">
                                <input type="email" name="email" class="form-control" id="email" placeholder="{{__('Email')}}">
                            </div>
                            <div class="mb-6">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="{{__('Subject')}}">
                            </div>
                            <div class="mb-6">
                                <textarea class="form-control" name="message" rows="3" placeholder="{{__('Enter your message')}}"></textarea>
                            </div>
                            <x-jet-button type="submit" class="bg-primary">{{__('Send')}}</x-jet-button>
                        </div>
                        <div class="w-full">
                            <ul class="">
                                @if(setting('site.EMAIL'))
                                <li class="text-gray-700 text-sm mb-4">
                                    <span>
                                        <i class="mr-2 fa fa-at" aria-hidden="true"></i>
                                    </span>
                                    {{setting('site.EMAIL')}}
                                </li>
                                @endif
                                    @if(setting('site.PHONE_ONE'))
                                     <li class="text-gray-700 text-sm mb-4">
                                            <span>
                                                <i class="mr-2 fa fa-phone" aria-hidden="true"></i>
                                            </span>
                                            {{setting('site.PHONE_ONE')}}
                                        </li>
                                    @endif
                                    @if(setting('site.PHONE_TWO'))
                                         <li class="text-gray-700 text-sm mb-4">
                                             <span>
                                                 <i class="mr-2 fa fa-at" aria-hidden="true"></i>
                                             </span>
                                            {{setting('site.PHONE_TWO')}}
                                        </li>
                                    @endif
                                @if(setting('site.ADDRESS_ONE'))
                                 <li class="text-gray-700 text-sm mb-4">
                                    <span>
                                        <i class="mr-2 fa fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                    {{setting('site.ADDRESS_ONE')}}
                                </li>
                                @endif
                                @if(setting('site.ADDRESS_TWO'))
                                     <li class="text-gray-700 text-sm mb-4">
                                         <span>
                                             <i class="mr-2 fa fa fa-map-marker" aria-hidden="true"></i>
                                         </span>
                                        {{setting('site.ADDRESS_TWO')}}
                                    </li>
                                @endif
                            </ul>
                            <h4 class="my-3">{{__('Follow us on social networks')}}</h4>
                            @if(setting('site.INSTAGRAM_LINK'))
                                <a class="mr-2 fa-icon" href="{{setting('site.INSTAGRAM_LINK')}}" target="_blank">
                                    <i class="mr-2 fa fa-instagram"></i>
                                </a>
                            @endif
                            @if(setting('site.TWITTER_LINK'))
                                <a class="mr-2 fa-icon" href="{{setting('site.TWITTER_LINK')}}" target="_blank">
                                    <i class="mr-2 fa fa-twitter"></i>
                                </a>
                            @endif
                            @if(setting('site.LINKEDIN_LINK'))
                                <a class="mr-2 fa-icon" href="{{setting('site.LINKEDIN_LINK')}}" target="_blank">
                                    <i class="mr-2 fa fa-linkedin"></i>
                                </a>
                            @endif
                            @if(setting('site.FACEBOOK_LINK'))
                                <a class="mr-2 fa-icon" href="{{setting('site.FACEBOOK_LINK')}}" target="_blank">
                                    <i class="mr-2 fa fa-facebook"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        @endif
    </div>
</x-guest-layout>
