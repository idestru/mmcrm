<?php

namespace Idestru\MMCrmBundle\DataFixtures\ORM\CLientOrder;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Idestru\MMCrmBundle\Entity\ClientOrder;
use Symfony\Component\Yaml\Parser;

class LoadClientOrderData implements FixtureInterface {
    
    public function load(ObjectManager $manager)
    {
        $fileData = dirname(__FILE__).'/order.yml';
        if (file_exists($fileData)) {
            $yaml = new Parser();
            $items = $yaml->parse(file_get_contents($fileData));
            foreach ($items as $item) {
                $clientOrder = new ClientOrder();
                $clientOrder->setCreatedAt(new \DateTime());
                $clientOrder->setDoneAt(new \DateTime('tomorrow'));
                $clientOrder->setFirstName($item['firstName']);
                $clientOrder->setLastName($item['lastName']);
                $clientOrder->setMaterial($item['material']);
                $clientOrder->setPhoneNumber($item['phoneNumber']);
                $clientOrder->setPrice($item['price']);
                $clientOrder->setTasks($item['tasks']);
                $clientOrder->setVariant($item['variant']);
        
                $manager->persist($clientOrder);
            }
            $manager->flush();
        }
    }
}