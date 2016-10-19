<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Contacts;

class ContactController extends Controller
{
    protected $contacts;
    
    public function __construct(Contacts $contacts)
    {
        $this->contacts = $contacts;
    }

    public function home()
    {
        return view('home');
    }
    
    public function add()
    {

        return view('Contact/create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

            'name'     =>   'bail|required',
            'phone'    =>   'required|min:10|numeric',
            'notes'    =>   'max:255',

            ]);

        $data=array_merge($request->all(), array("user_id"=>\Auth::user()->id));
        $this->contacts->create($data);
        return redirect("contacts")->with('flash_message', 'Contact has been created successfully.');
    }
    
   // View All Contacts

    public function index()
    {

           $userId    = \Auth::user()->id;
           $contacts   = $this->contacts->Where('user_id', $userId)->get();
           return view('Contact.list')->with('contacts', $contacts);
    }
  
  // Edit Contact for update

    public function edit($contactId)
    {
         $contacts    = $this->contacts->findOrFail($contactId);
        return view('Contact.edit')->with('contacts', $contacts);
    }
 
    // Update Contacts

    public function update(Request $request, $contactId)
    {

        $this->validate($request, [
            'name'    => 'required',
            'phone'   => 'required|min:10|numeric',
            'notes'   => 'max:255'
        ]);

        $contacts    = $this->contacts->findOrFail($contactId);
        $contacts->update($request->all());
        return redirect("contacts")->with('flash_message', 'Contact has been updated successfully.'); // Redirect
    }
    
    // Delete Contacts

    public function delete($contactId)
    {
    
        $contacts    = $this->contacts->find($contactId);
        $contacts->delete();
        return redirect("contacts")->with('flash_message', 'Contact has been deleted successfully.');
    }
}
