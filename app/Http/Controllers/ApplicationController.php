<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|max:500',
            'message' => 'required|max:100',
            'file' => 'mimes:img,jpg,png,doc,docx,pdf|max:5000'
        ]);

        if ($request->hasFile('file')) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        }

        $application = Application::create([
            'user_id' => auth()->user()->id,
            'subject' => $request->subject,
            'message' => $request->message,
            'file_url' => $filePath ?? null
        ]);

        return redirect()->back();
    }
}
