<?php
namespace SurveyBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isMultiple;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isOpen;

    /**
     * @ORM\OneToMany(targetEntity="SurveyBundle\Entity\ForceQuestion", mappedBy="question")
     */
    private $forceQuestion;

    /**
     * @ORM\ManyToMany(targetEntity="PostBundle\Entity\Taxonomy", inversedBy="question")
     * @ORM\JoinTable(
     *     name="QuestionTaxonomy",
     *     joinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="taxonomy_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $taxonomy;

    /**
     * @ORM\ManyToMany(targetEntity="SurveyBundle\Entity\Response", inversedBy="question")
     * @ORM\JoinTable(
     *     name="QuestionResponse",
     *     joinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="response_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $response;
}