<?php

/**
 * Battlefield Play4Free RCON Server Sub-Class
 * Provides Server based Methods
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

	/**
	 * Changes next (append?) map to declared. 
	 * rcon::runNextLevel is needed to skip current map.
	 *
	 * <ul>
	 *  <li>Map List
	 *   <ul>
	 *    <li>strike_at_karkand</li>
	 *    <li>gulf_of_oman</li>
	 *    <li>dalian_plant</li>
	 *    <li>downtown</li>
	 *    <li>mashtuur_city</li>
	 *    <li>trail</li>
	 *    <li>Dragon_Valley</li>
	 *    <li>karkand_rush</li>
	 *    <li>sharqi</li>
	 *   </ul>
	 *  </li>
	 *  <li>Game Types
	 *   <ul>
	 *    <li>gpm_sa</li>
	 *    <li>gpm_rush</li>
	 *    <li>There are also so unreleased/lefotovers in BFP4F mm/game files.
	 *   </ul>
	 *  </li>
	 * </ul>
	 *
	 * @param string $map Map Name
	 * @param string $gameType Game Type
	 * @param int $size Size of map (according to max players numb.)
	 * 
	 * @return 
	 */
	public function changeMap($map, $gameType, $size = null)
	{
		return Base::query("map {$map} {$gameType} {$size}");
	}

	public function changeMapAlt($map, $gameType, $size = null)
	{
		return Base::query("exec admin.changemap {$map} {$gameType} {$size}");
	}	

	/**
	 * Retrieves position of current map in map rotator
	 * 0, 1, 2, 3, ...	 
	 *
	 * @return int
	 */
	public function currentMap()
	{
		return Base::query("exec admin.currentLevel");
	}

	/**
	 * Switch to next level
	 *
	 * @return 
	 */
	public function skipToNextMap()
	{
		return Base::query("exec admin.runNextLevel");
	}
	
	/**
	 * Run next map.
	 * 
	 * @return
	 */
	public function runNextMap()
	{
		return Base::query('newrcon runnextmap');
	}

	/**
	 * Sets number of rounds variable (applies to all maps)
	 * 
	 * @param int $num_of_rounds 
	 */
	public function setNumOfRounds($num_of_rounds)
	{
		return Base::query("exec admin.setNrOfRounds {$num_of_rounds}");
	}
	
	/**
	 * Jump to <map_[id|name]>?
	 *
	 * @param string $map ID of map in map-rotator or name of map
	 *
	 * @return 
	 */
	public function skipToMap($map)
	{
		return Base::query('exec admin.nextLevel ' . ($map));
	}

	/**
	 * Set next map using ID of map position in rotator.
	 * 
	 * @param int $map_id_in_rotation
	 *
	 * @return 
	 */
	public function setNextMap($map_id_in_rotation = 0)
	{
		return Base::query('newrcon setnextmap' . ((int)$map_id_in_rotation));		
	}

	/**
	 * End current round, and restart with the same map.
	 *
	 * @return 
	 */
	public function restartMap()
	{
		return Base::query('exec admin.restartMap');
	}

	/**
	 * Restart current map using b4fnm.
	 *
	 * @return 
	 */
	public function restartMapAlt()
	{
		return Base::query('b4fnm restartmap');
	}

	/**
	 * Returns Help all (modmanager) commands.
	 *
	 * Commands are listed in nested view using 
	 * - "\r\n"
	 * - "\t"
	 * - spaces? I haven't noticed
	 * 
	 * @return 
	 */
	public function getHelp()
	{
		return $data = Base::query('help');
		// return explode("\r\n", $data);
	}

	/**
	 * Sets time limit.
	 * 
	 * @param int $value
	 */
	public function setTimeLimit($value)
	{
		Base::query("exec admin.timeLimit {$value}");
	}

	public function getMaplist($name)
	{
		$data = Base::query('maplist');
		return $data;
	}

	/*** Leftovers to remove ***/

	/**
	 * Get the play lists for the server
	 *
	 * @param string $name (optional) Get the current play list for the server
	 *
	 * @return 
	 */
	public function getPlaylist($name)
	{
		$data = Base::query('exec admin.getPlaylist');
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set if the server should autobalance 
	 *
	 * @param boolean $enabled enable team balance.
	 *
	 * @return 
	 */
	public function setTeamBalance($enabled = false)
	{
		$data = Base::query('exec admin.teamBalance ' . ((bool)$enabled));
		// $data = Base::query('vars.teamBalance ' . ((bool)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set if the server should allow team damage
	 * Probably works after round restart
	 *
	 * @param boolean $enabled enable friendly fire.
	 *
	 * @return
	 */
	public function setFriendlyFire($enabled = false)
	{
		$data = Base::query('admin.friendlyFire ' . ((bool)$enabled));
		// $data = Base::query('vars.friendlyFire ' . ((bool)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Retrieve the current maximum number of players
	 *
	 * @return This value is computed from all the different player limits in effect at any   given moment
	 */
	public function setCurrentPlayerLimit()
	{
		$data = Base::query('admin.currentPlayerLimit');
		// $data = Base::query('vars.currentPlayerLimit');
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Retrieve the server - enforced maximum number of players.
	 * Setting the user- defined maximum number of players higher than this has no effect
	 *
	 * @return 
	 */
	public function setMaxPlayerLimit()
	{
		$data = Base::query('admin.maxPlayerLimit');
		// $data = Base::query('vars.maxPlayerLimit');
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * The effective maximum number of players is also effected by the server provider, and the game engine
	 *
	 * @param int $numOfPlayers Player limit must be in the range 8..32
	 *
	 * @return 
	 */
	public function setPlayerLimit($numOfPlayers = 32)
	{
		$data = Base::query('admin.playerLimit ' . ((int) $numOfPlayers));
		// $data = Base::query('vars.playerLimit ' . ((int) $numOfPlayers));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 *
	 * @param string $bannerUrl Server Banner URL
	 *
	 * @return 
	 */
	public function setBannerUrl($bannerUrl = "")
	{
		$data = Base::query('sv.bannerUrl ' . ((string) $bannerUrl));
		// $data = Base::query('vars.bannerUrl ' . ((string) $bannerUrl));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * The description needs to be less than 400 characters long
	 *
	 * @param string $description Server Description
	 *
	 * @return 
	 */
	public function setServerDescription($description = "")
	{
		$data = Base::query('sv.serverDescription ' . ((string) $description));
		// $data = Base::query('vars.serverDescription ' . ((string) $description));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Try admin (admin = role) instead of vars.
	 *
	 * @param boolean $enabled Enable or Disable Killcam
	 *
	 * @return 
	 */
	public function setKillCam($enabled = true)
	{
		$data = Base::query('admin.killCam ' . ((boolean)$enabled));
		// $data = Base::query('vars.killCam ' . ((boolean)$enabled));
		return $data;
	}
}
