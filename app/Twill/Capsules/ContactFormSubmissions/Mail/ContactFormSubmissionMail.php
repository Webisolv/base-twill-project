<?php

namespace App\Twill\Capsules\ContactFormSubmissions\Mail;

use App\Twill\Capsules\ContactFormSubmissions\Models\ContactFormSubmission;
use Illuminate\Mail\Mailable;

class ContactFormSubmissionMail extends Mailable
{
    private ContactFormSubmission $submission;

    public function __construct(ContactFormSubmission $submission)
    {
        $this->submission = $submission;
    }

    public function build()
    {
        $this->subject($this->submission->title);
        return $this->view('emails.contact-form-submission', [
            'title' => $this->submission->title,
            'content' => $this->submission->message,
            'email' => $this->submission->email,
            'phone_number' => $this->submission->phone_number,
        ]);
    }
}
