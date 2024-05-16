<?php

namespace App\Livewire;

use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactForm extends Component
{
    #[Rule('required|min:3|string',message: ['required'=>'Field is required'])]
    public string $name,$message,$title;
    #[Rule('required|email|string',message: ['required'=>'Field is required','email'=>'Invalid email address entered'])]
    public string $email;
    public function render()
    {
        return view('livewire.contact-form');
    }

    public function sendEmail(): void
    {
      $this->validate();

        Mail::send(new ContactUs($this->email,$this->name,$this->message,$this->title));

        session()->flash('status', 'Message sent successfully.');

        $this->reset();
    }


}
