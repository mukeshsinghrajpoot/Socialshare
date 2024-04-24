<?php
namespace Bluethinkinc\Socialshare\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public const ENABLE_DISABLE ='bluethink_admin_socialshare/general/enable';
    public const PLP_ENABLE_DISABLE ='bluethink_admin_socialshare/general/plpenable';
    public const PDP_ENABLE_DISABLE ='bluethink_admin_socialshare/general/pdpenable';
    public const SHAREICONS ='bluethink_admin_socialshare/general/shareicons';
    public const MORESHAREICONS ='bluethink_admin_socialshare/general/moreoptionsocial';
    public const POSITION ='bluethink_admin_socialshare/style/postion';
    public const SIZE ='bluethink_admin_socialshare/style/size';
    public const DEFAULTENABLE ='bluethink_admin_socialshare/style/defaultsetting';
    public const BACKGROUNDCOLOR ='bluethink_admin_socialshare/style/bccolor';
    public const ICONCOLOR ='bluethink_admin_socialshare/style/iconcolor';
    /**
     * This is a storemanager
     *
     * @var storeManager $storeManager
     */
    private $storeManager;
    /**
     * This is a scopeConfig
     *
     * @var scopeConfig $scopeConfig
     */
    protected $scopeConfig;
    /**
     * This is a construct
     *
     * @param StoreManagerInterface $storeManager
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        ScopeConfigInterface $scopeConfig,
    ) {
        $this->storeManager = $storeManager;
        $this->scopeConfig = $scopeConfig;
    }
    /**
     * This is a social share icon enable disable value Get
     *
     * @return enable
     */
    public function enable()
    {
        return $this->scopeConfig->getValue(
            self::ENABLE_DISABLE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a Product List Page enable disable value Get
     *
     * @return enable
     */
    public function productlispage()
    {
        return $this->scopeConfig->getValue(
            self::PLP_ENABLE_DISABLE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a Product Detail Page enable disable value Get
     *
     * @return enable
     */
    public function productdetailpage()
    {
        return $this->scopeConfig->getValue(
            self::PDP_ENABLE_DISABLE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
     /**
      * This is a share icons value Get
      *
      * @return shareicons
      */
    public function btshareicons()
    {
        return $this->scopeConfig->getValue(
            self::SHAREICONS,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a more icons value Get
     *
     * @return more icons
     */
    public function btmoreicons()
    {
        return $this->scopeConfig->getValue(
            self::MORESHAREICONS,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a botton position value Get
     *
     * @return button position
     */
    public function btpostion()
    {
        return $this->scopeConfig->getValue(
            self::POSITION,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a button size value Get
     *
     * @return more icons
     */
    public function btsize()
    {
        return $this->scopeConfig->getValue(
            self::SIZE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a default background color and icon color yes or no
     *
     * @return default color yes or no
     */
    public function btdefaultenable()
    {
        return $this->scopeConfig->getValue(
            self::DEFAULTENABLE,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a default background color get value
     *
     * @return background icons color
     */
    public function btbackground()
    {
        return $this->scopeConfig->getValue(
            self::BACKGROUNDCOLOR,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
    /**
     * This is a icon color value get
     *
     * @return icon icons
     */
    public function bticoncolor()
    {
        return $this->scopeConfig->getValue(
            self::ICONCOLOR,
            ScopeInterface::SCOPE_STORE,
            $this->storeManager->getStore()->getId()
        );
    }
}
