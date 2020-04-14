<?php

namespace Revlv\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackSend extends Mailable
{
    use Queueable;
    use SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @param mixed $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->data['email'])
            ->subject(sprintf('Inquiry from %s', $this->data['name']))
            ->view('emails.feedback')
            ->with('data', $this->data);
    }
}
