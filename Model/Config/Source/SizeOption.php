<?php

namespace Bluethinkinc\Socialshare\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Return SizeOption
 */
class SizeOption implements OptionSourceInterface
{
    /**
     * Function toOptionArray
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '16', 'label' => __('Small')],
            ['value' => '32', 'label' => __('Medium')],
            ['value' => '64', 'label' => __('Large')]
        ];
    }
}
