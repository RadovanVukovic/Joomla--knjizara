<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:5:{i:0;O:8:"stdClass":3:{s:4:"link";s:104:"https://virtuemart.net/news/503-release-virtuemart-3-8-8-updated-administrator-interface-template-design";s:5:"title";s:74:"Release VirtueMart 3.8.8 - Updated administrator interface template design";s:11:"description";s:7583:"<p>Here are some words by the leader of VirtueMart (Max Milbers): <em>These are ambivalent times. On one hand life changed completly for most members, on the other hand it offers new opportunities. In my case, I am currently very busy with the lockdown problems. Literally getting a simple screw is suddenly a big time consuming problem. Politics divide people and business. I got indirect questions, asking if VirtueMart is going to take measures concerning it's 'political correct use'. When I joined <em>VirtueMart</em>, my goal was to create a free shop system for the people. VirtueMart is a free Open source system for anyone. No community member can controll, what you sell with it. It is not our responsibility. Personally I believe in the good will of people and that no one should judge about others without walking in their shoes for a while. We, the VirtueMart communtiy, have members all over the world.&nbsp;Let's keep it that way! </em></p>
<p>Now back to VirtueMart. We tried already a year ago to create a new admin template. This time our team member Valerie Isaksen of alatak.net broke through the obstacles and lightend a new fire for the new administrator template. The old template will be later merged into the new template and provided as style, or theme (it won't be exactly the same). The new admin template is currently provided as backend template. Updaters should use our <strong>package</strong>&nbsp;(use the big blue download button) to get the new admin template. You can just install the package over your current installation. It ensures that you get also the latest tcpdf and vmbeez. But you can also extract it and install the vmadmin.zip. This way ensures that the changes in the backend template do not interfere any productive installation.</p>
<h2>Updated administrator interface template design</h2>
<p>A new administrator template is available for testing which improves mobile and desktop appearance and usability for shop administrators.</p>
<p>Modern icons are used to represent key features and give the interface a cleaner appearance.</p>
<p>Feedback tells us that the rich core features and configuration flexibility remain a core aspect of why VirtueMart is a great choice for Joomla ecommerce.</p>
<p>This is therefore a template UI update and not a complete redesign of administration pages. Shop owners will still find their business information and configurations in the same place.</p>
<p>A small number of configuration screens have had their look slightly modified using icons and give a more consistent alignment of features/fieldnames with input/selection.</p>
<p><img class="size-auto align-left" style="margin-bottom: 20px; display: block; margin-left: auto; margin-right: auto;" src="https://virtuemart.net//images/stories/orders.png" alt="" /></p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<h2>Highlights</h2>
<ul class="check">
<li>Sidebar
<ul>
<li>Cleaner look and feel toggle functionality.</li>
<li>Is hidden completely and available via slide or overlay toggle in all views - giving more space for information to be displayed</li>
</ul>
</li>
<li>Mobile/Tablet:
<ul>
<li>List displays for the majority of VM administration functions now wrap effectively.</li>
<li>Function selections (filter/search) are shown correctly.</li>
<li>Alignment of fieldname with selection/input facilitates easier desktop viewing and significantly improves UI on Mobile/Tablets.</li>
</ul>
</li>
<li>General
<ul>
<li>General improved use of icons.</li>
<li>Cleaner tab selections for multipage configurations.</li>
<li>Simple radio yes/no selectors now align with Joomla UI look and feel.</li>
<li>Image view and upload - small design change improvement for Products/Categories/Manufacturers and Media.</li>
</ul>
</li>
</ul>
<p><img class="size-auto align-left" style="display: block; margin-left: auto; margin-right: auto;" src="https://virtuemart.net//images/stories/order.png" alt="" /></p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<h2>New features, enhancements, fixes</h2>
<h3>Enhanced or new</h3>
<ul>
<li>Skrill payment update</li>
<li>Removed shop is offline feature. Added instead a link showing better possibilities todo that (Using joomla or catalog mode).</li>
<li>Restriction for shipment/payment byCoupon</li>
<li>Extra order note. Just a simple note for orders for internal use.</li>
<li>Order list searches now also for the customer_note and order_note</li>
<li>Order list now also filterable by vendor</li>
<li>New options of storing carts (currently per hidden configuration)<ol>
<li>#CartsDontSave = 0 //dont store carts for logged in shoppers</li>
<li>#CartsDontSaveByshoppergroup=50 //dont store carts for shoppers in this shoppergroup</li>
<li>#CartsDontSaveCartFields=1 //dont store cart fields when storing a cart for a shopper</li>
</ol></li>
<li>Order model function getOrder loads now the whole data of an order status (interesting for templaters)</li>
<li>Multiple category filter for product list in the backend. Disabled by default, currently you can enable it by hidden config AllowMultipleCatsFilter=1</li>
</ul>
<h3>New for developer</h3>
<ul>
<li>new pattern if an array is given, and we need the first item then we use now reset and not the 0 item.</li>
<li>New Trigger in storeProductCustomfields, for removed customfields.</li>
<li>Added "andWhere" function to parameter to VmTableXarray load function, added function loadOrderingCurrentItem</li>
<li>VmTable cleaned ordering, added function loadOrderingCurrentItem</li>
<li>PHP 8 compatibility, bugs may still occur.</li>
</ul>
<h3>Fixes</h3>
<ul>
<li>Ordering for products</li>
<li>All nasty warnings like "Warning: Parameter 1 to plgVmShipmentWeight_countries::plgVmOnSelectCheckShipment() expected to be a reference, value given in /var/www/vhosts/..../libraries/joomla/event/event.php on line 70"</li>
<li>time for coupons is from now on not "NOW" but "timestamp_utc"</li>
<li>Fix for 1054 Unknown column 'Array' in 'where clause after update to 3.8.6 http://forum.virtuemart.net/index.php?topic=145855.30 Fix for ordering of products if products of subcategories shown</li>
<li>The order detail links in the email consider the case, that neither guest link, nor registered is set</li>
<li>Feature that registered users must activate themself</li>
<li>getUserInfoInUserFields getting the right joomla user data per given id</li>
<li>Missing cart error message in js</li>
<li>Missing '' for constant VMPATH_ROOT in installer script</li>
<li>Removed useless \n in Sample shop decription</li>
<li>getVendorAddressFields when a administrator and vendor edits another vendor.</li>
<li>category model calls to clearCategoryRelatedCaches</li>
<li>language of shipment plugin in order view</li>
<li>added chosenDropDowns in cart default shopperform</li>
<li>little fix for custom cartlayout</li>
<li>Copyright years updated, renamed variables and other minors</li>
<li>fixed a lot warnings of the type "Deprecated: Required parameter $isSite follows optional parameter $selectedCategories in /var/www/vhosts/.../administrator/components/com_virtuemart/helpers/shopfunctions.php on line 652". So we are already prepared for PHP8.</li>
</ul>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>";}i:1;O:8:"stdClass":3:{s:4:"link";s:94:"https://virtuemart.net/news/502-security-release-virtuemart-3-8-6-closing-an-xss-vulnerability";s:5:"title";s:62:"Security Release VirtueMart 3.8.6 Closing an XSS Vulnerability";s:11:"description";s:5650:"<p>A new XSS was found by 4N_CURZE (https://www.openbugbounty.org/researchers/4N_CURZE/). It took a while to reproduce it, because it was caused by the manufactuer dropdown, which is not always activated. The problem itself was easy to fix, although the value was whitelisted everywhere else, it was missing for the manufacturer drop-down list.</p>
<p>Since the previous release some features got added. The long desired multicart system got implemented. Multicart means for a multi-vendor shop, that there is an extra cart for each vendor. So when a customer buys products from different vendors he needs to do a checkout for every vendor. This system is very interesting for real marketplaces, which offer products of different vendors.</p>
<p>Another nice new feature are payment/shipment restrictions by coupons. This can be used to offer customers other payment methods over the phone, such as bank transfer for example. Or it can be used for marketing campaigns like "use this coupon to get free shipment".</p>
<p>The textinput plugin can now be used for mandatory text, as we have introduced a required characters check.&nbsp;iStraxx contributed the toggleCartButton.js with MIT license for the required characters check.</p>
<p>StAn of RuposTel has provided a useful overhaul of the VirtueMart recaptcha system. It now works according to the new Joomla standards and works with any joomla captcha plugin. Read more about this on <a href="http://docs.virtuemart.net/tutorials/administration-configuration-vm-2/243-new-captcha-system-in-virtuemart-3-8-6.html">docs.virtuemart.net</a></p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<p>&nbsp;</p>
<p>Multivendor:</p>
<ul>
<li>Added MultiCart system</li>
<li>Cart module, replaced link to cart against button, old links should still work</li>
<li>Vendor dropdown for Categories.</li>
<li>Added the feature that subvendors can check orders, but only if at least one product of them is on the order.</li>
</ul>
<p>&nbsp;</p>
<p>Extended features</p>
<ul>
<li>Added shipment/payment restriction by Coupon</li>
<li>Added required chars to the textinput plugin</li>
<li>Added layout orderdone for weight_countries plugin, which can be used to override the standard output</li>
<li>Added a warning to the vmconfig if the price config is overwritten by shoppergroups.</li>
<li>Product edit view and model, added filter for published/unpublished, added searching of products in multiple categories</li>
</ul>
<p>&nbsp;</p>
<p>Language:</p>
<ul>
<li>Added&nbsp;VM config setting ReInjectJLanguage, which replaces the Joomla JLanguage object with VmLanguage</li>
<li>Update for the VirtueMart System Plugin, for multilanguage as it may be useful to load the&nbsp;VM config always first</li>
<li>Replaced $languages = JLanguageHelper::createLanguageList against $JLanguages = JHtml::_('contentlanguage.existing')</li>
</ul>
<p>&nbsp;</p>
<p>Security:</p>
<ul>
<li>XSS leak fixed in manufacturer dropdown</li>
<li>Recaptcha Overhaul by StAn of RuposTel</li>
</ul>
<p>&nbsp;</p>
<p>Payments:</p>
<ul>
<li>PayPal refund configuration option to prevent VM generating a request for PayPal refund</li>
<li>Small paypal enhancement, inspired by RuposTel and written by Quorvia</li>
</ul>
<p>&nbsp;</p>
<p>Development:</p>
<ul>
<li>category model added function getChildCategoryListObjectByCachedOption which is now used by getChildCategoryList and getChildCategoryListObjectByCachedOption&nbsp;&nbsp;</li>
<li>function getSafePathFor can now be used to create any kind of subfolder</li>
<li>custom model, directTrigger for plgVmDeclarePluginParamsCustomVM3 and plgVmGetTablePluginParams vmplugin.php enhanced function declarePluginParams</li>
<li>Fixed customfield model cache. We load now always all attributes and cache that. and we use directTrigger for plgVmDeclarePluginParamsCustomVM3</li>
<li>user model, added cache</li>
<li>user model, set the function "setId" to deprecated. The use of the internal id as pointer is useless. The function getUser should now be called with id, but usese as fallback the old $this-&gt;_id construction</li>
<li>userfield model added JPluginHelper::importPlugin('user'); to the getUserFieldsFor function</li>
<li>iStraxx added the toggleCartButton.js with MIT license, need for the textinput required letters.&nbsp;</li>
<li>Invoice, the product is always reloaded to create the item.&nbsp;</li>
</ul>
<p>&nbsp;</p>
<p>Fixes:</p>
<ul>
<li>Small fix for coupons using the correct language</li>
<li>Fixed that Calculation rules were not including the given end day, because the hours and seconds were not set</li>
<li>added registration of Vm Controller and View to massxref.php</li>
<li>vmTable warning if a key of the params is accidently empty</li>
<li>Added _genericVendorId to vmtable and fallback&nbsp;</li>
<li>tables/order_items.php added the very important $this-&gt;_genericVendorId = false to fix virtuemart_vendor_id of order items.</li>
<li>Updates for the joomla fullinstaller</li>
<li>little fix for updatesmigration in case of multivendor store</li>
<li>little fix for the tableupdater to prevent notice.</li>
<li>important fix for the backend user view to ensure that the correct addresses are loaded.</li>
<li>fixes for tcpdf to work on higher php versions</li>
<li>fixed function updateCategory for the xref data</li>
<li>fixed tooltip in config (check for existing lang key did not work the old way anylonger)</li>
<li>mail_raw_pricelist.php replaced $item-&gt;product_final_price against $item-&gt;product_subtotal_with_tax</li>
</ul>";}i:2;O:8:"stdClass":3:{s:4:"link";s:76:"https://virtuemart.net/news/501-skrill-merchant-on-boarding-virtuemart-3-8-4";s:5:"title";s:45:"Skrill Merchant On Boarding, VirtueMart 3.8.4";s:11:"description";s:4331:"<h3>Great update of the Skrill Plugin</h3>
<p>Trusted by millions across the globe Skrill meets the needs of more than 156,000 businesses worldwide providing a convenient and secure way to send and receive money in nearly 200 countries and 40 currencies.</p>
<p>Our payments platform comes with an exclusive reduced fee offer of 0.9% on Debit Card/Prepaid Card/Credit Card (VISA, Mastercard, Maestro) transactions, and 0.5% fees on Rapid Transfer transactions.*<br /> *Fees apply to new merchants only within restricted industry sectors.&nbsp;<a href="https://www.skrill.com/en/footer/terms-conditions/fees-reduction-promotion/">Terms and conditions apply.</a></p>
<p><a href="https://www.skrill.com/en/business/ecommerce-promotion/?utm_source=virtue-mart&amp;utm_medium=banner&amp;utm_campaign=ecomprom&amp;utm_content=product-page&amp;rid=128963654"><img style="float: right;" src="https://virtuemart.net/images/stories/news/CCRT_ShoppingCartPartners_900x516_EN_CTA.jpg" alt="CCRT ShoppingCartPartners 900x516 EN CTA" width="321" height="184" /></a></p>
<p>What this module does for you:</p>
<ul>
<li>Free and quick setup</li>
<li>Access credit cards and 100+ local payment solutions with 1 easy integration</li>
<li>Take advantage of the Skrill multicurrency account, giving you access to 40+ currencies</li>
<li>High-security standards and anti-fraud technology</li>
<li>Seamless payment experience across mobile, tablet and desktop</li>
<li>Connect with millions of Skrill account holders</li>
</ul>
<p>Features:</p>
<ul>
<li>Additional payment options and control over how they are displayed</li>
<li>Customizable gateway with embedded page and redirect functionality</li>
<li>Instant settlement</li>
<li>Enhanced reporting and transaction status viewing</li>
<li>Refund capability within VirtueMart</li>
</ul>
<p>What your customers will like:</p>
<ul>
<li>Easy ways to pay safely online – no sign-up required to make payments</li>
<li>Convenient and immediate payments – pay with a bank account, or debit and credit cards without any hassle</li>
<li>Multiple local payment options allowing customers to pay how they want</li>
<li>Internationally recognized and trusted brand</li>
</ul>
<p>Don’t have an account?&nbsp;<a href="https://signup.skrill.com/onboarding/#/?rdu=onboarding&amp;rid=128963654">Sign up for free today!</a></p>
<p>&nbsp;</p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<h4>VirtueMart, List of Bugfixes:</h4>
<ul>
<ul>
<li>PayPal Smartbuttons should not redirect in checkout if called without redirect option</li>
<li>removed useless mod_virtuemart_product_helper and other minors</li>
<li>enhanced displayIt function, it resolves now all parameters to an array and only the non empty ones are written. It is also possible now to remove the parameter src completly or replace it with another name. For example when the array has 'src' =&gt; 'data-src', then the parameter src is renamed to data-src and filled with the correct URL.</li>
<li>enhanced lazyLoad configuration, added GUI option in template tab of vm config</li>
<li>css addtocart, addtocart-disabled and notify, All buttons should have the same height.</li>
<li>New language variables for new reviews feature.New language variables for new reviews feature.</li>
<li>Mediahandler adjustment php7.4</li>
<li>order updateBill sql a plus was not commented</li>
<li>country table added UNIQUE to the indexes of country 2 and country 3 code.</li>
<li>added Paraguay states</li>
<li>removed old jquery.min we use now always the joomla one.</li>
<li>created GUI for hidden config pricesbyCurrency, extended it by one option (restrictiv)</li>
<li>Pagination for coupon analytics</li>
<li>fixed wrong invoice numbers generated if fired in the order edit view <a href="http://forum.virtuemart.net/index.php?topic=144911.0fixed">http://forum.virtuemart.net/index.php?topic=144911.0</a></li>
<li>translated address in cart (translated countries)</li>
<li>fixed router in case sef is disabled and an array is used in the url</li>
<li>it could happen that payment or shipment was not set due a conflicting js, the js is now unbound for these radios</li>
<li>renderMetaEdit added real option for "index, follow".</li>
</ul>
</ul>";}i:3;O:8:"stdClass":3:{s:4:"link";s:84:"https://virtuemart.net/news/500-release-of-virtuemart-3-8-and-covid-support-campaign";s:5:"title";s:52:"Release of VirtueMart 3.8 and Covid support campaign";s:11:"description";s:12683:"<p style="text-align: justify;">This is a special release in these unusual times. It was planned as simple version with an optimisation boost and bugfixes for VM 3.6.10, but it became a lot more than that. Many people are affected by a corona stasis. One of our members had to go in quarantine (without being infected) where he had a lot of time tor develop and donate smaller enhancements. Personally, I had been preparing for coming restrictions since the end of February since it was clear that Germany will follow the other countries. My wife and I are now taking care of our children's homework and home-education, which are aged from 3 to 11 and my development time is severely impacted. On the other hand this period allowed to really hard-cook this version in the debug process. It is already in use on some live shops for at least the past 2 weeks now.</p>
<p>Some of our developers also joined the <span style="font-size: 12pt;">COVID Support campaign for the Joomla community</span> <a href="https://covid.joomlart.com/" target="_blank" rel="noopener">https://covid.joomlart.com/</a>. Participating developers offer a <span style="font-size: 12pt;">20% discount</span> on <a href="https://extensions.virtuemart.net" target="_blank" rel="noopener">extensions.virtuemart.net</a>&nbsp;</p>
<p><img src="https://virtuemart.net/images/stories/news/owl-2920403_640.jpg" alt="VirtueMart Version Eagle Owl" /><br /><span>Image by <a href="https://pixabay.com/users/Alexas_Fotos-686414/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2920403">Alexas_Fotos</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2920403">Pixabay</a></span></p>
<p style="text-align: justify;">The biggest change under the hood are the new optimizations that avoid massive sql requests and use booleans to decide whether we need to load data from an xref table. The technique has some implications, which are described on docs.virtuemart.net <a href="http://docs.virtuemart.net/tutorials/development/241-reduced-database-access-by-using-booleans-for-reference-tables.html.">http://docs.virtuemart.net/tutorials/development/241-reduced-database-access-by-using-booleans-for-reference-tables.html.</a> When I worked on that pattern for categories, I noticed that we can enhance the loading of a category tree in a similar way. Rough tests with more than 200 categories (organised as years) indicate a 5 times faster loading time.</p>
<p style="text-align: justify;">The customfield_value created a permanent performance bottleneck. VirtueMart now creates database keys shortened to the first 50 values, which is a reasonable compromise between using a customfield_value as a simple information value and using it as a searchable value.</p>
<p style="text-align: justify;">The VirtueMart native Language Switcher, which is currently part of the VirtueMart membership <a href="https://extensions.virtuemart.net/support-updates/virtuemart-membership">https://extensions.virtuemart.net/support-updates/virtuemart-membership</a>, now works more more reliable after some really hard work on the router. The new language switcher creates any SEF Urls for different languages. This means it can switch between product details or just the account maintenance - of course without landing on the homepage. Maybe not that interesting for shoppers, but of importance for administrators. <a href="https://extensions.virtuemart.net/support-updates/virtuemart-membership"> </a><a href="https://extensions.virtuemart.net/support-updates/virtuemart-membership">https://extensions.virtuemart.net/support-updates/virtuemart-membership</a>.</p>
<p style="text-align: justify;">Template developers who used vmbeez3 before 3.8.0 must consider the security leak reported by the Joomla community <a href="https://developer.joomla.org/security-centre/803-20200302-core-xss-in-protostar-and-beez3.html">https://developer.joomla.org/security-centre/803-20200302-core-xss-in-protostar-and-beez3.html</a> and update their templates as soon as possible. It is just two lines.</p>
<p style="text-align: justify;">The next milestones are enhancing/fixing the VirtueMart order editing, invoice handling and Joomla 4 compatibility.</p>
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<p>&nbsp;</p>
<h3>Optimisations</h3>
<ul>
<li>Using booleans to decide if the data of an xref table should be loaded - saving large SQL queries</li>
<li>Enhanced category tree building</li>
<li>Finally Final keys for customfield_value</li>
<li>added static to function getProductListing</li>
<li>if automaticSelectedPayment/Shipment is set to none, the whole trigger plgVmOnCheckAutomaticSelected is not longer executed</li>
<li>replaced overpowered md5 for hash replaced against crc32 or removed completly</li>
<li>renderVendorFullVendorList is cached now</li>
<li>increased size of vendor_terms_of_service to mediumtext</li>
<li>function getProductChildIds extended and cache added</li>
<li>customfield C uses now function getProductChildIds in the product model (cached)</li>
<li>smarter loading of parent category in backend category view</li>
</ul>
<h3>enhanced features for shop</h3>
<ul>
<li>Coupon handling enhancements - additions included from Creative Momentum Ltd</li>
<li>featured products load 3 times more than necessary to shuffle with PHP (Random per sql is not really random).</li>
<li>Snippet ld-json and double quote in product descriptions <a href="https://forum.virtuemart.net/index.php?topic=143951.0">https://forum.virtuemart.net/index.php?topic=143951.0</a></li>
<li>Revenue report: added date_presets for reporting over previous two years with totals available by year/month</li>
<li>FE managing link, add new product link, notify me link buttonized</li>
</ul>
<h3>enhanced features for templaters/developers</h3>
<ul>
<li>added loading of "searchable" also for the cart</li>
<li>enhanced recognition of frontend manager</li>
<li>tableupdater enhanced being more failproof by RuposTel</li>
<li>changed function isImage so, that it takes now a full url and not just the extension as input parameter. The parameter before was quite useless, because half of the work of the function is to get the file extension.</li>
<li>medihahandler - enhanced display of the options upload, replace</li>
<li>Standard payment has now also the method as variable in the layout post_payment</li>
<li>ensureUniqueId correctly implemented for radiolists for multivariants</li>
<li>added variable show_notify to product model based on the order min level (not just 1 as before)</li>
<li>vmprices, enhanced the lines catching the add to cart button</li>
<li>Added function resetEntireCart to cart</li>
</ul>
<h3>new features for shop</h3>
<ul>
<li>Colors for shipment methods in the admin order list</li>
<li>Added config options for sql - optimisation</li>
<li>Added config option to disable layout overrides</li>
<li>added tool reset_Has_x_Fields to updatesmigration view, which sets all "has_" fields to NULL</li>
<li>hidden config populateEmptyST (ShipTo details remain empty and do not get auto populate by the details in the BillTo details)</li>
<li>hidden config shoppergroupDontSaveCart - dont store carts for logged in users if in specified shoppergroups</li>
<li>Product model added hidden config changeCategoryRemoveFilter</li>
</ul>
<h3>new features for templaters/developers</h3>
<ul>
<li>Debug Option for router</li>
<li>vmAccess added function isFEmanager()</li>
<li>added extra override posssibility for FE manager views using the suffix Admin to the view name (in case BE and FE view has the same name)</li>
<li>Important feature for class vmtables function load, when the $overWriteLoadName is within the translateable fields, then the "where table" is the language table and not the main table. So we can now load a product by slug, for example.</li>
<li>added the trigger plgVmOnSendVmEmail in function sendVmMail</li>
<li>added javascript function sendFormChange to vm2admin.js, which sends the form of changed elements if using as class sendFormChange</li>
<li>Changed the vmtime so, that we can sum up the taken measurements</li>
</ul>
<h3>compatibility for Joomla, Joomla 4, PHP7.4</h3>
<ul>
<li>replaced $app-&gt;isAdmin/isSite() and similar with VmConfig::isSite() or VmConfig::isSiteByApp()</li>
<li>replaced more $obj-&gt;$value with $obj-&gt;{$value}</li>
<li>replaced class hasTip with "hasTooltip", furthermore added JHtml::_('bootstrap.tooltip'); for joomla native bootstrap tooltips</li>
</ul>
<h3>Fixes</h3>
<ul>
<li>fixed moving/ordering of categories</li>
<li>hidden configuration ChangeShopperDeleteCart fixed resetting of the cart if switching to a user or registering</li>
<li>Cart takes directly the email of logged in joomla users</li>
<li>Model customfields, customfields should now also work with 0 values <a href="http://forum.virtuemart.net/index.php?topic=142152.0">http://forum.virtuemart.net/index.php?topic=142152.0</a></li>
<li>Important fix for customfields, Removing a disabler from a customfield must delete the customfield which stores the disabler</li>
<li>usermodel storing user of vendors</li>
<li>fixed custom language fallbacks</li>
<li>vmTable fixes for language fallback, the problem was that the function is used itself twice so the set temporarly language got lost</li>
<li>country dropdown sorted by ordering and alphabetically and with special chars like äöü</li>
<li>added _noLimit = true; to prevent that the state of the model is used for Shipmentdropdown, category ordering dropdown,</li>
<li>removed old tasks in controllers for ajax, function viewJson</li>
<li>removed false positive "Set shoppergroup error"</li>
<li>removed task=viewJson&amp; from Urls</li>
<li>mediahandler replaced manual setup url against js variable medialink</li>
<li>fix in shopfunctions.php functions renderWeightUnitList and renderUnitIsoList, add unknown units to prevent that they are changed/deleted (thx RuposTel)</li>
<li>Rounding for currency conversion of costprice and of Margin in case "round only display" is unchecked.</li>
<li>product edit, unpublished categories were not rendered</li>
<li>cart max_order_level must be checked after checking for quantity steps (by RuposTel)</li>
<li>a bit different enhanced quantity check (by RuposTel)</li>
<li>Fixed naming of category parameters</li>
<li>Fix for usermodel function getUserList in case searchTable shoppers</li>
<li>html tag for radio buttons Multivariant fixed ids</li>
<li>replaced wrong Vmconfig ajax_category against jdynupdate</li>
</ul>
<h3>Router</h3>
<ul>
<li>Big update for multilanguage pages. Loads automatically different language if a language tag is given.</li>
<li>Debug option for router</li>
<li>Important fix to prevent error if there is no menu item set for the account maintenance</li>
<li>function getProductId loads the CategoryName with array_pop not end, the hash uses base64_encode instead of md5 (was overpowered)</li>
<li>added unset "start" to productdetails view (hardly used, pagination for related products?), but could generical create bad links with the language switcher</li>
<li>function getFieldOfObjectWithLangFallBack was joining language fallback tables, but not using fallbacks in the where clause</li>
</ul>
<h3>&nbsp;Security</h3>
<ul>
<li>html_entity_decode for order names in order list</li>
<li>When no safe path was given, it was corrected by JPath::clean() to the domain root path and created accidently safepath files and folders in the root directory, fixed.</li>
<li>vmbeez3 updated with joomla beez3 template and security update j3.9.16 <a href="https://developer.joomla.org/security-centre/803-20200302-core-xss-in-protostar-and-beez3.html">https://developer.joomla.org/security-centre/803-20200302-core-xss-in-protostar-and-beez3.html</a></li>
<li>Updated vm system pugin vmLoaderPluginUpdate. When a joomla user is deleted, the corresponding virtuemart data is now also deleted.</li>
<li>Deleting a Virtuemart user removes also the joomla user now</li>
</ul>
<h3>Payment Plugins</h3>
<ul>
<li>Big Update for Skrill by the Skrill Team Esphere, images compressed by iStraxx</li>
<li>Avatax, Fixes and adjustments by AXIOM</li>
<li>Realex Plugin removed trigger in createPmtRefTable, the trigger is already executed in $userFieldsModel-&gt;store($data);</li>
<li>Enhanced PayPal Smartbuttons. Shows PayPal Button now also when logged in.</li>
<li>Minors for Sofort</li>
<li>Minors for Paypal</li>
<li>Fixed core restrictions for skrill</li>
</ul>";}i:4;O:8:"stdClass":3:{s:4:"link";s:53:"https://virtuemart.net/news/498-bugfix-release-3-6-10";s:5:"title";s:88:"Bugfix Release 3.6.10 Important fix for category restriction of payment/shipment plugins";s:11:"description";s:7201:"<p style="text-align: justify;"><img src="https://virtuemart.net/images/virtuemart/news/VirtueMart-Doors.jpg" alt="VirtueMart Doors" />When a release is just around the corner, we stop adding new features and focus on testing and fixing bugs. So it's a normal reaction of our members to push their wishes after the release. So this new core has an above-average number of new features for a subversion. There are mainly two different groups of features. Some are like furniture. It is quite simple to add them and it is very unlikely that they break something. It may happen that the new table stands in the way of the rarely used door to the basement. But it is simple to fix. Most of the time our testers catch these issues, but sometimes the central heating door was not tested. The new features are all of that kind. The worst which can happen is, that they do not work.</p>
<div class="special-download">
<p style="text-align: center;"><a class="button-primary" href="https://virtuemart.net/download">DOWNLOAD VM3 NOW<br /> VirtueMart 3 component (core and AIO)</a></p>
<p style="text-align: justify;">Bigger, more complex feature changes are done in the major versions such as VirtueMart 3.6. These feature changes are more similar to changing the room layout of a house, or adding an extra floor, or replacing the roof, and so on. These are changes which require much more testing and these are more likely to break other constructions attached to your house. For example, the beautiful balcony (your one-page checkout).</p>
<p style="text-align: justify;">Sometimes we notice that our house is not really comfortable. Displaying the order details below the order list was a good idea, but if the order list was too long then buyers did not see the order details. The order details open now above the list. This way, the logic makes much more sense. If you scroll down in the order details, you can directly select the next order. These and similar changes can be found below in the list of changed behaviors.</p>
<p style="text-align: justify;">One of them even starts with "fixed an issue editing the order...". This one is a very typical problem with the GUI, the graphical user interface. The difference of design and art. It sounds simple, but it is not easy to create a functional GUI. It is quite simple to create a nice looking GUI, but that only counts at first glance. In the long run, a GUI must work functionally. The whole order editing started as plain edit function without any assistance. When you changed a data, the new data was taken. A rough calculation system was added to help with the simple summation.<br /> <br />VirtueMart 3.6 extended the order editing assisting system. The tax change works by drop-down, but this system was not written for discounts. The problem here was to find an elegant GUI. For example, a VAT does not need to be overwritten. If you select a VAT, you expect a fail-proof calculation. But sometimes a discount is granted according to a certain rule or only as a result of a specific trade. As a result, changing a quantity of a discounted item did not change the discount according to the new quantity. The system accepted the discount the old way, as direct input.<br /> <br />The new system now works so, that the discount is always calculated by the given prices and multiplied by the quantity. However, if some of the required prices do not exist (for example, the undiscounted gross price), the discount value is transferred as direct input for the whole position. So you can still overwrite the discount by simply emptying the gross price. The GUI concepts follows the intuitive idea, that an empty price field is calculated by the existing data. So you can of course also just set the gross price and the discount and you will get your net and final price calculated automatically.</p>
<p style="text-align: justify;">Last but not least the bug-fixes. Sometimes it happens that a "furniture feature" turns out to be a roof changer ;-). The feature "automatic thumbnailing of the 'no image set' image" is one of these types. It led to a cascade of changes in the mediahandler.php file. The feature "remote images" remained silent in its corner and only caused problems there. But the simple sounding "automatic thumbnailing of the 'no image set' image" even caused problems when adding a new media because it suddenly behaved as thumbnail "no image set" image.<br />Sometimes a bugfix aggravates the problem. In German we use the word "verschlimmbessern", from "schlimm" (sad) and "bessern" (to make better). Test users reported that sometimes payment/shipment methods are not correctly selected in the cart, or not visible for selection. The provided fix solved the problem if categories were not set, but created another one. Adding the extra tests for the case 'on empty' lead to a wrongly used pattern and broke the category conditions.</p>
<p style="text-align: justify;">I hope that I gave a good insight how complex it is to deal with new features, bugs, features removing bugs, and bugfixes adding bugs, and so on.</p>
<p style="text-align: justify;">Thanks to our good community - join us at forum.virtuemart.net</p>
</div>
<h3>List of new features</h3>
<ul>
<li>Added placeholders to userfields</li>
<li>Added cloning of products with children</li>
<li>Added hidden config adminProductListBruttoPrices</li>
<li>Added option to user list in backend "show only shoppers"</li>
<li>Added vendor drop-down to users list in backend, so that it filters "shoppers of a vendor"</li>
<li>Added option to user account view "showUserShopperGrp"</li>
</ul>
<h3>Changed behaviour</h3>
<ul>
<li>Remote medias can now also be stored with http/s (is removed automatically)</li>
<li>Discontinued products are now only filtered for shoppers (not as managers in FE or BE)</li>
<li>Fixed an issue editing the order. Increasing the quantity of an item did not increase the given discount, but used the entered one. More information here&nbsp;<a class="external" href="http://forum.virtuemart.net/index.php?topic=143888.0" target="_blank" rel="noopener">http://forum.virtuemart.net/index.php?topic=143888.0</a></li>
<li>Order details are now opened above the order list</li>
<li>PayPal does not directly try to validate the data (for certain sub-methods), only when in checkout process</li>
<li>When ChangeShopperDeleteCart option is activated, then it also empties of the addresses of the current cart</li>
<li>If automatic payment/shipment is set to "none", the triggers are not executed</li>
</ul>
<h3>Enhancements</h3>
<ul>
<li>Component aio should work more robust now (some plugins prevented that it loaded the vmconfig correctly)</li>
<li>Added database key for product sku</li>
<li>Added delay of 400 ms to mediahandler autosearch function</li>
</ul>
<h3>List of fixes</h3>
<ul>
<li>Fix for no image display in media edit</li>
<li>Fixed category conditions for methods (shipment/payment)</li>
<li>Removed a note in router due a vmdebug</li>
<li>Fixed logic of storing username, when it is not allowed to change the username</li>
<li>Fix for adding new ST address in account maintenance view</li>
<li>Fixed typo in handle404 function</li>
</ul>";}}s:6:"output";s:0:"";}