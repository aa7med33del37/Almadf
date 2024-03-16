<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $result['users'] = User::orderBy('id', 'ASC')->get();
        return view('backend.user.index', $result);
    }

    public function create()
    {
        return view('admin.user.create');
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
        $user->password = Hash::make($request->name);

        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy(Request $request, $id)
    {
        if ($id != '1') {
            User::findOrFail($id)->delete();
            return redirect()->route('users.index');
        } else {
            return redirect()->route('users.index');
        }
    }

    // public function profile($id)
    // {
    //     $data = User::where('role', 'admin')->where('id', $id)->first();
    //     return view('admin.users.profile', compact('data'));
    // }

    // public function updateProfile(Request $request, $id)
    // {
    //     $request->validate([
    //         'name'  => ['string', 'required'],
    //         'email' => ['email', 'required'],
    //         'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
    //     ]);
    //     $data = User::where('role', 'admin')->where('id', $id)->first();
    //     $data->name = $request->name;
    //     $data->email = $request->email;

    //     $path = 'uploads/users/';
    //     if ($request->hasFile('image')){
    //         if (File::exists($data->image)) {
    //             File::delete($data->image);
    //         }
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $fileName = time() . '.' . $ext;
    //         $file->move($path, $fileName);
    //         $data->image = $path . $fileName;
    //     }
    //     $data->update();
    //     return redirect()->back();
    // }
}
