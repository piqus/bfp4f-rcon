<?php

/**
 * Battlefield Play4Free Support class.
 * 
 * Additional class for decoding player stats from BF P4F website.
 * 
 * @package  T4G\BFP4F
 * @author   piqus <ovirendo@gmail.com>
 * @license  GPL v3 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @version  0.3.3
 * @link     https://github.com/piqus/bfp4f-rcon
 */

namespace T4G\BFP4F\Rcon;

class Support
{
    /**
     * $weapons
     * Stores information about weapons: id, name, required level to buy without unlocking.
     * 
     * @var array
     */
    public $weapons = array (

        /******************************** Gadgets ********************************/

        // Gadgets::All
        3027 => array('name' => 'Knife',                    'required_lvl' => 0 ),//0
        2005 => array('name' => 'Grenade',                  'required_lvl' => 0 ),//2
        2043 => array('name' => 'Satellite Surveillance',   'required_lvl' => 0 ),//12
        2168 => array('name' => 'Tracer Dart',              'required_lvl' => 0 ),//0

        // Gadgets::AdrealineBandages
        8000 => array('name' => 'Adrenaline Shot',          'required_lvl' => 0 ),//0
        8003 => array('name' => 'Advanced Adrenaline Shot', 'required_lvl' => 0 ),//10
        8004 => array('name' => 'Combat Bandage',           'required_lvl' => 0 ),//10
        8002 => array('name' => 'Field Bandage',            'required_lvl' => 0 ),//0

        // Gadgets::Assault
        2023 => array('name' => 'Ammo Box',                 'required_lvl' => 0 ),//0
        2034 => array('name' => 'C-4',                      'required_lvl' => 0 ),//12
        2024 => array('name' => 'Request Reinforcements',   'required_lvl' => 0 ),//2
        2050 => array('name' => 'Smoke Grenade',            'required_lvl' => 0 ),//7

        // Gadgets::Engineer
        2046 => array('name' => 'AV Mine',                  'required_lvl' => 0 ),//0
        2054 => array('name' => 'AV RPG',                   'required_lvl' => 0 ),//7
        2021 => array('name' => 'Vehicle Repair Tool',      'required_lvl' => 0 ),//2
        2051 => array('name' => 'XM-25 AGL',                'required_lvl' => 0 ),//12

        // Gadgets::Medic
        2009 => array('name' => 'Front Line Flare',         'required_lvl' => 0 ),//12
        2030 => array('name' => 'Defibrillator',            'required_lvl' => 0 ),//7
        2004 => array('name' => 'Medic Box',                'required_lvl' => 0 ),//0

        // Gadgets::Recon
        2048 => array('name' => 'Claymore',                 'required_lvl' => 0 ),//7
        2025 => array('name' => 'Mortar Strike',            'required_lvl' => 0 ),//12
        2017 => array('name' => 'Motion Sensor',            'required_lvl' => 0 ),//2
        
        /******************************** Weapons ********************************/

        // Weapons::Assault [AR]
        3071 => array('name' => '416-Carbine',              'required_lvl' => 16),
        3007 => array('name' => 'AEK971',                   'required_lvl' => 3 ),
        3110 => array('name' => 'AK47',                     'required_lvl' => 20),
        3067 => array('name' => 'AN94',                     'required_lvl' => 15),
        3114 => array('name' => 'F2000',                    'required_lvl' => 24),
        3120 => array('name' => 'FAMAS',                    'required_lvl' => 21),
        3005 => array('name' => 'G3A4',                     'required_lvl' => 0 ),
        3127 => array('name' => 'L85A2',                    'required_lvl' => 27),
        3001 => array('name' => 'M16A2',                    'required_lvl' => 12),
        3062 => array('name' => 'M4A1',                     'required_lvl' => 18),
        3011 => array('name' => 'SCARL',                    'required_lvl' => 6 ),
        3046 => array('name' => 'STG77AUG',                 'required_lvl' => 9 ),
        3075 => array('name' => 'XM8',                      'required_lvl' => 22),
        3132 => array('name' => 'ACWR',                     'required_lvl' => 28),
        3133 => array('name' => 'A91',                      'required_lvl' => 0), //Not released yet
        

        // Weapons::Engineer [SMG]
        3073 => array('name' => '9A-91',                    'required_lvl' => 9 ),
        3069 => array('name' => 'AKS-74U',                  'required_lvl' => 18),
        3122 => array('name' => 'AS-VAL',                   'required_lvl' => 21),
        3129 => array('name' => 'G53',                      'required_lvl' => 27),
        3047 => array('name' => 'MP5',                      'required_lvl' => 20),
        3016 => array('name' => 'MP7',                      'required_lvl' => 12),
        3017 => array('name' => 'P90',                      'required_lvl' => 3 ),
        3117 => array('name' => 'PDWR',                     'required_lvl' => 22),
        3112 => array('name' => 'PP-19',                    'required_lvl' => 24),
        3018 => array('name' => 'PP2000',                   'required_lvl' => 0 ),
        3012 => array('name' => 'UMP',                      'required_lvl' => 6 ),
        3064 => array('name' => 'UZI',                      'required_lvl' => 16),
        3078 => array('name' => 'XM8C',                     'required_lvl' => 15),
        3137 => array('name' => 'M5K',                      'required_lvl' => 28),
        3136 => array('name' => 'MTAR21',                   'required_lvl' => 0), //Not Released yet

        // Weapons::Medic [LMG]
        3072 => array('name' => 'FN Minimi Para',           'required_lvl' => 6 ),
        3063 => array('name' => 'M240B',                    'required_lvl' => 16),
        3003 => array('name' => 'M249 SAW',                 'required_lvl' => 20),
        3116 => array('name' => 'M27IAR',                   'required_lvl' => 24),
        3015 => array('name' => 'M60',                      'required_lvl' => 12),
        3013 => array('name' => 'MG3',                      'required_lvl' => 0 ),
        3048 => array('name' => 'MG36',                     'required_lvl' => 18),
        3128 => array('name' => 'PECHENEG',                 'required_lvl' => 27),
        3014 => array('name' => 'PKM',                      'required_lvl' => 3 ),
        3121 => array('name' => 'QBB-95',                   'required_lvl' => 21),
        3068 => array('name' => 'QJY-88',                   'required_lvl' => 9 ),
        3113 => array('name' => 'RPK-74M',                  'required_lvl' => 22),
        3076 => array('name' => 'XM8AR',                    'required_lvl' => 15),
        3135 => array('name' => 'L86A2',                    'required_lvl' => 28),
        3134 => array('name' => 'LSAT',                     'required_lvl' => 0), //Not released yet
     

        // Weapons::Recon [SR]
        3077 => array('name' => 'GOL',                      'required_lvl' => 18),
        3111 => array('name' => 'L96',                      'required_lvl' => 24),
        3066 => array('name' => 'M110',                     'required_lvl' => 16),
        3065 => array('name' => 'M14 EBR',                  'required_lvl' => 9 ),
        3024 => array('name' => 'M24',                      'required_lvl' => 12),
        3126 => array('name' => 'M82A3',                    'required_lvl' => 27),
        3022 => array('name' => 'M95',                      'required_lvl' => 20),
        3045 => array('name' => 'SVU-A',                    'required_lvl' => 6 ),
        3119 => array('name' => 'SKS',                      'required_lvl' => 21),
        3004 => array('name' => 'SV98',                     'required_lvl' => 0 ),
        3023 => array('name' => 'SVD',                      'required_lvl' => 3 ),        
        3070 => array('name' => 'VSS Vintorez',             'required_lvl' => 15),
        3139 => array('name' => 'JNG90',                    'required_lvl' => 28),
        3138 => array('name' => 'M98B',                     'required_lvl' => 0), //Not released yet

        // Weapons::Shotguns
        3000 => array('name' => '870 Combat',               'required_lvl' => 4 ),
        3002 => array('name' => '870 Combat BF3 Edition',   'required_lvl' => 0 ),
        3130 => array('name' => 'MK3A1',                    'required_lvl' => 27),
        3025 => array('name' => 'SAIGA',                    'required_lvl' => 7 ),
        3008 => array('name' => 'SPAS-12',                  'required_lvl' => 10),
        3061 => array('name' => 'SPAS-12 Elite',            'required_lvl' => 23),
        3038 => array('name' => 'SPAS-12 Veteran',          'required_lvl' => 19),
        3044 => array('name' => 'SPAS-15',                  'required_lvl' => 13),
        3026 => array('name' => 'USAS-12',                  'required_lvl' => 17),
        3050 => array('name' => 'USAS-12 Elite',            'required_lvl' => 25),
        3029 => array('name' => 'USAS-12 Veteran',          'required_lvl' => 21),

        // Weapons::Secondary guns
        3131 => array('name' => '93R',                      'required_lvl' => 0 ),
        3115 => array('name' => 'Deagle 50',                'required_lvl' => 24),
        3125 => array('name' => 'EASY-Piece',               'required_lvl' => 0 ),
        3019 => array('name' => 'M1911',                    'required_lvl' => 11),
        3052 => array('name' => 'M1911 Elite',              'required_lvl' => 22),
        3037 => array('name' => 'M1911 Veteran',            'required_lvl' => 18),
        3006 => array('name' => 'M9',                       'required_lvl' => 0 ),
        3009 => array('name' => 'M9 ONLYTHEFEW',            'required_lvl' => 0 ),
        3020 => array('name' => 'MP-412 Rex',               'required_lvl' => 14),
        3021 => array('name' => 'MP-443',                   'required_lvl' => 5 ),
        3051 => array('name' => 'MP-443 Elite',             'required_lvl' => 20),
        3041 => array('name' => 'MP-443 Veteran',           'required_lvl' => 16),        
        3124 => array('name' => 'Nosferatu',                'required_lvl' => 0 ),
        3123 => array('name' => 'Scattergun',               'required_lvl' => 21),
        3118 => array('name' => 'Steel Deagle 50',          'required_lvl' => 0 ),
        3043 => array('name' => 'P226',                     'required_lvl' => 8 ),
        
        /******************************* Weapons +3 *******************************/

        // Weapons+3::Assault [AR]
        3099 => array('name' => '416-Carbine +3',           'required_lvl' => 0 ),//16
        3096 => array('name' => 'AEK971 +3',                'required_lvl' => 0 ),//3
        3098 => array('name' => 'AN-94 +3',                 'required_lvl' => 0 ),//15
        3095 => array('name' => 'M16A2 +3',                 'required_lvl' => 0 ),//12
        3097 => array('name' => 'M4A1 +3',                  'required_lvl' => 0 ),//18
        3093 => array('name' => 'SCARL +3',                 'required_lvl' => 0 ),//6
        3094 => array('name' => 'STG77AUG +3',              'required_lvl' => 0 ),//9
        3100 => array('name' => 'XM8 +3',                   'required_lvl' => 0 ),//22

        // Weapons+3::Engineer [SMG]
        3091 => array('name' => '9A-91 +3',                 'required_lvl' => 0 ),//9
        3090 => array('name' => 'AKS-74U +3',               'required_lvl' => 0 ),//18
        3088 => array('name' => 'MP5 +3',                   'required_lvl' => 0 ),//20
        3086 => array('name' => 'MP7 +3',                   'required_lvl' => 0 ),//12
        3087 => array('name' => 'P90 +3',                   'required_lvl' => 0 ),//3
        3085 => array('name' => 'UMP +3',                   'required_lvl' => 0 ),//6
        3089 => array('name' => 'UZI +3',                   'required_lvl' => 0 ),//16
        3092 => array('name' => 'XM8C +3',                  'required_lvl' => 0 ),//15

        // Weapons+3::Medic [LMG]
        3083 => array('name' => 'FN Minimi Para +3',        'required_lvl' => 0 ),//6
        3081 => array('name' => 'M240B +3',                 'required_lvl' => 0 ),//16
        3074 => array('name' => 'M249 SAW +3',              'required_lvl' => 0 ),//20
        3079 => array('name' => 'M60 +3',                   'required_lvl' => 0 ),//12
        3101 => array('name' => 'MG36 +3',                  'required_lvl' => 0 ),//18
        3080 => array('name' => 'PKM +3',                   'required_lvl' => 0 ),//3
        3082 => array('name' => 'QJY-88 +3',                'required_lvl' => 0 ),//9
        3084 => array('name' => 'XM8AR +3',                 'required_lvl' => 0 ),//15

        // Weapons+3::Recon [SR]
        3109 => array('name' => 'GOL +3',                   'required_lvl' => 0 ),//18
        3107 => array('name' => 'M110 +3',                  'required_lvl' => 0 ),//16
        3106 => array('name' => 'M14 EBR +3',               'required_lvl' => 0 ),//9
        3103 => array('name' => 'M24 +3',                   'required_lvl' => 0 ),//12
        3102 => array('name' => 'M95 +3',                   'required_lvl' => 0 ),//20
        3104 => array('name' => 'SVD +3',                   'required_lvl' => 0 ),//3
        3105 => array('name' => 'SVU-A +3',                 'required_lvl' => 0 ),//6
        3108 => array('name' => 'VSS Vintorez +3',          'required_lvl' => 0 ),//15
    );
    
