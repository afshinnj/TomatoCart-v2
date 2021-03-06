<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * TomatoCart
 *
 * An open source application ecommerce framework
 *
 * @package   TomatoCart
 * @author    TomatoCart Dev Team
 * @copyright Copyright (c) 2011, TomatoCart, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html
 * @link    http://tomatocart.com
 * @since   Version 0.5
 * @filesource ./system/modules/access/products_expected.php
 */ 

  class TOC_Access_Products_Expected extends TOC_Access {
    public function __construct()
    {
      parent::__construct();
      
      $this->_module = 'products_expected';
      $this->_group = 'content';
      $this->_icon = 'date.png';
      $this->_sort_order = 200;
      
      $this->_title = lang('access_products_expected_title');
    }
  }
  
/* End of file products_expected.php */
/* Location: ./system/modules/access/products_expected.php */