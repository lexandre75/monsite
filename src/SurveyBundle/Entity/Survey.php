<?php
namespace SurveyBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Survey
{
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getForceQuestion()
    {
        return $this->forceQuestion;
    }

    /**
     * @param mixed $forceQuestion
     */
    public function setForceQuestion($forceQuestion)
    {
        $this->forceQuestion = $forceQuestion;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $options;

    /**
     * @ORM\ManyToOne(targetEntity="SurveyBundle\Entity\ForceQuestion", inversedBy="survey")
     * @ORM\JoinColumn(name="force_question_id", referencedColumnName="id")
     */
    private $forceQuestion;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="survey")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $creator;
}