    /**
     * $gameModes
     * Stores information about Game Modes: id, name
     * 
     * @var array
     */
    public $gameModes = array (
        0 => 'TDM',
        1 => 'HOTH',
        2 => 'TUT',
        3 => 'CQ',
        4 => 'Assault',
        5 => 'Rush'   
    );
    
    /**
     * $vehicles
     * Stores information about Vehicles: id, name
     * 
     * @var array
     */
    public $vehicles = array (
        1 => 'Jeep',
        2 => 'Tank',
        3 => 'APC',
        4 => 'Jet',
        5 => 'Attack Heli',
        6 => 'Scout Heli',
        7 => 'Transport Heli',
        8 => 'Boat',
        9 => 'AA',
        10 => 'AT',
        11 => 'Parachute',
        12 => 'Soldier',
        13 => 'Plane',
        14 => 'Static',
        15 => '??'  
    );
    
    /**
     * $events
     * Stores information about events: id, name
     * 
     * @var array
     */
    public $events = array (
        12 => 'Road Kill',
        19 => 'Headshot',
        24 => 'Double Kill',
        25 => 'Triple Kill',
        26 => 'Multi Kill',
        27 => 'Flag Defense',
        28 => 'Flag Offense',
        29 => 'Flag Capture',
        30 => 'Driver Kill Assist',
        31 => 'Kill Assist',
        32 => 'Critical Kill Assist',
        33 => 'Revive',
        34 => 'Save Kill',
        35 => 'Vehicle Repair',
        36 => 'Ranged Kill',
        37 => 'Kill',
        38 => 'Destroyed Vehicle',
        39 => 'Suicide',
        40 => 'Tracer Kill Assist',
        41 => 'Ammo Supply',
        42 => 'Health Supply',
        43 => 'Level Up',
        44 => 'Level Up Intro',
        45 => 'Tracer Attach',
        46 => 'Knife Kill',
        47 => 'Revenge',
        48 => 'Passenger Kill Assist',
        49 => 'Spotter Bonus',
        50 => 'Reinforcements',
        51 => 'Killed by Throwback',
        52 => 'Motion Sensor Assist',
        53 => 'Rush Disarmed MCOM',
        54 => 'Rush Destroyed MCOM',
        55 => 'Rush Kill Arming Player',
        56 => 'Rush Kill Disarming Player',
        57 => 'Rush Defend Arming Player',
        58 => 'Rush Defend Disarming Player',
        59 => 'Rush Armed MCOM',
        60 => 'Medic Flare Spawn'
    );

