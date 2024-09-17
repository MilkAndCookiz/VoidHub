<?php

namespace VoidHub;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\world\World;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;


class Main extends PluginBase implements Listener {
    private $config;

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->saveDefaultConfig();
        $this->config = $this->getConfig();
        $this->getLogger()->info(TextFormat::GREEN . "VoidHub has been enabled!");
    }

    public function onDisable(): void {
        $this->getLogger()->info(TextFormat::RED . "VoidHub has been disabled!");
    }

    public function onPlayerMove(PlayerMoveEvent $event): void {
        $player = $event->getPlayer();
        $world = $player->getWorld();

        if ($player->getPosition()->getY() < 0) {
            $spawnLocation = $world->getSpawnLocation();
            $player->teleport($spawnLocation);

            $message = $this->config->get("teleport_message");
            $player->sendMessage($message);
        }
    }
}
