<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines additional properties of a Keyword object, or properties of objects nested within a keyword, that you can request when calling GetKeywordsByAdGroupId, GetKeywordsByEditorialStatus, and GetKeywordsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709096(v=msads.110).aspx KeywordAdditionalField Value Set
     * 
     * @used-by GetKeywordsByAdGroupIdRequest
     * @used-by GetKeywordsByEditorialStatusRequest
     * @used-by GetKeywordsByIdsRequest
     */
    final class KeywordAdditionalField
    {
        /** Includes the InheritedBidStrategyType element that can be nested within the BiddingScheme element of an Keyword object. */
        const InheritedBidStrategyType = 'InheritedBidStrategyType';
    }

}
