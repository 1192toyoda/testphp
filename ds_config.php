<?php
// ds_config.php
// 
// DocuSign configuration settings
$DS_CONFIG = [
    'quickstart' => 'true',
    'quickACG' => '{QUICK_ACG_VALUE}',
    'ds_client_id' => '62766dd5-6460-4c3a-ac89-8fb85685d0b7',  // The app's DocuSign integration key
    'ds_client_secret' => '147f63a0-16b3-4cd2-9e71-b8356bd43d3d', // The app's DocuSign integration key's secret
    'signer_email' => 'marcelo.toyoda@docusign.com',
    'signer_name' => 'marcelo toyoda',
    'app_url' => 'http://localhost:8080/public', // The url of the application.
    // Ie, the user enters  app_url in their browser to bring up the app's home page
    // Eg http://localhost/code-examples-php/public (no trailing slash) if the app is installed in a
    // development directory that is accessible via web server.
    // NOTE => You must add a Redirect URI of app_url/index.php?page=ds_callback to your Integration Key.
    'authorization_server' => 'https://account-d.docusign.com',
    'session_secret' => '{SESSION_SECRET}', // Secret for encrypting session cookie content
    'allow_silent_authentication' => true, // a user can be silently authenticated if they have an
    // active login session on another tab of the same browser
    'target_account_id' => false, // Set if you want a specific DocuSign AccountId, If false, the user's default account will be used.
    'demo_doc_path' => 'demo_documents',
    'doc_docx' => 'World_Wide_Corp_Battle_Plan_Trafalgar.docx',
    'doc_html' => 'doc_1.html',
    'doc_pdf' =>  'World_Wide_Corp_lorem.pdf',
    'doc_txt' =>  'Check_If_Approved.txt',
    // Payment gateway information is optional
    'gateway_account_id' => '{GATEWAY_ACCOUNT_ID}',
    'gateway_name' => "stripe",
    'gateway_display_name' => "Stripe",
    'github_example_url' => 'https://github.com/docusign/code-examples-php/tree/master/src/Controllers/Examples',
    'documentation' => false
];

$JWT_CONFIG = [
    'ds_client_id' => '62766dd5-6460-4c3a-ac89-8fb85685d0b7', // The app's DocuSign integration key
    'authorization_server' => 'account-d.docusign.com',
    "ds_impersonated_user_id" => '2a887d3a-0763-4c48-9f00-bc7960de497f',  // the id of the user
    "private_key_file" => "./private.key", // path to private key file
];

$GLOBALS['DS_CONFIG'] = $DS_CONFIG;
$GLOBALS['JWT_CONFIG'] = $JWT_CONFIG;
