<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

use yii\db\ActiveRecord;
use app\models\UserDB;


class AdduserController extends Controller
{
    public function actionIndex($message = 'Generated User: ')
    {
        $id = UserDB::createRandomUser();
        echo PHP_EOL . 'Added new random User - ' . $id . PHP_EOL;

        return ExitCode::OK;
    }
}
