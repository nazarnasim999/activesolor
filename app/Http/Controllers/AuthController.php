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





       $basic = new Basicinfo;

       $basic->fill($request->all());
       $basic->user_id = auth()->user()->id;







       $deal = new Dealtype;
       $deal->fill($request->all());
       $deal->user_id = auth()->user()->id;




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
        $yearly_production * 0.64806,
        $yearly_production * 0.785053792,
        $yearly_production * 1.07114734,
        $yearly_production * 1.13546141,
        $yearly_production * 1.37978349,
        $yearly_production * 1.42329502,
        $yearly_production * 1.40568593,
        $yearly_production * 1.34389375,
        $yearly_production * 1.05070765,
        $yearly_production * 0.764052789,
        $yearly_production * 0.552649515,
        $yearly_production * 0.440487804,
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




    return view('presentation', ['basic' => $basic, 'deal' => $deal, 'history' => $history, 'month' => $month,  'monthlyData' => $monthlyData,
    'productionData' => $productionData,

'finalData' => $finalData]);
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
