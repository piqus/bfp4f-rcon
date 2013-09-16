<?php
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
        // Gadgets
        2046 => array('name' => 'Grenade'),
        2051 => array('name' => 'Mortar Strike'),
        2030 => array('name' => 'Defibrillator'),
        2023 => array('name' => 'C4'),
        2024 => array('name' => 'Claymore'),
        2021 => array('name' => 'RPG'),
        2062 => array('name' => 'XM-25'),
        2017 => array('name' => 'Mine'),
        
          // Weapons
// The Default minimum UnlockLevel in line above every Weapon
// reference = http://p4f.nodester.com/images/weapons
    //Default UnlockLevel is 16
        3000 => array('name' => '416-Carbine',              'required_lvl' => 16),
    //Default UnlockLevel is 16
        3001 => array('name' => '416CARBINE +3',            'required_lvl' => 16),
    //Default UnlockLevel is 4
        3002 => array('name' => '870 Combat',               'required_lvl' => 4),
    //Default UnlockLevel is 4
        3003 => array('name' => '870 Combat BF3 Edition',   'required_lvl' => 4),
    //Default UnlockLevel is NONE
        3004 => array('name' => '93R',                      'required_lvl' => 0),
    //Default UnlockLevel is 9
        3005 => array('name' => '9A-91',                    'required_lvl' => 9),
    //Default UnlockLevel is 9
        3006 => array('name' => '9A91 +3',                  'required_lvl' => 9),
    //Default UnlockLevel is 3
        3007 => array('name' => 'AEK971 +3',                'required_lvl' => 3),
    //Default UnlockLevel is 3
        3008 => array('name' => 'AEK971',                   'required_lvl' => 3),
    //Default UnlockLevel is 20
        3009 => array('name' => 'AK47',                     'required_lvl' => 20),
    //Default UnlockLevel is 18
        3011 => array('name' => 'AKS-74U',                  'required_lvl' => 18),
    //Default UnlockLevel is 18
        3012 => array('name' => 'AKS74U +3',                'required_lvl' => 18),
    //Default UnlockLevel is 15
        3013 => array('name' => 'AN94 +3',                  'required_lvl' => 15),
    //Default UnlockLevel is 15
        3014 => array('name' => 'AN94',                     'required_lvl' => 15),
    //Default UnlockLevel is 21
        3015 => array('name' => 'AS-VAL',                   'required_lvl' => 21),
    //Default UnlockLevel is NONE
        3016 => array('name' => 'Combat Knife',             'required_lvl' => 0),
    //Default UnlockLevel is 24
        3017 => array('name' => 'Deagle 50',                'required_lvl' => 24),
    //Default UnlockLevel is NONE
        3018 => array('name' => 'EASY-Piece',               'required_lvl' => 0),
    //Default UnlockLevel is 25
        3019 => array('name' => 'Elite USAS-12',            'required_lvl' => 25),
    //Default UnlockLevel is 23
        3020 => array('name' => 'Elite SPAS-12',            'required_lvl' => 23),
    //Default UnlockLevel is 22
        3021 => array('name' => 'Elite M1911',              'required_lvl' => 22),
    //Default UnlockLevel is 20
        3022 => array('name' => 'Elite MP-443',             'required_lvl' => 20),
    //Default UnlockLevel is 24
        3023 => array('name' => 'F2000',                    'required_lvl' => 24),
    //Default UnlockLevel is 21
        3024 => array('name' => 'FAMAS',                    'required_lvl' => 21),
    //Default UnlockLevel is 6
        3025 => array('name' => 'FN Minimi Para',           'required_lvl' => 6),
    //Default UnlockLevel is 3
        3026 => array('name' => 'FNP90',                    'required_lvl' => 3),
    //Default UnlockLevel is 3
        3027 => array('name' => 'FNP90 +3',                 'required_lvl' => 3),
    //Default UnlockLevel is 6
        3029 => array('name' => 'FNPARA +3',                'required_lvl' => 6),
    //Default UnlockLevel is NONE
        3037 => array('name' => 'G3A4',                     'required_lvl' => 0),
    //Default UnlockLevel is 27
        3038 => array('name' => 'G53',                      'required_lvl' => 27),
    //Default UnlockLevel is 18
        3041 => array('name' => 'GOL +3',                   'required_lvl' => 18),
    //Default UnlockLevel is 18
        3043 => array('name' => 'GOL',                      'required_lvl' => 18),
    //Default UnlockLevel is 27
        3044 => array('name' => 'L85A2',                    'required_lvl' => 27),
    //Default UnlockLevel is 24
        3045 => array('name' => 'L96',                      'required_lvl' => 24),
    //Default UnlockLevel is 16
        3046 => array('name' => 'M110 +3',                  'required_lvl' => 16),
    //Default UnlockLevel is 16
        3047 => array('name' => 'M110',                     'required_lvl' => 16),
    //Default UnlockLevel is 9
        3048 => array('name' => 'M14 EBR',                  'required_lvl' => 9),
    //Default UnlockLevel is 9
        3049 => array('name' => 'M14 +3',                   'required_lvl' => 9),
    //Default UnlockLevel is 12
        3051 => array('name' => 'M16A2 +3',                 'required_lvl' => 12),
    //Default UnlockLevel is 12
        3052 => array('name' => 'M16A2',                    'required_lvl' => 12),
    //Default UnlockLevel is 11
        3061 => array('name' => 'M1911',                    'required_lvl' => 11),
    //Default UnlockLevel is 12
        3062 => array('name' => 'M24 +3',                   'required_lvl' => 12),
    //Default UnlockLevel is 12
        3063 => array('name' => 'M24',                      'required_lvl' => 12),
    //Default UnlockLevel is 16
        3064 => array('name' => 'M240B',                    'required_lvl' => 16),
    //Default UnlockLevel is 16
        3065 => array('name' => 'M240 +3',                  'required_lvl' => 16),
    //Default UnlockLevel is 20
        3066 => array('name' => 'M249SAW +3',               'required_lvl' => 20),
    //Default UnlockLevel is 20
        3067 => array('name' => 'M249 SAW',                 'required_lvl' => 20),
    //Default UnlockLevel is 24
        3068 => array('name' => 'M27IAR',                   'required_lvl' => 24),
    //Default UnlockLevel is 18
        3069 => array('name' => 'M4 +3',                    'required_lvl' => 18),
    //Default UnlockLevel is 18
        3070 => array('name' => 'M4A1',                     'required_lvl' => 18),
    //Default UnlockLevel is 12
        3071 => array('name' => 'M60 +3',                   'required_lvl' => 12),
    //Default UnlockLevel is 12
        3072 => array('name' => 'M60',                      'required_lvl' => 12),
    //Default UnlockLevel is 27
        3073 => array('name' => 'M82A3',                    'required_lvl' => 27),
    //Default UnlockLevel is NONE
        3074 => array('name' => 'M9 ONLYTHEFEW',            'required_lvl' => 0),
    //Default UnlockLevel is NONE
        3075 => array('name' => 'M9',                       'required_lvl' => 0),
    //Default UnlockLevel is 20
        3076 => array('name' => 'M95 +3',                   'required_lvl' => 20),
    //Default UnlockLevel is 20
        3077 => array('name' => 'M95',                      'required_lvl' => 20),
    //Default UnlockLevel is NONE
        3078 => array('name' => 'MG3',                      'required_lvl' => 0),
    //Default UnlockLevel is 18
        3079 => array('name' => 'MG36',                     'required_lvl' => 18),
    //Default UnlockLevel is 18
        3080 => array('name' => 'MG36 +3',                  'required_lvl' => 18),
    //Default UnlockLevel is NONE
        3081 => array('name' => 'MK3A1',                    'required_lvl' => 0),
    //Default UnlockLevel is 14
        3082 => array('name' => 'MP412',                    'required_lvl' => 14),
    //Default UnlockLevel is 5
        3083 => array('name' => 'MP443',                    'required_lvl' => 5),
    //Default UnlockLevel is 20
        3084 => array('name' => 'MP5 +3',                   'required_lvl' => 20),
    //Default UnlockLevel is 20
        3085 => array('name' => 'MP5',                      'required_lvl' => 20),
    //Default UnlockLevel is 12
        3086 => array('name' => 'MP7 +3',                   'required_lvl' => 12),
    //Default UnlockLevel is 12
        3087 => array('name' => 'MP7',                      'required_lvl' => 12),
    //Default UnlockLevel is NONE
        3088 => array('name' => 'Nosferatu',                'required_lvl' => 0),
    //Default UnlockLevel is 8
        3089 => array('name' => 'P226',                     'required_lvl' => 8),
    //Default UnlockLevel is 22
        3090 => array('name' => 'PDWR',                     'required_lvl' => 22),
    //Default UnlockLevel is 27
        3091 => array('name' => 'PECHENEG',                 'required_lvl' => 27),
    //Default UnlockLevel is 3
        3092 => array('name' => 'PKM +3',                   'required_lvl' => 3),
    //Default UnlockLevel is 3
        3093 => array('name' => 'PKM',                      'required_lvl' => 3),
    //Default UnlockLevel is 24
        3094 => array('name' => 'PP-19',                    'required_lvl' => 24),
    //Default UnlockLevel is NONE
        3095 => array('name' => 'PP2000',                   'required_lvl' => 0),
    //Default UnlockLevel is 21
        3096 => array('name' => 'QBB-95',                   'required_lvl' => 21),
    //Default UnlockLevel is 9
        3097 => array('name' => 'QJY-88',                   'required_lvl' => 9),
    //Default UnlockLevel is 9
        3098 => array('name' => 'QJY88 +3',                 'required_lvl' => 9),
    //Default UnlockLevel is 22
        3099 => array('name' => 'RPK-74M',                  'required_lvl' => 22),
    //Default UnlockLevel is 7
        3100 => array('name' => 'SAIGA',                    'required_lvl' => 7),
    //Default UnlockLevel is 6
        3101 => array('name' => 'SCARL +3',                 'required_lvl' => 6),
    //Default UnlockLevel is 6
        3102 => array('name' => 'SCARL',                    'required_lvl' => 6),
    //Default UnlockLevel is 21
        3103 => array('name' => 'SKS',                      'required_lvl' => 21),
    //Default UnlockLevel is 10
        3104 => array('name' => 'SPAS-12',                  'required_lvl' => 10),
    //Default UnlockLevel is 13
        3105 => array('name' => 'SPAS-15',                  'required_lvl' => 13),
    //Default UnlockLevel is 9
        3106 => array('name' => 'STG77AUG',                 'required_lvl' => 9),
    //Default UnlockLevel is 9
        3107 => array('name' => 'STG77AUG +3',              'required_lvl' => 9),
    //Default UnlockLevel is NONE
        3108 => array('name' => 'SV98',                     'required_lvl' => 0),
    //Default UnlockLevel is 3
        3109 => array('name' => 'SVD +3',                   'required_lvl' => 3),
    //Default UnlockLevel is 3
        3110 => array('name' => 'SVD',                      'required_lvl' => 3),
    //Default UnlockLevel is 6
        3111 => array('name' => 'SVU +3',                   'required_lvl' => 6),
    //Default UnlockLevel is 6
        3112 => array('name' => 'SVU-A',                    'required_lvl' => 6),
    //Default UnlockLevel is 21
        3113 => array('name' => 'Scattergun',               'required_lvl' => 21),
    //Default UnlockLevel is 25
        3114 => array('name' => 'Steel Deagle 50',          'required_lvl' => 25),
    //Default UnlockLevel is 6
        3115 => array('name' => 'UMP +3',                   'required_lvl' => 6),
    //Default UnlockLevel is 6
        3116 => array('name' => 'UMP',                      'required_lvl' => 6),
    //Default UnlockLevel is 17
        3117 => array('name' => 'USAS12',                   'required_lvl' => 17),
    //Default UnlockLevel is 16
        3118 => array('name' => 'UZI +3',                   'required_lvl' => 16),
    //Default UnlockLevel is 16
        3119 => array('name' => 'UZI',                      'required_lvl' => 16),
    //Default UnlockLevel is 15
        3120 => array('name' => 'VSS +3',                   'required_lvl' => 15),
    //Default UnlockLevel is 15
        3121 => array('name' => 'VSS Vintorez',             'required_lvl' => 15),
    //Default UnlockLevel is 19
        3122 => array('name' => 'Veteran SPAS-12',          'required_lvl' => 19),
    //Default UnlockLevel is 18
        3123 => array('name' => 'Veteran M1911',            'required_lvl' => 18),
    //Default UnlockLevel is 21
        3124 => array('name' => 'Veteran USAS-12',          'required_lvl' => 21),
    //Default UnlockLevel is 16
        3125 => array('name' => 'Veteran MP-443',           'required_lvl' => 16),
    //Default UnlockLevel is 22
        3126 => array('name' => 'XM8 +3',                   'required_lvl' => 22),
    //Default UnlockLevel is 22
        3127 => array('name' => 'XM8',                      'required_lvl' => 22),
    //Default UnlockLevel is 15
        3128 => array('name' => 'XM8AR',                    'required_lvl' => 15),
    //Default UnlockLevel is 15
        3129 => array('name' => 'XM8AR +3',                 'required_lvl' => 15),
    //Default UnlockLevel is 15
        3130 => array('name' => 'XM8C',                     'required_lvl' => 15),
    //Default UnlockLevel is 15
        3131 => array('name' => 'XM8C +3',                  'required_lvl' => 15),

       // Gadgets
