<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Gets the status of a report request.
     * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.90).aspx PollGenerateReport Request Object
     * 
     * @used-by BingAdsReportingService::PollGenerateReport
     */
    final class PollGenerateReportRequest
    {
        /**
         * The identifier of the report request.
         * @var string
         */
        public $ReportRequestId;
    }
}
