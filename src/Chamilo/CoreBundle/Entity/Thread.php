<?php

namespace Chamilo\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 * @ORM\Table(name="thread")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Chamilo\UserBundle\Entity\User")
     */
    protected $createdBy;

    /**
     * @ORM\OneToMany(
     *   targetEntity="Chamilo\CoreBundle\Entity\Message",
     *   mappedBy="thread"
     * )
     * @var Message[]|\Doctrine\Common\Collections\Collection
     */
    protected $messages;

    /**
     * @ORM\OneToMany(
     *   targetEntity="Chamilo\CoreBundle\Entity\ThreadMetadata",
     *   mappedBy="thread",
     *   cascade={"all"}
     * )
     * @var ThreadMetadata[]|\Doctrine\Common\Collections\Collection
     */
    protected $metadata;
}
