<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUs extends Component
{
    public string $name    = '';
    public string $email   = '';
    public string $phone   = '';
    public string $subject = '';
    public string $message = '';



    public function submit()
    {
        $contact  = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

//        $data = $this->validate( [
//            'name'       => 'required|min:3',
//            'subject'    => 'required|min:3',
//            'email'      => 'required|email|min:4',
//            'phone'      => 'required',
//            'message'    => 'required',
//        ]);

        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {

        return view('livewire.contact-us');
    }
}
