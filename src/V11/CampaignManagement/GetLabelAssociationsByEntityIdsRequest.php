<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets label associations by entity identifiers.
     * @link http://msdn.microsoft.com/en-us/library/mt803281(v=msads.110).aspx GetLabelAssociationsByEntityIds Request Object
     * 
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::GetLabelAssociationsByEntityIds
     */
    final class GetLabelAssociationsByEntityIdsRequest
    {
        public $EntityIds;
        public $EntityType;
    }
}
