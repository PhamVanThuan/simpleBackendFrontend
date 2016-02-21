<?php

namespace AppBundle\BackendBundle\UserBundle\Entity;

//
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }
    function getPassword() {
        return $this->password;
    }
     function getPlainPassword() {
        return $this->plainPassword;
    }

    function getEmail() {
        return $this->email;
    }

    function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    function setPlainPassword($plainPassword) {
        $this->plainPassword = $plainPassword;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Returns the user roles
     *
     * @return array The roles
     */
    public function getRoles() {
        $roles = $this->roles;


        return array_unique($roles);
    }

    public function addRole($role) {
        $role = strtoupper($role);
       
        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }

        return $this;
    }

    /**
     * Never use this to check if this user has access to anything!
     *
     * Use the SecurityContext, or an implementation of AccessDecisionManager
     * instead, e.g.
     *
     *         $securityContext->isGranted('ROLE_USER');
     *
     * @param string $role
     *
     * @return boolean
     */
    public function hasRole($role) {
        return in_array(strtoupper($role), $this->getRoles(), true);
    }

    public function __construct() {
        parent::__construct();
        // your own logic
    }

}
