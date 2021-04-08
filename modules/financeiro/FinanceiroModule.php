<?php 
  namespace app\modules\financeiro;

use yii\base\Module;

class FinanceiroModule extends Module
{
  public $controllerNamespace = 'app\modules\financeiro\controllers';

  public function init(){
    return parent::init();
  }  
}
?>