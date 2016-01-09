<?php
/**
 * Msd_Statistics extension
 *
 * @package   Msd_Statistics
 * @copyright 2015 Anna Völkl
 * @license   OSL-3.0 - See LICENSE.md for license details.
 * @author    Anna Völkl <anna@voelkl.at>
 */

namespace Msd\Statistics\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    /**
     * Default customer account page
     *
     * @return void
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
?>