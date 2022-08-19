<?php
namespace HenryDM\CustomPVP;

# Pocketmine Libs
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\event\Event;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;

# Plugin Libs
use HenryDM\CustomPVP\EventListener;
use HenryDM\CustomPVP\Events\Message;
use HenryDM\CustomPVP\Events\SoupPvP;
use HenryDM\CustomPVP\Events\Cooldown;

class Main extends PluginBase {
	
	private static $instance;
	
	public function onEnable() : void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
	$this->saveResource("config.yml");
	self::$instance = $this;
      }
	
	public static function getInstance() : Main {
		return self::$instance;
	}
}
