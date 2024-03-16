<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Backend\Team;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\TeamRequest;
use Illuminate\Support\Facades\File;
Use Alert;

class TeamController extends Controller
{
    public function index()
    {
        $result['team'] = Team::orderBy('id', 'DESC')->get();
        $result['published'] = Team::where('status', '1')->get();
        $result['unpublished'] = Team::where('status', '0')->get();
        return view('backend.team.index', $result);
    }

    public function create()
    {
        $result['team'] = Team::all();
        return view('backend.team.create', $result);
    }

    public function store(TeamRequest $request)
    {
        $validated_data = $request->validated();
        $data = new Team();
        $data->name = $validated_data['name'];
        $data->job = $validated_data['job'];
        $data->status = $request->status ?? '0';


        $image_path = 'uploads/team/image/';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move($image_path, $fileName);
            $data->image = $image_path . $fileName;
        }


        $data->save();
        alert()->success('تم بنجاح','تم اضافة بيانات الموظف بنجاح');
        return redirect()->route('team.index');
    }

    public function edit($id)
    {
        $result['team'] = Team::all();
        $result['item'] = Team::where('id', $id)->first();
        return view('backend.team.edit', $result);
    }

    public function update(request $request, $id)
    {
        $request->validate([
            'name'              => ['required', 'string'],
            'job'               => ['required', 'string'],
            'image'             => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
        ]);

        $data = Team::where('id', $id)->first();
        if ($request->hasFile('image')) {
            $path = $data->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/Team/image/', $filename);
            $data->image = "uploads/Team/image/$filename";
        }

        $data->status = $request->status == True ? '1' : '0';
        $data->update([
            'name' => $data->name,
            'job' => $data->job,
            'status' => $request->status ?? '0',
            'image'       => $data->image ?? $data->image,
        ]);
        alert()->success('تم بنجاح','تم تعديل بيانات الموظف بنجاح');
        return redirect()->route('team.index');
    }


    public function destroy($id)
    {
        $data = Team::where('id', $id)->first();
        $image_path = $data->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $data->delete();
        alert()->success('تم بنجاح','تم حذف بيانات الموظف بنجاح');
        return redirect()->route('team.index');
    }

    public function changeStatus(Request $request)
    {
        $data = Team::find($request->team_id);
        $data->status = $request->status;
        $data->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
