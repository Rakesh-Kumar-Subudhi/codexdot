<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {


        $Contact = new Contact();

        $Contact->name = $request->name;
        $Contact->email = $request->email;
        $Contact->phone_number = $request->phone_number;
        $Contact->subject = $request->subject;
        $Contact->message = $request->message;
        $Contact->save();

        //  Mail::to('daspriyankaa01@gmail.com')->send(new EnquirySuccess($Contact));


  return redirect()->back()->with('message', 'Your message has been sent successfully!');


    }
    public function contact_view()
    {
        $contacts = Contact::all();
        return view('backend.contact_view', compact('contacts'));
    }

    public function delete($id)
    {

        $Contact = Contact::find($id);

        if (is_null($Contact)) {

            return redirect()->back();

        } else {
            $Contact->delete();

            if ($Contact) {

                return redirect('/contact_view');

            } else {

                echo "Unable to Delete Resource";

            }
        }
    }
}
