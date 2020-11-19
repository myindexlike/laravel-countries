<?php 
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries; 
 
use Lwwcas\LaravelCountries\Database\Seeders\Builder; 
use Illuminate\Database\Seeder; 
 
class KN_SaintKittsandNevis extends Seeder 
{  
 
    /** 
    * Attribute that defines the language of countries 
    *  
    * @var string 
    */ 
    public $lang = 'en'; 
 
    /** 
    * Attribute that defines the language of countries 
    *  
    * @var string 
    */ 
    public $region = 'americas'; 
 
    /** 
    * Run the database seeds. 
    *  
    * @return void 
    */ 
    public function run() 
    {  
        $this->name = 'Saint Kitts and Nevis'; 
        $this->official_name = 'Federation of Saint Christopher and Nevisa'; 
        $this->iso_alpha_2 = 'KN'; 
        $this->iso_alpha_3 = 'KNA'; 
        $this->iso_numeric = '659'; 
        $this->international_phone = '1-869'; 
 
        $this->languages = ["en"]; 
        $this->tld = [".kn"]; 
        $this->wmo = 'AT'; 
        $this->geoname_id = '3575174'; 
 
        $this->emoji = [ 
            'img' => '🇰🇳', 
            'uCode' => 'U+1F1F0 U+1F1F3', 
        ]; 
        $this->color = [ 
            'hex' => [ 
                '#008000', 
                '#ff0000', 
                '#ffffff', 
            ], 
            'rgb' => [ 
                '0,128,0', 
                '255,0,0', 
                '255,255,255', 
            ], 
        ]; 
        $this->coordinates = [ 
            'latitude' => [ 
                'classic' => '17 20 N', 
                'desc' => '17.24447250366211', 
            ], 
            'longitude' => [ 
                'classic' => '62 45 W', 
                'desc' => '-62.643184661865234', 
            ], 
        ]; 
        $this->coordinates_limit = [ 
            'latitude' => [ 
                'max' => '17.416667', 
                'min' => '17.1', 
            ], 
            'longitude' => [ 
                'max' => '-62.516667', 
                'min' => '-62.85', 
            ], 
        ]; 
 
        $this->geographical = json_decode($this->geographical(), true); 
 
        Builder::country($this); 
    }  
 
    public function geographical() 
    {  
        return '{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "kn" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-62.55278, 17.09417],
              [-62.585007, 17.09166],
              [-62.59139, 17.091942],
              [-62.61056, 17.09528],
              [-62.617226, 17.102497],
              [-62.62195, 17.111385],
              [-62.62528, 17.120831],
              [-62.626114, 17.126663],
              [-62.625557, 17.139164],
              [-62.62361, 17.151108],
              [-62.620285, 17.16333],
              [-62.610001, 17.191109],
              [-62.59972, 17.19722],
              [-62.582779, 17.199718],
              [-62.576118, 17.19944],
              [-62.54861, 17.189999],
              [-62.54472, 17.186665],
              [-62.5425, 17.18222],
              [-62.54139, 17.176941],
              [-62.535278, 17.144997],
              [-62.53417, 17.13361],
              [-62.535278, 17.120831],
              [-62.538612, 17.108608],
              [-62.54445, 17.09972],
              [-62.54778, 17.09611],
              [-62.55278, 17.09417]
            ]
          ],
          [
            [
              [-62.70167, 17.336941],
              [-62.6225, 17.241943],
              [-62.62056, 17.23139],
              [-62.62167, 17.224442],
              [-62.62528, 17.22083],
              [-62.65389, 17.208885],
              [-62.66222, 17.239166],
              [-62.67111, 17.257221],
              [-62.677223, 17.264999],
              [-62.6925, 17.27833],
              [-62.7075, 17.285831],
              [-62.71389, 17.28611],
              [-62.72501, 17.284164],
              [-62.73806, 17.284721],
              [-62.75944, 17.287498],
              [-62.778336, 17.292221],
              [-62.793335, 17.299999],
              [-62.83528, 17.324444],
              [-62.83917, 17.327774],
              [-62.861671, 17.366386],
              [-62.863892, 17.370831],
              [-62.856392, 17.38583],
              [-62.84945, 17.393055],
              [-62.83861, 17.401943],
              [-62.8175, 17.410831],
              [-62.81278, 17.409443],
              [-62.734726, 17.36805],
              [-62.73, 17.365276],
              [-62.70167, 17.336941]
            ]
          ]
        ]
      }
    }
  ]
}
'; 
    }  
 
} 
 
