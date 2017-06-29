<?php
namespace TARS\AnnuaireTars\Controller;

use \TYPO3\CMS\Core\Utility\GeneralUtility;

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
 * ContactController
 */
class ContactController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * contactRepository
     *
     * @var \TARS\AnnuaireTars\Domain\Repository\ContactRepository
     * @inject
     */
    protected $contactRepository = NULL;
    
    /**
     * action list
     *
     * @param \TARS\AnnuaireTars\Query\ContactSearch $query
     * 
     * @return void
     */
     public function listAction(\TARS\AnnuaireTars\Query\ContactSearch $query = null)
    {
        if(!empty($query) && !empty($query->getKeywords())) {
            $keywords = explode(' ', $query->getKeywords());
            $contacts = $this->contactRepository->search($keywords);
        } else {
            $contacts = $this->contactRepository->findAll();
        }
        
        $this->view->assign('contacts', $contacts);
        $this->view->assign('query', $query);
    }
    
    /**
     * action show
     *
     * @param \TARS\AnnuaireTars\Domain\Model\Contact $contact
     * @return void
     */
    public function showAction(\TARS\AnnuaireTars\Domain\Model\Contact $contact)
    {
        $this->view->assign('contact', $contact);
    }
    
    /**
     * action search
     *
     * @return void
     */
    public function searchAction($keywords = null)
    {

    }

}