<?php
/**
 * @category  Module
 * @package   MagentoGarage_Base
 * @author    Aman Srivastava <aman.srivastava@live.com>
 * @copyright Copyright (c) MagentoGarage (http://magentogarage.com)
 */
namespace MagentoGarage\FacebookPixel\Block;

class Pixel extends \Magento\Framework\View\Element\Template
{

	const MG_FBPIXEL_CODE = "magentogarage_facebookpixel/general/pixel";

    protected $_scopeConfig;
 
 	protected $_storeManager;

 	protected $_coreRegistry;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Catalog\Helper\Data $catalogHelper
     * @param \Magento\Framework\App\Http\Context $httpContext
     * @param \Magento\Catalog\Model\ProductFactory $productFactory
     * @param \Magento\Checkout\Model\Session $checkoutSession
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Catalog\Helper\Data $catalogHelper,
        \Magento\Framework\App\Http\Context $httpContext,
        array $data = []
    ) {
        $this->_scopeConfig     = $context->getScopeConfig();
        $this->_storeManager    = $context->getStoreManager();
        $this->_coreRegistry    = $coreRegistry;
        $this->catalogHelper   = $catalogHelper;
        $this->httpContext     = $httpContext;
        parent::__construct($context, $data);
    }

	public function getPixelCode(){
		$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORES;
		return $this->_scopeConfig->getValue(self::MG_FBPIXEL_CODE, $storeScope);
	}

	/**
	* Get current store currency code
	*
	* @return string
	*/
    public function getCurrentCurrencyCode()
    {
        return $this->_storeManager->getStore()->getCurrentCurrencyCode();
    }    
}