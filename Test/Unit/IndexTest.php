<?php
/**
 * Msd_Statistics extension
 *
 * @package   Msd_Statistics
 * @copyright 2015 Anna Völkl
 * @license   OSL-3.0 - See LICENSE.md for license details.
 * @author    Anna Völkl <anna@voelkl.at>
 */

namespace Msd\Statistics\Test\Unit\Controller\Index;

class IndexTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        // Create dependency mocks
        $page = $this->getMockBuilder('Magento\Framework\View\Result\Page')
            ->disableOriginalConstructor()
            ->getMock();
        $resultFactory = $this->getMockBuilder('Magento\Framework\View\Result\PageFactory')
            ->disableOriginalConstructor()
            ->getMock();

        // Set up SUT
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $model = $objectManager->getObject('Msd\Statistics\Controller\Index\Index',
            ['resultPageFactory' => $resultFactory]
        );

        // Expectations of test
        $resultFactory->expects($this->once())->method('create')->willReturn($page);
        $this->assertSame($page, $model->execute());
    }
}
