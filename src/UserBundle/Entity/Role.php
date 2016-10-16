<?php
namespace UserBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Role
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
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Role", inversedBy="parent")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", unique=true)
     */
    private $role;

    /**
     * @ORM\OneToOne(targetEntity="UserBundle\Entity\Role", mappedBy="role")
     */
    private $parent;

    /**
     * @ORM\ManyToMany(targetEntity="UserBundle\Entity\User", mappedBy="role")
     */
    private $user;
}