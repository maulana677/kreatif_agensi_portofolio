<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FaqSectionSetting;
use Illuminate\Http\Request;
use File;

class FaqSectionSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = FaqSectionSetting::first();
        return view('admin.faq.index', compact('faq'));
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
        //
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
        $request->validate([
            'title' => ['required', 'max:200'],
            'sub_title' => ['required', 'max:3000'],
            'btn_text' => ['required', 'max:200'],
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
        ]);

        $faq = FaqSectionSetting::first();

        if ($request->hasFile('logo')) {
            if ($faq && File::exists(public_path($faq->logo))) {
                File::delete(public_path($faq->logo));
            }

            $logo = $request->file('logo');
            $imageName = rand() . $logo->getClientOriginalName();
            $logo->move(public_path('/uploads'), $imageName);

            $imagePath = "/uploads/" . $imageName;
        }

        FaqSectionSetting::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'btn_text' => $request->btn_text,
                'logo' => isset($imagePath) ? $imagePath : $faq->logo,
            ]
        );

        toastr()->success('Updated Successfully!');
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
