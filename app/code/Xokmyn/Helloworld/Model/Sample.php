<?php
/**
 * Created by PhpStorm.
 * User: xokmyn
 * Date: 5/4/18
 * Time: 12:06 PM
 */

namespace Xokmyn\Helloworld\Model;

use Magento\Framework\Model\AbstractModel;

class Sample extends AbstractModel implements SampleInterface
{

    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Xokmyn\Helloworld\Model\ResourceModel\Sample');
    }
}