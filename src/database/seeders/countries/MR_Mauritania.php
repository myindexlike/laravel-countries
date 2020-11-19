<?php 
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries; 
 
use Lwwcas\LaravelCountries\Database\Seeders\Builder; 
use Illuminate\Database\Seeder; 
 
class MR_Mauritania extends Seeder 
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
    public $region = 'africa'; 
 
    /** 
    * Run the database seeds. 
    *  
    * @return void 
    */ 
    public function run() 
    {  
        $this->name = 'Mauritania'; 
        $this->official_name = 'Islamic Republic of Mauritania'; 
        $this->iso_alpha_2 = 'MR'; 
        $this->iso_alpha_3 = 'MRT'; 
        $this->iso_numeric = '478'; 
        $this->international_phone = '222'; 
 
        $this->languages = ["ar"]; 
        $this->tld = [".mr"]; 
        $this->wmo = 'MT'; 
        $this->geoname_id = '2378080'; 
 
        $this->emoji = [ 
            'img' => '🇲🇷', 
            'uCode' => 'U+1F1F2 U+1F1F7', 
        ]; 
        $this->color = [ 
            'hex' => [ 
                '#008000', 
                '#ffff00', 
                '#ff0000', 
            ], 
            'rgb' => [ 
                '0,128,0', 
                '255,255,0', 
                '255,0,0', 
            ], 
        ]; 
        $this->coordinates = [ 
            'latitude' => [ 
                'classic' => '20 00 N', 
                'desc' => '20.258995056152344', 
            ], 
            'longitude' => [ 
                'classic' => '12 00 W', 
                'desc' => '-10.364437103271484', 
            ], 
        ]; 
        $this->coordinates_limit = [ 
            'latitude' => [ 
                'max' => '26.9', 
                'min' => '14.7382733887', 
            ], 
            'longitude' => [ 
                'max' => '13', 
                'min' => '-17.079444', 
            ], 
        ]; 
 
        $this->geographical = json_decode($this->geographical(), true); 
 
        Builder::country($this); 
    }  
 
    public function geographical() 
    {  
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"mr"},"geometry":{"type":"MultiPolygon","coordinates":[[[[-16.4275,19.603611],[-16.432503,19.601387],[-16.43695,19.603886],[-16.451389,19.61777],[-16.453892,19.62222],[-16.46111,19.69416],[-16.46,19.699718],[-16.41917,19.802219],[-16.41389,19.810555],[-16.35528,19.862499],[-16.35083,19.865555],[-16.344448,19.866386],[-16.33972,19.86389],[-16.33667,19.859997],[-16.335556,19.853886],[-16.34472,19.801388],[-16.347225,19.790276],[-16.360558,19.736111],[-16.36195,19.730553],[-16.38028,19.68111],[-16.39278,19.652496],[-16.39944,19.638332],[-16.407501,19.625832],[-16.41389,19.618053],[-16.4275,19.603611]]],[[[-6.662778,26.129166],[-6.304167,25.914444],[-6.286112,25.904442],[-5.857779,25.645554],[-5.821945,25.62472],[-5.64167,25.514788],[-5.289445,25.299999],[-4.91889,25.07083],[-4.88361,25.04972],[-4.81306,25.005833],[-4.80611,25.00027],[-4.866667,24.999443],[-4.96667,24.999443],[-5.76722,25],[-6.133889,24.999443],[-6.29972,24.999443],[-6.36694,25],[-6.50028,25],[-6.577223,24.999165],[-6.533334,24.6325],[-6.52389,24.56277],[-6.51111,24.458054],[-6.475278,24.161388],[-6.441798,23.87876],[-6.36694,23.254719],[-6.335958,22.990261],[-6.32583,22.906387],[-6.319723,22.855553],[-6.29889,22.66861],[-6.22611,22.039165],[-6.20833,21.88583],[-6.174445,21.596386],[-6.15306,21.40889],[-6.132223,21.221107],[-6.10722,20.999443],[-6.0775,20.74722],[-6.05528,20.55944],[-6.00667,20.149166],[-5.974167,19.866386],[-5.95667,19.712498],[-5.91833,19.369999],[-5.901112,19.21583],[-5.884445,19.061665],[-5.85389,18.78722],[-5.83778,18.65],[-5.803334,18.341389],[-5.782778,18.1525],[-5.74778,17.83111],[-5.69444,17.350277],[-5.628056,16.748608],[-5.60139,16.507774],[-5.335,16.328053],[-5.3725,16.13528],[-5.386111,16.06639],[-5.42028,15.894444],[-5.48389,15.56722],[-5.49361,15.515554],[-5.49505,15.498371],[-5.583611,15.49944],[-5.95889,15.504444],[-6.30798,15.502781],[-6.319167,15.503611],[-6.42639,15.504444],[-6.658611,15.505833],[-7.01889,15.507221],[-7.35833,15.505833],[-7.50111,15.504999],[-7.66222,15.503332],[-8.00139,15.50083],[-8.04222,15.50111],[-8.06,15.50166],[-8.50509,15.50083],[-8.51389,15.501389],[-8.58528,15.50111],[-8.99639,15.49833],[-9.03694,15.49833],[-9.09056,15.498888],[-9.18467,15.498217],[-9.22639,15.49861],[-9.333612,15.499722],[-9.3325,15.56361],[-9.313057,15.66889],[-9.31056,15.68611],[-9.338057,15.704721],[-9.442501,15.596943],[-9.415279,15.478888],[-9.40833,15.444721],[-9.411112,15.443888],[-9.660833,15.43111],[-9.69667,15.429998],[-9.739168,15.40917],[-9.753334,15.401943],[-9.770279,15.390554],[-9.77917,15.385555],[-9.79333,15.378332],[-9.805,15.375555],[-9.81778,15.37389],[-10.03278,15.366943],[-10.06056,15.366943],[-10.086945,15.36861],[-10.118057,15.37278],[-10.21278,15.408054],[-10.28722,15.436943],[-10.29222,15.438889],[-10.303612,15.441387],[-10.31778,15.441111],[-10.470001,15.437222],[-10.56,15.433887],[-10.56556,15.43222],[-10.58417,15.429165],[-10.605,15.428055],[-10.65,15.430277],[-10.6679,15.431204],[-10.68222,15.433054],[-10.716387,15.438902],[-10.71806,15.379999],[-10.720835,15.368889],[-10.73139,15.34528],[-10.73778,15.3375],[-10.76222,15.312777],[-10.76639,15.309999],[-10.84806,15.20611],[-10.89348,15.113855],[-10.89964,15.106874],[-10.91445,15.124722],[-10.971111,15.19444],[-10.97667,15.203333],[-10.985,15.22305],[-10.993057,15.242777],[-11.1725,15.374722],[-11.2,15.394165],[-11.23695,15.419998],[-11.25389,15.431389],[-11.28667,15.455555],[-11.302223,15.474998],[-11.33722,15.524443],[-11.36389,15.573332],[-11.36639,15.578054],[-11.409168,15.626665],[-11.41639,15.633333],[-11.420834,15.635832],[-11.426111,15.638054],[-11.455278,15.643332],[-11.494167,15.646387],[-11.503056,15.63722],[-11.537779,15.596388],[-11.59528,15.548054],[-11.604168,15.54305],[-11.6375,15.526388],[-11.64222,15.524166],[-11.71167,15.544998],[-11.71083,15.52583],[-11.71111,15.505833],[-11.71306,15.50111],[-11.720278,15.493889],[-11.73695,15.482498],[-11.74056,15.478888],[-11.7425,15.47416],[-11.755,15.43861],[-11.79528,15.32111],[-11.832224,15.19528],[-11.84667,15.097221],[-11.845564,15.052912],[-11.843109,15.048353],[-11.839857,15.04412],[-11.835001,15.04222],[-11.829445,15.043888],[-11.8225,15.050833],[-11.817501,15.053055],[-11.81111,15.053888],[-11.80611,15.051943],[-11.802502,15.048611],[-11.797501,15.032221],[-11.79556,15.013054],[-11.79611,15.00694],[-11.81528,14.924999],[-11.84139,14.863054],[-11.866945,14.840832],[-11.96972,14.774166],[-11.97889,14.76889],[-12.05748,14.725321],[-12.062445,14.725958],[-12.08778,14.735554],[-12.100834,14.74361],[-12.175001,14.76833],[-12.24483,14.764385],[-12.28361,14.78583],[-12.39583,14.853054],[-12.445557,14.90111],[-12.448612,14.904999],[-12.4525,14.915277],[-12.453611,14.928333],[-12.451113,14.939444],[-12.450556,14.945833],[-12.452223,14.95111],[-12.47361,15.00028],[-12.47611,15.004999],[-12.47889,15.008888],[-12.48639,15.015554],[-12.62667,15.098888],[-12.63194,15.100832],[-12.65472,15.105833],[-12.668335,15.104721],[-12.673334,15.102499],[-12.685978,15.087912],[-12.708057,15.097776],[-12.783442,15.149652],[-12.84972,15.208055],[-12.88945,15.251389],[-12.89333,15.261665],[-12.89056,15.266109],[-12.88639,15.268888],[-12.874168,15.267221],[-12.86945,15.26528],[-12.85778,15.262777],[-12.85139,15.263611],[-12.84722,15.266666],[-12.843889,15.270277],[-12.84,15.286943],[-12.84,15.292221],[-12.841112,15.298611],[-12.84583,15.308054],[-12.85889,15.322777],[-12.86278,15.326111],[-12.87945,15.337221],[-12.90722,15.351665],[-12.9225,15.357222],[-12.929724,15.363888],[-12.9325,15.368055],[-12.935,15.37278],[-12.94,15.389166],[-12.94028,15.396111],[-12.955557,15.494165],[-12.95694,15.49944],[-12.96028,15.503611],[-12.96472,15.50611],[-12.971668,15.50611],[-12.98722,15.5],[-13.0475,15.480833],[-13.053057,15.479443],[-13.060001,15.479166],[-13.065834,15.480276],[-13.09167,15.496666],[-13.09993,15.50861],[-13.104445,15.519722],[-13.10389,15.52583],[-13.102501,15.531387],[-13.18472,15.629444],[-13.245834,15.680555],[-13.324722,15.929443],[-13.392778,16.051666],[-13.398056,16.059166],[-13.520557,16.132221],[-13.57306,16.13611],[-13.58667,16.134998],[-13.639723,16.115833],[-13.660002,16.10083],[-13.66472,16.09861],[-13.671112,16.0975],[-13.67694,16.098888],[-13.706112,16.124722],[-13.712778,16.13194],[-13.712778,16.138885],[-13.709723,16.149441],[-13.698891,16.166943],[-13.697779,16.171665],[-13.697779,16.177219],[-13.700279,16.181942],[-13.704723,16.184719],[-13.711113,16.184998],[-13.72083,16.18055],[-13.80917,16.138885],[-13.823057,16.131664],[-13.966112,16.230553],[-13.973333,16.237221],[-13.985,16.295555],[-13.984446,16.301666],[-13.9825,16.306664],[-14.02972,16.357777],[-14.21333,16.538609],[-14.225,16.547775],[-14.33694,16.6325],[-14.34528,16.638611],[-14.355278,16.640831],[-14.41611,16.650276],[-14.45056,16.637497],[-14.45417,16.633888],[-14.45917,16.631664],[-14.49861,16.626663],[-14.511391,16.62611],[-14.63361,16.62722],[-14.63806,16.629719],[-14.64139,16.64055],[-14.645,16.643887],[-14.75639,16.644444],[-14.85472,16.637218],[-14.90695,16.635277],[-14.946667,16.642776],[-14.951113,16.645275],[-14.953611,16.649998],[-14.955278,16.655552],[-14.958094,16.672554],[-14.95917,16.679996],[-14.96389,16.68944],[-14.97472,16.692497],[-14.981112,16.693054],[-14.98695,16.691387],[-14.99528,16.685555],[-14.99889,16.681942],[-15.003334,16.674164],[-15.003889,16.669441],[-15.009724,16.65472],[-15.01778,16.641941],[-15.02556,16.63555],[-15.08833,16.60805],[-15.232779,16.559719],[-15.239168,16.558887],[-15.355,16.56166],[-15.44139,16.57944],[-15.51,16.556664],[-15.576389,16.513332],[-15.67028,16.48111],[-15.683334,16.479443],[-15.690556,16.478886],[-15.69694,16.479443],[-15.71444,16.482777],[-15.748335,16.488888],[-15.82306,16.501663],[-15.882223,16.511665],[-15.89444,16.513054],[-15.907501,16.512497],[-15.92389,16.506943],[-15.98556,16.489998],[-16.04889,16.480274],[-16.0525,16.480831],[-16.060558,16.485275],[-16.06444,16.488609],[-16.097504,16.518887],[-16.09972,16.52361],[-16.09944,16.52972],[-16.100281,16.534443],[-16.105835,16.543331],[-16.113335,16.549721],[-16.118336,16.551666],[-16.12417,16.552776],[-16.14584,16.551941],[-16.280834,16.519722],[-16.28972,16.51444],[-16.300003,16.503609],[-16.304726,16.494442],[-16.32083,16.458611],[-16.322781,16.453888],[-16.344448,16.383888],[-16.345837,16.37833],[-16.3575,16.32278],[-16.365837,16.278889],[-16.369167,16.26861],[-16.383057,16.227776],[-16.38778,16.219997],[-16.39083,16.216663],[-16.39944,16.210552],[-16.410004,16.206665],[-16.506947,16.09417],[-16.52768,16.060249],[-16.529167,16.095833],[-16.53722,16.301666],[-16.530281,16.321941],[-16.523056,16.335278],[-16.506947,16.373886],[-16.495556,16.403332],[-16.47695,16.46611],[-16.47278,16.48222],[-16.46889,16.505276],[-16.46722,16.529999],[-16.46889,16.549999],[-16.46945,16.603054],[-16.46584,16.61972],[-16.444447,16.679722],[-16.411114,16.76333],[-16.403336,16.782776],[-16.340279,16.937222],[-16.30111,17.001663],[-16.283337,17.025833],[-16.274723,17.037777],[-16.263889,17.054722],[-16.259167,17.063889],[-16.20084,17.198055],[-16.184723,17.236664],[-16.136948,17.352219],[-16.13306,17.361942],[-16.095837,17.487499],[-16.089725,17.508331],[-16.069447,17.589722],[-16.06417,17.61138],[-16.039448,17.728054],[-16.039448,17.741108],[-16.03722,17.926109],[-16.028614,18.080555],[-16.035278,18.16139],[-16.03722,18.173611],[-16.04167,18.190552],[-16.04333,18.19611],[-16.04667,18.199997],[-16.051392,18.235554],[-16.063057,18.363052],[-16.063335,18.36972],[-16.0625,18.382221],[-16.057781,18.404442],[-16.055557,18.422497],[-16.057781,18.43472],[-16.0648,18.463753],[-16.071945,18.491943],[-16.080559,18.518887],[-16.08639,18.534443],[-16.105835,18.57889],[-16.144447,18.689999],[-16.150558,18.755554],[-16.17139,18.870831],[-16.179169,18.913055],[-16.188057,18.939442],[-16.219242,19.00272],[-16.23222,19.043331],[-16.25778,19.094444],[-16.26945,19.111111],[-16.28139,19.127777],[-16.3475,19.2025],[-16.351112,19.205555],[-16.368336,19.216389],[-16.46306,19.255402],[-16.499168,19.336388],[-16.51167,19.352219],[-16.463058,19.369442],[-16.456112,19.36972],[-16.44278,19.371666],[-16.38278,19.39222],[-16.37861,19.395275],[-16.349445,19.4225],[-16.335556,19.437496],[-16.30945,19.467499],[-16.284168,19.52972],[-16.28445,19.53639],[-16.28611,19.541943],[-16.290001,19.545277],[-16.351891,19.532221],[-16.360723,19.528055],[-16.363224,19.526386],[-16.42028,19.485832],[-16.43056,19.475277],[-16.433891,19.46472],[-16.432503,19.453053],[-16.431393,19.446941],[-16.42778,19.443886],[-16.42806,19.437496],[-16.440556,19.408886],[-16.445557,19.40667],[-16.464447,19.407219],[-16.468334,19.410553],[-16.46861,19.41583],[-16.46889,19.442776],[-16.46889,19.45444],[-16.42722,19.53639],[-16.40539,19.559666],[-16.38522,19.57383],[-16.38106,19.578],[-16.337223,19.629444],[-16.331669,19.638054],[-16.233612,19.791111],[-16.2325,19.796665],[-16.24334,19.887218],[-16.216667,20.000832],[-16.19639,20.223053],[-16.19722,20.229164],[-16.23278,20.285831],[-16.23611,20.289719],[-16.245556,20.292774],[-16.314167,20.377499],[-16.337223,20.43278],[-16.377781,20.526108],[-16.415836,20.60305],[-16.452225,20.669441],[-16.493057,20.724998],[-16.498337,20.726944],[-16.525558,20.736664],[-16.529167,20.733055],[-16.53139,20.728054],[-16.534447,20.70472],[-16.53278,20.627499],[-16.53,20.575554],[-16.53972,20.564163],[-16.54333,20.560555],[-16.547226,20.563889],[-16.5775,20.589996],[-16.59972,20.610832],[-16.64833,20.66139],[-16.88917,21.113609],[-16.90056,21.13777],[-16.905834,21.147221],[-16.91584,21.158333],[-16.91972,21.161663],[-16.92611,21.160553],[-16.933056,21.153332],[-16.98778,21.065552],[-17.00139,21.017498],[-16.996946,21.015924],[-16.99389,21.012497],[-16.99556,20.97472],[-17.02528,20.844719],[-17.04472,20.783054],[-17.05233,20.764095],[-17.07556,20.8925],[-17.07556,20.905552],[-17.07028,20.92083],[-17.049168,20.974442],[-17.03806,21.004166],[-16.995003,21.128052],[-16.960556,21.300552],[-16.95444,21.334999],[-16.953056,21.338333],[-16.60472,21.339722],[-16.146114,21.339722],[-16.01778,21.338886],[-15.892223,21.338608],[-15.741997,21.338284],[-15.22556,21.337498],[-15.00528,21.336388],[-14.687223,21.338608],[-14.46722,21.340553],[-14.303474,21.341667],[-14.285278,21.34222],[-13.90833,21.3425],[-13.37694,21.34],[-12.999723,21.338055],[-13.005,21.423332],[-13.031389,21.797775],[-13.04778,22.033886],[-13.05139,22.08583],[-13.059168,22.20472],[-13.066389,22.323887],[-13.0775,22.49361],[-13.0781,22.5],[-13.08,22.520275],[-13.094168,22.570831],[-13.15028,22.7575],[-13.13389,22.80917],[-13.105278,22.893055],[-13.04945,22.962776],[-12.998335,23.024719],[-12.745,23.182499],[-12.63667,23.250832],[-12.597429,23.27617],[-12.57139,23.291386],[-12.365835,23.31861],[-12.23139,23.38055],[-12.09889,23.429722],[-12.000278,23.454441],[-12.000834,23.799721],[-12.00028,24],[-12.000834,24.333054],[-12,24.399719],[-12.000834,24.766109],[-12,24.799721],[-12,24.86639],[-12.000834,25.199997],[-12,25.232777],[-12,25.299721],[-12.000834,25.6325],[-12,25.666111],[-12,25.73305],[-12.00056,26],[-11.700556,26],[-11.26667,25.99944],[-10.733334,25.99944],[-10.50028,25.99944],[-10.13412,25.998199],[-10.000311,25.997959],[-9.96667,25.999722],[-9.9,26],[-9.700556,26.000275],[-9.63389,26.000275],[-9.56722,26.000275],[-9.4,25.99944],[-8.66694,26.000275],[-8.66639,26.066387],[-8.666668,26.133331],[-8.66722,26.399719],[-8.66722,26.833054],[-8.66722,26.96639],[-8.66679,27.290459],[-8.64417,27.278889],[-8.20444,27.027496],[-8.13111,26.986385],[-7.71194,26.743889],[-7.69361,26.73416],[-7.25833,26.479721],[-7.203889,26.448608],[-6.98694,26.320831],[-6.771111,26.192497],[-6.662778,26.129166]]]]}}]}'; 
    }  
 
} 
 
