<?php

namespace LightningDeath;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\entity\Entity;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\event\player\PlayerDeathEvent;

class LightningDeath extends PluginBase implements Listener{

public function onLoad(){
  $this->getLogger()->info("Preparing for lightning ...");
}

public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getLogger()->info("Watchout for lightning strikes!");
}

public function onDeath(PlayerDeathEvent $ent){

  $p = $ent->getEntity();
  $lightningbolt = new AddEntityPacket();
  $lightningbolt->type = 93;
  $lightningbolt->eid = Entity::$entityCount++;
  $lightningbolt->metadata = array();
  $lightningbolt->speedX = 0;
  $lightningbolt->speedY = 0;
  $lightningbolt->speedZ = 0;
  $lightningbolt->x = $p->x;
  $lightningbolt->y = $p->y;
  $lightningbolt->z = $p->z;
  $p->dataPacket($lightningbolt);
}

public function onDisable(){
  $this->getLogger()->info("Awww no more lightning strikes :(");
 }
}

?>
