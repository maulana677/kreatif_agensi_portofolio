<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class TestimonialController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all()->paginate(3);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'testimonial_text' => 'required',
            'rating' => 'required|numeric|min:0|max:5',
            'name' => 'required',
            'job_title' => 'required',
            'avatar' => ['required', 'image', 'max:5000'], // Validasi untuk avatar (gambar)
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'], // Validasi untuk logo (gambar)
        ]);

        $testimonials = new Testimonial();
        if ($imagePath = $this->uploadImage($request, 'avatar')) {
            $testimonials->avatar = $imagePath;
        }

        if ($imagePath = $this->uploadImage($request, 'logo')) {
            $testimonials->logo = $imagePath;
        }

        $testimonials->testimonial_text = $request->testimonial_text;
        $testimonials->rating = $request->rating;
        $testimonials->name = $request->name;
        $testimonials->job_title = $request->job_title;
        $testimonials->save();

        toastr()->success('Testimonial Created Successfully!');
        return redirect()->route('admin.testimonial.index');
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
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'testimonial_text' => 'required',
            'rating' => 'required|numeric|min:0|max:5',
            'name' => 'required',
            'job_title' => 'required',
            'avatar' => ['nullable', 'image', 'max:5000'], // Validasi untuk avatar (gambar)
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:5000'], // Validasi untuk logo (gambar)
        ]);

        $testimonials = Testimonial::findOrFail($id);
        /** Handle Image Upload */
        if ($testimonials->avatar) {
            $imagePath = $this->uploadImage($request, 'avatar', $testimonials->avatar);

            $testimonials->avatar = !empty($imagePath) ? $imagePath : $testimonials->avatar;
        }

        if ($testimonials->logo) {
            $imagePath = $this->uploadImage($request, 'logo', $testimonials->logo);

            $testimonials->logo = !empty($imagePath) ? $imagePath : $testimonials->logo;
        }

        $testimonials->testimonial_text = $request->testimonial_text;
        $testimonials->rating = $request->rating;
        $testimonials->name = $request->name;
        $testimonials->job_title = $request->job_title;
        $testimonials->save();

        toastr()->success('Testimonial Updated Successfully!');
        return redirect()->route('admin.testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $testimonials = Testimonial::findOrFail($id);

            if ($testimonials->avatar) {
                $this->removeImage($testimonials->avatar);
            }

            if ($testimonials->logo) {
                $this->removeImage($testimonials->logo);
            }

            $testimonials->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
