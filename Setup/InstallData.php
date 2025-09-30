<?php
declare(strict_types=1);

namespace DRogmann\ClpInformation\Setup;

use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        // H-Phrases Multiselect
        $eavSetup->addAttribute(
            Product::ENTITY,
            'clp_h_phrases',
            [
                'type' => 'varchar',
                'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                'frontend' => '',
                'label' => 'H-Phrases (Hazard Statements)',
                'input' => 'multiselect',
                'class' => '',
                'source' => 'DRogmann\ClpInformation\Model\Config\Source\HPhrases',
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );

        // P-Phrases Multiselect
        $eavSetup->addAttribute(
            Product::ENTITY,
            'clp_p_phrases',
            [
                'type' => 'varchar',
                'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                'frontend' => '',
                'label' => 'P-Phrases (Precautionary Statements)',
                'input' => 'multiselect',
                'class' => '',
                'source' => 'DRogmann\ClpInformation\Model\Config\Source\PPhrases',
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );

        // Signal Word
        $eavSetup->addAttribute(
            Product::ENTITY,
            'clp_signal_word',
            [
                'type' => 'varchar',
                'label' => 'CLP Signal Word',
                'input' => 'select',
                'source' => 'DRogmann\ClpInformation\Model\Config\Source\SignalWord',
                'required' => false,
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'user_defined' => false,
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'unique' => false
            ]
        );

        // Add attributes to attribute group
        $attributeSetId = $eavSetup->getDefaultAttributeSetId(Product::ENTITY);
        $attributeGroupId = $eavSetup->getDefaultAttributeGroupId(Product::ENTITY, $attributeSetId);

        $eavSetup->addAttributeToGroup(
            Product::ENTITY,
            $attributeSetId,
            $attributeGroupId,
            'clp_h_phrases',
            null
        );

        $eavSetup->addAttributeToGroup(
            Product::ENTITY,
            $attributeSetId,
            $attributeGroupId,
            'clp_p_phrases',
            null
        );

        $eavSetup->addAttributeToGroup(
            Product::ENTITY,
            $attributeSetId,
            $attributeGroupId,
            'clp_signal_word',
            null
        );
    }
}