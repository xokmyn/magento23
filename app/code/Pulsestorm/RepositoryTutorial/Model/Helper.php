<?php
namespace Pulsestorm\RepositoryTutorial\Model;
/**
 * Example of automatic constructor dependency injection
 * for repository and filter objects
 */
class Helper
{
    protected $pageRepository;
    protected $productRepository;
    protected $filterBuilder;
    protected $filterGroupBuilder;
    protected $searchCriteriaBuilder;

    public function __construct(
        \Magento\Cms\Model\PageRepository $pageRepository,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        \Magento\Framework\Api\FilterBuilder $filterBuilder,
        \Magento\Framework\Api\Search\FilterGroupBuilder $filterGroupBuilder,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder
    )
    {
        $this->pageRepository           = $pageRepository;
        $this->productRepository        = $productRepository;
        $this->filterBuilder            = $filterBuilder;
        $this->filterGroupBuilder       = $filterGroupBuilder;
        $this->searchCriteriaBuilder    = $searchCriteriaBuilder;
    }
}