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
    public $visitors, $totalVisitors, $totalPageviews, $visitorData, $visitorLabels,$newVisitors,$totalCountries;
    public $referrers, $totalReferrers, $analyticsData,$pages,$totalSessions,$referrersData,$countries;



    public function loadCharts()
    {
        $this->data = 'Loading';
    }
    public function render()
    {

        $this->visitors = Analytics::fetchTotalVisitorsAndPageViews(Period::months(1));

        $this->referrers = Analytics::fetchTopReferrers(Period::months(1));

        $this->pages = Analytics::fetchMostVisitedPages(Period::months(1))->sortByDesc('pageViews');
        $this->visitorData = $this->visitors->pluck('visitors')->toArray();


        $analyticsData = Analytics::performQuery(
            Period::months(2),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions,ga:newUsers,ga:pageviews,ga:uniquePageviews,ga:visitors',
                'dimensions' => 'ga:country',
                'sort' => '-ga:sessions'
            ]
        );
        //dd();

        $this->totalReferrers = count($analyticsData['rows']);

        $this->totalVisitors =  $this->visitors->sum('visitors');

        $this->newVisitors =  $analyticsData['totalsForAllResults']['ga:newUsers'];
        $this->totalCountries = count($analyticsData['rows']);
        // Parse the data and store it in an array
        $this->countries = collect($analyticsData['rows'])->map(function ($row) use ($analyticsData) {
            $data = [];
            foreach ($analyticsData['columnHeaders'] as $i => $header) {
                $data[$header['name']] = $row[$i];
            }
            return $data;
        })->toArray();

        $this->totalPageviews = $analyticsData['totalsForAllResults']['ga:pageviews'];
        $this->totalSessions = $analyticsData['totalsForAllResults']['ga:sessions'];

        $this->totalPages = $this->pages->sum('pageViews');


        // Analytics::fetchTopBrowsers(Period::months(1))[0]['browser'];
        $this->visitorLabels = $this->visitors->pluck('date')
            ->collect($this->visitorLabels)->
            map(function ($item, $key) {return date('d-m', strtotime($item));})->all();

        return view('livewire.admin.google-analytics');

    }
}
