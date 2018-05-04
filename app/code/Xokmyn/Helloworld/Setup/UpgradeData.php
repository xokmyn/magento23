<?php

namespace Xokmyn\Helloworld\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.1') < 0) {
            // Get emipro_sampletable table
            $tableName = $setup->getTable('xokmyn_sampletable');
            // Check if the table already exists
            if ($setup->getConnection()->isTableExists($tableName) == true) {
                // Declare data
                $data = [
                    [
                        'title' => 'Sample Title 1',
                        'summary' => 'Sample summary',
                        'description' => 'Sample description',
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1
                    ],
                    [
                        'title' => 'Sample Title 2',
                        'summary' => 'Sample summary',
                        'description' => 'Sample description',
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1
                    ]
                ];

                // Insert data to table
                foreach ($data as $item) {
                    $setup->getConnection()->insert($tableName, $item);
                }
            }
        }

        $setup->endSetup();
    }
}