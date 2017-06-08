<?php

namespace TARS\AnnuaireTars\Tests\Unit\Domain\Model;

/***************************************************************
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \TARS\AnnuaireTars\Domain\Model\Service.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Tiphaine GIRARDOT <tiphaine.girardot@etu.u-bordeaux.fr>
 * @author Romain DURADE <romain.durade@etu.u-bordeaux.fr>
 * @author Alexandre DUVIVIERS <alexandre.duviviers@etu.u-bordeaux.fr>
 * @author Sylvain METAYER <sylvain.metayer@etu.u-bordeaux.fr>
 */
class ServiceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \TARS\AnnuaireTars\Domain\Model\Service
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \TARS\AnnuaireTars\Domain\Model\Service();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getLibelleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLibelle()
		);
	}

	/**
	 * @test
	 */
	public function setLibelleForStringSetsLibelle()
	{
		$this->subject->setLibelle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'libelle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBatimentReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBatiment()
		);
	}

	/**
	 * @test
	 */
	public function setBatimentForStringSetsBatiment()
	{
		$this->subject->setBatiment('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'batiment',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBureauReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBureau()
		);
	}

	/**
	 * @test
	 */
	public function setBureauForStringSetsBureau()
	{
		$this->subject->setBureau('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bureau',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTelephone()
		);
	}

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone()
	{
		$this->subject->setTelephone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telephone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHorairesReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getHoraires()
		);
	}

	/**
	 * @test
	 */
	public function setHorairesForStringSetsHoraires()
	{
		$this->subject->setHoraires('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'horaires',
			$this->subject
		);
	}
}
