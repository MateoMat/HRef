<?php

namespace href\hrefBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use href\hrefBundle\Entity\Structure;

//php app/console doctrine:fixtures:load

class LoadStructureData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $structure = new Structure();
        $structure->setLevel(1);
        $structure->setPosition('General Manager');
        $structure->setPromoLine(0);
        $structure->setSymbol('GM');
        $structure->setSuperiorId(0);
        $structure->setUser($this->getReference('user'));
        $manager->persist($structure);


        $structure1 = new Structure();
        $structure1->setLevel(1);
        $structure1->setPosition('Bussines Unit Director');
        $structure1->setPromoLine(0);
        $structure1->setSymbol('BUD');
        $structure1->setSuperiorId(1);
        $manager->persist($structure1);


        $structure2 = new Structure();
        $structure2->setLevel(2);
        $structure2->setPosition('Field Force Manager');
        $structure2->setPromoLine('0');
        $structure2->setSymbol('FF');
        $structure2->setSuperiorId(1);
        $manager->persist($structure2);


        $structure3 = new Structure();
        $structure3->setLevel(3);
        $structure3->setPosition('District Manager');
        $structure3->setPromoLine('PF');
        $structure3->setSymbol('DM1');
        $structure3->setSuperiorId(2);
        $manager->persist($structure3);


        $structure4 = new Structure();
        $structure4->setLevel(3);
        $structure4->setPosition('District Manager');
        $structure4->setPromoLine('PF');
        $structure4->setSymbol('DM2');
        $structure4->setSuperiorId(2);
        $manager->persist($structure4);


        $structure5 = new Structure();
        $structure5->setLevel(3);
        $structure5->setPosition('District Manager');
        $structure5->setPromoLine('PF');
        $structure5->setSymbol('DM3');
        $structure5->setSuperiorId(2);
        $manager->persist($structure5);


        $structure6 = new Structure();
        $structure6->setLevel(3);
        $structure6->setPosition('District Manager');
        $structure6->setPromoLine('PF');
        $structure6->setSymbol('DM4');
        $structure6->setSuperiorId(2);
        $manager->persist($structure6);


        $structure7 = new Structure();
        $structure7->setLevel(3);
        $structure7->setPosition('District Manager');
        $structure7->setPromoLine('PF');
        $structure7->setSymbol('DM5');
        $structure7->setSuperiorId(2);
        $manager->persist($structure7);


        $structure8 = new Structure();
        $structure8->setLevel(3);
        $structure8->setPosition('District Manager');
        $structure8->setPromoLine('PF');
        $structure8->setSymbol('DM6');
        $structure8->setSuperiorId(2);
        $manager->persist($structure8);


        $structure9 = new Structure();
        $structure9->setLevel(3);
        $structure9->setPosition('District Manager');
        $structure9->setPromoLine('PF');
        $structure9->setSymbol('DM7');
        $structure9->setSuperiorId(2);
        $manager->persist($structure9);


        $structure10 = new Structure();
        $structure10->setLevel(3);
        $structure10->setPosition('District Manager');
        $structure10->setPromoLine('PF');
        $structure10->setSymbol('DM8');
        $structure10->setSuperiorId(2);

        $manager->persist($structure10);


        $structure11 = new Structure();
        $structure11->setLevel(3);
        $structure11->setPosition('District Manager');
        $structure11->setPromoLine('KAM');
        $structure11->setSymbol('KAM1');
        $structure11->setSuperiorId(2);
        $manager->persist($structure11);


        $structure12 = new Structure();
        $structure12->setLevel(4);
        $structure12->setPosition('Representative');
        $structure12->setPromoLine('PF');
        $structure12->setSymbol('DM8_1');
        $structure12->setSuperiorId(4);
        $manager->persist($structure12);







        $manager->flush();

//        $this->addReference('admin-user', $userAdmin);
    }

    public function getOrder()
    {
        return 2;
    }
}