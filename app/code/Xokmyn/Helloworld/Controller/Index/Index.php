<?php
namespace Xokmyn\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Xokmyn\Helloworld\Model\SampleFactory;

class Index extends Action
{
    /**
     * @var \Xokmyn\HelloWorld\Model\SampleFactory
     */
    protected $_modelSampleFactory;

    /**
     * @param Context $context
     * @param SampleInterfaceFactory $modelSampleInterface
     */
    public function __construct(
        Context $context,
        SampleFactory $modelSampleFactory
    ){
        $this->_modelSampleFactory = $modelSampleFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $sampleModel = $this->_modelSampleFactory->create();

        // Load the item with ID is 1
        $item = $sampleModel->load(1);
        var_dump($item->getData());

        // Get sample collection
        $sampleCollection = $sampleModel->getCollection();
        // Load all data of collection
        var_dump($sampleCollection->getData());
    }
}