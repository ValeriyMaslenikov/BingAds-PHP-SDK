<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * The targeting setting that is applicable for all audiences e.g., custom audiences and remarketing lists that are associated with this ad group. 
     * @link http://msdn.microsoft.com/en-us/library/mt735046(v=msads.110).aspx RemarketingTargetingSetting Value Set
     * 
     * @used-by AdGroup
     */
    final class RemarketingTargetingSetting
    {
        /** Show ads to people searching for your ad, with the option to change the bid amount for people included in the audience. */
        const BidOnly = 'BidOnly';

        /** Show ads only to people included in the audience, with the option to change the bid amount. */
        const TargetAndBid = 'TargetAndBid';
    }

}
