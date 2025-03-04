<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_AnalyticsData;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/analytics.json'));
        $client->addScope('https://www.googleapis.com/auth/analytics.readonly');
        $client->setHttpClient(new \GuzzleHttp\Client(['verify' => false])); // Disable SSL verification

        $analytics = new Google_Service_AnalyticsData($client);

        $request = new \Google_Service_AnalyticsData_RunReportRequest([
            'dateRanges' => [['startDate' => '7daysAgo', 'endDate' => 'today']],
            'metrics' => [['name' => 'activeUsers']],
            'dimensions' => [['name' => 'country']],
        ]);

        $response = $analytics->properties->runReport('properties/480706836', $request);
        return Inertia::render('Dashboard', ['data' => $response]);
    }
}
