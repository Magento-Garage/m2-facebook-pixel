<?php
/**
 * @category  Module
 * @package   MagentoGarage_FacebookPixel
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
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        array $data = []
    ) {
        $this->_scopeConfig     = $context->getScopeConfig();
        $this->_storeManager    = $context->getStoreManager();
        $this->_coreRegistry    = $coreRegistry;
        parent::__construct($context, $data);
    }

	public function getPixelCode(){
		$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORES;
		return $this->_scopeConfig->getValue(self::MG_FBPIXEL_CODE, $storeScope);
	}


    public function getMagentoVersion(){
        return "2.3.3"; //@TODO make it dynamic
    }

    public function getPluginVersion(){
        return "1.0.0"; //@TODO make it dynamic
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