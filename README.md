# VoidHub [2.0]
===================

__A teleportation safety plugin for Minecraft: Bedrock Edition, now compatible with PocketMine v5.x!__

## Introduction
VoidHub is a plugin for **[PocketMine-MP](https://github.com/pmmp/PocketMine-MP)** that automatically teleports players to the world spawn when they fall below the map (Y < 0). The plugin is designed to prevent players from falling into the void and getting stuck. Developed and maintained by **MilkAndCookiz**, it offers essential features for safe gameplay in Minecraft Bedrock Edition.

Contributions and improvements are welcome as the plugin evolves with new features and configuration options.


## Objective
* Automatically teleport players to the spawn when they fall below Y-level 0.
* Provide an easily customizable `config.yml` for user-defined teleport messages.
* Support the latest PocketMine-MP releases.


## Help & Support
If you encounter any issues, feel free to open a ticket on GitHub! We are happy to help troubleshoot and provide support for setting up and configuring the plugin.

## Installation
1. **[PocketMine-MP](https://github.com/pmmp/PocketMine-MP)** - VoidHub works only with the PocketMine server software.
2. **[DevTools](https://github.com/pmmp/PocketMine-DevTools)** - Used to load and develop plugins from folders.

*Important Note:* 
The master branch is the officially supported and stable version. Other branches may contain experimental features and should be used with caution.

## Configuration
VoidHub is customizable via the `config.yml` file. You can set the teleport message players receive when they are saved from falling into the void.

Here is an example of the `config.yml` format:

```yaml
teleport_message: "§aYou have been teleported back to spawn from the void!""
