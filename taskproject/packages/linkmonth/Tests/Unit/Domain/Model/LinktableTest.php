<?php

declare(strict_types=1);

namespace Linkmonth\Linkmonth\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Marouan Kharrat <kharrat_marouan.info@yahoo.com>
 */
class LinktableTest extends UnitTestCase
{
    /**
     * @var \Linkmonth\Linkmonth\Domain\Model\Linktable|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Linkmonth\Linkmonth\Domain\Model\Linktable::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLinkUrlReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLinkUrl()
        );
    }

    /**
     * @test
     */
    public function setLinkUrlForStringSetsLinkUrl(): void
    {
        $this->subject->setLinkUrl('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('linkUrl'));
    }

    /**
     * @test
     */
    public function getLinkTextReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLinkText()
        );
    }

    /**
     * @test
     */
    public function setLinkTextForStringSetsLinkText(): void
    {
        $this->subject->setLinkText('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('linkText'));
    }

    /**
     * @test
     */
    public function getMonthReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getMonth()
        );
    }

    /**
     * @test
     */
    public function setMonthForIntSetsMonth(): void
    {
        $this->subject->setMonth(12);

        self::assertEquals(12, $this->subject->_get('month'));
    }
}
