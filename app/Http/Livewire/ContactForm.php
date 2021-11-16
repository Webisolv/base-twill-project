<?php

namespace App\Http\Livewire;

use App\Twill\Capsules\ContactFormSubmissions\Models\ContactFormSubmission;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public string $successMessage;

    public ContactFormSubmission $contactForm;

    public bool $saved = false;

    protected $rules = [
        'contactForm.title' => 'required|string',
        'contactForm.message' => 'required|string',
        'contactForm.email' => 'required|email',
        'contactForm.phone_number' => 'required|string',
    ];

    public function mount(?ContactFormSubmission $contactForm): void
    {
        $this->contactForm = $contactForm;
    }

    public function save(): void
    {
        $this->validate();

        $this->contactForm->save();

        $this->saved = true;
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
