<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class StageAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function quiz($id){
        $items = [
            'item1',
            'item2',
            'item3',
            'item4',
            'item5',
            'item6',
            'item7',
            'item8',
            'item9',
            'item10',
        ];
        $stage = Stage::where('level', $id)->first();
        return view('admin.stage.quiz', compact('stage', 'items'));
    }

    public function index()
    {
        $stages = Stage::all()->sortBy('level');
        return view('admin.stage.index', compact('stages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quizs = [
            'quiz1',
            'quiz2',
            'quiz3',
            'quiz4',
            'quiz5',
            'quiz6',
            'quiz7',
            'quiz8',
            'quiz9',
            'quiz10',
        ];
        return view('admin.stage.create', compact('quizs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'level' => 'required|numeric',
            // 'jenis' => 'required',
            'cover' => 'image|file|max:10240',
            'item1' => 'required',
            'item2' => 'required',
            'item3' => 'required',
            'item4' => 'required',
            'item5' => 'required',
            'item6' => 'required',
            'item7' => 'required',
            'item8' => 'required',
            'item9' => 'required',
            'item10' => 'required',
            'gambar1' => 'required|image|file|max:10240',
            'gambar2' => 'required|image|file|max:10240',
            'gambar3' => 'required|image|file|max:10240',
            'gambar4' => 'required|image|file|max:10240',
            'gambar5' => 'required|image|file|max:10240',
            'gambar6' => 'image|file|max:10240',
            'gambar7' => 'image|file|max:10240',
            'gambar8' => 'image|file|max:10240',
            'gambar9' => 'image|file|max:10240',
            'gambar10' => 'image|file|max:10240',
            'gambar1_back' => 'required|image|file|max:10240',
            'gambar2_back' => 'required|image|file|max:10240',
            'gambar3_back' => 'required|image|file|max:10240',
            'gambar4_back' => 'required|image|file|max:10240',
            'gambar5_back' => 'image|file|max:10240',
            'gambar6_back' => 'image|file|max:10240',
            'gambar7_back' => 'image|file|max:10240',
            'gambar8_back' => 'image|file|max:10240',
            'gambar9_back' => 'image|file|max:10240',
            'gambar10_back' => 'image|file|max:10240',
        ]);
        if($request->file('image')){
            $file_name = $request->file('image')->getClientOriginalName();
            $request->file('image')->move('image', $file_name);
            $validateData['cover'] = $file_name;
        }
        if($request->file('gambar1')){
            $file_name = $request->file('gambar1')->getClientOriginalName();
            $request->file('gambar1')->move('image', $file_name);
            $validateData['gambar1'] = $file_name;
        }
        if($request->file('gambar2')){
            $file_name = $request->file('gambar2')->getClientOriginalName();
            $request->file('gambar2')->move('image', $file_name);
            $validateData['gambar2'] = $file_name;
        }
        if($request->file('gambar3')){
            $file_name = $request->file('gambar3')->getClientOriginalName();
            $request->file('gambar3')->move('image', $file_name);
            $validateData['gambar3'] = $file_name;
        }
        if($request->file('gambar4')){
            $file_name = $request->file('gambar4')->getClientOriginalName();
            $request->file('gambar4')->move('image', $file_name);
            $validateData['gambar4'] = $file_name;
        }
        if($request->file('gambar5')){
            $file_name = $request->file('gambar5')->getClientOriginalName();
            $request->file('gambar5')->move('image', $file_name);
            $validateData['gambar5'] = $file_name;
        }
        if($request->file('gambar6')){
            $file_name = $request->file('gambar6')->getClientOriginalName();
            $request->file('gambar6')->move('image', $file_name);
            $validateData['gambar6'] = $file_name;
        }
        if($request->file('gambar7')){
            $file_name = $request->file('gambar7')->getClientOriginalName();
            $request->file('gambar7')->move('image', $file_name);
            $validateData['gambar7'] = $file_name;
        }
        if($request->file('gambar8')){
            $file_name = $request->file('gambar8')->getClientOriginalName();
            $request->file('gambar8')->move('image', $file_name);
            $validateData['gambar8'] = $file_name;
        }
        if($request->file('gambar9')){
            $file_name = $request->file('gambar9')->getClientOriginalName();
            $request->file('gambar9')->move('image', $file_name);
            $validateData['gambar9'] = $file_name;
        }
        if($request->file('gambar10')){
            $file_name = $request->file('gambar10')->getClientOriginalName();
            $request->file('gambar10')->move('image', $file_name);
            $validateData['gambar10'] = $file_name;
        }

        if($request->file('gambar1_back')){
            $file_name = $request->file('gambar1_back')->getClientOriginalName();
            $request->file('gambar1_back')->move('image', $file_name);
            $validateData['gambar1_back'] = $file_name;
        }
        if($request->file('gambar2_back')){
            $file_name = $request->file('gambar2_back')->getClientOriginalName();
            $request->file('gambar2_back')->move('image', $file_name);
            $validateData['gambar2_back'] = $file_name;
        }
        if($request->file('gambar3_back')){
            $file_name = $request->file('gambar3_back')->getClientOriginalName();
            $request->file('gambar3_back')->move('image', $file_name);
            $validateData['gambar3_back'] = $file_name;
        }
        if($request->file('gambar4_back')){
            $file_name = $request->file('gambar4_back')->getClientOriginalName();
            $request->file('gambar4_back')->move('image', $file_name);
            $validateData['gambar4_back'] = $file_name;
        }
        if($request->file('gambar5_back')){
            $file_name = $request->file('gambar5_back')->getClientOriginalName();
            $request->file('gambar5_back')->move('image', $file_name);
            $validateData['gambar5_back'] = $file_name;
        }
        if($request->file('gambar6_back')){
            $file_name = $request->file('gambar6_back')->getClientOriginalName();
            $request->file('gambar6_back')->move('image', $file_name);
            $validateData['gambar6_back'] = $file_name;
        }
        if($request->file('gambar7_back')){
            $file_name = $request->file('gambar7_back')->getClientOriginalName();
            $request->file('gambar7_back')->move('image', $file_name);
            $validateData['gambar7_back'] = $file_name;
        }
        if($request->file('gambar8_back')){
            $file_name = $request->file('gambar8_back')->getClientOriginalName();
            $request->file('gambar8_back')->move('image', $file_name);
            $validateData['gambar8_back'] = $file_name;
        }
        if($request->file('gambar9_back')){
            $file_name = $request->file('gambar9_back')->getClientOriginalName();
            $request->file('gambar9_back')->move('image', $file_name);
            $validateData['gambar9_back'] = $file_name;
        }
        if($request->file('gambar10_back')){
            $file_name = $request->file('gambar10_back')->getClientOriginalName();
            $request->file('gambar10_back')->move('image', $file_name);
            $validateData['gambar10_back'] = $file_name;
        }

        if($request->file('quiz1')){
            $file_name = $request->item1.'png';
            $request->file('quiz1')->move('image/quiz', $file_name);
        }
        if($request->file('quiz2')){
            $file_name = $request->item2.'png';
            $request->file('quiz2')->move('image/quiz', $file_name);
        }
        if($request->file('quiz3')){
            $file_name = $request->item3.'png';
            $request->file('quiz3')->move('image/quiz', $file_name);
        }
        if($request->file('quiz4')){
            $file_name = $request->item4.'png';
            $request->file('quiz4')->move('image/quiz', $file_name);
        }
        if($request->file('quiz5')){
            $file_name = $request->item5.'png';
            $request->file('quiz5')->move('image/quiz', $file_name);
        }
        if($request->file('quiz6')){
            $file_name = $request->item6.'png';
            $request->file('quiz6')->move('image/quiz', $file_name);
        }
        if($request->file('quiz7')){
            $file_name = $request->item7.'png';
            $request->file('quiz7')->move('image/quiz', $file_name);
        }
        if($request->file('quiz8')){
            $file_name = $request->item8.'png';
            $request->file('quiz8')->move('image/quiz', $file_name);
        }
        if($request->file('quiz9')){
            $file_name = $request->item9.'png';
            $request->file('quiz9')->move('image/quiz', $file_name);
        }
        if($request->file('quiz10')){
            $file_name = $request->item10.'png';
            $request->file('quiz10')->move('image/quiz', $file_name);
        }

        // dd($request);
        $validateData['level'] = $request->level;
        $validateData['jenis'] = $request->subjek;
        $validateData['item1'] = $request->item1;
        $validateData['item2'] = $request->item2;
        $validateData['item3'] = $request->item3;
        $validateData['item4'] = $request->item4;
        $validateData['item5'] = $request->item5;
        $validateData['item6'] = $request->item6;
        $validateData['item7'] = $request->item7;
        $validateData['item8'] = $request->item8;
        $validateData['item9'] = $request->item9;
        $validateData['item10'] = $request->item10;
        $validateData['id'] = $request->level;

        // dd($validateData);
        Stage::create($validateData);

        return redirect('admin/stage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stage $stage)
    {
        return view('admin.stage.show', compact('stage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stage $stage)
    {
        $gambars = [
            'gambar1',
            'gambar1_back',
            'gambar2',
            'gambar2_back',
            'gambar3',
            'gambar3_back',
            'gambar4',
            'gambar4_back',
            'gambar5',
            'gambar5_back',
            'gambar6',
            'gambar6_back',
            'gambar7',
            'gambar7_back',
            'gambar8',
            'gambar8_back',
            'gambar9',
            'gambar9_back',
            'gambar10',
            'gambar10_back',
        ];

        return view('admin.stage.update', compact('gambars', 'stage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stage $stage, $id)
    {
        $validateData = $request->validate([
            'gambar1' => 'image|file|max:10240',
            'gambar2' => 'image|file|max:10240',
            'gambar3' => 'image|file|max:10240',
            'gambar4' => 'image|file|max:10240',
            'gambar5' => 'image|file|max:10240',
            'gambar6' => 'image|file|max:10240',
            'gambar7' => 'image|file|max:10240',
            'gambar8' => 'image|file|max:10240',
            'gambar9' => 'image|file|max:10240',
            'gambar10' => 'image|file|max:10240',
            'gambar1_back' => 'image|file|max:10240',
            'gambar2_back' => 'image|file|max:10240',
            'gambar3_back' => 'image|file|max:10240',
            'gambar4_back' => 'image|file|max:10240',
            'gambar5_back' => 'image|file|max:10240',
            'gambar6_back' => 'image|file|max:10240',
            'gambar7_back' => 'image|file|max:10240',
            'gambar8_back' => 'image|file|max:10240',
            'gambar9_back' => 'image|file|max:10240',
            'gambar10_back' => 'image|file|max:10240',
        ]);
        $gambars = [
            'gambar1',
            'gambar1_back',
            'gambar2',
            'gambar2_back',
            'gambar3',
            'gambar3_back',
            'gambar4',
            'gambar4_back',
            'gambar5',
            'gambar5_back',
            'gambar6',
            'gambar6_back',
            'gambar7',
            'gambar7_back',
            'gambar8',
            'gambar8_back',
            'gambar9',
            'gambar9_back',
            'gambar10',
            'gambar10_back',
        ];
        $items = [
            'item1',
            'item2',
            'item3',
            'item4',
            'item5',
            'item6',
            'item7',
            'item8',
            'item9',
            'item10',
        ];
        foreach($gambars as $gambar){
            $old = 'old'.$gambar;
            if($request->file($gambar)){
                if($request->input($old)){
                    File::delete($request->input($old));
                }
                $file_name = $request->file($gambar)->getClientOriginalName();
                $request->file($gambar)->move('image', $file_name);
                $validateData[$gambar] = $file_name;
            } else {
                $validateData[$gambar] = $request->input($old);
            }
            
        }
        $stage = Stage::where('level', $id)->first();
        $validateData['id'] = $id;
        $validateData['level'] = $stage->level;
        $validateData['jenis'] = $stage->jenis;
        $validateData['cover'] = $stage->cover;
        foreach($items as $item){
            $validateData[$item] = $stage->$item;
        }
        Stage::where('level', $id)
        ->update($validateData);

        return redirect('admin/stage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stage $stage)
    {
        // $filePath = public_path('image/'.$stage->gambar1);
        // if(File::exists($filePath)){
        //     File::delete($filePath);
        // }
        // $filePathGambar = public_path('image/'.$stage->gambar1_back);
        // if(File::exists($filePathGambar)){
        //     File::delete($filePathGambar);
        // }
        // $filePath2 = public_path('image/'.$stage->gambar2);
        // if(File::exists($filePath2)){
        //     File::delete($filePath2);
        // }
        // $filePathGambar2 = public_path('image/'.$stage->gambar2_back);
        // if(File::exists($filePathGambar2)){
        //     File::delete($filePathGambar2);
        // }
        // $filePath3 = public_path('image/'.$stage->gambar3);
        // if(File::exists($filePath3)){
        //     File::delete($filePath3);
        // }
        // $filePathGambar3 = public_path('image/'.$stage->gambar3_back);
        // if(File::exists($filePathGambar3)){
        //     File::delete($filePathGambar3);
        // }
        $filesToDelete = [
            'image/' . $stage->cover,
            'image/' . $stage->gambar1,
            'image/' . $stage->gambar1_back,
            'image/' . $stage->gambar2,
            'image/' . $stage->gambar2_back,
            'image/' . $stage->gambar3,
            'image/' . $stage->gambar3_back,
            'image/' . $stage->gambar4,
            'image/' . $stage->gambar4_back,
            'image/' . $stage->gambar5,
            'image/' . $stage->gambar5_back,
            'image/' . $stage->gambar6,
            'image/' . $stage->gambar6_back,
            'image/' . $stage->gambar7,
            'image/' . $stage->gambar7_back,
            'image/' . $stage->gambar8,
            'image/' . $stage->gambar8_back,
            'image/' . $stage->gambar9,
            'image/' . $stage->gambar9_back,
            'image/' . $stage->gambar10,
            'image/' . $stage->gambar10_back,
            'image/quiz/'.$stage->item1.'.png',
            'image/quiz/'.$stage->item2.'.png',
            'image/quiz/'.$stage->item3.'.png',
            'image/quiz/'.$stage->item4.'.png',
            'image/quiz/'.$stage->item5.'.png',
            'image/quiz/'.$stage->item6.'.png',
            'image/quiz/'.$stage->item7.'.png',
            'image/quiz/'.$stage->item8.'.png',
            'image/quiz/'.$stage->item9.'.png',
            'image/quiz/'.$stage->item10.'.png',
        ];
        
        foreach ($filesToDelete as $filePath) {
            $fullPath = public_path($filePath);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }


        Stage::destroy($stage->id);
        return redirect('/admin/stage')->with('success', 'Data Berhasil Dihapus');
    }
}
