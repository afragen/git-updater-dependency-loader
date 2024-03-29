# Git Updater Dependency Loader

* Contributors: afragen
* Tags: git updater, plugin dependency
* Requires at least: 5.9
* Requires PHP: 7.2
* Tested up to: 6.2
* Stable tag: 0.1.0
* Donate link: <https://thefragens.com/git-updater-donate>
* License: MIT

This plugin provides for the Git Updater plugin to be used as a plugin dependency.

## Description

This plugin, when added to the dot org plugin repository, can be used to load the plugin card for Git Updater in the Dependencies tab of the Add Plugin page. This enables a one-click install of the Git Updater plugin.

This dependency loader plugin **must** be in the official WP Plugin Repository to function.

The Plugin Dependencies feature plugin must be installed for this function, until it is merged with core.

If your plugin requires Git Updater for updating you can install the following headers in your main plugin file.

`Requires Plugins: git-updater, git-updater-dependency-loader`

## Changelog
[unreleased]
