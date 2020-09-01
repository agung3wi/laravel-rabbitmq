<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailTemplate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The content instance.
     *
     * @var content
     */
    protected $content;


    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('templateEmail')
            ->with([
                'content' => $this->content
            ]);
    }
}