// The default minimum needed TrainingsPoints or UnlockLevel in line above every Gadget
// without Prebuy of TrainingsPoints
// reference = http://www.skills.czechbattlefield.info/skilltree.html 
    //Default UnlockLevel is NONE
        2004 => array('name' => 'Adrenaline Shot Dart',             'required_lvl' => 0),
    //Default UnlockLevel is 10
        2005 => array('name' => 'Advanced Adrenaline Shot',         'required_lvl' => 10),
    //Default UnlockLevel is NONE
        2009 => array('name' => 'Ammo Box',                         'required_lvl' => 0),
    //Minimum TrainingsPoints needed is 6 so UnlockLevel is 7
        2017 => array('name' => 'Anti-Vehicle Mine',                'required_lvl' => 7),
    //Default UnlockLevel is NONE
        2021 => array('name' => 'Anti-Vehicle RPG',                 'required_lvl' => 0),
    //Minimumt TrainingsPoints needed is 11 so UnlockLevel is 12
        2023 => array('name' => 'C-4',                              'required_lvl' => 12),
    //Minimum TrainingsPoints needed is 6 so UnlockLevel is 7
        2024 => array('name' => 'Claymore',                         'required_lvl' => 7),
    //Minimum TrainingsPoints needed is 6 so UnlockLevel is 7
        2030 => array('name' => 'Combat Defibrillator',             'required_lvl' => 7),
    //Default UnlockLevel is 10
        2034 => array('name' => 'Combat Bandage',                   'required_lvl' => 10),
    //Default UnlockLevel is NONE
        2043 => array('name' => 'Field Bandage',                    'required_lvl' => 0),
    //Minimum TrainingsPoints needed is 1 so UnlockLevel is 2
        2046 => array('name' => 'Fragmentation Grenade',            'required_lvl' => 2),
    //Minimum TrainingsPoints needed is 11 so UnlockLevel is 12
        2048 => array('name' => 'Front Line Flare',                 'required_lvl' => 12),
    //Default UnlockLevel is NONE
        2050 => array('name' => 'Medic Box',                        'required_lvl' => 0),
    //Minimumt TrainingsPoints needed is 11 so UnlockLevel is 12
        2051 => array('name' => 'Mortar Strike',                    'required_lvl' => 12),
    //Minimum TrainingsPoints needed is 1 so UnlockLevel is 2
        2054 => array('name' => 'Motion Sensor',                    'required_lvl' => 2),
    //Minimum TrainingsPoints needed is 1 so UnlockLevel is 2
        2056 => array('name' => 'Request Reinforcements'            'required_lvl' => 2),
    //Minimum TrainingsPoints needed is 11 so UnlockLevel is 12
        2058 => array('name' => 'Satellite Surveillance'            'required_lvl' => 12),
    //Minimum TrainingsPoints needed is 6 so UnlockLevel is 7
        2060 => array('name' => 'Smoke Grenade',                    'required_lvl' => 7),
    //Minimum TrainingsPoints needed is 1 so UnlockLevel is 2
        2060 => array('name' => 'Vehicle Repair Tool',              'required_lvl' => 2),
    //Minimum TrainingsPoints needed is 11 so UnlockLevel is 12
        2062 => array('name' => 'XM-25 Airburst Grenade Launcher',  'required_lvl' => 12),
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
     * Get Name of Weapon By ID
     *
     * @param int $weaponId WeaponID
     * 
     * @access public
     * @return stdClass JSON
     */
    public function weaponGetName($weaponId)
    {
        return $this->weapons[$weaponId]['name'];
    }

    /**
     * Get Required Level to buy this Weapon without unlocking.
     *
     * @param int $weaponId WeaponID
     * 
     * @access public
     * @return stdClass JSON
     */
    public function weaponGetReqLvl($weaponId)
    {
        return $this->weapons[$weaponId]['required_lvl'];
    }
}
