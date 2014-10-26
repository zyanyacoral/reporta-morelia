<?php
class User extends Eloquent
{
	protected $table = 'users';
	protected $guarded = array('id');
	protected $fillable = array('name', 'email');

	public static $rules = array
	(
		'name' => 'required|min:5',
		'email' => 'required|email',
		'password' => 'required'
	);
   public static function validate($data){
      $reglas = self::$rules;
      return Validator::make($data, $reglas);
   }
}
