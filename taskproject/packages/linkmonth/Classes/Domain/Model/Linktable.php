<?php

declare(strict_types=1);

namespace Linkmonth\Linkmonth\Domain\Model;


/**
 * This file is part of the "linkmonth" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Marouan Kharrat <kharrat_marouan.info@yahoo.com>
 */

/**
 * Linktable
 */
class Linktable extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * linkUrl
     *
     * @var string
     */
    protected $linkUrl = null;

    /**
     * linkText
     *
     * @var string
     */
    protected $linkText = null;

    /**
     * month
     *
     * @var int
     */
    protected $month = null;

    /**
     * Returns the linkUrl
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

    /**
     * Sets the linkUrl
     *
     * @param string $linkUrl
     * @return void
     */
    public function setLinkUrl(string $linkUrl)
    {
        $this->linkUrl = $linkUrl;
    }

    /**
     * Returns the linkText
     *
     * @return string
     */
    public function getLinkText()
    {
        return $this->linkText;
    }

    /**
     * Sets the linkText
     *
     * @param string $linkText
     * @return void
     */
    public function setLinkText(string $linkText)
    {
        $this->linkText = $linkText;
    }

    /**
     * Returns the month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Sets the month
     *
     * @param int $month
     * @return void
     */
    public function setMonth(int $month)
    {
        $this->month = $month;
    }
}
