<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqQuestion = Faq::all();
        return view('admin.faq-question.index', compact('faqQuestion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq-question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => ['required', 'max:200'],
            'answer' => ['required', 'max:200']
        ]);

        $faqQuestion = new Faq();
        $faqQuestion->question = $request->question;
        $faqQuestion->answer = $request->answer;
        $faqQuestion->save();

        toastr()->success('FAQ Created Successfully!');
        return redirect()->route('admin.faq-question.index');
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
        $faqQuestion = Faq::findOrFail($id);
        return view('admin.faq-question.edit', compact('faqQuestion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => ['required', 'max:200'],
            'answer' => ['required', 'max:200']
        ]);

        $faqQuestion = Faq::findOrFail($id);
        $faqQuestion->question = $request->question;
        $faqQuestion->answer = $request->answer;
        $faqQuestion->save();

        toastr()->success('FAQ Updated Successfully!');
        return redirect()->route('admin.faq-question.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $faqQuestion = Faq::findOrFail($id);
            $faqQuestion->delete();
            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'something went wrong!']);
        }
    }
}
