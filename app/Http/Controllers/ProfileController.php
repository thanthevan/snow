<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function loadView()
    {
        return view('profile');
    }

    public function update(Request $request)
    {   

    
        try {
            $avt = empty($request->fileName) ? $this->upload($request->filebase64) : $request->fileName;
            $id = Auth::id();
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->avatar =  $avt;
            $user->save();

            return redirect('profile')->with('status', 'Xong rồi !');

        } catch (\Exception $e) {
            throw $e;
            return redirect('profile')->with('status', 'Lỗi rồi !');
        }
    }

    private function upload($param,$folder = 'uploads')
    {
        list($extension, $content) = explode(';', $param);
        $tmpExtension = explode('/', $extension);
        preg_match('/.([0-9]+) /', microtime(), $m);
        $fileName = sprintf('img%s%s.%s', date('YmdHis'), $m[1], $tmpExtension[1]);
        $content = explode(',', $content)[1];
        $storage = Storage::disk('public');

        $checkDirectory = $storage->exists($folder);

        if (!$checkDirectory) {
            $storage->makeDirectory($folder);
        }

        $storage->put($folder . '/' . $fileName, base64_decode($content), 'public');

        return $fileName;
    }
}
