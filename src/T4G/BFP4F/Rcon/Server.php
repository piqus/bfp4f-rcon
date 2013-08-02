<?php

/**
 * Battlefield Play4Free RCON Server Sub-Class
 * Provides Server based Methods
 * 
 * This Package is based on 'bf2php' from 'jamie.rfurness@gmail.com' (http://code.google.com/p/bf2php/)
 * 
 * Requires PHP 5.3 or greater
 * 
 * @author Ronny 'roennel' Gysin <roennel@alchemical.cc>
 * @copyright (c) 2012 Ronny Gysin / 2009 Jamie Furness
 * @license GPL v3 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @version 0.3-beta
 * @package T4G\BFP4F
 */

namespace T4G\BFP4F\Rcon;

class Server
{
	/**
	 * Fetches Server Info
	 * @return object
	 */
	public function fetch()
	{
		$data = Base::query('bf2cc si');
		
		$spl = explode("\t", $data);
		
		$result = array
		(
			'name' => $spl[7],
			'map' => $spl[5],
			'playersCurrent' => $spl[3],
			'playersMax' => $spl[2],
			'playersJoining' => $spl[4],
			'tickets' => array($spl[10] - $spl[11], $spl[10] - $spl[16]),
			'ticketsMax' => $spl[10],
			'timeElapsed' => $spl[18],
			'timeRemaining' => $spl[19]
		);
		
		return (object) $result;
	}
}