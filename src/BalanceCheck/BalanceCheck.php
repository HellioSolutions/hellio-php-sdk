<?php
namespace Helliosolutions\HellioPhpSdk\BalanceCheck;

use Helliosolutions\HellioPhpSdk\BaseApi;

class BalanceCheck
{
    protected $baseApi;

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function check()
    {
        return $this->baseApi->makeRequest('balance?', []);
    }
}
