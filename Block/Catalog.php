<?php
/**
 * @category  Module
 * @package   MagentoGarage_FacebookPixel
 * @author    Aman Srivastava <aman.srivastava@live.com>
 * @copyright Copyright (c) MagentoGarage (http://magentogarage.com)
 */
namespace MagentoGarage\FacebookPixel\Block;

class Catalog extends Pixel
{

	protected $_product = NULL;

	protected $_category = NULL;

	public function getCategoryName($categoryId = NULL){
		if(!$categoryId){
			$category = $this->_coreRegistry->registry('current_category');			
		}
		return $category->getName();
	}

	public function getProductName($productId = NULL){
		return $this->_getProduct()->getName();
	}

	public function getProductSku($productId = NULL){
		return $this->_getProduct()->getSku();
	}

	protected function _getProduct($productId = NULL){
		if(!$this->_product){
			$this->_product = $this->_coreRegistry->registry('current_product');
		}
		return $this->_product;
	}
}