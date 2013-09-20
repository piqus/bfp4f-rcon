<?php

/**
 * Battlefield Play4Free Stats viewer.
 *
 * Provides methods to retrieve player stats and decode JSON to PHP object.
 * 
 * @package  T4G\BFP4F
 * @author   piqus <ovirendo@gmail.com>
 * @license  GPL v3 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @version  0.3.4
 * @link     https://github.com/piqus/bfp4f-rcon
 */

namespace T4G\BFP4F\Rcon;

class Stats
{
    /**
     * $_profileID
     * ProfileID or also known as nucluesId
     * 
     * @access private
     * @var integer 10 chars long
     */
    private $_profileID = 0;

    /**
     * $_soldierID
     * SoldierID or cdKeyHash
     * 
     * @access private
     * @var integer usually 9 chars long
     */    
    private $_soldierID = 0;

    /**
     * Initialize 2 fields: nucleus and soldierID
     * 
     * @param numeric $nucleusID ProfileID
     * @param numeric $soldierID SoldierID
     */
    function __construct($nucleusID, $soldierID) 
    {
        $this->_profileID = (string) $nucleusID;
        $this->_soldierID = (string) $soldierID;
    }

    /**
     * Retrieve User Info data
     *
     * @access public
     * @return object JSON
     */
    public function retrieveUserInfo()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/userInfo/" .$this->_profileID);
        $soldiers = json_decode($data);
        return $soldiers;
    }

    /**
     * Retrieve Soldiers
     *
     * @access public
     * @return object JSON
     */
    public function retrieveSoldiers()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/soldiers/" .$this->_profileID);
        $soldiers = json_decode($data);
        return $soldiers;
    }

     /**
     * Retrieve Core Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveCoreStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22CoreStats%22]");
        $coreStats = json_decode($data);
        return $coreStats;
    }

    /**
     * Retrieve Bad Player Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveBadPlayerStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22BadPlayerStats%22]");
        $badPlayerStats = json_decode($data);
        return $badPlayerStats;
    }

    /**
     * Retrieve Vehicle Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveVehicleStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22VehicleStats%22]");
        $vehicleStats = json_decode($data);
        return $vehicleStats;
    }

    /**
     * Retrieve Map Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveMapStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22MapStats%22]");
        $mapStats = json_decode($data);
        return $mapStats;
    }

    /**
     * Retrieve Game Mode Map Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveGameModeMapStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22GameModeMapStats%22]");
        $gameModeMapStats = json_decode($data);
        return $gameModeMapStats;
    }

    /**
     * Retrieve Weapon Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveWeaponStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22WeaponStats%22]");
        $weapons = json_decode($data);
        return $weapons;
    }

    /**
     * Retrieve Game Mode Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveGameModeStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22GameModeStats%22]");
        $gameModeStats = json_decode($data);
        return $gameModeStats;
    }

    /**
     * Retrieve Rush Map Stats
     *
     * @access public
     * @return object JSON
     */
    public function retrieveRushMapStats () 
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22RushMapStats%22]&_?=1351945928776");
        $rushMapStats = json_decode($data);
        return $rushMapStats;
    }

    /**
     * Retrieve Game Event Stats
     *
     * @access public 
     * @return object JSON
     */
    public function retrieveGameEventStats ()
    {
        $data = file_get_contents("http://battlefield.play4free.com/en/profile/stats/" .$this->_profileID. "/" .$this->_soldierID. "?g=[%22GameEventStats%22]");
        $gameEventStats = json_decode($data);
        return $gameEventStats;
    } 

    /**
     * Retrieve Loadout
     *      
     * @access public
     * @return object JSON
     */
    public function retrieveLoadout ()
    {
        $data = file_get_contents('http://battlefield.play4free.com/pl/profile/loadout/' .$this->_profileID. '/' .$this->_soldierID);
        $loadout = json_decode($data, true);
        return $loadout;
    }

}
