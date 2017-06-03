<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PhotosController extends Controller
{
//    public function uploadForm()
//    {
//        return view('upload');
//    }

    public function photos()
    {
        $photos = Photo::orderBy('id', 'desc')->paginate(16);

        $column_style = 1;

        return view('home', compact('photos', 'column_style'));
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'headline' => 'required|string|between:3,50',
            'caption' => 'required|string|between:3,1000',
            'photo' => 'required|image',
            'pin' => 'required|integer|digits_between:4,6'
        ]);

        $uploadingPhoto = $request->photo;

        $photoName = time() . $uploadingPhoto->getClientOriginalName();

        $uploadingPhoto->move('photos', $photoName);

        $request['path'] = $photoName;

        $photo = Photo::create($request->all());

        return redirect()->route('show', $photo->id);
    }

    public function edit($pid)
    {
        $photo = Photo::find($pid);

        $this->verify($photo);

        return view('edit', compact('photo'));
    }

    public function show($pid)
    {
        $photo = Photo::find($pid);

        $this->verify($photo);

        $previousPhoto = Photo::where('id', '<', $pid)->max('id');

        $nextPhoto = Photo::where('id', '>', $pid)->min('id');

        list($width, $height) = getimagesize(public_path() . $photo->path);

        $img_class = ($height > $width) ? 'class=vertical' : '';

        return view('show', compact('photo', 'previousPhoto', 'nextPhoto', 'img_class'));
    }

    public function update(Request $request, $pid)
    {
        $this->validate($request, [
            'headline'  => 'required|string|between:3, 50',
            'caption'   => 'required|string|between:3, 1000',
            'photo'     => 'image',
            'pin'       => [
                'required',
                'integer',
                Rule::exists('photos')->where(function ($query) use ($pid) {
                    $query->where('id', $pid);
                })
            ]
        ]);

        $photo = Photo::find($pid);

        $this->verify($photo);

        if ($request->hasFile('photo')) {

            $updatingPhoto = $request->photo;

            unlink(public_path() . $photo->path);

            $photoName = time() . $updatingPhoto->getClientOriginalName();

            $request->photo->move('photos', $photoName);

            $request['path'] = $photoName;

        }

        $photo->update($request->all());

        return redirect()->route('show', $pid);
    }

    protected function verify($photo)
    {
        if (!$photo) {
            return abort(404);
        }
    }
}
