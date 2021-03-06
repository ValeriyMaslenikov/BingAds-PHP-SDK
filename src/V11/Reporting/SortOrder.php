<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the ascending or descending sort order of values within the specified report column.
     * @link http://msdn.microsoft.com/en-us/library/dn342800(v=msads.110).aspx SortOrder Value Set
     * 
     * @used-by KeywordPerformanceReportSort
     */
    final class SortOrder
    {
        /** The results will be sorted ascending. */
        const Ascending = 'Ascending';

        /** The results will be sorted descending. */
        const Descending = 'Descending';
    }

}
