<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class RequestController extends Controller
{
    public function req_ot(Request $request) {
        $tab = $request->query('tab','tab1');

        $today = Carbon::today();
        $start = $today->copy()->startOfMonth();
        $end = $today->copy()->endOfMonth();
        $dates = [];

        for ($d= $start->copy(); $d->lte($end); $d->addDay()) {
            $dates[] = $d->format('m月d日');
        }

        return view ('req_ot',compact('dates','tab'));
    }

    public function req_ot_confirm() {
        return view('req_ot_confirm');
    }

    public function req_vac() {
        $today = Carbon::today();
        $start = $today->copy()->startOfMonth();
        $end = $today->copy()->endOfMonth();
        
        $dates = [];
        
        for($d=$start->copy(); $d->lte($end); $d->addDay()){
            $dates[]=$d->format('m年d日');
        }

        return view ('req_vac',compact('dates'));
    }

    public function req_correct() {
        return view ('req_correct');
    }
}
