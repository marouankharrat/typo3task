<?php

declare(strict_types=1);

namespace Linkmonth\Linkmonth\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Marouan Kharrat <kharrat_marouan.info@yahoo.com>
 */
class LinktableControllerTest extends UnitTestCase
{
    /**
     * @var \Linkmonth\Linkmonth\Controller\LinktableController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Linkmonth\Linkmonth\Controller\LinktableController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllLinktablesFromRepositoryAndAssignsThemToView(): void
    {
        $allLinktables = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $linktableRepository = $this->getMockBuilder(\Linkmonth\Linkmonth\Domain\Repository\LinktableRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $linktableRepository->expects(self::once())->method('findAll')->will(self::returnValue($allLinktables));
        $this->subject->_set('linktableRepository', $linktableRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('linktables', $allLinktables);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }
}
