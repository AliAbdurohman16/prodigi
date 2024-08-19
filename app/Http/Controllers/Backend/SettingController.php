<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['setting'] = Setting::find(1);

        return view('backend.setting.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $setting = Setting::find(1);

        $data = $request->validate([
            'logo_color' => 'image|mimes:jpeg,png,jpg|max:2048',
            'logo_white' => 'image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'desc' => 'required',
            'hero' => 'image|mimes:jpeg,png,jpg|max:2048',
            'about_image_1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'about_image_2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'about_image_3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'about_desc' => 'required',
            'happy_client' => 'required',
            'job_placement' => 'required',
            'project_complete' => 'required',
            'footer_desc' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        $fields = [
            'logo_color', 'logo_white', 'hero',
            'about_image_1', 'about_image_2', 'about_image_3'
        ];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                if ($setting->$field && Storage::exists('public/setting/' . $setting->$field)) {
                    Storage::delete('public/setting/' . $setting->$field);
                }

                $data[$field] = basename($request->file($field)->store('public/setting'));
            }
        }

        $setting->update($data);

        return redirect('setting')->with('message', 'Berhasil diubah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
