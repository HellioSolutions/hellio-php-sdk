<?php
namespace Helliosolutions\HellioPhpSdk\Otp;

use Helliosolutions\HellioPhpSdk\BaseApi;

class SendOtp
{
    protected $baseApi;
    protected $recipient;
    protected $mobileNumber;
    protected $message;
    protected $messageType;

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function setRecipient(string $recipient)
    {
        $this->recipient = $recipient;
    }

    public function setmobileNumber(string $mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function setMessageType(string $messageType)
    {
        $this->messageType = $messageType;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function send()
    {
        $data = [
            'senderId' => $this->recipient,
            'msisdn' => $this->mobileNumber,
            'message' => $this->message,
            'messageType' => $this->messageType,
        ];

        return $this->baseApi->makeRequest('sms?', $data);
    }
}