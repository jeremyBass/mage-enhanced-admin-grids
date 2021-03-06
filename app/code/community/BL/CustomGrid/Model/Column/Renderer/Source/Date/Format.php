<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   BL
 * @package    BL_CustomGrid
 * @copyright  Copyright (c) 2015 Benoît Leulliette <benoit.leulliette@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class BL_CustomGrid_Model_Column_Renderer_Source_Date_Format extends BL_CustomGrid_Model_Source_Fixed
{
    protected $_optionHash = array(
        Mage_Core_Model_Locale::FORMAT_TYPE_SHORT  => 'Short',
        Mage_Core_Model_Locale::FORMAT_TYPE_MEDIUM => 'Medium',
        Mage_Core_Model_Locale::FORMAT_TYPE_LONG   => 'Long',
        Mage_Core_Model_Locale::FORMAT_TYPE_FULL   => 'Full',
    );
}
