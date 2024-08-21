<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Basicinfo;
use App\Models\Dealtype;
use App\Models\Historicinformation;
use App\Models\Monthlypayment;
use App\Models\Oliver;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }


    public function signup(Request $request)
    {

        // dd($request->input('age'));

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',



        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),

            'password' => bcrypt($request->input('password')),
        ]);


        $user->save();


       return view('auth.login');
    }




    public function login(Request $request){



        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            // $user = Auth::user();

            // $data = User::with('alarm', 'survey')->where('id', $user->id)->first();


            return view('welcome');

            // return response()->json(['message' => 'successful' , 'data' => $data]);
        }
        else{

            return back()->with('error', 'Invalid login credentials');
        }

    }



    public function store(Request $request){

        // dd($request->all());

        $validated = $request->validate([
            'installer' => 'required|string',
            'state' => 'required|string',
            'providers' => 'required|string',
            'average' => 'required|numeric',
            'packeage' => 'required|numeric',
            'size' => 'required|numeric',
            'production' => 'required|numeric',
            'january' => 'required|numeric',
            'february' => 'required|numeric',
            'march' => 'required|numeric',
            'april' => 'required|numeric',
            'may' => 'required|numeric',
            'june' => 'required|numeric',
            'july' => 'required|numeric',
            'august' => 'required|numeric',
            'september' => 'required|numeric',
            'october' => 'required|numeric',
            'november' => 'required|numeric',
            'december' => 'required|numeric',
            'yearly_consumption' => 'required|numeric',
            'yearly_production' => 'required|numeric',
            'offset' => 'required|string',
            'loan' => 'required|string',
            'lender' => 'required|string',
            'escalator' => 'nullable|numeric',
            'ppw' => 'nullable|numeric',
            'loan_term' => 'required|numeric',
            'apr' => 'required|numeric',
            'cash' => 'required|numeric',
            'solar' => 'required|numeric',
            'system_cost' => 'required|numeric',
            'rebate' => 'required|numeric',
            'state_rebate' => 'required|numeric',
            'federal_tax' => 'required|numeric',
            'state_tax' => 'required|numeric',
            'total_tax' => 'required|numeric',
            'total_finance' => 'required|numeric',
            'net_cost' => 'required|numeric',
            'Reamorization' => 'required|numeric',
            'basic_service_charge' => 'required|numeric',
            'keep_tax_credit' => 'required|numeric',
            'allocate_tax_credit' => 'required|numeric',
        ]);





       $basic = new Basicinfo;

       $basic->fill($request->all());
       $basic->user_id = auth()->user()->id;







       $deal = new Dealtype;
       $deal->fill($request->all());
       $deal->user_id = auth()->user()->id;
       $forms1 = $request->yearly_consumption / 12;
       $deal->averageutility = $request->average / $forms1;
       $forms2 = $request->yearly_production * $request->ppw;
       $deal->ppamonth = $forms2 / 12;
       $deal->totalbill = $request->packeage + $deal->ppamonth;




       $history = new Historicinformation;
       $history->fill($request->all());
       $history->user_id = auth()->user()->id;

       $month = new Monthlypayment;
       $month->fill($request->all());
       $month->user_id = auth()->user()->id;


       $month->save();
       $basic->save();
       $deal->save();
       $history->save();


    //    return view('presentation' ,['basic' => $basic, 'deal' => $deal, 'history' => $history , 'month' => $month]);


    return response()->json([
        'success' => true,
        'basic_id' => $basic->id,
        'deal_id' => $deal->id,
        'history_id' => $history->id,
        'month_id' => $month->id
    ]);












    }


    public function presentation($basicId, $dealId, $historyId, $monthId)
{

    $basic = Basicinfo::find($basicId);
    $deal = Dealtype::find($dealId);
    $history = Historicinformation::find($historyId);
    $month = Monthlypayment::find($monthId);

    $yearly_production = $history->yearly_production;
    $systems = $basic->production;
    $systemsfinal = $systems/ 12;



    $ppamonth1 = $basic->average;
    $f125 = $ppamonth1 * 12;

    $first = $ppamonth1 * 1.05;
    $f126 = $first * 12;
    $second = $first * 1.05;
    $f127 = $second * 12;
    $third = $second * 1.05;
    $f128 = $third * 12;

    $fourth = $third * 1.05;
    $f129 = $fourth * 12;

    $five = $fourth * 1.05;

    $f130 = $five * 12;

    $six = $five * 1.05;
    $f131 = $six * 12;

    $seven = $six * 1.05;

    $f132 = $seven * 12;

    $eight = $seven * 1.05;
    $f133 = $eight * 12;

    $nine = $eight * 1.05;



    $f134 = $nine * 12;


    $tenyear = $nine * 12;




    $ten = $nine * 1.05;
    $f135 = $ten * 12;

    $eleven = $ten * 1.05;

    $f136 = $eleven * 12;

    $twe = $eleven * 1.05;
    $f137 = $twe * 12;

    $thri = $twe * 1.05;

    $f138 = $thri * 12;

    $forthteen = $thri * 1.05;
    $f139 = $forthteen * 12;


    $fivteen = $forthteen * 1.05;
    $f140 = $fivteen * 12;

    $sixteen = $fivteen * 1.05;

    $f141 = $sixteen * 12;

    $seventeen = $sixteen * 1.05;
    $f142 = $seventeen * 12;

    $eightteen = $seventeen * 1.05;
    $f143 = $eightteen * 12;

    $nineteen = $eightteen * 1.05;

    $f144 = $nineteen * 12;



    $tweentyyear = $nineteen * 12;

    // $f144 = $tweentyyear * 12;




    $tweenty = $nineteen * 1.05;
    $f145 = $tweenty * 12;

    $tweetyone = $tweenty * 1.05;
    $f146 = $tweetyone * 12;

    $tweetysecond = $tweetyone * 1.05;
    $f147 = $tweetysecond * 12;

    $tweetythird = $tweetysecond * 1.05;
    $f148 = $tweetythird * 12;

    $tweetyfour = $tweetythird * 1.05;



    $f149 = $tweetyfour * 12;

    $f150 = $f125 + $f126 + $f127 + $f128 + $f129 + $f130 + $f131 + $f132 + $f133 + $f134 + $f135 + $f136 + $f137 + $f138 +
    $f139 + $f140 + $f141 + $f142 + $f143 + $f144 + $f145 + $f146 + $f147 + $f148 + $f149;

    $j150 =  54731;

    $tweentyfive = $f150 - $j150;























    $monthlyData = [
        $history->january,
        $history->february,
        $history->march,
        $history->april,
        $history->may,
        $history->june,
        $history->july,
        $history->august,
        $history->september,
        $history->octobar,
        $history->november,
        $history->december
    ];




    $productionData = [
        $systemsfinal * 0.64806,
        $systemsfinal * 0.785053792,
        $systemsfinal * 1.07114734,
        $systemsfinal * 1.13546141,
        $systemsfinal * 1.37978349,
        $systemsfinal * 1.42329502,
        $systemsfinal * 1.40568593,
        $systemsfinal * 1.34389375,
        $systemsfinal * 1.05070765,
        $systemsfinal * 0.764052789,
        $systemsfinal * 0.552649515,
        $systemsfinal * 0.440487804,
    ];



    $h69 = $history->yearly_consumption  / 12;
    $h69real = $basic->average /$h69;
    $utility = $h69real * $history->yearly_consumption;

    $netproduction = 0 *  $history->yearly_production;
    $netproductionreal = $history->yearly_production - $netproduction;
    $excesskwh = max(0, $history->yearly_consumption - $netproductionreal);
    $excesscost = $excesskwh * $h69real;
    $netutility = $utility - $basic->packeage;
    $calculate = -$deal->net_cost +- $excesscost;
    $final = $calculate + $netutility;

    // dd($final);




    $h69real2 = $h69real * 1.05;
    $utility2 = $h69real2 *  $history->yearly_consumption;
    $netproduction2 = 0.005 *  $history->yearly_production;
    $netproductionreal2 = $history->yearly_production - $netproduction2;
    $bscharges = $basic->packeage * 1.05;
    $excesskwh2 = max(0, $history->yearly_consumption - $netproductionreal2);
    $excesscost2 = $excesskwh2 * $h69real2;
    $netutility2 = $utility2 - $bscharges;
    $last = $final -  $excesscost2;
    $final2 = $last + $netutility2;


    $h69real3 = $h69real2 * 1.05;
    $utility3 = $h69real3 *  $history->yearly_consumption;
    $netproduction3 = 1 *  $history->yearly_production;
    $netproductionreal3 = $history->yearly_production - $netproduction3;
    $bscharges3 = $bscharges * 1.025;
    $excesskwh3 = max(0, $history->yearly_consumption - $netproductionreal3);
    $excesscost3 = $excesskwh3 * $h69real3;
    $netutility3 = $utility3 - $bscharges;
    $last3 = $final2 -  $excesscost3;
    $final3 = $last3 + $netutility3;


    $h69real4 = $h69real3 * 1.05;
    $utility4 = $h69real4 *  $history->yearly_consumption;
    $netproduction4 = 0.015 *  $history->yearly_production;
    $netproductionreal4 = $history->yearly_production - $netproduction4;
    $bscharges4 = $bscharges3 * 1.025;
    $excesskwh4 = max(0, $history->yearly_consumption - $netproductionreal4);
    $excesscost4 = $excesskwh4 * $h69real4;
    $netutility4 = $utility4 - $bscharges4;
    $last4 = $final3 -  $excesscost4;
    $final4 = $last4 + $netutility4;



    $h69real5 = $h69real4 * 1.05;
    $utility5 = $h69real5 *  $history->yearly_consumption;
    $netproduction5 = 0.02 *  $history->yearly_production;
    $netproductionreal5 = $history->yearly_production - $netproduction5;
    $bscharges5 = $bscharges4 * 1.025;
    $excesskwh5 = max(0, $history->yearly_consumption - $netproductionreal5);
    $excesscost5 = $excesskwh5 * $h69real5;
    $netutility5 = $utility5 - $bscharges5;
    $last5 = $final4 -  $excesscost5;
    $final5 = $last5 + $netutility5;


    $h69real6 = $h69real5 * 1.05;
    $utility6 = $h69real6 *  $history->yearly_consumption;
    $netproduction6 = 0.025 *  $history->yearly_production;
    $netproductionreal6 = $history->yearly_production - $netproduction6;
    $bscharges6 = $bscharges5 * 1.025;
    $excesskwh6 = max(0, $history->yearly_consumption - $netproductionreal6);
    $excesscost6 = $excesskwh6 * $h69real6;
    $netutility6 = $utility6 - $bscharges6;
    $last6 = $final5 -  $excesscost6;
    $final6 = $last6 + $netutility6;


    $h69real7 = $h69real6 * 1.05;
    $utility7 = $h69real7 *  $history->yearly_consumption;
    $netproduction7 = 0.03 *  $history->yearly_production;
    $netproductionreal7 = $history->yearly_production - $netproduction7;
    $bscharges7 = $bscharges6 * 1.025;
    $excesskwh7 = max(0, $history->yearly_consumption - $netproductionreal7);
    $excesscost7 = $excesskwh7 * $h69real7;
    $netutility7 = $utility7 - $bscharges7;
    $last7 = $final6 -  $excesscost7;
    $final7 = $last7 + $netutility7;


    $h69real8 = $h69real7 * 1.05;
    $utility8 = $h69real8 *  $history->yearly_consumption;
    $netproduction8= 0.035 *  $history->yearly_production;
    $netproductionreal8 = $history->yearly_production - $netproduction8;
    $bscharges8 = $bscharges7 * 1.025;
    $excesskwh8 = max(0, $history->yearly_consumption - $netproductionreal8);
    $excesscost8 = $excesskwh8 * $h69real8;
    $netutility8 = $utility8 - $bscharges8;
    $last8 = $final7 -  $excesscost8;
    $final8 = $last8 + $netutility8;



    $h69real9 = $h69real8 * 1.05;
    $utility9 = $h69real9 *  $history->yearly_consumption;
    $netproduction9= 0.04 *  $history->yearly_production;
    $netproductionreal9 = $history->yearly_production - $netproduction9;
    $bscharges9 = $bscharges8 * 1.025;
    $excesskwh9 = max(0, $history->yearly_consumption - $netproductionreal9);
    $excesscost9 = $excesskwh9 * $h69real9;
    $netutility9 = $utility9 - $bscharges9;
    $last9 = $final8 -  $excesscost9;
    $final9 = $last9 + $netutility9;



    $h69real10 = $h69real9 * 1.05;
    $utility10 = $h69real10 *  $history->yearly_consumption;
    $netproduction10 = 0.045 *  $history->yearly_production;
    $netproductionreal10 = $history->yearly_production - $netproduction10;
    $bscharges10 = $bscharges9 * 1.025;
    $excesskwh10 = max(0, $history->yearly_consumption - $netproductionreal10);
    $excesscost10 = $excesskwh10 * $h69real10;
    $netutility10 = $utility10 - $bscharges10;
    $last10 = $final9 -  $excesscost10;
    $final10 = $last10 + $netutility10;


    $h69real11 = $h69real10 * 1.05;
    $utility11 = $h69real11 *  $history->yearly_consumption;
    $netproduction11 = 0.05 *  $history->yearly_production;
    $netproductionreal11 = $history->yearly_production - $netproduction11;
    $bscharges11 = $bscharges10 * 1.025;
    $excesskwh11 = max(0, $history->yearly_consumption - $netproductionreal11);
    $excesscost11 = $excesskwh11 * $h69real11;
    $netutility11 = $utility11 - $bscharges11;
    $last11 = $final10 -  $excesscost11;
    $final11 = $last11 + $netutility11;


    $h69real12 = $h69real11 * 1.05;
    $utility12 = $h69real12 *  $history->yearly_consumption;
    $netproduction12 = 0.055 *  $history->yearly_production;
    $netproductionreal12 = $history->yearly_production - $netproduction12;
    $bscharges12 = $bscharges11 * 1.025;
    $excesskwh12 = max(0, $history->yearly_consumption - $netproductionreal12);
    $excesscost12 = $excesskwh12 * $h69real12;
    $netutility12 = $utility12 - $bscharges12;
    $last12 = $final11 -  $excesscost12;
    $final12 = $last12 + $netutility12;


    $h69real13 = $h69real12 * 1.05;
    $utility13 = $h69real13 *  $history->yearly_consumption;
    $netproduction13 = 0.06 *  $history->yearly_production;
    $netproductionreal13 = $history->yearly_production - $netproduction13;
    $bscharges13 = $bscharges12 * 1.025;
    $excesskwh13 = max(0, $history->yearly_consumption - $netproductionreal13);
    $excesscost13 = $excesskwh13 * $h69real13;
    $netutility13 = $utility13 - $bscharges13;
    $last13 = $final12 -  $excesscost13;
    $final13 = $last13 + $netutility13;



    $h69real14 = $h69real13 * 1.05;
    $utility14 = $h69real14 *  $history->yearly_consumption;
    $netproduction14 = 0.065 *  $history->yearly_production;
    $netproductionreal14 = $history->yearly_production - $netproduction14;
    $bscharges14 = $bscharges13 * 1.025;
    $excesskwh14 = max(0, $history->yearly_consumption - $netproductionreal14);
    $excesscost14 = $excesskwh14 * $h69real14;
    $netutility14 = $utility14 - $bscharges14;
    $last14 = $final13 -  $excesscost14;
    $final14 = $last14 + $netutility14;




    $h69real15 = $h69real14 * 1.05;
    $utility15 = $h69real15 *  $history->yearly_consumption;
    $netproduction15 = 0.07 *  $history->yearly_production;
    $netproductionreal15 = $history->yearly_production - $netproduction15;
    $bscharges15 = $bscharges14 * 1.025;
    $excesskwh15 = max(0, $history->yearly_consumption - $netproductionreal15);
    $excesscost15 = $excesskwh15 * $h69real15;
    $netutility15 = $utility15 - $bscharges15;
    $last15 = $final14 -  $excesscost15;
    $final15 = $last15 + $netutility15;



    $h69real16 = $h69real15 * 1.05;
    $utility16 = $h69real16 *  $history->yearly_consumption;
    $netproduction16 = 0.075 *  $history->yearly_production;
    $netproductionreal16 = $history->yearly_production - $netproduction16;
    $bscharges16 = $bscharges15 * 1.025;
    $excesskwh16 = max(0, $history->yearly_consumption - $netproductionreal16);
    $excesscost16 = $excesskwh16 * $h69real16;
    $netutility16 = $utility16 - $bscharges16;
    $last16 = $final15 -  $excesscost16;
    $final16 = $last16 + $netutility16;


    $h69real17 = $h69real16 * 1.05;
    $utility17 = $h69real17 *  $history->yearly_consumption;
    $netproduction17 = 0.08 *  $history->yearly_production;
    $netproductionreal17 = $history->yearly_production - $netproduction17;
    $bscharges17 = $bscharges16 * 1.025;
    $excesskwh17 = max(0, $history->yearly_consumption - $netproductionreal17);
    $excesscost17 = $excesskwh17 * $h69real17;
    $netutility17 = $utility17 - $bscharges17;
    $last17 = $final16 -  $excesscost17;
    $final17 = $last17 + $netutility17;



    $h69real18 = $h69real17 * 1.05;
    $utility18 = $h69real18 *  $history->yearly_consumption;
    $netproduction18 = 0.085 *  $history->yearly_production;
    $netproductionreal18 = $history->yearly_production - $netproduction18;
    $bscharges18 = $bscharges17 * 1.025;
    $excesskwh18 = max(0, $history->yearly_consumption - $netproductionreal18);
    $excesscost18 = $excesskwh18 * $h69real18;
    $netutility18 = $utility18 - $bscharges18;
    $last18 = $final17 -  $excesscost18;
    $final18 = $last18 + $netutility18;



    $h69real19 = $h69real18 * 1.05;
    $utility19 = $h69real19 *  $history->yearly_consumption;
    $netproduction19 = 0.09 *  $history->yearly_production;
    $netproductionreal19 = $history->yearly_production - $netproduction19;
    $bscharges19 = $bscharges18 * 1.025;
    $excesskwh19 = max(0, $history->yearly_consumption - $netproductionreal19);
    $excesscost19 = $excesskwh19 * $h69real19;
    $netutility19 = $utility19 - $bscharges19;
    $last19 = $final18 -  $excesscost19;
    $final19 = $last19 + $netutility19;


    $h69real20 = $h69real19 * 1.05;
    $utility20 = $h69real20 *  $history->yearly_consumption;
    $netproduction20 = 0.095 *  $history->yearly_production;
    $netproductionreal20 = $history->yearly_production - $netproduction20;
    $bscharges20 = $bscharges19 * 1.025;
    $excesskwh20 = max(0, $history->yearly_consumption - $netproductionreal20);
    $excesscost20 = $excesskwh20 * $h69real20;
    $netutility20 = $utility20 - $bscharges20;
    $last20 = $final19 -  $excesscost20;
    $final20 = $last20 + $netutility20;



    $h69real21 = $h69real20 * 1.05;
    $utility21 = $h69real21 *  $history->yearly_consumption;
    $netproduction21 = 0.10 *  $history->yearly_production;
    $netproductionreal21 = $history->yearly_production - $netproduction21;
    $bscharges21 = $bscharges20 * 1.025;
    $excesskwh21 = max(0, $history->yearly_consumption - $netproductionreal21);
    $excesscost21 = $excesskwh21 * $h69real21;
    $netutility21 = $utility21 - $bscharges21;
    $last21 = $final20 -  $excesscost21;
    $final21 = $last21 + $netutility21;



    $h69real22 = $h69real21 * 1.05;
    $utility22 = $h69real22 *  $history->yearly_consumption;
    $netproduction22 = 0.105 *  $history->yearly_production;
    $netproductionreal22 = $history->yearly_production - $netproduction22;
    $bscharges22 = $bscharges21 * 1.025;
    $excesskwh22 = max(0, $history->yearly_consumption - $netproductionreal22);
    $excesscost22 = $excesskwh22 * $h69real22;
    $netutility22 = $utility22 - $bscharges22;
    $last22 = $final21 -  $excesscost22;
    $final22 = $last22 + $netutility22;


    $h69real23 = $h69real22 * 1.05;
    $utility23 = $h69real23 *  $history->yearly_consumption;
    $netproduction23 = 0.11 *  $history->yearly_production;
    $netproductionreal23 = $history->yearly_production - $netproduction23;
    $bscharges23 = $bscharges22 * 1.025;
    $excesskwh23 = max(0, $history->yearly_consumption - $netproductionreal23);
    $excesscost23 = $excesskwh23 * $h69real23;
    $netutility23 = $utility23 - $bscharges23;
    $last23 = $final22 -  $excesscost23;
    $final23 = $last23 + $netutility23;


    $h69real24 = $h69real23 * 1.05;
    $utility24 = $h69real24 *  $history->yearly_consumption;
    $netproduction24 = 0.115 *  $history->yearly_production;
    $netproductionreal24 = $history->yearly_production - $netproduction24;
    $bscharges24 = $bscharges23 * 1.025;
    $excesskwh24 = max(0, $history->yearly_consumption - $netproductionreal24);
    $excesscost24 = $excesskwh24 * $h69real24;
    $netutility24 = $utility24 - $bscharges24;
    $last24 = $final23 -  $excesscost24;
    $final24 = $last24 + $netutility24;




    $h69real25 = $h69real24 * 1.05;
    $utility25 = $h69real25 *  $history->yearly_consumption;
    $netproduction25 = 0.12 *  $history->yearly_production;
    $netproductionreal25 = $history->yearly_production - $netproduction25;
    $bscharges25 = $bscharges24 * 1.025;
    $excesskwh25 = max(0, $history->yearly_consumption - $netproductionreal25);
    $excesscost25 = $excesskwh25 * $h69real25;
    $netutility25 = $utility25 - $bscharges25;
    $last25 = $final24 -  $excesscost25;
    $final25 = $last25 + $netutility25;


    $h69real26 = $h69real25 * 1.05;
    $utility26 = $h69real26 *  $history->yearly_consumption;
    $netproduction26 = 0.125 *  $history->yearly_production;
    $netproductionreal26 = $history->yearly_production - $netproduction26;
    $bscharges26 = $bscharges25 * 1.025;
    $excesskwh26 = max(0, $history->yearly_consumption - $netproductionreal26);
    $excesscost26 = $excesskwh26 * $h69real26;
    $netutility26 = $utility26 - $bscharges26;
    $last26 = $final25 -  $excesscost26;
    $final26 = $last26 + $netutility26;



    $h69real27 = $h69real26 * 1.05;
    $utility27 = $h69real27 *  $history->yearly_consumption;
    $netproduction27 = 0.13 *  $history->yearly_production;
    $netproductionreal27 = $history->yearly_production - $netproduction27;
    $bscharges27 = $bscharges26 * 1.025;
    $excesskwh27 = max(0, $history->yearly_consumption - $netproductionreal27);
    $excesscost27 = $excesskwh27 * $h69real27;
    $netutility27 = $utility27 - $bscharges27;
    $last27 = $final26 -  $excesscost27;
    $final27 = $last27 + $netutility27;


    $h69real28 = $h69real27 * 1.05;
    $utility28 = $h69real28 *  $history->yearly_consumption;
    $netproduction28 = 0.135 *  $history->yearly_production;
    $netproductionreal28 = $history->yearly_production - $netproduction28;
    $bscharges28 = $bscharges27 * 1.025;
    $excesskwh28 = max(0, $history->yearly_consumption - $netproductionreal28);
    $excesscost28 = $excesskwh28 * $h69real28;
    $netutility28 = $utility28 - $bscharges28;
    $last28 = $final27 -  $excesscost28;
    $final28 = $last28 + $netutility28;


    $h69real29 = $h69real28 * 1.05;
    $utility29 = $h69real29 *  $history->yearly_consumption;
    $netproduction29 = 0.14 *  $history->yearly_production;
    $netproductionreal29 = $history->yearly_production - $netproduction29;
    $bscharges29 = $bscharges28 * 1.025;
    $excesskwh29 = max(0, $history->yearly_consumption - $netproductionreal29);
    $excesscost29 = $excesskwh29 * $h69real29;
    $netutility29 = $utility29 - $bscharges29;
    $last29 = $final28 -  $excesscost29;
    $final29 = $last29 + $netutility29;




    $h69real30 = $h69real29 * 1.05;
    $utility30 = $h69real30 *  $history->yearly_consumption;
    $netproduction30 = 0.145 *  $history->yearly_production;
    $netproductionreal30 = $history->yearly_production - $netproduction30;
    $bscharges30 = $bscharges29 * 1.025;
    $excesskwh30 = max(0, $history->yearly_consumption - $netproductionreal30);
    $excesscost30 = $excesskwh30 * $h69real30;
    $netutility30 = $utility30 - $bscharges30;
    $last30 = $final29 -  $excesscost30;
    $final30 = $last30 + $netutility30;


    $allutility = $utility + $utility2 + $utility3 + $utility4 + $utility5 + $utility6 + $utility7 + $utility8 + $utility9 + $utility10 +
                  $utility11 + $utility12 + $utility13 + $utility14 + $utility15 + $utility16 + $utility17 + $utility18 + $utility19 + $utility20 +
                  $utility21 + $utility22 + $utility23 + $utility24 + $utility25 + $utility26 + $utility27 + $utility28 + $utility29 + $utility30;


    $finalData = [
        $final,
        $final2,
        $final3,
        $final4,
        $final5,
        $final6,
        $final7,
        $final8,
        $final9,
        $final10,
        $final11,
        $final12,
        $final13,
        $final14,
        $final15,
        $final16,
        $final17,
        $final18,
        $final19,
        $final20,
        $final21,
        $final22,
        $final23,
        $final24,
        $final25,
        $final26,
        $final27,
        $final28,
        $final29,
        $final30

    ];


    $saving1 = $h69;
    $saving2 = $saving1 * 1.05;
    $saving3 = $saving2 * 1.05;
    $saving4 = $saving3 * 1.05;
    $saving5 = $saving4 * 1.05;
    $saving6 = $saving5 * 1.05;
    $saving7 = $saving6 * 1.05;
    $saving8 = $saving7 * 1.05;
    $saving9 = $saving8 * 1.05;
    $saving10 = $saving9 * 1.05;
    $saving11 = $saving10 * 1.05;
    $saving12 = $saving11 * 1.05;
    $saving13 = $saving12 * 1.05;
    $saving14 = $saving13 * 1.05;
    $saving15 = $saving14 * 1.05;
    $saving16 = $saving15 * 1.05;
    $saving17 = $saving16 * 1.05;
    $saving18 = $saving17 * 1.05;
    $saving19 = $saving18 * 1.05;
    $saving20 = $saving19 * 1.05;
    $saving21 = $saving20 * 1.05;
    $saving22 = $saving21 * 1.05;
    $saving23 = $saving22 * 1.05;
    $saving24 = $saving23 * 1.05;
    $saving25 = $saving24 * 1.05;



    $consumptions = $history->yearly_consumption;
    $productions = $history->yearly_production;



    $util1 = $saving1 * $consumptions;
    $util2 = $saving2 * $consumptions;
    $util3 = $saving3 * $consumptions;
    $util4 = $saving4 * $consumptions;
    $util5 = $saving5 * $consumptions;
    $util6 = $saving6 * $consumptions;
    $util7 = $saving7 * $consumptions;
    $util8 = $saving8 * $consumptions;
    $util9 = $saving9 * $consumptions;
    $util10 = $saving10 * $consumptions;
    $util11 = $saving11 * $consumptions;
    $util12 = $saving12 * $consumptions;
    $util13 = $saving13 * $consumptions;
    $util14 = $saving14 * $consumptions;
    $util15 = $saving15 * $consumptions;
    $util16 = $saving16 * $consumptions;
    $util17 = $saving17 * $consumptions;
    $util18 = $saving18 * $consumptions;
    $util19 = $saving19 * $consumptions;
    $util20 = $saving20 * $consumptions;
    $util21 = $saving21 * $consumptions;
    $util22 = $saving22 * $consumptions;
    $util23 = $saving23 * $consumptions;
    $util24 = $saving24 * $consumptions;
    $util25 = $saving25 * $consumptions;


    $coststaying = $util1 + $util2 + $util3 + $util4 + $util5 + $util6 + $util7 + $util8 + $util9 + $util10 +
                   $util11 + $util12 + $util13 + $util14 + $util15 + $util16 + $util17 + $util18 + $util19 + $util20 +
                   $util21 + $util22 + $util23 + $util24 + $util25;



    $solarcost1 = $month->Reamorization;
    $solarcost2 = $month->allocate_tax_credit;


    $g1 = 0;
    $g2 = 0.005;
    $g3 = $g2 + $g2;
    $g4 = $g3 + 0.005;
    $g5 = $g4 + 0.005;
    $g6 = $g5 + 0.005;
    $g7 = $g6 + 0.005;
    $g8 = $g7 + 0.005;

    $g9 = $g8 + 0.005;
    $g10 = $g9 + 0.005;
    $g11 = $g10 + 0.005;
    $g12 = $g11 + 0.005;
    $g13 = $g12 + 0.005;
    $g14 = $g13 + 0.005;
    $g15 = $g14 + 0.005;
    $g16 = $g15 + 0.005;
    $g17 = $g16 + 0.005;
    $g18 = $g17 + 0.005;
    $g19 = $g18 + 0.005;
    $g20 = $g19 + 0.005;
    $g21 = $g20 + 0.005;
    $g22 = $g20 + 0.005;
    $g23 = $g22 + 0.005;
    $g24 = $g23 + 0.005;
    $g25 = $g24 + 0.005;



    $bodmas = $g1 * $productions;
    $bodmas2 = $g2 * $productions;
    $bodmas3 = $g3 * $productions;
    $bodmas4 = $g4 * $productions;
    $bodmas5 = $g5 * $productions;
    $bodmas6 = $g6 * $productions;
    $bodmas7 = $g7 * $productions;
    $bodmas8 = $g8 * $productions;
    $bodmas9 = $g9 * $productions;
    $bodmas10 = $g10 * $productions;
    $bodmas11 = $g11 * $productions;
    $bodmas12 = $g12 * $productions;
    $bodmas13 = $g13 * $productions;
    $bodmas14 = $g14 * $productions;
    $bodmas15 = $g15 * $productions;
    $bodmas16 = $g16 * $productions;
    $bodmas17 = $g17 * $productions;
    $bodmas18 = $g18 * $productions;
    $bodmas19 = $g19 * $productions;
    $bodmas20 = $g20 * $productions;
    $bodmas21 = $g21 * $productions;
    $bodmas22 = $g22 * $productions;
    $bodmas23 = $g23 * $productions;
    $bodmas24 = $g24 * $productions;
    $bodmas25 = $g25 * $productions;


    $h1 = $productions - $bodmas;
    $h2 = $productions - $bodmas2;
    $h3 = $productions - $bodmas3;
    $h4 = $productions - $bodmas4;
    $h5 = $productions - $bodmas5;
    $h6 = $productions - $bodmas6;
    $h7 = $productions - $bodmas7;
    $h8 = $productions - $bodmas8;
    $h9 = $productions - $bodmas9;
    $h10 = $productions - $bodmas10;
    $h11 = $productions - $bodmas11;
    $h12 = $productions - $bodmas12;
    $h13 = $productions - $bodmas13;
    $h14 = $productions - $bodmas14;
    $h15 = $productions - $bodmas15;
    $h16 = $productions - $bodmas16;
    $h17 = $productions - $bodmas17;
    $h18 = $productions - $bodmas18;
    $h19 = $productions - $bodmas19;
    $h20 = $productions - $bodmas20;
    $h21 = $productions - $bodmas21;
    $h22 = $productions - $bodmas22;
    $h23 = $productions - $bodmas23;
    $h24 = $productions - $bodmas24;
    $h25 = $productions - $bodmas25;



    $j1 = max(0, $consumptions - $h1);
    $j2 = max(0, $consumptions - $h2);
    $j3 = max(0, $consumptions - $h3);
    $j4 = max(0, $consumptions - $h4);
    $j5 = max(0, $consumptions - $h5);
    $j6 = max(0, $consumptions - $h6);
    $j7 = max(0, $consumptions - $h7);
    $j8 = max(0, $consumptions - $h8);
    $j9 = max(0, $consumptions - $h9);
    $j10 = max(0, $consumptions - $h10);
    $j11 = max(0, $consumptions - $h11);
    $j12 = max(0, $consumptions - $h12);
    $j13 = max(0, $consumptions - $h13);
    $j14 = max(0, $consumptions - $h14);
    $j15 = max(0, $consumptions - $h15);
    $j16 = max(0, $consumptions - $h16);
    $j17 = max(0, $consumptions - $h17);
    $j18 = max(0, $consumptions - $h18);
    $j19 = max(0, $consumptions - $h19);
    $j20 = max(0, $consumptions - $h20);
    $j21 = max(0, $consumptions - $h21);
    $j22 = max(0, $consumptions - $h22);
    $j23 = max(0, $consumptions - $h23);
    $j24 = max(0, $consumptions - $h24);
    $j25 = max(0, $consumptions - $h25);


    $i1 = $basic->average * 12;
    $i2 = $i1 * 1.05;
    $i3 = $i2 * 1.025;
    $i4 = $i3 * 1.025;
    $i5 = $i4 * 1.025;
    $i6 = $i5 * 1.025;
    $i7 = $i6 * 1.025;
    $i8 = $i7 * 1.025;
    $i9 = $i8 * 1.025;
    $i10 = $i9 * 1.025;
    $i11 = $i10 * 1.025;
    $i12 = $i11 * 1.025;
    $i13 = $i12 * 1.025;
    $i14 = $i13 * 1.025;
    $i15 = $i14 * 1.025;
    $i16 = $i15 * 1.025;
    $i17 = $i16 * 1.025;
    $i18 = $i17 * 1.025;
    $i19 = $i18 * 1.025;
    $i20 = $i19 * 1.025;
    $i21 = $i20 * 1.025;
    $i22 = $i21 * 1.025;
    $i23 = $i22 * 1.025;
    $i24 = $i23 * 1.025;
    $i25 = $i24 * 1.025;


    $multi1 = $j1 * $saving1;
    $multi2 = $j2 * $saving2;
    $multi3 = $j3 * $saving3;
    $multi4 = $j4 * $saving4;
    $multi5 = $j5 * $saving5;
    $multi6 = $j6 * $saving6;
    $multi7 = $j7 * $saving7;
    $multi8 = $j8 * $saving8;
    $multi9 = $j9 * $saving9;
    $multi10 = $j10 * $saving10;
    $multi11 = $j11 * $saving11;
    $multi12 = $j12 * $saving12;
    $multi13 = $j13 * $saving13;
    $multi14 = $j14 * $saving14;
    $multi15 = $j15 * $saving15;
    $multi16 = $j16 * $saving16;
    $multi17 = $j17 * $saving17;
    $multi18 = $j18 * $saving18;
    $multi19 = $j19 * $saving19;
    $multi20 = $j20 * $saving20;
    $multi21 = $j21 * $saving21;
    $multi22 = $j22 * $saving22;
    $multi23 = $j23 * $saving23;
    $multi24 = $j24 * $saving24;
    $multi25 = $j25 * $saving25;


    $k1 = $multi1 + $i1;
    $k2 = $multi2 + $i2;
    $k3 = $multi3 + $i3;
    $k4 = $multi4 + $i4;
    $k5 = $multi5 + $i5;
    $k6 = $multi6 + $i6;
    $k7 = $multi7 + $i7;
    $k8 = $multi8 + $i8;
    $k9 = $multi9 + $i9;
    $k10 = $multi10 + $i10;
    $k11 = $multi11 + $i11;
    $k12 = $multi12 + $i12;
    $k13 = $multi13 + $i13;
    $k14 = $multi14 + $i14;
    $k15 = $multi15 + $i15;
    $k16 = $multi16 + $i16;
    $k17 = $multi17 + $i17;
    $k18 = $multi18 + $i18;
    $k19 = $multi19 + $i19;
    $k20 = $multi20 + $i20;
    $k21 = $multi21 + $i21;
    $k22 = $multi22 + $i22;
    $k23 = $multi23 + $i23;
    $k24 = $multi24 + $i24;
    $k25 = $multi25 + $i25;


    $solarcost1 = $month->Reamorization;
    $solarcost2 = $month->allocate_tax_credit;

    $m1 = $solarcost1 + $k1;
    $m2 = $solarcost2 + $k2;
    $m3 = $solarcost2 + $k3;
    $m4 = $solarcost2 + $k4;
    $m5 = $solarcost2 + $k5;
    $m6 = $solarcost2 + $k6;
    $m7 = $solarcost2 + $k7;
    $m8 = $solarcost2 + $k8;
    $m9 = $solarcost2 + $k9;
    $m10 = $solarcost2 + $k10;
    $m11 = $solarcost2 + $k11;
    $m12 = $solarcost2 + $k12;
    $m13 = $solarcost2 + $k13;
    $m14 = $solarcost2 + $k14;
    $m15 = $solarcost2 + $k15;
    $m16 = $solarcost2 + $k16;
    $m17 = $solarcost2 + $k17;
    $m18 = $solarcost2 + $k18;
    $m19 = $solarcost2 + $k19;
    $m20 = $solarcost2 + $k20;
    $m21 = $solarcost2 + $k21;
    $m22 = $solarcost2 + $k22;
    $m23 = $solarcost2 + $k23;
    $m24 = $solarcost2 + $k24;
    $m25 = $solarcost2 + $k25;


    $costsolar = $m1 + $m2 + $m3 + $m4 + $m5 + $m6 + $m7 + $m8 + $m9 + $m10 +
    $m11 + $m12 + $m13 + $m14 + $m15 + $m16 + $m17 + $m18 + $m19 + $m20 +
    $m21 + $m22 + $m23 + $m24 + $m25;






























    return view('presentation', ['basic' => $basic, 'deal' => $deal, 'history' => $history, 'month' => $month,  'monthlyData' => $monthlyData,
    'productionData' => $productionData,

'finalData' => $finalData, 'twinfiveyear' => $tweentyfive, 'tenyear' => $tenyear, 'twinyear' => $tweentyyear,
'billamount' => $f125, 'totalcostutility' => $f150 , 'totalcostsolar' => $j150 , 'allutility' => $allutility ,
'cashtenyear' => $nine, 'cashtwinyear' => $nineteen, 'coststaying' => $coststaying, 'costsolar' => $costsolar ]);
}



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    // public function presentation(){

    // }


    public function oliver(){

        $data = Oliver::get();

        return response()->json($data);

    }
}
