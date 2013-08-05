<?php
namespace T4G\BFP4F\Rcon;

class Support
{
    /**
     * $data
     * Stores information about weapons: id, name, required level to buy without unlocking.
     * 
     * @var array
     */
    public $data = array (
        // Weapons
        3000 => array('name' => '870 Combat', 'required_lvl' => 4),
        3001 => array('name' => 'M16A2', 'required_lvl' => 12),
        3002 => array('name' => '870 Combat BF3 Edition', 'required_lvl' => 0),
        3003 => array('name' => 'M249 SAW', 'required_lvl' => 20),
        3004 => array('name' => 'SV98', 'required_lvl' => 0),
        3005 => array('name' => 'G3A4', 'required_lvl' => 0),
        3006 => array('name' => 'M9', 'required_lvl' => 0),
        3007 => array('name' => 'AEK971', 'required_lvl' => 3),
        3008 => array('name' => 'SPAS-12', 'required_lvl' => 10),
        3009 => array('name' => 'M9 ONLYTHEFEW', 'required_lvl' => 0),
        3011 => array('name' => 'SCARL', 'required_lvl' => 6),
        3012 => array('name' => 'UMP', 'required_lvl' => 6),
        3013 => array('name' => 'MG3', 'required_lvl' => 0),
        3014 => array('name' => 'PKM', 'required_lvl' => 3),
        3015 => array('name' => 'M60', 'required_lvl' => 12),
        3016 => array('name' => 'MP7', 'required_lvl' => 12),
        3017 => array('name' => 'FNP90', 'required_lvl' => 3),
        3018 => array('name' => 'PP2000', 'required_lvl' => 0),
        3019 => array('name' => 'M1911', 'required_lvl' => 11),
        3020 => array('name' => 'MP412', 'required_lvl' => 14),
        3021 => array('name' => 'MP443', 'required_lvl' => 5),
        3022 => array('name' => 'M95', 'required_lvl' => 20),
        3023 => array('name' => 'SVD', 'required_lvl' => 3),
        3024 => array('name' => 'M24', 'required_lvl' => 12),
        3025 => array('name' => 'SAIGA', 'required_lvl' => 7),
        3026 => array('name' => 'USAS12', 'required_lvl' => 17),
        3029 => array('name' => 'Veteran USAS-12', 'required_lvl' => 21),
        3037 => array('name' => 'Veteran M1911', 'required_lvl' => 18),
        3038 => array('name' => 'Veteran SPAS-12', 'required_lvl' => 19),
        3041 => array('name' => 'Veteran MP-443', 'required_lvl' => 16),
        3043 => array('name' => 'P226', 'required_lvl' => 8),
        3044 => array('name' => 'SPAS-15', 'required_lvl' => 13),
        3045 => array('name' => 'SVU-A', 'required_lvl' => 6),
        3046 => array('name' => 'STG77AUG', 'required_lvl' => 9),
        3047 => array('name' => 'MP5', 'required_lvl' => 20),
        3048 => array('name' => 'MG36', 'required_lvl' => 18),
        3050 => array('name' => 'Elite USAS-12', 'required_lvl' => 25),
        3051 => array('name' => 'Elite MP-443', 'required_lvl' => 20),
        3052 => array('name' => 'Elite M1911', 'required_lvl' => 22),
        3061 => array('name' => 'Elite SPAS-12', 'required_lvl' => 23),
        3062 => array('name' => 'M4A1', 'required_lvl' => 18),
        3063 => array('name' => 'M240B', 'required_lvl' => 16),
        3064 => array('name' => 'UZI', 'required_lvl' => 16),
        3065 => array('name' => 'M14 EBR', 'required_lvl' => 9),
        3066 => array('name' => 'M110', 'required_lvl' => 16),
        3067 => array('name' => 'AN94', 'required_lvl' => 15),
        3068 => array('name' => 'QJY-88', 'required_lvl' => 9),
        3069 => array('name' => 'AKS-74U', 'required_lvl' => 18),
        3070 => array('name' => 'VSS Vintorez', 'required_lvl' => 15),
        3071 => array('name' => '416-Carbine', 'required_lvl' => 16),
        3072 => array('name' => 'FN Minimi Para', 'required_lvl' => 6),
        3073 => array('name' => '9A-91', 'required_lvl' => 9),
        3074 => array('name' => 'M249SAW +3', 'required_lvl' => 0),
        3075 => array('name' => 'XM8', 'required_lvl' => 22),
        3076 => array('name' => 'XM8AR', 'required_lvl' => 15),
        3077 => array('name' => 'GOL', 'required_lvl' => 18),
        3078 => array('name' => 'XM8C', 'required_lvl' => 15),
        3079 => array('name' => 'M60 +3', 'required_lvl' => 0),
        3080 => array('name' => 'PKM +3', 'required_lvl' => 0),
        3081 => array('name' => 'M240 +3', 'required_lvl' => 0),
        3082 => array('name' => 'QJY88 +3', 'required_lvl' => 0),
        3083 => array('name' => 'FNPARA +3', 'required_lvl' => 0),
        3084 => array('name' => 'XM8AR +3', 'required_lvl' => 0),
        3085 => array('name' => 'UMP +3', 'required_lvl' => 0),
        3086 => array('name' => 'MP7 +3', 'required_lvl' => 0),
        3087 => array('name' => 'FNP90 +3', 'required_lvl' => 0),
        3088 => array('name' => 'MP5 +3', 'required_lvl' => 0),
        3089 => array('name' => 'UZI +3', 'required_lvl' => 0),
        3090 => array('name' => 'AKS74U +3', 'required_lvl' => 0),
        3091 => array('name' => '9A91 +3', 'required_lvl' => 0),
        3092 => array('name' => 'XM8C +3', 'required_lvl' => 0),
        3093 => array('name' => 'SCARL +3', 'required_lvl' => 0),
        3094 => array('name' => 'STG77AUG +3', 'required_lvl' => 0),
        3095 => array('name' => 'M16A2 +3', 'required_lvl' => 0),
        3096 => array('name' => 'AEK971 +3', 'required_lvl' => 0),
        3097 => array('name' => 'M4 +3', 'required_lvl' => 0),
        3098 => array('name' => 'AN94 +3', 'required_lvl' => 0),
        3099 => array('name' => '416CARBINE +3', 'required_lvl' => 0),
        3100 => array('name' => 'XM8 +3', 'required_lvl' => 0),
        3101 => array('name' => 'MG36 +3', 'required_lvl' => 0),
        3102 => array('name' => 'M95 +3', 'required_lvl' => 0),
        3103 => array('name' => 'M24 +3', 'required_lvl' => 0),
        3104 => array('name' => 'SVD +3', 'required_lvl' => 0),
        3105 => array('name' => 'SVU +3', 'required_lvl' => 0),
        3106 => array('name' => 'M14 +3', 'required_lvl' => 0),
        3107 => array('name' => 'M110 +3', 'required_lvl' => 0),
        3108 => array('name' => 'VSS +3', 'required_lvl' => 0),
        3109 => array('name' => 'GOL +3', 'required_lvl' => 0),
        3110 => array('name' => 'AK47', 'required_lvl' => 20),
        3111 => array('name' => 'L96', 'required_lvl' => 24),
        3112 => array('name' => 'PP-19', 'required_lvl' => 24),
        3113 => array('name' => 'RPK-74M', 'required_lvl' => 22),
        3114 => array('name' => 'F2000', 'required_lvl' => 24),
        3115 => array('name' => 'Deagle 50', 'required_lvl' => 24),
        3116 => array('name' => 'M27IAR', 'required_lvl' => 30),
        3117 => array('name' => 'PDWR', 'required_lvl' => 22),
        3118 => array('name' => 'Steel Deagle 50', 'required_lvl' => 0),
        3119 => array('name' => 'SKS', 'required_lvl' => 21),
        3120 => array('name' => 'FAMAS', 'required_lvl' => 21),
        3121 => array('name' => 'QBB-95', 'required_lvl' => 21),
        3122 => array('name' => 'AS-VAL', 'required_lvl' => 21),
        3123 => array('name' => 'Scattergun', 'required_lvl' => 21),
        3124 => array('name' => 'Nosferatu', 'required_lvl' => 0),
        3125 => array('name' => 'EASY-Piece', 'required_lvl' => 0),
        3126 => array('name' => 'M82A3', 'required_lvl' => 27),
        3127 => array('name' => 'L85A2', 'required_lvl' => 27),
        3128 => array('name' => 'PECHENEG', 'required_lvl' => 27),
        3129 => array('name' => 'G53', 'required_lvl' => 27),
        3130 => array('name' => 'MK3A1', 'required_lvl' => 27),
        3131 => array('name' => '93R', 'required_lvl' => 27),
        // Gadgets
        3027 => array('name' => 'Combat Knife', 'required_lvl' => 0),
        2004 => array('name' => 'Medic Box', 'required_lvl' => 0),
        2005 => array('name' => 'Fragmentation Grenade', 'required_lvl' => 0),
        2009 => array('name' => 'Front Line Flare', 'required_lvl' => 0),
        2017 => array('name' => 'Motion Sensor', 'required_lvl' => 0),
        2021 => array('name' => 'Vehicle Repair Tool', 'required_lvl' => 0),
        2023 => array('name' => 'Ammo Box', 'required_lvl' => 0),
        2024 => array('name' => 'Request Reinforcements', 'required_lvl' => 0),
        2025 => array('name' => 'Mortar Strike', 'required_lvl' => 0),
        2030 => array('name' => 'Combat Defibrillator', 'required_lvl' => 0),
        2034 => array('name' => 'C-4', 'required_lvl' => 0),
        2043 => array('name' => 'Satellite Surveillance', 'required_lvl' => 0),
        2046 => array('name' => 'Anti-Vehicle Mine', 'required_lvl' => 0),
        2048 => array('name' => 'Claymore', 'required_lvl' => 0),
        2050 => array('name' => 'Smoke Grenade', 'required_lvl' => 0),
        2051 => array('name' => 'XM-25 Airburst Grenade Launcher', 'required_lvl' => 0),
        2054 => array('name' => 'Anti-Vehicle RPG', 'required_lvl' => 0),
        8000 => array('name' => 'Adrenaline Shot Dart', 'required_lvl' => 0),
        8000 => array('name' => 'Field Bandage', 'required_lvl' => 0),
        8002 => array('name' => 'Adrenaline Shot Dart', 'required_lvl' => 0),
        8003 => array('name' => 'Advanced Adrenaline Shot', 'required_lvl' => 0),
        8004 => array('name' => 'Combat Bandage', 'required_lvl' => 0),
        
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
        return $this->data[$weaponId]['name'];
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
        return $this->data[$weaponId]['required_lvl'];
    }
}
