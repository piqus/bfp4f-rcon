<?php

/**
 * Battlefield Play4Free RCON Chat Sub-Class
 * Provides Chat based Methods
 * 
 * This Package is based on 'bf2php' from 'jamie.rfurness@gmail.com' (http://code.google.com/p/bf2php/)
 * 
 * Requires PHP 5.3 or greater
 * 
 * @package   T4G\BFP4F
 * @author    Ronny 'roennel' Gysin <roennel@alchemical.cc>
 * @copyright (c) 2012 Ronny Gysin / 2009 Jamie Furness
 * @license   GPL v3 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @version   0.3.4
 */

namespace T4G\BFP4F\Rcon;

class Chat
{
	/**
	 * Fetches current Chat-Buffer
	 * @param int $limit = null
	 * @return array
	 */
	public function fetch($limit=null)
	{
		$data = Base::query('bf2cc serverchatbuffer');
		
		$spl = explode("\r\r", $data);
		
		$result = array();
		
		$i = 0;
		
		foreach($spl as $chat)
		{
			$ex = explode("\t", $chat);
			
			if(count($ex) < 2) continue;
			
			list($index, $origin, $team, $type, $time, $message) = $ex;
			
			if(!$limit or $limit > count($spl)-$i)
			{
				$result[] = (object) array
				(
					'origin'	=> 	$origin,
					'type'    	=>  $type,
					'team'		=>  $team,
					'time'    	=>  substr($time, 1, -1),
					'message' 	=>  $message,
					'index'   	=>  $index
				);
			}
			
			++$i;
		}

		return $result;
	}
	
	/**
	 * Sends a Global Message to the Server
	 * @param string $message
	 * @return string
	 */
	public function send($message)
	{
		return trim(Base::query('exec game.sayAll "'.$message . '"'));
	}
	
	/**
	 * Sends a Private Message to a Player
	 * @param string|int $player
	 * @param string $message
	 * @return string
	 */
	public function sendPlayer($player, $message) // DOESN'T WORK, IT SENDS IT TO ALL PLAYERS (GLOBAL)
	{ 
		return trim(Base::query('exec game.sayToPlayerWithName ' . $player . ' "' . $message . '"'));
		//return trim(Base::query('bf2cc sendplayerchat \"' . $player . '\" ' . $message . ""));
	}
}