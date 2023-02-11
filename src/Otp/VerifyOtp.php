<?php
namespace Helliosolutions\HellioPhpSdk\Otp;

use Helliosolutions\HellioPhpSdk\BaseApi;

class VerifyOtp
{
    protected $baseApi;
    protected $otp;
    protected $reference;

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function setOtp(string $otp)
    {
        $this->otp = $otp;
    }

    public function setReference(string $reference)
    {
        $this->reference = $reference;
    }

    public function verify()
    {
        $data = [
            'otp' => $this->otp,
            'reference' => $this->reference,
        ];

        return $this->baseApi->makeRequest('otp/verify?', $data);
    }
}