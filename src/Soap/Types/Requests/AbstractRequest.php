<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 2018-02-23
 * Time: 9:59 PM
 */

namespace NS\AltoBundle\Soap\Types\Requests;

use NS\AltoBundle\Soap\Types\EformHeaderType;

class AbstractRequest
{
    /**
     * @var string
     */
    protected $ServiceType = 'eForm';

    /**
     * @var EformHeaderType
     */
    protected $Header_eForm = null;

}
