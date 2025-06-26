<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CmsSection;


class CmsController extends Controller
{
    public function index()
    {
        $sections = CmsSection::select('section_name')->distinct()->pluck('section_name');
        return view('cms.index', compact('sections'));
    }

    public function edit($section)
    {
        $data = CmsSection::where('section_name', $section)->pluck('value', 'key');
        return view('cms.edit', compact('section', 'data'));
    }

    public function update(Request $request, $section)
{
    foreach ($request->except('_token') as $key => $value) {
        // Handle image file
        if ($request->hasFile($key)) {
            $file = $request->file($key);
            $filename = $file->store('uploads', 'public'); // Save to storage/app/public/uploads

            CmsSection::updateOrCreate(
                ['section_name' => $section, 'key' => $key],
                ['value' => $filename]
            );
        }
        // Handle regular text input
        else {
            CmsSection::updateOrCreate(
                ['section_name' => $section, 'key' => $key],
                ['value' => $value]
            );
        }
    }

    return redirect()->route('cms.index')->with('success', 'Updated!');
}

}
