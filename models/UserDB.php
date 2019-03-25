<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\data\ArrayDataProvider; // TODO: use ActiveDataProvider here?

/**
* @property int $id
* @property string $username
* @property string $password
* @property string $authKey
* @property string $accessToken
*/
class UserDB extends \yii\db\ActiveRecord
{
	public static function tableName() {
	    return 'users';
	}

    public static function updateAttributeById($id, $attribute, $value) {
        $model = self::findOne($id);

        if (!$model || !$model->hasAttribute($attribute)) {
            return false;
        }

        $model->setAttribute($attribute, $value);

        $model->save(false);
        return true;
    }

    public static function deleteById($id) {
        $model = self::findOne($id);

        if (!$model) {
            return false;
        }

        $model->delete();
        return true;
    }

    public static function createRandomUser() {
        $id = (time() . rand(1, 9999));
  
        $model = new self();

        $model->username    = 'TestUser-' . $id;
        $model->password    = 'test';
        $model->authKey     = 'test' . $id . 'key';
        $model->accessToken = $id . '-token';

        $model->save();

        return $id;
    }

    public static function getDataProvider() {
        $dataProvider = self::find()->all();

        return new ArrayDataProvider([
            'key'       =>'id',
            'allModels' => $dataProvider,
            'sort' => [
                'attributes' => ['id', 'username'],
            ],
        ]);
    }
}