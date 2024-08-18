<?
declare (strict_types = 1);
namespace app\route;

use think\facade\Db;

class admin extends \lim\Router
{

	protected $rule = [
		'register' => [
			'账号|account' => 'required|string',
			'密码|password' => 'required|string',
			'名称|name' => 'string',
		],
		'login' => [
			'账号|account' => 'required|string',
			'密码|password' => 'required|string',
		],
	];

	protected $call = [
		'register' => [\app\model\Admin::class, 'register'],
		'login' => [\app\model\Admin::class, 'login'],
	];

	public function tt($value = '') {

		return Db::table('menu')->select()->toArray();
	}

}