<?php
$lang['twofactor_login'] = "Two Factor Authentication Token<br />(leave blank if not using)<br />";
$lang['twofactor_optin'] = "Use two factor authentication";
$lang['twofactor_makegasecret'] = "Use Google Authenticator";
$lang['twofactor_killgasecret'] = "Revoke Google Authenticator";
$lang['twofactor_phone'] = "Cellphone Number";
$lang['twofactor_provider'] = "Cell Provider";
$lang['twofactor_mustusega'] = "This wiki requires the use of Google Authenticator to login.";
$lang['twofactor_invalidotp'] = "The code supplied is incorrect or expired.  Please try again. If needed, click the link to resend your code.";
$lang['twofactor_failedgasetup'] = "The code provided did not work.  Google Authenticator is not enabled for this account.";
$lang['twofactor_passedgasetup'] = "Google Authenticator is now enabled for this account.";
$lang['twofactor_scanwithga'] = "Scan with Google Authenticator";
$lang['twofactor_verifyga'] = "You need to verify that Google Authenticator is working.";
$lang['twofactor_codefromga'] = "Enter code from Google Authenticator";
$lang['twofactor_updated'] = "Two factor configuration updated.";
$lang['twofactor_gaready'] = "Google Authenticator is configured.";
$lang['twofactor_otplogin'] = "Verification Code";
$lang['twofactor_mandatory'] = "This wiki requires the use of two factor authentication.  You must configure either Google Authenticator or your text-capable cell number to continue.";
$lang['twofactor_smsnotice'] = "A verification one-time password has been sent to your device.  If you do not receive it within 2 minutes, verify your settings and resend the code.  If you still do not get your code, please contact a wiki administrator.";
$lang['twofactor_failedsmssetup'] = "The code provided is incorrect.  Use of one-time password is not enabled for this account.";
$lang['twofactor_passedsmssetup'] = "Use of one-time password is now enabled for this account.";
$lang['twofactor_killsms'] = "Disable one-time passwords to your device";

$lang['btn_submit'] = "Submit";
$lang['btn_resend'] = "Resend Code";
$lang['btn_quit'] = "Quit";

$lang['menu'] = 'TwoFactor Admin';
$lang['noauth']      = '(user authentication not available)';
$lang['nosupport']   = '(user management not supported)';
$lang['badauth']     = 'invalid auth mechanism';     // should never be displayed!
$lang['user_id']     = 'User';
$lang['user_pass']   = 'Password';
$lang['user_name']   = 'Real Name';
$lang['user_mail']   = 'Email';
$lang['reset_selected'] = 'Reset Selected';
$lang['search']      = 'Search';
$lang['search_prompt'] = 'Perform search';
$lang['clear']       = 'Reset Search Filter';
$lang['filter']      = 'Filter';
$lang['start']  = 'start';
$lang['prev']   = 'previous';
$lang['next']   = 'next';
$lang['last']   = 'last';
$lang['summary']     = 'Displaying users %1$d-%2$d of %3$d found. %4$d users total.';
$lang['nonefound']   = 'No users found. %d users total.';
$lang['reset_ok']   = '%d users reset';
$lang['reset_not_self']   = "You can't reset yourself.";
$lang['no_purpose']   = "You do not have the twofactor plugin configured to store user-bound data, so there is nothing to administer.";
