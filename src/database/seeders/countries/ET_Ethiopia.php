<?php
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Database\Seeders\Builder;

class ET_Ethiopia extends Seeder
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
        $this->name = 'Ethiopia';
        $this->official_name = 'Federal Democratic Republic of Ethiopia';
        $this->iso_alpha_2 = 'ET';
        $this->iso_alpha_3 = 'ETH';
        $this->iso_numeric = '231';
        $this->international_phone = '251';
 
        $this->languages = ['am'];
        $this->tld = ['.et'];
        $this->wmo = 'ET';
        $this->geoname_id = '337996';
 
        $this->emoji = [
            'img' => '🇪🇹',
            'uCode' => 'U+1F1EA U+1F1F9',
        ];
        $this->color = [
            'hex' => [
                '#008000',
                '#ffff00',
                '#ff0000',
                '#0000ff',
            ],
            'rgb' => [
                '0,128,0',
                '255,255,0',
                '255,0,0',
                '0,0,255',
            ],
        ];
        $this->coordinates = [
            'latitude' => [
                'classic' => '8 00 N',
                'desc' => '8.626703262329102',
            ],
            'longitude' => [
                'classic' => '38 00 E',
                'desc' => '39.63755416870117',
            ],
        ];
        $this->coordinates_limit = [
            'latitude' => [
                'max' => '14.698889',
                'min' => '3.433333',
            ],
            'longitude' => [
                'max' => '47.45',
                'min' => '33.033333',
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
      "properties": { "cca2": "et" },
      "geometry": {
        "type": "Polygon",
        "coordinates": [
          [
            [36.542816, 14.262053],
            [36.553329, 14.283333],
            [36.556107, 14.287498],
            [36.559715, 14.290833],
            [36.56472, 14.292776],
            [36.638329, 14.316111],
            [36.644165, 14.317221],
            [36.736382, 14.327221],
            [36.824997, 14.328054],
            [36.886108, 14.320276],
            [36.945, 14.300833],
            [36.949997, 14.298611],
            [36.954163, 14.295555],
            [36.953606, 14.281944],
            [36.961388, 14.275555],
            [36.990555, 14.262499],
            [36.996384, 14.260832],
            [37.003326, 14.260832],
            [37.008888, 14.261944],
            [37.06694, 14.280277],
            [37.071106, 14.282776],
            [37.078606, 14.289444],
            [37.084442, 14.297499],
            [37.088882, 14.306944],
            [37.092216, 14.317778],
            [37.091942, 14.337776],
            [37.089722, 14.355555],
            [37.090828, 14.36861],
            [37.092499, 14.373888],
            [37.101387, 14.393055],
            [37.111938, 14.410555],
            [37.123604, 14.426666],
            [37.12722, 14.429998],
            [37.136108, 14.435276],
            [37.196663, 14.451944],
            [37.202499, 14.453054],
            [37.278885, 14.453609],
            [37.291664, 14.451944],
            [37.301941, 14.448332],
            [37.336937, 14.426666],
            [37.388611, 14.360554],
            [37.393883, 14.352221],
            [37.433052, 14.268055],
            [37.524437, 14.11861],
            [37.532219, 14.112221],
            [37.541939, 14.107777],
            [37.572212, 14.102253],
            [37.684441, 14.359999],
            [37.838333, 14.715277],
            [37.911385, 14.88361],
            [37.92305, 14.874443],
            [37.929993, 14.867498],
            [37.955826, 14.837776],
            [37.977493, 14.806944],
            [37.979164, 14.795277],
            [37.97805, 14.782221],
            [37.979439, 14.776667],
            [37.981941, 14.772499],
            [38.018326, 14.734999],
            [38.035553, 14.724165],
            [38.045555, 14.719721],
            [38.137772, 14.683887],
            [38.149719, 14.682777],
            [38.174721, 14.685555],
            [38.179718, 14.687498],
            [38.184166, 14.689999],
            [38.187775, 14.693333],
            [38.192772, 14.695276],
            [38.199715, 14.695],
            [38.236382, 14.689722],
            [38.253326, 14.684999],
            [38.261665, 14.679443],
            [38.264999, 14.675833],
            [38.306938, 14.594166],
            [38.327499, 14.533333],
            [38.331383, 14.522778],
            [38.33416, 14.51861],
            [38.340828, 14.511665],
            [38.43972, 14.421944],
            [38.443886, 14.419167],
            [38.44944, 14.4175],
            [38.462776, 14.416388],
            [38.552498, 14.424999],
            [38.570274, 14.428055],
            [38.795555, 14.469721],
            [38.893051, 14.500832],
            [38.965553, 14.54611],
            [39.007217, 14.581944],
            [39.010826, 14.585278],
            [39.013885, 14.589167],
            [39.017776, 14.599443],
            [39.024021, 14.655162],
            [39.086662, 14.646944],
            [39.101387, 14.640276],
            [39.118744, 14.629391],
            [39.135277, 14.617777],
            [39.152222, 14.599998],
            [39.173332, 14.572777],
            [39.183884, 14.555832],
            [39.188606, 14.546665],
            [39.190552, 14.541943],
            [39.209717, 14.485554],
            [39.263054, 14.47361],
            [39.370277, 14.482777],
            [39.38166, 14.484999],
            [39.477493, 14.507776],
            [39.481941, 14.510277],
            [39.48555, 14.513611],
            [39.531387, 14.565554],
            [39.613884, 14.510332],
            [39.688889, 14.494444],
            [39.701385, 14.492777],
            [39.720551, 14.494165],
            [39.731384, 14.497221],
            [39.746384, 14.502777],
            [39.764717, 14.512499],
            [39.776108, 14.514721],
            [39.789444, 14.513611],
            [39.84166, 14.488888],
            [39.853333, 14.479721],
            [39.855827, 14.475277],
            [39.883049, 14.446943],
            [39.890549, 14.440554],
            [39.898888, 14.434721],
            [39.908607, 14.430277],
            [39.920555, 14.427776],
            [39.934715, 14.427221],
            [39.940552, 14.428333],
            [39.950554, 14.431944],
            [39.954994, 14.434721],
            [40.018883, 14.458887],
            [40.104996, 14.469999],
            [40.111382, 14.470554],
            [40.125549, 14.469999],
            [40.156662, 14.464722],
            [40.179432, 14.457955],
            [40.228058, 14.443506],
            [40.271111, 14.424721],
            [40.301384, 14.405832],
            [40.322777, 14.387777],
            [40.349716, 14.359165],
            [40.378326, 14.331944],
            [40.392776, 14.318609],
            [40.429443, 14.285555],
            [40.437775, 14.279722],
            [40.468887, 14.261389],
            [40.552773, 14.220276],
            [40.592499, 14.203054],
            [40.614166, 14.195833],
            [40.637215, 14.190277],
            [40.649994, 14.188332],
            [40.66333, 14.187222],
            [40.693604, 14.182499],
            [40.748886, 14.172777],
            [40.776939, 14.164721],
            [40.797218, 14.156387],
            [40.801941, 14.154165],
            [40.814438, 14.145277],
            [40.909439, 14.052221],
            [40.929161, 14.032221],
            [41.008049, 13.944721],
            [41.047218, 13.9],
            [41.068604, 13.872776],
            [41.077217, 13.860277],
            [41.097771, 13.827221],
            [41.10305, 13.818609],
            [41.115555, 13.796944],
            [41.1325, 13.766109],
            [41.178329, 13.681665],
            [41.212219, 13.61972],
            [41.224998, 13.605],
            [41.232498, 13.598331],
            [41.240555, 13.592499],
            [41.428055, 13.472221],
            [41.523605, 13.413887],
            [41.532494, 13.408609],
            [41.549721, 13.397778],
            [41.56694, 13.386665],
            [41.599159, 13.365276],
            [41.615555, 13.353611],
            [41.756943, 13.236387],
            [41.781387, 13.211943],
            [41.798607, 13.187777],
            [41.814163, 13.162222],
            [41.818886, 13.153332],
            [41.842216, 13.108332],
            [41.843887, 13.103333],
            [41.843864, 13.098539],
            [41.912498, 12.953333],
            [41.916939, 12.944166],
            [41.924164, 12.930832],
            [41.929443, 12.922499],
            [41.951111, 12.889166],
            [41.957222, 12.881388],
            [41.970551, 12.866943],
            [41.97805, 12.859722],
            [41.986107, 12.853888],
            [42, 12.846388],
            [42.010277, 12.842499],
            [42.024162, 12.83861],
            [42.040276, 12.833055],
            [42.056107, 12.827499],
            [42.076942, 12.819721],
            [42.097771, 12.811943],
            [42.112221, 12.804998],
            [42.125832, 12.797499],
            [42.146942, 12.782776],
            [42.159164, 12.774166],
            [42.190552, 12.749443],
            [42.198051, 12.742777],
            [42.211388, 12.729721],
            [42.217499, 12.721943],
            [42.262772, 12.650555],
            [42.289993, 12.602777],
            [42.294441, 12.593611],
            [42.302216, 12.580832],
            [42.310829, 12.568609],
            [42.326111, 12.549444],
            [42.344719, 12.526667],
            [42.351387, 12.518888],
            [42.364716, 12.504444],
            [42.399719, 12.469721],
            [42.366104, 12.430277],
            [42.339439, 12.396944],
            [42.325554, 12.359165],
            [42.308327, 12.308332],
            [42.292221, 12.293888],
            [42.255554, 12.263332],
            [42.168884, 12.13722],
            [42.12722, 12.090277],
            [42.058609, 11.975832],
            [42.025078, 11.926363],
            [41.948608, 11.816666],
            [41.891388, 11.773611],
            [41.829437, 11.741943],
            [41.828606, 11.74],
            [41.79805, 11.638332],
            [41.759995, 11.510555],
            [41.75972, 11.505278],
            [41.791664, 11.389721],
            [41.79583, 11.372221],
            [41.811386, 11.267221],
            [41.812492, 11.24861],
            [41.806664, 11.168333],
            [41.80291, 11.098972],
            [41.800552, 11.031111],
            [41.789719, 11.008055],
            [41.808327, 10.985277],
            [41.837219, 10.973055],
            [41.881943, 10.960833],
            [41.918053, 10.953609],
            [41.940277, 10.949999],
            [41.991943, 10.942221],
            [42.012215, 10.941944],
            [42.027222, 10.947498],
            [42.075272, 10.972221],
            [42.078049, 10.97611],
            [42.08194, 10.979443],
            [42.086105, 10.981943],
            [42.122772, 10.998888],
            [42.128326, 11],
            [42.164719, 11.000555],
            [42.178604, 11],
            [42.300552, 11.011389],
            [42.358887, 11.019165],
            [42.501106, 11.06361],
            [42.608238, 11.091576],
            [42.634438, 11.098055],
            [42.646385, 11.096109],
            [42.744438, 11.079166],
            [42.751938, 11.076666],
            [42.755272, 11.073055],
            [42.75972, 11.063889],
            [42.76194, 11.052776],
            [42.762215, 11.046665],
            [42.765831, 11.029999],
            [42.772774, 11.016388],
            [42.78611, 11.002222],
            [42.798332, 10.993332],
            [42.807777, 10.988888],
            [42.814163, 10.987778],
            [42.88472, 10.982498],
            [42.897217, 10.981667],
            [42.944092, 11.002438],
            [42.917496, 10.955276],
            [42.854996, 10.892221],
            [42.838608, 10.873888],
            [42.76722, 10.784443],
            [42.761108, 10.776388],
            [42.666382, 10.640554],
            [42.664162, 10.63722],
            [42.663055, 10.6325],
            [42.66555, 10.621387],
            [42.681107, 10.582777],
            [42.709442, 10.53611],
            [42.720551, 10.519722],
            [42.723885, 10.516109],
            [42.740829, 10.500277],
            [42.748886, 10.494444],
            [42.756104, 10.487778],
            [42.78611, 10.455555],
            [42.795273, 10.43111],
            [42.798882, 10.414444],
            [42.803329, 10.380554],
            [42.804993, 10.355555],
            [42.80722, 10.344444],
            [42.81694, 10.313889],
            [42.848053, 10.22361],
            [42.853333, 10.215277],
            [42.861107, 10.204443],
            [42.867218, 10.196665],
            [42.883606, 10.17861],
            [42.898331, 10.165554],
            [42.922775, 10.147778],
            [42.945831, 10.135832],
            [42.955551, 10.131109],
            [42.965828, 10.127222],
            [42.978607, 10.119165],
            [42.982498, 10.11611],
            [43.009163, 10.0875],
            [43.016937, 10.07472],
            [43.034721, 10.025],
            [43.04277, 9.993055],
            [43.049438, 9.972776],
            [43.053886, 9.96361],
            [43.061661, 9.950832],
            [43.064438, 9.946665],
            [43.076942, 9.931389],
            [43.09166, 9.918333],
            [43.104996, 9.910831],
            [43.115555, 9.906944],
            [43.131943, 9.901943],
            [43.145271, 9.901943],
            [43.150833, 9.903332],
            [43.16333, 9.903889],
            [43.177216, 9.903332],
            [43.183609, 9.902222],
            [43.194717, 9.898888],
            [43.19944, 9.896666],
            [43.206108, 9.892221],
            [43.21611, 9.881388],
            [43.223053, 9.868055],
            [43.226662, 9.858332],
            [43.236938, 9.808332],
            [43.238609, 9.790277],
            [43.246384, 9.750832],
            [43.260551, 9.684721],
            [43.26722, 9.664444],
            [43.275276, 9.645555],
            [43.283333, 9.634723],
            [43.305275, 9.628332],
            [43.321663, 9.623333],
            [43.335274, 9.615833],
            [43.386665, 9.556944],
            [43.427216, 9.488054],
            [43.428329, 9.482498],
            [43.426941, 9.469721],
            [43.423332, 9.451944],
            [43.423882, 9.439444],
            [43.427773, 9.429722],
            [43.430832, 9.426109],
            [43.438332, 9.419443],
            [43.442215, 9.416666],
            [43.455276, 9.408333],
            [43.550552, 9.350832],
            [43.559998, 9.346109],
            [43.583054, 9.336111],
            [43.62722, 9.354443],
            [43.727776, 9.262777],
            [44.010551, 9.007221],
            [44.650471, 8.79517],
            [45.00222, 8.67861],
            [45.189995, 8.61611],
            [45.411659, 8.541943],
            [45.616104, 8.473331],
            [46.059166, 8.32361],
            [46.331665, 8.232222],
            [46.552773, 8.157221],
            [46.790833, 8.076387],
            [46.99472, 8.006109],
            [47.01194, 8.00111],
            [47.086937, 8.001944],
            [47.607498, 8.003332],
            [47.746384, 8.003611],
            [47.850555, 8.003054],
            [47.902496, 8.003054],
            [47.988243, 8.004107],
            [47.987221, 8.00111],
            [47.904045, 7.920458],
            [47.761841, 7.786593],
            [47.658051, 7.688889],
            [47.55555, 7.592222],
            [46.991386, 7.056944],
            [46.561386, 6.619444],
            [46.113979, 6.162027],
            [45.990273, 6.035555],
            [45.955826, 5.999166],
            [45.71666, 5.73861],
            [45.489395, 5.489761],
            [45.374466, 5.363917],
            [45.096107, 5.060277],
            [45.007835, 4.962568],
            [45, 4.954312],
            [44.950829, 4.902499],
            [44.512772, 4.930277],
            [44.466904, 4.933526],
            [44.290276, 4.944166],
            [44.221664, 4.948333],
            [44.067497, 4.957777],
            [44.050552, 4.959444],
            [43.981941, 4.963055],
            [43.964439, 4.95361],
            [43.955276, 4.949166],
            [43.922218, 4.934444],
            [43.887215, 4.922777],
            [43.855827, 4.913888],
            [43.833054, 4.910277],
            [43.803886, 4.906388],
            [43.792221, 4.905],
            [43.767494, 4.903333],
            [43.743332, 4.901388],
            [43.731384, 4.899722],
            [43.686386, 4.891944],
            [43.587219, 4.86],
            [43.567772, 4.8525],
            [43.490555, 4.822222],
            [43.358887, 4.765277],
            [43.321663, 4.74861],
            [43.193604, 4.687778],
            [43.163887, 4.670833],
            [43.152496, 4.661944],
            [43.088333, 4.610277],
            [43.073326, 4.598055],
            [42.991104, 4.530277],
            [42.98027, 4.520555],
            [42.971382, 4.508611],
            [42.966385, 4.5],
            [42.957222, 4.481111],
            [42.948883, 4.454166],
            [42.94416, 4.438055],
            [42.934441, 4.391388],
            [42.932777, 4.38611],
            [42.925827, 4.371944],
            [42.914162, 4.356111],
            [42.880272, 4.321666],
            [42.873055, 4.315],
            [42.860275, 4.306944],
            [42.851105, 4.3025],
            [42.831665, 4.295278],
            [42.768608, 4.278333],
            [42.740829, 4.272778],
            [42.726528, 4.271188],
            [42.656105, 4.264722],
            [42.631943, 4.262221],
            [42.620827, 4.260278],
            [42.604439, 4.256944],
            [42.485832, 4.228889],
            [42.401382, 4.2075],
            [42.379166, 4.203055],
            [42.361382, 4.201111],
            [42.279716, 4.203055],
            [42.259995, 4.204444],
            [42.236107, 4.207777],
            [42.195831, 4.208888],
            [42.154442, 4.203888],
            [42.148888, 4.202777],
            [42.117775, 4.193889],
            [42.098328, 4.186666],
            [42.073883, 4.176147],
            [42.040833, 4.142777],
            [41.963051, 4.091666],
            [41.955826, 4.085278],
            [41.937775, 4.062222],
            [41.936943, 4.057221],
            [41.937218, 4.05111],
            [41.939438, 4.040277],
            [41.940277, 4.027778],
            [41.937218, 4.016944],
            [41.905167, 3.980322],
            [41.898331, 3.973611],
            [41.885551, 3.966111],
            [41.84861, 3.949166],
            [41.843605, 3.9475],
            [41.836937, 3.947778],
            [41.831383, 3.949444],
            [41.805832, 3.958611],
            [41.79583, 3.9625],
            [41.784721, 3.978611],
            [41.777496, 3.985278],
            [41.728882, 3.999722],
            [41.722771, 4.000555],
            [41.611382, 3.989166],
            [41.537498, 3.976666],
            [41.532219, 3.975555],
            [41.496109, 3.966111],
            [41.491104, 3.964444],
            [41.486938, 3.961944],
            [41.476387, 3.951944],
            [41.472221, 3.949444],
            [41.465828, 3.949166],
            [41.273888, 3.941111],
            [41.190552, 3.940555],
            [41.171387, 3.9425],
            [41.160553, 3.945833],
            [41.141106, 3.954166],
            [41.129166, 3.962778],
            [41.121941, 3.969166],
            [41.107498, 3.982778],
            [41.093605, 3.996388],
            [41.067497, 4.025],
            [41.059715, 4.037499],
            [41.053329, 4.049999],
            [41.051666, 4.054999],
            [41.043884, 4.068333],
            [41.009438, 4.108611],
            [40.876938, 4.216666],
            [40.853607, 4.234722],
            [40.783768, 4.287975],
            [40.672218, 4.228611],
            [40.398888, 4.123055],
            [40.388611, 4.098888],
            [40.182495, 4.022499],
            [40, 3.928584],
            [39.866661, 3.869444],
            [39.782776, 3.678333],
            [39.594994, 3.500833],
            [39.560272, 3.406666],
            [39.524437, 3.406389],
            [39.513611, 3.412222],
            [39.504997, 3.418056],
            [39.499161, 3.427222],
            [39.501106, 3.445],
            [39.498055, 3.455277],
            [39.450829, 3.4625],
            [39.422493, 3.46],
            [39.331383, 3.469166],
            [39.341942, 3.493611],
            [39.338608, 3.498611],
            [39.335274, 3.5],
            [39.328888, 3.501667],
            [39.324165, 3.501667],
            [39.318054, 3.5],
            [39.296135, 3.476499],
            [39.294998, 3.475277],
            [39.248886, 3.471389],
            [39.196938, 3.478611],
            [39.129997, 3.510833],
            [39.084717, 3.534444],
            [39.046104, 3.528889],
            [38.956383, 3.518611],
            [38.913605, 3.513889],
            [38.809998, 3.543333],
            [38.729439, 3.567222],
            [38.621941, 3.601666],
            [38.516937, 3.626944],
            [38.448051, 3.599444],
            [38.323883, 3.608889],
            [38.121109, 3.611666],
            [38.056107, 3.651944],
            [38.033607, 3.698055],
            [37.998055, 3.728611],
            [37.280548, 4.194444],
            [37.130272, 4.286388],
            [37.102493, 4.329166],
            [37.095833, 4.334167],
            [37.039719, 4.375555],
            [36.887772, 4.434722],
            [36.712151, 4.43384],
            [36.666382, 4.433611],
            [36.647499, 4.446666],
            [36.433609, 4.441667],
            [36.27166, 4.439166],
            [36.211166, 4.447999],
            [36.045296, 4.44708],
            [35.951111, 4.521111],
            [35.940552, 4.622499],
            [35.924721, 4.640277],
            [35.774437, 4.798611],
            [35.773888, 5.075277],
            [35.778328, 5.081944],
            [35.781662, 5.085278],
            [35.78611, 5.088055],
            [35.802773, 5.105277],
            [35.82, 5.129444],
            [35.827217, 5.143888],
            [35.830826, 5.153889],
            [35.832497, 5.166111],
            [35.83194, 5.172222],
            [35.827499, 5.181389],
            [35.808052, 5.203055],
            [35.802216, 5.210555],
            [35.798332, 5.220277],
            [35.79583, 5.231388],
            [35.795273, 5.237499],
            [35.795555, 5.251389],
            [35.79805, 5.262777],
            [35.799438, 5.268332],
            [35.821663, 5.32861],
            [35.796944, 5.331111],
            [35.774994, 5.337222],
            [35.756104, 5.345833],
            [35.751389, 5.348055],
            [35.73027, 5.361666],
            [35.722221, 5.367222],
            [35.533333, 5.425278],
            [35.522499, 5.428333],
            [35.504715, 5.431389],
            [35.464165, 5.433055],
            [35.452499, 5.431389],
            [35.447495, 5.429444],
            [35.439995, 5.424722],
            [35.436386, 5.421389],
            [35.424164, 5.405277],
            [35.422218, 5.400555],
            [35.414993, 5.393888],
            [35.361107, 5.352221],
            [35.356384, 5.350277],
            [35.349998, 5.349722],
            [35.343887, 5.350555],
            [35.333054, 5.353611],
            [35.319443, 5.360555],
            [35.311386, 5.366944],
            [35.301941, 5.378055],
            [35.299438, 5.382222],
            [35.271111, 5.435555],
            [35.269722, 5.441111],
            [35.272217, 5.452777],
            [35.281944, 5.463333],
            [35.29055, 5.475555],
            [35.29277, 5.480277],
            [35.294998, 5.491944],
            [35.292496, 5.502777],
            [35.289993, 5.507777],
            [35.103882, 5.6325],
            [35.104996, 5.683888],
            [35.105827, 5.692778],
            [35.028328, 5.814166],
            [34.986382, 5.878055],
            [34.975555, 5.949721],
            [34.974442, 5.961944],
            [34.976662, 5.973611],
            [34.987823, 6.013944],
            [34.981384, 6.06111],
            [34.971107, 6.084444],
            [34.96833, 6.088611],
            [34.958328, 6.099166],
            [34.946106, 6.107778],
            [34.935272, 6.117499],
            [34.921661, 6.131666],
            [34.916382, 6.139999],
            [34.870552, 6.237499],
            [34.86055, 6.261666],
            [34.858055, 6.272778],
            [34.856384, 6.291111],
            [34.849998, 6.366666],
            [34.762772, 6.605833],
            [34.751205, 6.621724],
            [34.70472, 6.677777],
            [34.679161, 6.7],
            [34.654716, 6.716666],
            [34.637497, 6.727221],
            [34.626663, 6.730833],
            [34.602776, 6.734722],
            [34.562775, 6.734444],
            [34.544441, 6.736944],
            [34.534721, 6.740555],
            [34.529999, 6.743889],
            [34.527222, 6.747499],
            [34.523331, 6.756944],
            [34.486664, 6.861111],
            [34.484444, 6.878888],
            [34.485683, 6.880801],
            [34.491104, 6.889166],
            [34.47361, 6.912499],
            [34.469994, 6.916111],
            [34.433327, 6.934444],
            [34.428574, 6.936379],
            [34.367493, 6.958611],
            [34.354439, 6.959444],
            [34.335274, 6.958333],
            [34.32222, 6.959167],
            [34.304443, 6.962222],
            [34.294701, 6.966427],
            [34.282494, 6.974166],
            [34.27861, 6.9775],
            [34.236938, 7.017777],
            [34.234444, 7.021667],
            [34.22361, 7.0425],
            [34.193886, 7.089999],
            [34.16333, 7.171666],
            [34.099159, 7.199721],
            [34.029999, 7.240833],
            [34.027222, 7.245],
            [34.025833, 7.25],
            [34.025276, 7.256666],
            [34.029747, 7.280038],
            [34.032776, 7.304444],
            [34.032242, 7.369989],
            [34.03083, 7.374999],
            [34.025551, 7.383055],
            [34.022217, 7.386659],
            [33.892776, 7.518888],
            [33.878326, 7.531944],
            [33.726944, 7.648611],
            [33.711388, 7.660277],
            [33.705826, 7.662499],
            [33.647217, 7.684999],
            [33.470276, 7.743333],
            [33.458611, 7.744721],
            [33.439163, 7.744444],
            [33.2575, 7.763611],
            [33.096664, 7.781111],
            [33.053886, 7.788888],
            [33.050552, 7.7925],
            [33.014969, 7.846063],
            [32.996826, 7.887216],
            [32.991104, 7.918056],
            [32.991104, 7.924999],
            [32.992493, 7.930555],
            [33.030281, 7.995248],
            [33.033607, 7.999525],
            [33.114716, 8.096943],
            [33.128052, 8.105],
            [33.15583, 8.111666],
            [33.169716, 8.118332],
            [33.179993, 8.128611],
            [33.186424, 8.136978],
            [33.188629, 8.147791],
            [33.178055, 8.2225],
            [33.165833, 8.278332],
            [33.160828, 8.353054],
            [33.160828, 8.359999],
            [33.166107, 8.392776],
            [33.168884, 8.397499],
            [33.174995, 8.404444],
            [33.252777, 8.458611],
            [33.262497, 8.4625],
            [33.26944, 8.4625],
            [33.317215, 8.458055],
            [33.322777, 8.456665],
            [33.331108, 8.451111],
            [33.335831, 8.448889],
            [33.373886, 8.438055],
            [33.387772, 8.437777],
            [33.506104, 8.461666],
            [33.508884, 8.464814],
            [33.50972, 8.469166],
            [33.625549, 8.470554],
            [33.631943, 8.469721],
            [33.639999, 8.464167],
            [33.666107, 8.441666],
            [33.669441, 8.438332],
            [33.672218, 8.434166],
            [33.687492, 8.408333],
            [33.690277, 8.396666],
            [33.690826, 8.390554],
            [33.693329, 8.386389],
            [33.70166, 8.380554],
            [33.71611, 8.374166],
            [33.721664, 8.372776],
            [33.771324, 8.367748],
            [33.789719, 8.384443],
            [33.814438, 8.408888],
            [33.823051, 8.414165],
            [33.852493, 8.425833],
            [33.875275, 8.430277],
            [33.887772, 8.431389],
            [33.908607, 8.43111],
            [33.921944, 8.429998],
            [33.955276, 8.430832],
            [33.969994, 8.436666],
            [33.978882, 8.441387],
            [34.00222, 8.460278],
            [34.070831, 8.523333],
            [34.099159, 8.550278],
            [34.111938, 8.565277],
            [34.120552, 8.577221],
            [34.122772, 8.581944],
            [34.122803, 8.584646],
            [34.123604, 8.634165],
            [34.129997, 8.805832],
            [34.134995, 8.955276],
            [34.100555, 9.385277],
            [34.097771, 9.419722],
            [34.094994, 9.453888],
            [34.094162, 9.454721],
            [34.085831, 9.553055],
            [34.139999, 9.758055],
            [34.207222, 9.904999],
            [34.219719, 9.97361],
            [34.229721, 10.025],
            [34.231384, 10.030277],
            [34.323051, 10.117222],
            [34.347771, 10.231943],
            [34.348885, 10.244999],
            [34.341942, 10.280832],
            [34.328049, 10.349998],
            [34.28611, 10.554165],
            [34.31472, 10.586388],
            [34.352776, 10.631666],
            [34.43972, 10.784443],
            [34.594444, 10.887777],
            [34.673882, 10.834721],
            [34.710831, 10.802221],
            [34.766388, 10.753054],
            [34.773331, 10.745832],
            [34.800552, 10.723331],
            [34.852493, 10.726387],
            [34.861107, 10.731667],
            [34.864441, 10.734999],
            [34.975273, 10.864443],
            [34.978607, 10.915277],
            [34.933327, 10.956665],
            [34.983604, 11.110277],
            [35.005554, 11.174444],
            [35.0075, 11.198332],
            [34.978882, 11.223888],
            [34.973885, 11.228054],
            [34.96833, 11.234165],
            [34.964439, 11.243889],
            [34.963882, 11.256943],
            [34.965553, 11.269444],
            [34.968605, 11.280277],
            [34.986382, 11.318333],
            [35.00444, 11.348888],
            [35.013329, 11.367777],
            [35.087494, 11.535831],
            [35.093605, 11.557777],
            [35.096107, 11.576387],
            [35.096107, 11.583055],
            [35.094994, 11.58861],
            [35.09166, 11.598888],
            [35.082222, 11.617222],
            [35.074165, 11.629721],
            [35.069443, 11.638611],
            [35.064163, 11.654444],
            [35.058052, 11.720554],
            [35.058609, 11.74],
            [35.060829, 11.751389],
            [35.065552, 11.767776],
            [35.081108, 11.801109],
            [35.086105, 11.809999],
            [35.096939, 11.826944],
            [35.107773, 11.841944],
            [35.110832, 11.845833],
            [35.121666, 11.855833],
            [35.134438, 11.863888],
            [35.168327, 11.878332],
            [35.20166, 11.886389],
            [35.227219, 11.895555],
            [35.23555, 11.900833],
            [35.253609, 11.9175],
            [35.265434, 11.933611],
            [35.283882, 11.983332],
            [35.381104, 12.16111],
            [35.386108, 12.169998],
            [35.645554, 12.588888],
            [35.649162, 12.594166],
            [35.678055, 12.594999],
            [35.68222, 12.5975],
            [35.689438, 12.604166],
            [35.695274, 12.612221],
            [35.699715, 12.621944],
            [35.700554, 12.628054],
            [35.70108, 12.666115],
            [35.964722, 12.715555],
            [36.006386, 12.724165],
            [36.018883, 12.716944],
            [36.03083, 12.714443],
            [36.04361, 12.715555],
            [36.063332, 12.723331],
            [36.06916, 12.724443],
            [36.075554, 12.724998],
            [36.081108, 12.72361],
            [36.087776, 12.716665],
            [36.091942, 12.706944],
            [36.095276, 12.702776],
            [36.09861, 12.699165],
            [36.107773, 12.694166],
            [36.116104, 12.693888],
            [36.140274, 12.704166],
            [36.142693, 12.706923],
            [36.143608, 12.724165],
            [36.165276, 12.875277],
            [36.16333, 12.878054],
            [36.159164, 12.880833],
            [36.148888, 12.891388],
            [36.138054, 12.908333],
            [36.132774, 12.923332],
            [36.133606, 12.929443],
            [36.13694, 12.940554],
            [36.141388, 12.949999],
            [36.142776, 12.955555],
            [36.149719, 12.969721],
            [36.152496, 12.97361],
            [36.169716, 12.984165],
            [36.168053, 12.995832],
            [36.155273, 13.024443],
            [36.159439, 13.041666],
            [36.248604, 13.368055],
            [36.348885, 13.502777],
            [36.362221, 13.519444],
            [36.397499, 13.567778],
            [36.406387, 13.586943],
            [36.41111, 13.603333],
            [36.411942, 13.609444],
            [36.410828, 13.621666],
            [36.407494, 13.632221],
            [36.407219, 13.638332],
            [36.407494, 13.651943],
            [36.410553, 13.663055],
            [36.417496, 13.677221],
            [36.418884, 13.682777],
            [36.420555, 13.685276],
            [36.427216, 13.702221],
            [36.471107, 13.804165],
            [36.486938, 13.839443],
            [36.446388, 13.956944],
            [36.539444, 14.246111],
            [36.542816, 14.262053]
          ]
        ]
      }
    }
  ]
}
';
    }
}