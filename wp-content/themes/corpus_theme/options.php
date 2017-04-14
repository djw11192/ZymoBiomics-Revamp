<?php
/**
 * This file loads all the options related to Theme Options settings page.
 * 
 * @package Corpus
 * @subpackage Core-Options
 * @category Options
 * @since Corpus 1.0 
 */

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function mudthemes_optionsframework_option_name() {

	$themename = corpus_get_theme_info('name');
        
	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */
 
/**
 * Change Log
 * Last updated: Juy 12, 2016
 * Last Updater: Dalton Kraatz
 * 
 * Updates:
 * July 12, 2016
 * Added a 5th head box field to the options page.
 * Added image upload fields for each head box to the options page.
 * Updates added to allow further custom settings for ZymoBIOMICs mobile appearance.
 * 
 * August 2, 2016
 * Added a 6th head box field to the options page.
 * 
 */

function mudthemes_optionsframework_options() {

        $fonts = mudthemes_optionsframework_font_scut();
        $icons = array('glass' => 'glass', 'music' => 'music', 'search' => 'search', 'envelope-o' => 'envelope-o', 'heart' => 'heart', 'star' => 'star', 'star-o' => 'star-o', 'user' => 'user', 'film' => 'film', 'th-large' => 'th-large', 'th' => 'th', 'th-list' => 'th-list', 'check' => 'check', 'remove' => 'remove', 'close' => 'close', 'times' => 'times', 'search-plus' => 'search-plus', 'search-minus' => 'search-minus', 'power-off' => 'power-off', 'signal' => 'signal', 'gear' => 'gear', 'cog' => 'cog', 'trash-o' => 'trash-o', 'home' => 'home', 'file-o' => 'file-o', 'clock-o' => 'clock-o', 'road' => 'road', 'download' => 'download', 'arrow-circle-o-down' => 'arrow-circle-o-down', 'arrow-circle-o-up' => 'arrow-circle-o-up', 'inbox' => 'inbox', 'play-circle-o' => 'play-circle-o', 'rotate-right' => 'rotate-right', 'repeat' => 'repeat', 'refresh' => 'refresh', 'list-alt' => 'list-alt', 'lock' => 'lock', 'flag' => 'flag', 'headphones' => 'headphones', 'volume-off' => 'volume-off', 'volume-down' => 'volume-down', 'volume-up' => 'volume-up', 'qrcode' => 'qrcode', 'barcode' => 'barcode', 'tag' => 'tag', 'tags' => 'tags', 'book' => 'book', 'bookmark' => 'bookmark', 'print' => 'print', 'camera' => 'camera', 'font' => 'font', 'bold' => 'bold', 'italic' => 'italic', 'text-height' => 'text-height', 'text-width' => 'text-width', 'align-left' => 'align-left', 'align-center' => 'align-center', 'align-right' => 'align-right', 'align-justify' => 'align-justify', 'list' => 'list', 'dedent' => 'dedent', 'outdent' => 'outdent', 'indent' => 'indent', 'video-camera' => 'video-camera', 'photo' => 'photo', 'image' => 'image', 'picture-o' => 'picture-o', 'pencil' => 'pencil', 'map-marker' => 'map-marker', 'adjust' => 'adjust', 'tint' => 'tint', 'edit' => 'edit', 'pencil-square-o' => 'pencil-square-o', 'share-square-o' => 'share-square-o', 'check-square-o' => 'check-square-o', 'arrows' => 'arrows', 'step-backward' => 'step-backward', 'fast-backward' => 'fast-backward', 'backward' => 'backward', 'play' => 'play', 'pause' => 'pause', 'stop' => 'stop', 'forward' => 'forward', 'fast-forward' => 'fast-forward', 'step-forward' => 'step-forward', 'eject' => 'eject', 'chevron-left' => 'chevron-left', 'chevron-right' => 'chevron-right', 'plus-circle' => 'plus-circle', 'minus-circle' => 'minus-circle', 'times-circle' => 'times-circle', 'check-circle' => 'check-circle', 'question-circle' => 'question-circle', 'info-circle' => 'info-circle', 'crosshairs' => 'crosshairs', 'times-circle-o' => 'times-circle-o', 'check-circle-o' => 'check-circle-o', 'ban' => 'ban', 'arrow-left' => 'arrow-left', 'arrow-right' => 'arrow-right', 'arrow-up' => 'arrow-up', 'arrow-down' => 'arrow-down', 'mail-forward' => 'mail-forward', 'share' => 'share', 'expand' => 'expand', 'compress' => 'compress', 'plus' => 'plus', 'minus' => 'minus', 'asterisk' => 'asterisk', 'exclamation-circle' => 'exclamation-circle', 'gift' => 'gift', 'leaf' => 'leaf', 'fire' => 'fire', 'eye' => 'eye', 'eye-slash' => 'eye-slash', 'warning' => 'warning', 'exclamation-triangle' => 'exclamation-triangle', 'plane' => 'plane', 'calendar' => 'calendar', 'random' => 'random', 'comment' => 'comment', 'magnet' => 'magnet', 'chevron-up' => 'chevron-up', 'chevron-down' => 'chevron-down', 'retweet' => 'retweet', 'shopping-cart' => 'shopping-cart', 'folder' => 'folder', 'folder-open' => 'folder-open', 'arrows-v' => 'arrows-v', 'arrows-h' => 'arrows-h', 'bar-chart-o' => 'bar-chart-o', 'bar-chart' => 'bar-chart', 'twitter-square' => 'twitter-square', 'facebook-square' => 'facebook-square', 'camera-retro' => 'camera-retro', 'key' => 'key', 'gears' => 'gears', 'cogs' => 'cogs', 'comments' => 'comments', 'thumbs-o-up' => 'thumbs-o-up', 'thumbs-o-down' => 'thumbs-o-down', 'star-half' => 'star-half', 'heart-o' => 'heart-o', 'sign-out' => 'sign-out', 'linkedin-square' => 'linkedin-square', 'thumb-tack' => 'thumb-tack', 'external-link' => 'external-link', 'sign-in' => 'sign-in', 'trophy' => 'trophy', 'github-square' => 'github-square', 'upload' => 'upload', 'lemon-o' => 'lemon-o', 'phone' => 'phone', 'square-o' => 'square-o', 'bookmark-o' => 'bookmark-o', 'phone-square' => 'phone-square', 'twitter' => 'twitter', 'facebook-f' => 'facebook-f', 'facebook' => 'facebook', 'github' => 'github', 'unlock' => 'unlock', 'credit-card' => 'credit-card', 'feed' => 'feed', 'rss' => 'rss', 'hdd-o' => 'hdd-o', 'bullhorn' => 'bullhorn', 'bell' => 'bell', 'certificate' => 'certificate', 'hand-o-right' => 'hand-o-right', 'hand-o-left' => 'hand-o-left', 'hand-o-up' => 'hand-o-up', 'hand-o-down' => 'hand-o-down', 'arrow-circle-left' => 'arrow-circle-left', 'arrow-circle-right' => 'arrow-circle-right', 'arrow-circle-up' => 'arrow-circle-up', 'arrow-circle-down' => 'arrow-circle-down', 'globe' => 'globe', 'wrench' => 'wrench', 'tasks' => 'tasks', 'filter' => 'filter', 'briefcase' => 'briefcase', 'arrows-alt' => 'arrows-alt', 'group' => 'group', 'users' => 'users', 'chain' => 'chain', 'link' => 'link', 'cloud' => 'cloud', 'flask' => 'flask', 'cut' => 'cut', 'scissors' => 'scissors', 'copy' => 'copy', 'files-o' => 'files-o', 'paperclip' => 'paperclip', 'save' => 'save', 'floppy-o' => 'floppy-o', 'square' => 'square', 'navicon' => 'navicon', 'reorder' => 'reorder', 'bars' => 'bars', 'list-ul' => 'list-ul', 'list-ol' => 'list-ol', 'strikethrough' => 'strikethrough', 'underline' => 'underline', 'table' => 'table', 'magic' => 'magic', 'truck' => 'truck', 'pinterest' => 'pinterest', 'pinterest-square' => 'pinterest-square', 'google-plus-square' => 'google-plus-square', 'google-plus' => 'google-plus', 'money' => 'money', 'caret-down' => 'caret-down', 'caret-up' => 'caret-up', 'caret-left' => 'caret-left', 'caret-right' => 'caret-right', 'columns' => 'columns', 'unsorted' => 'unsorted', 'sort' => 'sort', 'sort-down' => 'sort-down', 'sort-desc' => 'sort-desc', 'sort-up' => 'sort-up', 'sort-asc' => 'sort-asc', 'envelope' => 'envelope', 'linkedin' => 'linkedin', 'rotate-left' => 'rotate-left', 'undo' => 'undo', 'legal' => 'legal', 'gavel' => 'gavel', 'dashboard' => 'dashboard', 'tachometer' => 'tachometer', 'comment-o' => 'comment-o', 'comments-o' => 'comments-o', 'flash' => 'flash', 'bolt' => 'bolt', 'sitemap' => 'sitemap', 'umbrella' => 'umbrella', 'paste' => 'paste', 'clipboard' => 'clipboard', 'lightbulb-o' => 'lightbulb-o', 'exchange' => 'exchange', 'cloud-download' => 'cloud-download', 'cloud-upload' => 'cloud-upload', 'user-md' => 'user-md', 'stethoscope' => 'stethoscope', 'suitcase' => 'suitcase', 'bell-o' => 'bell-o', 'coffee' => 'coffee', 'cutlery' => 'cutlery', 'file-text-o' => 'file-text-o', 'building-o' => 'building-o', 'hospital-o' => 'hospital-o', 'ambulance' => 'ambulance', 'medkit' => 'medkit', 'fighter-jet' => 'fighter-jet', 'beer' => 'beer', 'h-square' => 'h-square', 'plus-square' => 'plus-square', 'angle-double-left' => 'angle-double-left', 'angle-double-right' => 'angle-double-right', 'angle-double-up' => 'angle-double-up', 'angle-double-down' => 'angle-double-down', 'angle-left' => 'angle-left', 'angle-right' => 'angle-right', 'angle-up' => 'angle-up', 'angle-down' => 'angle-down', 'desktop' => 'desktop', 'laptop' => 'laptop', 'tablet' => 'tablet', 'mobile-phone' => 'mobile-phone', 'mobile' => 'mobile', 'circle-o' => 'circle-o', 'quote-left' => 'quote-left', 'quote-right' => 'quote-right', 'spinner' => 'spinner', 'circle' => 'circle', 'mail-reply' => 'mail-reply', 'reply' => 'reply', 'github-alt' => 'github-alt', 'folder-o' => 'folder-o', 'folder-open-o' => 'folder-open-o', 'smile-o' => 'smile-o', 'frown-o' => 'frown-o', 'meh-o' => 'meh-o', 'gamepad' => 'gamepad', 'keyboard-o' => 'keyboard-o', 'flag-o' => 'flag-o', 'flag-checkered' => 'flag-checkered', 'terminal' => 'terminal', 'code' => 'code', 'mail-reply-all' => 'mail-reply-all', 'reply-all' => 'reply-all', 'star-half-empty' => 'star-half-empty', 'star-half-full' => 'star-half-full', 'star-half-o' => 'star-half-o', 'location-arrow' => 'location-arrow', 'crop' => 'crop', 'code-fork' => 'code-fork', 'unlink' => 'unlink', 'chain-broken' => 'chain-broken', 'question' => 'question', 'info' => 'info', 'exclamation' => 'exclamation', 'superscript' => 'superscript', 'subscript' => 'subscript', 'eraser' => 'eraser', 'puzzle-piece' => 'puzzle-piece', 'microphone' => 'microphone', 'microphone-slash' => 'microphone-slash', 'shield' => 'shield', 'calendar-o' => 'calendar-o', 'fire-extinguisher' => 'fire-extinguisher', 'rocket' => 'rocket', 'maxcdn' => 'maxcdn', 'chevron-circle-left' => 'chevron-circle-left', 'chevron-circle-right' => 'chevron-circle-right', 'chevron-circle-up' => 'chevron-circle-up', 'chevron-circle-down' => 'chevron-circle-down', 'html5' => 'html5', 'css3' => 'css3', 'anchor' => 'anchor', 'unlock-alt' => 'unlock-alt', 'bullseye' => 'bullseye', 'ellipsis-h' => 'ellipsis-h', 'ellipsis-v' => 'ellipsis-v', 'rss-square' => 'rss-square', 'play-circle' => 'play-circle', 'ticket' => 'ticket', 'minus-square' => 'minus-square', 'minus-square-o' => 'minus-square-o', 'level-up' => 'level-up', 'level-down' => 'level-down', 'check-square' => 'check-square', 'pencil-square' => 'pencil-square', 'external-link-square' => 'external-link-square', 'share-square' => 'share-square', 'compass' => 'compass', 'toggle-down' => 'toggle-down', 'caret-square-o-down' => 'caret-square-o-down', 'toggle-up' => 'toggle-up', 'caret-square-o-up' => 'caret-square-o-up', 'toggle-right' => 'toggle-right', 'caret-square-o-right' => 'caret-square-o-right', 'euro' => 'euro', 'eur' => 'eur', 'gbp' => 'gbp', 'dollar' => 'dollar', 'usd' => 'usd', 'rupee' => 'rupee', 'inr' => 'inr', 'cny' => 'cny', 'rmb' => 'rmb', 'yen' => 'yen', 'jpy' => 'jpy', 'ruble' => 'ruble', 'rouble' => 'rouble', 'rub' => 'rub', 'won' => 'won', 'krw' => 'krw', 'bitcoin' => 'bitcoin', 'btc' => 'btc', 'file' => 'file', 'file-text' => 'file-text', 'sort-alpha-asc' => 'sort-alpha-asc', 'sort-alpha-desc' => 'sort-alpha-desc', 'sort-amount-asc' => 'sort-amount-asc', 'sort-amount-desc' => 'sort-amount-desc', 'sort-numeric-asc' => 'sort-numeric-asc', 'sort-numeric-desc' => 'sort-numeric-desc', 'thumbs-up' => 'thumbs-up', 'thumbs-down' => 'thumbs-down', 'youtube-square' => 'youtube-square', 'youtube' => 'youtube', 'xing' => 'xing', 'xing-square' => 'xing-square', 'youtube-play' => 'youtube-play', 'dropbox' => 'dropbox', 'stack-overflow' => 'stack-overflow', 'instagram' => 'instagram', 'flickr' => 'flickr', 'adn' => 'adn', 'bitbucket' => 'bitbucket', 'bitbucket-square' => 'bitbucket-square', 'tumblr' => 'tumblr', 'tumblr-square' => 'tumblr-square', 'long-arrow-down' => 'long-arrow-down', 'long-arrow-up' => 'long-arrow-up', 'long-arrow-left' => 'long-arrow-left', 'long-arrow-right' => 'long-arrow-right', 'apple' => 'apple', 'windows' => 'windows', 'android' => 'android', 'linux' => 'linux', 'dribbble' => 'dribbble', 'skype' => 'skype', 'foursquare' => 'foursquare', 'trello' => 'trello', 'female' => 'female', 'male' => 'male', 'gittip' => 'gittip', 'gratipay' => 'gratipay', 'sun-o' => 'sun-o', 'moon-o' => 'moon-o', 'archive' => 'archive', 'bug' => 'bug', 'vk' => 'vk', 'weibo' => 'weibo', 'renren' => 'renren', 'pagelines' => 'pagelines', 'stack-exchange' => 'stack-exchange', 'arrow-circle-o-right' => 'arrow-circle-o-right', 'arrow-circle-o-left' => 'arrow-circle-o-left', 'toggle-left' => 'toggle-left', 'caret-square-o-left' => 'caret-square-o-left', 'dot-circle-o' => 'dot-circle-o', 'wheelchair' => 'wheelchair', 'vimeo-square' => 'vimeo-square', 'turkish-lira' => 'turkish-lira', 'try' => 'try', 'plus-square-o' => 'plus-square-o', 'space-shuttle' => 'space-shuttle', 'slack' => 'slack', 'envelope-square' => 'envelope-square', 'wordpress' => 'wordpress', 'openid' => 'openid', 'institution' => 'institution', 'bank' => 'bank', 'university' => 'university', 'mortar-board' => 'mortar-board', 'graduation-cap' => 'graduation-cap', 'yahoo' => 'yahoo', 'google' => 'google', 'reddit' => 'reddit', 'reddit-square' => 'reddit-square', 'stumbleupon-circle' => 'stumbleupon-circle', 'stumbleupon' => 'stumbleupon', 'delicious' => 'delicious', 'digg' => 'digg', 'pied-piper' => 'pied-piper', 'pied-piper-alt' => 'pied-piper-alt', 'drupal' => 'drupal', 'joomla' => 'joomla', 'language' => 'language', 'fax' => 'fax', 'building' => 'building', 'child' => 'child', 'paw' => 'paw', 'spoon' => 'spoon', 'cube' => 'cube', 'cubes' => 'cubes', 'behance' => 'behance', 'behance-square' => 'behance-square', 'steam' => 'steam', 'steam-square' => 'steam-square', 'recycle' => 'recycle', 'automobile' => 'automobile', 'car' => 'car', 'cab' => 'cab', 'taxi' => 'taxi', 'tree' => 'tree', 'spotify' => 'spotify', 'deviantart' => 'deviantart', 'soundcloud' => 'soundcloud', 'database' => 'database', 'file-pdf-o' => 'file-pdf-o', 'file-word-o' => 'file-word-o', 'file-excel-o' => 'file-excel-o', 'file-powerpoint-o' => 'file-powerpoint-o', 'file-photo-o' => 'file-photo-o', 'file-picture-o' => 'file-picture-o', 'file-image-o' => 'file-image-o', 'file-zip-o' => 'file-zip-o', 'file-archive-o' => 'file-archive-o', 'file-sound-o' => 'file-sound-o', 'file-audio-o' => 'file-audio-o', 'file-movie-o' => 'file-movie-o', 'file-video-o' => 'file-video-o', 'file-code-o' => 'file-code-o', 'vine' => 'vine', 'codepen' => 'codepen', 'jsfiddle' => 'jsfiddle', 'life-bouy' => 'life-bouy', 'life-buoy' => 'life-buoy', 'life-saver' => 'life-saver', 'support' => 'support', 'life-ring' => 'life-ring', 'circle-o-notch' => 'circle-o-notch', 'ra' => 'ra', 'rebel' => 'rebel', 'ge' => 'ge', 'empire' => 'empire', 'git-square' => 'git-square', 'git' => 'git', 'y-combinator-square' => 'y-combinator-square', 'yc-square' => 'yc-square', 'hacker-news' => 'hacker-news', 'tencent-weibo' => 'tencent-weibo', 'qq' => 'qq', 'wechat' => 'wechat', 'weixin' => 'weixin', 'send' => 'send', 'paper-plane' => 'paper-plane', 'send-o' => 'send-o', 'paper-plane-o' => 'paper-plane-o', 'history' => 'history', 'circle-thin' => 'circle-thin', 'header' => 'header', 'paragraph' => 'paragraph', 'sliders' => 'sliders', 'share-alt' => 'share-alt', 'share-alt-square' => 'share-alt-square', 'bomb' => 'bomb', 'soccer-ball-o' => 'soccer-ball-o', 'futbol-o' => 'futbol-o', 'tty' => 'tty', 'binoculars' => 'binoculars', 'plug' => 'plug', 'slideshare' => 'slideshare', 'twitch' => 'twitch', 'yelp' => 'yelp', 'newspaper-o' => 'newspaper-o', 'wifi' => 'wifi', 'calculator' => 'calculator', 'paypal' => 'paypal', 'google-wallet' => 'google-wallet', 'cc-visa' => 'cc-visa', 'cc-mastercard' => 'cc-mastercard', 'cc-discover' => 'cc-discover', 'cc-amex' => 'cc-amex', 'cc-paypal' => 'cc-paypal', 'cc-stripe' => 'cc-stripe', 'bell-slash' => 'bell-slash', 'bell-slash-o' => 'bell-slash-o', 'trash' => 'trash', 'copyright' => 'copyright', 'at' => 'at', 'eyedropper' => 'eyedropper', 'paint-brush' => 'paint-brush', 'birthday-cake' => 'birthday-cake', 'area-chart' => 'area-chart', 'pie-chart' => 'pie-chart', 'line-chart' => 'line-chart', 'lastfm' => 'lastfm', 'lastfm-square' => 'lastfm-square', 'toggle-off' => 'toggle-off', 'toggle-on' => 'toggle-on', 'bicycle' => 'bicycle', 'bus' => 'bus', 'ioxhost' => 'ioxhost', 'angellist' => 'angellist', 'cc' => 'cc', 'shekel' => 'shekel', 'sheqel' => 'sheqel', 'ils' => 'ils', 'meanpath' => 'meanpath', 'buysellads' => 'buysellads', 'connectdevelop' => 'connectdevelop', 'dashcube' => 'dashcube', 'forumbee' => 'forumbee', 'leanpub' => 'leanpub', 'sellsy' => 'sellsy', 'shirtsinbulk' => 'shirtsinbulk', 'simplybuilt' => 'simplybuilt', 'skyatlas' => 'skyatlas', 'cart-plus' => 'cart-plus', 'cart-arrow-down' => 'cart-arrow-down', 'diamond' => 'diamond', 'ship' => 'ship', 'user-secret' => 'user-secret', 'motorcycle' => 'motorcycle', 'street-view' => 'street-view', 'heartbeat' => 'heartbeat', 'venus' => 'venus', 'mars' => 'mars', 'mercury' => 'mercury', 'intersex' => 'intersex', 'transgender' => 'transgender', 'transgender-alt' => 'transgender-alt', 'venus-double' => 'venus-double', 'mars-double' => 'mars-double', 'venus-mars' => 'venus-mars', 'mars-stroke' => 'mars-stroke', 'mars-stroke-v' => 'mars-stroke-v', 'mars-stroke-h' => 'mars-stroke-h', 'neuter' => 'neuter', 'genderless' => 'genderless', 'facebook-official' => 'facebook-official', 'pinterest-p' => 'pinterest-p', 'whatsapp' => 'whatsapp', 'server' => 'server', 'user-plus' => 'user-plus', 'user-times' => 'user-times', 'hotel' => 'hotel', 'bed' => 'bed', 'viacoin' => 'viacoin', 'train' => 'train', 'subway' => 'subway', 'medium' => 'medium', 'yc' => 'yc', 'y-combinator' => 'y-combinator', 'optin-monster' => 'optin-monster', 'opencart' => 'opencart', 'expeditedssl' => 'expeditedssl', 'battery-4' => 'battery-4', 'battery-full' => 'battery-full', 'battery-3' => 'battery-3', 'battery-three-quarters' => 'battery-three-quarters', 'battery-2' => 'battery-2', 'battery-half' => 'battery-half', 'battery-1' => 'battery-1', 'battery-quarter' => 'battery-quarter', 'battery-0' => 'battery-0', 'battery-empty' => 'battery-empty', 'mouse-pointer' => 'mouse-pointer', 'i-cursor' => 'i-cursor', 'object-group' => 'object-group', 'object-ungroup' => 'object-ungroup', 'sticky-note' => 'sticky-note', 'sticky-note-o' => 'sticky-note-o', 'cc-jcb' => 'cc-jcb', 'cc-diners-club' => 'cc-diners-club', 'clone' => 'clone', 'balance-scale' => 'balance-scale', 'hourglass-o' => 'hourglass-o', 'hourglass-1' => 'hourglass-1', 'hourglass-start' => 'hourglass-start', 'hourglass-2' => 'hourglass-2', 'hourglass-half' => 'hourglass-half', 'hourglass-3' => 'hourglass-3', 'hourglass-end' => 'hourglass-end', 'hourglass' => 'hourglass', 'hand-grab-o' => 'hand-grab-o', 'hand-rock-o' => 'hand-rock-o', 'hand-stop-o' => 'hand-stop-o', 'hand-paper-o' => 'hand-paper-o', 'hand-scissors-o' => 'hand-scissors-o', 'hand-lizard-o' => 'hand-lizard-o', 'hand-spock-o' => 'hand-spock-o', 'hand-pointer-o' => 'hand-pointer-o', 'hand-peace-o' => 'hand-peace-o', 'trademark' => 'trademark', 'registered' => 'registered', 'creative-commons' => 'creative-commons', 'gg' => 'gg', 'gg-circle' => 'gg-circle', 'tripadvisor' => 'tripadvisor', 'odnoklassniki' => 'odnoklassniki', 'odnoklassniki-square' => 'odnoklassniki-square', 'get-pocket' => 'get-pocket', 'wikipedia-w' => 'wikipedia-w', 'safari' => 'safari', 'chrome' => 'chrome', 'firefox' => 'firefox', 'opera' => 'opera', 'internet-explorer' => 'internet-explorer', 'tv' => 'tv', 'television' => 'television', 'contao' => 'contao', 'px' => 'px', 'amazon' => 'amazon', 'calendar-plus-o' => 'calendar-plus-o', 'calendar-minus-o' => 'calendar-minus-o', 'calendar-times-o' => 'calendar-times-o', 'calendar-check-o' => 'calendar-check-o', 'industry' => 'industry', 'map-pin' => 'map-pin', 'map-signs' => 'map-signs', 'map-o' => 'map-o', 'map' => 'map', 'commenting' => 'commenting', 'commenting-o' => 'commenting-o', 'houzz' => 'houzz', 'vimeo' => 'vimeo', 'black-tie' => 'black-tie', 'fonticons' => 'fonticons',);
        $num_by_hundred = array('100'=>'100', '200'=>'200', '300'=>'300', '400'=>'400', '500'=>'500', '600'=>'600', '700'=>'700', '800'=>'800', '900'=>'900', '1000'=>'1000', '1100'=>'1100', '1200'=>'1200', '1300'=>'1300', '1400'=>'1400', '1500'=>'1500', '1600'=>'1600', '1700'=>'1700', '1800'=>'1800', '1900'=>'1900', '2000'=>'2000', '2100'=>'2100', '2200'=>'2200', '2300'=>'2300', '2400'=>'2400', '2500'=>'2500', '2600'=>'2600', '2700'=>'2700', '2800'=>'2800', '2900'=>'2900', '3000'=>'3000', '3100'=>'3100', '3200'=>'3200', '3300'=>'3300', '3400'=>'3400', '3500'=>'3500', '3600'=>'3600', '3700'=>'3700', '3800'=>'3800', '3900'=>'3900', '4000'=>'4000', '4100'=>'4100', '4200'=>'4200', '4300'=>'4300', '4400'=>'4400', '4500'=>'4500', '4600'=>'4600', '4700'=>'4700', '4800'=>'4800', '4900'=>'4900', '5000'=>'5000', '5100'=>'5100', '5200'=>'5200', '5300'=>'5300', '5400'=>'5400', '5500'=>'5500', '5600'=>'5600', '5700'=>'5700', '5800'=>'5800', '5900'=>'5900', '6000'=>'6000', '6100'=>'6100', '6200'=>'6200', '6300'=>'6300', '6400'=>'6400', '6500'=>'6500', '6600'=>'6600', '6700'=>'6700', '6800'=>'6800', '6900'=>'6900', '7000'=>'7000', '7100'=>'7100', '7200'=>'7200', '7300'=>'7300', '7400'=>'7400', '7500'=>'7500', '7600'=>'7600', '7700'=>'7700', '7800'=>'7800', '7900'=>'7900', '8000'=>'8000', '8100'=>'8100', '8200'=>'8200', '8300'=>'8300', '8400'=>'8400', '8500'=>'8500', '8600'=>'8600', '8700'=>'8700', '8800'=>'8800', '8900'=>'8900', '9000'=>'9000', '9100'=>'9100', '9200'=>'9200', '9300'=>'9300', '9400'=>'9400', '9500'=>'9500', '9600'=>'9600', '9700'=>'9700', '9800'=>'9800', '9900'=>'9900', '10000'=>'10000');
        $one_to_hundred_px = array('1px' => '1px', '2px' => '2px', '3px' => '3px', '4px' => '4px', '5px' => '5px', '6px' => '6px', '7px' => '7px', '8px' => '8px', '9px' => '9px', '10px' => '10px', '11px' => '11px', '12px' => '12px', '13px' => '13px', '14px' => '14px', '15px' => '15px', '16px' => '16px', '17px' => '17px', '18px' => '18px', '19px' => '19px', '20px' => '20px', '21px' => '21px', '22px' => '22px', '23px' => '23px', '24px' => '24px', '25px' => '25px', '26px' => '26px', '27px' => '27px', '28px' => '28px', '29px' => '29px', '30px' => '30px', '31px' => '31px', '32px' => '32px', '33px' => '33px', '34px' => '34px', '35px' => '35px', '36px' => '36px', '37px' => '37px', '38px' => '38px', '39px' => '39px', '40px' => '40px', '41px' => '41px', '42px' => '42px', '43px' => '43px', '44px' => '44px', '45px' => '45px', '46px' => '46px', '47px' => '47px', '48px' => '48px', '49px' => '49px', '50px' => '50px', '51px' => '51px', '52px' => '52px', '53px' => '53px', '54px' => '54px', '55px' => '55px', '56px' => '56px', '57px' => '57px', '58px' => '58px', '59px' => '59px', '60px' => '60px', '61px' => '61px', '62px' => '62px', '63px' => '63px', '64px' => '64px', '65px' => '65px', '66px' => '66px', '67px' => '67px', '68px' => '68px', '69px' => '69px', '70px' => '70px', '71px' => '71px', '72px' => '72px', '73px' => '73px', '74px' => '74px', '75px' => '75px', '76px' => '76px', '77px' => '77px', '78px' => '78px', '79px' => '79px', '80px' => '80px', '81px' => '81px', '82px' => '82px', '83px' => '83px', '84px' => '84px', '85px' => '85px', '86px' => '86px', '87px' => '87px', '88px' => '88px', '89px' => '89px', '90px' => '90px', '91px' => '91px', '92px' => '92px', '93px' => '93px', '94px' => '94px', '95px' => '95px', '96px' => '96px', '97px' => '97px', '98px' => '98px', '99px' => '99px', '100px' => '100px');
        $one_to_hundred_pct = array('1' => '1%', '2' => '2%', '3' => '3%', '4' => '4%', '5' => '5%', '6' => '6%', '7' => '7%', '8' => '8%', '9' => '9%', '10' => '10%', '11' => '11%', '12' => '12%', '13' => '13%', '14' => '14%', '15' => '15%', '16' => '16%', '17' => '17%', '18' => '18%', '19' => '19%', '20' => '20%', '21' => '21%', '22' => '22%', '23' => '23%', '24' => '24%', '25' => '25%', '26' => '26%', '27' => '27%', '28' => '28%', '29' => '29%', '30' => '30%', '31' => '31%', '32' => '32%', '33' => '33%', '34' => '34%', '35' => '35%', '36' => '36%', '37' => '37%', '38' => '38%', '39' => '39%', '40' => '40%', '41' => '41%', '42' => '42%', '43' => '43%', '44' => '44%', '45' => '45%', '46' => '46%', '47' => '47%', '48' => '48%', '49' => '49%', '50' => '50%', '51' => '51%', '52' => '52%', '53' => '53%', '54' => '54%', '55' => '55%', '56' => '56%', '57' => '57%', '58' => '58%', '59' => '59%', '60' => '60%', '61' => '61%', '62' => '62%', '63' => '63%', '64' => '64%', '65' => '65%', '66' => '66%', '67' => '67%', '68' => '68%', '69' => '69%', '70' => '70%', '71' => '71%', '72' => '72%', '73' => '73%', '74' => '74%', '75' => '75%', '76' => '76%', '77' => '77%', '78' => '78%', '79' => '79%', '80' => '80%', '81' => '81%', '82' => '82%', '83' => '83%', '84' => '84%', '85' => '85%', '86' => '86%', '87' => '87%', '88' => '88%', '89' => '89%', '90' => '90%', '91' => '91%', '92' => '92%', '93' => '93%', '94' => '94%', '95' => '95%', '96' => '96%', '97' => '97%', '98' => '98%', '99' => '99%', '100' => '100%');
        $zero_to_250_px = array('0px' => '0px','1px' => '1px','2px' => '2px','3px' => '3px','4px' => '4px','5px' => '5px','6px' => '6px','7px' => '7px','8px' => '8px','9px' => '9px','10px' => '10px','11px' => '11px','12px' => '12px','13px' => '13px','14px' => '14px','15px' => '15px','16px' => '16px','17px' => '17px','18px' => '18px','19px' => '19px','20px' => '20px','21px' => '21px','22px' => '22px','23px' => '23px','24px' => '24px','25px' => '25px','26px' => '26px','27px' => '27px','28px' => '28px','29px' => '29px','30px' => '30px','31px' => '31px','32px' => '32px','33px' => '33px','34px' => '34px','35px' => '35px','36px' => '36px','37px' => '37px','38px' => '38px','39px' => '39px','40px' => '40px','41px' => '41px','42px' => '42px','43px' => '43px','44px' => '44px','45px' => '45px','46px' => '46px','47px' => '47px','48px' => '48px','49px' => '49px','50px' => '50px','51px' => '51px','52px' => '52px','53px' => '53px','54px' => '54px','55px' => '55px','56px' => '56px','57px' => '57px','58px' => '58px','59px' => '59px','60px' => '60px','61px' => '61px','62px' => '62px','63px' => '63px','64px' => '64px','65px' => '65px','66px' => '66px','67px' => '67px','68px' => '68px','69px' => '69px','70px' => '70px','71px' => '71px','72px' => '72px','73px' => '73px','74px' => '74px','75px' => '75px','76px' => '76px','77px' => '77px','78px' => '78px','79px' => '79px','80px' => '80px','81px' => '81px','82px' => '82px','83px' => '83px','84px' => '84px','85px' => '85px','86px' => '86px','87px' => '87px','88px' => '88px','89px' => '89px','90px' => '90px','91px' => '91px','92px' => '92px','93px' => '93px','94px' => '94px','95px' => '95px','96px' => '96px','97px' => '97px','98px' => '98px','99px' => '99px','100px' => '100px','101px' => '101px','102px' => '102px','103px' => '103px','104px' => '104px','105px' => '105px','106px' => '106px','107px' => '107px','108px' => '108px','109px' => '109px','110px' => '110px','111px' => '111px','112px' => '112px','113px' => '113px','114px' => '114px','115px' => '115px','116px' => '116px','117px' => '117px','118px' => '118px','119px' => '119px','120px' => '120px','121px' => '121px','122px' => '122px','123px' => '123px','124px' => '124px','125px' => '125px','126px' => '126px','127px' => '127px','128px' => '128px','129px' => '129px','130px' => '130px','131px' => '131px','132px' => '132px','133px' => '133px','134px' => '134px','135px' => '135px','136px' => '136px','137px' => '137px','138px' => '138px','139px' => '139px','140px' => '140px','141px' => '141px','142px' => '142px','143px' => '143px','144px' => '144px','145px' => '145px','146px' => '146px','147px' => '147px','148px' => '148px','149px' => '149px','150px' => '150px','151px' => '151px','152px' => '152px','153px' => '153px','154px' => '154px','155px' => '155px','156px' => '156px','157px' => '157px','158px' => '158px','159px' => '159px','160px' => '160px','161px' => '161px','162px' => '162px','163px' => '163px','164px' => '164px','165px' => '165px','166px' => '166px','167px' => '167px','168px' => '168px','169px' => '169px','170px' => '170px','171px' => '171px','172px' => '172px','173px' => '173px','174px' => '174px','175px' => '175px','176px' => '176px','177px' => '177px','178px' => '178px','179px' => '179px','180px' => '180px','181px' => '181px','182px' => '182px','183px' => '183px','184px' => '184px','185px' => '185px','186px' => '186px','187px' => '187px','188px' => '188px','189px' => '189px','190px' => '190px','191px' => '191px','192px' => '192px','193px' => '193px','194px' => '194px','195px' => '195px','196px' => '196px','197px' => '197px','198px' => '198px','199px' => '199px','200px' => '200px','201px' => '201px','202px' => '202px','203px' => '203px','204px' => '204px','205px' => '205px','206px' => '206px','207px' => '207px','208px' => '208px','209px' => '209px','210px' => '210px','211px' => '211px','212px' => '212px','213px' => '213px','214px' => '214px','215px' => '215px','216px' => '216px','217px' => '217px','218px' => '218px','219px' => '219px','220px' => '220px','221px' => '221px','222px' => '222px','223px' => '223px','224px' => '224px','225px' => '225px','226px' => '226px','227px' => '227px','228px' => '228px','229px' => '229px','230px' => '230px','231px' => '231px','232px' => '232px','233px' => '233px','234px' => '234px','235px' => '235px','236px' => '236px','237px' => '237px','238px' => '238px','239px' => '239px','240px' => '240px','241px' => '241px','242px' => '242px','243px' => '243px','244px' => '244px','245px' => '245px','246px' => '246px','247px' => '247px','248px' => '248px','249px' => '249px','250px' => '250px');

        $default_colors = array('color_site_title' => '#6a6a6a', 'color_site_desc' => '#6a6a6a', 'color_blog_p_title' => '#444444', 'color_blog_p_meta' => '#000000', 'color_blog_p_content' => '#000000',  'color_bg_readmore' => '#ec6a00', 'color_readmore' => '#FFFFFF', 'color_p_title' => '#000000', 'color_p_meta' => '#000000', 'color_p_content' => '#000000', 'color_p_link' => '#0000ff', 'color_p_link_v' => '#5757ff', 'color_p_link_h' => '#0000a8');
        $site_uri = get_site_url();
        $images_uri = trailingslashit(get_template_directory_uri()) . 'assets/global/images/'; //Uses parent theme directory URI

	$options = array();
        
        $options[] = array(
            'name' => __('Basic Settings', 'corpus'),
            'type' => 'heading');
        
        $options[] = array(
            'name' => __('Select Skin', 'corpus'),
            'desc' => __('Change the skin to modify theme colors.', 'corpus'),
            'id' => 'skin',
            'std' => 'orangered',
            'type' => 'select',
            'options' => array(
                //'white' => __('Classic White', 'corpus'),
                //'blue' => __('Professional Blue', 'corpus'),
                //'sandal' => __('Elegant Sandal', 'corpus'),
                //'green' => __('Natural Green', 'corpus'),
                //'olive' => __('Pretty Olive', 'corpus'),
                //'navy' => __('Handsome Navy', 'corpus'),
                'cadetblue' => __('Cadet Blue', 'corpus'),
                'orangered' => __('Orange Red', 'corpus'),
                'lightseagreen' => __('Light Sea Green', 'corpus'),
                'palevioletred' => __('Pale Violet Red', 'corpus'),
                )
        );

        $options[] = array(
            'name' => __('Layout Mode', 'corpus'),
            'desc' => __('Change the layout mode of your theme between boxed mode or full-width mode.', 'corpus'),
            'id' => 'viewport',
            'std' => 'theme-boxed',
            'type' => 'select',
            'options' => array(
                'theme-stretched' => __('Stretched Mode', 'corpus'),
                'theme-boxed' => __('Boxed Mode', 'corpus'))
        );
        
        $options[] = array(
            'name' => __('Logo Image:', 'corpus'),
            'desc' => 'Here you can upload the logo of your site.',
            'std' => '',
            'id' => 'logo_img',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Favicon Image:', 'corpus'),
            'desc' => 'Favicon Image of your site. See reference <a href="http://webdesign.about.com/od/favicon/f/blfaqfavicon1.htm" target="_blank">What is a Favicon?</a> & <a href="http://webdesign.about.com/od/favicon/f/blfaqfavicon2.htm" target="_blank">Where are Favicons displayed?</a>',
            'std' => '',
            'id' => 'favicon',
            'type' => 'upload');
        
        $options[] = array(
            'name' => __('Organization Name:', 'corpus'),
            'desc' => __('This will be shown in the Theme\'s footer.', 'corpus'),
            'id' => 'footer_name',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Footer Alternate Text:', 'corpus'),
            'desc' => __('This will be footer text instead of default one.', 'corpus'),
            'id' => 'footer_alt_text',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Footer Copyright Text:', 'corpus'),
            'desc' => __('Check this to show the Copyright information in the Theme\'s footer', 'corpus'),
            'id' => 'show_footer_copyright',
            'std' => '1',
            'type' => 'checkbox');
        
        $options[] = array(
            'name' => __('Footer Attribution Text:', 'corpus'),
            'desc' => __('Check this to show the Attribution information in the Theme\'s footer', 'corpus'),
            'id' => 'show_footer_attribution',
            'std' => '1',
            'type' => 'checkbox');

        /* Homepage Builder (starts) */
        $options[] = array(
            'name' => __('Homepage Builder', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Homepage Sections:', 'corpus'),
            'desc' => __('Select sections to be shown on Homepage.', 'corpus'),
            'id' => 'homepage_content_sections',
            'std' => array(
                'featured' => 1,
                'headboxes' => 1,
                'about' => 1,
                'services' => 1,
                'projects' => 1,
                'testimonials' => 1,
                'quote' => 1,
                'blog' => 1,
                ),
            'type' => 'multicheck',
            'options' => array(
                'featured' => 'Featured Section',
                'headboxes' => 'Headboxes Section',
                'about' => 'About us Section',
                'services' => 'Services Section',
                'projects' => 'Projects Section',
                'testimonials' => 'Testimonials Section',
                'quote' => 'Quote Section',
                'blog' => 'Blog',
            ));
        
        $options[] = array(
            'name' => __('Homepage Priority:', 'corpus'),
            'desc' => __('Sort the content sections as per their priority. (drag n drop) <br />Currently only for homepage. Others coming soon...', 'corpus'),
            'id' => 'homepage_priority',
            'std' => 'featured,headboxes,about,services,projects,testimonials,quote,blog', // Don't give whitespace after comma
            'type' => 'sortable',
            'options' => array(
                'featured' => 'Featured Section',
                'headboxes' => 'Headboxes Section',
                'about' => 'About us Section',
                'services' => 'Services Section',
                'projects' => 'Projects Section',
                'testimonials' => 'Testimonials Section',
                'quote' => 'Quote Section',
                'blog' => 'Blog',
            ));
        
        $options[] = array(
            'name' => __('Blog Sections:', 'corpus'),
            'desc' => __('Select sections to be shown on Blog page.', 'corpus'),
            'id' => 'blog_content_sections',
            'std' => array(
                'featured' => 1,
                'headboxes' => 1,
                'about' => 0,
                'services' => 0,
                'projects' => 0,
                'testimonials' => 0,
                'quote' => 0,
                ),
            'type' => 'multicheck',
            'options' => array(
                'featured' => 'Featured Section',
                'headboxes' => 'Headboxes Section',
                'about' => 'About us Section',
                'services' => 'Services Section',
                'projects' => 'Projects Section',
                'testimonials' => 'Testimonials Section',
                'quote' => 'Quote Section',
            ));
        
        /* Homepage Builder (ends) */
        
        /* Theme layout (starts) */

        $options[] = array(
            'name' => __('Theme Layout', 'corpus'),
            'type' => 'heading');
        
        $options[] = array(
            'name' => 'Site Layout',
            'desc' => 'Select sidebar type.',
            'id' => 'site_layout',
            'std' => 'right_sidebar',
            'type' => 'images',
            'options' => array(
                'right_sidebar' => CORPUS_ADMIN_IMAGES_URL . 'content-left.png',
                'left_sidebar' => CORPUS_ADMIN_IMAGES_URL . 'content-right.png',
                'no_sidebar' => CORPUS_ADMIN_IMAGES_URL . 'only-content.png')
        );
        
        $options[] = array(
            'name' => 'Blog Layout',
            'desc' => 'Choose layout for the blog.',
            'id' => 'blog_layout',
            'std' => 'blog_grid',
            'type' => 'images',
            'options' => array(
                'blog_grid' => CORPUS_ADMIN_IMAGES_URL . 'blog-grid-layout.png',
                'blog_simple' => CORPUS_ADMIN_IMAGES_URL . 'blog-simple-layout.png',
                )
        );
        /*
        $options[] = array(
            'name' => __('Primary Sidebar (Size):', 'corpus'),
            'desc' => __('Change the width of the Primary sidebar.(Best Practise: Keep it less than 50%)', 'corpus'),
            'id' => 'pri_sidebar_width',
            'std' => '32',
            'type' => 'select',
            'options' => $one_to_hundred_pct);
        */
        /*
        $options[] = array(
            'name' => __('Copyright Type:', 'corpus'),
            'desc' => __('Changes the type of copyright information shown in Footer.', 'corpus'),
            'id' => 'cr_type',
            'std' => 'default',
            'type' => 'select',
            'options' => array(
                'default' => 'Default Copyright',
                'custom' => 'Custom Copyright',
            ));

        $options[] = array(
            'name' => __('Custom Copyright:', 'corpus'),
            'desc' => __('If you have selected Custom Copyright then type your text here.', 'corpus'),
            'id' => 'custom_cr',
            'std' => 'Custom Copyright Text',
            'type' => 'text');
         * 
         */

        $options[] = array(
            'name' => __('Hide Header:', 'corpus'),
            'desc' => __('Checking this will hide Theme\'s Header.', 'corpus'),
            'id' => 'disable_header',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Site Description:', 'corpus'),
            'desc' => __('Checking this will hide site description from the header.', 'corpus'),
            'id' => 'disable_site_desc',
            'std' => '1',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Footer:', 'corpus'),
            'desc' => __('Checking this will hide Theme\'s Footer.', 'corpus'),
            'id' => 'disable_footer',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Primary Menu:', 'corpus'),
            'desc' => __('Checking this will hide Primary Menu.', 'corpus'),
            'id' => 'disable_menu_pri',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Disable Full Posts:<br />(Blog)', 'corpus'),
            'desc' => __('Check this to show post excerpts rather than full posts on Homepage and other Archive pages. Note: This doesn\'t work with grid layouts', 'corpus'),
            'id' => 'disable_full_posts',
            'std' => '1',
            'type' => 'checkbox');
        /*
        $options[] = array(
            'name' => __('Float Thumbnail:<br />(Blog)', 'corpus'),
            'desc' => __('You can float your thumbnail to either right or left on the blog page.', 'corpus'),
            'id' => 'float_thumb',
            'std' => 'thumbnail-left',
            'type' => 'select',
            'options' => array('thumbnail-left' => 'left', 'thumbnail-right' => 'right'));

        $options[] = array(
            'name' => __('Hide Thumbnail:<br />(Blog)', 'corpus'),
            'desc' => __('Checking this will hide post thumbnail from the blog page.', 'corpus'),
            'id' => 'disable_thumb',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Stylish Date:<br />(Blog)', 'corpus'),
            'desc' => __('Checking this will hide the stylish date from the blog page.', 'corpus'),
            'id' => 'disable_style_date',
            'std' => '0',
            'type' => 'checkbox');
         * 
         */

        $options[] = array(
            'name' => __('Hide Post meta:<br />(Blog)', 'corpus'),
            'desc' => __('Checking this will hide post meta information from the blog. Post meta is the information about a post, visible below the title.', 'corpus'),
            'id' => 'disable_blog_p_meta',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Post meta comments:<br />(Blog):', 'corpus'),
            'desc' => __('Checking this will hide comments information from the post meta on blog page.', 'corpus'),
            'id' => 'disable_blog_p_meta_comments',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Read more button:<br />(Blog)', 'corpus'),
            'desc' => __('Checking this will hide read more button below posts.', 'corpus'),
            'id' => 'disable_readmore',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Bottom Navigation:<br />(Blog)', 'corpus'),
            'desc' => __('Checking this will hide navigation links provided below all posts on the blog page.', 'corpus'),
            'id' => 'disable_blog_nav',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Breadcrumbs:', 'corpus'),
            'desc' => __('Checking this will hide breadcrumbs from your site.', 'corpus'),
            'id' => 'disable_bc',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Meta:<br />(Single Post)', 'corpus'),
            'desc' => __('Checking this will hide post meta information from single posts.', 'corpus'),
            'id' => 'disable_post_meta',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Hide Sidebar:<br />(Single Post)', 'corpus'),
            'desc' => __('Checking this will hide primary sidebar from the single posts.', 'corpus'),
            'id' => 'disable_post_sidebar',
            'std' => '0',
            'type' => 'checkbox');
        /*
        $options[] = array(
            'name' => __('Hide Authorbox:<br />(Single Post)', 'corpus'),
            'desc' => __('Checking this will hide authorbox from single posts.', 'corpus'),
            'id' => 'disable_post_ab',
            'std' => '1',
            'type' => 'checkbox');
         * 
         */

        $options[] = array(
            'name' => __('Hide Sidebar:<br />(Page)', 'corpus'),
            'desc' => __('Checking this will hide primary sidebar from pages.', 'corpus'),
            'id' => 'disable_page_sidebar',
            'std' => '0',
            'type' => 'checkbox');

        /* Theme layout (ends) */

        /* Featured Section (starts) */
		
        $options[] = array(
            'name' => __('Featured Section', 'corpus'),
            'type' => 'heading');

        /*
        $options[] = array(
            'name' => __('Featured Section <br />(top padding)', 'corpus'),
            'desc' => __('The size of white space above this section.', 'corpus'),
            'id' => 'featured_padding_top',
            'std' => '0px',
            'type' => 'select',
            'options' => $zero_to_250_px,
            );

        $options[] = array(
            'name' => __('Featured Section <br />(bottom padding)', 'corpus'),
            'desc' => __('The size of white space below this section.', 'corpus'),
            'id' => 'featured_padding_bottom',
            'std' => '0px',
            'type' => 'select',
            'options' => $zero_to_250_px,
            );
         * 
         */

        $options[] = array(
            'name' => __('Title (Slide #1):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_1',
            'std' => __('Elegant and Stylish Theme', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #1):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_1',
            'std' => __('Beautiful and Attractive Layout with Theme Options to configure settings easily.', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #1):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_1',
            'std' => __('See Documentation','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #1):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_1',
            'std' => CORPUS_DOCS_URL,
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #1):', 'corpus'),
            'desc' => '',
            'std' => $images_uri . 'cone.jpg',
            'id' => 'featured_slide_img_1',
            'type' => 'upload');


        $options[] = array(
            'name' => __('Title (Slide #2):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_2',
            'std' => __('Elegant and Stylish Theme','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #2):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_2',
            'std' => __('Beautiful and Attractive Layout with Theme Options to configure settings easily.', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #2):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_2',
            'std' => __('See Documentation', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #2):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_2',
            'std' => CORPUS_DOCS_URL,
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #2:)', 'corpus'),
            'desc' => '',
            'std' => $images_uri . 'hot-air-balloon.jpg',
            'id' => 'featured_slide_img_2',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #3):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_3',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #3):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_3',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #3):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_3',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #3):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_3',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #3:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_3',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #4):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_4',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #4):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_4',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #4):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_4',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #4):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_4',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #4:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_4',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #5):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_5',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #5):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_5',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #5):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_5',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #5):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_5',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #5:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_5',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #6):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_6',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #6):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_6',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #6):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_6',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #6):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_6',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #6:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_6',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #7):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_7',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #7):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_7',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #7):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_7',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #7):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_7',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #7:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_7',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #8):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_8',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #8):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_8',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #8):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_8',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #8):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_8',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #8:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_8',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #9):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_9',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #9):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_9',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #9):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_9',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #9):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_9',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #9:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_9',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title (Slide #10):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_head_10',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Description (Slide #10):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_text_10',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button (Slide #10):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_10',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL (Slide #10):', 'corpus'),
            'desc' => '',
            'id' => 'featured_slide_button_url_10',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Image (Slide #10:)', 'corpus'),
            'desc' => '',
            'std' => '',
            'id' => 'featured_slide_img_10',
            'type' => 'upload');

        /* Featured Section (ends) */

        /* Slideshow setting (starts)*/
        $options[] = array(
            'name' => __('Slideshow Settings', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Slideshow Speed', 'corpus'),
            'desc' => __('Speed of slideshow', 'corpus'),
            'id' => 'slide_speed',
            'std' => '5000',
            'type' => 'select',
            'options' => $num_by_hundred);

        $options[] = array(
            'name' => __('Slideshow Animation Speed', 'corpus'),
            'desc' => __('Speed of slideshow animation', 'corpus'),
            'id' => 'slide_ani_speed',
            'std' => '700',
            'type' => 'select',
            'options' => $num_by_hundred);

        $options[] = array(
            'name' => __('Hide Navigation:', 'corpus'),
            'desc' => __('Hide left and right navigation', 'corpus'),
            'id' => 'disable_slide_nav',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Smooth Height:', 'corpus'),
            'desc' => __('Disable Smooth Height.', 'corpus'),
            'id' => 'disable_smooth_height',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Animation Type', 'corpus'),
            'desc' => __('Slideshow animation type.', 'corpus'),
            'id' => 'slide_animation_type',
            'std' => 'fade',
            'type' => 'select',
            'options' => array('fade' => 'fade', 'slide' => 'slide'));

        /*
        $options[] = array(
            'name' => __('Slideshow Direction', 'corpus'),
            'desc' => __('Slideshow Direction.', 'corpus'),
            'id' => 'slide_dir',
            'std' => 'horizontal',
            'type' => 'select',
            'options' => array('horizontal' => 'horizontal', 'vertical' => 'vertical'));
         * 
         */

        /* Slideshow setting (ends)*/

        /* Head Box setting (starts) */

        $options[] = array(
            'name' => __('Headbox Section', 'corpus'),
            'type' => 'heading');
		
		// Start of headbox 1
		$options[] = array(
            'name' => __('Head box #1 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_img_1',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Head box #1 (Title):', 'corpus'),
            'desc' => __('The title of head box #1.', 'corpus'),
            'id' => 'head_box_title_1',
            'std' => __('Headbox #1 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #1 (Content):', 'corpus'),
            'desc' => __('The content of head box #1.', 'corpus'),
            'id' => 'head_box_content_1',
            'std' => __('A simple and nice description about this Headbox.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #1 (Button Enabled):', 'corpus'),
            'desc' => __('Checking this will show button for this column.', 'corpus'),
            'id' => 'head_box_button_enabled_1',
            'std' => '1',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Head box #1 (Button Text):', 'corpus'),
            'desc' => __('The text of button that appears below the box. (Remove all text to hide the Button)', 'corpus'),
            'id' => 'head_box_button_text_1',
            'std' => __('Read more','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Head box #1 (Button URL):', 'corpus'),
            'desc' => __('The link of button that appears below the box.', 'corpus'),
            'id' => 'head_box_button_url_1',
            'std' => $site_uri,
            'type' => 'text');

        // Start of headbox 2
		$options[] = array(
            'name' => __('Head box #2 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_img_2',
            'std' => '',
            'type' => 'upload');
			
		$options[] = array(
            'name' => __('Head box #2 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_title_2',
            'std' => __('Headbox #2 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #2 (Content):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_content_2',
            'std' => __('A simple and nice description about this Headbox.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #2 (Button Enabled):', 'corpus'),
            'desc' => __('Checking this will show button for this column.', 'corpus'),
            'id' => 'head_box_button_enabled_2',
            'std' => '1',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Head box #2 (Button Text):', 'corpus'),
            'desc' => __('The text of button that appears below the box. (Remove all text to hide the Button)', 'corpus'),
            'id' => 'head_box_button_text_2',
            'std' => __('Read more','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Head box #2 (Button URL):', 'corpus'),
            'desc' => __('The link of button that appears below the box.', 'corpus'),
            'id' => 'head_box_button_url_2',
            'std' => $site_uri,
            'type' => 'text');

        // Start of headbox 3
		$options[] = array(
            'name' => __('Head box #3 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_img_3',
            'std' => '',
            'type' => 'upload');
			
		$options[] = array(
            'name' => __('Head box #3 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_title_3',
            'std' => __('Headbox #3 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #3 (Content):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_content_3',
            'std' => __('A simple and nice description about this Headbox.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #3 (Button Enabled):', 'corpus'),
            'desc' => __('Checking this will show button for this column.', 'corpus'),
            'id' => 'head_box_button_enabled_3',
            'std' => '1',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Head box #3 (Button Text):', 'corpus'),
            'desc' => __('The text of button that appears below the box. (Remove all text to hide the Button)', 'corpus'),
            'id' => 'head_box_button_text_3',
            'std' => __('Read more','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Head box #3 (Button URL):', 'corpus'),
            'desc' => __('The link of button that appears below the box.', 'corpus'),
            'id' => 'head_box_button_url_3',
            'std' => $site_uri,
            'type' => 'text');

        // Start of headbox 4
		$options[] = array(
            'name' => __('Head box #4 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_img_4',
            'std' => '',
            'type' => 'upload');
		
		$options[] = array(
            'name' => __('Head box #4 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_title_4',
            'std' => __('Headbox #4 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #4 (Content):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_content_4',
            'std' => __('A simple and nice description about this Headbox.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #4 (Button Enabled):', 'corpus'),
            'desc' => __('Checking this will show button for this column.', 'corpus'),
            'id' => 'head_box_button_enabled_4',
            'std' => '1',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Head box #4 (Button Text):', 'corpus'),
            'desc' => __('The text of button that appears below the box. (Remove all text to hide the Button)', 'corpus'),
            'id' => 'head_box_button_text_4',
            'std' => __('Read more','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Head box #4 (Button URL):', 'corpus'),
            'desc' => __('The link of button that appears below the box.', 'corpus'),
            'id' => 'head_box_button_url_4',
            'std' => $site_uri,
            'type' => 'text');
			
		// Start of headbox 5
		$options[] = array(
            'name' => __('Head box #5 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_img_5',
            'std' => '',
            'type' => 'upload');
		
		$options[] = array(
            'name' => __('Head box #5 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_title_5',
            'std' => __('Headbox #5 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #5 (Content):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_content_5',
            'std' => __('A simple and nice description about this Headbox.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #5 (Button Enabled):', 'corpus'),
            'desc' => __('Checking this will show button for this column.', 'corpus'),
            'id' => 'head_box_button_enabled_5',
            'std' => '1',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Head box #5 (Button Text):', 'corpus'),
            'desc' => __('The text of button that appears below the box. (Remove all text to hide the Button)', 'corpus'),
            'id' => 'head_box_button_text_5',
            'std' => __('Read more','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Head box #5 (Button URL):', 'corpus'),
            'desc' => __('The link of button that appears below the box.', 'corpus'),
            'id' => 'head_box_button_url_5',
            'std' => $site_uri,
            'type' => 'text');
			
		// Start of headbox 6
		$options[] = array(
            'name' => __('Head box #6 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_img_6',
            'std' => '',
            'type' => 'upload');
		
		$options[] = array(
            'name' => __('Head box #6 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_title_6',
            'std' => __('Headbox #6 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #6 (Content):', 'corpus'),
            'desc' => '',
            'id' => 'head_box_content_6',
            'std' => __('A simple and nice description about this Headbox.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Head box #6 (Button Enabled):', 'corpus'),
            'desc' => __('Checking this will show button for this column.', 'corpus'),
            'id' => 'head_box_button_enabled_6',
            'std' => '1',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Head box #6 (Button Text):', 'corpus'),
            'desc' => __('The text of button that appears below the box. (Remove all text to hide the Button)', 'corpus'),
            'id' => 'head_box_button_text_6',
            'std' => __('Read more','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Head box #6 (Button URL):', 'corpus'),
            'desc' => __('The link of button that appears below the box.', 'corpus'),
            'id' => 'head_box_button_url_6',
            'std' => $site_uri,
            'type' => 'text');

	/* Head box setting (ends) */

        /* Header Settings (starts) */
/*        
        $options[] = array(
            'name' => __('Header Settings', 'corpus'),
            'type' => 'heading');
*/        
/*
        $options[] = array(
            'name' => __('Site Title Size:', 'corpus'),
            'desc' => __('Change the font size of site title.', 'corpus'),
            'id' => 'fsize_site_title',
            'std' => '36px',
            'type' => 'select',
            'options' => $one_to_hundred_px);

        $options[] = array(
            'name' => __('Site Description Size:', 'corpus'),
            'desc' => __('Chane the font size of site description.', 'corpus'),
            'id' => 'fsize_site_desc',
            'std' => '12px',
            'type' => 'select',
            'options' => $one_to_hundred_px);
*/

        /* Header Settings (ends) */

        /* About us Section(starts) */
        $options[] = array(
            'name' => __('About us Section', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Background Image:', 'corpus'),
            'desc' => '',
            'id' => 'abus_bg_image',
            'std' => $images_uri . 'mountain.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Title:', 'corpus'),
            'desc' => __('The Title for About us section.', 'corpus'),
            'id' => 'abus_title',
            'std' => 'About us',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Content:', 'corpus'),
            'desc' => __('The Content for About us section.', 'corpus'),
            'id' => 'abus_content',
            'std' => __('This is all about me!','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Button Text:', 'corpus'),
            'desc' => __('The text of button.', 'corpus'),
            'id' => 'abus_button_text',
            'std' => __('Read more','corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Button URL:', 'corpus'),
            'desc' => __('The URL of button.', 'corpus'),
            'id' => 'abus_button_url',
            'std' => $site_uri,
            'type' => 'text');

        /* About us Section (ends) */

        /* Service Section (starts) */

        $options[] = array(
            'name' => __('Service Section', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Headline Text:', 'corpus'),
            'desc' => __('The headline for service section (appears at the top).', 'corpus'),
            'id' => 'ss_headline',
            'std' => __('Service Section', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Headline Description:', 'corpus'),
            'desc' => __('The Description for service section (appears at the top).', 'corpus'),
            'id' => 'ss_desc',
            'std' => __('Use Theme Options to modify this section or see Documentation.', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Service Columns #1 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'ss_img_1',
            'std' => $images_uri . 'axe.jpg',
            'type' => 'upload');

    $options[] = array(
            'name' => __('Service Columns #1 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'ss_title_1',
            'std' => __('Service #1 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Service Column #1 (Description):', 'corpus'),
            'desc' => '',
            'id' => 'ss_content_1',
            'std' => __('A description about this service.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Service Columns #2 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'ss_img_2',
            'std' => $images_uri . 'thuya.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Service Columns #2 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'ss_title_2',
            'std' => __('Service #2 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Service Column #2 (Description):', 'corpus'),
            'desc' => '',
            'id' => 'ss_content_2',
            'std' => __('A description about this service.','corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Service Columns #3 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'ss_img_3',
            'std' => $images_uri . 'cracker.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Service Columns #3 (Title):', 'corpus'),
            'desc' => '',
            'id' => 'ss_title_3',
            'std' => __('Service #3 (Title)', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Service Column #3 (Description):', 'corpus'),
            'desc' => '',
            'id' => 'ss_content_3',
            'std' => __('A description about this service.','corpus'),
            'type' => 'textarea');

        /* Service Section (ends) */

        /* Features Section (starts) */

        /*
        $options[] = array(
            'name' => __('Features Section', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Enable Features Section:', 'corpus'),
            'desc' => __('Checking this will show Features Section.', 'corpus'),
            'id' => 'enable_features_section',
            'std' => '1',
            'type' => 'checkbox');
        
        $options[] = array(
            'name' => __('Headline Text:', 'corpus'),
            'desc' => __('The headline for features section (appears at the top).', 'corpus'),
            'id' => 'features_headline',
            'std' => __('Features Section', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Headline Description:', 'corpus'),
            'desc' => __('The Description for features section (appears at the top).', 'corpus'),
            'id' => 'features_desc',
            'std' => __('Use Theme Options to modify this section or see Documentation.', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Feature Columns #1 (Title):', 'corpus'),
            'desc' => 'The title for this feature.',
            'id' => 'feature_title_1',
            'std' => 'Nullam at ligula',
            'type' => 'text');

        $options[] = array(
            'name' => __('Feature Column #1 (Description):', 'corpus'),
            'desc' => 'The description of this feature.',
            'id' => 'feature_content_1',
            'std' => 'Felis non dui efficitur suscipit. Nulla gravida dolor quis tellus mattis, vel viverra risus tincidunt.',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Feature Column #1 (Icon)', 'corpus'),
            'desc' => __('The icon of this feature', 'corpus'),
            'id' => 'feature_icon_1',
            'std' => 'download',
            'type' => 'radioicons',
            'options' => $icons);

        $options[] = array(
            'name' => __('Feature Button #1 (Text):', 'corpus'),
            'desc' => 'The button\'s text for this feature',
            'id' => 'feature_button_text_1',
            'std' => 'Learn more',
            'type' => 'text');

        $options[] = array(
            'name' => __('Feature Button #1 (URL):', 'corpus'),
            'desc' => 'The button\'s URL for this feature.',
            'id' => 'feature_button_url_1',
            'std' => $site_uri,
            'type' => 'text');
         * 
         */

        /* Features Section (ends) */

        /* Projects Section (starts) */

        $options[] = array(
            'name' => __('Project Section', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Project Section (Headline):', 'corpus'),
            'desc' => __('The headline of the project section.','corpus'),
            'id' => 'project_headline',
            'std' => 'Projects Section',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project Section (Description):', 'corpus'),
            'desc' => __('The description of the project section.','corpus'),
            'id' => 'project_desc',
            'std' => 'Use Theme Options to modify this section or see Documentation.',
            'type' => 'text');

        $options[] = array(
            'name' => __('Hide Brackets:', 'corpus'),
            'desc' => __('Checking this will hide { brackets } from heading.', 'corpus'),
            'id' => 'project_disable_brackets',
            'std' => '0',
            'type' => 'checkbox');

        $options[] = array(
            'name' => __('Project #1 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_1',
            'std' => $images_uri . 'axe.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #1 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_1',
            'std' => 'Project 1',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #1 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_1',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #1 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_1',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #1 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_1',
            'std' => $site_uri,
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #2 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_2',
            'std' => $images_uri . 'thuya.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #2 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_2',
            'std' => 'Project 2',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #2 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_2',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #2 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_2',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #2 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_2',
            'std' => $site_uri,
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #3 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_3',
            'std' => $images_uri . 'cracker.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #3 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_3',
            'std' => 'Project 3',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #3 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_3',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #3 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_3',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #3 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_3',
            'std' => $site_uri,
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #4 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_4',
            'std' => $images_uri . 'axe.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #4 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_4',
            'std' => 'Project 4',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #4 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_4',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #4 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_4',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #4 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_4',
            'std' => $site_uri,
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #5 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_5',
            'std' => $images_uri . 'thuya.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #5 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_5',
            'std' => 'Project 5',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #5 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_5',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #5 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_5',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #5 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_5',
            'std' => $site_uri,
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #6 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_6',
            'std' => $images_uri . 'cracker.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #6 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_6',
            'std' => 'Project 6',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #6 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_6',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #6 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_6',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #6 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_6',
            'std' => $site_uri,
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #7 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_7',
            'std' => $images_uri . 'axe.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #7 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_7',
            'std' => 'Project 7',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #7 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_7',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #7 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_7',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #7 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_7',
            'std' => $site_uri,
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #8 (Image):', 'corpus'),
            'desc' => '',
            'id' => 'project_img_8',
            'std' => $images_uri . 'thuya.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Project #8 (Title):', 'corpus'),
            'desc' => __('The title of the project','corpus'),
            'id' => 'project_title_8',
            'std' => 'Project 8',
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #8 (Content):', 'corpus'),
            'desc' => __('The description of the project', 'corpus'),
            'id' => 'project_desc_8',
            'std' => 'Something about project',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Project #8 (Link Text):', 'corpus'),
            'desc' => __('The text of the project link (e.g. Learn more..)','corpus'),
            'id' => 'project_link_text_8',
            'std' => __('Learn more..', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Project #8 (Link URL):', 'corpus'),
            'desc' => __('The URL of the project link (e.g. http://www.mudthemes.com)','corpus'),
            'id' => 'project_link_url_8',
            'std' => $site_uri,
            'type' => 'text');

        /* Project Section (ends) */

        /* Testimonial Section (starts) */
        $options[] = array(
            'name' => __('Testimonials', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Testimonials (Headline):', 'corpus'),
            'desc' => __('Testimonial Section Headline','corpus'),
            'id' => 'testimonials_headline',
            'std' => 'Testimonial Section',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonials (Description):', 'corpus'),
            'desc' => __('Testimonial Section Description','corpus'),
            'id' => 'testimonials_desc',
            'std' => 'Use Theme Options to modify this section or see Documentation.',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #1 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_1',
            'std' => $images_uri . 'goat.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #1 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_1',
            'std' => 'Client Name',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #1 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_1',
            'std' => 'Web Developer',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #1 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_1',
            'std' => __('This is a great site. I love it!', 'corpus'),
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #2 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_2',
            'std' => $images_uri . 'goat.jpg',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #2 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_2',
            'std' => 'Client Name',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #2 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_2',
            'std' => 'Technical Writer',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #2 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_2',
            'std' => 'Another Testimonial, AWESOME!',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #3 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_3',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #3 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_3',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #3 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_3',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #3 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_3',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #4 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_4',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #4 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_4',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #4 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_4',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #4 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_4',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #5 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_5',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #5 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_5',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #5 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_5',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #5 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_5',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #6 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_6',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #6 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_6',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #6 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_6',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #6 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_6',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #7 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_7',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #7 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_7',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #7 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_7',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #7 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_7',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #8 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_8',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #8 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_8',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #8 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_8',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #8 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_8',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #9 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_9',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #9 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_9',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #9 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_9',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #9 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_9',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'name' => __('Testimonial #10 (Client Image):', 'corpus'),
            'desc' => '',
            'id' => 'testimonial_client_img_10',
            'std' => '',
            'type' => 'upload');

        $options[] = array(
            'name' => __('Testimonial #10 (Client Name):', 'corpus'),
            'desc' => __('The name of the client.','corpus'),
            'id' => 'testimonial_client_name_10',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #10 (Client Identity):', 'corpus'),
            'desc' => __('The identity of the client like "Web Designer" or "New York".','corpus'),
            'id' => 'testimonial_client_identity_10',
            'std' => '',
            'type' => 'text');

        $options[] = array(
            'name' => __('Testimonial #10 (Client Says):', 'corpus'),
            'desc' => __('The testimonial itself.','corpus'),
            'id' => 'testimonial_client_says_10',
            'std' => '',
            'type' => 'textarea');

        /* Testimonial Section (ends) */
        
        /* Quote Section (starts) */

        $options[] = array(
            'name' => __('Quote Section', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Quote Title:', 'corpus'),
            'desc' => __('The text that appears as title in the quote section.','corpus'),
            'id' => 'quote_title',
            'std' => __('Write a beautiful title', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Quote Description:', 'corpus'),
            'desc' => __('The text that appears as description in the quote section.','corpus'),
            'id' => 'quote_desc',
            'std' => __('A nice description', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Quote Button (Text):', 'corpus'),
            'desc' => __('The text on the quote button.','corpus'),
            'id' => 'quote_button_text',
            'std' => __('Contact us', 'corpus'),
            'type' => 'text');

        $options[] = array(
            'name' => __('Quote Button (URL):', 'corpus'),
            'desc' => __('The URL (link) of the quote button. (This must be the URL of your contact page.)','corpus'),
            'id' => 'quote_button_url',
            'std' => $site_uri,
            'type' => 'text');

        /* Quote Section (ends) */

        /* Typography (starts) */
        $options[] = array(
            'name' => __('Font Settings', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Primary Font:', 'corpus'),
            'desc' => __('This will be the primary font of the theme.', 'corpus'),
            'id' => 'font_primary',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );

        $options[] = array(
            'name' => __('Secondary Font:', 'corpus'),
            'desc' => __('This will be the secondary font of the theme.', 'corpus'),
            'id' => 'font_secondary',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );

        $options[] = array(
            'name' => __('Site Title Font:', 'corpus'),
            'desc' => __('This font applies to the site title text.', 'corpus'),
            'id' => 'font_site_title',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );

        $options[] = array(
            'name' => __('Menu Font:', 'corpus'),
            'desc' => __('This font applies to the Primary menu.', 'corpus'),
            'id' => 'font_menu',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );

        $options[] = array(
            'name' => __('Footer Font:', 'corpus'),
            'desc' => __('This font applies to footer of the site.', 'corpus'),
            'id' => 'font_footer',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );

        /*
        $options[] = array(
            'name' => __('Site Description Font:', 'corpus'),
            'desc' => __('This font applies to the site description text.', 'corpus'),
            'id' => 'font_site_desc',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
         * */

        /*
        $options[] = array(
            'name' => __('Post Title Font:<br />(Blog)', 'corpus'),
            'desc' => __('This font applies to the Post title only on blog page.', 'corpus'),
            'id' => 'font_blog_p_title',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Post Meta Font:<br />(Blog)', 'corpus'),
            'desc' => __('This font applies to the Post meta only on blog page. (means: information about date/comments/author etc.)', 'corpus'),
            'id' => 'font_blog_p_meta',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Post Content Font:<br />(Blog)', 'corpus'),
            'desc' => __('This font applies to the Post content only on blog page.', 'corpus'),
            'id' => 'font_blog_p_content',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Read more button Font:<br />(Blog)', 'corpus'),
            'desc' => __('This font applies to the read more button only on blog page.', 'corpus'),
            'id' => 'font_readmore',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Breadcrumbs Font:', 'corpus'),
            'desc' => __('This font applies to breadcrumbs only.', 'corpus'),
            'id' => 'font_bc',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Post Title Font:<br />(Post/Page)', 'corpus'),
            'desc' => __('This font applies to the Post title only on post/page.', 'corpus'),
            'id' => 'font_p_title',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Post Meta Font:<br />(Single Post)', 'corpus'),
            'desc' => __('This font applies to the Post meta only on single posts. (means: information about date/comments/author etc.)', 'corpus'),
            'id' => 'font_p_meta',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Post Content Font:<br />(Post/Page)', 'corpus'),
            'desc' => __('This font applies to the Post content only on post/page.', 'corpus'),
            'id' => 'font_p_content',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Widget Title Font:<br />(Primary Sidebar)', 'corpus'),
            'desc' => __('This font applies to widget title of the Primary sidebar.', 'corpus'),
            'id' => 'font_sidebar_p_title',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Widget Body Font:<br />(Primary Sidebar)', 'corpus'),
            'desc' => __('This font applies to widget body of the Primary sidebar.', 'corpus'),
            'id' => 'font_sidebar_p_body',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Widget Title Font:<br />(Footerbox)', 'corpus'),
            'desc' => __('This font applies to widget title of the footerbox.', 'corpus'),
            'id' => 'font_sidebar_f_title',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        
        $options[] = array(
            'name' => __('Widget Body Font:<br />(Footerbox)', 'corpus'),
            'desc' => __('This font applies to widget body of the footerbox.', 'corpus'),
            'id' => 'font_sidebar_f_body',
            'std' => 'roboto',
            'type' => 'select',
            'options' => $fonts,
        );
        */

        /* Typography (ends) */

        /* Color options (starts) */

        $options[] = array(
            'name' => __('Color Options', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'name' => __('Site Title Color:', 'corpus'),
            'desc' => __('Changes the color of the site title.', 'corpus'),
            'id' => 'color_site_title',
            'std' => $default_colors['color_site_title'],
            'type' => 'color');

	$options[] = array(
            'name' => __('Site Description Color:', 'corpus'),
            'desc' => __('Changes the color of site description.', 'corpus'),
            'id' => 'color_site_desc',
            'std' => $default_colors['color_site_desc'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Post Title Color:<br />(blog)', 'corpus'),
            'desc' => __('Changes the post title color only on blog page.', 'corpus'),
            'id' => 'color_blog_p_title',
            'std' => $default_colors['color_blog_p_title'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Post Meta Color:<br />(blog)', 'corpus'),
            'desc' => __('Changes the post meta color only on blog page. (means: information about date/comments/author etc.)', 'corpus'),
            'id' => 'color_blog_p_meta',
            'std' => $default_colors['color_blog_p_meta'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Post Content Color:<br />(blog)', 'corpus'),
            'desc' => __('Changes the post content color only on blog page.', 'corpus'),
            'id' => 'color_blog_p_content',
            'std' => $default_colors['color_blog_p_content'],
            'type' => 'color');

        /*
        $options[] = array(
            'name' => __('Date Background Color:<br />(blog)', 'corpus'),
            'desc' => __('Changes the background color of stylish date only on blog page.', 'corpus'),
            'id' => 'color_bg_blog_style_date',
            'std' => $default_colors['color_bg_blog_style_date'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Readmore Background Color:<br />(blog)', 'corpus'),
            'desc' => __('Changes the background color of read more button.', 'corpus'),
            'id' => 'color_bg_readmore',
            'std' => $default_colors['color_bg_readmore'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Readmore Color:<br />(blog)', 'corpus'),
            'desc' => __('Changes the color of read more button.', 'corpus'),
            'id' => 'color_readmore',
            'std' => $default_colors['color_readmore'],
            'type' => 'color');
         * 
         */

        $options[] = array(
            'name' => __('Post Title Color:<br />(post/page)', 'corpus'),
            'desc' => __('Changes the post title color on posts/page.', 'corpus'),
            'id' => 'color_p_title',
            'std' => $default_colors['color_p_title'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Post Meta Color:<br />(posts)', 'corpus'),
            'desc' => __('Changes the post meta color on single posts.', 'corpus'),
            'id' => 'color_p_meta',
            'std' => $default_colors['color_p_meta'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Post Content Color:<br />(page/posts)', 'corpus'),
            'desc' => __('Changes the post content color on single posts.(means: color for &#60;p&#62; tag.)', 'corpus'),
            'id' => 'color_p_content',
            'std' => $default_colors['color_p_content'],
            'type' => 'color');

        /*
        $options[] = array(
            'name' => __('Link Color:<br />(post/page)', 'corpus'),
            'desc' => __('Changes the unvisited link color on posts/page.(means: color for &#60;a&#62; tag.)', 'corpus'),
            'id' => 'color_p_link',
            'std' => $default_colors['color_p_link'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Link Visited Color:<br />(post/page)', 'corpus'),
            'desc' => __('Changes the visited link color on posts/page.(means: color for visited links.)', 'corpus'),
            'id' => 'color_p_link_v',
            'std' => $default_colors['color_p_link_v'],
            'type' => 'color');

        $options[] = array(
            'name' => __('Link Hover Color:<br />(post/page)', 'corpus'),
            'desc' => __('Changes the link hover color on posts/page. (means: when mouse hovers over a link.)', 'corpus'),
            'id' => 'color_p_link_h',
            'std' => $default_colors['color_p_link_h'],
            'type' => 'color');
         * 
         */

        /* Color options (ends) */


        /*Social Options (starts)*/
        $options[] = array(
            'name' => __('Social Options', 'corpus'),
            'type' => 'heading');
        
        $options[] = array(
            'name' => __('Hide Social Section:', 'corpus'),
            'desc' => __('Checking this will hide Social Section.', 'corpus'),
            'id' => 'disable_social_section',
            'std' => '0',
            'type' => 'checkbox');
        
        $options[] = array(
            'name' => __('Social Icons Skin', 'corpus'),
            'desc' => __('Choose the skin for your Social Icons that appear in footer.', 'corpus'),
            'id' => 'si_skin',
            'std' => 'default',
            'type' => 'select',
            'options' => array(
                'default' => __('Default', 'corpus'),
                'matching' => __('Matching', 'corpus'),
                'original' => __('Original', 'corpus')
                )
        );

        $options[] = array(
            'name' => __('Facebook Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'facebook',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Twitter Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'twitter',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Google+ Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'googleplus',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Linkedin Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'linkedin',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Instagram Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'instagram',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Pinterest Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'pinterest',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Tumblr Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'tumblr',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('Dribbble Profile:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'dribbble',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('YouTube Channel: (New Icon)', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'youtubeplay',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('YouTube Channel: (Old Icon)', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'youtube',
            'std' => '',
            'type' => 'text');
        
        $options[] = array(
            'name' => __('RSS Feed:', 'corpus'),
            'desc' => __('Include http:// or https:// with the URL.', 'corpus'),
            'id' => 'rss',
            'std' => '',
            'type' => 'text');

        /*Social Options (ends)*/

		
        /*Custom CSS (starts)*/
        $options[] = array(
            'name' => __('Custom CSS', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'id' => "mudcss_section",
            'type' => 'divstart');

        $options[] = array(
            'name' => __('Custom CSS Styles:', 'corpus'),
            'desc' => __('<strong>Important:</strong> Use this section only if you are well versed with CSS styling. Any bad input here can ruin the entire look of your theme. You can put your custom CSS styles here. It is recommended that you use this section rather than editing <i>style.css</i> directly.', 'corpus'),
            'id' => 'custom_css',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'id' => "mudcss_section",
            'type' => 'divend');
        
        /*Custom CSS (ends)*/

        /*Analytics Section (starts)*/
        $options[] = array(
            'name' => __('Google Analytics', 'corpus'),
            'type' => 'heading');

        $options[] = array(
            'id' => "mudcss_section",
            'type' => 'divstart');

        $options[] = array(
            'name' => __('Google Analytics Script:', 'corpus'),
            'desc' => __('<strong>Important:</strong> Insert your Google Analytics Javascript code here. This code will be inserted into all the pages of your theme.', 'corpus'),
            'id' => 'analytics_code',
            'std' => '',
            'type' => 'textarea');

        $options[] = array(
            'id' => "mudcss_section",
            'type' => 'divend');

        /*Analytics Section (ends)*/

	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('mudthemes_optionsframework_custom_scripts', 'mudthemes_optionsframework_custom_scripts');

function mudthemes_optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	$('#example_showhidden').click(function() {
  		$('#section-example_text_hidden').fadeToggle(400);
	});

	if ($('#example_showhidden:checked').val() !== undefined) {
		$('#section-example_text_hidden').show();
	}

});
</script>

<?php
}

/**
 * Fetches fonts array from $mdf_google_fonts to be used in options.
 * 
 * @global type $mdf_google_fonts
 * @return type
 */
function mudthemes_optionsframework_font_scut(){
    global $mdf_google_fonts;

    foreach ($mdf_google_fonts as $value):
        if(($value) && is_array($value)):

            $return_array_key = $value['shortname'];
            $return_array_value = $value['displayname'];
            $return_array[$return_array_key] = $return_array_value;
            
        endif;
    endforeach;

    return $return_array;
    
}