<?php
/**
* @package: phpBB 3.0.5 :: MSSTI RSS feed 2.0 -> root/language/zh_cmn_hant/mods 
* @version: $Id: rss.php, v 1.2.1 2009/06/01 09:06:01 leviatan21 Exp $
* @copyright: phpBB-TW (心靈捕手) http://phpbb-tw.net/phpbb/index.php
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
*
**/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'MSSTI_LINK'						=> 'RSS 消息來源 by <a href="http://www.mssti.com/phpbb3" onclick="window.open(this.href);return false;" >.:: MSSTI ::.</a>',
	'ACP_RSS'							=> 'RSS 管理',
	'ACP_RSS_FEEDS'						=> 'RSS',
	'ACP_RSS_MANAGEMENT'				=> '一般的 RSS 消息來源設定',
	'ACP_RSS_MANAGEMENT_EXPLAIN'		=> '這模組控制各種不同的 RSS 消息來源之啟用，並解析在文章中任何的 BBCode 以讀取外部的 RSS 消息來源。',
	'ACP_RSS_MIN'						=> '允許的最小值是 %1$s。',

// ACP Feeds to Serve
	'ACP_RSS_LEGEND1'					=> '消息來源服務',

	'ACP_RSS_ENABLE'					=> '啟用消息來源',
	'ACP_RSS_ENABLE_EXPLAIN'			=> '開啟或關閉整個論壇的 RSS。<br />無論底下的設定為何，開啟或關閉所有的消息來源。<br />也增加最近 7 天內文章做為主要的消息來源。',
	'ACP_RSS_NEWS'						=> '新聞消息來源',
	'ACP_RSS_NEWS_EXPLAIN'				=> '摘取版面 ID 的第一篇文章。用半形逗號分隔多個版面 ID，例如：「1,2,5」。<br />留白表示停用此功能。',
	'ACP_RSS_NEWPOST'					=> '新的文章',
	'ACP_RSS_NEWPOST_EXPLAIN'			=> '消息來源類似「檢視最新的文章」。針對會員顯示自從其上次訪問後的最新文章。針對訪客顯示上週以來的最新文章。',
	'ACP_RSS_OVERALL_FORUMS'			=> '啟用所有的版面消息來源',
	'ACP_RSS_OVERALL_FORUMS_EXPLAIN'	=> '顯示版面以及子版面的列表。',
	'ACP_RSS_OVERALL_FORUMS_LIMIT'		=> '在所有的版面消息來源中，每頁所要顯示的項目數量',
	'ACP_RSS_OVERALL_THREAD'			=> '啟用所有的主題消息來源',
	'ACP_RSS_OVERALL_THREAD_EXPLAIN'	=> '依最後發表時間顯示所有主題。',
	'ACP_RSS_OVERALL_THREAD_LIMIT'		=> '在所有的主題消息來源中，每頁所要顯示的項目數量',
	'ACP_RSS_OVERALL_POSTS'				=> '啟用所有的文章消息來源',
	'ACP_RSS_OVERALL_POSTS_EXPLAIN'		=> '依最後發表時間顯示所有文章。',
	'ACP_RSS_OVERALL_POSTS_LIMIT'		=> '在所有的文章消息來源中，每頁所要顯示的項目數量',

	'ACP_RSS_EGOSEARCH'					=> '啟用 Ego Search 消息來源',
	'ACP_RSS_EGOSEARCH_EXPLAIN'			=> '消息來源類似「檢視您的文章」。只有在您離開論壇後，保持登入狀態，才有效。',
	'ACP_RSS_EGOSEARCH_LIMIT'			=> '在「您所發表的文章」消息來源中，每頁所要顯示的項目數量',
	'ACP_RSS_FORUM'						=> '啟用每個版面消息來源',
	'ACP_RSS_FORUM_EXPLAIN'				=> '單一的版面之新的文章。',
	'ACP_RSS_THREAD'					=> '啟用每個主題消息來源',
	'ACP_RSS_THREAD_EXPLAIN'			=> '單一的主題之新的文章。',
	'ACP_RSS_ATTACH'					=> '啟用附加檔案消息來源',
	'ACP_RSS_ATTACH_EXPLAIN'			=> '顯示附加檔案。',

