<?php
namespace Greet\Employee\Model\ResourceModel\Grid;

use Greet\Employee\Model\Grid;
use Greet\Employee\Model\ResourceModel\Grid as GridResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       
       $this->_init(Grid::class, GridResourceModel::class);
    }
}