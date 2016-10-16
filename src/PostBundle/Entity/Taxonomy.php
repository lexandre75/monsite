<?php
namespace PostBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Taxonomy
{
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
     * @ORM\Column(type="string", nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $count;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="PostBundle\Entity\PostTaxonomy", mappedBy="taxonomy")
     */
    private $postTaxonomy;

    /**
     * @ORM\ManyToMany(targetEntity="SurveyBundle\Entity\Question", mappedBy="taxonomy")
     */
    private $question;
}