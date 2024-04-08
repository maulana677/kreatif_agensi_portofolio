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

        $setting = GeneralSetting::first();
        $logo = handleUpload('logo', $setting);
        $favicon = handleUpload('favicon', $setting);

        $generalSetting = GeneralSetting::first();
        $generalSetting->logo = (!empty($logo)) ? $logo : $setting->logo;
        $generalSetting->favicon = (!empty($favicon)) ? $favicon : $setting->favicon;
        $generalSetting->save();

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
