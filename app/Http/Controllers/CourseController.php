<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function create_course()
    {
        return view("backend.create_course");
    }


    public function store_course(Request $request)
    {

        $request->validate([
            'pdf_file' => 'required|mimes:pdf',
            'course_details_image' => 'image|mimes:jpeg,png,jpg',
            'video_image' => 'image|mimes:jpeg,png,jpg',
            'course_image' => 'image|mimes:jpeg,png,jpg',
            'course_name' => 'required|string',
            'course_price' => 'required|numeric',
            'offer_price' => 'required|numeric',
            'offer' => 'required|numeric',
            'long_description' => 'required|string',
            'short_description' => 'required|string',
        ]);

        $course = new Course();


        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->pdf_file;
            $pdfFileName = rand() . '.' . $pdfFile->getClientOriginalExtension();
            $pdfFile->move('assets/images', $pdfFileName);
            $course->pdf_file = $pdfFileName;
        }

        // Handle course details image upload
        if ($request->hasFile('course_details_image')) {
            $courseDetailsImage = $request->course_details_image;
            $courseDetailsImageName = rand() . '.' . $courseDetailsImage->getClientOriginalExtension();
            $courseDetailsImage->move('assets/images', $courseDetailsImageName);
            $course->course_details_image = $courseDetailsImageName;
        }

        // Handle course image upload
        if ($request->hasFile('course_image')) {
            $courseImage = $request->course_image;
            $courseImageName = rand() . '.' . $courseImage->getClientOriginalExtension();
            $courseImage->move('assets/images', $courseImageName);
            $course->course_image = $courseImageName;
        }
        if ($request->hasFile('video_image')) {
            $videoImage = $request->video_image;
            $videoImageName = rand() . '.' . $videoImage ->getClientOriginalExtension();
            $videoImage ->move('assets/images', $videoImageName);
            $course->video_image = $videoImageName;
        }

        $course->course_name = $request->input('course_name');
        $course->course_price = $request->input('course_price');
        $course->offer_price = $request->input('offer_price');
        $course->offer = $request->input('offer');
        $course->long_description = $request->input('long_description');
        $course->short_description = $request->input('short_description');

        $course->save();


        // dd($course);

        // Save the course and handle any errors
        $course->save();
        return redirect('/view_course');

    }


    public function view_course()
    {
        $courses = Course::get();
        return view("backend.view_course", compact("courses"));
    }
    public function destroy($id)
    {
        $course = Course::where('id', $id)->first();
        $course->delete();
        return back();
    }
    public function edit_course($id)
    {
        $course = Course::where('id', $id)->first();
        return view('backend.edit_course', ['course' => $course]);
    }
    public function update_course(Request $request, $id)
    { {


            // Create a new Course instance and save it
            $course = Course::where('id', $id)->first();
            // Handle file uploads
            if ($request->hasfile('pdf_file')) {
                $destination = 'assets/images' . $course->pdf_file;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $pdfFile = $request->pdf_file;
                $extension = $pdfFile->getClientOriginalExtension();
                $pdfFileName = rand() . '.' . $extension;
                $pdfFile->move('assets/images', $pdfFileName);
                $course->pdf_file = $pdfFileName;

            }

            if ($request->hasfile('course_details_image')) {
                $destination = 'assets/images' . $course->course_details_image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $courseDetailsImage = $request->course_details_image;
                $extension = $courseDetailsImage->getClientOriginalExtension();
                $courseDetailsImageName = rand() . '.' . $extension;
                $courseDetailsImage->move('assets/images', $courseDetailsImageName);
                $course->course_details_image = $courseDetailsImageName;

            }
            if ($request->hasfile('course_image')) {
                $destination = 'assets/images' . $course->course_image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $courseImage = $request->course_image;
                $extension = $courseImage->getClientOriginalExtension();
                $courseImageName = rand() . '.' . $extension;
                $courseImage->move('assets/images', $courseImageName);
                $course->course_image = $courseImageName;

            }
            if ($request->hasfile('video_image')) {
                $destination = 'assets/images' . $course->video_image;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $videoImage = $request->video_image;
                $extension =  $videoImage->getClientOriginalExtension();
                $videoImageName = rand() . '.' . $extension;
                 $videoImage->move('assets/images', $videoImageName );
                $course->video_image = $videoImageName ;

            }

            $course->course_name = $request->input('course_name');
            $course->course_price = $request->input('course_price');
            $course->offer_price = $request->input('offer_price');
            $course->offer = $request->input('offer');
            $course->long_description = $request->input('long_description');
            $course->short_description = $request->input('short_description');
            // Save the course and handle any errors
            $course->update();
            return redirect('/view_course');
        }
    }
}
