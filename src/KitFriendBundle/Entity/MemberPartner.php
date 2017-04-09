<?php

namespace KitFriendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberPartner
 *
 * @ORM\Table(name="member_partner")
 * @ORM\Entity(repositoryClass="KitFriendBundle\Repository\MemberPartnerRepository")
 */
class MemberPartner
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var int
     *
     * @ORM\Column(name="belief", type="smallint", nullable=true)
     */
    private $belief;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="smallint")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="mariage", type="smallint")
     */
    private $mariage;

    /**
     * @var int
     *
     * @ORM\Column(name="income", type="smallint")
     */
    private $income;

    /**
     * @var int
     *
     * @ORM\Column(name="house", type="smallint")
     */
    private $house;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="smallint")
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="smallint")
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="native", type="smallint")
     */
    private $native;

    /**
     * @var int
     *
     * @ORM\Column(name="city", type="smallint")
     */
    private $city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime")
     */
    private $updateAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set memberId
     *
     * @param integer $memberId
     *
     * @return MemberPartner
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get memberId
     *
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * Set belief
     *
     * @param integer $belief
     *
     * @return MemberPartner
     */
    public function setBelief($belief)
    {
        $this->belief = $belief;

        return $this;
    }

    /**
     * Get belief
     *
     * @return int
     */
    public function getBelief()
    {
        return $this->belief;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return MemberPartner
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set mariage
     *
     * @param integer $mariage
     *
     * @return MemberPartner
     */
    public function setMariage($mariage)
    {
        $this->mariage = $mariage;

        return $this;
    }

    /**
     * Get mariage
     *
     * @return int
     */
    public function getMariage()
    {
        return $this->mariage;
    }

    /**
     * Set income
     *
     * @param integer $income
     *
     * @return MemberPartner
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income
     *
     * @return int
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set house
     *
     * @param integer $house
     *
     * @return MemberPartner
     */
    public function setHouse($house)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return int
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return MemberPartner
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return MemberPartner
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set native
     *
     * @param integer $native
     *
     * @return MemberPartner
     */
    public function setNative($native)
    {
        $this->native = $native;

        return $this;
    }

    /**
     * Get native
     *
     * @return int
     */
    public function getNative()
    {
        return $this->native;
    }

    /**
     * Set city
     *
     * @param integer $city
     *
     * @return MemberPartner
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return int
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return MemberPartner
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return MemberPartner
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }
}

