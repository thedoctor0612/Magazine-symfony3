<?php

namespace Mayssoun\UserBundle\Entity;
/**
 * Created by PhpStorm.
 * User: meher
 * Date: 03/07/2016
 * Time: 14:20
 */


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}