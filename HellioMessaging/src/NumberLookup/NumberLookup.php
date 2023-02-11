<?php
namespace Helliosolutions\HellioPhpSdk\NumberLookup;

use Helliosolutions\HellioPhpSdk\BaseApi;

class NumberLookup
{
    protected $baseApi;

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function lookup(string $mobileNumber, string $reference)
    {
        $data = [
            'msisdn' => $mobileNumber,
            'reference' => $reference,
        ];

        return $this->baseApi->makeRequest('hlr/request?', $data);
    }
}