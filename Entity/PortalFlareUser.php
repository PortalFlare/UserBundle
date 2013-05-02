<?php
namespace PortalFlare\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\MappedSuperClass
 */
class PortalFlareUser extends BaseUser {
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var string
   *
   * @ORM\Column(nullable=true)
   */
  protected $displayname;

  public function __construct() {
    parent::__construct();
  }

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set displayname
   *
   * @param string
   * @return User
   */
  public function setDisplayName($name) {
    $this->displayname = $name;

    return $this;
  }

  /**
   * Get displayname
   *
   * @return string
   */
  public function getDisplayName() {
    return $this->displayname;
  }

}