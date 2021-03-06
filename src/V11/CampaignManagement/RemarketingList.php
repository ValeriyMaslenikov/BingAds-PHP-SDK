<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a remarketing list.
     * @link http://msdn.microsoft.com/en-us/library/mt735047(v=msads.110).aspx RemarketingList Data Object
     * 
     * @uses RemarketingRule
     */
    final class RemarketingList extends Audience
    {
        public $Rule;
        public $TagId;
    }

}
