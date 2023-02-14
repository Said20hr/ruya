<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Spatie\Analytics\Period;
use Analytics;

class GoogleAnalytics extends Component
{
    public $period = 1;
    public $startDate, $endDate;
    public $visitors, $totalVisitors, $totalPageviews, $visitorData, $visitorLabels,$newVisitors;
    public $referrers, $totalReferrers, $analyticsData,$pages;



    public function loadCharts()
    {
        $this->data = 'Loading';
    }
    public function render()
    {

        $this->visitors = Analytics::fetchVisitorsAndPageViews(Period::months(1));
        $this->referrers = Analytics::fetchTopReferrers(Period::months(1));
        $this->pages = Analytics::fetchMostVisitedPages(Period::months(1))->sortByDesc('pageViews');
        $this->analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(1))->sortByDesc('pageViews');
        $this->visitorData = $this->visitors->pluck('visitors')->toArray();
        $this->newVisitors = count(Analytics::fetchUserTypes(Period::months(1)));

        // visitors graph
        $this->totalVisitors = $this->visitors->sum('visitors');
        $this->totalPageviews = $this->visitors->sum('pageViews');
        $this->totalReferrers = $this->referrers->sum('pageViews');
        $this->totalPages = $this->pages->sum('pageViews');

       // Analytics::fetchTopBrowsers(Period::months(1))[0]['browser'];
       $this->visitorLabels = $this->visitors->pluck('date')->collect($this->visitorLabels)->map(function ($item, $key) {return date('d-m-Y', strtotime($item));})->all();
        return view('livewire.admin.google-analytics');
    }
}
