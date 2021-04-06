<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_console' => [[['_route' => 'console', '_controller' => 'coresphere_console.controller:consoleAction'], null, ['GET' => 0], null, false, false, null]],
        '/installer' => [[['_route' => 'installer_install', '_controller' => 'App\\Controller\\Installer\\InstallerController::index'], null, null, null, false, false, null]],
        '/installer/save-conviguration' => [[['_route' => 'installer_save_conviguration', '_controller' => 'App\\Controller\\Installer\\InstallerController::saveConviguration'], null, null, null, false, false, null]],
        '/installer/test-database-connection' => [[['_route' => 'installer_test_database_connection', '_controller' => 'App\\Controller\\Installer\\InstallerController::testDatabaseConnection'], null, null, null, false, false, null]],
        '/_trans' => [[['_route' => 'jms_translation_index', '_controller' => 'JMS\\TranslationBundle\\Controller\\TranslateController::indexAction'], null, null, null, true, false, null]],
        '/payment/capture/session-token' => [[['_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'hwi_oauth_connect', '_controller' => 'HWIOAuthBundle:Connect:connect'], null, null, null, true, false, null]],
        '/login/check-facebook' => [[['_route' => 'facebook_login'], null, null, null, false, false, null]],
        '/login/check-google' => [[['_route' => 'google_login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_console/commands(?:\\.(json))?(*:38)'
                .'|/(en|fr|es|ar|)/dashboard(*:70)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities(*:134)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities/add(*:203)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities/([^/]++)/edit(*:282)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities/([^/]++)/disable(*:364)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities/([^/]++)/delete(*:445)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities/([^/]++)/restore(*:527)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities/([^/]++)/show(*:606)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-amenities/([^/]++)/hide(*:685)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences(*:750)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences/add(*:819)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences/([^/]++)/edit(*:898)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences/([^/]++)/disable(*:980)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences/([^/]++)/delete(*:1061)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences/([^/]++)/restore(*:1144)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences/([^/]++)/show(*:1224)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-audiences/([^/]++)/hide(*:1304)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories(*:1383)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories/add(*:1466)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories/([^/]++)/edit(*:1559)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories/([^/]++)/disable(*:1655)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories/([^/]++)/delete(*:1750)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories/([^/]++)/restore(*:1846)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories/([^/]++)/show(*:1939)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-post\\-categories/([^/]++)/hide(*:2032)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts(*:2100)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts/add(*:2172)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts/([^/]++)/edit(*:2254)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts/([^/]++)/disable(*:2339)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts/([^/]++)/delete(*:2423)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts/([^/]++)/restore(*:2508)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts/([^/]++)/show(*:2590)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-blog\\-posts/([^/]++)/hide(*:2672)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories(*:2739)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/add(*:2810)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/edit(*:2891)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/disable(*:2975)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/delete(*:3058)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/restore(*:3142)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/show(*:3223)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/hide(*:3304)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/featured(*:3389)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-categories/([^/]++)/notfeatured(*:3477)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/console(*:3533)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/console/execute\\-command/([^/]++)/([^/]++)/([^/]++)(*:3633)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries(*:3699)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries/add(*:3769)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries/([^/]++)/edit(*:3849)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries/([^/]++)/disable(*:3932)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries/([^/]++)/delete(*:4014)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries/([^/]++)/restore(*:4097)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries/([^/]++)/show(*:4177)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-countries/([^/]++)/hide(*:4257)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/payment/manage\\-currencies(*:4341)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/payment/manage\\-currencies/add(*:4429)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/payment/manage\\-currencies/([^/]++)/edit(*:4527)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/payment/manage\\-currencies/([^/]++)/delete(*:4627)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles(*:4705)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/add(*:4787)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/edit(*:4879)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/featured(*:4975)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/notfeatured(*:5074)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/disable(*:5169)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/delete(*:5263)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/restore(*:5358)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/show(*:5450)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/articles/([^/]++)/hide(*:5542)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories(*:5622)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories/add(*:5706)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories/([^/]++)/edit(*:5800)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories/([^/]++)/disable(*:5897)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories/([^/]++)/delete(*:5993)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories/([^/]++)/restore(*:6090)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories/([^/]++)/show(*:6184)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-help\\-center/categories/([^/]++)/hide(*:6278)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages(*:6344)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages/add(*:6414)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages/([^/]++)/edit(*:6494)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages/([^/]++)/disable(*:6577)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages/([^/]++)/delete(*:6659)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages/([^/]++)/restore(*:6742)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages/([^/]++)/show(*:6822)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-languages/([^/]++)/hide(*:6902)'
                .'|/(en|fr|es|ar|)/dashboard/administrator(*:6950)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-pages(*:7012)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-pages/add(*:7078)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-pages/([^/]++)/edit(*:7154)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-pages/([^/]++)/delete(*:7232)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/payment(*:7297)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/checkout(*:7363)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/payment/gateways/add(*:7441)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/payment/gateways/([^/]++)/edit(*:7529)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/newsletter(*:7597)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/homepage\\-hero(*:7669)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/layout(*:7733)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/events\\-list\\-page(*:7809)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/venue\\-page(*:7878)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/blog(*:7940)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/mail\\-server(*:8010)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/google\\-recaptcha(*:8085)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/google\\-maps(*:8155)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/social\\-login(*:8226)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/menus(*:8289)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/settings/menus/([^/]++)/edit(*:8366)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/translation(*:8426)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-users(*:8488)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-users/([^/]++)/delete\\-permanently(*:8579)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-users/([^/]++)/delete(*:8657)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-users/([^/]++)/restore(*:8736)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-users/([^/]++)/enable(*:8814)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-users/([^/]++)/disable(*:8893)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/administrator/manage\\-users/([^/]++)/more\\-information(*:8996)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/administrator/manage\\-users/([^/]++)/empty\\-cart(*:9093)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types(*:9163)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types/add(*:9237)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types/([^/]++)/edit(*:9321)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types/([^/]++)/disable(*:9408)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types/([^/]++)/delete(*:9494)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types/([^/]++)/restore(*:9581)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types/([^/]++)/show(*:9665)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues\\-types/([^/]++)/hide(*:9749)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/profile(*:9801)'
                .'|/(en|fr|es|ar|)/dashboard/organizer(*:9845)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-points\\-of\\-sale(*:9910)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-points\\-of\\-sale/add(*:9979)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-points\\-of\\-sale/([^/]++)/edit(*:10058)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-points\\-of\\-sale/([^/]++)/delete\\-permanently(*:10153)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-points\\-of\\-sale/([^/]++)/delete(*:10235)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-points\\-of\\-sale/([^/]++)/enable(*:10317)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-points\\-of\\-sale/([^/]++)/disable(*:10400)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-scanners(*:10458)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-scanners/add(*:10520)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-scanners/([^/]++)/edit(*:10592)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-scanners/([^/]++)/delete\\-permanently(*:10679)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-scanners/([^/]++)/delete(*:10753)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-scanners/([^/]++)/enable(*:10827)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-scanners/([^/]++)/disable(*:10902)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/settings/scanner\\-app(*:10969)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/settings/payouts(*:11031)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/settings/payouts/add(*:11097)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/settings/payouts/([^/]++)/edit(*:11173)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/settings/payouts/([^/]++)/unset(*:11250)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/account/settings(*:11311)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/cart(*:11360)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/cart/add(*:11413)'
                .'|/(en|fr|es|ar|)/dashboard/pointofsale/cart/add(*:11469)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/cart/([^/]++)/remove(*:11534)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/cart/empty(*:11589)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-events(*:11653)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events(*:11709)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/add(*:11769)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/([^/]++)/edit(*:11839)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-events/([^/]++)/delete\\-permanently(*:11932)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-events/([^/]++)/delete(*:12012)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/([^/]++)/delete\\-permanently(*:12097)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/([^/]++)/delete(*:12169)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-events/([^/]++)/restore(*:12250)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/([^/]++)/publish(*:12323)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/([^/]++)/draft(*:12394)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-events/([^/]++)/details(*:12475)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/([^/]++)/details(*:12548)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/checkout(*:12601)'
                .'|/(en|fr|es|ar|)/dashboard/pointofsale/checkout(*:12657)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/checkout/done(*:12715)'
                .'|/(en|fr|es|ar|)/dashboard/pointofsale/checkout/done(*:12776)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/checkout/failure/([^/]++)(*:12846)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/my\\-tickets(*:12902)'
                .'|/(en|fr|es|ar|)/dashboard/pointofsale/my\\-orders(*:12960)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/manage\\-orders(*:13020)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-orders(*:13084)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/my\\-tickets/([^/]++)(*:13149)'
                .'|/(en|fr|es|ar|)/dashboard/pointofsale/my\\-orders/([^/]++)(*:13216)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/recent\\-orders/([^/]++)(*:13285)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-orders/([^/]++)(*:13358)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-orders/([^/]++)/cancel(*:13438)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-orders/([^/]++)/delete(*:13518)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-orders/([^/]++)/restore(*:13599)'
                .'|/(en|fr|es|ar|)/dashboard/print\\-tickets/([^/]++)(*:13658)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/recent\\-orders/([^/]++)/resend\\-confirmation\\-email(*:13755)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-orders/([^/]++)/resend\\-confirmation\\-email(*:13856)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-payout\\-requests/add/([^/]++)(*:13935)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests(*:14009)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-payout\\-requests(*:14075)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests/([^/]++)/cancel(*:14165)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-payout\\-requests/([^/]++)/cancel(*:14247)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests/([^/]++)/failed(*:14337)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests/([^/]++)/delete(*:14427)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests/([^/]++)/restore(*:14518)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests/([^/]++)/approve(*:14609)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests/([^/]++)/approved(*:14701)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-payout\\-requests/([^/]++)/details(*:14792)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-payout\\-requests/([^/]++)/details(*:14875)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/reports(*:14932)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/reports(*:14985)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/my\\-reviews(*:15041)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/reviews(*:15094)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-reviews(*:15159)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/my\\-reviews/([^/]++)/add(*:15228)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-reviews/([^/]++)/show(*:15307)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-reviews/([^/]++)/hide(*:15386)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-reviews/([^/]++)/delete\\-permanently(*:15480)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-reviews/([^/]++)/delete(*:15561)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-reviews/([^/]++)/restore(*:15643)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-events/([^/]++)/event\\-dates/([^/]++)/statistics(*:15749)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-events/([^/]++)/event\\-dates/([^/]++)/statistics(*:15847)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues(*:15911)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-venues(*:15967)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/add(*:16035)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/edit(*:16113)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-venues/add(*:16173)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-venues/([^/]++)/edit(*:16243)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/disable(*:16324)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/delete(*:16404)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-venues/([^/]++)/disable(*:16477)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-venues/([^/]++)/delete(*:16549)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/restore(*:16630)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/show(*:16708)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/hide(*:16786)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-venues/([^/]++)/show(*:16856)'
                .'|/(en|fr|es|ar|)/dashboard/organizer/my\\-venues/([^/]++)/hide(*:16926)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/listondirectory(*:17015)'
                .'|/(en|fr|es|ar|)/dashboard/administrator/manage\\-venues/([^/]++)/hidefromdirectory(*:17106)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/my\\-favorites(*:17164)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/my\\-favorites/add/([^/]++)(*:17235)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/my\\-favorites/remove/([^/]++)(*:17309)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/following(*:17363)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/following/add/([^/]++)(*:17430)'
                .'|/(en|fr|es|ar|)/dashboard/attendee/following/remove/([^/]++)(*:17500)'
                .'|/(en|fr|es|ar|)/dashboard/attendee(*:17544)'
                .'|/(en|fr|es|ar|)/dashboard/pointofsale(*:17591)'
                .'|/(en|fr|es|ar|)/dashboard/scanner/event\\-date/([^/]++)/attendees\\-check\\-in(*:17676)'
                .'|/(en|fr|es|ar|)/dashboard/scanner/event\\-date/([^/]++)/attendees\\-check\\-in/([^/]++)/check\\-in(*:17780)'
                .'|/(en|fr|es|ar|)/dashboard/scanner(*:17823)'
                .'|/(en|fr|es|ar|)/blog(?:/([^/]++))?(*:17867)'
                .'|/(en|fr|es|ar|)/blog\\-article/([^/]++)(*:17915)'
                .'|/(en|fr|es|ar|)/events(*:17947)'
                .'|/(en|fr|es|ar|)/event/([^/]++)(*:17987)'
                .'|/(en|fr|es|ar|)/categories(*:18023)'
                .'|/(en|fr|es|ar|)/help\\-center(*:18061)'
                .'|/(en|fr|es|ar|)/help\\-center/([^/]++)(*:18108)'
                .'|/(en|fr|es|ar|)/help\\-center/article/([^/]++)(*:18163)'
                .'|/(en|fr|es|ar|)(*:18188)'
                .'|/(en|fr|es|ar|)/newsletter\\-subscribe(*:18235)'
                .'|/(en|fr|es|ar|)/organizer/([^/]++)(*:18279)'
                .'|/(en|fr|es|ar|)/page/([^/]++)(*:18318)'
                .'|/(en|fr|es|ar|)/contact(*:18351)'
                .'|/(en|fr|es|ar|)/access\\-denied(*:18391)'
                .'|/(en|fr|es|ar|)/event/([^/]++)/reviews(*:18439)'
                .'|/(en|fr|es|ar|)/venues(*:18471)'
                .'|/(en|fr|es|ar|)/venue/([^/]++)(*:18511)'
                .'|/(en|fr|es|ar|)/api/get\\-countries(*:18555)'
                .'|/(en|fr|es|ar|)/api/get\\-country(?:/([^/]++))?(*:18611)'
                .'|/(en|fr|es|ar|)/api/get\\-events(*:18652)'
                .'|/(en|fr|es|ar|)/api/get\\-event(?:/([^/]++))?(*:18706)'
                .'|/(en|fr|es|ar|)/api/event/([^/]++)/get\\-event\\-dates(*:18768)'
                .'|/(en|fr|es|ar|)/api/get\\-event\\-date(?:/([^/]++))?(*:18828)'
                .'|/(en|fr|es|ar|)/api/dashboard/pointofsale/get\\-event\\-dates\\-onsale(*:18905)'
                .'|/(en|fr|es|ar|)/api/event/([^/]++)/event\\-date/([^/]++)/get\\-tickets(*:18983)'
                .'|/(en|fr|es|ar|)/api/get\\-event\\-ticket(?:/([^/]++))?(*:19045)'
                .'|/(en|fr|es|ar|)/api/login(*:19080)'
                .'|/(en|fr|es|ar|)/api/scanner/get\\-event\\-date\\-attendees/([^/]++)(*:19154)'
                .'|/(en|fr|es|ar|)/api/scanner/event\\-date/([^/]++)/grant\\-access/([^/]++)(*:19235)'
                .'|/(en|fr|es|ar|)/api/get\\-organizers(*:19280)'
                .'|/(en|fr|es|ar|)/api/get\\-users(*:19320)'
                .'|/(en|fr|es|ar|)/api/get\\-organizer(?:/([^/]++))?(*:19378)'
                .'|/(en|fr|es|ar|)/api/get\\-user(?:/([^/]++))?(*:19431)'
                .'|/_trans/api/configs/([^/]++)/domains/([^/]++)/locales/([^/]++)/messages(*:19512)'
                .'|/(en|fr|es|ar|)/dashboard/change\\-password(*:19564)'
                .'|/(en|fr|es|ar|)/signup/attendee(*:19605)'
                .'|/(en|fr|es|ar|)/signup/organizer(*:19647)'
                .'|/(en|fr|es|ar|)/signup/check\\-email(*:19692)'
                .'|/(en|fr|es|ar|)/signup/confirm/([^/]++)(*:19741)'
                .'|/(en|fr|es|ar|)/signup/confirmed(*:19783)'
                .'|/(en|fr|es|ar|)/resetting/request(*:19826)'
                .'|/(en|fr|es|ar|)/resetting/send\\-email(*:19873)'
                .'|/(en|fr|es|ar|)/resetting/check\\-email(*:19921)'
                .'|/(en|fr|es|ar|)/resetting/reset/([^/]++)(*:19971)'
                .'|/(en|fr|es|ar|)/resetting/done(*:20011)'
                .'|/(en|fr|es|ar|)/signin(*:20043)'
                .'|/(en|fr|es|ar|)/login_check(*:20080)'
                .'|/(en|fr|es|ar|)/signout(*:20113)'
                .'|/js(?'
                    .'|/routing(?:\\.(js|json))?(*:20153)'
                    .'|on(?:/([^/]++))?(*:20179)'
                .')'
                .'|/payment/(?'
                    .'|ca(?'
                        .'|pture/([^/]++)(*:20221)'
                        .'|ncel/([^/]++)(*:20244)'
                    .')'
                    .'|authorize/([^/]++)(*:20273)'
                    .'|notify/(?'
                        .'|unsafe/([^/]++)(*:20308)'
                        .'|([^/]++)(*:20326)'
                    .')'
                    .'|payout/([^/]++)(*:20352)'
                    .'|refund/([^/]++)(*:20377)'
                    .'|sync/([^/]++)(*:20400)'
                .')'
                .'|/s(?'
                    .'|itemap\\.(?'
                        .'|(xml)(*:20432)'
                        .'|([^/\\.]++)\\.(xml)(*:20459)'
                    .')'
                    .'|tream/(rss|atom|json)/([^/]++)(*:20500)'
                .')'
                .'|/rss(?:/([^/]++))?(*:20529)'
                .'|/a(?'
                    .'|tom(?:/([^/]++))?(*:20561)'
                    .'|pi/threads(?'
                        .'|/(?'
                            .'|new(?:\\.(json|xml|html))?(*:20613)'
                            .'|([^/]++)/comment(?'
                                .'|able/edit(?:\\.(json|xml|html))?(*:20673)'
                                .'|s/(?'
                                    .'|new(?:\\.(json|xml|html))?(*:20713)'
                                    .'|([^/]++)/(?'
                                        .'|remove(?:\\.(json|xml|html))?(*:20763)'
                                        .'|edit(?:\\.(json|xml|html))?(*:20799)'
                                        .'|votes/new(?:\\.(json|xml|html))?(*:20840)'
                                    .')'
                                .')'
                            .')'
                            .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:20885)'
                        .')'
                        .'|(?:\\.(json|xml|html))?(?'
                            .'|(*:20921)'
                        .')'
                        .'|/([^/]++)/comment(?'
                            .'|able(?:\\.(json|xml|html))?(*:20978)'
                            .'|s(?'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:21028)'
                                    .'|([^/]++)/state(?:\\.(json|xml|html))?(*:21074)'
                                    .'|([^/\\.]++)(?:\\.(json|xml|html))?(*:21116)'
                                .')'
                                .'|(?:\\.(json|xml|html))?(?'
                                    .'|(*:21152)'
                                .')'
                                .'|/([^/]++)/votes(?:\\.(json|xml|html))?(?'
                                    .'|(*:21203)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/m(?'
                    .'|ock/rss(?:/([^/]++))?(*:21244)'
                    .'|edia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:21306)'
                        .'|([A-z0-9_-]*)/(.+)(*:21334)'
                    .')'
                .')'
                .'|/translations(?:/([\\w]+)(?:\\.(js|json))?)?(*:21388)'
                .'|/connect/(?'
                    .'|([^/]++)(*:21418)'
                    .'|service/([^/]++)(*:21444)'
                    .'|registration/([^/]++)(*:21475)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'console_exec', '_controller' => 'coresphere_console.controller:execAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
        70 => [[['_route' => 'dashboard_index', '_controller' => 'App\\Controller\\Dashboard\\Main\\MainController::index'], ['_locale'], null, null, false, false, null]],
        134 => [[['_route' => 'dashboard_administrator_amenity', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        203 => [[['_route' => 'dashboard_administrator_amenity_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'dashboard_administrator_amenity_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'dashboard_administrator_amenity_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        445 => [[['_route' => 'dashboard_administrator_amenity_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        527 => [[['_route' => 'dashboard_administrator_amenity_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        606 => [[['_route' => 'dashboard_administrator_amenity_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        685 => [[['_route' => 'dashboard_administrator_amenity_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AmenityController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        750 => [[['_route' => 'dashboard_administrator_audience', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        819 => [[['_route' => 'dashboard_administrator_audience_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        898 => [[['_route' => 'dashboard_administrator_audience_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        980 => [[['_route' => 'dashboard_administrator_audience_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1061 => [[['_route' => 'dashboard_administrator_audience_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1144 => [[['_route' => 'dashboard_administrator_audience_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1224 => [[['_route' => 'dashboard_administrator_audience_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1304 => [[['_route' => 'dashboard_administrator_audience_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\AudienceController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1383 => [[['_route' => 'dashboard_administrator_blog_post_category', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1466 => [[['_route' => 'dashboard_administrator_blog_post_category_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1559 => [[['_route' => 'dashboard_administrator_blog_post_category_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1655 => [[['_route' => 'dashboard_administrator_blog_post_category_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1750 => [[['_route' => 'dashboard_administrator_blog_post_category_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1846 => [[['_route' => 'dashboard_administrator_blog_post_category_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        1939 => [[['_route' => 'dashboard_administrator_blog_post_category_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        2032 => [[['_route' => 'dashboard_administrator_blog_post_category_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostCategoryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        2100 => [[['_route' => 'dashboard_administrator_blog_post', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        2172 => [[['_route' => 'dashboard_administrator_blog_post_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2254 => [[['_route' => 'dashboard_administrator_blog_post_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2339 => [[['_route' => 'dashboard_administrator_blog_post_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        2423 => [[['_route' => 'dashboard_administrator_blog_post_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        2508 => [[['_route' => 'dashboard_administrator_blog_post_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        2590 => [[['_route' => 'dashboard_administrator_blog_post_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        2672 => [[['_route' => 'dashboard_administrator_blog_post_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\BlogPostController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        2739 => [[['_route' => 'dashboard_administrator_category', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        2810 => [[['_route' => 'dashboard_administrator_category_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2891 => [[['_route' => 'dashboard_administrator_category_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2975 => [[['_route' => 'dashboard_administrator_category_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        3058 => [[['_route' => 'dashboard_administrator_category_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        3142 => [[['_route' => 'dashboard_administrator_category_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        3223 => [[['_route' => 'dashboard_administrator_category_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        3304 => [[['_route' => 'dashboard_administrator_category_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        3389 => [[['_route' => 'dashboard_administrator_category_featured', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::featured'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        3477 => [[['_route' => 'dashboard_administrator_category_notfeatured', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CategoryController::featured'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        3533 => [[['_route' => 'dashboard_administrator_console', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\ConsoleController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        3633 => [[['_route' => 'dashboard_administrator_console_execute_command', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\ConsoleController::executeCommand'], ['_locale', 'command', 'optionKey', 'optionValue'], ['GET' => 0], null, false, true, null]],
        3699 => [[['_route' => 'dashboard_administrator_country', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        3769 => [[['_route' => 'dashboard_administrator_country_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3849 => [[['_route' => 'dashboard_administrator_country_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3932 => [[['_route' => 'dashboard_administrator_country_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        4014 => [[['_route' => 'dashboard_administrator_country_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        4097 => [[['_route' => 'dashboard_administrator_country_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        4177 => [[['_route' => 'dashboard_administrator_country_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        4257 => [[['_route' => 'dashboard_administrator_country_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CountryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        4341 => [[['_route' => 'dashboard_administrator_currency', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CurrencyController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4429 => [[['_route' => 'dashboard_administrator_currency_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CurrencyController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4527 => [[['_route' => 'dashboard_administrator_currency_edit', 'ccy' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CurrencyController::addedit'], ['_locale', 'ccy'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4627 => [[['_route' => 'dashboard_administrator_currency_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\CurrencyController::delete'], ['_locale', 'ccy'], ['GET' => 0], null, false, false, null]],
        4705 => [[['_route' => 'dashboard_administrator_help_center_article', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        4787 => [[['_route' => 'dashboard_administrator_help_center_article_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4879 => [[['_route' => 'dashboard_administrator_help_center_article_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4975 => [[['_route' => 'dashboard_administrator_help_center_article_featured', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::featured'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5074 => [[['_route' => 'dashboard_administrator_help_center_article_notfeatured', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::featured'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5169 => [[['_route' => 'dashboard_administrator_help_center_article_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5263 => [[['_route' => 'dashboard_administrator_help_center_article_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5358 => [[['_route' => 'dashboard_administrator_help_center_article_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5450 => [[['_route' => 'dashboard_administrator_help_center_article_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5542 => [[['_route' => 'dashboard_administrator_help_center_article_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterArticleController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5622 => [[['_route' => 'dashboard_administrator_help_center_category', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        5706 => [[['_route' => 'dashboard_administrator_help_center_category_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5800 => [[['_route' => 'dashboard_administrator_help_center_category_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5897 => [[['_route' => 'dashboard_administrator_help_center_category_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        5993 => [[['_route' => 'dashboard_administrator_help_center_category_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6090 => [[['_route' => 'dashboard_administrator_help_center_category_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6184 => [[['_route' => 'dashboard_administrator_help_center_category_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6278 => [[['_route' => 'dashboard_administrator_help_center_category_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\HelpCenterCategoryController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6344 => [[['_route' => 'dashboard_administrator_language', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        6414 => [[['_route' => 'dashboard_administrator_language_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6494 => [[['_route' => 'dashboard_administrator_language_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6577 => [[['_route' => 'dashboard_administrator_language_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6659 => [[['_route' => 'dashboard_administrator_language_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6742 => [[['_route' => 'dashboard_administrator_language_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6822 => [[['_route' => 'dashboard_administrator_language_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6902 => [[['_route' => 'dashboard_administrator_language_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\LanguageController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        6950 => [[['_route' => 'dashboard_administrator_index', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\MainController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        7012 => [[['_route' => 'dashboard_administrator_page', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\PageController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        7078 => [[['_route' => 'dashboard_administrator_page_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\PageController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7154 => [[['_route' => 'dashboard_administrator_page_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\PageController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7232 => [[['_route' => 'dashboard_administrator_page_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\PageController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        7297 => [[['_route' => 'dashboard_administrator_settings_payment', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::payment'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7363 => [[['_route' => 'dashboard_administrator_settings_checkout', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::checkout'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7441 => [[['_route' => 'dashboard_administrator_settings_payment_gateways_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::paymentgatewaysaddedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7529 => [[['_route' => 'dashboard_administrator_settings_payment_gateways_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::paymentgatewaysaddedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7597 => [[['_route' => 'dashboard_administrator_settings_newsletter', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::newsletter'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7669 => [[['_route' => 'dashboard_administrator_settings_homepage', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::homepagehero'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7733 => [[['_route' => 'dashboard_administrator_settings_layout', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::layout'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7809 => [[['_route' => 'dashboard_administrator_settings_events_list_page', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::eventsListPage'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7878 => [[['_route' => 'dashboard_administrator_settings_venue_page', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::venuePage'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7940 => [[['_route' => 'dashboard_administrator_settings_blog', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::blog'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8010 => [[['_route' => 'dashboard_administrator_settings_mail_server', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::mailServer'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8085 => [[['_route' => 'dashboard_administrator_settings_google_recaptcha', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::googleRecaptcha'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8155 => [[['_route' => 'dashboard_administrator_settings_google_maps', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::googleMaps'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8226 => [[['_route' => 'dashboard_administrator_settings_social_login', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::socialLogin'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8289 => [[['_route' => 'dashboard_administrator_settings_menus', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::menus'], ['_locale'], ['GET' => 0], null, false, false, null]],
        8366 => [[['_route' => 'dashboard_administrator_settings_menus_edit', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\SettingsController::menuEdit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8426 => [[['_route' => 'dashboard_administrator_translation', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\TranslationController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        8488 => [[['_route' => 'dashboard_administrator_user', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        8579 => [[['_route' => 'dashboard_administrator_user_delete_permanently', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        8657 => [[['_route' => 'dashboard_administrator_user_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        8736 => [[['_route' => 'dashboard_administrator_user_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        8814 => [[['_route' => 'dashboard_administrator_user_enable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::enabledisable'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        8893 => [[['_route' => 'dashboard_administrator_user_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::enabledisable'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        8996 => [[['_route' => 'dashboard_administrator_user_information', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::details'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        9093 => [[['_route' => 'dashboard_administrator_user_empty_cart', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\UserController::emptyCart'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        9163 => [[['_route' => 'dashboard_administrator_venuetype', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        9237 => [[['_route' => 'dashboard_administrator_venuetype_add', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9321 => [[['_route' => 'dashboard_administrator_venuetype_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9408 => [[['_route' => 'dashboard_administrator_venuetype_disable', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        9494 => [[['_route' => 'dashboard_administrator_venuetype_delete', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        9581 => [[['_route' => 'dashboard_administrator_venuetype_restore', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        9665 => [[['_route' => 'dashboard_administrator_venuetype_show', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        9749 => [[['_route' => 'dashboard_administrator_venuetype_hide', '_controller' => 'App\\Controller\\Dashboard\\Administrator\\VenueTypeController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        9801 => [[['_route' => 'dashboard_organizer_profile', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\AccountController::edit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9845 => [[['_route' => 'dashboard_organizer_index', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\MainController::index'], ['_locale'], null, null, false, false, null]],
        9910 => [[['_route' => 'dashboard_organizer_pointofsale', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        9979 => [[['_route' => 'dashboard_organizer_pointofsale_add', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        10058 => [[['_route' => 'dashboard_organizer_pointofsale_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        10153 => [[['_route' => 'dashboard_organizer_pointofsale_delete_permanently', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10235 => [[['_route' => 'dashboard_organizer_pointofsale_delete', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10317 => [[['_route' => 'dashboard_organizer_pointofsale_enable', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController::enabledisable'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10400 => [[['_route' => 'dashboard_organizer_pointofsale_disable', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\PointOfSaleController::enabledisable'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10458 => [[['_route' => 'dashboard_organizer_scanner', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\ScannerController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        10520 => [[['_route' => 'dashboard_organizer_scanner_add', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\ScannerController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        10592 => [[['_route' => 'dashboard_organizer_scanner_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Organizer\\ScannerController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        10679 => [[['_route' => 'dashboard_organizer_scanner_delete_permanently', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\ScannerController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10753 => [[['_route' => 'dashboard_organizer_scanner_delete', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\ScannerController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10827 => [[['_route' => 'dashboard_organizer_scanner_enable', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\ScannerController::enabledisable'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10902 => [[['_route' => 'dashboard_organizer_scanner_disable', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\ScannerController::enabledisable'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        10969 => [[['_route' => 'dashboard_organizer_settings_scanner_app', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\SettingsController::scannerApp'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        11031 => [[['_route' => 'dashboard_organizer_settings_payouts', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\SettingsController::payout'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        11097 => [[['_route' => 'dashboard_organizer_settings_payouts_add', '_controller' => 'App\\Controller\\Dashboard\\Organizer\\SettingsController::payoutAddEdit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        11173 => [[['_route' => 'dashboard_organizer_settings_payouts_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Organizer\\SettingsController::payoutAddEdit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        11250 => [[['_route' => 'dashboard_organizer_settings_payouts_unset', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Organizer\\SettingsController::payoutUnset'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        11311 => [[['_route' => 'dashboard_attendee_account_settings', '_controller' => 'App\\Controller\\Dashboard\\Shared\\AccountController::settings'], ['_locale'], null, null, false, false, null]],
        11360 => [[['_route' => 'dashboard_attendee_cart', '_controller' => 'App\\Controller\\Dashboard\\Shared\\CartController::cart'], ['_locale'], null, null, false, false, null]],
        11413 => [[['_route' => 'dashboard_attendee_cart_add', '_controller' => 'App\\Controller\\Dashboard\\Shared\\CartController::add'], ['_locale'], null, null, false, false, null]],
        11469 => [[['_route' => 'dashboard_pointofsale_cart_add', '_controller' => 'App\\Controller\\Dashboard\\Shared\\CartController::add'], ['_locale'], null, null, false, false, null]],
        11534 => [[['_route' => 'dashboard_attendee_cart_remove', '_controller' => 'App\\Controller\\Dashboard\\Shared\\CartController::remove'], ['_locale', 'id'], null, null, false, false, null]],
        11589 => [[['_route' => 'dashboard_attendee_cart_empty', '_controller' => 'App\\Controller\\Dashboard\\Shared\\CartController::emptyCart'], ['_locale'], null, null, false, false, null]],
        11653 => [[['_route' => 'dashboard_administrator_event', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        11709 => [[['_route' => 'dashboard_organizer_event', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        11769 => [[['_route' => 'dashboard_organizer_event_add', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        11839 => [[['_route' => 'dashboard_organizer_event_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        11932 => [[['_route' => 'dashboard_administrator_event_delete_permanently', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        12012 => [[['_route' => 'dashboard_administrator_event_delete', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        12097 => [[['_route' => 'dashboard_organizer_event_delete_permanently', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        12169 => [[['_route' => 'dashboard_organizer_event_delete', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        12250 => [[['_route' => 'dashboard_administrator_event_restore', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        12323 => [[['_route' => 'dashboard_organizer_event_publish', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        12394 => [[['_route' => 'dashboard_organizer_event_draft', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        12475 => [[['_route' => 'dashboard_administrator_event_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::details'], ['_locale', 'slug'], ['GET' => 0], null, false, false, 1]],
        12548 => [[['_route' => 'dashboard_organizer_event_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\EventController::details'], ['_locale', 'slug'], ['GET' => 0], null, false, false, 1]],
        12601 => [[['_route' => 'dashboard_attendee_checkout', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::checkout'], ['_locale'], null, null, false, false, null]],
        12657 => [[['_route' => 'dashboard_pointofsale_checkout', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::checkout'], ['_locale'], null, null, false, false, null]],
        12715 => [[['_route' => 'dashboard_attendee_checkout_done', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::done'], ['_locale'], null, null, false, false, null]],
        12776 => [[['_route' => 'dashboard_pointofsale_checkout_done', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::done'], ['_locale'], null, null, false, false, null]],
        12846 => [[['_route' => 'dashboard_attendee_checkout_failure', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::failure'], ['_locale', 'number'], null, null, false, true, null]],
        12902 => [[['_route' => 'dashboard_attendee_orders', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::orders'], ['_locale'], null, null, false, false, null]],
        12960 => [[['_route' => 'dashboard_pointofsale_orders', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::orders'], ['_locale'], null, null, false, false, null]],
        13020 => [[['_route' => 'dashboard_organizer_orders', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::orders'], ['_locale'], null, null, false, false, null]],
        13084 => [[['_route' => 'dashboard_administrator_orders', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::orders'], ['_locale'], null, null, false, false, null]],
        13149 => [[['_route' => 'dashboard_attendee_order_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::details'], ['_locale', 'reference'], null, null, false, true, null]],
        13216 => [[['_route' => 'dashboard_pointofsale_order_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::details'], ['_locale', 'reference'], null, null, false, true, null]],
        13285 => [[['_route' => 'dashboard_organizer_order_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::details'], ['_locale', 'reference'], null, null, false, true, null]],
        13358 => [[['_route' => 'dashboard_administrator_order_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::details'], ['_locale', 'reference'], null, null, false, true, null]],
        13438 => [[['_route' => 'dashboard_administrator_order_cancel', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::cancel'], ['_locale', 'reference'], null, null, false, false, null]],
        13518 => [[['_route' => 'dashboard_administrator_order_delete', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::delete'], ['_locale', 'reference'], null, null, false, false, null]],
        13599 => [[['_route' => 'dashboard_administrator_order_restore', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::restore'], ['_locale', 'reference'], null, null, false, false, null]],
        13658 => [[['_route' => 'dashboard_tickets_print', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::printTickets'], ['_locale', 'reference'], null, null, false, true, null]],
        13755 => [[['_route' => 'dashboard_organizer_order_resend_confirmation_email', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::resendConfirmationEmail'], ['_locale', 'reference'], null, null, false, false, null]],
        13856 => [[['_route' => 'dashboard_administrator_order_resend_confirmation_email', '_controller' => 'App\\Controller\\Dashboard\\Shared\\OrderController::resendConfirmationEmail'], ['_locale', 'reference'], null, null, false, false, null]],
        13935 => [[['_route' => 'dashboard_organizer_event_date_request_payout', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::payoutRequestAdd'], ['_locale', 'eventDateReference'], null, null, false, true, null]],
        14009 => [[['_route' => 'dashboard_administrator_payout_requests', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::payoutRequests'], ['_locale'], null, null, false, false, null]],
        14075 => [[['_route' => 'dashboard_organizer_payout_requests', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::payoutRequests'], ['_locale'], null, null, false, false, null]],
        14165 => [[['_route' => 'dashboard_administrator_payout_request_cancel', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::cancel'], ['_locale', 'reference'], null, null, false, false, null]],
        14247 => [[['_route' => 'dashboard_organizer_payout_request_cancel', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::cancel'], ['_locale', 'reference'], null, null, false, false, null]],
        14337 => [[['_route' => 'dashboard_administrator_payout_request_failed', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::failed'], ['_locale', 'reference'], null, null, false, false, null]],
        14427 => [[['_route' => 'dashboard_administrator_payout_request_delete', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::delete'], ['_locale', 'reference'], null, null, false, false, null]],
        14518 => [[['_route' => 'dashboard_administrator_payout_request_restore', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::restore'], ['_locale', 'reference'], null, null, false, false, null]],
        14609 => [[['_route' => 'dashboard_administrator_payout_request_approve', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::approve'], ['_locale', 'reference'], null, null, false, false, null]],
        14701 => [[['_route' => 'dashboard_administrator_payout_request_approved', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::approved'], ['_locale', 'reference'], null, null, false, false, null]],
        14792 => [[['_route' => 'dashboard_administrator_payout_request_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::details'], ['_locale', 'reference'], null, null, false, false, null]],
        14875 => [[['_route' => 'dashboard_organizer_payout_request_details', '_controller' => 'App\\Controller\\Dashboard\\Shared\\PayoutRequestController::details'], ['_locale', 'reference'], null, null, false, false, null]],
        14932 => [[['_route' => 'dashboard_administrator_reports', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReportsController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        14985 => [[['_route' => 'dashboard_organizer_reports', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReportsController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        15041 => [[['_route' => 'dashboard_attendee_reviews', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::index'], ['_locale'], null, null, false, false, null]],
        15094 => [[['_route' => 'dashboard_organizer_reviews', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::index'], ['_locale'], null, null, false, false, null]],
        15159 => [[['_route' => 'dashboard_administrator_reviews', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::index'], ['_locale'], null, null, false, false, null]],
        15228 => [[['_route' => 'dashboard_attendee_reviews_add', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::add'], ['_locale', 'slug'], null, null, false, false, null]],
        15307 => [[['_route' => 'dashboard_administrator_review_show', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        15386 => [[['_route' => 'dashboard_administrator_review_hide', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        15480 => [[['_route' => 'dashboard_administrator_review_delete_permanently', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        15561 => [[['_route' => 'dashboard_administrator_review_delete', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        15643 => [[['_route' => 'dashboard_administrator_review_restore', '_controller' => 'App\\Controller\\Dashboard\\Shared\\ReviewController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        15749 => [[['_route' => 'dashboard_administrator_event_date_statistics', '_controller' => 'App\\Controller\\Dashboard\\Shared\\StatisticsController::eventDateStatistics'], ['_locale', 'eventSlug', 'eventDateReference'], null, null, false, false, null]],
        15847 => [[['_route' => 'dashboard_organizer_event_date_statistics', '_controller' => 'App\\Controller\\Dashboard\\Shared\\StatisticsController::eventDateStatistics'], ['_locale', 'eventSlug', 'eventDateReference'], null, null, false, false, null]],
        15911 => [[['_route' => 'dashboard_administrator_venue', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        15967 => [[['_route' => 'dashboard_organizer_venue', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::index'], ['_locale'], ['GET' => 0], null, false, false, null]],
        16035 => [[['_route' => 'dashboard_administrator_venue_add', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        16113 => [[['_route' => 'dashboard_administrator_venue_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        16173 => [[['_route' => 'dashboard_organizer_venue_add', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::addedit'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        16243 => [[['_route' => 'dashboard_organizer_venue_edit', 'slug' => null, '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::addedit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        16324 => [[['_route' => 'dashboard_administrator_venue_disable', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16404 => [[['_route' => 'dashboard_administrator_venue_delete', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16477 => [[['_route' => 'dashboard_organizer_venue_disable', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16549 => [[['_route' => 'dashboard_organizer_venue_delete', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::delete'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16630 => [[['_route' => 'dashboard_administrator_venue_restore', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::restore'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16708 => [[['_route' => 'dashboard_administrator_venue_show', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16786 => [[['_route' => 'dashboard_administrator_venue_hide', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16856 => [[['_route' => 'dashboard_organizer_venue_show', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        16926 => [[['_route' => 'dashboard_organizer_venue_hide', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::showhide'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        17015 => [[['_route' => 'dashboard_administrator_venue_listondirectory', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::publicvenuesdirectory'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        17106 => [[['_route' => 'dashboard_administrator_venue_hidefromdirectory', '_controller' => 'App\\Controller\\Dashboard\\Shared\\VenueController::publicvenuesdirectory'], ['_locale', 'slug'], ['GET' => 0], null, false, false, null]],
        17164 => [[['_route' => 'dashboard_attendee_favorites', '_controller' => 'App\\Controller\\Dashboard\\Attendee\\FavoritesController::index'], ['_locale'], null, null, false, false, null]],
        17235 => [[['_route' => 'dashboard_attendee_favorites_add', '_controller' => 'App\\Controller\\Dashboard\\Attendee\\FavoritesController::addRemove'], ['_locale', 'slug'], null, null, false, true, 1]],
        17309 => [[['_route' => 'dashboard_attendee_favorites_remove', '_controller' => 'App\\Controller\\Dashboard\\Attendee\\FavoritesController::addRemove'], ['_locale', 'slug'], null, null, false, true, 1]],
        17363 => [[['_route' => 'dashboard_attendee_following', '_controller' => 'App\\Controller\\Dashboard\\Attendee\\FollowingController::index'], ['_locale'], null, null, false, false, null]],
        17430 => [[['_route' => 'dashboard_attendee_following_add', '_controller' => 'App\\Controller\\Dashboard\\Attendee\\FollowingController::addRemove'], ['_locale', 'slug'], null, null, false, true, 1]],
        17500 => [[['_route' => 'dashboard_attendee_following_remove', '_controller' => 'App\\Controller\\Dashboard\\Attendee\\FollowingController::addRemove'], ['_locale', 'slug'], null, null, false, true, 1]],
        17544 => [[['_route' => 'dashboard_attendee_index', '_controller' => 'App\\Controller\\Dashboard\\Attendee\\MainController::index'], ['_locale'], null, null, false, false, null]],
        17591 => [[['_route' => 'dashboard_pointofsale_index', '_controller' => 'App\\Controller\\Dashboard\\PointOfSale\\MainController::index'], ['_locale'], null, null, false, false, null]],
        17676 => [[['_route' => 'dashboard_scanner_event_date_attendees_check_in', '_controller' => 'App\\Controller\\Dashboard\\Scanner\\AttendeesCheckInController::eventDateAttendees'], ['_locale', 'reference'], null, null, false, false, null]],
        17780 => [[['_route' => 'dashboard_scanner_ticket_check_in', '_controller' => 'App\\Controller\\Dashboard\\Scanner\\AttendeesCheckInController::ticketCheckIn'], ['_locale', 'eventDateReference', 'ticketReference'], null, null, false, false, null]],
        17823 => [[['_route' => 'dashboard_scanner_index', '_controller' => 'App\\Controller\\Dashboard\\Scanner\\MainController::index'], ['_locale'], null, null, false, false, null]],
        17867 => [[['_route' => 'blog', 'category' => 'all', '_controller' => 'App\\Controller\\Front\\BlogController::blog'], ['_locale', 'category'], null, null, false, true, null]],
        17915 => [[['_route' => 'blog_article', '_controller' => 'App\\Controller\\Front\\BlogController::blogArticle'], ['_locale', 'slug'], null, null, false, true, null]],
        17947 => [[['_route' => 'events', '_controller' => 'App\\Controller\\Front\\EventController::events'], ['_locale'], null, null, false, false, null]],
        17987 => [[['_route' => 'event', '_controller' => 'App\\Controller\\Front\\EventController::event'], ['_locale', 'slug'], null, null, false, true, null]],
        18023 => [[['_route' => 'categories', '_controller' => 'App\\Controller\\Front\\EventController::categories'], ['_locale'], null, null, false, false, null]],
        18061 => [[['_route' => 'help_center', '_controller' => 'App\\Controller\\Front\\HelpCenterController::helpCenter'], ['_locale'], null, null, false, false, null]],
        18108 => [[['_route' => 'help_center_category', '_controller' => 'App\\Controller\\Front\\HelpCenterController::helpCenterCategory'], ['_locale', 'slug'], null, null, false, true, null]],
        18163 => [[['_route' => 'help_center_article', '_controller' => 'App\\Controller\\Front\\HelpCenterController::helpCenterArticle'], ['_locale', 'slug'], null, null, false, true, null]],
        18188 => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\Front\\MainController::homepage'], ['_locale'], null, null, false, true, null]],
        18235 => [[['_route' => 'newsletter_subscribe', '_controller' => 'App\\Controller\\Front\\NewsletterController::subscribe'], ['_locale'], null, null, false, false, null]],
        18279 => [[['_route' => 'organizer', '_controller' => 'App\\Controller\\Front\\OrganizerController::organizer'], ['_locale', 'slug'], null, null, false, true, null]],
        18318 => [[['_route' => 'page', '_controller' => 'App\\Controller\\Front\\PageController::page'], ['_locale', 'slug'], null, null, false, true, null]],
        18351 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\Front\\PageController::contact'], ['_locale'], null, null, false, false, null]],
        18391 => [[['_route' => 'access_denied', '_controller' => 'App\\Controller\\Front\\PageController::accessDenied'], ['_locale'], null, null, false, false, null]],
        18439 => [[['_route' => 'event_reviews', '_controller' => 'App\\Controller\\Front\\ReviewController::eventreviews'], ['_locale', 'slug'], null, null, false, false, null]],
        18471 => [[['_route' => 'venues', '_controller' => 'App\\Controller\\Front\\VenueController::venues'], ['_locale'], null, null, false, false, null]],
        18511 => [[['_route' => 'venue', '_controller' => 'App\\Controller\\Front\\VenueController::venue'], ['_locale', 'slug'], null, null, false, true, null]],
        18555 => [[['_route' => 'get_countries', '_controller' => 'App\\Controller\\Api\\CountryController::getCountries'], ['_locale'], null, null, false, false, null]],
        18611 => [[['_route' => 'get_country', 'slug' => null, '_controller' => 'App\\Controller\\Api\\CountryController::getCountry'], ['_locale', 'slug'], null, null, false, true, null]],
        18652 => [[['_route' => 'get_events', '_controller' => 'App\\Controller\\Api\\EventController::getEvents'], ['_locale'], null, null, false, false, null]],
        18706 => [[['_route' => 'get_event', 'slug' => null, '_controller' => 'App\\Controller\\Api\\EventController::getEvent'], ['_locale', 'slug'], null, null, false, true, null]],
        18768 => [[['_route' => 'get_eventdates_by_event', '_controller' => 'App\\Controller\\Api\\EventDateController::getEventDates'], ['_locale', 'eventSlug'], null, null, false, false, null]],
        18828 => [[['_route' => 'get_eventdate', 'reference' => null, '_controller' => 'App\\Controller\\Api\\EventDateController::getEventDate'], ['_locale', 'reference'], null, null, false, true, null]],
        18905 => [[['_route' => 'dashboard_pointofsale_get_eventdates', '_controller' => 'App\\Controller\\Api\\EventDateController::getPosEventDates'], ['_locale'], null, null, false, false, null]],
        18983 => [[['_route' => 'get_eventtickets_by_eventdate', '_controller' => 'App\\Controller\\Api\\EventTicketController::getEventTickets'], ['_locale', 'eventSlug', 'eventDateReference'], null, null, false, false, null]],
        19045 => [[['_route' => 'get_eventticket', 'reference' => null, '_controller' => 'App\\Controller\\Api\\EventTicketController::getEventTicket'], ['_locale', 'reference'], null, null, false, true, null]],
        19080 => [[['_route' => 'api_scanner_login', '_controller' => 'App\\Controller\\Api\\ScannerController::login'], ['_locale'], null, null, false, false, null]],
        19154 => [[['_route' => 'api_scanner_get_event_date_attendees', '_controller' => 'App\\Controller\\Api\\ScannerController::getEventDateAttendees'], ['_locale', 'reference'], null, null, false, true, null]],
        19235 => [[['_route' => 'api_scanner_grant_access', '_controller' => 'App\\Controller\\Api\\ScannerController::grantAccess'], ['_locale', 'eventDateReference', 'ticketReference'], null, null, false, true, null]],
        19280 => [[['_route' => 'get_organizers', '_controller' => 'App\\Controller\\Api\\UserController::getUsers'], ['_locale'], null, null, false, false, null]],
        19320 => [[['_route' => 'get_users', '_controller' => 'App\\Controller\\Api\\UserController::getUsers'], ['_locale'], null, null, false, false, null]],
        19378 => [[['_route' => 'get_organizer', 'slug' => null, '_controller' => 'App\\Controller\\Api\\UserController::getUserEntity'], ['_locale', 'slug'], null, null, false, true, null]],
        19431 => [[['_route' => 'get_user', 'slug' => null, '_controller' => 'App\\Controller\\Api\\UserController::getUserEntity'], ['_locale', 'slug'], null, null, false, true, null]],
        19512 => [[['_route' => 'jms_translation_update_message', 'id' => null, '_controller' => 'JMS\\TranslationBundle\\Controller\\ApiController::updateMessageAction'], ['config', 'domain', 'locale'], null, null, false, false, null]],
        19564 => [[['_route' => 'fos_user_change_password', '_controller' => 'App\\Controller\\bundles\\FOSUserBundle\\ChangePasswordController::changePasswordAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        19605 => [[['_route' => 'fos_user_registration_register_attendee', '_controller' => 'App\\Controller\\bundles\\FOSUserBundle\\RegistrationController::registerAttendeeAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        19647 => [[['_route' => 'fos_user_registration_register_organizer', '_controller' => 'App\\Controller\\bundles\\FOSUserBundle\\RegistrationController::registerOrganizerAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        19692 => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'App\\Controller\\bundles\\FOSUserBundle\\RegistrationController::checkEmailAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        19741 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
        19783 => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        19826 => [[['_route' => 'fos_user_resetting_request', '_controller' => 'App\\Controller\\bundles\\FOSUserBundle\\ResettingController::requestAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        19873 => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        19921 => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
        19971 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        20011 => [[['_route' => 'fos_user_profile_show', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'dashboard_index', 'permanent' => 'true', 'keepQueryParams' => 'true'], ['_locale'], null, null, false, false, null]],
        20043 => [[['_route' => 'fos_user_security_login', '_controller' => 'App\\Controller\\bundles\\FOSUserBundle\\SecurityController:loginAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        20080 => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        20113 => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        20153 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        20179 => [[['_route' => 'feed_json', '_controller' => 'Debril\\RssAtomBundle\\Controller\\StreamController::indexAction', 'format' => 'json', 'id' => null], ['id'], null, null, false, true, null]],
        20221 => [[['_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'], ['payum_token'], null, null, false, true, null]],
        20244 => [[['_route' => 'payum_cancel_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CancelController::doAction'], ['payum_token'], null, null, false, true, null]],
        20273 => [[['_route' => 'payum_authorize_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction'], ['payum_token'], null, null, false, true, null]],
        20308 => [[['_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'], ['gateway'], null, null, false, true, null]],
        20326 => [[['_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'], ['payum_token'], null, null, false, true, null]],
        20352 => [[['_route' => 'payum_payout_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\PayoutController::doAction'], ['payum_token'], null, null, false, true, null]],
        20377 => [[['_route' => 'payum_refund_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\RefundController::doAction'], ['payum_token'], null, null, false, true, null]],
        20400 => [[['_route' => 'payum_sync_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\SyncController::doAction'], ['payum_token'], null, null, false, true, null]],
        20432 => [[['_route' => 'PrestaSitemapBundle_index', '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::indexAction'], ['_format'], null, null, false, true, null]],
        20459 => [[['_route' => 'PrestaSitemapBundle_section', '_controller' => 'Presta\\SitemapBundle\\Controller\\SitemapController::sectionAction'], ['name', '_format'], null, null, false, true, null]],
        20500 => [[['_route' => 'feed_stream', '_controller' => 'Debril\\RssAtomBundle\\Controller\\StreamController::indexAction', 'format' => 'rss'], ['format', 'id'], null, null, false, true, null]],
        20529 => [[['_route' => 'feed_rss', '_controller' => 'Debril\\RssAtomBundle\\Controller\\StreamController::indexAction', 'format' => 'rss', 'id' => null], ['id'], null, null, false, true, null]],
        20561 => [[['_route' => 'feed_atom', '_controller' => 'Debril\\RssAtomBundle\\Controller\\StreamController::indexAction', 'format' => 'atom', 'id' => null], ['id'], null, null, false, true, null]],
        20613 => [[['_route' => 'fos_comment_new_threads', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadsAction', '_format' => 'html'], ['_format'], ['GET' => 0], null, false, true, null]],
        20673 => [[['_route' => 'fos_comment_edit_thread_commentable', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentableAction', '_format' => 'html'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        20713 => [[['_route' => 'fos_comment_new_thread_comments', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentsAction', '_format' => 'html'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        20763 => [[['_route' => 'fos_comment_remove_thread_comment', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::removeThreadCommentAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['GET' => 0], null, false, true, null]],
        20799 => [[['_route' => 'fos_comment_edit_thread_comment', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::editThreadCommentAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['GET' => 0], null, false, true, null]],
        20840 => [[['_route' => 'fos_comment_new_thread_comment_votes', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::newThreadCommentVotesAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['GET' => 0], null, false, true, null]],
        20885 => [[['_route' => 'fos_comment_get_thread', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadAction', '_format' => 'html'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        20921 => [
            [['_route' => 'fos_comment_get_threads', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadsActions', '_format' => 'html'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'fos_comment_post_threads', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadsAction', '_format' => 'html'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        20978 => [[['_route' => 'fos_comment_patch_thread_commentable', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentableAction', '_format' => 'html'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        21028 => [[['_route' => 'fos_comment_get_thread_comment', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['GET' => 0], null, false, true, null]],
        21074 => [[['_route' => 'fos_comment_patch_thread_comment_state', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::patchThreadCommentStateAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['PATCH' => 0], null, false, true, null]],
        21116 => [[['_route' => 'fos_comment_put_thread_comments', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::putThreadCommentsAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['PUT' => 0], null, false, true, null]],
        21152 => [
            [['_route' => 'fos_comment_get_thread_comments', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentsAction', '_format' => 'html'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'fos_comment_post_thread_comments', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentsAction', '_format' => 'html'], ['id', '_format'], ['POST' => 0], null, false, true, null],
        ],
        21203 => [
            [['_route' => 'fos_comment_get_thread_comment_votes', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::getThreadCommentVotesAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'fos_comment_post_thread_comment_votes', '_controller' => 'FOS\\CommentBundle\\Controller\\ThreadController::postThreadCommentVotesAction', '_format' => 'html'], ['id', 'commentId', '_format'], ['POST' => 0], null, false, true, null],
        ],
        21244 => [[['_route' => 'feed_mock', '_controller' => 'Debril\\RssAtomBundle\\Controller\\StreamController::indexAction', 'format' => 'rss', 'id' => null], ['id'], null, null, false, true, null]],
        21306 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        21334 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        21388 => [[['_route' => 'bazinga_jstranslation_js', '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction', 'domain' => 'messages', '_format' => 'js'], ['domain', '_format'], ['GET' => 0], null, false, true, null]],
        21418 => [[['_route' => 'hwi_oauth_service_redirect', '_controller' => 'HWIOAuthBundle:Connect:redirectToService'], ['service'], null, null, false, true, null]],
        21444 => [[['_route' => 'hwi_oauth_connect_service', '_controller' => 'HWIOAuthBundle:Connect:connectService'], ['service'], null, null, false, true, null]],
        21475 => [
            [['_route' => 'hwi_oauth_connect_registration', '_controller' => 'HWIOAuthBundle:Connect:registration'], ['key'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function ($condition, $context, $request) { // $checkCondition
        switch ($condition) {
            case 1: return $request->isXmlHttpRequest();
        }
    },
];
