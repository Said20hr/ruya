<div class="container">


<div wire:init="loadCharts" x-data="{
    visitors: @entangle('visitorData'),
    ctx1: document.getElementById('chart-line').getContext('2d'),
    labels: @entangle('visitorLabels')
    }"

     x-init="
        myChart = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Visitors',
                    tension: 0.4,
                    pointRadius: 2,
                    pointBackgroundColor: '#cb0c9f',
                    borderColor: '#cb0c9f',
                    borderWidth: 3,
                    backgroundColor: 'black',
                    data: visitors,
                    maxBarThickness: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                    display: false
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7'
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10
                    }
                }
            }
        }
    });
    Livewire.on('updateChart', () => {
        myChart.data.datasets[0].data = visitors;
        myChart.data.labels = labels;
        myChart.update();
    })
    " >
    <div class="w-full p-6 mx-auto" >
        <div class="flex flex-wrap">
            <div class="w-full max-w-full px-3 shrink-0 md:flex-0 md:w-full lg:w-6/12">
                <div class="relative flex flex-col min-w-0 break-words bg-white border dark:shadow-soft-dark-xl shadow-sm rounded-md bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-4 pb-0">
                        <h6 class="mb-0 dark:text-white">Traffic channels</h6>
                        <div class="flex items-center">
                            <span class="py-2.6 mr-6 rounded-1.8 text-sm inline-block whitespace-nowrap bg-transparent px-0 text-center align-baseline font-normal leading-none text-white">
                                <i class="rounded-circle mr-1.5 inline-block h-2 w-2 align-middle bg-fuchsia-500"></i>
                                <span class="leading-tight dark:text-white text-slate-700 text-xs">Organic search</span>
                            </span>
                            <span class="py-2.6 mr-6 rounded-1.8 text-sm inline-block whitespace-nowrap bg-transparent px-0 text-center align-baseline font-normal leading-none text-white">
                                <i class="rounded-circle mr-1.5 inline-block h-2 w-2 align-middle bg-slate-700"></i>
                                <span class="dark:text-white text-slate-700">Referral</span>
                            </span>
                            <span class="py-2.6 mr-6 rounded-1.8 text-sm inline-block whitespace-nowrap bg-transparent px-0 text-center align-baseline font-normal leading-none text-white">
                                <i class="rounded-circle mr-1.5 inline-block h-2 w-2 align-middle bg-cyan-500"></i>
                                <span class="dark:text-white text-slate-700">Social media</span>
                            </span>
                        </div>
                    </div>
                    <div class="flex-auto p-4 relative" wire:ignore  >
                        <canvas id="chart-line" class="chart-canvas" height="300px" wire:loading.remove></canvas>
                    </div>
                    <div  wire:loading>
                        <div class="bg-white dark:bg-transparent w-full h-full flex justify-center items-center" style="height : 330px !important;">
                            <svg aria-hidden="true" class="w-20 h-20 text-gray-200 animate-spin dark:text-white dark:fill-blue-300 fill-gray-600 my-auto" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 md:flex-0 md:w-full lg:w-6/12">
                <div class="flex flex-wrap mb-6">
                    <div class="w-full max-w-full px-3 md:flex-0 shrink-0 md:w-6/12">
                        <div class="border-black/12.5 dark:shadow-soft-dark-xl shadow-sm border  dark:bg-gray-950 relative flex min-w-0 flex-col break-words rounded-md border border-solid bg-white bg-clip-border">
                            <div class="flex-auto p-6 text-center">
                                <h1 class="relative z-10 text-transparent bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text"><span id="status1" countTo="{{$totalVisitors}}">{{$totalVisitors}}</span></h1>
                                <h6 class="mb-0 font-bold dark:text-white">Total visiteurs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 md:flex-0 shrink-0 md:w-6/12">
                        <div class="border-black/12.5 dark:shadow-soft-dark-xl shadow-sm border  dark:bg-gray-950 relative flex min-w-0 flex-col break-words rounded-md border border-solid bg-white bg-clip-border">
                            <div class="flex-auto p-6 text-center">
                                <h1 class="relative z-10 text-transparent bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text"><span id="status4" countTo="{{$newVisitors}}">{{$newVisitors}}</span></h1>
                                <h6 class="mb-0 font-bold dark:text-white">New Users</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full max-w-full px-3 md:flex-0 shrink-0 md:w-6/12">
                        <div class="border-black/12.5 dark:shadow-soft-dark-xl shadow-sm border  dark:bg-gray-950 relative flex min-w-0 flex-col break-words rounded-md border border-solid bg-white bg-clip-border">
                            <div class="flex-auto p-6 text-center">
                                <h1 class="relative z-10 text-transparent bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text"><span id="status3" countTo="{{$totalReferrers}}">{{$totalReferrers}}</span></h1>
                                <h6 class="mb-0 font-bold dark:text-white">Total Referrers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 md:flex-0 shrink-0 md:w-6/12">
                        <div class="border-black/12.5 dark:shadow-soft-dark-xl shadow-sm border  dark:bg-gray-950 relative flex min-w-0 flex-col break-words rounded-md border border-solid bg-white bg-clip-border">
                            <div class="flex-auto p-6 text-center">
                                <h1 class="relative z-10 text-transparent bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text"><span id="status2" countTo="{{$totalPageviews}}">{{$totalPageviews}}</span></h1>
                                <h6 class="mb-0 font-bold dark:text-white">Page viewed</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap mt-6">
            <div class="w-full max-w-full px-3 shrink-0 sm:flex-0 sm:w-6/12">
                <div class="relative flex flex-col h-full min-w-0 break-words bg-white border dark:shadow-soft-dark-xl shadow-sm rounded-md bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-4 pb-0">
                        <div class="flex items-center">
                            <h6 class="mb-0 dark:text-white">Social</h6>
                            <button type="button" class="active:shadow-soft-xs active:opacity-85 ease-soft-in leading-pro text-xs bg-150 bg-x-25 rounded-3.5xl p-1.2 h-6 w-6 mb-0 ml-auto flex cursor-pointer items-center justify-center border border-solid border-slate-400 bg-transparent text-center align-middle font-bold text-slate-400 shadow-none transition-all hover:bg-transparent hover:text-slate-400 hover:opacity-75 hover:shadow-none active:bg-slate-400 active:text-black hover:active:bg-transparent hover:active:text-slate-400 hover:active:opacity-75 hover:active:shadow-none" data-target="tooltip_trigger">
                                <i class="fas fa-info text-3xs"></i>
                            </button>
                            <div class="z-50 hidden px-2 py-1 text-center text-white bg-black rounded-lg max-w-46 text-sm" id="tooltip" role="tooltip" data-popper-placement="bottom">
                                See how much traffic do you get from social media
                                <div id="arrow" class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                    <div wire:loading>
                        <div class="flex justify-center items-center" style="height : 420px !important;">
                            <svg aria-hidden="true" class="w-20 h-20 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div wire:loading.remove>
                        <div class="flex-auto">
                            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                @foreach($referrers as $referrer)
                                    <div class="w-full mt-4 px-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <a class="btn btn-facebook btn-simple mb-0 p-0" href="javascript:;">
                                                @if($referrer['url'] == '(direct)')
                                                    <img src="{{asset('assets/icons/Ruya-Branding-Logo.png')}}" class="w-8 h-4 " alt="">
                                                @elseif($referrer['url'] == 'google')
                                                    <i class="fa fa-google fa-lg"></i>
                                                @elseif($referrer['url'] == 'instagram.com/')
                                                    <i class="fa fa-instagram fa-lg"></i>
                                                @elseif($referrer['url'] == 'linkedin.com/')
                                                    <i class="fa fa-linkedin fa-lg"></i>
                                                @elseif($referrer['url'] == 'facebook.com/' or 'm.facebook.com/' or 'lm.facebook.com/')
                                                    <i class="fa fa-facebook fa-lg"></i>
                                                @else
                                                @endif
                                            </a>
                                            <span class="me-2 text-sm font-bold ms-2">{{ $referrer['url'] == "(direct)" ? 'https://ruya.studio': $referrer['url']  }}</span>
                                            <span class="ms-auto text-sm font-bold pr-2 ">{{ $referrer['pageViews'] }}</span>
                                        </div>
                                        <div class="w-full">
                                            <div class="progress progress-md w-full" style="height: 14px;">
                                                <div class="progress-bar bg-gradient-dark rounded-md" role="progressbar" style="height: 15px; width: {{ round($referrer['pageViews'] / $totalReferrers * 100 , 1) }}%"
                                                     aria-valuenow="{{ round($referrer['pageViews'] / $totalReferrers * 100 , 1) }}" aria-valuemin="0" aria-valuemax="100">
                                                    {{ round($referrer['pageViews'] / $totalReferrers * 100 , 1) }}%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 shrink-0 sm:flex-0 sm:w-6/12">
                <div class="relative flex flex-col h-full min-w-0 break-words bg-white border md:mt-0  dark:shadow-soft-dark-xl shadow-sm rounded-md bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-4 pb-0">
                        <div class="flex items-center">
                            <h6 class="dark:text-white">Pages</h6>
                            <button type="button" class="active:shadow-soft-xs active:opacity-85 ease-soft-in leading-pro text-xs bg-150 bg-x-25 rounded-3.5xl p-1.2 h-6 w-6 mb-0 ml-auto flex cursor-pointer items-center justify-center border border-solid border-lime-500 bg-transparent text-center align-middle font-bold text-lime-500 shadow-none transition-all hover:bg-transparent hover:text-lime-500 hover:opacity-75 hover:shadow-none active:bg-lime-500 active:text-black hover:active:bg-transparent hover:active:text-lime-500 hover:active:opacity-75 hover:active:shadow-none" data-target="tooltip_trigger">
                                <i class="fas fa-check text-3xs"></i>
                            </button>
                            <div class="z-50 hidden px-2 py-1 text-center text-white bg-black rounded-lg max-w-46 text-sm" id="tooltip" role="tooltip" data-popper-placement="bottom">
                                See how much traffic do you get from social media
                                <div id="arrow" class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                        </div>
                    </div>
                    <div wire:loading>
                        <div class="flex justify-center items-center" style="height : 420px !important;">
                            <svg aria-hidden="true" class="w-20 h-20 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div wire:loading.remove>
                        <div class="flex-auto px-4 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center justify-center w-full mb-0 align-top border-gray-200 dark:text-white/80 text-slate-500">
                                    <thead class="align-bottom">
                                    <tr>
                                        <th class="py-3 pl-2 pr-6 font-bold uppercase align-middle border-gray-200 border-solid text-xxs text-slate-400 opacity-90 whitespace-nowrap tracking-none">Page</th>
                                        <th class="py-3 pl-2 pr-6 font-bold uppercase align-middle border-gray-200 border-solid text-xxs text-slate-400 opacity-90 whitespace-nowrap tracking-none">Page Views</th>
                                        <th class="py-3 pl-2 pr-6 font-bold uppercase border-gray-200 border-solid text-xxs text-slate-400 opacity-90 whitespace-nowrap tracking-none">Bounce Rate</th>
                                    </tr>
                                    </thead>
                                    <tbody class="align-top">
                                    @foreach($pages as $page)
                                        <tr>
                                        <td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
                                            <p class="mb-0 font-semibold leading-normal text-sm">https://ruya.studio/{{$page['url']}}</p>
                                        </td>

                                        <td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
                                            <p class="mb-0 font-semibold leading-normal text-sm">{{$page['pageViews']}}</p>
                                        </td>

                                        <td class="p-2 align-middle border-b border-solid dark:border-white/40 whitespace-nowrap border-inherit">
                                            <p class="mb-0 font-semibold leading-normal text-sm">
                                                {{ round($page['pageViews'] / $totalPages * 100 , 1) }}%
                                            </p>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

</div>
