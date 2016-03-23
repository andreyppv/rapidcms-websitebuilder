<?php 
            
define('UPLOADS_BASE', 'upload');
                               
// User status                               
define('STATUS_ACTIVE', '1');
define('STATUS_INACTIVE', '0');

define('YES', '1');
define('NO', '0');

// Option Type
define('DROPDOWN', 'dropdown');
define('CHECKBOX', 'checkbox');
define('TEXT', 'text');

define('BOTHSIDE', 0);
define('FRONTSIDE', 1);
define('BACKSIDE', 2);

// Service Types       
define('SVC_BUSINESS_CARD', '1');
define('SVC_INVITATION_CARD', '2');
define('SVC_BUSINESS_TEMPLATE', '3');
define('SVC_INVITATION_TEMPLATE', '4');
define('SVC_DESIGN_SERVICE', '5');
define('DESIGN_SHOWCASE_BUSINESS', '6');
define('DESIGN_SHOWCASE_INVITATION', '7');

define('DESIGN_BUSINESS_CARD', '1');
define('DESIGN_LOGO_BUSINESS_CARD', '2');

define('PRODUCT_CARD', 1);
define('PRODUCT_TEMPLATE', 2);
define('PRODUCT_DESIGN', 3);

// Order Status
define('ORDER_PENDING', '-1');
define('ORDER_NEW', '0');
define('ORDER_PROCESSING', '1');
define('ORDER_COMPLETED', '2');

// Job Status
define('JOB_UNASSIGNED', '0');
define('JOB_WORKING', '1');
define('JOB_COMPLETED', '2');

// Payment Types
define('PAYMENT_PAYPAL', 'paypal');
define('PAYMENT_CREDIT', 'credit');

//card
define('CARD_VISA', 'visa');
define('CARD_MASTER', 'mastercard');
define('CARD_AMERICA_EXPRESS', 'amex');
define('CARD_DISCOVER', 'discover');

//sorting option
define('SORTBY_NAME', 'stn');
define('SORTBY_NEWEST', 'stnw');
define('SORTBY_OLDEST', 'stod');