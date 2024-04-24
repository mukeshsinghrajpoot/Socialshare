<?php

namespace Bluethinkinc\Socialshare\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Return PositionOption
 */
class PositionOption implements OptionSourceInterface
{
    /**
     * Function toOptionArray
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'vertical', 'label' => __('Vertical')],
            ['value' => 'default', 'label' => __('Horizontal')]
        ];
    }
}
