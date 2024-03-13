<?php

namespace App\Http\Controllers\Backend\Banners;

use App\Http\Controllers\Controller;
use App\Models\Backend\FunFact;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\FunFactRequest;

class FunfactController extends Controller
{
    public function index()
    {
        $data = FunFact::first();
        if ($data == NULL) {
            return view('backend.Banners.funfact');
        }else {
            $data = FunFact::first();
            return view('backend.Banners.funfact', compact('data'));
        }
        return view('backend.Banners.funfact');
    }


    public function store(FunFactRequest $request, $id=NULL)
    {
        $validatedData = $request->validated();
        if ($id == NULL) {
            $data = new FunFact();
            $data->years = $validatedData['years'];
            $data->years_desc = $validatedData['years_desc'];
            $data->clients = $validatedData['clients'];
            $data->clients_desc = $validatedData['clients_desc'];
            $data->projects = $validatedData['projects'];
            $data->projects_desc = $validatedData['projects_desc'];

            $data->save();
        } else {
            $data = FunFact::findOrFail($id);
            $data->years = $validatedData['years'];
            $data->years_desc = $validatedData['years_desc'];
            $data->clients = $validatedData['clients'];
            $data->clients_desc = $validatedData['clients_desc'];
            $data->projects = $validatedData['projects'];
            $data->projects_desc = $validatedData['projects_desc'];

            $data->update();
        }
        alert()->success('تم بنجاح','تم تحديث البيانات');
        return redirect()->route('funfact.index');
    }
}
