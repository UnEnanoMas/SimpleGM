<?php

namespace SimpleGM\Drama_Lvl1;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
        if($cmd->getName() == "gm"){
            if(isset($args[0])){
                if($sender->hasPermission("SimpleGM.use")){
                    if(isset($args[1])){
                        $player = $this->getServer()->getPlayer($args[1]);
                        if($player == null) {
                            $sender->sendMessage("§8[§bSimple§3GM§8] §cDieser Spieler wurde nicht gefunden!");
                            return true;
                        }
                        $change = $player->getName();
                        if($args[0] == "0"){
                            $player->setGameMode(0);
                            $player->sendMessage("§8[§bSimple§3GM§8] §aDein Gamemode wurde auf §2Überleben §agesetzt");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast den Gamemode von §2". $change ." §azu §2Überleben §ageändert");
                        } else if($args[0] == "1"){
                            $player->setGameMode(1);
                            $player->sendMessage("§8[§bSimple§3GM§8] §aDein Gamemode wurde auf §2Kreativ §agesetzt");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast den Gamemode von §2". $change ." §azu §2Kreativ §ageändert!");
                        } else if($args[0] == "2"){
                            $player->setGameMode(2);
                            $player->sendMessage("§8[§bSimple§3GM§8] §aDein Gamemode wurde auf §2Abendteuer §agesetzt");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast den Gamemode von §2". $change ." §azu §2Abendteuer §ageändert!");
                        } else if($args[0] == "3"){
                            $player->setGameMode(3);
                            $player->sendMessage("§8[§bSimple§3GM§8] §aDein Gamemode wurde auf §2Zuschauer §agesetzt");
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast den Gamemode von §2". $change ." §azu §2Zuschauer §ageändert!");
						}
					} else {
                        if($args[0] == "0"){
                            $sender->setGamemode(0);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast dein Gamemode zu §2Überleben §ageändert!");                        
                        } else if($args[0] == "1"){
                            $sender->setGamemode(1);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast dein Gamemode zu §2Kreativ §ageändert!");
                        } else if($args[0] == "2"){
                            $sender->setGamemode(2);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast dein Gamemode zu §2Abendteuer §ageändert!");
                        } else if($args[0] == "3"){
                            $sender->setGamemode(3);
                            $sender->sendMessage("§8[§bSimple§3GM§8] §aDu hast dein Gamemode zu §2Zuschauer §ageändert!");
						}
                    }
				}
            } else {
                $sender->sendMessage("§8[§bSimple§3GM§8] §cBitte gebe: §e/gm <0/1/2/3> <spieler> (ohne spielername geht auch!)");
            }
        }
    return true;
    }
}
