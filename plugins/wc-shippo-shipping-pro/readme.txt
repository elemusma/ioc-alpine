=== Shippo Shipping PRO for WooCommerce ===
Contributors: OneTeamSoftware
Tags: woocommerce, Shippo, cart, shipping, ebay, amazon, marketplace, woocommerce shipping, Shippo shipping, woocommerce Shippo shipping, cart shipping rate, shipping rate
Requires at least: 5.6
Tested up to: 6.0.1
Requires PHP: 7.3
Stable tag: 2.0.8
WC requires at least: 6.0
WC tested up to: 6.6.1
Copyright: © 2022 FlexRC, 3-7170 Ash Cres, V6P 3K7, Canada. Voice 604 800-7879 
License: Any usage / copying / extension or modification without prior authorization is prohibited

Multi-Carrier Shippo shipping plugin for WooCommerce displays live shipping rates at cart / checkout pages, streamlines returns, validates shipping address and simplifies creation of shipping labels with automated email tracking notifications.
== Description ==
Shippo Shipping PRO for WooCommerce plugin lets you access the lowest-possible rates from USPS, UPS, FedEx, DHL, and more. It is automatically packing items into boxes, displaying accurate real-time shipping rates at the cart / checkout pages. Shippo Shipping plugin lets you create shipping labels per order or in bulk as well as it allows you to generate return shipping labels.

== Features ==
* Support of 50+ carriers worldwide
* Live shipping rates at WooCommerce cart & checkout
* Ability to validate shipping address before allowing customers to place an order
* Use WooCoommerce store or Marketplace / Dokan vendor’s location as the originating address for accurate shipping rates
* Dimension and weight based packing of the items into configurable boxes
* Ability to combine parcels to get better shipping rates
* Accommodate your packaging and marketing material with flexible package weight adjustments
* Charge extra handling fee or implement currency conversion with flexible shipping rate adjustments
* Include Insurance and Request Signature service
* Display different name for selected shipping services
* Allow all or only selected shipping services
* Configurable purchase postage workflow
* Buy shipping labels in one click per order or in bulk
* Create return shipping labels
* Link previously created shipments to orders
* Easy access to tracking history for admins and customers
* Automatically notify customers about progress of their shipment
* Test your setup before going into production by running in the sandbox
* Easily find issues by enabling debug mode
* Speed up your website by caching and re-using previously found rates

== Real-time shipping rates ==
Shippo plugin will intelligently pack items from the cart into boxes that you use for shipping and use their dimension and calculated weight to get carrier shipping rates, so they can be displayed on the cart, and checkout pages. Customers can choose and checkout with any of the available shipping methods.

== Validate address before allowing to place an order ==
Our shipping plugin can validate shipping addresses before allowing customers to place an order.

== Up-to-date Estimated Time of Arrival (ETA) ==
Shippo analyzes your package data to estimate time of delivery, so optionally you can display that information and customers will be able to plan ahead when choosing the shipping method they prefer.

== Intelligent and accurate packing of the items into boxes ==
1TeamSoftware shipping plugin lets you configure dimensions, weight and max weight that boxes you use to ship orders can carry, so then it will use this information to precisely estimate shipping rates and reduce time you need to create shipments by predicting how order will be packed.

== Saving on shipping fees by combining boxes ==
If ordered items can’t fit into a single parcel then shipping plugin will automatically use the required number of boxes to pack selected products, which in some cases can increase shipping rates. 
Shippo plugin offers a possibility to combine all the boxes as if it was just the single parcel to allow you to find a bigger box and save on shipping fees.

== Advances weight adjustment rules ==
Do you include promotional materials or use extra packaging? Then you can configure weight adjustments that will be applied before the shipping plugin will get shipping rate quotes from Shippo service.

== Global or per service shipping rate adjustments ==
Quoted shipping rates can be further adjusted to accommodate currency exchange differences or if you just want to add an extra handling fee or offer a discount.
Shippo Shipping PRO plugin allows to configure these adjustments globally or per shipping service.

== Include Insurance and Request Signature service ==
Protect yourself and your customers by automatically including insurance with offered shipping rates.
Optionally request signature service for all or selected orders and rates will be automatically updated. 

== Customize shipping method names ==
Shippo WooCommerce plugin lets you rename selected shipping methods, so customers will see names you want them to see instead of the long and confusing service names returned by the carriers.

