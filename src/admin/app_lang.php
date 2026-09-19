<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = '组件';
$lang['admin_content'] = '内容';
$lang['admin_database_backup'] = '数据库备份';
$lang['admin_extensions'] = '扩展';
$lang['admin_firewall'] = '防火墙';
$lang['admin_help'] = '帮助';
$lang['admin_languages'] = '语言';
$lang['admin_logs'] = '系统日志';
$lang['admin_media'] = '媒体库';
$lang['admin_modules'] = '模块';
$lang['admin_plugins'] = '插件';
$lang['admin_reports'] = '活动日志';
$lang['admin_settings'] = '系统设置';
$lang['admin_sysinfo'] = '系统信息';
$lang['admin_system'] = '系统';
$lang['admin_system_firewall'] = '系统防火墙';
$lang['admin_themes'] = '主题';
$lang['admin_updates'] = '系统更新';
$lang['admin_users'] = '用户';
$lang['admin_view_site'] = '查看站点';
$lang['per_page'] = '每页';

// Generic Messages
$lang['admin_footer_thankyou'] = '感谢使用 <a href="%s" target="_blank">%s</a> 创建。';
$lang['admin_items_active_count'] = '=0{没有启用的项目。} other{在 <b>%s</b> 个项目中有 <b>#</b> 个已启用。}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = '安装';
$lang['admin_install_error'] = '安装包失败。';
$lang['admin_install_error_com'] = '安装失败：%s';
$lang['admin_install_location_app'] = '仅限此应用';
$lang['admin_install_location_core'] = '所有应用';
$lang['admin_install_location_select'] = '&#151; 选择位置 &#151;';
$lang['admin_install_success'] = '包已成功安装。';
$lang['admin_install_upload'] = '上传';
$lang['admin_install_upload_error'] = '上传包失败。';
$lang['admin_install_upload_success'] = '包已成功上传。';
$lang['admin_install_upload_tip'] = '在此上传包的 <b>.zip</b> 文件以安装该包。';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = '无法清理旧备份文件。';
$lang['admin_database_backup_clean_success'] = '删除 %d 个备份文件。释放 %d 磁盘空间。';
$lang['admin_database_backup_create'] = '创建备份';
$lang['admin_database_backup_create_confirm'] = '您确定要现在创建备份吗？';
$lang['admin_database_backup_create_error'] = '无法创建备份文件。确保文件夹<b>%s</b>可写。';
$lang['admin_database_backup_create_success'] = '数据库备份文件 <b>%s</b> 已成功创建。';
$lang['admin_database_backup_delete_confirm'] = '您确定要删除这些备份文件吗？';
$lang['admin_database_backup_delete_error'] = '无法删除选定的备份文件。';
$lang['admin_database_backup_delete_success'] = '备份文件已成功删除。';
$lang['admin_database_backup_download_error'] = '无法下载所选的备份文件。';
$lang['admin_database_backup_download_success'] = '备份文件已成功下载。';
$lang['admin_database_backup_lock_confirm'] = '您确定要锁定这些备份文件吗？';
$lang['admin_database_backup_lock_error'] = '无法锁定选定的备份文件。';
$lang['admin_database_backup_lock_success'] = '备份文件已成功锁定。';
$lang['admin_database_backup_locked_error'] = '无法删除已锁定的备份文件。';
$lang['admin_database_backup_missing_error'] = '找不到备份文件。';
$lang['admin_database_backup_unlock_confirm'] = '您确定要解锁这些备份文件吗？';
$lang['admin_database_backup_unlock_error'] = '无法解锁选定的备份文件。';
$lang['admin_database_backup_unlock_success'] = '备份文件已成功解锁。';
$lang['admin_database_prune'] = '修剪';
$lang['admin_database_prune_confirm'] = '您确定要修剪数据库吗？执行前将创建备份。';
$lang['admin_database_prune_error'] = '无法修剪数据库。';
$lang['admin_database_prune_next'] = '下一次数据库清理：<b>%s</b>';
$lang['admin_database_prune_success'] = '数据库清理成功。';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = '删除日志';
$lang['admin_logs_delete_confirm'] = '您确定要删除所选日志文件吗？';
$lang['admin_logs_delete_error'] = '无法删除日志文件。';
$lang['admin_logs_delete_success'] = '日志文件已成功删除。';
$lang['admin_logs_error_disabled'] = '当前未启用日志记录。';
$lang['admin_logs_error_empty'] = '未找到日志。';
$lang['admin_logs_error_missing'] = '无法找到日志文件，或者它为空。';
$lang['admin_logs_tip'] = '记录可能迅速创建非常大的文件。对于实时站点，请考虑删除旧文件。';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = '确定要删除选定的邮件吗？';
$lang['admin_emails_delete_error'] = '无法删除选定的邮件。';
$lang['admin_emails_delete_success'] = '选定的邮件已成功删除。';
$lang['admin_emails_email_from'] = '发送自';
$lang['admin_emails_mail_queue'] = '邮件队列';
$lang['admin_emails_mailer'] = '群发邮件';
$lang['admin_emails_search'] = '按主题或内容搜索邮件…';
$lang['admin_emails_send_error'] = '无法将邮件加入队列。请重试。';
$lang['admin_emails_send_none'] = '没有符合所选条件的用户。';
$lang['admin_emails_send_success'] = '邮件已加入队列，将在稍后发送。';
$lang['admin_emails_send_to_banned'] = '发送给被禁用户。';
$lang['admin_emails_send_to_deleted'] = '发送给已删除用户。';
$lang['admin_emails_send_to_disabled'] = '发送给非活跃用户。';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = '添加用户';
$lang['admin_users_all_users'] = '所有用户';
$lang['admin_users_ban_confirm'] = '您确定要封禁选定的用户吗?';
$lang['admin_users_ban_error'] = '无法封禁选定的用户。';
$lang['admin_users_ban_success'] = '已成功封禁选定的用户。';
$lang['admin_users_delete_confirm'] = '您确定要删除选定的用户吗?';
$lang['admin_users_delete_error'] = '无法删除选定的用户。';
$lang['admin_users_delete_success'] = '已成功删除选定的用户。';
$lang['admin_users_disable_confirm'] = '您确定要禁用选定的用户吗?';
$lang['admin_users_disable_error'] = '无法禁用选定的用户。';
$lang['admin_users_disable_success'] = '已成功禁用选定的用户。';
$lang['admin_users_edit'] = '编辑用户';
$lang['admin_users_edit_error'] = '无法更新用户。';
$lang['admin_users_edit_success'] = '用户成功更新。';
$lang['admin_users_enable_confirm'] = '您确定要启用选定的用户吗?';
$lang['admin_users_enable_error'] = '无法启用选定的用户。';
$lang['admin_users_enable_success'] = '已成功启用选定的用户。';
$lang['admin_users_groups'] = '用户组';
$lang['admin_users_lock_confirm'] = '确定要锁定所选用户吗？';
$lang['admin_users_lock_error'] = '无法锁定所选用户。';
$lang['admin_users_lock_success'] = '所选用户已成功锁定。';
$lang['admin_users_logged'] = '已登录用户';
$lang['admin_users_manage'] = '管理用户';
$lang['admin_users_remove_confirm'] = '您确定要永久删除选定的用户及其所有数据吗?';
$lang['admin_users_remove_error'] = '无法永久删除选定的用户及其所有数据。';
$lang['admin_users_remove_success'] = '已成功删除选定的用户及其所有数据。';
$lang['admin_users_restore_confirm'] = '您确定要恢复选定的用户吗?';
$lang['admin_users_restore_error'] = '无法恢复选定的用户。';
$lang['admin_users_restore_success'] = '已成功恢复选定的用户。';
$lang['admin_users_search'] = '按姓名或邮箱搜索…';
$lang['admin_users_unban_confirm'] = '您确定要解封选定的用户吗?';
$lang['admin_users_unban_error'] = '无法解封选定的用户。';
$lang['admin_users_unban_success'] = '已成功解封选定的用户。';
$lang['admin_users_unlock_confirm'] = '确定要解锁所选用户吗？';
$lang['admin_users_unlock_error'] = '无法解锁所选用户。';
$lang['admin_users_unlock_success'] = '已成功解锁所选用户。';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = '清除日志';
$lang['admin_reports_clear_confirm'] = '您确定要清除操作日志吗？';
$lang['admin_reports_clear_error'] = '无法清除操作日志。';
$lang['admin_reports_clear_success'] = '成功清除操作日志。';
$lang['admin_reports_latest_actions'] = '最新操作';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = '您确定要删除所选文件吗？';
$lang['admin_media_delete_error'] = '无法删除文件。';
$lang['admin_media_delete_success'] = '文件已成功删除。';
$lang['admin_media_file_delete_error'] = '无法删除文件。';
$lang['admin_media_file_delete_success'] = '文件已成功删除。';
$lang['admin_media_file_update_error'] = '无法更新文件。';
$lang['admin_media_file_update_success'] = '文件成功更新。';
$lang['admin_media_search'] = '按名称、描述或文件名搜索…';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{没有启用的模块。} other{在 <b>%s</b> 个模块中有 <b>#</b> 个已启用。}';
$lang['admin_modules_add'] = '添加模块';
$lang['admin_modules_delete_confirm'] = '您确定要删除模块：<b>%s</b>？';
$lang['admin_modules_delete_error'] = '无法删除模块。';
$lang['admin_modules_delete_success'] = '模块已成功删除。';
$lang['admin_modules_disable_all_confirm'] = '您确定要禁用所有模块吗？';
$lang['admin_modules_disable_all_error'] = '无法禁用所有模块。';
$lang['admin_modules_disable_all_success'] = '所有模块已成功禁用。';
$lang['admin_modules_disable_confirm'] = '您确定要禁用模块：<b>%s</b>？';
$lang['admin_modules_disable_error'] = '无法停用模块。';
$lang['admin_modules_disable_success'] = '模块已成功禁用。';
$lang['admin_modules_enable_all_confirm'] = '您确定要启用所有模块吗？';
$lang['admin_modules_enable_all_error'] = '无法启用所有模块。';
$lang['admin_modules_enable_all_success'] = '所有模块已成功启用。';
$lang['admin_modules_enable_confirm'] = '您确定要启用模块：<b>%s</b>？';
$lang['admin_modules_enable_error'] = '无法激活模块。';
$lang['admin_modules_enable_success'] = '模块已成功激活。';
$lang['admin_modules_install_confirm'] = '您确定要安装此模块吗？';
$lang['admin_modules_install_error'] = '模块安装失败。';
$lang['admin_modules_install_success'] = '模块安装成功。';
$lang['admin_modules_install_tip'] = '模块为您的网站添加新的功能。您可以在<a href="%s" target="_blank" rel="noopener">模块目录</a>浏览可用模块，或上传 <b>.zip</b> 文件。';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{没有启用的插件。} other{在 <b>%s</b> 个插件中有 <b>#</b> 个已启用。}';
$lang['admin_plugins_add'] = '添加插件';
$lang['admin_plugins_delete_confirm'] = '你确定要删除插件：<b>%s</b> 吗？';
$lang['admin_plugins_delete_error'] = '无法删除插件。';
$lang['admin_plugins_delete_success'] = '插件已成功删除。';
$lang['admin_plugins_disable_all_confirm'] = '您确定要禁用所有插件吗？';
$lang['admin_plugins_disable_all_error'] = '无法禁用所有插件。';
$lang['admin_plugins_disable_all_success'] = '所有插件已成功禁用。';
$lang['admin_plugins_disable_confirm'] = '你确定要禁用插件：<b>%s</b> 吗？';
$lang['admin_plugins_disable_error'] = '无法禁用插件。';
$lang['admin_plugins_disable_success'] = '插件已成功禁用。';
$lang['admin_plugins_enable_all_confirm'] = '您确定要启用所有插件吗？';
$lang['admin_plugins_enable_all_error'] = '无法启用所有插件。';
$lang['admin_plugins_enable_all_success'] = '所有插件已成功启用。';
$lang['admin_plugins_enable_confirm'] = '你确定要启用插件：<b>%s</b> 吗？';
$lang['admin_plugins_enable_error'] = '无法启用插件。';
$lang['admin_plugins_enable_success'] = '插件已成功启用。';
$lang['admin_plugins_install_confirm'] = '您确定要安装此插件吗？';
$lang['admin_plugins_install_error'] = '插件安装失败。';
$lang['admin_plugins_install_success'] = '插件安装成功。';
$lang['admin_plugins_install_tip'] = '插件通过额外的选项或集成扩展现有功能。从<a href="%s" target="_blank" rel="noopener">插件目录</a>安装，或上传 <b>.zip</b> 文件。';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = '添加主题';
$lang['admin_themes_delete_confirm'] = '您确定要删除该主题：<b>%s</b>?';
$lang['admin_themes_delete_error'] = '无法删除主题。';
$lang['admin_themes_delete_error_active'] = '您不能删除当前活动的主题。';
$lang['admin_themes_delete_success'] = '主题成功删除。';
$lang['admin_themes_disable_confirm'] = '确定要停用主题：<b>%s</b>？';
$lang['admin_themes_disable_error'] = '无法停用主题。';
$lang['admin_themes_disable_success'] = '主题已成功停用。';
$lang['admin_themes_enable_confirm'] = '您确定要启用该主题：<b>%s</b>?';
$lang['admin_themes_enable_error'] = '无法激活主题。';
$lang['admin_themes_enable_success'] = '主题已成功激活。';
$lang['admin_themes_install_confirm'] = '您确定要安装此主题吗？';
$lang['admin_themes_install_error'] = '主题安装失败。';
$lang['admin_themes_install_success'] = '主题安装成功。';
$lang['admin_themes_install_tip'] = '主题更改您网站的外观和布局。从<a href="%s" target="_blank" rel="noopener">主题库</a>中选择，或上传 <b>.zip</b> 文件来安装。';
$lang['admin_themes_none_tip'] = '此应用程序正在无主题的情况下运行。请安装一个主题以自定义面向公众的界面。';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = '菜单';
$lang['admin_menus_assign_error'] = '无法更新菜单位置。';
$lang['admin_menus_assign_success'] = '菜单位置更新成功。';
$lang['admin_menus_header'] = '有 <b>%s</b> 个菜单位置可用。';
$lang['admin_menus_location'] = '位置';
$lang['admin_menus_locations'] = '菜单位置';
$lang['admin_menus_manage'] = '管理菜单';
$lang['admin_menus_menu'] = '已分配菜单';
$lang['admin_menus_none'] = '&#151; 无 &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = '添加语言';
$lang['admin_languages_default_confirm'] = '您确定要将此语言设为网站的默认语言吗？';
$lang['admin_languages_default_error'] = '无法更改默认语言。';
$lang['admin_languages_default_error_nochange'] = '此语言已经是默认语言。';
$lang['admin_languages_default_success'] = '默认语言成功更改。';
$lang['admin_languages_disable_all_confirm'] = '您确定要禁用所有语言吗？';
$lang['admin_languages_disable_all_error'] = '无法禁用所有语言。';
$lang['admin_languages_disable_all_success'] = '所有语言已成功禁用。';
$lang['admin_languages_disable_confirm'] = '您确定要禁用语言：<b>%s</b>？';
$lang['admin_languages_disable_error'] = '无法禁用语言。';
$lang['admin_languages_disable_error_default'] = '默认语言无法禁用。';
$lang['admin_languages_disable_error_nochange'] = '此语言已禁用。';
$lang['admin_languages_disable_success'] = '语言已成功禁用。';
$lang['admin_languages_enable_all_confirm'] = '您确定要启用所有语言吗？';
$lang['admin_languages_enable_all_error'] = '无法启用所有语言。';
$lang['admin_languages_enable_all_success'] = '所有语言已成功启用。';
$lang['admin_languages_enable_confirm'] = '您确定要启用语言：<b>%s</b>？';
$lang['admin_languages_enable_error'] = '无法启用语言。';
$lang['admin_languages_enable_error_nochange'] = '此语言已启用。';
$lang['admin_languages_enable_success'] = '语言已成功启用。';
$lang['admin_languages_install_confirm'] = '您确定要安装此语言吗？';
$lang['admin_languages_install_error'] = '语言安装失败。';
$lang['admin_languages_install_success'] = '语言安装成功。';
$lang['admin_languages_install_tip'] = '语言可为您网站的界面和内容添加翻译。请在<a href="%s" target="_blank" rel="noopener">语言目录</a>中浏览可用语言，或上传 <b>.zip</b> 包以安装您自己的语言。';
$lang['admin_languages_tip'] = '启用、禁用和设置站点的默认语言。启用的语言对站点访问者可用。';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = '软件包已存在。';
$lang['package_archive_download_failed'] = '无法下载包存档。';
$lang['package_backup_create_error'] = '创建软件包备份失败。';
$lang['package_backup_dir_failed'] = '无法创建备份目录 %s';
$lang['package_backup_missing'] = '备份文件不存在。';
$lang['package_backup_path_error'] = '无法解析备份文件路径。';
$lang['package_backup_request_invalid'] = '无效的备份请求。';
$lang['package_backup_restore_error'] = '还原软件包备份失败。';
$lang['package_catalog_type_unknown'] = '未知的目录类型。';
$lang['package_checksum_error'] = '软件包校验和验证失败。';
$lang['package_copy_files_error'] = '无法将软件包文件复制到目标路径。';
$lang['package_copy_updates_error'] = '无法将更新文件复制到目标路径。';
$lang['package_dest_dir_failed'] = '无法创建目标目录 %s';
$lang['package_destination_error'] = '无法解析软件包的目标路径。';
$lang['package_download_dir_failed'] = '无法创建下载目录 %s';
$lang['package_download_empty'] = '软件包下载返回了空响应。';
$lang['package_download_request_invalid'] = '无效的软件包下载请求。';
$lang['package_extract_failed'] = '无法解压 ZIP 文件 %s';
$lang['package_invalid_lang_files'] = '无效的语言包 — 缺少必需的应用语言文件。';
$lang['package_invalid_lang_structure'] = '无效的语言包 — 缺少 admin 和/或 ci3 目录。';
$lang['package_invalid_missing_info'] = '无效的 %s：缺少 "info.php"。';
$lang['package_invalid_module_structure'] = '无效的模块 — 缺少必需的 config 和/或 controllers 目录。';
$lang['package_invalid_plugin_boot'] = '无效的插件 — 缺少 "boot.php"。';
$lang['package_invalid_plugin_contents'] = '无效的插件 — 插件不能包含控制器或视图。';
$lang['package_invalid_theme_boot'] = '无效的主题 — 缺少 "boot.php"。';
$lang['package_invalid_theme_views'] = '无效的主题 — 缺少 views 目录。';
$lang['package_no_root_dir'] = '软件包不包含根目录。';
$lang['package_not_downloadable'] = '该软件包不允许公开下载。';
$lang['package_not_in_registry'] = '公共注册表中没有该软件包。';
$lang['package_request_invalid'] = '无效的软件包请求。';
$lang['package_rollback_request_invalid'] = '无效的回滚请求。';
$lang['package_root_mismatch'] = '包存档根目录与 %s 不匹配';
$lang['package_single_root_required'] = '软件包必须且只能包含一个根目录。';
$lang['package_source_error'] = '无法解析软件包的源路径。';
$lang['package_system_core_restricted'] = '系统组件不能作为软件包安装。';
$lang['package_temp_dir_failed'] = '无法创建临时目录 %s';
$lang['package_type_unknown'] = '未知的软件包类型。';
$lang['package_update_request_invalid'] = '无效的软件包更新请求。';
$lang['package_update_root_mismatch'] = '更新存档根目录与 %s 不匹配。';
$lang['package_upload_dir_failed'] = '无法创建上传目录 %s';
$lang['package_url_invalid'] = '无效的软件包分发 URL。';
$lang['package_write_failed'] = '无法将包写入 %s';
$lang['package_zip_not_found'] = '包 ZIP 文件不存在：%s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = '有新的更新可用！';
$lang['update_backup_error'] = '无法创建现有软件包的备份。更新已中止。';
$lang['update_check_disabled'] = '自动更新检查已禁用。启用它们以查看更新。';
$lang['update_check_error'] = '目前无法运行更新检查。';
$lang['update_check_success'] = '更新检查成功完成。';
$lang['update_install_error'] = '无法安装软件包。已保留先前版本。';
$lang['update_install_success'] = '软件包已成功更新到最新版本。';
$lang['update_interval_3days'] = '每3天';
$lang['update_interval_biweekly'] = '每2周';
$lang['update_interval_daily'] = '每天';
$lang['update_interval_monthly'] = '每月一次';
$lang['update_interval_weekly'] = '每周一次';
$lang['update_not_available'] = '您的网站已是最新版本。';
$lang['update_rollback_error'] = '无法恢复先前版本。可能需要手动干预。';
$lang['update_rollback_success'] = '先前版本已成功恢复。';
$lang['updates_available'] = '可用更新';
$lang['updates_check_now'] = '立即检查';
$lang['updates_check_now_confirm'] = '您确定要立即检查更新吗？';
$lang['updates_current_version'] = '当前版本';
$lang['updates_enable'] = '启用更新';
$lang['updates_last_check'] = '上次检查：%s';
$lang['updates_latest_version'] = '最新版本';
$lang['updates_next_check'] = '下次计划检查：%s';
$lang['updates_previous_version'] = '先前版本';
$lang['updates_recent'] = '最近更新';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = '封禁指定的IP地址失败。';
$lang['admin_firewall_ban_success'] = 'IP地址已成功封禁。';
$lang['admin_firewall_block_ip'] = '封禁IP地址';
$lang['admin_firewall_delete_confirm'] = '您确定要解除所选IP地址的封禁吗?';
$lang['admin_firewall_delete_error'] = '解除所选IP地址封禁失败。';
$lang['admin_firewall_delete_success'] = '所选IP地址已成功解除封禁。';
$lang['admin_firewall_duration'] = '封禁时长';
$lang['admin_firewall_permanent'] = '永久';
$lang['admin_firewall_reason'] = '封禁原因';
$lang['admin_firewall_tip'] = '查看和管理因重复违规或可疑活动而被防火墙封禁的IP地址。';

// Settings
$lang['404_ban_duration'] = '404封禁时长';
$lang['404_threshold'] = '404触发限制';
$lang['uri_ban_duration'] = 'URI封禁时长';
$lang['uri_strike_threshold'] = 'URI触发限制';
