<?php
/**
 * Msd_Statistics extension
 *
 * @package   Msd_Statistics
 * @copyright 2015 Anna Völkl
 * @license   OSL-3.0 - See LICENSE.md for license details.
 * @author    Anna Völkl <anna@voelkl.at>
 */

namespace Msd\Statistcs\Model\ResourceModel\Statistics;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('Msd\Statistics\Model\Statistics', 'Msd\Statistics\Model\ResourceModel\Statistics');
    }

}