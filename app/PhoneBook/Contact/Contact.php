<?php

namespace App\PhoneBook\Contact;

use App\PhoneBook\Contracts\ContactInterface;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contacts;

class Contact implements ContactInterface
{

    protected $contacts;
    
    public function __construct(Contacts $contacts)
    {
        $this->contacts = $contacts;
    }

    public function store($request)
    {
        
        $request=array_merge($request->all(), array("user_id"=>\Auth::user()->id));

        return $this->contacts->create($request);
    }

    public function index()
    {
        $userId    = \Auth::user()->id;

        return $this->contacts->Where('user_id', $userId)->get();
    }

    public function edit($contactId)
    {
        return $this->contacts->findOrFail($contactId);
    }

    public function update($request, $contactId)
    {
        $contacts = $this->contacts->findOrFail($contactId);

        return $contacts->update($request->all());
    }

    public function delete($contactId)
    {
        $contacts    = $this->contacts->find($contactId);
        return $contacts->delete();
    }
}
