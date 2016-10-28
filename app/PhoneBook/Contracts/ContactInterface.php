<?php

namespace App\PhoneBook\Contracts;

interface ContactInterface
{

    public function store($request);
    public function index();
    public function edit($contactId);
    public function update($request, $contactId);
    public function delete($contactId);
}
