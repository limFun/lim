<?
declare (strict_types = 1);
namespace app\route;

use think\facade\Db;

class admin extends \lim\Router
{

	protected $rule = [
		'tt' => [
			// 'id' => 'required',
		],
	];

	protected $call = ['a' => 4];

	public function tt($value = '') {

		return Db::table('menu')->select()->toArray();
	}

}