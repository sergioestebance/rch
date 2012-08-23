<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class HttpRequest extends CHttpRequest
{
private $_csrfToken;

public $noCsrfValidationRoutes = array();
   
   protected function normalizeRequest()
        {
                parent::normalizeRequest();
                if($this->enableCsrfValidation)
                {
                        $url=Yii::app()->getUrlManager()->parseUrl($this);
                        foreach($this->noCsrfValidationRoutes as $route)
                        {
                                if(strpos($url,$route)===0)
                                        Yii::app()->detachEventHandler('onBeginRequest',array($this,'validateCsrfToken'));
                        }
                }
        }
		
		
}