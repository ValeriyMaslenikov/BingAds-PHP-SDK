<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169112(v=msads.110).aspx OperationError Data Object
     * 
     * @used-by ApiFault
     * @used-by AddClientLinksResponse
     * @used-by UpdateClientLinksResponse
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

}
