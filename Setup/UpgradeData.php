<?php
declare(strict_types=1);

namespace DRogmann\ClpInformation\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function __construct(
        private readonly EavSetupFactory $eavSetupFactory
    ) {
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context): void
    {
        // Minimal placeholder: implement data upgrades here in future versions.
    }
}
