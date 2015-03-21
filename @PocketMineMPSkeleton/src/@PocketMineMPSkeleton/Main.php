<?php
 
namespace Example;
 
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
 
class Main extends PluginBase{
 
        public function onLoad(){
                $this->getLogger()->info("onLoad() has been called!");
        }
 
        public function onEnable(){
                $this->getLogger()->info("onEnable() has been called!");
                $this->getServer()->getPluginManager()->registerEvents($this,$this);
                //This line above is required to use additional events
                // Also must include "use pocketmine\event\player\<EventNameToUse>"
                //  You can get supported event names here: http://docs.pocketmine.net/d3/daf/namespacepocketmine_1_1event.html
                //   expand the events on the left column to see the choices.  Ex. "use pocketmine\event\player\PlayerJoinEvent"
        }
 
		public function onDisable() {
				$this->getLogger()->info("onDisable() has been called!");
		
	}
}