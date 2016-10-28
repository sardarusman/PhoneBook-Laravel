<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\PhoneBook\Contact\Contact;

class ContactController extends Controller
{

    protected $contact;
    
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function home()
    {
        return view('home');
    }
    
    public function add()
    {

        return view('contact/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        'name'     =>   'bail|required',
        'phone'    =>   'required|min:10|numeric',
        'notes'    =>   'max:255',
        ]);

        $this->contact->store($request);
        return redirect("contacts")->with('flash_message', 'Contact has been created successfully.');
    }
    
   // View All Contacts

    public function index()
    {

           $contacts   = $this->contact->index();
           return view('contact.list')->with('contacts', $contacts);
    }
  
  // // Edit Contact for update

    public function edit($contactId)
    {
          $contacts    = $this->contact->edit($contactId);
          return view('contact.edit')->with('contacts', $contacts);
    }
 
    // Update Contacts

    public function update(Request $request, $contactId)
    {

        $this->validate($request, [
            'name'    => 'required',
            'phone'   => 'required|min:10|numeric',
            'notes'   => 'max:255'
        ]);

        $this->contact->update($request, $contactId);
        return redirect("contacts")->with('flash_message', 'Contact has been updated successfully.'); // Redirect
    }
    
    // Delete Contacts

    public function delete($contactId)
    {
    
        $this->contact->delete($contactId);
        return redirect("contacts")->with('flash_message', 'Contact has been deleted successfully.');
    }
}
