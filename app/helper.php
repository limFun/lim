<?

function tt($value = '', $a = 3) {
	loger([$value, $a]);
	loger(config());
	loger(env('DB_HOST', 33));
}