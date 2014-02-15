<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'BasisTemplate');
Tx_Flux_Core::registerProviderExtensionKey('basistemplate', 'Page');
Tx_Flux_Core::registerProviderExtensionKey('basistemplate', 'Content');

