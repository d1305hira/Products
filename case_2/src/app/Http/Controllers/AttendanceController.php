<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Worktime;
use App\Models\Breaktime;

class AttendanceController extends Controller
{
    public function index(){
        $today = Carbon::today()->toDateString();
        $now = Carbon::now();

        $worktime = Worktime::where('user_id',auth()->id())
            ->where('date', $today)
            ->latest()
            ->first();

        $break = null;

        if($worktime) {
            $break = Breaktime::where('user_id',auth()->id())
                ->where('worktime_id',$worktime->id)
                ->whereNull('break_end')
                ->latest('break_start')
                ->first();
        }

        if (!$worktime) {
            $status = '勤務時間外';
        } elseif ($break){
            $status = '休憩中';
        }elseif ($worktime->start_time && !$worktime->end_time){
            $status = '勤務中';
        } else {
            $status = '勤務終了';
        }

        return view('top',compact('now','status'));
    }

    public function attendance(Request $request) {
        $today = Carbon::today()->toDateString();

        $attendance = Worktime::where('user_id',auth()->id())
            ->where('date', $today)
            ->latest()
            ->exists();

        if($attendance){
            return redirect()
                ->route('index')
                ->with('message','本日の勤務は既に終了しています');
        }

        Worktime::create([
            'user_id' => auth()->id(),
            'date' => $today,
            'start_time' => Carbon::now(),
        ]);

        return redirect()->route('index');    
    }

    public function break_bigin(Request $reauest) {
        $today = Carbon::today()->toDateString();

        $now = Carbon::now();

        $worktime = Worktime::where('user_id',auth()->id())
            ->whereDate('date',$today)
            ->whereNotNull('start_time')
            ->latest()
            ->first();

        if(!$worktime) {
            return redirect()->route('index')->with('message','勤務時間外');
        }

        $break = Breaktime::where('user_id',auth()->id())
            ->where('worktime_id',$worktime->id)
            ->whereNull('break_end')
            ->first();

        if($break) {
            return redirect()
            ->route('index')
            ->with('message','休憩中です');
        }

        Breaktime::create([
            'user_id' => auth()->id(),
            'worktime_id' => $worktime->id,
            'date' => $today,
            'break_start' => now(),
        ]);

        return redirect()
            ->route('index')
            ->with('message','休憩中');
    }

    public function break_end(Request $request) {
        $today = Carbon::today()->toDateString();

        $now = Carbon::now();

        $worktime = Worktime::where('user_id',auth()->id())
            ->whereDate('date',$today)
            ->whereNotNull('start_time')
            ->latest()
            ->first();

        if(!$worktime) {
            return redirect()->route('index')->with('message','勤務が開始されていません');
        }

        $break = Breaktime::where('user_id',auth()->id())
            ->where('worktime_id',$worktime->id)
            ->whereNull('break_end')
            ->latest('break_start')
            ->first();
        
        if (!$break) {
            return redirect()->route('index')->with('message','休憩中ではありません');
        }

        $break->update([
            'break_end'=>now(),
        ]);

        return redirect()->route('index')
            ->with('message','休憩終了');
    }

    public function attendance_end() {
        $today = Carbon::today()->toDateString();

        $worktime = Worktime::where('user_id',auth()->id())
            ->whereDate('date',$today)
            ->whereNotNull('start_time')
            ->latest()
            ->first();
        
        if (!$worktime) {
            return redirect()->route('index')->with('message','勤務中');
        }


        $worktime->update([
            'end_time' =>now(),
        ]);

        return redirect()->route('index');
    }


    public function req_ot() {
        
    }
        
}
