<?php

/**
 * game actions.
 *
 * @package    MobileFrisbeeServer
 * @subpackage game
 * @author     basster
 * @version    
 */
class gameActions extends sfActions {
    
    public function executeCreate(sfWebRequest $request) {
        
        $erg = null;
        
        if ($request->hasParameter('key')) {
            $user = Doctrine_Core::getTable('FrisbeePlayer')->getUserByKey($request->getParameter('key'));
            
            if (!is_null($user)) {
                $game = new FrisbeeGame();
                $game->setHost($user);
                $game->setLat($request->getParameter('lat', '53.054741'));
                $game->setLng($request->getParameter('lng', '8.783172'));
                
                $game->save();
                
                $erg = $game->getKey();
            }
        }
        
        //Content setzen
        $this->renderText(json_encode(array('game_id' => $erg)));

        //keinen View laden
        return sfView::NONE;
    }
    
    public function executeFindNear(sfWebRequest $request) {
        
    }
    
    public function executeLogin(sfWebRequest $request) {
        
    }
}
