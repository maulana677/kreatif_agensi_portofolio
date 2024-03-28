<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSocialLink;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class FooterSocialLinkController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footerSocialLink = FooterSocialLink::all();
        return view('admin.footer-social-link.index', compact('footerSocialLink'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.footer-social-link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
            'url' => ['required', 'url']
        ]);

        $imagePath = $this->uploadImage($request, 'icon');
        $social = new FooterSocialLink();
        $social->icon = $imagePath;
        $social->url = $request->url;
        $social->save();

        toastr()->success('Created Successfully!');
        return redirect()->route('admin.footer-social.index');
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
        $footerSocialLink = FooterSocialLink::findOrFail($id);
        return view('admin.footer-social-link.edit', compact('footerSocialLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'],
            'url' => ['required']
        ]);

        $footer = FooterSocialLink::findOrFail($id);
        /** Handle Image Upload */
        $imagePath = $this->uploadImage($request, 'icon', $footer->cover);

        $footer->icon = !empty($imagePath) ? $imagePath : $footer->icon;
        $footer->url = $request->url;
        $footer->save();

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.footer-social.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $footer = FooterSocialLink::findOrFail($id);
            $this->removeImage($footer->icon);
            $footer->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
