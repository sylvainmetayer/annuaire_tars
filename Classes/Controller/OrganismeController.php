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
     * contactRepository
     *
     * @var \TARS\AnnuaireTars\Domain\Repository\ContactRepository
     * @inject
     */
    protected $contactRepository = NULL;

    /**
     * action list
     *
     * @return void
     */
    public function listAction(\TARS\AnnuaireTars\Query\OrganismeSearch $query = null)
    {
      if(!empty($query) && !empty($query->getKeywords())) {
          $keywords = explode(' ', $query->getKeywords());
          $organismes = $this->organismeRepository->search($keywords);
      } else {
          $organismes = $this->organismeRepository->findAll();
      }

        $this->view->assign('organismes', $organismes);
        $this->view->assign('query', $query);
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
     * @param \TARS\AnnuaireTars\Domain\Model\Organisme $organisme
     * @return void
     */
    public function contactListAction(\TARS\AnnuaireTars\Domain\Model\Organisme $organisme)
    {

      //var_dump($organisme);
      //die();

      $contacts = $this->contactRepository->findByOrganisme($organisme);
      $this->view->assignMultiple(['organisme' =>$organisme, 'contacts' => $contacts]);


    }

    /**
     * action serviceList
     *
     * @return void
     */
    public function serviceListAction(\TARS\AnnuaireTars\Domain\Model\Organisme $organisme)
    {
            $contacts = $this->contactRepository->findByOrganisme($organisme);
            $services = [];
            foreach ($contacts as $contact) {
              if($contact->getService() ) {
                $services[$contact->getService()->getUid()] = $contact->getService();
              }
            }
            $this->view->assignMultiple(['organisme' =>$organisme, 'services' => $services]);

    }

    /**
     * action serviceShow
     *
     * @return void
     */
    public function serviceShowAction(\TARS\AnnuaireTars\Domain\Model\Organisme $organisme)
    {

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
