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
        $linktables = $this->linktableRepository->findAll();
        // Get Current Month 
        $currentMonth = date('m');
        //The final Link Table after the test between the current month and a Value of Month from Links 
        $linktables_temp = array();
        $linktables_final = array();
        foreach ($linktables as $value) {
            
           if($value->getMonth() == $currentMonth){
            array_push($linktables_temp, $value);
           }
        }

        // get just one row if many Links in one Month
        if(count($linktables_temp) > 1){
            array_push($linktables_final, $linktables_temp[0]);
            $this->view->assign('linktables', $linktables_final);
        }else{ // when we have just one Link or no Link 
            
            $this->view->assign('linktables', $linktables_temp);
        }
        return $this->htmlResponse();
    }
}