<?php

declare(strict_types=1);

namespace ScienceSoft\AuthorBackend\Setup\Patch\Data;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;

class AddTurbine implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface  */
    private ModuleDataSetupInterface $moduleDataSetup;

    /** @var EavSetupFactory  */
    private EavSetupFactory $eavSetupFactory;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }
    /**
     * @return array|string[]
     */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * @return array|string[]
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Validate_Exception
     */
    public function apply(): void
    {
        /** @var $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $eavSetup->addAttribute('catalog_product', 'turbine2', [
            'type' => 'int',
            'label' => 'turbine2',
            'input' => 'boolean',
            'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
            'default' => '0',
            'used_in_product_listing' => 0,
            'user_defined' => 1,
            'global' => 0,
            'filterable' => 1,
            'is_html_allowed_on_front' => 1,
            'is_used_in_grid' => 1,
            'is_visible_in_grid' =>1,
            'is_filterable_in_grid' => 1,
        ]);
    }
}
