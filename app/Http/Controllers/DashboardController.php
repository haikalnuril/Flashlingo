<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $stages = Stage::orderBy('level', 'ASC')->get();
        // dd($stage);
        return view('courses', compact('stages'));
    }

    public function show($id){
        $stage = Stage::where('level', $id)->first();
        return view('level1', compact('stage'));
    }

    public function quiz($id){
        $next = $id+1;
        $latest = Stage::all()->reverse()->first();
        $latest_id = $latest->level;
        $nextlatest = $latest_id +1;
        $stage = Stage::where('level', $id)->first();

        return view('quiz1', compact('stage', 'next', 'nextlatest'));
    }

    public function update_quiz(Request $request, $id){
        $next = $id+1;
        $user = Auth::user()->id;
        $level = $id;
        $hasil = $request->nilai;
        $latest = Stage::all()->reverse()->first();
        $latest_id = $latest->level;
        $nextlatest = $latest_id +1;
        // dd($hasil);
        Hasil::updateOrCreate([
            'user_id' => $user,
            'stage_id' => $level,
        ],
        [
            'user_id' => $user,
            'stage_id' => $level,
            'nilai' => $hasil
        ]);

        if($next == $nextlatest){
            return redirect('course');
        }
        return redirect('/course/level/'.$next);
    }
}
