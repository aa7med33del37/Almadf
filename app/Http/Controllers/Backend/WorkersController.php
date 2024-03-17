<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Backend\Workers;
use App\Models\Backend\Country;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\WorkersRequest;
use App\Http\Requests\Backend\WorkersUpdateRequest;
use Illuminate\Support\Facades\File;
Use Alert;
use App\Models\Backend\WorkersImage;

class WorkersController extends Controller
{

    public function index()
    {
        $result['workers'] = Workers::orderBy('id', 'DESC')->get();
        $result['published_workers'] = Workers::where('status', '1')->get();
        $result['unpublished_workers'] = Workers::where('status', '0')->get();
        return view('backend.workers.index', $result);
    }

    public function create()
    {
        $result['workers'] = Workers::all();
        $result['countries'] = Country::get();
        return view('backend.workers.create', $result);
    }

    public function store(WorkersRequest $request)
    {
        $validated_data = $request->validated();
        $data = new Workers();
        $data->name = $validated_data['name'];
        $data->age = $validated_data['age'];
        $data->job = $validated_data['job'];
        $data->country = $validated_data['country'];
        $data->religion = $validated_data['religion'];
        $data->experience = $validated_data['experience'];
        $data->description = $validated_data['description'];
        $data->long_description = $validated_data['long_description'];
        $data->rating = $validated_data['rating'];
        $data->status = $request->status ?? '0';

        $cv_path = 'uploads/workers/cv/';
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move($cv_path, $fileName);
            $data->cv = $cv_path . $fileName;
        }

        $data->save();
        $i = 1;
        if ($request->hasFile('image')) {
            $path = 'uploads/workers/image/';
            foreach($request->file('image') as $imgFile) {
                $ext = $imgFile->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $imgFile->move($path, $fileName);

                $data->images()->create([
                    'worker_id' => $data->id,
                    'image'      => $path . $fileName,
                ]);
            }
        }
        alert()->success('تم بنجاح','تم اضافة بيانات العاملة بنجاح');
        return redirect()->route('workers.index');
    }

    public function edit($id)
    {
        $result['workers'] = Workers::all();
        $result['worker'] = Workers::where('id', $id)->first();
        $result['countries'] = Country::get();
        return view('backend.workers.edit', $result);
    }

    public function update(WorkersUpdateRequest $request, $id)
    {
        $worker = Workers::where('id', $id)->first();
        $validated_data = $request->validated();

        if ($request->hasFile('cv')) {
            $path = $worker->cv;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('cv');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/workers/cv/', $filename);
            $validated_data['cv'] = "uploads/workers/cv/$filename";
        }

        $validated_data['status'] = $request->status == True ? '1' : '0';
        $worker->update([
            'name' => $validated_data['name'],
            'age' => $validated_data['age'],
            'job' => $validated_data['job'],
            'country' => $validated_data['country'],
            'religion' => $validated_data['religion'],
            'experience' => $validated_data['experience'],
            'description' => $validated_data['description'],
            'long_description' => $validated_data['long_description'],
            'rating' => $validated_data['rating'],
            'status' => $request->status ?? '0',
            'image'       => $validated_data['image'] ?? $worker->image,
            'cv'       => $validated_data['cv'] ?? $worker->cv,
        ]);

        $i = 1;
        if ($request->hasFile('image')) {
            $path = 'uploads/workers/image/';
            foreach($request->file('image') as $imgFile) {
                $ext = $imgFile->getClientOriginalExtension();
                $fileName = time() . $i++ . '.' . $ext;
                $imgFile->move($path, $fileName);

                $worker->images()->create([
                    'worker_id' => $worker->id,
                    'image'      => $path . $fileName,
                ]);
            }
        }
        alert()->success('تم بنجاح','تم تعديل بيانات العاملة بنجاح');
        return redirect()->route('workers.index');
    }


    public function destroy($id)
    {
        $worker = Workers::where('id', $id)->first();
        if ($worker) {
            if ($worker->images()) {
                $workerImages = WorkerImage::where('worker_id', $worker->id)->get();
                foreach ($workerImages as $imageItem) {
                    if (File::exists($imageItem->image)) {
                        File::delete($imageItem->image);
                    }
                }
                WorkerImage::where('worker_id', $worker->id)->delete();
            }
            $cv_path = $worker->cv;
            if (File::exists($cv_path)) {
                File::delete($cv_path);
            }
            $worker->delete();
            alert()->success('تم بنجاح','تم حذف بيانات العاملة بنجاح');
            return redirect()->route('workers.index');
        } else {
            return redirect()->route('workers.index');
        }
    }



    public function changeStatus(Request $request)
    {
        $worker = Workers::find($request->worker_id);
        $worker->status = $request->status;
        $worker->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
