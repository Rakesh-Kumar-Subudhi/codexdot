<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegistrationController extends Controller
{
    public function register_store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'fathername' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'alt_phone' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'city' => 'required',
                'state' => 'required',
                'last_qualification' => 'required',
                'work_experience' => 'required'

            ]

        );

        $register = new Register();

        $register->name = $request->name;
        $register->fathername = $request->fathername;
        $register->email = $request->email;
        $register->phone = $request->phone;
        $register->alt_phone = $request->alt_phone;
        $register->gender = $request->gender;
        $register->dob = $request->dob;
        $register->city = $request->city;
        $register->state = $request->state;
        $register->last_qualification = $request->last_qualification;
        $register->work_experience = $request->work_experience;

        $register->save();
        // Mail::to('tarunsahoo2014@gmail.com')->send(new ApplySuccess($enquiry));
        return redirect('/');

    }
    public function register_view()
    {
        $register = register::all();
        return view('backend.candidate_view', compact('register'));
    }

    public function register_delete($id)
    {

        $register = register::find($id);

        if (is_null($register)) {

            return redirect()->back();

        } else {
            $register->delete();

            if ($register) {

                return redirect('/candidate_view');

            } else {

                echo "Unable to Delete Resource";

            }
        }
    }

}
