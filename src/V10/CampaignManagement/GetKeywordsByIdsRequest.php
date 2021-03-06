<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Request Object
     * 
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsRequest
    {
        /**
         * The identifier of the ad group whose keywords you want to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 1,000 identifiers of the keywords to get.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * The list of additional elements that you want included within each returned Keyword object.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
