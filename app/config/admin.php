<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//後台顯示之功能
$admin['ac_father_online'] = array(
	'service', 'marketing', 'server', 'flow', 'database',
	'websiteset', 'note', 'album'
);
$admin['sidebox_open_array'] = array('fanswoo', 'websiteset');//此值為預設打開之大分類
$admin['ac_father_display'] = 'display';//此值若為display則會顯示不能使用之功能

$admin['admin_sidebox'] = array(
	array(
		'title' => 'fansWoo 服務',
		'name' => 'fanswoo',
		'ac_father' => array(
			array(
				'title' => '服務總覽', 'name' => 'service',
				'ac_child' => array(
					array('title' => '服務總覽', 'name' => 'index'),
					array('title' => 'fansWoo 官方網站', 'name' => 'fanswoo')
				)
			),
			array(
				'title' => '網路行銷', 'name' => 'marketing',
				'ac_child' => array(
					array('title' => 'Google Adwords', 'name' => 'googleadwords'),
					array('title' => 'facebook fans', 'name' => 'facebookfans')
				)
			),
			array(
				'title' => '伺服器', 'name' => 'server',
				'ac_child' => array(
					array('title' => 'Google 虛擬主機', 'name' => 'host'),
					array('title' => 'Google 極速雲端', 'name' => 'cloud')
				)
			),
			array(
				'title' => '流量統計', 'name' => 'flow',
				'ac_child' => array(
					array('title' => 'Google Analytics', 'name' => 'analytics')
				)
			),
			array(
				'title' => '資料庫', 'name' => 'database',
				'ac_child' => array(
					array('title' => 'MySQL', 'name' => 'mysql')
				)
			)
		)
	),
	array(
		'title' => '網站系統',
		'name' => 'websiteset',
		'ac_father' => array(
			array(
				'title' => '網站設置', 'name' => 'websiteset',
				'ac_child' => array(
					array('title' => '基本設置', 'name' => 'set'),
					array('title' => 'SEO標籤設置', 'name' => 'seometa'),
					array('title' => '第三方外掛', 'name' => 'plugin')
				)
			),
			array(
				'title' => '文章管理', 'name' => 'note',
				'ac_child' => array(
					array('title' => '新增文章', 'name' => 'postnote'),
					array('title' => '文章列表', 'name' => 'notelist'),
					array('title' => '新增分類標籤', 'name' => 'postclass'),
					array('title' => '分類標籤列表', 'name' => 'classlist'),
					array('title' => '文章設置', 'name' => 'set')
				)
			),
			array(
				'title' => '相簿管理', 'name' => 'album',
				'ac_child' => array(
					array('title' => '新增照片', 'name' => 'postnews'),
					array('title' => '新增相簿', 'name' => 'postmeta'),
					array('title' => '照片列表', 'name' => 'newslist'),
					array('title' => '相簿列表', 'name' => 'metalist'),
					array('title' => '相簿設置', 'name' => 'set')
				)
			),
			array(
				'title' => '商品展示', 'name' => 'showpiece',
				'ac_child' => array(
					array('title' => '新增展示品', 'name' => 'postshowpiece'),
					array('title' => '新增分類', 'name' => 'postmeta'),
					array('title' => '展示品列表', 'name' => 'showpiecelist'),
					array('title' => '分類列表', 'name' => 'metalist'),
					array('title' => '展示品設置', 'name' => 'set')
				)
			),
			array(
				'title' => '聯繫單', 'name' => 'contact',
				'ac_child' => array(
					array('title' => '聯繫單列表', 'name' => 'contactlist'),
					array('title' => '聯繫單設置', 'name' => 'set')
				)
			),
			array(
				'title' => '留言管理', 'name' => 'comment',
				'ac_child' => array(
					array('title' => '留言列表', 'name' => 'commentlist'),
					array('title' => '留言設置', 'name' => 'set')
				)
			),
			array(
				'title' => '會員管理', 'name' => 'showpiece',
				'ac_child' => array(
					array('title' => '新增會員', 'name' => 'postuser'),
					array('title' => '會員列表', 'name' => 'userlist'),
					array('title' => '會員權限列表', 'name' => 'competencelist'),
					array('title' => '會員設置', 'name' => 'set')
				)
			),
			array(
				'title' => '電子報', 'name' => 'email',
				'ac_child' => array(
					array('title' => '新增電子報', 'name' => 'postemail'),
					array('title' => '電子報列表', 'name' => 'emaillist'),
					array('title' => '發送名單列表', 'name' => 'sendlist'),
					array('title' => '電子報設置', 'name' => 'set')
				)
			),
			array(
				'title' => '動態頁面', 'name' => 'pabe',
				'ac_child' => array(
					array('title' => '新增動態頁面', 'name' => 'postpage'),
					array('title' => '動態頁面列表', 'name' => 'pagelist'),
					array('title' => '動態頁面設置', 'name' => 'set')
				)
			),
			array(
				'title' => '廣告系統', 'name' => 'advertisement',
				'ac_child' => array(
					array('title' => '新增廣告', 'name' => 'postad'),
					array('title' => '廣告列表', 'name' => 'adlist'),
					array('title' => '廣告設置', 'name' => 'set')
				)
			)
		)
	),
	array(
		'title' => '購物系統',
		'name' => 'shop',
		'ac_father' => array(
			array(
				'title' => '商店設置', 'name' => 'shop',
				'ac_child' => array(
					array('title' => '基本設置', 'name' => 'postproduct')
				)
			),
			array(
				'title' => '產品銷售', 'name' => 'productsell',
				'ac_child' => array(
					array('title' => '新增產品', 'name' => 'postproduct'),
					array('title' => '產品列表', 'name' => 'productlist'),
					array('title' => '產品設置', 'name' => 'set')
				)
			),
			array(
				'title' => '產品租賃', 'name' => 'productlease',
				'ac_child' => array(
					array('title' => '新增產品', 'name' => 'postproduct'),
					array('title' => '產品列表', 'name' => 'productlist'),
					array('title' => '產品設置', 'name' => 'set')
				)
			),
			array(
				'title' => '產品詢問', 'name' => 'productask',
				'ac_child' => array(
					array('title' => '產品詢問列表', 'name' => 'commentlist'),
					array('title' => '產品詢問設置', 'name' => 'set')
				)
			),
			array(
				'title' => '訂貨單', 'name' => 'orders',
				'ac_child' => array(
					array('title' => '新增訂貨單', 'name' => 'postproduct'),
					array('title' => '訂貨單列表', 'name' => 'productlist'),
				)
			),
			array(
				'title' => '退貨單', 'name' => 'returnsingle',
				'ac_child' => array(
					array('title' => '新增退貨單', 'name' => 'postproduct'),
					array('title' => '退貨單列表', 'name' => 'productlist'),
				)
			)
		)
	),
	array(
		'title' => '進銷存系統',
		'name' => 'invoicing',
		'ac_father' => array(
			array(
				'title' => '綜合報表', 'name' => 'reportform',
				'ac_child' => array(
					array('title' => '毛利分析', 'name' => 'mysql'),
					array('title' => '銷售分析', 'name' => 'mysql')
				)
			),
			array(
				'title' => '進貨管理', 'name' => 'goods',
				'ac_child' => array(
					array('title' => '新增進貨', 'name' => 'index'),
					array('title' => '進貨列表', 'name' => 'fanswoo')
				)
			),
			array(
				'title' => '庫存管理', 'name' => 'instock',
				'ac_child' => array(
					array('title' => '新增庫存', 'name' => 'googleadwords'),
					array('title' => '庫存列表', 'name' => 'facebookfans')
				)
			),
			array(
				'title' => '銷售管理', 'name' => 'goodssell',
				'ac_child' => array(
					array('title' => '新增銷售', 'name' => 'host'),
					array('title' => '銷售列表', 'name' => 'cloud')
				)
			)
		)
	),
	array(
		'title' => '財務管理系統',
		'name' => 'financial',
		'ac_father' => array(
			array(
				'title' => '財務報表', 'name' => 'financial',
				'ac_child' => array(
					array('title' => '財務報表', 'name' => 'mysql')
				)
			),
			array(
				'title' => '收入管理', 'name' => 'g1',
				'ac_child' => array(
					array('title' => '新增收入', 'name' => 'mysql'),
					array('title' => '收入列表', 'name' => 'mysql')
				)
			),
			array(
				'title' => '支出管理', 'name' => 'g2',
				'ac_child' => array(
					array('title' => '新增支出', 'name' => 'mysql'),
					array('title' => '支出列表', 'name' => 'mysql')
				)
			),
			array(
				'title' => '薪資管理', 'name' => 'salary',
				'ac_child' => array(
					array('title' => '新增薪資', 'name' => 'index'),
					array('title' => '薪資列表', 'name' => 'fanswoo')
				)
			),
			array(
				'title' => '員工管理', 'name' => 'staff',
				'ac_child' => array(
					array('title' => '新增員工', 'name' => 'googleadwords'),
					array('title' => '員工列表', 'name' => 'facebookfans'),
					array('title' => '階級列表', 'name' => 'facebookfans')
				)
			)
		)
	),
	array(
		'title' => '客製化系統',
		'name' => 'customized',
		'ac_father' => array(
			array(
				'title' => '客製化系統', 'name' => 'customized',
				'ac_child' => array(
					array('title' => '客製化系統', 'name' => 'customized')
				)
			),
		)
	)
);