<?php

namespace sky-pocket

class Main extends PluginBase implements Listener 
{
 public function onEnable()
 {
   $this->getServer()->getPluginManager()->registerEvents($this, $this);
 }  
 public function onDeath(PlayerDeathEvent $event)
 {
   
 }
}
