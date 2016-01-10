<?php
/**
 * Msd_Statistics extension
 *
 * @package   Msd_Statistics
 * @copyright 2015 Anna Völkl
 * @license   OSL-3.0 - See LICENSE.md for license details.
 * @author    Anna Völkl <anna@voelkl.at>
 */

namespace Msd\Statistics\Block;

use Msd\Statistics\Api\Data\StatisticsInterface;
use Msd\Statistics\Model\ResourceModel\Statistics\Collection as StatisticsCollection;

class Statistics extends \Magento\Framework\View\Element\Template {

    /**
     * @var \Msd\Statistics\Model\ResourceModel\Statistics\CollectionFactory
     */
    protected $statisticsCollectionFactory;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Msd\Statistics\Model\ResourceModel\Statistics\CollectionFactory $statisticsCollectionFactory,
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Msd\Statistics\Model\ResourceModel\Statistics\CollectionFactory $statisticsCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->statisticsCollectionFactory = $statisticsCollectionFactory;
    }

    public function _prepareLayout() {
        return parent::_prepareLayout();
    }

    /**
     * @return \Msd\Statistics\Model\ResourceModel\Statistics\Collection
     */
    public function getStatistics() {

        if (!$this->hasData('statistics')) {
            $statistics = $this->statisticsCollectionFactory->create();
            /*
            $statistics->addOrder(
                StatisticsInterface::DATE,
                StatisticsCollection::SORT_ORDER_ASC
             );*/

            $this->setStatistics($statistics);
        }

        return $this->getData('statistics');
    }

}