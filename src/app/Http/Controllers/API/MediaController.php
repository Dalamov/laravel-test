<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

use App\Models\Media as Media;
use App\Http\Resources\Media as MediaResource;

class MediaController extends BaseController
{

    public function index()
    {
        $data = Media::all();
        return view("home/home", ['media' => $data]);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $media = Media::create($input);
        header("Location: /home");
        return $this->sendResponse(new MediaResource($media), 'Media created.');
    }


    public function show($id)
    {
        $media = Media::find($id);
        if (is_null($media)) {
            return $this->sendError('Media does not exist.');
        }
        return $this->sendResponse(new MediaResource($media), 'Media fetched.');
    }


    public function update(Request $request, Media $media)
    {
        $input = $request->all();
        $media->url = $input['url'];
        $media->title = $input['title'];
        $media->description = $input['description'];
        $media->save();

        return $this->sendResponse(new MediaResource($media), 'Media updated.');
    }

    public function destroy(Media $media)
    {
        $media->delete();
        return $this->sendResponse([], 'Media deleted.');
    }
}
