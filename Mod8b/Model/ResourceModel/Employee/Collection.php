<?php


namespace Hummingbird\Mod8b\Model\ResourceModel\Employee;


use Hummingbird\Mod8b\Model\Employee;
use Hummingbird\Mod8b\Model\ResourceModel\Employee as EmployeeResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Employee::class, EmployeeResourceModel::class);
    }
}