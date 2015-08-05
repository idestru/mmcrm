<?php

namespace Idestru\MMCrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientOrder
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Idestru\MMCrmBundle\Entity\ClientOrderRepository")
 */
class ClientOrder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=30)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="material", type="string", length=30)
     */
    private $material;

    /**
     * @var integer
     *
     * @ORM\Column(name="variant", type="integer")
     */
    private $variant;

    /**
     * @var string
     *
     * @ORM\Column(name="tasks", type="string", length=255)
     */
    private $tasks;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="done_at", type="datetime")
     */
    private $doneAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return ClientOrder
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return ClientOrder
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return ClientOrder
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set material
     *
     * @param string $material
     * @return ClientOrder
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return string 
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set variant
     *
     * @param integer $variant
     * @return ClientOrder
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * Get variant
     *
     * @return integer 
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Set tasks
     *
     * @param string $tasks
     * @return ClientOrder
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get tasks
     *
     * @return string 
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return ClientOrder
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set doneAt
     *
     * @param \DateTime $doneAt
     * @return ClientOrder
     */
    public function setDoneAt($doneAt)
    {
        $this->doneAt = $doneAt;

        return $this;
    }

    /**
     * Get doneAt
     *
     * @return \DateTime 
     */
    public function getDoneAt()
    {
        return $this->doneAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ClientOrder
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
