<?php

namespace MyGreeter;

class Client{

	public function __construction() {
		
	}

	public function getGreeting($currTime = -1) {
		$t_now = time();
		if($currTime > 0) {
			$t_now = $currTime;
		}
		$t_6am = strtotime('6am');
		$t_12pm = strtotime('12pm');
		$t_6pm = strtotime('6pm');

		$greeting = 'Good morning';
		if($t_now>$t_12pm) {
			$greeting = 'Good afternoon';
		}
		if($t_now>$t_6pm) {
			$greeting = 'Good evening';
		}
		if($t_now<=$t_6am) {
			$greeting = 'Good evening';
		}
		return $greeting;
	}
}
