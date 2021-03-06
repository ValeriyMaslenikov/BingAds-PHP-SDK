<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines additional properties of an AdGroup object, or properties of objects nested within an ad group, that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709095(v=msads.110).aspx AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
    final class AdGroupAdditionalField
    {
        /** Includes the InheritedBidStrategyType element that can be nested within the BiddingScheme element of an AdGroup object. */
        const InheritedBidStrategyType = 'InheritedBidStrategyType';
    }

}
