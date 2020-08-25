# ABOUT

TikTok Video & Music Downloader PHP, is PHP version to be provided along with Premium WordPress version at https://codecanyon.net/item/tiktok-video-downloader-wordpress-plugin/26370715, for the users who don't want to use WordPress in their platform.

The Plugin doesn't use MySQl database, instead uses simple yet reliable file based cache powered by `phpfastcache`

This script requires valid purchase code provided by `CodeCanyon` with purchase of TikTok Video Downloader https://codecanyon.net/item/tiktok-video-downloader-wordpress-plugin/26370715 and wouldn't function without it.

# Installation
This don't need complex setup, everything is kept simple as possible. No database calls are engaged to keep away the bloats.
Assumign you have `composer` & latest `NodeJS & NPM` installed on your system
- `composer install` to install packages required.
- `npm install` to install packages required for GulpJS tasks
- `gulp build` to build for production if you changed anything or use what's provided on `build` folder.
- Copy files from `build` folder if you want it in remote server or simply do `gulp defualt` while on dev environment.
- head over to https://example.com/admin.php assuming https://example.com is your domain and the scirpt is installed on your root of your web document directory.
- Follow on-screen instructions to setup some basic settings.

# Forgotten password, migration or re-install
- Remove `installed.php` file from `_config` directory via FTP or your favorite Web File Manager.
- Head over to `https://example.com/admin.php` then follow on-screen instructions to reset your password. 

# Customization
I used boostrap to do the UI, have few bootswatch.com thingy going, but you can always update it to your need if you know the secret little magic of HTML/CSS. Uncompiled `Javascript` and `CSS` are provided in `src/` directory that you can modify and be compiled using `GulpJS` or any online tools that you like. If you require, I can do a custom version, contact me via my profile.


