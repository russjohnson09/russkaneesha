<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class GuestLoginForm extends Model
{
    public $first_name;
    public $last_name;

    private $_guest = false;


    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getGuest(),3600*24*30);
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getGuest()
    {
        $create = true;
        if ($this->_guest === false) {
            $this->_guest = Guest::findByName($this->first_name,$this->last_name,$create);
        }

        return $this->_guest;
    }
}
