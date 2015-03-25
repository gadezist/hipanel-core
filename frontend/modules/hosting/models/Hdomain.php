<?php
namespace frontend\modules\hosting\models;

use Yii;

class Hdomain extends \frontend\components\Model
{

    use \frontend\components\ModelTrait;

    /** @inheritdoc */
    public function rules () {
        return [
            [['id', 'server_id', 'client_id', 'seller_id', 'account_id', 'hdomain_id', 'state_id','type_id'],   'integer'],
            [['server', 'client', 'seller', 'account', 'hdomain', 'state', 'type', 'ip','aliase'],              'safe'],
        ];
    }

    /** @inheritdoc */
    public function attributeLabels () {
        return $this->margeAttributeLabels([
            'hdomain'               => Yii::t('app', 'Domain Name'),
        ]);
    }
}
