<?php 
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries; 
 
use Lwwcas\LaravelCountries\Database\Seeders\Builder; 
use Illuminate\Database\Seeder; 
 
class TW_Taiwan extends Seeder 
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
        $this->name = 'Taiwan'; 
        $this->official_name = 'Republic of China (Taiwan)'; 
        $this->iso_alpha_2 = 'TW'; 
        $this->iso_alpha_3 = 'TWN'; 
        $this->iso_numeric = '158'; 
        $this->international_phone = '886'; 
 
        $this->languages = ["zh"]; 
        $this->tld = [".tw",".\u53f0\u6e7e",".\u53f0\u7063"]; 
        $this->wmo = '0'; 
        $this->geoname_id = '1668284'; 
 
        $this->emoji = [ 
            'img' => '🇹🇼', 
            'uCode' => 'U+1F1F9 U+1F1FC', 
        ]; 
        $this->color = [ 
            'hex' => [ 
                '#0000ff', 
                '#ffffff', 
                '#ff0000', 
            ], 
            'rgb' => [ 
                '0,0,255', 
                '255,255,255', 
                '255,0,0', 
            ], 
        ]; 
        $this->coordinates = [ 
            'latitude' => [ 
                'classic' => '23 30 N', 
                'desc' => '23.685789108276367', 
            ], 
            'longitude' => [ 
                'classic' => '121 00 E', 
                'desc' => '120.89749145507812', 
            ], 
        ]; 
        $this->coordinates_limit = [ 
            'latitude' => [ 
                'max' => '26.389444', 
                'min' => '21.733333', 
            ], 
            'longitude' => [ 
                'max' => '122.107778', 
                'min' => '118.1152555661', 
            ], 
        ]; 
 
        $this->geographical = json_decode($this->geographical(), true); 
 
        Builder::country($this); 
    }  
 
    public function geographical() 
    {  
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"tw"},"geometry":{"type":"MultiPolygon","coordinates":[[[[121.576393,22.00139],[121.570267,22.00111],[121.55748,22.00444],[121.524147,22.022774],[121.505257,22.034164],[121.502213,22.038052],[121.498871,22.044586],[121.489967,22.073887],[121.490257,22.07861],[121.501389,22.078884],[121.546944,22.078053],[121.563599,22.058331],[121.5811,22.026943],[121.583054,22.0225],[121.583603,22.01694],[121.5811,22.00333],[121.576393,22.00139]]],[[[119.669434,23.549999],[119.590271,23.510555],[119.550812,23.513885],[119.544144,23.515553],[119.539978,23.517498],[119.535812,23.520832],[119.527481,23.533333],[119.526703,23.535461],[119.546097,23.53278],[119.568047,23.53194],[119.574158,23.5325],[119.584427,23.544163],[119.58194,23.54861],[119.568878,23.551941],[119.549988,23.560555],[119.549423,23.566387],[119.550537,23.578053],[119.551651,23.584721],[119.577477,23.599998],[119.598328,23.606941],[119.604431,23.607498],[119.609711,23.606106],[119.652771,23.583332],[119.670822,23.559441],[119.672493,23.554165],[119.669434,23.549999]]],[[[118.223602,24.404163],[118.211647,24.404163],[118.205833,24.406384],[118.207489,24.412495],[118.211411,24.418896],[118.226089,24.441383],[118.229713,24.444996],[118.234711,24.447216],[118.241364,24.445827],[118.244713,24.44194],[118.24942,24.43305],[118.25,24.42722],[118.249153,24.42166],[118.228592,24.406384],[118.223602,24.404163]]],[[[118.419144,24.395828],[118.295258,24.388329],[118.287773,24.389164],[118.282761,24.39194],[118.275543,24.399162],[118.277206,24.40499],[118.280823,24.408886],[118.293373,24.419842],[118.299713,24.433605],[118.330276,24.463329],[118.393051,24.515831],[118.401657,24.52166],[118.405823,24.519718],[118.436096,24.497772],[118.439423,24.49388],[118.449707,24.470551],[118.451103,24.465549],[118.450272,24.458607],[118.44664,24.43555],[118.445534,24.428608],[118.443314,24.423328],[118.42276,24.399441],[118.419144,24.395828]]],[[[121.734711,25.138885],[121.788597,25.126583],[121.881653,25.114719],[121.999153,25.01083],[122.002213,25.006943],[122.001099,25.00027],[121.997208,24.996662],[121.992752,24.993885],[121.978317,24.986938],[121.969513,24.985033],[121.947197,24.976383],[121.913879,24.95999],[121.882477,24.932774],[121.878593,24.929161],[121.828323,24.86694],[121.819443,24.852776],[121.81694,24.847775],[121.813873,24.834995],[121.805252,24.79],[121.799713,24.756664],[121.800812,24.745274],[121.817207,24.637218],[121.819992,24.62694],[121.82222,24.622498],[121.828323,24.614441],[121.843597,24.606384],[121.849426,24.59222],[121.853317,24.56361],[121.853043,24.53361],[121.839706,24.476383],[121.8311,24.47083],[121.816673,24.46388],[121.803589,24.455551],[121.796097,24.44833],[121.780548,24.42638],[121.776657,24.41416],[121.75943,24.335274],[121.759163,24.328884],[121.760536,24.323887],[121.772491,24.301661],[121.753052,24.292774],[121.74498,24.286385],[121.676086,24.204994],[121.659416,24.184719],[121.607483,24.08583],[121.60498,24.080551],[121.601929,24.060829],[121.603317,24.055832],[121.609154,24.041664],[121.616089,24.03416],[121.611366,23.98333],[121.596367,23.899998],[121.536926,23.701385],[121.496368,23.485271],[121.476326,23.422417],[121.475807,23.414719],[121.473312,23.401108],[121.453049,23.327221],[121.355553,23.087498],[121.259163,22.899998],[121.168053,22.762497],[121.137497,22.735271],[121.12886,22.72805],[121.119141,22.724716],[121.108322,22.722218],[121.079437,22.70916],[121.030273,22.656384],[121.014427,22.634995],[120.969711,22.568329],[120.955551,22.53583],[120.878593,22.341385],[120.873306,22.323608],[120.872208,22.31667],[120.871368,22.291943],[120.873032,22.274998],[120.879425,22.232563],[120.88472,22.09805],[120.882477,22.03944],[120.880257,22.034443],[120.824158,21.927773],[120.722763,21.927773],[120.716377,21.92805],[120.71138,21.930828],[120.70665,21.933605],[120.699707,21.94083],[120.698318,21.94583],[120.686371,22.053608],[120.693039,22.104443],[120.691093,22.115273],[120.677757,22.17194],[120.674988,22.181938],[120.629433,22.2775],[120.620529,22.295277],[120.61026,22.312775],[120.576103,22.36222],[120.573036,22.366108],[120.553307,22.38277],[120.505547,22.422497],[120.488586,22.429161],[120.481369,22.429996],[120.475807,22.432217],[120.444702,22.453327],[120.429153,22.466938],[120.423027,22.474716],[120.416901,22.482502],[120.392761,22.478329],[120.386108,22.47861],[120.381927,22.480549],[120.377197,22.48333],[120.345543,22.50389],[120.34166,22.50722],[120.328598,22.519444],[120.307083,22.540436],[120.302551,22.550632],[120.300339,22.557865],[120.305252,22.549999],[120.306641,22.545],[120.323883,22.526386],[120.330887,22.52117],[120.332764,22.525829],[120.329987,22.53611],[120.32193,22.554443],[120.312759,22.572498],[120.296097,22.596941],[120.271378,22.610275],[120.266388,22.613052],[120.262497,22.616386],[120.253326,22.628052],[120.244713,22.640274],[120.240257,22.649441],[120.238586,22.66083],[120.251099,22.677494],[120.252213,22.684441],[120.251663,22.689995],[120.228676,22.73672],[120.206383,22.773331],[120.199707,22.786942],[120.17276,22.881664],[120.16748,22.908045],[120.163879,22.953606],[120.135536,23.022774],[120.107758,23.013611],[120.064423,23.034996],[120.055817,23.041107],[120.052757,23.044998],[120.051376,23.05027],[120.049149,23.060829],[120.053307,23.07194],[120.056931,23.075829],[120.06749,23.079163],[120.086929,23.079163],[120.095543,23.08472],[120.099152,23.088329],[120.099991,23.093887],[120.093872,23.124718],[120.09166,23.12916],[120.087769,23.132496],[120.08194,23.13472],[120.067207,23.136662],[120.062477,23.13944],[120.058594,23.142773],[120.056091,23.147217],[120.055542,23.153049],[120.05748,23.158886],[120.083328,23.22805],[120.099716,23.266941],[120.109711,23.286942],[120.129997,23.317499],[120.141098,23.32],[120.145264,23.322773],[120.148331,23.327221],[120.148041,23.39194],[120.147491,23.39749],[120.13472,23.46611],[120.12886,23.493328],[120.125168,23.508759],[120.123871,23.514164],[120.11554,23.568886],[120.111099,23.61388],[120.111366,23.620274],[120.11554,23.631386],[120.193314,23.781109],[120.196373,23.785553],[120.221916,23.81944],[120.2397,23.83],[120.278702,23.889069],[120.283867,23.898331],[120.312477,23.953327],[120.363037,24.048332],[120.421097,24.14111],[120.4272,24.15],[120.471909,24.193045],[120.476379,24.210274],[120.508041,24.286663],[120.510536,24.291943],[120.544983,24.362217],[120.558868,24.38527],[120.571663,24.402218],[120.578598,24.410275],[120.594437,24.42799],[120.628593,24.463608],[120.642761,24.47916],[120.650543,24.49388],[120.656647,24.511108],[120.665817,24.533054],[120.694702,24.596386],[120.697746,24.60083],[120.751389,24.647495],[120.86026,24.737495],[120.8647,24.74055],[120.871597,24.73999],[120.90332,24.836662],[120.921097,24.87583],[120.951393,24.923328],[120.958702,24.933046],[121.001663,25.001663],[121.009163,25.008888],[121.058319,25.047218],[121.062759,25.049999],[121.194702,25.109997],[121.223602,25.11555],[121.275871,25.118906],[121.310532,25.126106],[121.338593,25.132496],[121.363037,25.14333],[121.371918,25.149162],[121.375526,25.152775],[121.384987,25.1575],[121.390549,25.158886],[121.396942,25.15916],[121.409416,25.155273],[121.418053,25.149162],[121.441109,25.1291],[121.444122,25.134743],[121.396942,25.176105],[121.394707,25.18055],[121.394989,25.186939],[121.398041,25.1911],[121.435257,25.23666],[121.442749,25.24388],[121.476089,25.268887],[121.480553,25.271942],[121.512497,25.28167],[121.518051,25.282776],[121.559418,25.284164],[121.56694,25.283054],[121.583328,25.275829],[121.598038,25.26722],[121.606934,25.26083],[121.610809,25.2575],[121.616928,25.249439],[121.636658,25.214439],[121.681274,25.168667],[121.734711,25.138885]]],[[[119.929428,26.134995],[119.918587,26.13166],[119.911652,26.13194],[119.9086,26.13583],[119.907707,26.140877],[119.909416,26.159439],[119.913879,26.162495],[119.947479,26.162773],[119.952477,26.159996],[119.951393,26.149719],[119.948318,26.145275],[119.939423,26.139439],[119.929428,26.134995]]],[[[119.967209,26.187496],[119.96138,26.186108],[119.957489,26.189438],[119.953598,26.203884],[119.953873,26.210274],[119.956383,26.215549],[119.960823,26.218327],[119.979713,26.228329],[119.98526,26.229717],[119.991089,26.22749],[120.006104,26.219162],[120.006653,26.213329],[120.006378,26.202217],[120.005547,26.19694],[119.967209,26.187496]]]]}}]}'; 
    }  
 
} 
 
