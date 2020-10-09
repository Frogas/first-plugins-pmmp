<?php

namespace shikukiza;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {

    public function onEnable(){
       $this->getServer()->getPluginManager()->registerEvents($this, $this);
       $this->getServer()->getLogger()->info('Enable Plugin!');
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
       switch($cmd->getName()){
           case 'test':
               if($sender instanceof Player){
                  $sender->sendMessage('Working Command!');
               }
           break;
       }
       return true;
    }

}
