<?php
namespace SurveyBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class ForceQuestion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $include;

    /**
     * @ORM\OneToMany(targetEntity="SurveyBundle\Entity\Survey", mappedBy="forceQuestion")
     */
    private $survey;

    /**
     * @ORM\ManyToOne(targetEntity="SurveyBundle\Entity\Question", inversedBy="forceQuestion")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;
}