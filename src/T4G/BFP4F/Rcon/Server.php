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

	/**
	 * Leftover from BFBC2
	 * Set the admin password for the server, use it with an empty string("") to rese
	 *
	 * @param string $password 
	 *
	 * @return 
	 */
	public function setAdminPassword($password = "")
	{
		$data = Base::query('vars.admin Password ' . ((string)$password));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set the game password for the server, use it with an empty string ("") to reset
	 *
	 * @param string $password 
	 *
	 * @return 
	 */
	public function setGamePassword($password = "")
	{
		$data = Base::query('vars.gamePassword ' . ((string)$password));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set if the server will use PunkBuster or not
	 *
	 * @param boolean $enabled 
	 *
	 * @return 
	 */
	public function setPunkBuster($enabled = false)
	{
		$data = Base::query('vars.punkBuster ' . ((bool)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set hardcore mode
	 * Works after map change
	 *
	 * @param boolean $enabled 
	 *
	 * @return 
	 */
	public function setHardCore($enabled = false)
	{
		$data = Base::query('vars.hardCore ' . ((bool)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set ranked or not
	 *
	 * @param boolean $enabled 
	 *
	 * @return 
	 */
	public function setRanked($enabled = true)
	{
		$data = Base::query('vars.ranked ' . ((bool)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Says ‘OK’ but still allow higher ranked players to join
	 *
	 * @param int $rank Rank. To disable rank limit use -1 as value
	 *
	 * @return 
	 */
	public function setTeamBalance($rank = -1)
	{
		$data = Base::query('vars.rankLimit ' . ((int)$rank));
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
		$data = Base::query('vars.teamBalance ' . ((bool)$enabled));
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
	public function setMaxPlayerLimit($enabled = false)
	{
		$data = Base::query('vars.friendlyFire ' . ((bool)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Retrieve the current maximum number of players
	 *
	 * @return This value is computed from all the different player limits in effect at any   given moment
	 */
	public function setMaxPlayerLimit()
	{
		$data = Base::query('vars.currentPlayerLimit');
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
		$data = Base::query('vars.maxPlayerLimit');
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
		$data = Base::query('vars.playerLimit ' . ((int) $numOfPlayers));
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
		$data = Base::query('admin.bannerUrl ' . ((string) $bannerUrl));
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
		$data = Base::query('admin.serverDescription ' . ((string) $description));
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
		$data = Base::query('vars.killCam ' . ((boolean)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set if minimap is enabled. Probably works after map switch.
	 *
	 * @param boolean $enabled Enable or Disable Minimap
	 *
	 * @return 
	 */
	public function setMiniMap($enabled = true)
	{
		$data = Base::query('vars.miniMap ' . ((boolean)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 * Set if crosshair for all weapons is enabled. Probably works after map switch.
	 *
	 * @param boolean $enabled Enable or Disable Cross Hair
	 *
	 * @return 
	 */
	public function setCrossHair($enabled = true)
	{
		$data = Base::query('vars.crossHair ' . ((boolean)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 *
	 * @param boolean $enabled Enable or Disable 3D Spotting
	 *
	 * @return 
	 */
	public function set3dSpotting($enabled = true)
	{
		$data = Base::query('vars.3dSpotting ' . ((boolean)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 *
	 * @param boolean $enabled Enable or Disable Map Spotting
	 *
	 * @return 
	 */
	public function setMiniMapSpotting($enabled = true)
	{
		$data = Base::query('vars.miniMapSpotting ' . ((boolean)$enabled));
		return $data;
	}

	/**
	 * Leftover from BFBC2
	 *
	 * @param boolean $enabled Enable or Disable 3rd Person Camera
	 *
	 * @return 
	 */
	public function setThirdPerson($enabled = true)
	{
		$data = Base::query('vars.thirdPersonVehicleCameras ' . ((boolean)$enabled));
		return $data;
	}
}