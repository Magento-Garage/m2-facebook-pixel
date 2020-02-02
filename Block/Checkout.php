<?php
/**
 * @category  Module
 * @package   MagentoGarage_FacebookPixel
 * @author    Aman Srivastava <aman.srivastava@live.com>
 * @copyright Copyright (c) MagentoGarage (http://magentogarage.com)
 */
namespace MagentoGarage\FacebookPixel\Block;

class Checkout extends Pixel
{

	public function getContentIds()
	{
		return ""; //@TODO add cart item skus as string
	}
	
	public function getNumItems()
	{
		return 2; //@TODO add cart items count
	}
}