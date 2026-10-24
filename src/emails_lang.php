<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Sasisho za mfumo zinapatikana';
$lang['emails_updates_available_message'] = <<<EOT
Hujambo,

Masasisho mapya ya mfumo yamegunduliwa kwa {site_anchor}.

Masasisho haya yanaweza kujumuisha viraka vya usalama, maboresho ya utendaji, au vipengele vipya.
Tunapendekeza uyapitie haraka iwezekanavyo.

Unaweza kukagua na kudhibiti masasisho yanayopatikana kutoka dashibodi ya msimamizi:
{link}

Ikiwa tayari umeyakagua au kuyatumia, hakuna hatua zaidi inayohitajika.

Huu ni ujumbe wa mfumo wa kiotomatiki uliotumwa na {site_name}.
Tafadhali usijibu barua pepe hii.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Uanzishaji wa akaunti';
$lang['emails_account_activation_request_message'] = <<<EOT
Hujambo {name},

Asante kwa kujiandikisha kwenye {site_anchor}. Akaunti yako imeundwa na lazima iwashwe kabla ya kuitumia.

Ili kuwasha akaunti yako, bofya kiungo kifuatacho au kinakili na kukibandika kwenye kivinjari chako:
{link}

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Kiungo kipya cha uanzishaji';
$lang['emails_account_activation_resend_message'] = <<<EOT
Hujambo {name},

Hivi karibuni uliomba kiungo kipya cha uanzishaji kwenye {site_anchor} kwa sababu akaunti yako haikuwa hai.
Ili kuwasha akaunti yako, bofya kiungo kifuatacho au kinakili na kukibandika kwenye kivinjari chako:
{link}

Ikiwa hukuomba hili, hakuna hatua zaidi inayohitajika.

Hatua hii iliombwa kutoka anwani hii ya IP: {ip_link}.

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Akaunti imeanzishwa';
$lang['emails_account_activation_success_message'] = <<<EOT
Hujambo {name},

Akaunti yako kwenye {site_anchor} imewashwa kwa mafanikio. Sasa unaweza <a href="{login_url}" target="_blank" rel="noopener">kuingia</a> wakati wowote unapotaka.

Tunatumaini utafurahia kuwa nasi, pokea salamu zetu za heshima.

-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Akaunti inasubiri idhini';
$lang['emails_account_approval_pending_message'] = <<<EOT
Hujambo {name},

Asante kwa kujiunga nasi kwenye {site_anchor}. Akaunti yako imeundwa lakini inahitaji idhini ya msimamizi wa tovuti kabla haijawezeshwa.
Tunaomba radhi kwa hatua hii muhimu, lakini ni kwa madhumuni ya usalama pekee.

Utapokea barua pepe ya uthibitisho mara tu akaunti yako itakapoidhinishwa.

Tunatumaini utafurahia kuwa nasi, pokea salamu zetu za heshima.

-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Akaunti imeidhinishwa';
$lang['emails_account_approval_success_message'] = <<<EOT
Hujambo {name},

Habari njema! Akaunti yako kwenye {site_anchor} imeidhinishwa hivi punde.

Sasa unaweza kuingia na kuanza kutumia akaunti yako mara moja:
{link}

Tunafurahi kuwa nawe.

-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Akaunti imerejeshwa';
$lang['emails_account_restored_message'] = <<<EOT
Hujambo {name},

Barua pepe hii inathibitisha kwamba akaunti yako kwenye {site_anchor} imerejeshwa kwa mafanikio.

