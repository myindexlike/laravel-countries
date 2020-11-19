<?php 
 
namespace Lwwcas\LaravelCountries\Database\Seeders\Countries; 
 
use Lwwcas\LaravelCountries\Database\Seeders\Builder; 
use Illuminate\Database\Seeder; 
 
class PY_Paraguay extends Seeder 
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
        $this->name = 'Paraguay'; 
        $this->official_name = 'Republic of Paraguay'; 
        $this->iso_alpha_2 = 'PY'; 
        $this->iso_alpha_3 = 'PRY'; 
        $this->iso_numeric = '600'; 
        $this->international_phone = '595'; 
 
        $this->languages = ["es","gn"]; 
        $this->tld = [".py"]; 
        $this->wmo = 'PY'; 
        $this->geoname_id = '3437598'; 
 
        $this->emoji = [ 
            'img' => '🇵🇾', 
            'uCode' => 'U+1F1F5 U+1F1FE', 
        ]; 
        $this->color = [ 
            'hex' => [ 
                '#ff0000', 
                '#ffffff', 
                '#0000ff', 
            ], 
            'rgb' => [ 
                '255,0,0', 
                '255,255,255', 
                '0,0,255', 
            ], 
        ]; 
        $this->coordinates = [ 
            'latitude' => [ 
                'classic' => '23 00 S', 
                'desc' => '-23.24028968811035', 
            ], 
            'longitude' => [ 
                'classic' => '58 00 W', 
                'desc' => '-58.395172119140625', 
            ], 
        ]; 
        $this->coordinates_limit = [ 
            'latitude' => [ 
                'max' => '-19.333333', 
                'min' => '-27.533333', 
            ], 
            'longitude' => [ 
                'max' => '-54.35', 
                'min' => '-62.633333', 
            ], 
        ]; 
 
        $this->geographical = json_decode($this->geographical(), true); 
 
        Builder::country($this); 
    }  
 
    public function geographical() 
    {  
        return '{"type":"FeatureCollection","features":[{"type":"Feature","properties":{"cca2":"py"},"geometry":{"type":"Polygon","coordinates":[[[-54.330559,-24.679449],[-54.396393,-24.804447],[-54.408058,-24.83889],[-54.452507,-25.011112],[-54.454727,-25.023335],[-54.458061,-25.056667],[-54.458618,-25.076389],[-54.45639,-25.087223],[-54.454445,-25.092224],[-54.426949,-25.12167],[-54.422226,-25.130836],[-54.421951,-25.136948],[-54.423058,-25.143059],[-54.427505,-25.153057],[-54.500839,-25.274445],[-54.510559,-25.286392],[-54.519447,-25.297226],[-54.529449,-25.30917],[-54.545837,-25.328613],[-54.553337,-25.335835],[-54.56945,-25.348614],[-54.57917,-25.360279],[-54.616951,-25.438057],[-54.616669,-25.444168],[-54.616112,-25.450279],[-54.598915,-25.510456],[-54.598915,-25.573223],[-54.623337,-25.648613],[-54.611671,-25.781948],[-54.604446,-25.943611],[-54.654167,-25.97139],[-54.659172,-25.973892],[-54.663063,-25.977222],[-54.665001,-25.982502],[-54.661949,-26.152225],[-54.661667,-26.158337],[-54.65834,-26.168892],[-54.64695,-26.179169],[-54.642502,-26.182224],[-54.635559,-26.189445],[-54.633339,-26.200279],[-54.637779,-26.210281],[-54.644173,-26.218334],[-54.667503,-26.23888],[-54.658058,-26.279167],[-54.65834,-26.285835],[-54.660561,-26.298058],[-54.690834,-26.422779],[-54.69278,-26.428337],[-54.698334,-26.438335],[-54.83667,-26.659447],[-54.847778,-26.655556],[-54.87056,-26.654167],[-54.876945,-26.655003],[-54.888336,-26.65778],[-54.907784,-26.667778],[-54.923889,-26.680557],[-54.930557,-26.688335],[-54.933334,-26.69278],[-54.93528,-26.698334],[-54.936394,-26.704445],[-54.938614,-26.73167],[-54.942223,-26.75],[-54.948059,-26.766113],[-54.950562,-26.770557],[-54.95723,-26.778336],[-54.969452,-26.788059],[-54.986115,-26.793335],[-54.998894,-26.794445],[-55.034447,-26.795002],[-55.046112,-26.797779],[-55.051117,-26.800282],[-55.060562,-26.805836],[-55.064728,-26.80917],[-55.125839,-26.86417],[-55.128891,-26.868057],[-55.131668,-26.87278],[-55.133614,-26.885834],[-55.251114,-26.936111],[-55.271118,-26.9375],[-55.379448,-26.966393],[-55.396118,-26.971668],[-55.405556,-26.976391],[-55.413895,-26.98278],[-55.421394,-26.990002],[-55.547501,-27.112225],[-55.573334,-27.166668],[-55.581116,-27.215],[-55.572784,-27.227779],[-55.56778,-27.243057],[-55.567505,-27.249447],[-55.56945,-27.262222],[-55.583618,-27.314167],[-55.585556,-27.319447],[-55.59639,-27.338058],[-55.599724,-27.342503],[-55.607506,-27.349724],[-55.727226,-27.433891],[-55.736115,-27.439445],[-55.741669,-27.441113],[-55.754173,-27.443058],[-55.761116,-27.443336],[-55.77417,-27.440281],[-55.842506,-27.40778],[-55.846947,-27.404724],[-55.85778,-27.393612],[-55.860283,-27.389446],[-55.864449,-27.367226],[-55.869446,-27.351669],[-55.871948,-27.347504],[-55.879173,-27.34],[-55.888062,-27.333889],[-55.898338,-27.32917],[-55.904449,-27.327503],[-55.919724,-27.326389],[-55.926674,-27.326668],[-55.965271,-27.331955],[-56.029167,-27.306667],[-56.042229,-27.303612],[-56.064445,-27.30278],[-56.098618,-27.304726],[-56.131393,-27.307781],[-56.137779,-27.308891],[-56.148613,-27.312225],[-56.15834,-27.316948],[-56.263893,-27.384445],[-56.268059,-27.387501],[-56.271393,-27.391392],[-56.274445,-27.396114],[-56.275558,-27.402225],[-56.271393,-27.425003],[-56.26889,-27.448612],[-56.270836,-27.461391],[-56.279167,-27.475281],[-56.345558,-27.570278],[-56.352501,-27.578056],[-56.36084,-27.584167],[-56.371117,-27.588337],[-56.378059,-27.588337],[-56.398056,-27.584446],[-56.418617,-27.574722],[-56.452782,-27.550835],[-56.460007,-27.543613],[-56.49028,-27.509167],[-56.497505,-27.495556],[-56.504173,-27.475281],[-56.514725,-27.464169],[-56.525841,-27.459724],[-56.550003,-27.452503],[-56.570557,-27.449169],[-56.585838,-27.448059],[-56.606949,-27.448334],[-56.644447,-27.453892],[-56.673058,-27.461391],[-56.692505,-27.471111],[-56.700836,-27.477222],[-56.706276,-27.483433],[-56.725838,-27.503613],[-56.736946,-27.506947],[-56.757507,-27.504723],[-56.775558,-27.499168],[-56.786118,-27.494446],[-56.799171,-27.485001],[-56.813339,-27.47028],[-56.835838,-27.449448],[-56.855835,-27.432781],[-56.869171,-27.423615],[-56.874168,-27.421112],[-56.887222,-27.418056],[-56.908615,-27.417778],[-56.915001,-27.418613],[-56.932503,-27.423058],[-56.964729,-27.43417],[-56.998611,-27.450836],[-57.036118,-27.47139],[-57.04528,-27.476948],[-57.059448,-27.487503],[-57.071671,-27.491947],[-57.083893,-27.4925],[-57.113892,-27.490837],[-57.129448,-27.489723],[-57.164452,-27.484169],[-57.20723,-27.471947],[-57.229729,-27.463337],[-57.245003,-27.455833],[-57.269173,-27.442223],[-57.296951,-27.431114],[-57.323616,-27.425556],[-57.344925,-27.426117],[-57.413063,-27.417778],[-57.607506,-27.374168],[-57.626396,-27.369167],[-57.637505,-27.364723],[-57.652229,-27.35667],[-57.682503,-27.335003],[-57.703896,-27.319447],[-57.723618,-27.308891],[-57.735558,-27.305279],[-57.791389,-27.292225],[-57.935837,-27.275558],[-58.011116,-27.270279],[-58.156395,-27.26889],[-58.289726,-27.273891],[-58.479729,-27.286114],[-58.505562,-27.288612],[-58.529167,-27.293335],[-58.552505,-27.298889],[-58.56945,-27.303337],[-58.604622,-27.316921],[-58.597504,-27.256111],[-58.598892,-27.245003],[-58.601952,-27.239723],[-58.608894,-27.232224],[-58.620834,-27.222225],[-58.646393,-27.203335],[-58.652779,-27.195557],[-58.655731,-27.191612],[-58.659172,-27.181667],[-58.656952,-27.168613],[-58.655006,-27.163334],[-58.652779,-27.158337],[-58.643616,-27.145279],[-58.628059,-27.131111],[-58.605835,-27.125],[-58.585556,-27.124447],[-58.57917,-27.123611],[-58.564171,-27.1175],[-58.472778,-26.993057],[-58.469543,-26.981468],[-58.394447,-26.908058],[-58.352768,-26.885387],[-58.316673,-26.87278],[-58.181671,-26.656113],[-58.168892,-26.602779],[-58.168335,-26.597225],[-58.177505,-26.579445],[-58.188339,-26.562778],[-58.215836,-26.545002],[-58.218056,-26.540558],[-58.21917,-26.535004],[-58.211395,-26.426392],[-58.210281,-26.420002],[-58.206673,-26.408611],[-58.161949,-26.300556],[-58.131393,-26.257225],[-58.14473,-26.206947],[-58.04834,-26.119167],[-58.010002,-26.108334],[-57.995834,-26.100002],[-57.868057,-26.011948],[-57.855835,-26.001945],[-57.853889,-25.99667],[-57.854729,-25.991112],[-57.857506,-25.986389],[-57.866669,-25.981392],[-57.878891,-25.977501],[-57.886673,-25.976948],[-57.897224,-25.972504],[-57.900841,-25.968613],[-57.903618,-25.964169],[-57.903618,-25.958336],[-57.90139,-25.952778],[-57.894447,-25.945004],[-57.853889,-25.904446],[-57.811951,-25.848057],[-57.803612,-25.834724],[-57.803062,-25.827503],[-57.803612,-25.821945],[-57.810982,-25.77314],[-57.800003,-25.770279],[-57.785835,-25.763058],[-57.753059,-25.738335],[-57.744728,-25.731945],[-57.576668,-25.549446],[-57.553894,-25.468334],[-57.553337,-25.448334],[-57.553894,-25.443336],[-57.55584,-25.438057],[-57.562225,-25.430279],[-57.575279,-25.421391],[-57.585281,-25.416389],[-57.591667,-25.414448],[-57.600563,-25.409447],[-57.626945,-25.391392],[-57.631111,-25.388058],[-57.643333,-25.374725],[-57.668617,-25.306114],[-57.672668,-25.2943],[-57.70639,-25.271389],[-57.73278,-25.240559],[-57.738335,-25.233059],[-57.745285,-25.218891],[-57.748337,-25.208614],[-57.751114,-25.191948],[-57.756111,-25.176945],[-57.766113,-25.166115],[-57.858063,-25.097504],[-57.871117,-25.08778],[-57.887222,-25.081947],[-57.908058,-25.078056],[-57.935562,-25.077503],[-58.059723,-25.034447],[-58.129173,-25.008057],[-58.179726,-24.977222],[-58.183891,-24.973892],[-58.28167,-24.978615],[-58.348335,-24.974724],[-58.356117,-24.961113],[-58.44278,-24.86417],[-58.450562,-24.856945],[-58.461113,-24.853058],[-58.525841,-24.834446],[-58.539452,-24.831947],[-58.571945,-24.826668],[-58.579727,-24.826115],[-58.604446,-24.828613],[-58.669724,-24.822224],[-58.803337,-24.784168],[-58.8125,-24.778893],[-58.881393,-24.730003],[-58.922501,-24.697781],[-58.938614,-24.685558],[-58.989723,-24.654724],[-59.058617,-24.618614],[-59.101952,-24.608334],[-59.289726,-24.515278],[-59.33889,-24.488892],[-59.353889,-24.475281],[-59.360001,-24.467503],[-59.376396,-24.442223],[-59.390007,-24.428059],[-59.468895,-24.356392],[-59.472778,-24.353058],[-59.531113,-24.316948],[-59.536118,-24.314445],[-59.67028,-24.233612],[-59.98278,-24.042778],[-60.038063,-24.009724],[-60.066673,-24.016392],[-60.087784,-24.02417],[-60.115837,-24.032223],[-60.13945,-24.037781],[-60.162781,-24.041668],[-60.273056,-24.039448],[-60.286392,-24.037502],[-60.45639,-23.988892],[-60.573334,-23.951115],[-60.57695,-23.947502],[-60.586113,-23.935558],[-60.589172,-23.931393],[-60.592506,-23.921112],[-60.592224,-23.914169],[-60.59417,-23.909168],[-60.613892,-23.894447],[-60.732224,-23.872223],[-60.760834,-23.872501],[-60.875282,-23.849724],[-60.986389,-23.821667],[-61.007782,-23.813335],[-61.012222,-23.810558],[-61.015007,-23.806114],[-61.024727,-23.786114],[-61.034729,-23.754169],[-61.108894,-23.611389],[-61.111946,-23.607224],[-61.115562,-23.603615],[-61.182503,-23.554726],[-61.294724,-23.48917],[-61.364174,-23.456112],[-61.450836,-23.418056],[-61.589729,-23.300003],[-61.598618,-23.29417],[-61.625,-23.283611],[-61.630836,-23.281948],[-61.649727,-23.284725],[-61.660835,-23.287781],[-61.667778,-23.288059],[-61.674446,-23.287224],[-61.683891,-23.282223],[-61.739723,-23.243614],[-61.7425,-23.239445],[-61.746674,-23.229725],[-61.74778,-23.224167],[-61.74556,-23.190834],[-61.746948,-23.18528],[-61.755836,-23.173336],[-61.759445,-23.169724],[-61.855278,-23.09],[-61.885002,-23.075836],[-61.890007,-23.073612],[-61.896118,-23.071945],[-61.916672,-23.069725],[-61.921112,-23.066948],[-61.986389,-23.010281],[-61.990005,-23.006668],[-61.999168,-22.994724],[-62.00695,-22.975281],[-62.005562,-22.958057],[-62.003891,-22.952778],[-62.003616,-22.947224],[-62.005562,-22.942223],[-62.02195,-22.906113],[-62.029449,-22.891945],[-62.042229,-22.876392],[-62.101952,-22.816391],[-62.154724,-22.756111],[-62.237785,-22.573891],[-62.237503,-22.566948],[-62.24028,-22.542778],[-62.246948,-22.528893],[-62.253891,-22.521667],[-62.285278,-22.495834],[-62.315834,-22.480835],[-62.341393,-22.47028],[-62.356949,-22.469448],[-62.370003,-22.467503],[-62.385559,-22.460835],[-62.39917,-22.452778],[-62.521393,-22.370834],[-62.617783,-22.275558],[-62.643768,-22.238903],[-62.634171,-22.221947],[-62.601112,-22.120556],[-62.524445,-21.883614],[-62.486115,-21.765003],[-62.474812,-21.728062],[-62.470558,-21.714169],[-62.377785,-21.426392],[-62.258896,-21.056946],[-62.261093,-21.000515],[-62.264168,-20.810837],[-62.265282,-20.742226],[-62.267784,-20.621948],[-62.269447,-20.562225],[-62.198837,-20.47139],[-62.101952,-20.337502],[-61.913071,-20.080009],[-61.847504,-19.910835],[-61.774445,-19.724724],[-61.7425,-19.645],[-61.668892,-19.633335],[-61.357224,-19.583057],[-60.796394,-19.49028],[-60.613335,-19.459167],[-60.516396,-19.434723],[-60.424446,-19.410835],[-60.057503,-19.314724],[-60.021118,-19.304726],[-60.015938,-19.299427],[-59.990837,-19.296669],[-59.972778,-19.296947],[-59.573616,-19.321667],[-59.428337,-19.330002],[-59.156395,-19.345558],[-59.09584,-19.348892],[-58.792618,-19.501507],[-58.520561,-19.638615],[-58.268059,-19.764168],[-58.232224,-19.782501],[-58.15139,-19.828056],[-58.150558,-19.834167],[-58.13195,-19.980003],[-58.130562,-19.992226],[-58.133057,-20.082226],[-58.136391,-20.113613],[-58.138062,-20.119167],[-58.15889,-20.168056],[-58.155838,-20.228615],[-58.136948,-20.278893],[-58.097229,-20.341393],[-58.058891,-20.401112],[-58.008896,-20.495834],[-58.009171,-20.515278],[-58.008614,-20.521389],[-57.996948,-20.612225],[-57.995003,-20.62389],[-57.981949,-20.700836],[-57.978615,-20.711113],[-57.974724,-20.714725],[-57.968895,-20.716114],[-57.96389,-20.714169],[-57.960007,-20.710835],[-57.956947,-20.706669],[-57.944168,-20.677502],[-57.940834,-20.673336],[-57.932228,-20.668056],[-57.926392,-20.666946],[-57.92028,-20.668335],[-57.907501,-20.67667],[-57.903893,-20.680279],[-57.861946,-20.730278],[-57.857224,-20.73917],[-57.856674,-20.838612],[-57.814445,-20.971947],[-57.814728,-20.985558],[-57.850281,-21.336945],[-57.855003,-21.34639],[-57.879173,-21.38028],[-57.915558,-21.429169],[-57.932503,-21.46167],[-57.953896,-21.510834],[-57.954727,-21.516945],[-57.939171,-21.631111],[-57.936394,-21.641945],[-57.931396,-21.651112],[-57.921394,-21.662224],[-57.935669,-21.771946],[-57.963341,-21.972225],[-57.981949,-22.017223],[-57.986115,-22.034168],[-57.987228,-22.060837],[-57.985107,-22.091827],[-57.931396,-22.116669],[-57.926392,-22.118893],[-57.898056,-22.127502],[-57.886391,-22.130558],[-57.827507,-22.145],[-57.822227,-22.143059],[-57.791672,-22.129169],[-57.767784,-22.113056],[-57.640007,-22.121113],[-57.617783,-22.168892],[-57.614723,-22.173058],[-57.610283,-22.175835],[-57.595001,-22.182224],[-57.378059,-22.217503],[-57.371117,-22.218056],[-57.331947,-22.218056],[-57.250557,-22.214169],[-57.243896,-22.213612],[-57.231949,-22.211113],[-57.197784,-22.207226],[-57.153336,-22.203613],[-56.988892,-22.23278],[-56.877502,-22.27417],[-56.808334,-22.264725],[-56.769531,-22.248043],[-56.758057,-22.24139],[-56.70723,-22.215],[-56.701118,-22.214447],[-56.69445,-22.216114],[-56.689728,-22.218891],[-56.686394,-22.222778],[-56.676949,-22.234726],[-56.673889,-22.238613],[-56.634171,-22.251945],[-56.573891,-22.189445],[-56.560837,-22.173058],[-56.551117,-22.160278],[-56.546669,-22.147503],[-56.54528,-22.141392],[-56.529449,-22.119446],[-56.522781,-22.111389],[-56.508339,-22.09639],[-56.495285,-22.087502],[-56.488762,-22.084675],[-56.456947,-22.075836],[-56.403061,-22.065556],[-56.396393,-22.066948],[-56.393333,-22.071114],[-56.371674,-22.1175],[-56.370003,-22.134724],[-56.367783,-22.145557],[-56.360558,-22.159168],[-56.357506,-22.163059],[-56.329445,-22.186668],[-56.309174,-22.203335],[-56.205833,-22.273613],[-56.200005,-22.275837],[-56.171669,-22.283058],[-56.164726,-22.284725],[-56.097229,-22.294445],[-56.090279,-22.294445],[-56.084724,-22.293056],[-56.070007,-22.286667],[-56.049728,-22.278614],[-56.043617,-22.278057],[-55.988892,-22.273335],[-55.849724,-22.288891],[-55.74556,-22.395279],[-55.743057,-22.399723],[-55.740837,-22.410557],[-55.741669,-22.429726],[-55.740837,-22.453613],[-55.739723,-22.477779],[-55.734726,-22.523335],[-55.733894,-22.529167],[-55.730835,-22.539448],[-55.723618,-22.553059],[-55.712784,-22.570004],[-55.706116,-22.577778],[-55.689728,-22.591114],[-55.671951,-22.603336],[-55.656395,-22.611115],[-55.638062,-22.616947],[-55.631393,-22.618336],[-55.620003,-22.62278],[-55.615005,-22.625557],[-55.611671,-22.629448],[-55.609451,-22.633892],[-55.60778,-22.645279],[-55.606674,-22.718891],[-55.608063,-22.731945],[-55.612785,-22.742779],[-55.623337,-22.762501],[-55.631668,-22.776947],[-55.635284,-22.780556],[-55.641113,-22.789722],[-55.645836,-22.800556],[-55.648895,-22.81139],[-55.649445,-22.823891],[-55.646118,-22.852501],[-55.64389,-22.863335],[-55.606392,-23.020279],[-55.583893,-23.085281],[-55.549171,-23.137501],[-55.546394,-23.288059],[-55.550835,-23.307224],[-55.551117,-23.313614],[-55.550285,-23.319168],[-55.548889,-23.324448],[-55.543892,-23.333336],[-55.54084,-23.337223],[-55.502426,-23.379723],[-55.53334,-23.451115],[-55.535278,-23.457226],[-55.536118,-23.464169],[-55.521667,-23.602779],[-55.520004,-23.60778],[-55.511116,-23.618893],[-55.499451,-23.629448],[-55.489449,-23.635002],[-55.48056,-23.641113],[-55.473061,-23.648335],[-55.463341,-23.660004],[-55.457779,-23.668613],[-55.448059,-23.686668],[-55.441673,-23.700836],[-55.439445,-23.71167],[-55.43306,-23.750557],[-55.42778,-23.80278],[-55.420563,-23.878334],[-55.420837,-23.915836],[-55.419724,-23.933613],[-55.417503,-23.944447],[-55.414169,-23.951946],[-55.411667,-23.95639],[-55.405006,-23.964447],[-55.396667,-23.971111],[-55.376671,-23.981945],[-55.365837,-23.986946],[-55.354172,-23.991112],[-55.340836,-23.994167],[-55.20417,-24.018333],[-55.188614,-24.020279],[-55.175003,-24.020557],[-55.150284,-24.016392],[-55.031395,-23.994446],[-54.932228,-23.968613],[-54.917229,-23.961945],[-54.908615,-23.955833],[-54.905006,-23.952225],[-54.898338,-23.94389],[-54.886391,-23.925556],[-54.882782,-23.921669],[-54.878334,-23.918613],[-54.633339,-23.805279],[-54.627785,-23.80389],[-54.620834,-23.805279],[-54.539452,-23.847504],[-54.407227,-23.916668],[-54.288612,-24.020279],[-54.243896,-24.053608],[-54.262779,-24.061111],[-54.27639,-24.070278],[-54.288612,-24.080002],[-54.300003,-24.090836],[-54.322502,-24.113335],[-54.32917,-24.12167],[-54.33667,-24.137222],[-54.337784,-24.14389],[-54.336113,-24.155556],[-54.319168,-24.237225],[-54.314171,-24.246113],[-54.304726,-24.255558],[-54.30056,-24.258892],[-54.287224,-24.268333],[-54.273056,-24.276947],[-54.266396,-24.284725],[-54.263893,-24.289448],[-54.260834,-24.299446],[-54.249451,-24.341667],[-54.248894,-24.353615],[-54.249725,-24.359447],[-54.271667,-24.406113],[-54.27417,-24.411392],[-54.277229,-24.416115],[-54.280838,-24.419724],[-54.293617,-24.42889],[-54.311111,-24.448612],[-54.313896,-24.452503],[-54.321114,-24.464447],[-54.325562,-24.475002],[-54.33139,-24.492779],[-54.335007,-24.512779],[-54.333618,-24.52417],[-54.328613,-24.539448],[-54.321396,-24.553059],[-54.318062,-24.563335],[-54.311668,-24.59639],[-54.311951,-24.609169],[-54.313896,-24.62167],[-54.317223,-24.633892],[-54.325005,-24.661945],[-54.330559,-24.679449]]]}}]}'; 
    }  
 
} 
 
