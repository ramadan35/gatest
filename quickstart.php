<?php
require 'vendor/autoload.php';

use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Metric;

/**
 * TODO(developer): Replace this variable with your Google Analytics 4
 *   property ID before running the sample.
 */
$property_id = '270164955';

// Using a default constructor instructs the client to use the credentials
// specified in GOOGLE_APPLICATION_CREDENTIALS environment variable.


  $KEY_FILE_LOCATION = __DIR__ . '/service-account-credentials.json';

  // Create and configure a new client object.
  $client = new Google_Client();
  $client->setApplicationName("Hello Analytics Reporting");
  $client->setAuthConfig($KEY_FILE_LOCATION);
  $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
  //$analytics = new Google_Service_AnalyticsReporting($client);
  //$analytics = new BetaAnalyticsDataClient($client);

  echo "<pre>";
  var_dump(get_class_methods($client));

  die("cscds");

// Make an API call.
$response = $client->runReport([
    'property' => 'properties/' . $property_id,
    'dateRanges' => [
        new DateRange([
            'start_date' => '2020-03-31',
            'end_date' => 'today',
        ]),
    ],
    'dimensions' => [new Dimension(
        [
            'name' => 'city',
        ]
    ),
    ],
    'metrics' => [new Metric(
        [
            'name' => 'activeUsers',
        ]
    )
    ]
]);

// Print results of an API call.
print 'Report result: ' . PHP_EOL;

foreach ($response->getRows() as $row) {
    print $row->getDimensionValues()[0]->getValue()
        . ' ' . $row->getMetricValues()[0]->getValue() . PHP_EOL;
}

