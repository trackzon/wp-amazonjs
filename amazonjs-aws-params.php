<?php
/**
 * @param Amazonjs $amazonjs
 */
function amazonjs_aws_params(Amazonjs $amazonjs)
{
	$amazonjs->search_indexes = array(
		'All' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('All', $amazonjs->textdomain),
		),
		'Apparel' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Apparel', $amazonjs->textdomain),
		),
		'Appliances' => array(
			'CA' => false,
			'CN' => true,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => true,
			'UK' => false,
			'US' => true,
			'label' => __('Appliances', $amazonjs->textdomain),
		),
		'ArtsAndCrafts' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('ArtsAndCrafts', $amazonjs->textdomain),
		),
		'Automotive' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Automotive', $amazonjs->textdomain),
		),
		'Baby' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Baby', $amazonjs->textdomain),
		),
		'Beauty' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Beauty', $amazonjs->textdomain),
		),
		'Blended' => array(
			'CA' => true,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Blended', $amazonjs->textdomain),
		),
		'Books' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Books', $amazonjs->textdomain),
		),
		'Classical' => array(
			'CA' => true,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Classical', $amazonjs->textdomain),
		),
		'DigitalMusic' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('DigitalMusic', $amazonjs->textdomain),
		),
		'DVD' => array(
			'CA' => true,
			'CN' => false,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('DVD', $amazonjs->textdomain),
		),
		'Electronics' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Electronics', $amazonjs->textdomain),
		),
		'ForeignBooks' => array(
			'CA' => true,
			'CN' => false,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => false,
			'US' => false,
			'label' => __('ForeignBooks', $amazonjs->textdomain),
		),
		'Garden' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => true,
			'JP' => false,
			'UK' => false,
			'US' => false,
			'label' => __('Garden', $amazonjs->textdomain),
		),
		'GourmetFood' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('GourmetFood', $amazonjs->textdomain),
		),
		'Grocery' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Grocery', $amazonjs->textdomain),
		),
		'HealthPersonalCare' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('HealthPersonalCare', $amazonjs->textdomain),
		),
		'Hobbies' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => true,
			'UK' => false,
			'US' => false,
			'label' => __('Hobbies', $amazonjs->textdomain),
		),
		'Home' => array(
			'CA' => false,
			'CN' => true,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => false,
			'label' => __('Home', $amazonjs->textdomain),
		),
		'HomeGarden' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => true,
			'US' => true,
			'label' => __('HomeGarden', $amazonjs->textdomain),
		),
		'HomeImprovement' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => false,
			'label' => __('HomeImprovement', $amazonjs->textdomain),
		),
		'Industrial' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('Industrial', $amazonjs->textdomain),
		),
		'Jewelry' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Jewelry', $amazonjs->textdomain),
		),
		'KindleStore' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true, // fixed
			'UK' => true,
			'US' => true,
			'label' => __('KindleStore', $amazonjs->textdomain),
		),
		'Kitchen' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Kitchen', $amazonjs->textdomain),
		),
		'LawnAndGarden' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('LawnAndGarden', $amazonjs->textdomain),
		),
		'Lighting' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => true,
			'JP' => false,
			'UK' => true,
			'US' => false,
			'label' => __('Lighting', $amazonjs->textdomain),
		),
		'Magazines' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('Magazines', $amazonjs->textdomain),
		),
		'Marketplace' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Marketplace', $amazonjs->textdomain),
		),
		'Miscellaneous' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => true,
			'US' => false,
			'label' => __('Miscellaneous', $amazonjs->textdomain),
		),
		'MobileApps' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('MobileApps', $amazonjs->textdomain),
		),
		'MP3Downloads' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('MP3Downloads', $amazonjs->textdomain),
		),
		'Music' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Music', $amazonjs->textdomain),
		),
		'MusicalInstruments' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('MusicalInstruments', $amazonjs->textdomain),
		),
		'MusicTracks' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('MusicTracks', $amazonjs->textdomain),
		),
		'OfficeProducts' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('OfficeProducts', $amazonjs->textdomain),
		),
		'OutdoorLiving' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => true,
			'US' => true,
			'label' => __('OutdoorLiving', $amazonjs->textdomain),
		),
		'Outlet' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => true,
			'US' => false,
			'label' => __('Outlet', $amazonjs->textdomain),
		),
		'PCHardware' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => false,
			'UK' => true,
			'US' => true,
			'label' => __('PCHardware', $amazonjs->textdomain),
		),
		'PetSupplies' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('PetSupplies', $amazonjs->textdomain),
		),
		'Photo' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('Photo', $amazonjs->textdomain),
		),
		'Shoes' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Shoes', $amazonjs->textdomain),
		),
		'Software' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Software', $amazonjs->textdomain),
		),
		'SoftwareVideoGames' => array(
			'CA' => true,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => false,
			'UK' => true,
			'US' => false,
			'label' => __('SoftwareVideoGames', $amazonjs->textdomain),
		),
		'SportingGoods' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('SportingGoods', $amazonjs->textdomain),
		),
		'Tools' => array(
			'CA' => false,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => true,
			'US' => true,
			'label' => __('Tools', $amazonjs->textdomain),
		),
		'Toys' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Toys', $amazonjs->textdomain),
		),
		'UnboxVideo' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('UnboxVideo', $amazonjs->textdomain),
		),
		'VHS' => array(
			'CA' => true,
			'CN' => false,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('VHS', $amazonjs->textdomain),
		),
		'Video' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => false,
			'FR' => true,
			'IT' => false,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('Video', $amazonjs->textdomain),
		),
		'VideoGames' => array(
			'CA' => true,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => true,
			'UK' => true,
			'US' => true,
			'label' => __('VideoGames', $amazonjs->textdomain),
		),
		'Watches' => array(
			'CA' => false,
			'CN' => true,
			'DE' => true,
			'ES' => true,
			'FR' => true,
			'IT' => true,
			'JP' => false,
			'UK' => true,
			'US' => true,
			'label' => __('Watches', $amazonjs->textdomain),
		),
		'Wireless' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('Wireless', $amazonjs->textdomain),
		),
		'WirelessAccessories' => array(
			'CA' => false,
			'CN' => false,
			'DE' => false,
			'ES' => false,
			'FR' => false,
			'IT' => false,
			'JP' => false,
			'UK' => false,
			'US' => true,
			'label' => __('WirelessAccessories', $amazonjs->textdomain),
		),
	);
}
