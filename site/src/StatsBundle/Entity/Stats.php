<?php

namespace StatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Stats
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
     * @var integer
     *
     * @ORM\Column(name="totalArticle", type="integer")
     */
    private $totalArticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalMcq", type="integer")
     */
    private $totalMcq;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalQuestion", type="integer")
     */
    private $totalQuestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalStudent", type="integer")
     */
    private $totalStudent;

     /**
     * @var integer
     *
     * @ORM\Column(name="totalTeacher", type="integer")
     */
    private $totalTeacher;

    /**
     * @var array
     *
     * @ORM\Column(name="teacherArray", type="array")
     */
    private $teacherArray;

    /**
     * @var array
     *
     * @ORM\Column(name="studentArray", type="array")
     */
    private $studentArray;

    /**
     * @var integer
     *
     * @ORM\Column(name="coefArticle", type="integer")
     */
    private $coefArticle;

    /**
     * @var integer
     *
     * @ORM\Column(name="coefMcq", type="integer")
     */
    private $coefMcq;

    /**
     * @var integer
     *
     * @ORM\Column(name="coefQuestion", type="integer")
     */
    private $coefQuestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="coefMcqStudent", type="integer")
     */
    private $coefMcqStudent;

    /**
     * @var integer
     *
     * @ORM\Column(name="coefScore", type="integer")
     */
    private $coefScore;


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
     * Set totalArticle
     *
     * @param integer $totalArticle
     * @return Stats
     */
    public function setTotalArticle($totalArticle)
    {
        $this->totalArticle = $totalArticle;

        return $this;
    }

    /**
     * Get totalArticle
     *
     * @return integer 
     */
    public function getTotalArticle()
    {
        return $this->totalArticle;
    }

    /**
     * Set totalMcq
     *
     * @param integer $totalMcq
     * @return Stats
     */
    public function setTotalMcq($totalMcq)
    {
        $this->totalMcq = $totalMcq;

        return $this;
    }

    /**
     * Get totalMcq
     *
     * @return integer 
     */
    public function getTotalMcq()
    {
        return $this->totalMcq;
    }

    /**
     * Set totalQuestion
     *
     * @param integer $totalQuestion
     * @return Stats
     */
    public function setTotalQuestion($totalQuestion)
    {
        $this->totalQuestion = $totalQuestion;

        return $this;
    }

    /**
     * Get totalQuestion
     *
     * @return integer 
     */
    public function getTotalQuestion()
    {
        return $this->totalQuestion;
    }

    /**
     * Set totalStudent
     *
     * @param integer $totalStudent
     * @return Stats
     */
    public function setTotalStudent($totalStudent)
    {
        $this->totalStudent = $totalStudent;

        return $this;
    }

    /**
     * Get totalStudent
     *
     * @return integer 
     */
    public function getTotalStudent()
    {
        return $this->totalStudent;
    }

     /**
     * Set totalteacher
     *
     * @param integer $totalteacher
     * @return Stats
     */
    public function setTotalTeacher($totalteacher)
    {
        $this->totalteacher = $totalteacher;

        return $this;
    }

    /**
     * Get totalteacher
     *
     * @return integer 
     */
    public function getTotalTeacher()
    {
        return $this->totalteacher;
    }

    /**
     * Set teacherArray
     *
     * @param array $teacherArray
     * @return Stats
     */
    public function setTeacherArray($teacherArray)
    {
        $this->teacherArray = $teacherArray;

        return $this;
    }

    /**
     * Get teacherArray
     *
     * @return array 
     */
    public function getTeacherArray()
    {
        return $this->teacherArray;
    }

    /**
     * Set studentArray
     *
     * @param array $studentArray
     * @return Stats
     */
    public function setStudentArray($studentArray)
    {
        $this->studentArray = $studentArray;

        return $this;
    }

    /**
     * Get studentArray
     *
     * @return array 
     */
    public function getStudentArray()
    {
        return $this->studentArray;
    }

    /**
     * Set pasArticle
     *
     * @param integer $coefArticle
     * @return Stats
     */
    public function setCoefArticle($coefArticle)
    {
        $this->coefArticle = $coefArticle;

        return $this;
    }

    /**
     * Get coefArticle
     *
     * @return integer 
     */
    public function getCoefArticle()
    {
        return $this->coefArticle;
    }

    /**
     * Set coefMcq
     *
     * @param integer $coefMcq
     * @return Stats
     */
    public function setCoefMcq($coefMcq)
    {
        $this->coefMcq = $coefMcq;

        return $this;
    }

    /**
     * Get coefMcq
     *
     * @return integer 
     */
    public function getCoefMcq()
    {
        return $this->coefMcq;
    }

    /**
     * Set coefMcq
     *
     * @param integer $coefQuestion
     * @return Stats
     */
    public function setCoefQuestion($coefQuestion)
    {
        $this->coefQuestion = $coefQuestion;

        return $this;
    }

    /**
     * Get coefQuestion
     *
     * @return integer 
     */
    public function getCoefQuestion()
    {
        return $this->coefQuestion;
    }

    /**
     * Set coefMcq
     *
     * @param integer $coefMcqStudent
     * @return Stats
     */
    public function setCoefMcqStudent($coefMcqStudent)
    {
        $this->coefMcqStudent = $coefMcqStudent;

        return $this;
    }

    /**
     * Get coefMcqStudent
     *
     * @return integer 
     */
    public function getCoefMcqStudent()
    {
        return $this->coefMcqStudent;
    }

    /**
     * Set coefMcq
     *
     * @param integer $coefScore
     * @return Stats
     */
    public function setCoefScore($coefScore)
    {
        $this->coefScore = $coefScore;

        return $this;
    }

    /**
     * Get coefScore
     *
     * @return integer 
     */
    public function getCoefScore()
    {
        return $this->coefScore;
    }
}
