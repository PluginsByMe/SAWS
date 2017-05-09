<?php

#####################################################################
#          _______  _______  _     _  _______  _____ _____          #
#         |       ||   _   || | _ | ||       ||_   _|     |         #
#         |  _____||  |_|  || || || ||  _____|  | | | | | |         #
#         | |_____ |       ||       || |_____   |_| |_|_|_|         #
#         |_____  ||       ||       ||_____  |                      #
#          _____| ||   _   ||   _   | _____| |                      #
#         |_______||__| |__||__| |__||_______|                      #
#                 Stands for: Sign And World System™                #
#           Signs and World management, Ultimate version!           #
#                         By: TheRoyalBlock                         #
#                https://github.com/PluginsByMe/SAWS                #
#####################################################################

namespace TheRoyalBlock\SAWS
  
//Blocks
use pocketmine\block\Block;

//Command
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

//Entity
use pocketmine\entity\Entity;
use pocketmine\entity\Effect;

//Events
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\entity\EntityLevelChangeEvent; 

//Inventory
use pocketmine\inventory\ChestInventory;
use pocketmine\inventory\EnderChestInventory;

//Item
use pocketmine\item\Item;

//Lang

//Level
use pocketmine\level\Level;
use pocketmine\level\Position;

//Math
use pocketmine\math\Vector3;
//Metadata

//Nbt
use pocketmine\nbt\NBT;

//Network
use pocketmine\network\Network;

//Permission
use pocketmine\permission\Permission;

//Plugin
use pocketmine\plugin\PluginBase;

//Scheduler
use pocketmine\scheduler\PluginTask;

//Tile
use pocketmine\tile\Sign;
use pocketmine\tile\Chest;

//Utils
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;

//Other
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener{
    
  const PREFIX = C::GOLD . "[" . C::BLUE . "SAWS™" . C::GOLD . "] ". C::RESET . C::WHITE;

      public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(self::PREFIX . "Plugin loaded!");
    }
      public function onDisable(){
        $this->getLogger()->info(self::PREFIX . "Plugin disabled!");
    }
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
  switch($cmd->getName()){
    case "worldtp":
    if($sender instanceof Player) {
                  $worldname = $args[0];
                  $sender->sendMessage(self::PREFIX . "Preparing world " . $worldname . "!");
                    //Prevents most crashes
                    if(Server::getInstance()->loadLevel($worldname) != false){
                        $sender->sendMessage(self::PREFIX . "Teleporting to " . $worldname . "!");
                        $event->getPlayer()->teleport(Server::getInstance()->getLevelByName($worldname)->getSafeSpawn());
                    } else {
                      $sender->sendMessage(self::PREFIX . "World " . $worldname . " not found. Please try using a different world.");
            } else {
                $sender->sendMessage(self::PREFIX . "Please use the command in game.");
            }
            return true;
            break;
    case "coordstp":
      if($sender instanceof Player) {
                  $x = $args[0];
                  $y = $args[1];
                  $z = $args[2];
                      $sender->sendMessage(self::PREFIX . "Teleporting to X: " . $x . " Y: " . $y . " Z: " . $z . "!");
                      $sender->teleport(new Vector3($x, $y, $z));
            } else {
                $sender->sendMessage(self::PREFIX . "Please use the command in game.");
            }
            return true;
            break;
      case "seedgenerate":
				$level = $args[1];
				$seed = $args[0];
				$generator = null;
				$options = null;
					if($this->getServer()->isLevelGenerated($level) = !false){
						$sender->sendMessage(self::PREFIX . "A world with the name " . $level . " already exists!");
          } else {
						$this->getServer()->broadcastMessage(self::PREFIX . "Creating world " . $level . "! Be prepared for lag!");
						$this->getServer()->generateLevel($level, $seed, $generator, $options);
						$this->getServer()->loadLevel($level);
            $sender->sendMessage(self::PREFIX . "The world " . $level . " has been sucessfully created and loaded! Use /worldtp to teleport there!");
					}
      return true;
      break;
      case "typegenerate":
	//ToDo, Hopefully @Ad5001 will help
      return true;
      break;
      case "loadworld":
	    $worldname = $args[0];
            $sender->sendMessage(self::PREFIX . "Preparing world " . $worldname . "!");
                    //Prevents most crashes
                    if(Server::getInstance()->loadLevel($worldname) != false){
			    $sender->sendMessage(self::PREFIX . "World " . $worldname . "has been prepared!"
                    } else {
                      $sender->sendMessage(self::PREFIX . "World " . $worldname . " not found. Please try using a different world name.");
      return true;
      break;
      case "mn-help":
		$sender->sendMessage("------------------------------------------------");
		$sender->sendMessage("|             SAWS™ Plugin Commands            |");
		$sender->sendMessage("| seedgenerate: Generates a world from a seed. |/n|       Usage: /seedgenerate <seed>            |");
		$sender->sendMessage("| typegenerate:Generates a world from presets. |/n|       Usage: /typegenerate <preset>          |");
		$sender->sendMessage("| coordtp: TP to xyz coordinates.              |/n|       Usage: /coordtp <x> <y> <z>            |");
		$sender->sendMessage("| worldtp: Teleport to x world.                |/n|       Usage: /worldtp <worldname>            |");
		$sender->sendMessage("| loadworld: load ___ world.                   |/n|       Usage: /loadworld <worldname>          |");
		$sender->sendMessage("------------------------------------------------");
      }else{
	$sender->sendMessage(self::PREFIX . "Command " . $cmd . "not found. Please try again or use /mn-help for a list of commands");
      }
	    
	    
	    
	    
