<?php

namespace Revlv\Selections;

use Laboratory\Selection\Providers\ProviderInterface;
use Laboratory\Selection\Providers\ProvidesJson;
use Laboratory\Selection\Providers\ProvidesValidation;

class InquiryTypes implements ProviderInterface
{
    use ProvidesJson;
    use ProvidesValidation;

    /**
     * Return the selection in key-valued pairs.
     *
     * @return array
     */
    public function list()
    {
        return [
            'Request for a quote' => 'Request for a quote',
            'Product inquiry' => 'Product inquiry',
            'Solutions and other services' => 'Solutions and other services',
            'Company tie-up or business partnership' => 'Company tie-up or business partnership',
        ];
    }
}
