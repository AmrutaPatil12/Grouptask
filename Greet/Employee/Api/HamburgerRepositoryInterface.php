<?php

namespace Greet\Employee\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Greet\Employee\Api\Data\HamburgerInterface;

interface HamburgerRepositoryInterface
{
    /**
     * @param int $Feedback_No
     * @return \Greet\Employee\Api\Data\HamburgerInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($Feedback_No);

    /**
     * @param \Greet\Employee\Api\Data\HamburgerInterface $hamburger
     * @return \Greet\Employee\Api\Data\HamburgerInterface
     */
    public function save(HamburgerInterface $hamburger);

    /**
     * @param \Greet\Employee\Api\Data\HamburgerInterface $hamburger
     * @return void
     */
    public function delete(HamburgerInterface $hamburger);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Greet\Employee\Api\Data\HamburgerSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
     public function deleteById($d);
}