<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class UploadController extends Controller
{
    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240', 
        ]);

        $fileModel = new File;

        if ($request->file()) {
            date_default_timezone_set('Europe/Moscow');
            $fileName = date('Дата-d m Y Время H-i-s') . ' ' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->filename = $fileName;
            $fileModel->filepath = '/storage/' . $filePath;
            $fileModel->filesize = $request->file('file')->getSize();

            $fileModel->save();

            return redirect()->back()->with('success', 'Файл успешно загружен.');
        }
    }

    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }
}
