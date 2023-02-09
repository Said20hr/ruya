<x-guest-layout>
    <div class="row">
        <div class="col-xs-12">
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
                                @if(env('PHONE_ONE'))
                                <li>
                                    <span class="fa-icon">
                                        <i class="fa fa-at" aria-hidden="true"></i>
                                    </span>
                                    {{env('PHONE_ONE')}}
                                </li>
                                @endif
                                    @if(env('PHONE_TWO'))
                                        <li>
                                    <span class="fa-icon">
                                        <i class="fa fa-at" aria-hidden="true"></i>
                                    </span>
                                            {{env('PHONE_TWO')}}
                                        </li>
                                @endif
                                @if(env('ADDRESS_ONE'))
                                <li>
                                    <span class="fa-icon">
                                        <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                    {{env('ADDRESS_ONE')}}
                                </li>
                                @endif
                                @if(env('ADDRESS_TWO'))
                                    <li>
                                    <span class="fa-icon">
                                        <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                                    </span>
                                        {{env('ADDRESS_TWO')}}
                                    </li>
                                @endif
                            </ul>
                            <h3>{{__('Follow me on social networks')}}</h3>
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