Karibu tena pamoja nasi, na tunatumaini safari hii utafurahia kuwa nasi.

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Karibu kwenye {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Hujambo {name},

Watu wengi huwa na mfululizo mrefu sana wa barua pepe za ukaribisho baada ya kujiandikisha kwenye tovuti yao.

Habari njema: sisi si kama watu wengi.
Lakini bado tunataka kukukaribisha na kukushukuru kwa kujiunga nasi kwenye {site_anchor}.

Tunatumaini utafurahia kuwa nasi, pokea salamu zetu za heshima.

-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Ombi la kubadilisha barua pepe';
$lang['emails_email_change_request_message'] = <<<EOT
Hujambo {name},

Unapokea barua pepe hii kwa sababu tumepokea ombi la kubadilisha barua pepe kwa akaunti yako kwenye {site_anchor}.

Bofya kiungo kifuatacho au kinakili na kukibandika kwenye kivinjari chako ikiwa ungependa kuendelea:
{link}

Ikiwa hukuomba kubadilisha barua pepe, hakuna hatua zaidi inayohitajika.

Hatua hii iliombwa kutoka anwani hii ya IP: {ip_link}.

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Barua pepe imebadilishwa';
$lang['emails_email_change_success_message'] = <<<EOT
Hujambo {name},

Barua pepe hii inathibitisha kwamba anwani yako ya barua pepe iliyotumiwa kwenye {site_anchor} imebadilishwa kwa mafanikio.

Ikiwa hukuifanya hatua hii, tafadhali wasiliana nasi haraka iwezekanavyo ili kutatua tatizo hili.

Hatua hii ilifanywa kutoka anwani hii ya IP: {ip_link}.

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Tahadhari ya kuingia iliyoshindwa';
$lang['emails_login_alert_failure_message'] = <<<EOT
Hujambo {name},

Mtu fulani hivi karibuni ametumia nywila zisizo sahihi kujaribu kuingia kwenye akaunti yako ya {site_name}.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Ikiwa huyu si wewe, usiwe na wasiwasi, jaribio lao la kuingia halikufaulu.

Ikiwa ni wewe na hukumbuki nywila yako, bofya kiungo hapa chini ili kuiweka upya:
{reset_link}

Ikiwa unapata shida kuingia kwenye akaunti yako, wasiliana na timu yetu au omba kiungo cha kuingia kwa mbofyo mmoja.

-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Taarifa ya kuingia iliyofanikiwa';
$lang['emails_login_alert_success_message'] = <<<EOT
Hujambo {name},

Tunatuma barua pepe hii kufuatia kuingia kwa mafanikio kwenye akaunti yako ya {site_name}.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Ikiwa ni wewe, unaweza kupuuza barua pepe hii kwa usalama.

Ikiwa hukuingia, tafadhali badilisha nywila yako mara moja ili kulinda akaunti yako.

Kwa msaada wowote, wasiliana na timu yetu ya usaidizi.

-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Kiungo cha haraka cha kuingia';
$lang['emails_login_magic_link_message'] = <<<EOT
Hujambo {name},

Uliomba kuingia kwa mbofyo mmoja kwenye akaunti yako ya {site_anchor}.

Bofya kiungo kilicho hapa chini, au kinakili na kukibandika kwenye kivinjari chako, na utaingia mara moja:
{link}

Kiungo hiki kitaisha muda wake baada ya dakika 15. Ikiwa hukuomba hili, tafadhali puuza barua pepe hii.

Hatua hii iliombwa kutoka anwani hii ya IP: {ip_link}.

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Uthibitishaji wa hatua mbili';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Hujambo {name},

Msimbo wako wa uthibitishaji wa hatua mbili ni: <strong>{code}</strong>

Unaweza kila wakati kuzima uthibitishaji wa hatua mbili kwenye mipangilio ya akaunti yako.

Hatua hii ilifanywa kutoka anwani hii ya IP: {ip_link}.

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Ombi la kuweka upya nenosiri';
$lang['emails_password_change_request_message'] = <<<EOT
Hujambo {name},

Unapokea barua pepe hii kwa sababu tumepokea ombi la kuweka upya nywila kwa akaunti yako kwenye {site_anchor}.

Bofya kiungo kifuatacho au kinakili na kukibandika kwenye kivinjari chako ikiwa ungependa kuendelea:
{link}

Ikiwa hukuomba kuweka upya nywila, hakuna hatua zaidi inayohitajika.

Hatua hii iliombwa kutoka anwani hii ya IP: {ip_link}.

Kwa heshima,
-- Timu ya {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Nenosiri limebadilishwa kwa mafanikio';
$lang['emails_password_change_success_message'] = <<<EOT
Hujambo {name},

Barua pepe hii inathibitisha kwamba nywila yako kwenye {site_anchor} imebadilishwa kwa mafanikio. Sasa unaweza <a href="{login_url}" target="_blank" rel="noopener">kuingia</a> ukitumia nywila mpya.

Ikiwa hukuifanya hatua hii, tafadhali wasiliana nasi haraka iwezekanavyo ili kutatua tatizo hili.

Hatua hii ilifanywa kutoka anwani hii ya IP: {ip_link}.

Kwa heshima,
-- Timu ya {site_name}.
EOT;
