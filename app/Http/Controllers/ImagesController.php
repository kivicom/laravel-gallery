<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    private $images;
    public function __construct(ImageService $imageService)
    {
        $this->images = $imageService;
    }

    public function index() {
        $images = $this->images->all();

        return view('welcome', ['imagesInView' =>$images]);
    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){
        $image = $request->file('image')->store('uploads');
        $this->images->add($image);

        return redirect('/');
    }

    public function show($id){
        $image = $this->images->one($id);

        return view('show', ['imageInView' => $image->image]);
    }

    public function edit($id){
        $image = $this->images->one($id);

        return view('edit', ['imageInView' => $image]);
    }

    public function update(Request $request, $id){
        $this->images->update($id, $request->image);

        return redirect('/');
    }

    public function delete($id){
        $this->images->delete($id);

        return redirect('/');
    }
}
