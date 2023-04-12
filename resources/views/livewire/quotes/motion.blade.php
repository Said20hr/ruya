<div  x-data="{ modal: false,shown: false }" x-on:close-modal.window="modal = false;shown = true" >
    <div class="max-w-3xl mx-auto flex justify-center my-12"  x-on:saved.window="savedQuery = true">
        <button x-show="!shown"
            type="button" x-on:click="modal = !modal"
                class="w-full py-3 max-w-sm px-6 dark:bg-yellow-500 dark:text-dark text-white hover:bg-opacity-80 bg-dark rounded-full">
            {{__('Get quote')}}
        </button>
        <p x-show="shown" class="duration-300 delay-1s transition-opacity xl:text-xl text-sm x-full bg-emerald-500 rounded-full text-white py-2 px-6">
           {{__('Thank you for submitting your quote request. We will be in touch with you shortly.')}}
        </p>
    </div>
    <div class="mx-auto" x-show="modal" x-clock>
        <div class="font-sans antialiased fixed top-6 lg:top-0 right-0 left-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center z-990">
            <div x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                 class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-slate-700 shadow opacity-75 z-990"></div>
            </div>
            <div x-show="modal" x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="bg-white h-fit xl:overflow-y-hidden overflow-y-scroll rounded-lg overflow-x-hidden shadow-xl transform transition-all sm:max-w-2xl sm:w-full" x-clock>
                <div class="dark:bg-slate-900 dark:border-slate-900 bg-white h-fit px-8 py-4 relative rounded-md border shadow-lg" >
                    <button class="btn absolute right-10 opacity-80 dark:text-white hover:opacity-100 mt-3" type="button" x-on:click="modal = false">
                        <i class="fa fa-close text-xl "></i>
                    </button>
                    <div class="flex items-center text-left">
                        <div class="xl:my-4 my-3 sm:mt-0 sm:ml-4 w-full">
                            <h3 class="dark:text-white text-center text-xl uppercase leading-6 font-semibold text-sandstone my-4">Get quotation</h3>
                            <form wire:submit.prevent="SaveQuote">
                                <div class="w-full xl:pt-5 pt-3">
                                    <div class="mb-4">
                                        <input type="text" wire:model.defer="name" class="form-control" id="name" placeholder="{{__('Full Name')}}">
                                        <x-jet-input-error for="name"/>
                                    </div>
                                    <div class="mb-4 grid grid-cols-2 gap-x-4">
                                        <div>
                                            <input type="email" wire:model.defer="email" class="form-control" id="email" placeholder="{{__('Email')}}">
                                            <x-jet-input-error for="email"/>
                                        </div>
                                        <div>
                                            <input type="text" wire:model.defer="phone" class="form-control" id="email" placeholder="{{__('Phone')}}">
                                            <x-jet-input-error for="phone"/>
                                        </div>
                                    </div>
                                    <div class="mb-4 grid grid-cols-2 gap-x-4">
                                        <input type="text" wire:model.defer="company" class="form-control" id="subject" placeholder="{{__('Company')}}">
                                        <select class="form-control" wire:model.defer="source">
                                            <option value="" disabled selected>{{__('How did you hear about us')}}</option>
                                            <option value="Google">{{__('Google')}}</option>
                                            <option value="Social media">{{__('Social media')}}</option>
                                            <option value="Website">{{__('Website')}}</option>
                                            <option value="Friend">{{__('Friend')}}</option>
                                        </select>
                                        <x-jet-input-error for="source"/>
                                    </div>
                                    <div class="p-3 mb-6">
                                        <x-jet-label value="{{__('Type of project')}}" class="text-left mb-3 dark:text-white font-semibold"/>
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-1" type="checkbox" wire:model.defer="project" value="{{__('2d motion')}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('2d motion')}} </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="checkbox-2" type="checkbox" wire:model.defer="project" value="{{__('Motion explainer')}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('Motion explainer')}}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="checkbox-3" type="checkbox" wire:model.defer="project" value="{{__('Design product')}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('Design product')}}</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="checkbox-4" type="checkbox" wire:model.defer="project" value="{{__('Video editing')}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-4" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('Video editing')}}</label>
                                            </div>
                                        </div>
                                        <x-jet-input-error for="project"/>
                                    </div>
                                    <div class="mb-4 relative" x-data="{currency : 'USD',displayDropdown : false}">
                                        <input type="number" wire:model.defer="budget" class="form-control" id="subject" placeholder="{{__('Budget')}}">
                                        <div @click.prevent="displayDropdown  =! displayDropdown " class="top-0 text-center w-24 flex justify-center h-full items-center border border-gray-900 border-l-0 right-0 absolute bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100">
                                            <span x-text="currency"></span>
                                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                        </div>
                                        <div class="absolute right-0 transition duration-300 ease-in-out" x-show="displayDropdown">
                                            @foreach($currencies as $currency)
                                                <div type="button" wire:click="SwitchCurrency('{{ $currency }}')"  @click.prevent="currency = '{{$currency}}' ; displayDropdown  =! displayDropdown" class="text-center w-24 pl-4 h-full py-1.5 cursor-pointer hover:bg-slate-100 flex items-center border border-gray-200 bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-100">
                                                    {{ $currency }}
                                                </div>
                                            @endforeach

                                        </div>
                                        <x-jet-input-error for="budget"/>
                                    </div>
                                    <div class="mb-4">
                                        <textarea class="form-control"  wire:model.defer="additional" rows="3" placeholder="{{__('Additional information')}}"></textarea>
                                        <x-jet-input-error for="additional"/>
                                    </div>
                                    <div class="text-center">
                                        <x-jet-button type="submit">{{__('Send')}}</x-jet-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
