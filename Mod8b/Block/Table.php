<?php

namespace Hummingbird\Mod8b\Block;

use Hummingbird\Mod8b\Model\ResourceModel\Employee\Collection;
use Magento\Framework\View\Element\Template;

class Table extends Template
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * Display constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    ) {
        $this->collection = $collection;
        parent::__construct($context, $data);
    }

    /**
     * @return Collection
     */
    public function getAllEmployees()
    {
        return $this->collection;
    }

    /**
     * @return string
     */
    public function getPostUrl()
    {
        return $this->getUrl('mod8b/employee/save');
    }

}

