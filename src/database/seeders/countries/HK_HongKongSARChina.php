<?php 
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries; 
 
use Lwwcas\LaravelCountries\Database\Seeders\Builder; 
use Illuminate\Database\Seeder; 
 
class HK_HongKongSARChina extends Seeder 
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
    public $region = 'asia'; 
 
    /** 
    * Run the database seeds. 
    *  
    * @return void 
    */ 
    public function run() 
    {  
        $this->name = 'Hong Kong SAR China'; 
        $this->official_name = 'Hong Kong Special Administrative Region of the People\'s Republic of China'; 
        $this->iso_alpha_2 = 'HK'; 
        $this->iso_alpha_3 = 'HKG'; 
        $this->iso_numeric = '344'; 
        $this->international_phone = '852'; 
 
        $this->languages = ["zh","en"]; 
        $this->tld = [".hk",".\u9999\u6e2f"]; 
        $this->wmo = 'HK'; 
        $this->geoname_id = '1819730'; 
 
        $this->emoji = [ 
            'img' => '🇭🇰', 
            'uCode' => 'U+1F1ED U+1F1F0', 
        ]; 
        $this->color = [ 
            'hex' => [ 
                '#ff0000', 
                '#ffffff', 
            ], 
            'rgb' => [ 
                '255,0,0', 
                '255,255,255', 
            ], 
        ]; 
        $this->coordinates = [ 
            'latitude' => [ 
                'classic' => '22 15 N', 
                'desc' => '22.336156845092773', 
            ], 
            'longitude' => [ 
                'classic' => '114 10 E', 
                'desc' => '114.18696594238281', 
            ], 
        ]; 
        $this->coordinates_limit = [ 
            'latitude' => [ 
                'max' => '22.566667', 
                'min' => '22.15', 
            ], 
            'longitude' => [ 
                'max' => '114.433333', 
                'min' => '113.833333', 
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
      "properties": { "cca2": "hk" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [114.246094, 22.203327],
              [114.241364, 22.200829],
              [114.207489, 22.217773],
              [114.137207, 22.255554],
              [114.125809, 22.265553],
              [114.123306, 22.269718],
              [114.122208, 22.27528],
              [114.124977, 22.28],
              [114.12886, 22.28305],
              [114.13443, 22.284721],
              [114.146378, 22.286385],
              [114.194427, 22.291664],
              [114.201103, 22.290554],
              [114.206703, 22.28477],
              [114.23082, 22.269165],
              [114.234993, 22.266109],
              [114.244141, 22.25444],
              [114.246643, 22.25],
              [114.248322, 22.244995],
              [114.248871, 22.207771],
              [114.246094, 22.203327]
            ]
          ],
          [
            [
              [113.896652, 22.195827],
              [113.843048, 22.193607],
              [113.833527, 22.198067],
              [113.830833, 22.202774],
              [113.822769, 22.219994],
              [113.825272, 22.232216],
              [113.834991, 22.244438],
              [113.842484, 22.251389],
              [113.883041, 22.281387],
              [113.887772, 22.283886],
              [113.897774, 22.28805],
              [114.043587, 22.340275],
              [114.04776, 22.339996],
              [114.050262, 22.335831],
              [114.049698, 22.32888],
              [114.026657, 22.306942],
              [113.99498, 22.266388],
              [113.992477, 22.261665],
              [113.992203, 22.236382],
              [113.964996, 22.218052],
              [113.909416, 22.196941],
              [113.896652, 22.195827]
            ]
          ],
          [
            [
              [114.314148, 22.342773],
              [114.309982, 22.339718],
              [114.304153, 22.340275],
              [114.298599, 22.34222],
              [114.295258, 22.345829],
              [114.294144, 22.351387],
              [114.294434, 22.36194],
              [114.296097, 22.368053],
              [114.310928, 22.36182],
              [114.313873, 22.359997],
              [114.315536, 22.354996],
              [114.315536, 22.348885],
              [114.314148, 22.342773]
            ]
          ],
          [
            [
              [114.219437, 22.47444],
              [114.239433, 22.430828],
              [114.308594, 22.47416],
              [114.313873, 22.475552],
              [114.318878, 22.47444],
              [114.386932, 22.43333],
              [114.389977, 22.429718],
              [114.390266, 22.423328],
              [114.38443, 22.374996],
              [114.382202, 22.369717],
              [114.37886, 22.365829],
              [114.329697, 22.37704],
              [114.29261, 22.381836],
              [114.262077, 22.359589],
              [114.274292, 22.32425],
              [114.306572, 22.285427],
              [114.296104, 22.260561],
              [114.198029, 22.318054],
              [114.025543, 22.35194],
              [113.932213, 22.35444],
              [113.909988, 22.362495],
              [113.902481, 22.369995],
              [113.899986, 22.37444],
              [113.895264, 22.40222],
              [113.896652, 22.40694],
              [113.900543, 22.41],
              [113.949417, 22.446384],
              [114.033691, 22.508739],
              [114.03333040044, 22.509138149175],
              [114.22259578298, 22.550548246897],
              [114.222267, 22.550041],
              [114.219437, 22.47444]
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
 
