<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Http\Requests\CvRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class CvController extends Controller
{
    public function show($id)
    {
        $files = Cv::latest()->get();

        return view('frontend.uploadcurriculum',compact('files'));
    }

    public function create()
    {
        //
    }

    public function store(CvRequest $request)
    {

        $mensaje = "archivo creado correctamente";
        $tipo = "success";

         //  script upload image

        $url = Cv::create([
            'user_id' => auth()->user()->id
        ]+$request->all());

        if ($request->file){

            $url->pdfurl = $request->file('pdfurl')->store('resumes','public');
        }

        $url->save();

        //save



        return redirect()->route('curriculum.show', auth()->user()->id);

    }


    public function destroy(Cv $cv)
    {
       $cv->delete();
       return back();
    }
}

