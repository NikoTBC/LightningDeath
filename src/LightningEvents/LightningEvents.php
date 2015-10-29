<?php

namespace LightningEvents;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\entity\Entity;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;

class LightningEvents extends PluginBase implements Listener{

public function onLoad(){
  $this->getLogger()->info("Preparing for lightning ...");
}

public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getLogger()->info("Watchout for lightning strikes!");
}

public function onDeath(PlayerDeathEvent $ent){

  $player = $ent->getEntity();
  $lightningbolt = new AddEntityPacket();
  $lightningbolt->type = 93;
  $lightningbolt->eid = Entity::$entityCount++;
  $lightningbolt->metadata = array();
  $lightningbolt->speedX = 0;
  $lightningbolt->speedY = 0;
  $lightningbolt->speedZ = 0;
  $lightningbolt->x = $player->x;
  $lightningbolt->y = $player->y;
  $lightningbolt->z = $player->z;
  $player->dataPacket($lightningbolt);
}

public function onJoin(PlayerJoinEvent $ent){

  $player = $ent->getPlayer();
  $lightningbolt = new AddEntityPacket();
  $lightningbolt->type = 93;
  $lightningbolt->eid = Entity::$entityCount++;
  $lightningbolt->metadata = array();
  $lightningbolt->speedX = 0;
  $lightningbolt->speedY = 0;
  $lightningbolt->speedZ = 0;
  $lightningbolt->x = $player->x;
  $lightningbolt->y = $player->y;
  $lightningbolt->z = $player->z;
  $player->dataPacket($lightningbolt);
}

public function onQuit(PlayerQuitEvent $ent){

  $player = $ent->getPlayer();
  $lightningbolt = new AddEntityPacket();
  $lightningbolt->type = 93;
  $lightningbolt->eid = Entity::$entityCount++;
  $lightningbolt->metadata = array();
  $lightningbolt->speedX = 0;
  $lightningbolt->speedY = 0;
  $lightningbolt->speedZ = 0;
  $lightningbolt->x = $player->x;
  $lightningbolt->y = $player->y;
  $lightningbolt->z = $player->z;
  $player->dataPacket($lightningbolt);
}

public function onRespawn(PlayerRespawnEvent $ent){

  $player = $ent->getPlayer();
  $lightningbolt = new AddEntityPacket();
  $lightningbolt->type = 93;
  $lightningbolt->eid = Entity::$entityCount++;
  $lightningbolt->metadata = array();
  $lightningbolt->speedX = 0;
  $lightningbolt->speedY = 0;
  $lightningbolt->speedZ = 0;
  $lightningbolt->x = $player->x;
  $lightningbolt->y = $player->y;
  $lightningbolt->z = $player->z;
  $player->dataPacket($lightningbolt);
}

public function onKicked(PlayerKickEvent $ent){

  $player = $ent->getPlayer();
  $lightningbolt = new AddEntityPacket();
  $lightningbolt->type = 93;
  $lightningbolt->eid = Entity::$entityCount++;
  $lightningbolt->metadata = array();
  $lightningbolt->speedX = 0;
  $lightningbolt->speedY = 0;
  $lightningbolt->speedZ = 0;
  $lightningbolt->x = $player->x;
  $lightningbolt->y = $player->y;
  $lightningbolt->z = $player->z;
  $player->dataPacket($lightningbolt);
}

public function onDisable(){
  $this->getLogger()->info("Awww no more lightning strikes :(");
 }
}

?>
