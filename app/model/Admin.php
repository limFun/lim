<?php
namespace app\model;

class Admin extends \think\facade\Model {

	protected $field = ['id', 'account', 'password', 'last_login'];

	public static function register($o) {
		$o['password'] = password_hash($o['password'], PASSWORD_BCRYPT);
		return self::creater($o);
	}

	public static function login($o = '') {
		$user = self::where('account', $o['account'])->find();

		if (!password_verify((string) $o['password'], $user->password)) {
			apiErr('密码错误', 3001);
		}

		$tokenData = ['time' => time(), 'id' => $user->id];
		$user->last_login = time();
		$user->save();

		return ['token' => token($tokenData), 'info' => $user->toArray()];
	}

	public static function userInfo() {
		$user = self::where('id', user()['id'])->find();
		return $user->toArray();
	}

}