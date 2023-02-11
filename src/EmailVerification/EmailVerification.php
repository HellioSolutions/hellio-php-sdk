<?php
namespace Helliosolutions\HellioPhpSdk\EmailVerification;

use Helliosolutions\HellioPhpSdk\BaseApi;

class EmailVerification
{
    protected $baseApi;
    protected $email;
    protected $reference;

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setReference(string $reference)
    {
        $this->reference = $reference;
    }

    public function send()
    {
        $data = [
            'email' => $this->email,
            'reference' => $this->reference,
        ];

        return $this->baseApi->makeRequest('email/verify?', $data);
    }
}