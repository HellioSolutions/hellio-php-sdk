<?php
namespace Helliosolutions\HellioPhpSdk\Voice;

use Helliosolutions\HellioPhpSdk\BaseApi;

class Voice
{
    protected $baseApi;
    protected $mobileNumber;
    protected $reference;
    protected $text;

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function setMobileNumber(string $mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function setReference(string $reference)
    {
        $this->reference = $reference;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function send()
    {
        $data = [
            'msisdn' => $this->mobileNumber,
            'reference' => $this->reference,
            'text' => $this->text,
        ];

        return $this->baseApi->makeRequest('voice/send?', $data);
    }
}