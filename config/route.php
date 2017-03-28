<?php

namespace vendor\core;

Router::add('^dashboard/news/edit-(?P<id>([0-9]?[0-9]))', ['controller' => 'Dashboard', 'action' => 'newsEdit']);
Router::add('^dashboard/news/list', ['controller' => 'Dashboard', 'action' => 'newsList']);
Router::add('^dashboard', ['controller' => 'Dashboard', 'action' => 'index']);


Router::add('^shop/$', ['controller' => 'Shop', 'action' => 'index']);
Router::add('^shop/mount-(?P<item>[a-z-]+)$', ['controller' => 'Shop', 'action' => 'mount']);
Router::add('^shop/item-(?P<item>[a-z-]+)$', ['controller' => 'Shop', 'action' => 'item']);
Router::add('^shop/buy-(?P<item>[a-z-]+)$', ['controller' => 'Shop', 'action' => 'buy']);
Router::add('^shop/pay-(?P<item>[a-z-]+)$', ['controller' => 'Shop', 'action' => 'pay']);
Router::add('^shop/complete-(?P<item>[a-z-]+)$', ['controller' => 'Shop', 'action' => 'complete']);

Router::add('^character/(?P<server>[a-z-]+)/(?P<profile>[a-z-]+)/(?P<simple>[a-z-]+)$', ['controller' => 'Character', 'action' => 'viewCharacters']);

Router::add('^data/menu.json$', ['controller' => 'Discussion', 'action' => 'menuJson']);
Router::add('^ajax/updates.html$', ['controller' => 'Discussion', 'action' => 'updatesVersion']);
Router::add('^data/refresh-balance.html$', ['controller' => 'Discussion', 'action' => 'refreshBalance']);
Router::add('^discussion/(?P<id>([0-9]?[0-9]))/load.json', ['controller' => 'Discussion', 'action' => 'loadJson']);
Router::add('^discussion/(?P<id>([0-9]?[0-9]))/comment.json', ['controller' => 'Discussion', 'action' => 'commentJson']);

Router::add('^account/management/settings/change-email.html$', ['controller' => 'Account', 'action' => 'changeEmail']);
Router::add('^account$', ['controller' => 'Account', 'action' => 'account']);
Router::add('^account/management/settings/change-password.html$', ['controller' => 'Account', 'action' => 'changePassword']);
Router::add('^account/management/claim-code.html$', ['controller' => 'Account', 'action' => 'claimCode']);
Router::add('^account/management/claim-code$', ['controller' => 'Account', 'action' => 'claimCode']);
Router::add('^account/management/wallet.html$', ['controller' => 'Account', 'action' => 'changePassword']);
Router::add('^account/management/wow-account-conversion.html$', ['controller' => 'Account', 'action' => 'changePassword']);
Router::add('^account/management/download.html', ['controller' => 'Account', 'action' => 'download']);
Router::add('^account/management/beta-profile.html$', ['controller' => 'Account', 'action' => 'changePassword']);

Router::add('^account/management/orders.html$', ['controller' => 'Account', 'action' => 'orders']);
Router::add('^account/management/order-detail.html', ['controller' => 'Account', 'action' => 'ordersDetail']);
Router::add('^account/management/transaction-history.html$', ['controller' => 'Account', 'action' => 'transactionHistory']);

Router::add('^account/management/dashboard$', ['controller' => 'Account', 'action' => 'dashboard']);
Router::add('^account/management/battle-tag-name-create$', ['controller' => 'Account', 'action' => 'createtag']);
Router::add('^account/management/battle-tag-name-verify$', ['controller' => 'Account', 'action' => 'verifytag']);

Router::add('^forum/(?P<fid>([0-9]?[0-9]))', ['controller' => 'Forum', 'action' => 'forumview']);

Router::add('^blog/(?P<shid>([0-9]?[0-9]))', ['controller' => 'Blog', 'action' => 'view']);

Router::add('^sidebar/realm-status$', ['controller' => 'Sidebar', 'action' => 'realmStatus']);

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$', ['controller' => 'Page', 'action' => 'view']);

Router::add('^language/(?P<lang>[a-z-]+)$', ['controller' => 'Discussion', 'action' => 'changeLanguage']);

// defaults routs
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');