<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the list of keyword idea categories.
     * @link http://msdn.microsoft.com/en-us/library/mt784427(v=msads.110).aspx GetKeywordIdeaCategories Response Object
     * 
     * @uses KeywordIdeaCategory
     * @used-by BingAdsAdInsightService::GetKeywordIdeaCategories
     */
    final class GetKeywordIdeaCategoriesResponse
    {
        /**
         * The list of keyword idea categories.
         * @var KeywordIdeaCategory[]
         */
        public $KeywordIdeaCategories;
    }
}