== Tracking information and email notifications ==
Customers will automatically receive email notifications when a shipping label has been created and about the location of their shipment as it progresses to its final destination. 
Tracking number associated with the order and its current status is available in the orders page, and detailed tracking history can be viewed at the order page in Admin and User interfaces.

== Create discounted shipping labels ==
Plugin will return real-time rates from a network of carriers to find the best match, validate shipping address and create a shipping label in just a few clicks. 
It lets you offer hassle free returns by generating return shipping labels.

== Generate shipping labels just in one click ==
Depending on your preferred workflow, Shippo plugin can be configured to use multi-step or a single click shipping label generation.

== Ability to run it in sandbox and debug modes ==
Plugin can be set to sandbox mode, so you can test creation of the shipping label without paying for it.
In cases when things might not work exactly as expected, it is possible to enable debug mode which will display detailed messages explaining what is going on and what data are used, so you can easily narrow down the issue.


== Installation ==
1. Go to Wordpress -> Plugins -> Add New
2. Hit **Upload Plugin** button
3. Hit **Choose File** button and select zip file with the plugin
4. Hit **Install Now** button
5. Hit **Activate** link
6. Installation complete

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==
= 2.0.8 2022-08-02 =
* Bug fixes
= 2.0.7 2022-07-30 =
* Bug fixes
= 2.0.6 2022-07-21 =
* Bug fixes
= 2.0.5 2022-07-20 =
* Bug fixes
= 2.0.4 2022-07-16 =
* Bug fixes
= 2.0.3 2022-07-07 =
* Fixed logger message format to avoid possible issues from invalid string
= 2.0.2 2022-07-06 =
* Fixed so that disabled boxes won't be picked up for packing
= 2.0.1 2022-07-01 =
* Fixed issue when rates were not returned without any extra options like insurance, signature enabled
= 2.0.0 2022-07-01 =
* Minimal PHP requirement has been changed to v7.3
* All addons have to be updated in order to stay compatible with the new version of this plugin
* A lot of code optimization and refactoring
* Changed to use Asynchronious HTTP requests which dramatically increases speed with which bulk shipments are created
* Advanced settings will be hidden by default but can be enabled by checking Advanced Settings checkbox
* Changed checkboxes to toggles
* Regroupped settings to be more clear
* Added possibility to print shipping label in a single click
* Added condition for when Signature service will be requested
* Added support for Saturday Delivery
* Added support for Cash on Delivery
* Added support for shipping alcohol with condition for which products contain Alcohol
= 1.7.8 2022-04-10 =
* Fix: Some plugins can change values of unchecked checkboxes to NO which then affects ability to quote shipments with signature and insurance
* Fix: When default shipping method is selected then Get a quote may not be offered in some cases
= 1.7.7 2021-11-12 =
* Display tracking table at the top of My Account -> Order page
* Display tracking number even when we don't have tracking URL
* Track button will be displaye donly where there are any tracking events
* Better handling of displaying of the service name (postage description)
= 1.7.6 2021-11-02 =
* Ability to set company as required field during checkout. It might be useful for some carriers that don't return rates without a company name.
= 1.7.5 2021-10-23 =
* Proxy requests to WooCommerce Objects to gracefully handle possibility that they were not initialized
* Always display contents and description field in the shipment creation form
* Use ---Residential--- as a company name when it is not specified, the reason for that is that some carriers require company name and won't accept something like --
= 1.7.4 2021-10-12 =
* Added support for all label types supported by Shippo API
* Make sure to always use ASCII for customs items, because otherwise it won't be possible to print labels for products with foreign characters
* Use shipping full name in labels
= 1.7.3 2021-10-07 =
* Add vendor / seller ID to rate meta, so Dokan will pick up chosen shipping methods in children orders
* Better communication of selected rate, so then it will be automatically pre-selected when printing a label
* Removed borders from shipment box cells
* Fixed: Vendors were able to purchase label more expensive than customer paid due to inclusion of the taxes
= 1.7.2 2021-10-06 =
* Plugin will keep vendor's address, when Use Seller Address is enabled, even when it is not set. It might prevent it from printing labels, but it will avoid printing labels with FROM address of the marketplace.
* Fixed issue that caused fatal error when new order has been created, it was caused by create date being null
= 1.7.1 2021-10-04 =
* Instance settings will be loaded only when Shipping Zones are enabled
= 1.7.0 =
* Updated language template file
* Ability to automatically export order to Shippo dashboard. Please note that API functionality is fairly limited and you won't be able to link labels created in WooCommerce to the order after it has been exported.
* Ability to automatically import shipments from Shippo into WooCommerce
* Fixed address validation, so it won't be possible to bypass it
* Use different event ids for import, update and create cron events
* Check variation and its parent for detection of Vendor ID
* Validate if owner of a product is an active vendor
* Added confirmation dialog before unlink, refund and cancel actions
* Gracefully handle lack of support for phar and compression by displaying admin error notice in this case
* Added minified css and js files
* Use Cube Dimensions will only work when Combine All Boxes is enabled, so it won't affect pre-configured box sizes
* Improved address validation so it won't be possible to bypass it
* Improved address validation so it won't be possible to bypass it
* Various minor bug fixes
= 1.6.4 =
* Improved page detection for Page Condition setting
* Centralized handling of logging to make sure that all log messages will be recorded when debug mode is enabled
* Improved calculation of maximum allowed shipping total
* Force calculation of the shipping costs on checkout when Page Condition is set to checkout
* Fixed an issue that plugin was using website currency for live shipping rates even when it isn't supported
* Fixed an issue that shipment can't be refreshed in some cases 
* Fixed parcel data validation in bulk orders form
= 1.6.3 =
* Code refactoring
* Changed files structure
= 1.6.2 =
* Changed multivendor detection to use parent product of a variable product to determine a vendor of a product.
* Fixed ability to add several boxes at once. Plugin user will have to fill only required fields, before next box can be added.
= 1.6.1 =
* Fixed how shipping rates are combined, so only matching rates for all the parcels will be displayed
= 1.6.0 =
* Added more logging message for easier bugging
* Fixed issue that post ID was accessed before post was created when Order is manually added
* Minor HTML fixes
* Changed code to use autoloader instead of including files directly
* Ability to overwrite boxes, services and from address in shipping zone settings
* Fixed issue that broke plugin when weight adjustment was an empty string
* Updated language template file
= 1.5.7 =
* Ability to define service rule by custom service id, which is useful when service is not pre-defined in the plugin
* Round default min weight / height / length so they won't generate html5 validation error on save
* New language template file
* Fixed undefined boxes PHP notices
* Fixed header sent warning when validation errors were displayed after plugin settings have been saved
= 1.5.6 =
* Improved choice of rates' currency. Plugin will attempt to pick either requested currency or one of supported currencies.
* Added HTML5 min attribute to inputs with steps, like min weight, min height and so on. 
= 1.5.5 =
* Display validation errors when getting rates quote, before shipment is created
= 1.5.4 =
* Fixed description displayed in the admin orders
* Allow to change a domain license assign to by setting license to an empty string and then using it at another domain
* Fixed issue when item name was used instead of a customer name
* Use shipping address when either shipping address 1 or 2 are set
= 1.5.3 =
* Fixed issue with services not working as expected when shipping zones are enabled
* Added logging of the plugin settings for easier debugging
= 1.5.2 =
* Settings will be loaded and handled more centrally
* Changed how global settings are overwritten by vendor's settings
* Added min length, width, height
* Improved default settings so plugin will be easier setup and use out of the box
* Updated language template
= 1.5.1 =
* Fixed the issue that new debug messages were preventing checkout
* Hide package contents and description for local orders
= 1.5.0 =
* Ability to choose a condition for what pages live rates will be requested
* Support for Shipping Labels for WCFM / Dokan to add/remove and modify boxes / services
* Validate products only when this option is enabled in the settings
* Error messages will be displayed in the cart for admin users when debug mode is enabled
* Updated language template
= 1.4.4 =
* Bug fixes
* Ability to control send request timeout
* Added various hooks for better extensibility
* Removed hardcoded dollar sign from shipment confirmation form
* In order reduce PHP memory requirement product validation has been changed to run in the chunks of 10 products at a time
= 1.4.3 =
* Use TO address as FROM address when return label is requested
* Use invoice price for customs info, so all applied discounts will be included in the price
* Auto tracking will use Status Change Timeout as an additional condition for stopping tracking of delivered / lost packages
* Use billing address when shipping address is not specified
* Ability to receive tracking notifications for any status
= 1.4.2 =
* Fixed creation of manifests
= 1.4.1 =
* Fixed removal of services and boxes
* Improved simple and variable product validation when settings are saved
* Changed order in which service name and tracking are displayed in the orders page
* Added ability to use CUBE dimensions for the parcel, it can help to save on shipping when using combine parcels feature or don't have boxes defined
* Add support for the add-on that will allow to group new shipments into batches and create manifests for them
= 1.4.0 =
* Ability to define product conditions that have to be matched for service to be offered during checkout
* Ability to have min and max rate cost requirement for shipping rate to be displayed during checkout
* Changed rounding to 2 decimal places
* Parcel presets in the Order Shipment form will display box dimensions along with the name
* If package contents is undefined then plugin will fallback to using cart contents
* Ability to create shipping label will be available for all shippable orders
* Shipment box will work even when Use Cache is unchecked
* It will be possible to purchase label even when Use Cache is unchecked
* New language template file
= 1.3.4 =
* Fixed removal of Boxes and Services
* Fixed loading of the States in the plugin settings
= 1.3.3 =
* Fixed a bug in handling of local orders
* Minor bug fixes
= 1.3.2 =
* To improve compatibility renamed myaccount/view-order.php to myaccount/tracking-info.php
= 1.3.1 =
* Fixed PHP warnings
= 1.3.0 =
* Display both order id and order number on label reference area
* Bulk purchase and download of shiping labels will use AJAX call and open pop-up window with generated PDF upon completion
* Ability to enable addition of Auto Print script to generated PDF documents
* Fixed sorting of the shipping rates displayed in the cart
* Preserve services when API is not failing to return services after cache has expired
* Improved re-request of services and package types when API has failed before that
* No longer needed to activate integration for Shipping Labels for WCFM to work, it will have to be activated in there instead
* If cache has expired user will have to refresh the page before being able to create shipping label
* Infrastructural code changes to allow futher extension of the plugin
* Improved weight and dimension validation of variable products
= 1.2.4 =
* Moved common purchase postage settings to purchase postage defaults section, they will apply to both bulk and single shipping label purchases
* Added description field to bulk purchase postage form
* Fixed vendor detection when purchasing shipping label
* If vendor's address does not have country or city set then default to sitewide plugin from address
* Extract website / vendor email and communicate it to API
* Changed shipment purchase buttons to occupy entire row
* Added improved styles for jquery dialog for shipment box
* Set parcel value only when elements are included in HTML for shipment box
= 1.2.3 =
* Changed parcel weight adjustment flow to first multiply weight, then add to weight and then set min weight
* Parcel weight adjustments will be applied to shipping label creation flows too
= 1.2.2 =
* Fixed Fixed weight adjustment for international shipments
= 1.2.1 =
* Various bug fixes
* Improved support for Dokan, WCFM, WCMP, YITH and WC Product Vendors
= 1.2.0 =
* Various bug fixes
* Improved support for the default WooCommerce currency
* Ability to Download PDF Shipping Labels and Forms as one file in bulk from Admin Orders UI
* Ability to limit number of shipping rates returned in the cart and checkout pages
* Improved handling of refunds
* Updated language template file
= 1.1.8 =
* Added Order ID to created shipping label
* Do not cache address when it was not validated by Shippo, because Shippo won't be storing it anyways
* Renamed Admin settings labels to use statements instead of questions. Also made labels and descriptions easier to understand.
* Do not cache validation result of the products
* Moved Settings link before Deactivate link on the plugins page
* Updated language template file
= 1.1.7 =
* Pre-fill from address with the default WooCommerce address
* Display actual amount paid in the order details instead of product price
* Pre-select website currency in the shipment box
* Improve product validation to include only simple products that are not virtual
= 1.1.6 =
* Fixed CRON scheduler
* Synchronized shared library
= 1.1.5 =
* Improved input sanitization for input data from checkout page
* Deactivate free plugin earlier to avoid possible compatibility issues
= 1.1.4 =
* Improved caching of the object IDs returned by Shippo API
= 1.1.3 =
* Fixed PHP notice
= 1.1.2 =
* Improved how destination address is extracted during checkout process, which should improve reliability of live shipping rates
= 1.1.1 =
* Fixed name of the plugin in WooCommerce Settings
= 1.1.0 =
* Ability to integrate with upcoming MultiVendor Shipping Labels plugin
* Ability to turn off caching, which is useful for debugging and reseting corrupted cache
* Changed to have combine boxes enabled by default
* Changed Email notifications to work only for selected statuses and be disabled by default
* Changed to Update Shipments feature to be disabled by default
* Added notification when Shipping Zones is getting checked
* Try to use full customer address for live shipping rates when customer is registered
* Fixed default phone number to be 10000000000
* Plugin will validate API settings when settings are saved
* Plugin will validate that products match dimension/weight requirements when settings are saved
* Plugin will validate From address
* Plugin will validate that it has been added to Shipping Zones when Shipping Zones feature is enabled
* Improved styling of tracking history in the Shipment box of an order
* Added versioning for CSS and JS to work around possible caching when they are changed
* Parcel packer will communicate SKU of the products
= 1.0.32 =
* Added path to debug log in the settings of the plugin
* Change to check for Seller ID with only one method, so if YITH is enabled then it will use it and won't fallback to other methods
* Added support for WCFM Multi Vendor plugin
= 1.0.31 =
* Added support for YITH Multi Vendor plugin
* Fixed adjustment of package weight for custom items
= 1.0.30 =
* Changed debug to use WooCommerce -> Status -> Logs instead of the messages in the Cart
= 1.0.29 =
* Fixed bug that second address line wasn't used in return labels
= 1.0.28 =
* Fixed bug that was affecting bulk order actions when bulk orders were disabled
= 1.0.27 =
* Added parcel type presets
* Improved handling of shipment notifications and order completion
* Fixed PHP warning
= 1.0.26 =
* Fixed PHP warning
* Synchronized shared library code
* Added links to Free Shipping and Flexible Shipping plugins
= 1.0.25 =
* Synchronized with the latest code changes
* Use - for the company name when it is not provided
* Fixed PHP warnings and notices
* Include language template (.pot) file
= 1.0.24 =
* Order custom fields need to have step attribute in order to support decimal values
= 1.0.23 =
* Improved compatibility with Dokan
* If no services are configured and Use Service Settings for Bulk orders is enabled, we will display all services
* If address has no name, but has a company name then use it for both name and company fields
= 1.0.22 =
* Trim all address fields because some WooCommerce installs can have randome spaces, so then Shippo API will refuse them
= 1.0.21 =
* Don't filter out services when nothing is configured and checkbox is unchecked
* Report as incomplete only To address
* Fixed mass unit for custom items when unit is LBS
* Use Shipper as a name of the certifying person when name is not provided
= 1.0.20 =
* Fixed php notice when no shipping rates were returned
= 1.0.19 =
* Allow to change the domain of the license by deactivating plugin on the old domain and activating it on the new domain
* Use customer's name as a company when company is not set
= 1.0.17 =
* Synchronized with the latest version of library
* Added instruction that products should have weight and dimensions
= 1.0.16 =
* Bug fixes
* Use company name from the order for the destination
* Synchronized with the latest version of library
= 1.0.15 =
* Bug fixes
= 1.0.14 =
* Changed troubleshooting tips to be inline
= 1.0.13 =
* Changed to use receipient name as a company name, when it is not set and when nothing is set then use Resident for the name and - for the company name
* Ability to choose default service for bulk shipping creation form
* Ability to limit selection of shipping services in bulk shipping creation form based on the plugin settings 
* Auto complete order for configured shipment statuses
* Added Troubleshooting tips in the plugin settings
* Revert back to free plugin when license is invalid or not provided
= 1.0.12 =
* Improved error handling for cases when shipping label is created for extremely large package
= 1.0.11 =
* Improved error handling
= 1.0.10 =
* Improved backward compatibility with older PHP
* Fixed shipping label creation issue when error message is returned along with the rates
= 1.0.9 =
* Bug fixes
= 1.0.8 =
* Disable bulk shipping label form fields when search request is submitted
* Mark address as residential when address does not have company name set
= 1.0.7 =
* DHL requires phone number, so depending on the what information we have we will either use customer's billing phone number of store's phone number or a fake phone number, so we can get the rates
* Always pass customer name, so we can get the quotes from all carriers that require it
= 1.0.6 =
* Round customs net weight to precision 3
* Set certify name either to origin name or company
* Display standardardized estimate delivery message
* Don't check if adddress is complete when address validation is off
= 1.0.5 =
* Return rates even when error message is present
* Allow to create shipping label despite possible error messages
= 1.0.4 =
* Fixed that debug messages aren't comming through
= 1.0.3 =
* Return rates if they are present, even when error message is set by Shippo
= 1.0.2 =
* Updated to use new form filter that is used for Admin settings
* Changed to round weight, length, height, width values up to precision 3
= 1.0.1 =
* Updated to include logo with the plugin
= 1.0 =
* Initial release.

== Upgrade Notice ==
= 1.2.1 =
* Dokan and WCFM integration will use store address instead of the admin's address
* WooCommerce Product Vendors integration will use address of the first store admin
* YITH and WCMP integrations will use store admin's address