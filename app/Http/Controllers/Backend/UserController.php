<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $result['users'] = User::orderBy('id', 'ASC')->get();
        return view('backend.user.index', $result);
    }

    public function create()
    {
        $result['users'] = User::get();
        return view('backend.user.create', $result);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => ['required', 'string'],
            'email'     => ['required', 'email', 'unique:users,email'],
            'password'  => ['required'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        alert()->success('تم بنجاح','تم اضافة مستخدم جديد بنجاح');
        return redirect()->route('users.index');
    }

    public function destroy(Request $request, $id)
    {
        if ($id != '1') {
            User::findOrFail($id)->delete();
            alert()->success('تم بنجاح','تم حذف بيانات المستخدم بنجاح');
            return redirect()->route('users.index');
        } else {
            alert()->error('خطأ','عفوا لا يمكن حذف مدير الموقع');
            return redirect()->route('users.index');
        }
    }

    public function edit($id)
    {
        if(Auth::user()->id == '1') {
            $result['item'] = User::where('id', $id)->first();
            return view('backend.user.profile', $result);
        }
        else {
            if (Auth::user()->id == $id) {
                $result['item'] = User::where('id', $id)->first();
                return view('backend.user.profile', $result);
            } else {
                alert()->error('خطأ','عفوا لا يمكن التعديل');
                return redirect()->route('users.index');
            }
        }
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->id == '1') {
            $data = User::where('id', $id)->first();
        } else {
            $data = User::where('id', $id)->first();
        }

        $request->validate([
            'name'  => ['string', 'required'],
            'email' => ['email', 'required'],
        ]);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->update();
        alert()->success('تم بنجاح','تم تحديث بيانات المستخدم بنجاح');
        return redirect()->back();
    }

    public function changeStatus(Request $request)
    {
        if ($request->user_id != '1') {
            $user = User::find($request->user_id);
            $user->status = $request->status;
            $user->save();
            return response()->json(['success'=>'Status change successfully.']);
        }

    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'new_password' => 'required',
        ]);
        $user = User::findOrFail($request->id);
        $user->password = Hash::make($request->new_password);
        alert()->success('تم بنجاح','تم تحديث كلمة مرور المستخدم بنجاح');
        return redirect()->back();
    }
}
