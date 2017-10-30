<?php
// Dist Config
define('UNIONPAY_DATA_DIR', UNIONPAY_ASSET_DIR . '/sandbox/dist');
define('UNIONPAY_MER_ID', '123456');
define('UNIONPAY_CERT_ID', '3474813271258769001041842579301293446');
define('UNIONPAY_CERT_PASSWORD', '000000');
define('UNIONPAY_CERT_DIR', UNIONPAY_ASSET_DIR . '/dist/');
define('UNIONPAY_CERT_PATH', UNIONPAY_ASSET_DIR . '/dist/cert.pfx');
define('UNIONPAY_PUBLIC_KEY', UNIONPAY_ASSET_DIR . '/dist/verify_sign_acp.cer');
define('UNIONPAY_PRIVATE_KEY', UNIONPAY_ASSET_DIR . '/dist/private_key.pem');

define('UNIONPAY_TWZ_ENCRYPT_CERT', UNIONPAY_ASSET_DIR . '/dist/wtz/acp_test_enc.cer');
define('UNIONPAY_TWZ_MIDDLE_CERT', UNIONPAY_ASSET_DIR . '/dist/wtz/acp_test_middle.cer');
define('UNIONPAY_TWZ_ROOT_CERT', UNIONPAY_ASSET_DIR . '/dist/wtz/acp_test_root.cer');
define('UNIONPAY_TWZ_SIGN_CERT', UNIONPAY_ASSET_DIR . '/dist/wtz/acp_test_sign.pfx');
