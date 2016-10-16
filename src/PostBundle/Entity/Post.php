<?php
namespace PostBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={
 *         @ORM\Index(name="date_index", columns={"post_date_published"}),
 *         @ORM\Index(name="slug_index", columns={"slug"})
 *     })
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $post_date_published;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $post_date_end;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $published;

    /**
     * @ORM\OneToMany(targetEntity="PostBundle\Entity\Post", mappedBy="parent")
     */
    private $child;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="post")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $creator;

    /**
     * @ORM\ManyToOne(targetEntity="PostBundle\Entity\Post", inversedBy="child")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $parent;

    /**
     * @ORM\ManyToMany(targetEntity="PostBundle\Entity\Ressource", inversedBy="post")
     * @ORM\JoinTable(
     *     name="PostRessource",
     *     joinColumns={@ORM\JoinColumn(name="post_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="ressource_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $ressource;
}