<?php

namespace Bluethinkinc\Socialshare\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Return SocialOption
 */
class SocialOption implements OptionSourceInterface
{
    /**
     * Function toOptionArray
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'facebook', 'label' => __('Facebook')],
            ['value' => 'twitter', 'label' => __('Twitter')],
            ['value' => 'linkedin', 'label' => __('Linkedin')],
            ['value' => 'whatsapp', 'label' => __('Whatsapp')],
            ['value' => 'google_gmail', 'label' => __('Google Gmail')],
            ['value' => 'pinterest', 'label' => __('Pinterest')],
            ['value' => 'skype', 'label' => __('Skype')],
            ['value' => 'telegram', 'label' => __('Telegram')],
            ['value' => 'wechat', 'label' => __('Wechat')],
            ['value' => 'viber', 'label' => __('Viber')],
            ['value' => 'sms', 'label' => __('SMS')]
        ];
    }
}
