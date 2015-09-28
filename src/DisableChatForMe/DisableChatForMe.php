<?php

namespace DisableChatForMe;


use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\Utils;
use pocketmine\plugin\PluginBase;

class DisableChatForMe extends PluginBase implements Listener{

    private $players = array();

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("[DisableChatForMe] Successfully enabled!");
    }

    public function onDisable(){
        unset($this->players);
        $this->getLogger()->info("[DisableChatForMe] Successfully disabled!");
    }

    public function onChat(PlayerChatEvent $event){
        $player = $event->getPlayer();
        if($player instanceof Player){
            if(!$event->isCancelled()){
                $user = $player->getName();
                $message = $event->getMessage();
                $chat = Utils::getURL("URL...");
                if($chat === 1){
                $event->setCancelled(true);
                }
                //$event->setCancelled();
            }
        }
    }
}
