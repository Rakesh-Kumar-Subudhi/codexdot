<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function create_testimonial()
    {
        return view("backend.testimonial.create");
    }

    public function store_testimonial(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg',
            'name' => 'required|string',
            'designation' => 'required|string',
            'linkedin' => 'required|string',
            'message' => 'required|string',
        ]);
        $testimonial = new Testimonial();

        if ($request->hasFile('image')) {
            $File = $request->image;
            $FileName = time() . '.' . $File->getClientOriginalExtension();
            $File->move('assets/images', $FileName);
            $testimonial->image = $FileName;
        }
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->linkedin = $request->linkedin;
        $testimonial->message = $request->message;
        // dd($testimonial);
        $testimonial->save();
        return redirect('/view_testimonial');
    }

    public function view_testimonial()
    {
        $testimonial = Testimonial::get();
        return view("backend.testimonial.view", compact("testimonial"));
    }
    public function delete($id)
    {
        $testimonial= Testimonial::where('id', $id)->first();
        $testimonial->delete();
        return back();
    }
    public function edit_testimonial($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        return view('backend.testimonial.edit', ['testimonial' => $testimonial]);
    }
    public function update_testimonial(Request $request, $id)
    { {


            // Create a new Course instance and save it
            $testimonial = Testimonial::where('id', $id)->first();
            // Handle file uploads
            if ($request->hasfile('image')) {
                $destination = 'assets/images' . $testimonial->image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $File = $request->image;
                $extension = $File->getClientOriginalExtension();
                $FileName = rand() . '.' . $extension;
                $File->move('assets/images', $FileName);
                $testimonial->image = $FileName;

            }



            $testimonial->name = $request->name;
            $testimonial->designation = $request->designation;
            $testimonial->linkedin = $request->linkedin;
            $testimonial->message = $request->message;

            // Save the course and handle any errors
            $testimonial->update();
            return redirect('/view_testimonial');
        }
    }
}
