<?php


namespace Greet\Employee\Model\ResourceModel\Hamburger;


use Greet\Employee\Model\Hamburger;
use Greet\Employee\Model\ResourceModel\Hamburger as HamburgerResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Hamburger::class, HamburgerResourceModel::class);
    }
}