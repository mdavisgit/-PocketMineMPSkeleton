<?php
 
namespace Example;
 
use pocketmine\plugin\PluginBase;
 
class Main extends PluginBase{
 
        public function onLoad(){
                $this->getLogger()->info("onLoad() has been called!");
        }
 
        public function onEnable(){
                $this->getLogger()->info("onEnable() has been called!");
        }
 
		public function onDisable() {
			
		
	}
}