// ACP General RSS Settings
	'ACP_RSS_LEGEND2'					=> '一般的 RSS 設定',

	'ACP_RSS_LIMIT'						=> '項目數量', // 每一頁
	'ACP_RSS_LIMIT_EXPLAIN'				=> '消息來源項目所要顯示的最大數量。', // 當啟用分頁時，每一頁
	'ACP_RSS_CHARACTERS'				=> '顯示文章內容的最大長度',
	'ACP_RSS_CHARACTERS_EXPLAIN'		=> '每個消息來源項目所要顯示的最大字元數，建議設定為 1000。<br /> 0 表示無限制，1 表示無內容。<br />如果您發現有延遲，那麼使用 0 或 1。',
	'ACP_RSS_CHARS'						=> '字元',
	'ACP_RSS_ATTACHMENTS'				=> '附加檔案',
	'ACP_RSS_ATTACHMENTS_EXPLAIN'		=> '顯示附加檔案在消息來源。',
	'ACP_RSS_IMAGE_SIZE'				=> '圖片的最大寬度 (像素)',
	'ACP_RSS_IMAGE_SIZE_EXPLAIN'		=> '圖片 (當被顯示在消息來源) 如果超過指定的寬度，將被調整適當大小。<br /> 0 表示停用此功能。<br />PHP 的 <em>getimagesize()</em> 功能是 <strong>必須的</strong>。',
	'ACP_RSS_AUTH'						=> '跳過權限',
	'ACP_RSS_AUTH_EXPLAIN'				=> '如果啟用，那麼在消息來源中的文章，不會考慮您是否有設定誰才可以檢視它們的限制。',
	'ACP_RSS_BOARD_STATISTICS'			=> '論壇統計',
	'ACP_RSS_BOARD_STATISTICS_EXPLAIN'	=> '顯示論壇的統計在主要的消息來源之第一頁。',
	'ACP_RSS_ITEMS_STATISTICS'			=> '項目統計',
	'ACP_RSS_ITEMS_STATISTICS_EXPLAIN'	=> '在論壇統計顯示個別的項目統計。<br />( 由誰發表 + 日期與時間 + 回覆數 + 觀看數 )',
	'ACP_RSS_PAGINATION'				=> '消息來源頁數',
	'ACP_RSS_PAGINATION_EXPLAIN'		=> '如果有比每頁的項目數量更多，那麼限制顯示項目的數量。',
	'ACP_RSS_PAGINATION_LIMIT'			=> '每頁的項目限制',
	'ACP_RSS_PAGINATION_LIMIT_EXPLAIN'	=> '如果啟用分頁，而且消息來源取回顯示的項目多於此值，那麼消息來源將分隔成多頁。',
	'ACP_RSS_EXCLUDE_ID'				=> '例外的版面',
	'ACP_RSS_EXCLUDE_ID_EXPLAIN'		=> '這 RSS 將 <strong>不讀取</strong> 這些版面 ID 以及其子版面的資料。用半形逗號分隔多個版面 ID，例如：「1,2,5」。<br />留白表示讀取所有版面的資料。',

// FEED text
	'BOARD_DAYS'				=> '論壇啟用日期',
	'COPYRIGHT'					=> '版權聲明',
	'NO_RSS_ENABLED'			=> 'RSS 消息來源未啟用。',
	'NO_RSS_FEED'				=> '找不到 RSS 消息來源。',
	'NO_RSS_ITEMS'				=> '沒有有效的項目',
	'NO_RSS_ITEMS_EXPLAIN'		=> '很抱歉！您登入所請求的頁面沒有出現新的項目。',
	'NO_RSS_ITEMS_LOGGED_IN'	=> '您必須登入後才能使用 %1$s RSS 消息來源。',

));

?>