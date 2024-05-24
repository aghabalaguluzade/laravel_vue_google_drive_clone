<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\File;
use Inertia\Inertia;

class FileController extends Controller
{
    public function myFiles()
    {
        return Inertia::render('File/MyFiles');
    }

    public function sharedWithMe()
    {
        return Inertia::render('File/MyFiles');
    }

    public function sharedByMe()
    {
        return Inertia::render('File/MyFiles');
    }

    public function trash()
    {
        return Inertia::render('File/MyFiles');
    }

    public function create()
    {

    }

    public function store(StoreFileRequest $request)
    {

    }

    public function show(File $file)
    {

    }

    public function edit(File $file)
    {

    }

    public function update(UpdateFileRequest $request, File $file)
    {

    }

    public function destroy(File $file)
    {

    }

}
