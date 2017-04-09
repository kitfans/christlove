<?php

namespace KitFriendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberInfo
 *
 * @ORM\Table(name="member_info")
 * @ORM\Entity(repositoryClass="KitFriendBundle\Repository\MemberInfoRepository")
 */
class MemberInfo
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
     * @var string
     *
     * @ORM\Column(name="school", type="string", length=32)
     */
    private $school;

    /**
     * @var string
     *
     * @ORM\Column(name="graduate", type="string", length=4)
     */
    private $graduate;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=32)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=32)
     */
    private $profession;

    /**
     * @var int
     *
     * @ORM\Column(name="work", type="smallint", nullable=true)
     */
    private $work;

    /**
     * @var int
     *
     * @ORM\Column(name="company", type="smallint", nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=32, nullable=true)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=32)
     */
    private $job;

    /**
     * @var int
     *
     * @ORM\Column(name="marriage", type="smallint", nullable=true)
     */
    private $marriage;

    /**
     * @var int
     *
     * @ORM\Column(name="income", type="smallint", nullable=true)
     */
    private $income;

    /**
     * @var int
     *
     * @ORM\Column(name="house", type="smallint", nullable=true)
     */
    private $house;

    /**
     * @var string
     *
     * @ORM\Column(name="native", type="string", length=32, nullable=true)
     */
    private $native;

    /**
     * @var string
     *
     * @ORM\Column(name="introduction", type="string", length=255)
     */
    private $introduction;

    /**
     * @var int
     *
     * @ORM\Column(name="belief", type="smallint", nullable=true)
     */
    private $belief;

    /**
     * @var string
     *
     * @ORM\Column(name="baptize", type="string", length=4)
     */
    private $baptize;

    /**
     * @var string
     *
     * @ORM\Column(name="church", type="string", length=32)
     */
    private $church;

    /**
     * @var int
     *
     * @ORM\Column(name="pray_time", type="smallint")
     */
    private $prayTime;

    /**
     * @var int
     *
     * @ORM\Column(name="bible_time", type="smallint")
     */
    private $bibleTime;

    /**
     * @var string
     *
     * @ORM\Column(name="faith", type="string", length=255)
     */
    private $faith;

    /**
     * @var int
     *
     * @ORM\Column(name="smoking", type="smallint")
     */
    private $smoking;

    /**
     * @var int
     *
     * @ORM\Column(name="nature", type="smallint", nullable=true)
     */
    private $nature;

    /**
     * @var int
     *
     * @ORM\Column(name="drink", type="smallint")
     */
    private $drink;

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="smallint")
     */
    private $parent;

    /**
     * @var int
     *
     * @ORM\Column(name="cooking", type="smallint")
     */
    private $cooking;

    /**
     * @var string
     *
     * @ORM\Column(name="hobby", type="string", length=255)
     */
    private $hobby;

    /**
     * @var string
     *
     * @ORM\Column(name="special", type="string", length=255)
     */
    private $special;

    /**
     * @var string
     *
     * @ORM\Column(name="habit", type="string", length=255)
     */
    private $habit;

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
     * @return MemberInfo
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
     * Set school
     *
     * @param string $school
     *
     * @return MemberInfo
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set graduate
     *
     * @param string $graduate
     *
     * @return MemberInfo
     */
    public function setGraduate($graduate)
    {
        $this->graduate = $graduate;

        return $this;
    }

    /**
     * Get graduate
     *
     * @return string
     */
    public function getGraduate()
    {
        return $this->graduate;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return MemberInfo
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return MemberInfo
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set work
     *
     * @param integer $work
     *
     * @return MemberInfo
     */
    public function setWork($work)
    {
        $this->work = $work;

        return $this;
    }

    /**
     * Get work
     *
     * @return int
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set company
     *
     * @param integer $company
     *
     * @return MemberInfo
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return int
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set industry
     *
     * @param string $industry
     *
     * @return MemberInfo
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return MemberInfo
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set marriage
     *
     * @param integer $marriage
     *
     * @return MemberInfo
     */
    public function setMarriage($marriage)
    {
        $this->marriage = $marriage;

        return $this;
    }

    /**
     * Get marriage
     *
     * @return int
     */
    public function getMarriage()
    {
        return $this->marriage;
    }

    /**
     * Set income
     *
     * @param integer $income
     *
     * @return MemberInfo
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
     * @return MemberInfo
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
     * Set native
     *
     * @param string $native
     *
     * @return MemberInfo
     */
    public function setNative($native)
    {
        $this->native = $native;

        return $this;
    }

    /**
     * Get native
     *
     * @return string
     */
    public function getNative()
    {
        return $this->native;
    }

    /**
     * Set introduction
     *
     * @param string $introduction
     *
     * @return MemberInfo
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;

        return $this;
    }

    /**
     * Get introduction
     *
     * @return string
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set belief
     *
     * @param integer $belief
     *
     * @return MemberInfo
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
     * Set baptize
     *
     * @param string $baptize
     *
     * @return MemberInfo
     */
    public function setBaptize($baptize)
    {
        $this->baptize = $baptize;

        return $this;
    }

    /**
     * Get baptize
     *
     * @return string
     */
    public function getBaptize()
    {
        return $this->baptize;
    }

    /**
     * Set church
     *
     * @param string $church
     *
     * @return MemberInfo
     */
    public function setChurch($church)
    {
        $this->church = $church;

        return $this;
    }

    /**
     * Get church
     *
     * @return string
     */
    public function getChurch()
    {
        return $this->church;
    }

    /**
     * Set prayTime
     *
     * @param integer $prayTime
     *
     * @return MemberInfo
     */
    public function setPrayTime($prayTime)
    {
        $this->prayTime = $prayTime;

        return $this;
    }

    /**
     * Get prayTime
     *
     * @return int
     */
    public function getPrayTime()
    {
        return $this->prayTime;
    }

    /**
     * Set bibleTime
     *
     * @param integer $bibleTime
     *
     * @return MemberInfo
     */
    public function setBibleTime($bibleTime)
    {
        $this->bibleTime = $bibleTime;

        return $this;
    }

    /**
     * Get bibleTime
     *
     * @return int
     */
    public function getBibleTime()
    {
        return $this->bibleTime;
    }

    /**
     * Set faith
     *
     * @param string $faith
     *
     * @return MemberInfo
     */
    public function setFaith($faith)
    {
        $this->faith = $faith;

        return $this;
    }

    /**
     * Get faith
     *
     * @return string
     */
    public function getFaith()
    {
        return $this->faith;
    }

    /**
     * Set smoking
     *
     * @param integer $smoking
     *
     * @return MemberInfo
     */
    public function setSmoking($smoking)
    {
        $this->smoking = $smoking;

        return $this;
    }

    /**
     * Get smoking
     *
     * @return int
     */
    public function getSmoking()
    {
        return $this->smoking;
    }

    /**
     * Set nature
     *
     * @param integer $nature
     *
     * @return MemberInfo
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return int
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set drink
     *
     * @param integer $drink
     *
     * @return MemberInfo
     */
    public function setDrink($drink)
    {
        $this->drink = $drink;

        return $this;
    }

    /**
     * Get drink
     *
     * @return int
     */
    public function getDrink()
    {
        return $this->drink;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     *
     * @return MemberInfo
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return int
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set cooking
     *
     * @param integer $cooking
     *
     * @return MemberInfo
     */
    public function setCooking($cooking)
    {
        $this->cooking = $cooking;

        return $this;
    }

    /**
     * Get cooking
     *
     * @return int
     */
    public function getCooking()
    {
        return $this->cooking;
    }

    /**
     * Set hobby
     *
     * @param string $hobby
     *
     * @return MemberInfo
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;

        return $this;
    }

    /**
     * Get hobby
     *
     * @return string
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set special
     *
     * @param string $special
     *
     * @return MemberInfo
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return string
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set habit
     *
     * @param string $habit
     *
     * @return MemberInfo
     */
    public function setHabit($habit)
    {
        $this->habit = $habit;

        return $this;
    }

    /**
     * Get habit
     *
     * @return string
     */
    public function getHabit()
    {
        return $this->habit;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return MemberInfo
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
     * @return MemberInfo
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

