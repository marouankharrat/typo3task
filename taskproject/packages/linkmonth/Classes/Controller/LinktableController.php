<?php

declare(strict_types=1);

namespace Linkmonth\Linkmonth\Controller;


/**
 * This file is part of the "linkmonth" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Marouan Kharrat <kharrat_marouan.info@yahoo.com>
 */

/**
 * LinktableController
 */
class LinktableController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * linktableRepository
     *
     * @var \Linkmonth\Linkmonth\Domain\Repository\LinktableRepository
     */
    protected $linktableRepository = null;

    /**
     * @param \Linkmonth\Linkmonth\Domain\Repository\LinktableRepository $linktableRepository
     */
    public function injectLinktableRepository(\Linkmonth\Linkmonth\Domain\Repository\LinktableRepository $linktableRepository)
    {
        $this->linktableRepository = $linktableRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $currentMonth = date('m');
        $linktables = $this->linktableRepository->findByMonth($currentMonth)->getQuery()->setLimit(1)->execute();
        $this->view->assign('linktables', $linktables);
        return $this->htmlResponse();
    }
}