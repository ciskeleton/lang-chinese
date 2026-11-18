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

$lang['emails_updates_available_subject'] = '系统更新可用';
$lang['emails_updates_available_message'] = <<<EOT
您好，

已检测到 {site_anchor} 的新系统更新。

这些更新可能包含安全修复、性能优化或新功能。
建议您尽快查看。

您可通过管理控制台查看并管理可用更新：
{link}

若您已查看或应用更新，则无需采取进一步操作。

此邮件为{site_name}自动发送的系统通知。
请勿回复此邮件。

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = '账户激活';
$lang['emails_account_activation_request_message'] = <<<EOT
你好，{name}，

感谢您在 {site_anchor} 注册。您的帐户已创建，但在使用之前必须激活。

要激活您的帐户，请单击以下链接或将其复制粘贴到浏览器中：
{link}

非常感谢，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = '新的激活链接';
$lang['emails_account_activation_resend_message'] = <<<EOT
你好，{name}，

您最近在 {site_anchor} 请求了一个新的激活链接，因为您的帐户尚未激活。
要激活您的帐户，请单击以下链接或将其复制粘贴到浏览器中：
{link}

如果您未请求此操作，则无需采取进一步的操作。

此操作是从以下 IP 地址请求的：{ip_link}。

非常感谢，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = '账户已激活';
$lang['emails_account_activation_success_message'] = <<<EOT
你好，{name}，

您在 {site_anchor} 的帐户已成功激活。您现在可以随时 <a href="{login_url}" target="_blank" rel="noopener">登录</a>。

希望您在这里过得愉快，请接受我们的诚挚问候。

-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = '账户等待审核';
$lang['emails_account_approval_pending_message'] = <<<EOT
你好，{name}，

感谢您加入我们在 {site_anchor}。您的帐户已经创建，但在激活之前需要网站管理员的批准。
对于这一关键步骤，我们诚挚地道歉，但这仅是为了安全目的。

一旦您的帐户获得批准，您将收到一封确认电子邮件。

希望您在这里愉快，接受我们的诚挚问候。

-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = '账户已批准';
$lang['emails_account_approval_success_message'] = <<<EOT
{name} 您好，

好消息！您在 {site_anchor} 的账户已经通过审核。

您现在可以立即登录并开始使用您的账户：
{link}

我们很高兴您加入我们。

-- {site_name} 团队
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = '账户已恢复';
$lang['emails_account_restored_message'] = <<<EOT
你好，{name}，

此邮件确认您在 {site_anchor} 的帐户已成功恢复。

欢迎回来，我们希望这一次您能在这里愉快度过。

亲切的问候，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = '欢迎来到 {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
你好，{name}，

大多数人在你在他们的网站上注册后都有非常长的欢迎邮件序列。

好消息：我们不是大多数人。
但是，我们仍然想欢迎你，并感谢你加入我们在 {site_anchor}。

希望你在这里过得愉快，请接受我们的诚挚问候。

-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = '邮箱变更请求';
$lang['emails_email_change_request_message'] = <<<EOT
你好，{name}，

您收到此电子邮件是因为我们收到了您在 {site_anchor} 账户的电子邮件更改请求。

如果您希望继续，请单击以下链接或将其复制并粘贴到浏览器中：
{link}

如果您未请求更改电子邮件地址，则无需采取进一步操作。

此操作是从以下 IP 地址请求的：{ip_link}。

祝好，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = '邮箱地址已更改';
$lang['emails_email_change_success_message'] = <<<EOT
你好，{name}，

此邮件确认您在 {site_anchor} 使用的电子邮件地址已成功更改。

如果您没有执行此操作，请尽快与我们联系以解决此问题。

此操作是从以下 IP 地址执行的：{ip_link}。

祝好，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = '登录失败提醒';
$lang['emails_login_alert_failure_message'] = <<<EOT
您好，{name}，

有人最近使用错误的密码尝试登录您的{site_name}账户。

服务器日期：{date}
设备：{browser}，{platform}
IP地址：{ip_link}

如果这不是您本人操作，请不用担心，登录尝试未成功。

如果是您本人操作，但忘记了密码，请点击下面的链接重置密码：
{reset_link}

如果您在登录账户时遇到问题，请联系我们的团队或申请一键登录链接。

-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = '登录成功通知';
$lang['emails_login_alert_success_message'] = <<<EOT
您好，{name}，

当您成功登录{site_name}帐户后，我们会向您发送此电子邮件。

服务器日期：{date}
设备：{browser}，{platform}
IP地址：{ip_link}

如果这是您本人操作，请忽略此邮件。

如果您没有登录，请立即更改密码以确保您的账户安全。

如需帮助，请联系我们的支持团队。

-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = '快速登录链接';
$lang['emails_login_magic_link_message'] = <<<EOT
你好，{name}，

您请求通过一键登录访问您在 {site_anchor} 的账户。

点击下面的链接或将其复制粘贴到浏览器中，即可立即登录：
{link}

此链接将在15分钟后失效。如果您并未发起此请求，请忽略此邮件。

此操作是由 IP 地址 {ip_link} 请求的。

诚挚问候，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = '双重身份验证';
$lang['emails_login_two_factor_code_message'] = <<<EOT
你好 {name}，

您的双因素认证代码是：<strong>{code}</strong>

您可以随时在帐户设置中禁用双因素认证。

此操作是由 IP 地址 {ip_link} 执行的。

此致，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = '密码重置请求';
$lang['emails_password_change_request_message'] = <<<EOT
你好，{name}，

您收到这封邮件是因为我们收到了您在 {site_anchor} 账户的密码重置请求。

如果您希望继续，请点击以下链接或将其复制粘贴到浏览器中：
{link}

如果您未请求密码重置，则无需采取进一步操作。

此操作是由 IP 地址 {ip_link} 请求的。

诚挚问候，
-- {site_name} 团队。
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = '密码修改成功';
$lang['emails_password_change_success_message'] = <<<EOT
你好，{name}，

这封邮件确认您在 {site_anchor} 的密码已成功更改。您现在可以使用新密码 <a href="{login_url}" target="_blank" rel="noopener">登录</a>。

如果您未执行此操作，请尽快与我们联系以解决此问题。

此操作是由 IP 地址 {ip_link} 执行的。

诚挚问候，
-- {site_name} 团队。
EOT;
