<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735051(v=msads.100).aspx DeleteAdGroupRemarketingListAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupRemarketingListAssociations
     */
    final class DeleteAdGroupRemarketingListAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
