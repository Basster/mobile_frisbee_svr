<?php

/**
 * player actions.
 *
 * @package    MobileFrisbeeServer
 * @subpackage player
 * @author     basster
 * @version    
 */
class playerActions extends sfActions {

    public function executeLogin(sfWebRequest $request) {
        $erg = null;

        if ($request->hasParameter('u') && $request->hasParameter('p')) {
            $erg = Doctrine_Core::getTable('FrisbeePlayer')->getUserKey($request->getParameter('u'), $request->getParameter('p'));
        }

        //Content setzen
        $this->renderText(json_encode(array('user_key' => $erg)));

        //keinen View laden
        return sfView::NONE;
    }

}
