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

class BL_CustomGrid_Model_Grid_Type_Tax_Class extends BL_CustomGrid_Model_Grid_Type_Abstract
{
    protected function _getSupportedBlockTypes()
    {
        return array('adminhtml/tax_class_grid');
    }
    
    public function canExport($blockType)
    {
        return false;
    }
    
    protected function _getEditorModelClassCode()
    {
        return 'customgrid/grid_editor_tax_class';
    }
    
    protected function _isEditedEntityLoaded(
        $blockType,
        BL_CustomGrid_Object $config,
        array $params,
        $entity,
        $entityId
    ) {
        if (parent::_isEditedEntityLoaded($blockType, $config, $params, $entity, $entityId)
            && isset($params['additional'])
            && isset($params['additional']['class_type'])) {
            /** @var $entity Mage_Tax_Model_Class */
            return ($entity->getClassType() == $params['additional']['class_type']);
        }
        return false;
    }
}
