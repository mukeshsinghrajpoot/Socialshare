<?php

namespace Bluethinkinc\Socialshare\Block;

use Magento\Cms\Block\Page;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Bluethinkinc\Socialshare\Helper\Data as HelperData;

class Btshareicon extends Template
{
    /**
     * Helper
     *
     * @var HelperData
     */
    private $helperData;

    /**
     * Cms page block
     *
     * @var \Magento\Cms\Block\Page
     */
    private $page;
    /**
     * @param Context $context
     * @param HelperData $helperData
     * @param Page $page
     * @param array $data
     */
    public function __construct(
        Context $context,
        HelperData $helperData,
        Page $page,
        array $data = []
    ) {
        $this->helperData = $helperData;
        $this->page = $page;
        parent::__construct($context, $data);
    }
    /**
     * This is a enable module value Get
     *
     * @return enable module
     */
    public function btenable()
    {
        return $this->helperData->enable();
    }
    /**
     * This is a multi share icons value Get
     *
     * @return multi share icons
     */
    public function multishareicons()
    {
        return $data = explode(',', $this->helperData->Btshareicons() ?? '');
    }
    /**
     * This is a more icons value Get
     *
     * @return more icons
     */
    public function moreicons()
    {
         return $this->helperData->btmoreicons();
    }
    /**
     * This is a botton position value Get
     *
     * @return button position
     */
    public function postion()
    {
         return $this->helperData->btpostion();
    }
    /**
     * This is a botton size value Get
     *
     * @return button size
     */
    public function size()
    {
         return $this->helperData->btsize();
    }
    /**
     * This is a default enable value Get
     *
     * @return default enable
     */
    public function defaultenable()
    {
         return $this->helperData->btdefaultenable();
    }
    /**
     * This is a background color value Get
     *
     * @return background color
     */
    public function backgroundcolor()
    {
         return $this->helperData->btbackground();
    }
    /**
     * This is a icon color value Get
     *
     * @return icon color
     */
    public function iconcolor()
    {
         return $this->helperData->bticoncolor();
    }
}
