<?php
namespace TARS\AnnuaireTars\Domain\Model;

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
 * Contact
 */
class Contact extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';
    
    /**
     * Prénom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $prenom = '';
    
    /**
     * Téléphone
     *
     * @var string
     */
    protected $telephone = '';
    
    /**
     * Email
     *
     * @var string
     * @validate NotEmpty
     */
    protected $email = '';
    
    /**
     * Adresse
     *
     * @var string
     */
    protected $adresse = '';
    
    /**
     * Code Postal
     *
     * @var string
     */
    protected $codepostal = '';
    
    /**
     * Ville
     *
     * @var string
     */
    protected $ville = '';
    
    /**
     * Photo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $photo = null;
    
    /**
     * Présentation
     *
     * @var string
     */
    protected $presentation = '';
    
    /**
     * Organisme
     *
     * @var \TARS\AnnuaireTars\Domain\Model\Organisme
     */
    protected $organisme = null;
    
    /**
     * Fonction
     *
     * @var \TARS\AnnuaireTars\Domain\Model\Fonction
     */
    protected $fonction = null;
    
    /**
     * Service
     *
     * @var \TARS\AnnuaireTars\Domain\Model\Service
     */
    protected $service = null;
    
    /**
     * Returns the nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * Sets the nom
     *
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * Returns the prenom
     *
     * @return string $prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    /**
     * Sets the prenom
     *
     * @param string $prenom
     * @return void
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    /**
     * Returns the telephone
     *
     * @return string $telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    /**
     * Sets the telephone
     *
     * @param string $telephone
     * @return void
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    /**
     * Returns the codepostal
     *
     * @return string $codepostal
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }
    
    /**
     * Sets the codepostal
     *
     * @param string $codepostal
     * @return void
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;
    }
    
    /**
     * Returns the ville
     *
     * @return string $ville
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    /**
     * Sets the ville
     *
     * @param string $ville
     * @return void
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    
    /**
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    
    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }
    
    /**
     * Returns the presentation
     *
     * @return string $presentation
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
    
    /**
     * Sets the presentation
     *
     * @param string $presentation
     * @return void
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        
    }
    
    /**
     * Returns the organisme
     *
     * @return \TARS\AnnuaireTars\Domain\Model\Organisme $organisme
     */
    public function getOrganisme()
    {
        return $this->organisme;
    }
    
    /**
     * Sets the organisme
     *
     * @param \TARS\AnnuaireTars\Domain\Model\Organisme $organisme
     * @return void
     */
    public function setOrganisme(\TARS\AnnuaireTars\Domain\Model\Organisme $organisme)
    {
        $this->organisme = $organisme;
    }
    
    /**
     * Returns the fonction
     *
     * @return \TARS\AnnuaireTars\Domain\Model\Fonction $fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }
    
    /**
     * Sets the fonction
     *
     * @param \TARS\AnnuaireTars\Domain\Model\Fonction $fonction
     * @return void
     */
    public function setFonction(\TARS\AnnuaireTars\Domain\Model\Fonction $fonction)
    {
        $this->fonction = $fonction;
    }
    
    /**
     * Returns the service
     *
     * @return \TARS\AnnuaireTars\Domain\Model\Service $service
     */
    public function getService()
    {
        return $this->service;
    }
    
    /**
     * Sets the service
     *
     * @param \TARS\AnnuaireTars\Domain\Model\Service $service
     * @return void
     */
    public function setService(\TARS\AnnuaireTars\Domain\Model\Service $service)
    {
        $this->service = $service;
    }

}