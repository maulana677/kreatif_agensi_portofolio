<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = GeneralSetting::first();
        return view('admin.setting.general-setting.index', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => ['max:5000', 'image'],
            'favicon' => ['max:5000', 'image'],
        ]);

        $setting = GeneralSetting::first();

        if ($request->hasFile('logo')) {
            if ($setting && File::exists(public_path($setting->logo))) {
                File::delete(public_path($setting->logo));
            }

            $logo = $request->file('logo');
            $imageName = rand() . $logo->getClientOriginalName();
            $logo->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/" . $imageName;
        }

        if ($request->hasFile('favicon')) {
            if ($setting && File::exists(public_path($setting->favicon))) {
                File::delete(public_path($setting->favicon));
            }

            $favicon = $request->file('favicon');
            $imageName = rand() . $favicon->getClientOriginalName();
            $favicon->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/" . $imageName;
        }

        GeneralSetting::updateOrCreate(
            ['id' => $id],
            [
                'logo' => isset($imagePath) ? $imagePath : $setting->logo,
                'favicon' => isset($imagePath) ? $imagePath : $setting->favicon,
            ]
        );

        toastr()->success('General Setting Updated Successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
