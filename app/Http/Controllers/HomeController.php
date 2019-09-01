<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use dateTime;
use dateInterval;
use datePeriod;

class HomeController extends Controller
{
    public function one()
    {
    	for ($i = 1; $i <= 100; $i++) {
		    $fizz = (0 === $i % 3);
		    $buzz = (0 === $i % 5);

		    if (!$fizz && !$buzz) {
		        echo $i . PHP_EOL;
		        continue;
		    }

		    if ($fizz) {
		        echo 'Fizz';
		    }

		    if ($buzz) {
		        echo 'Buzz';
		    }

		    echo PHP_EOL;
		}
		return view('home');
    }

    public function two()
    {
    	echo 'two';

		return view('home');
    }

    public function three()
    {
    	// date_default_timezone_set('Europe/Amsterdam');

		$begin = new dateTime( '2019-01-01');
		$end = new dateTime( '2019-01-31');

		$interval = new DateInterval('P1D');
		$daterange = new DatePeriod($begin, $interval ,$end);

		$mondays = array();
		$weeks = array();
		foreach($daterange as $date){
			$week_data = strtotime('+1 week', $date->getTimestamp());
			// $weeks[] = $week_data;
			if($date->format('l') == "Monday"){
				$weeks['weeks'][] = $date->format("W");
				$datetest = strtotime('+1 week', $date->getTimestamp());
				if($datetest >= $begin->getTimestamp() && $datetest <= $end->getTimestamp()){
					 // echo $date->format('l').' '.$date->format("d-m-Y") . "<br>";
					 $mondays['mondays'][] = $date->format('l').' '.$date->format("d-m-Y");
				}
			}
		}
		print_r($mondays);
		print_r($weeks);

		return view('home');
    }

    public function four()
    {	
		return view('four');
    }
}
