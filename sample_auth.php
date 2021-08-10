<?php

require 'vendor/autoload.php';

use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Metric;
use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;

putenv('GOOGLE_APPLICATION_CREDENTIALS=/var/www/html/gatest/service-account-credentials.json');
$client = new BetaAnalyticsDataClient();

$response = $client->runReport([
	'property' => 'properties/270164955',
	'dateRanges' => [
        	new DateRange([
            		'start_date' => '30daysAgo',
            		'end_date' => 'today',
        	]),
	],
	'dimensions' => [
		new Dimension([
			'name' => 'eventName',
        	]),
	],
	'metrics' => [
		new Metric(['name' => 'eventCount',]),
		new Metric(['name' => 'eventCountPerUser',]),
        	new Metric(['name' => 'activeUsers',]),
        	new Metric(['name' => 'totalUsers',])
    	]
]);

foreach ($response->getRows() as $row) {
    foreach ($row->getDimensionValues() as $dimensionValue) {
        print 'Event Name: ' . $dimensionValue->getValue() . "<br>";
    }
}
echo "=====================================<br>";
foreach ($response->getRows() as $row) {
    foreach ($row->getMetricValues() as $metricValue) {
        print 'Metric Value: ' . $metricValue->getValue() . "<br>";
    }
    echo "=====================================<br>";
}


echo "<pre>";
echo "===================================================<br>";
//print_r(get_class_methods($client));

//var_dump($row->getMetricValues());
echo "===================================================<br>";


