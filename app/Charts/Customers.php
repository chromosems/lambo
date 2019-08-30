<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\User;
use App\Customer;


class Customers extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        // window.{{ $chart->id }}
    }

    public static function test() {

	    $buyers = User::whereUser_type('buyers')->count();
	    $renters = User::whereUser_type('renters')->count();
	    
	    $chart = new Chart;

	    $chart->labels(['Buyers', 'Renters']);
	    $chart->dataset('My dataset', 'pie', [$buyers, $renters]);

	    return $chart;
    }
}
