<?php

/**
 * Correios
 *
 * Correios Shipping Method for Magento 2.
 *
 * @package ImaginationMedia\Correios
 * @author Igor Ludgero Miura <igor@imaginemage.com>
 * @copyright Copyright (c) 2017 Imagination Media (http://imaginemage.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace ImaginationMedia\Correios\Setup;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type;
use Magento\Catalog\Model\ResourceModel\Eav\Attribute;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallData implements InstallDataInterface
{
    /**
     * @var \Magento\Eav\Setup\EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $productTypes = [
            Type::TYPE_SIMPLE,
            Type::TYPE_VIRTUAL,
        ];
        $productTypes = join(',', $productTypes);
        $eavSetup->addAttribute(
            Product::ENTITY,
            'correios_width',
            [
                'type'                    => 'text',
                'label'                   => 'Correios Width',
                'input'                   => 'text',
                'sort_order'              => 50,
                'global'                  => Attribute::SCOPE_WEBSITE,
                'user_defined'            => true,
                'required'                => false,
                'used_in_product_listing' => true,
                'apply_to'                => $productTypes,
                'group'                   => 'General',
                'unique'                  => false,
                'visible_on_front'        => true,
                'searchable'              => false,
                'filterable'              => true,
                'comparable'              => true,
                'visible'                 => true,
                'backend'                 => '',
                'frontend'                => '',
                'class'                   => '',
                'source'                  => '',
                'default'                 => '',
            ]
        );

        $eavSetup->addAttribute(
            Product::ENTITY,
            'correios_height',
            [
                'type'                    => 'text',
                    'label'                   => 'Correios Height',
                'input'                   => 'text',
                'sort_order'              => 51,
                'global'                  => Attribute::SCOPE_WEBSITE,
                'user_defined'            => true,
                'required'                => false,
                'used_in_product_listing' => true,
                'apply_to'                => $productTypes,
                'group'                   => 'General',
                'unique'                  => false,
                'visible_on_front'        => true,
                'searchable'              => false,
                'filterable'              => true,
                'comparable'              => true,
                'visible'                 => true,
                'backend'                 => '',
                'frontend'                => '',
                'class'                   => '',
                'source'                  => '',
                'default'                 => '',
            ]
        );

        $eavSetup->addAttribute(
            Product::ENTITY,
            'correios_depth',
            [
                'type'                    => 'text',
                'label'                   => 'Correios Depth',
                'input'                   => 'text',
                'sort_order'              => 52,
                'global'                  => Attribute::SCOPE_WEBSITE,
                'user_defined'            => true,
                'required'                => false,
                'used_in_product_listing' => true,
                'apply_to'                => $productTypes,
                'group'                   => 'General',
                'unique'                  => false,
                'visible_on_front'        => true,
                'searchable'              => false,
                'filterable'              => true,
                'comparable'              => true,
                'visible'                 => true,
                'backend'                 => '',
                'frontend'                => '',
                'class'                   => '',
                'source'                  => '',
                'default'                 => '',
            ]
        );

        $installer = $setup;
        $installer->startSetup();
        $tableName = $installer->getTable('correios_cotacoes');
        // Check if the table already exists
        if ($installer->getConnection()->isTableExists($tableName) != true) {
            $table = $installer->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'ID'
                )
                ->addColumn(
                    'servico',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Servi??o dos Correios'
                )
                ->addColumn(
                    'prazo',
                    Table::TYPE_INTEGER,
                    null,
                    ['nullable' => false],
                    'Prazo em dias para a entrega'
                )
                ->addColumn(
                    'peso',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => false],
                    'Peso do pacote'
                )
                ->addColumn(
                    'valor',
                    Table::TYPE_FLOAT,
                    null,
                    ['nullable' => false],
                    'Valor da entrega'
                )
                ->addColumn(
                    'cep_inicio',
                    Table::TYPE_BIGINT,
                    null,
                    ['nullable' => false],
                    'Primeiro CEP da Faixa'
                )
                ->addColumn(
                    'cep_fim',
                    Table::TYPE_BIGINT,
                    null,
                    ['nullable' => false],
                    '??ltimo CEP da Faixa'
                )
                ->addColumn(
                    'ultimo_update',
                    Table::TYPE_DATETIME,
                    null,
                    ['nullable' => false],
                    '??ltima atualiza????o'
                )
                ->setComment('Tabela para cota????o offline do m??dulo dos Correios da Imagination Media.')
                ->setOption('type', 'InnoDB')
                ->setOption('charset', 'utf8');
            $installer->getConnection()->createTable($table);
        }

    }
}