    /**
     * Get Name of Weapon By ID.
     *
     * @param int $weaponId Weapon ID
     * 
     * @access public
     * @uses $weapons Collection with weapon IDs, names and required levels
     * 
     * @return string Weapon name
     */
    public function weaponGetName($weaponId)
    {
        return $this->weapons[$weaponId]['name'];
    }

    /**
     * Get Required Level to buy this Weapon without unlocking.
     *
     * @param int $weaponId Weapon ID
     * 
     * @access public
     * @uses $weapons Collection with weapon IDs, names and required levels
     * @return string Weapon required level
     */
    public function weaponGetReqLvl($weaponId)
    {
        return $this->weapons[$weaponId]['required_lvl'];
    }

    /**
     * Parse mode ID to name (GameModeMapStats, GameModeStats).
     *
     * @param int $modeId Mode ID
     *
     * @access public
     * @uses $gameModes Collection with mode IDs and names
     * @return string Game mode name
     */
    public function modeGetName($modeId)
    {
        return $this->gameModes[$modeId];
    }

    /**
     * Parse vehicle ID to name (VehicleStats).
     *
     * @param int $vehicleId Vehicle ID
     *
     * @access public
     * @uses $vehicles Collection with vehicle IDs and names
     * @return string Vehicle name
     */
    public function vehicleGetName($vehicleId)
    {
        return $this->vehicles[$vehicleId];
    }

    /**
     * Parse event ID to name (GameEventStats).
     *
     * @param int $eventId Event ID
     *
     * @access public
     * @uses $events Colection with event IDs and names     * 
     * @return string Event name
     */
    public function eventGetName($eventId)
    {
        return $this->events[$eventId];
    }
}
