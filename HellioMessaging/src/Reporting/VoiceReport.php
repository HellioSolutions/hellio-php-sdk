<?php
namespace Helliosolutions\HellioPhpSdk\Reporting;

use Helliosolutions\HellioPhpSdk\BaseApi;

class VoiceReport
{
    protected $baseApi;

    public function __construct(BaseApi $baseApi)
    {
        $this->baseApi = $baseApi;
    }

    public function getReport(string $startDate, string $endDate)
    {
        $data = [
            'startDate' => $startDate,
            'endDate' => $endDate,
        ];

        return $this->baseApi->makeRequest('report/voice/delivery-report?', $data);
    }
}