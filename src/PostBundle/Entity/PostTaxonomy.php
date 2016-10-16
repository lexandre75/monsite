<?php
namespace PostBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class PostTaxonomy
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(nullable=true)
     */
    private $Order;

    /**
     * @ORM\ManyToOne(targetEntity="PostBundle\Entity\Taxonomy", inversedBy="postTaxonomy")
     * @ORM\JoinColumn(name="taxonomy_id", referencedColumnName="id")
     */
    private $taxonomy;
}