<?php

// DO NOT MODIFY THIS FILE
// Please head to the config.sample.php
// and follow the instructions

// ----------- General Variables -----------

// autorefresh interval for the status webpage in seconds
$autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
$nanoNodeName = gethostname();

// a welcome message shown on top
$welcomeMsg = '';

// coinmarketcap widget
// market data base and second currency e.g. USD, EUR, BTC, ETH
$cmcBaseCurrency = 'USD';
$cmcSecondaryCurrency = 'BTC';

// other widget panels (TRUE / FALSE)
$cmcTicker = FALSE;
$cmcRank = FALSE;
$cmcMarketcap = FALSE;
$cmcVolume = FALSE;
$cmcStatsticker = FALSE;

// choice of Banano block explorer ('nanode', 'nanoexplorer', 'nano')
$blockExplorer = 'nanode';

// ----------- Banano Node Variables -----------

// ip address for RPC (default: 127.0.0.1)
$nanoNodeRPCIP   = '[::1]';

// ip address for RPC (default: 7076)
$nanoNodeRPCPort = '7072';

// account of this node 
$nanoNodeAccount = ''; 

// donation account for maintaining this node
$nanoDonationAccount = $nanoNodeAccount;

// number of decimal places to display Banano balances, i.e. 
$nanoNumDecimalPlaces = 2;

// ----------- Monitoring -----------

// Uptimerobot.com API key for external monitoring
$uptimerobotApiKey = '';

// ----------- Social -----------
$socials = array();



