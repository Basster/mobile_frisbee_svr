<?php

/**
 * FrisbeePlayer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    MobileFrisbeeServer
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class FrisbeePlayer extends BaseFrisbeePlayer {

    /**
     * Generiert einen MD5 Hash auf dem Primärschlüssel
     * 
     * @return string 
     */
    public function getKey() {
        return md5('player:' . $this->getId());
    }

}
