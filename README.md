```
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
```

### Please give feedback on the plans below by commenting [here](https://github.com/PluginsByMe/Management/issues/1)

## SIGNS
      Line 1: [WORLD]
      Line 2: worldname
      Line 3: Anything
      Line 4: Anything
        This means: When you tap this sign, you teleport to worldname on line 2
      
      Line 1: [COORD]
      Line 2: x coordinate
      Line 3: y coordinate
      Line 4: z coordinate
        This means: When you tap this sign, you teleport to the coordinates
      
      Line 1: [STATUS]
      Line 2: Empty
      Line 3: Empty
      Line 4: Empty
        This will get the number of players, get the tps/load, and get the server port
      
      Line 1: [COMMAND]
      Line 2: Command
      Line 3: Anything
      Line 4: Anything
        This means: When you tap the sign, the command on line 2 will be issued as the sender.
        
      Line 1: [REGEN]
      Line 2: Anything
      Line 3: Anything
      Line 4: Anything
        This means: When you tap the sign, your health is regenerated
        
      Line 1: [TIME]
      Line 2: Time: <Day, Night, 1-20000>
      Line 3: Anything
      Line 4: Anything

## WORLD MANAGEMENT COMMANDS
      /seedgenerate <seed> <worldname>
            Generate a world using a the seed specified.
      
      /typegenerate <type> <worldname>
            Generate a world using the type specified. Types will be in another file.
 
      /worldtp <worldname>
            Teleport yourself to the world specified.

      /coordtp <x> <y> <z>
            Teleport yourself to the coordinates specified.

      /loadworld <worldname>
            Load the world specified.
