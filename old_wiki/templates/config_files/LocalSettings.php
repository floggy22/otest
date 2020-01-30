<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Testwiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgScriptExtension = ".php";

/*Anpassung auf korrekten Pfad bestehend aus Applikationsnamen + Projektnamen */
$wgServer = "http://mediawiki2-pid-0047-garage-mediawiki-dev.apps.dev.paas.verwalt-berlin.de";

## The relative URL path to the skins directory
$wgStylePath = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgStylePath/common/images/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO
/*Anpassung auf korrekten Pfad bestehend aus Applikationsnamen + Projektnamen */
$wgEmergencyContact = "apache@mediawiki2-pid-0047-garage-mediawiki-dev.apps.dev.paas.verwalt-berlin.de";
$wgPasswordSender = "apache@mediawiki2-pid-0047-garage-mediawiki-dev.apps.dev.paas.verwalt-berlin.de";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings 
/*Entnehmen aus Secret bzw. via oc-Befehl (oc get svc)*/
$wgDBtype = "mysql";
$wgDBserver = "172.23.9.54";
$wgDBname = "mediawikidb";
$wgDBuser = "mediawikiuser1";
$wgDBpassword = "mediawikiuser1";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
/*Standardwerte können übernommen werden*/
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "de";
/*Klärung notwendig, woher SecretKey kommt*/
$wgSecretKey = "1dec1805b23120334a7c14ab6937aaf1ba8c8494c4ac0a9705fbe558d159873f";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "f3a8ceefb4f2a876";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";



# End of automatically generated settings.
# Add more configuration options below.