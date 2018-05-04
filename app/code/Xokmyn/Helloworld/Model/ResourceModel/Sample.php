<?php
/**
 * Created by PhpStorm.
 * User: xokmyn
 * Date: 5/4/18
 * Time: 12:09 PM
 */

namespace Xokmyn\Helloworld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Sample extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('xokmyn_sampletable', 'id');
    }

}