<?php
namespace TARS\AnnuaireTars\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Tiphaine GIRARDOT <tiphaine.girardot@etu.u-bordeaux.fr>
 *           Romain DURADE <romain.durade@etu.u-bordeaux.fr>
 *           Alexandre DUVIVIERS <alexandre.duviviers@etu.u-bordeaux.fr>
 *           Sylvain METAYER <sylvain.metayer@etu.u-bordeaux.fr>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * OrganismeController
 */
class OrganismeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * organismeRepository
     *
     * @var \TARS\AnnuaireTars\Domain\Repository\OrganismeRepository
     * @inject
     */
    protected $organismeRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $organismes = $this->organismeRepository->findAll();
        $this->view->assign('organismes', $organismes);
    }
    
    /**
     * action show
     *
     * @param \TARS\AnnuaireTars\Domain\Model\Organisme $organisme
     * @return void
     */
    public function showAction(\TARS\AnnuaireTars\Domain\Model\Organisme $organisme)
    {
        $this->view->assign('organisme', $organisme);
    }
    
    /**
     * action contactList
     *
     * @return void
     */
    public function contactListAction()
    {
        
    }
    
    /**
     * action serviceList
     *
     * @return void
     */
    public function serviceListAction()
    {
        
    }
    
    /**
     * action serviceShow
     *
     * @return void
     */
    public function serviceShowAction()
    {
        
    }

}