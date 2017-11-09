<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Backend:etc/menu.xsd">
    <menu>
    <add id="Budihariyana_Social::social_account" resource="Budihariyana_Social::social_account" title="Social" action="social_account/account/index" module="Budihariyana_Social" sortOrder="20"/>
    <add id="Budihariyana_Social::new" resource="Budihariyana_Social::new" title="New Social Account" action="social_account/account/new" module="Budihariyana_Social" sortOrder="10" parent="Budihariyana_Social::social_account" dependsOnModule="Budihariyana_Social"/>
	</menu>
</config>