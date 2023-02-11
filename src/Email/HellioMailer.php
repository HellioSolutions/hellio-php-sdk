<?php
namespace Helliosolutions\HellioPhpSdk\Email;

use Helliosolutions\HellioPhpSdk\BaseApi;

class HellioMailer
{
    protected $baseApi;
    protected $from;
    protected $to;
    protected $cc = [];
    protected $bcc = [];
    protected $subject;
    protected $body;
    protected $attachments = [];

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function setFrom(string $from)
    {
        $this->from = $from;
    }

    public function setTo(string $to)
    {
        $this->to = $to;
    }

    public function setCc(array $cc)
    {
        $this->cc = $cc;
    }

    public function setBcc(array $bcc)
    {
        $this->bcc = $bcc;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
    }

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function send()
    {
        $data = [
            'from' => $this->from,
            'to' => $this->to,
            'cc' => $this->cc,
            'bcc' => $this->bcc,
            'subject' => $this->subject,
            'body' => $this->body,
            'attachments' => $this->attachments,
        ];

        return $this->baseApi->makeRequest('email/send?', $data);
    }

}