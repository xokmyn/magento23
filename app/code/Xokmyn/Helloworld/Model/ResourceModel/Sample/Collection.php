<?php
/**
 * Created by PhpStorm.
 * User: xokmyn
 * Date: 5/4/18
 * Time: 12:14 PM
 */

namespace Xokmyn\Helloworld\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
    */
    protected function _construct()
    {
        $this->_init(
            'Xokmyn\Helloworld\Model\Sample',
            'Xokmyn\Helloworld\Model\ResourceModel\Sample'
        );
    }

}