<?php 
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries; 
 
use Lwwcas\LaravelCountries\Database\Seeders\Builder; 
use Illuminate\Database\Seeder; 
 
class NL_Netherlands extends Seeder 
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
    public $region = 'europe'; 
 
    /** 
    * Run the database seeds. 
    *  
    * @return void 
    */ 
    public function run() 
    {  
        $this->name = 'Netherlands'; 
        $this->official_name = 'Netherlands'; 
        $this->iso_alpha_2 = 'NL'; 
        $this->iso_alpha_3 = 'NLD'; 
        $this->iso_numeric = '528'; 
        $this->international_phone = '31'; 
 
        $this->languages = ["nl"]; 
        $this->tld = [".nl"]; 
        $this->wmo = 'NL'; 
        $this->geoname_id = '2750405'; 
 
        $this->emoji = [ 
            'img' => '🇳🇱', 
            'uCode' => 'U+1F1F3 U+1F1F1', 
        ]; 
        $this->color = [ 
            'hex' => [ 
                '#ff8000', 
            ], 
            'rgb' => [ 
                '255,128,0', 
            ], 
        ]; 
        $this->coordinates = [ 
            'latitude' => [ 
                'classic' => '52 30 N', 
                'desc' => '52.34225845336914', 
            ], 
            'longitude' => [ 
                'classic' => '5 45 E', 
                'desc' => '5.5281572341918945', 
            ], 
        ]; 
        $this->coordinates_limit = [ 
            'latitude' => [ 
                'max' => '53.583333', 
                'min' => '50.75', 
            ], 
            'longitude' => [ 
                'max' => '7.2', 
                'min' => '3.133333', 
            ], 
        ]; 
 
        $this->geographical = json_decode($this->geographical(), true); 
 
        Builder::country($this); 
    }  
 
    public function geographical() 
    {  
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"nl"},"geometry":{"type":"MultiPolygon","coordinates":[[[[3.76417,51.345276],[3.861944,51.339165],[3.8672220000001,51.339996],[3.9613890000001,51.36972],[4.198055,51.374443],[4.205277,51.37389],[4.210833,51.372498],[4.215,51.370277],[4.2175,51.368332],[4.2388980000001,51.350426],[4.2283330000001,51.340553],[4.215,51.330276],[4.17305,51.300552],[4.1613880000001,51.294167],[4.12778,51.278885],[4.062222,51.25222],[3.9525,51.214439],[3.903611,51.205826],[3.8975,51.205276],[3.890277,51.205826],[3.8063890000001,51.216942],[3.796111,51.220276],[3.793889,51.223053],[3.79083,51.233055],[3.79083,51.23722],[3.79639,51.259438],[3.793056,51.26194],[3.782777,51.264999],[3.669167,51.29277],[3.608055,51.304161],[3.600833,51.304718],[3.595555,51.303886],[3.524722,51.28833],[3.52111,51.285828],[3.52028,51.281387],[3.520833,51.277496],[3.5225,51.274162],[3.524444,51.263054],[3.524167,51.25055],[3.520833,51.248055],[3.483611,51.243332],[3.465833,51.241943],[3.4519440000001,51.242493],[3.439167,51.244438],[3.434166,51.246109],[3.388324,51.268677],[3.380833,51.273605],[3.379444,51.276939],[3.373611,51.309998],[3.37087,51.373856],[3.40667,51.385551],[3.519444,51.411385],[3.5383330000001,51.411942],[3.5502780000001,51.409721],[3.639722,51.38166],[3.72139,51.35583],[3.7350000000001,51.35],[3.740555,51.34861],[3.76417,51.345276]]],[[[5.763888,52.415276],[5.754167,52.412498],[5.720833,52.41305],[5.693889,52.408051],[5.6388880000001,52.388611],[5.62444,52.379715],[5.6119440000001,52.36972],[5.57778,52.369438],[5.573055,52.36805],[5.5650000000001,52.363609],[5.546111,52.351944],[5.544999,52.347496],[5.545555,52.343887],[5.559166,52.325829],[5.559722,52.32222],[5.53889,52.290276],[5.534166,52.283333],[5.5297220000001,52.281387],[5.5169440000001,52.27805],[5.428611,52.26416],[5.415833,52.26416],[5.4044440000001,52.266937],[5.3975,52.271942],[5.369721,52.287498],[5.357778,52.294167],[5.330555,52.30917],[5.305555,52.317772],[5.27861,52.325829],[5.24861,52.3325],[5.2119440000001,52.34],[5.192778,52.339439],[5.187222,52.338608],[5.1775,52.335548],[5.1658330000001,52.334442],[5.160832,52.335274],[5.156111,52.337219],[5.151944,52.339439],[5.145833,52.344719],[5.1419440000001,52.35083],[5.1355550000001,52.380272],[5.1377770000001,52.382774],[5.168192,52.393799],[5.1811100000001,52.405548],[5.203055,52.414719],[5.296389,52.45166],[5.381944,52.484444],[5.4130960000001,52.49332],[5.45117,52.509445],[5.454558,52.524216],[5.456944,52.528328],[5.47805,52.548882],[5.573333,52.588333],[5.643611,52.601105],[5.827222,52.570549],[5.8313880000001,52.568329],[5.839444,52.561104],[5.85556,52.544167],[5.861388,52.534996],[5.862928,52.522232],[5.85556,52.492493],[5.8475,52.482498],[5.831111,52.46333],[5.798333,52.43055],[5.795278,52.427498],[5.7866660000001,52.423607],[5.763888,52.415276]]],[[[5.423333,52.636383],[5.44861,52.61555],[5.457222,52.607216],[5.477221,52.58416],[5.485555,52.572777],[5.486111,52.568886],[5.4852770000001,52.565277],[5.46455,52.560211],[5.447742,52.53826],[5.447398,52.51305],[5.439482,52.508396],[5.42691,52.501411],[5.409215,52.495358],[5.377765,52.488522],[5.3044450000001,52.457642],[5.190362,52.41527],[5.1805840000001,52.409214],[5.174065,52.404556],[5.168076,52.397217],[5.15777,52.392914],[5.134019,52.383137],[5.067196,52.38626],[5.059339,52.388771],[5.054624,52.39128],[5.051795,52.394115],[5.050538,52.39663],[5.052738,52.400715],[5.08313,52.415245],[5.093333,52.436104],[5.095555,52.436386],[5.10305,52.44138],[5.1058330000001,52.444443],[5.111388,52.469994],[5.111666,52.474159],[5.10743,52.488533],[5.104218,52.497684],[5.100493,52.505135],[5.07162,52.547043],[5.0483410000001,52.566135],[5.045547,52.572655],[5.0357690000001,52.605247],[5.033441,52.613167],[5.032509,52.619217],[5.033441,52.6262],[5.03949,52.633652],[5.046944,52.636913],[5.05486,52.638309],[5.101424,52.63784],[5.1126000000001,52.63226],[5.1205160000001,52.6262],[5.126569,52.619682],[5.13588,52.61596],[5.142401,52.61596],[5.149386,52.61689],[5.16382,52.620617],[5.2010720000001,52.633186],[5.22575,52.642967],[5.23972,52.650883],[5.247637,52.656471],[5.2527590000001,52.662056],[5.256949,52.669041],[5.259278,52.67696],[5.260675,52.68301],[5.296389,52.69111],[5.302221,52.690552],[5.33,52.68278],[5.3783330000001,52.668327],[5.382222,52.666107],[5.423333,52.636383]]],[[[4.7647220000001,52.990273],[4.753611,52.988609],[4.73861,52.98972],[4.727777,52.99305],[4.720555,52.997772],[4.71583,53.00388],[4.708333,53.020554],[4.70667,53.035828],[4.70805,53.044441],[4.713888,53.056107],[4.7216660000001,53.06611],[4.743333,53.0861],[4.853333,53.181389],[4.859722,53.185829],[4.868889,53.18833],[4.8791670000001,53.186386],[4.883333,53.184166],[4.8858330000001,53.181664],[4.912222,53.141937],[4.912222,53.09861],[4.90889,53.090553],[4.90333,53.08416],[4.8766660000001,53.056938],[4.858611,53.039162],[4.804722,53.006943],[4.7874990000001,52.998886],[4.7647220000001,52.990273]]],[[[4.9572220000001,53.237778],[4.889722,53.210831],[4.883055,53.21194],[4.879999,53.214439],[4.88111,53.21916],[4.883333,53.2225],[4.893055,53.230827],[4.912222,53.242493],[4.964722,53.270828],[4.989444,53.283333],[5.002222,53.289162],[5.011666,53.292496],[5.0547220000001,53.304718],[5.07944,53.310829],[5.09389,53.309998],[5.099722,53.308609],[5.104722,53.306664],[5.106388,53.30333],[5.103889,53.29999],[4.9572220000001,53.237778]]],[[[5.213055,53.349998],[5.20055,53.349442],[5.1866660000001,53.349716],[5.174999,53.35249],[5.16861,53.357773],[5.16722,53.361107],[5.1666660000001,53.364998],[5.16889,53.373886],[5.171111,53.377495],[5.179999,53.381104],[5.218055,53.393883],[5.22805,53.39666],[5.53972,53.44944],[5.5566660000001,53.451942],[5.574721,53.452774],[5.579721,53.450829],[5.58194,53.44778],[5.579721,53.442497],[5.5774990000001,53.439163],[5.574166,53.436104],[5.570555,53.433609],[5.56111,53.430275],[5.35333,53.381104],[5.311388,53.371666],[5.213055,53.349998]]],[[[6.871666,53.416107],[6.901667,53.350273],[6.939722,53.324715],[6.945277,53.321388],[7.078333,53.26111],[7.0886110000001,53.25694],[7.10111,53.253883],[7.190277,53.240273],[7.201111,53.23972],[7.205277,53.240829],[7.208364,53.242805],[7.207222,53.176109],[7.211666,53.015831],[7.210278,53.001938],[7.200277,52.970551],[7.197778,52.965],[7.19333,52.95722],[7.179722,52.934166],[7.133055,52.888885],[7.0910670000001,52.836906],[7.076944,52.82444],[7.069722,52.814995],[7.066944,52.799164],[7.065555,52.78583],[7.064722,52.76861],[7.06528,52.75222],[7.063611,52.721382],[7.058888,52.663887],[7.055277,52.651939],[7.051666,52.643608],[7.048055,52.638885],[7.0433330000001,52.634995],[7.0358320000001,52.632774],[7.030833,52.6325],[7.025,52.6325],[6.920278,52.638885],[6.916944,52.640549],[6.91305,52.644997],[6.9055550000001,52.650551],[6.902222,52.651939],[6.8947220000001,52.653053],[6.78167,52.65416],[6.76805,52.65222],[6.756666,52.649162],[6.720833,52.62944],[6.7189230000001,52.626785],[6.72611,52.62111],[6.729444,52.616104],[6.760833,52.56721],[6.75944,52.56472],[6.75611,52.563332],[6.7225,52.559441],[6.69028,52.551941],[6.688889,52.549164],[6.7025,52.490555],[6.705555,52.485832],[6.7533330000001,52.462776],[6.7644440000001,52.45916],[6.94611,52.434441],[6.950833,52.434998],[6.95417,52.436386],[6.965833,52.443054],[6.973888,52.448608],[6.983889,52.46],[6.987499,52.4611],[6.99083,52.459717],[7.058888,52.398605],[7.061944,52.39361],[7.065555,52.385826],[7.071111,52.358887],[7.069722,52.352776],[7.0581140000001,52.337639],[7.038055,52.31277],[7.032222,52.298882],[7.028889,52.286942],[7.028055,52.280273],[7.028055,52.276939],[7.031388,52.268883],[7.053094,52.23776],[7.042222,52.231667],[6.96472,52.190277],[6.904166,52.17305],[6.901111,52.171387],[6.8775,52.151382],[6.876111,52.148605],[6.87472,52.13916],[6.87194,52.130272],[6.86861,52.125549],[6.860555,52.12028],[6.8525,52.11833],[6.8425,52.117775],[6.759428,52.114563],[6.73639,52.07666],[6.728611,52.035271],[6.794444,52.010277],[6.80055,52.00722],[6.826111,51.988609],[6.83,51.97749],[6.8308320000001,51.971382],[6.828888,51.965553],[6.789166,51.928055],[6.776944,51.921387],[6.746388,51.906105],[6.724444,51.898048],[6.720555,51.897774],[6.701944,51.90361],[6.69361,51.908882],[6.691667,51.91111],[6.685555,51.914162],[6.67611,51.91389],[6.5947220000001,51.896111],[6.5275,51.874443],[6.462777,51.853607],[6.35111,51.848053],[6.182221,51.895271],[6.12361,51.888054],[6.00305,51.82999],[5.9625,51.807777],[5.964722,51.80555],[5.98139,51.785271],[5.984722,51.780548],[5.986666,51.766937],[5.985833,51.763885],[5.980833,51.760277],[5.95205,51.747528],[6.028889,51.706665],[6.0930550000001,51.607216],[6.094166,51.604439],[6.131389,51.572495],[6.136666,51.56916],[6.15861,51.558327],[6.202222,51.51694],[6.2075,51.509995],[6.221944,51.468887],[6.2222210000001,51.46583],[6.222777,51.364716],[6.2222210000001,51.361664],[6.143055,51.295273],[6.07889,51.242493],[6.076388,51.240273],[6.072222,51.218048],[6.071666,51.215],[6.071388,51.211662],[6.074721,51.189995],[6.07667,51.181107],[6.0794440000001,51.175827],[6.0836110000001,51.17166],[6.090278,51.168884],[6.0975,51.131104],[6.00305,51.08416],[5.910277,51.062492],[5.9069440000001,51.063889],[5.902499,51.06305],[5.866944,51.04805],[5.86472,51.046104],[5.864166,51.04361],[5.8694440000001,51.018883],[5.891666,50.972771],[5.900277,50.971939],[5.908055,50.973885],[5.9325,50.982216],[5.944722,50.984993],[5.948889,50.984993],[6.0175,50.98027],[6.025555,50.978333],[6.02833,50.97666],[6.0802770000001,50.915833],[6.081388,50.913605],[6.084722,50.873604],[6.084167,50.870552],[6.071666,50.85416],[6.06778,50.849716],[6.064722,50.848328],[6.060833,50.847496],[6.056389,50.848328],[6.051666,50.851944],[6.04611,50.851944],[6.026111,50.847771],[6.0138880000001,50.84166],[6.013333,50.838608],[6.0080550000001,50.802216],[6.011798,50.757271],[5.92639,50.756104],[5.898918,50.753883],[5.870555,50.760826],[5.7975,50.76944],[5.742499,50.76028],[5.737222,50.75944],[5.69861,50.75777],[5.691911,50.760559],[5.701388,50.774437],[5.7055600000001,50.781952],[5.705,50.78583],[5.701944,50.805832],[5.69394,50.80881],[5.68361,50.811386],[5.655555,50.822495],[5.65167,50.824715],[5.6408330000001,50.839722],[5.6380550000001,50.846664],[5.6375,50.850273],[5.6388880000001,50.85889],[5.640555,50.86305],[5.65,50.87694],[5.657499,50.88027],[5.758055,50.959999],[5.7641660000001,50.989998],[5.776944,51.025833],[5.818055,51.114998],[5.84833,51.139442],[5.851388,51.14222],[5.855111,51.148338],[5.8550000000001,51.151108],[5.8491710000001,51.15638],[5.834444,51.165833],[5.754167,51.189995],[5.644722,51.203606],[5.5683340000001,51.22071],[5.557777,51.263885],[5.553333,51.269722],[5.550278,51.2725],[5.520833,51.291107],[5.510833,51.294441],[5.504444,51.295273],[5.497222,51.296104],[5.4858330000001,51.294998],[5.475555,51.286942],[5.467777,51.282776],[5.411388,51.266937],[5.406111,51.266106],[5.4,51.265549],[5.3297210000001,51.26221],[5.23897,51.262283],[5.238889,51.304718],[5.2375,51.308327],[5.233611,51.31055],[5.223332,51.313889],[5.2011110000001,51.319717],[5.194444,51.32],[5.189166,51.31916],[5.168056,51.314438],[5.155,51.315826],[5.143888,51.318604],[5.14,51.320831],[5.083055,51.385826],[5.07861,51.391663],[5.077222,51.395271],[5.07667,51.398888],[5.077777,51.403328],[5.08,51.406944],[5.085833,51.412773],[5.08944,51.415276],[5.1011100000001,51.42722],[5.103333,51.43055],[5.1044440000001,51.434998],[5.0961100000001,51.44611],[5.08028,51.466942],[5.0733330000001,51.471664],[5.041389,51.486664],[5.03555,51.487221],[5.0236110000001,51.48111],[5.016944,51.47555],[5.0152770000001,51.471664],[5.012777,51.454163],[5.00944,51.446388],[5,51.437775],[4.989444,51.43055],[4.955555,51.409996],[4.94028,51.401382],[4.93611,51.39944],[4.929999,51.398605],[4.85305,51.414444],[4.8327770000001,51.429993],[4.8447220000001,51.461388],[4.84611,51.477493],[4.8455550000001,51.48111],[4.825833,51.492218],[4.80694,51.499443],[4.788333,51.503052],[4.781111,51.50361],[4.769166,51.502777],[4.757222,51.496666],[4.705555,51.469444],[4.69861,51.464439],[4.67111,51.44416],[4.668611,51.440826],[4.670833,51.433609],[4.673055,51.430832],[4.67139,51.42776],[4.650555,51.423332],[4.644722,51.42305],[4.546944,51.425827],[4.5419440000001,51.42667],[4.53722,51.432495],[4.535277,51.43972],[4.535277,51.443886],[4.53805,51.452499],[4.543333,51.458885],[4.544999,51.462776],[4.549999,51.474998],[4.55083,51.47944],[4.549444,51.482773],[4.545555,51.484993],[4.53972,51.48555],[4.4866660000001,51.480827],[4.481944,51.47944],[4.3975,51.452774],[4.393888,51.450272],[4.396667,51.416939],[4.401388,51.41083],[4.417777,51.39833],[4.43639,51.378883],[4.437778,51.375275],[4.431666,51.364441],[4.428055,51.361938],[4.4186110000001,51.35916],[4.40722,51.357773],[4.388055,51.357498],[4.35889,51.359993],[4.346944,51.362495],[4.2796740000001,51.376595],[4.252368,51.375145],[4.2024990000001,51.405],[4.05611,51.425827],[3.928889,51.434998],[3.92778,51.43055],[3.92555,51.426941],[3.906666,51.399994],[3.899722,51.395],[3.82972,51.389717],[3.823055,51.39],[3.5730550000001,51.444443],[3.5433330000001,51.454437],[3.533611,51.458054],[3.4525,51.521111],[3.443055,51.528885],[3.440555,51.531662],[3.440833,51.535828],[3.446389,51.541939],[3.45333,51.54694],[3.465,51.553329],[3.485555,51.563332],[3.5108330000001,51.57444],[3.523889,51.579994],[3.555277,51.592216],[3.568889,51.597221],[3.5802770000001,51.59861],[3.6919,51.600307],[3.832778,51.606667],[3.837222,51.606667],[3.868889,51.601387],[3.872777,51.59916],[3.89333,51.584442],[3.898056,51.578606],[3.903611,51.568886],[3.902778,51.565277],[3.899167,51.562775],[3.865278,51.54666],[3.843534,51.554028],[3.820555,51.549164],[3.8658500000001,51.538662],[3.886337,51.543049],[3.921389,51.549164],[3.92861,51.548332],[3.93444,51.54694],[4.006666,51.525276],[4.0402770000001,51.51277],[4.055833,51.50555],[4.067499,51.494995],[4.06917,51.491661],[4.081944,51.46916],[4.0958330000001,51.451385],[4.111111,51.443604],[4.125555,51.438332],[4.145833,51.43583],[4.152222,51.435555],[4.23805,51.43471],[4.243333,51.435555],[4.252777,51.438606],[4.26428,51.44397],[4.2772220000001,51.445274],[4.281944,51.446663],[4.28611,51.448608],[4.2891660000001,51.45166],[4.291389,51.454994],[4.293611,51.46833],[4.292222,51.47583],[4.290833,51.47916],[4.284721,51.488327],[4.266944,51.508331],[4.262777,51.510551],[4.22963,51.518616],[4.2152780000001,51.516388],[4.203888,51.514999],[4.082777,51.53083],[3.9955550000001,51.579437],[3.99,51.584717],[3.990833,51.588333],[3.9941660000001,51.590828],[4.003055,51.594444],[4.041944,51.60527],[4.062222,51.610275],[4.0791660000001,51.612495],[4.169722,51.605553],[4.19028,51.60083],[4.1958330000001,51.59916],[4.20751,51.589478],[4.208611,51.59],[4.209444,51.594444],[4.20583,51.60083],[4.20111,51.606667],[4.196388,51.612495],[4.186167,51.617043],[4.16583,51.615273],[4.1538890000001,51.614441],[4.13972,51.614998],[4.13472,51.616104],[4.113333,51.630272],[4.110555,51.63694],[4.10614,51.650978],[4.10305,51.647774],[4.09611,51.642776],[4.088611,51.638329],[4.076111,51.6325],[4.0663880000001,51.629715],[4.019722,51.61972],[4.008888,51.617775],[3.98,51.614716],[3.9675,51.614441],[3.903889,51.63361],[3.899167,51.635277],[3.7619440000001,51.674995],[3.71266,51.674675],[3.704444,51.676941],[3.696389,51.681389],[3.687778,51.689438],[3.68611,51.692772],[3.6855550000001,51.69639],[3.6875000000001,51.709717],[3.689167,51.713608],[3.693611,51.720833],[3.7033330000001,51.728607],[3.71417,51.733887],[3.7236110000001,51.73666],[3.777778,51.746109],[3.7838890000001,51.746666],[3.8125,51.74472],[3.82486,51.74229],[3.87861,51.743889],[3.885278,51.743889],[3.95583,51.735832],[3.968611,51.733604],[3.975833,51.728882],[4.004444,51.71],[4.06694,51.679443],[4.104166,51.661942],[4.1127780000001,51.67083],[4.11611,51.673332],[4.124444,51.67722],[4.155833,51.68388],[4.1677540000001,51.68557],[4.127222,51.706665],[4.0597220000001,51.751389],[4.056666,51.758049],[4.03083,51.78666],[4.0277780000001,51.78916],[4.019722,51.79361],[4.005278,51.798882],[3.993055,51.801384],[3.980556,51.802773],[3.95583,51.801666],[3.874189,51.78637],[3.866111,51.80722],[3.865278,51.810829],[3.865555,51.814995],[3.867777,51.818604],[3.8808330000001,51.823883],[3.98333,51.846382],[3.995,51.847771],[4.006666,51.846664],[4.015555,51.842773],[4.0275,51.836105],[4.06111,51.860275],[4.01667,51.9675],[4.011944,51.977776],[4.012221,51.981667],[4.0149990000001,51.984718],[4.021111,51.988052],[4.0388880000001,51.987495],[4.0444440000001,51.986107],[4.05917,51.984718],[4.08,51.983887],[4.09944,51.98416],[4.111111,51.98555],[4.125555,51.989716],[4.138055,51.995827],[4.149444,52.002495],[4.362222,52.17166],[4.36861,52.177216],[4.4,52.205826],[4.408889,52.214722],[4.420555,52.226662],[4.428888,52.236107],[4.44167,52.252495],[4.49449,52.327217],[4.5177770000001,52.360832],[4.53889,52.39222],[4.5427770000001,52.399719],[4.55111,52.419716],[4.5680550000001,52.449165],[4.576944,52.458054],[4.584431,52.461502],[4.657958,52.453125],[4.706849,52.427227],[4.845252,52.410198],[4.88598,52.390373],[4.90688,52.37416],[4.952402,52.373123],[4.9919440000001,52.361107],[5.126944,52.330276],[5.23667,52.312492],[5.249166,52.311943],[5.254722,52.310555],[5.289444,52.301666],[5.298611,52.297775],[5.3025,52.29583],[5.3304420000001,52.275826],[5.337777,52.275551],[5.36389,52.271111],[5.375278,52.26916],[5.383888,52.264999],[5.4075,52.25194],[5.4175,52.249161],[5.424444,52.2486],[5.4305550000001,52.249161],[5.5238890000001,52.26416],[5.53361,52.26722],[5.54417,52.274162],[5.55305,52.283333],[5.5624990000001,52.297493],[5.5700000000001,52.313049],[5.57778,52.32278],[5.585,52.327774],[5.624722,52.354164],[5.62944,52.356384],[5.67055,52.371384],[5.687485,52.377464],[5.702777,52.382774],[5.722221,52.388329],[5.73249,52.390091],[5.734459,52.390625],[5.743055,52.393051],[5.756389,52.398048],[5.76667,52.401901],[5.774166,52.405273],[5.810262,52.426094],[5.81478,52.429115],[5.8196380000001,52.432556],[5.849999,52.46139],[5.8525,52.46472],[5.878055,52.50944],[5.8724150000001,52.523415],[5.8475,52.568054],[5.84861,52.587494],[5.8550000000001,52.606911],[5.758888,52.60667],[5.678888,52.607216],[5.664721,52.60833],[5.6019440000001,52.65583],[5.599444,52.658607],[5.598888,52.662498],[5.595277,52.740829],[5.59722,52.753609],[5.5991660000001,52.757774],[5.619166,52.779442],[5.6591660000001,52.818329],[5.668611,52.826385],[5.6769440000001,52.830551],[5.71835,52.83802],[5.7144440000001,52.840271],[5.651388,52.85527],[5.645833,52.85555],[5.595,52.848328],[5.588888,52.842216],[5.586666,52.83861],[5.583611,52.836105],[5.574721,52.83194],[5.563333,52.830826],[5.4186110000001,52.851662],[5.412499,52.85305],[5.39805,52.858604],[5.3741660000001,52.872215],[5.36861,52.877777],[5.3633330000001,52.887215],[5.365833,52.89111],[5.371944,52.89666],[5.3936110000001,52.906387],[5.403889,52.908882],[5.412777,52.912773],[5.41361,52.91722],[5.4186110000001,52.94944],[5.42055,52.964439],[5.411388,53.028885],[5.407777,53.035],[5.375555,53.070549],[5.3641660000001,53.07027],[5.339167,53.065552],[5.303055,53.052773],[5.289444,53.047218],[5.2630550000001,53.035271],[5.19831,52.995316],[5.1002770000001,52.948051],[5.09167,52.885826],[5.126111,52.822495],[5.193055,52.75444],[5.197222,52.756386],[5.202222,52.7575],[5.21611,52.7575],[5.230833,52.756104],[5.27833,52.750832],[5.2861110000001,52.746109],[5.29055,52.740829],[5.2925000000001,52.737778],[5.29555,52.73111],[5.304166,52.70694],[5.302221,52.702774],[5.2553050000001,52.691589],[5.24167,52.660553],[5.230277,52.65361],[5.196666,52.637772],[5.167777,52.62888],[5.147222,52.623886],[5.1419440000001,52.622772],[5.135,52.622772],[5.133055,52.626106],[5.106388,52.64222],[5.101388,52.64416],[5.055833,52.64278],[5.05,52.641937],[5.040833,52.63861],[5.033333,52.634163],[5.028889,52.626663],[5.0280550000001,52.61972],[5.02861,52.615829],[5.0425,52.573883],[5.047777,52.564163],[5.067778,52.541382],[5.087222,52.517776],[5.091944,52.5075],[5.092777,52.50027],[5.090278,52.433327],[5.078055,52.416107],[5.046369,52.40263],[5.028333,52.375832],[5.0225,52.375275],[5.016388,52.375832],[4.92139,52.386108],[4.9083330000001,52.388329],[4.875527,52.415604],[4.82579,52.425697],[4.7131560000001,52.441013],[4.66846,52.465885],[4.58,52.471664],[4.579444,52.475555],[4.588611,52.489441],[4.598332,52.513885],[4.62222,52.596664],[4.631944,52.634163],[4.63611,52.65222],[4.63583,52.68055],[4.654166,52.751663],[4.73,52.948051],[4.734166,52.955551],[4.74139,52.960548],[4.7497220000001,52.962494],[4.773889,52.964722],[4.793056,52.965271],[4.796111,52.964439],[4.809444,52.953606],[4.809999,52.942497],[4.8075,52.939163],[4.8058330000001,52.934998],[4.80694,52.927498],[4.808611,52.924164],[4.813333,52.91833],[4.82639,52.911942],[4.8361110000001,52.90833],[4.8625,52.89999],[4.8724990000001,52.897217],[4.8875,52.896111],[4.90472,52.898048],[4.9325,52.902496],[4.9430550000001,52.905],[5.085833,52.955276],[5.10305,52.963051],[5.1802770000001,53.003052],[5.1842060000001,53.005531],[5.224444,53.032494],[5.24667,53.046944],[5.254722,53.051384],[5.301666,53.07278],[5.3272220000001,53.07944],[5.360833,53.084442],[5.37861,53.09166],[5.38611,53.096664],[5.38861,53.1],[5.4025,53.121384],[5.411111,53.14027],[5.416944,53.163055],[5.415,53.169998],[5.4152770000001,53.174164],[5.442499,53.21194],[5.458611,53.226105],[5.46611,53.230827],[5.573333,53.288055],[5.5861110000001,53.294716],[5.5991660000001,53.30028],[5.890833,53.38222],[5.9816670000001,53.398888],[6.0925,53.410828],[6.1725,53.413605],[6.183332,53.413887],[6.187288,53.41243],[6.19472,53.41],[6.2969440000001,53.401939],[6.4525,53.425278],[6.6975,53.461937],[6.72111,53.464722],[6.7419440000001,53.46583],[6.7775,53.45916],[6.8550000000001,53.439438],[6.8627780000001,53.437218],[6.869166,53.43388],[6.87139,53.431938],[6.870832,53.42222],[6.871666,53.416107]]],[[[5.699166,53.462776],[5.720555,53.461662],[5.804999,53.463882],[5.854722,53.466942],[5.905,53.469719],[5.9372220000001,53.470551],[5.951388,53.468887],[5.955555,53.46666],[5.95611,53.462776],[5.9480550000001,53.458611],[5.81139,53.438889],[5.798333,53.438606],[5.77722,53.440552],[5.771388,53.442215],[5.74861,53.44416],[5.737222,53.442497],[5.683888,53.425278],[5.662499,53.426384],[5.65,53.429161],[5.637777,53.435829],[5.6330550000001,53.441666],[5.6325,53.445549],[5.633333,53.448051],[5.65361,53.469719],[5.657499,53.472221],[5.663055,53.473053],[5.668888,53.471664],[5.674444,53.466385],[5.699166,53.462776]]],[[[6.1349990000001,53.45361],[6.13028,53.45361],[6.126389,53.458328],[6.11639,53.471939],[6.117222,53.474998],[6.119444,53.477219],[6.13611,53.491386],[6.144722,53.496384],[6.148889,53.497498],[6.158055,53.49916],[6.303333,53.511383],[6.314722,53.511108],[6.3325,53.508049],[6.339444,53.504997],[6.34111,53.502777],[6.34028,53.50027],[6.3375,53.498604],[6.272499,53.484444],[6.234722,53.47639],[6.225555,53.474998],[6.16305,53.471664],[6.15278,53.467216],[6.1349990000001,53.45361]]]]}}]}'; 
    }  
 
} 
 
