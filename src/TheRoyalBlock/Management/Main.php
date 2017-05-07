<?php

#####################################################################
# _______                                                      __   #
#|   |   |.---.-.-----.---.-.-----.-----.--------.-----.-----.|  |_ #
#|       ||  _  |     |  _  |  _  |  -__|        |  -__|     ||   _|#
#|__|_|__||___._|__|__|___._|___  |_____|__|__|__|_____|__|__||____|#
#                           |_____|                                 #
#           Signs and World management, Ultimate version!           #
#                         By: TheRoyalBlock                         #
#             https://github.com/PluginsByMe/Management             #
#####################################################################

namespace TheRoyalBlock\Management
  
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

//Own
use Events\Signs;
use Commands\CoordTP;
use Commands\LoadWorld;
use Commands\SeedGen;
use Commands\TypeGen;
use Commands\WorldTP;

class Main extends PluginBase implements Listener{
    
  const PREFIX = C::GOLD . "[" . C::BLUE . "Management" . C::GOLD . "] ". C::RESET . C::WHITE;
