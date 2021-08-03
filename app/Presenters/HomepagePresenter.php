<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    
    public function startup()
    {
        parent::startup();
        
        // Get ORIGIN
        $origin = $this->getHttpRequest()->getHeader('origin');
        if($origin !== NULL) {
            $resp = $this->getHttpResponse();
            $resp->addHeader('Access-Control-Allow-Origin', $origin);
            $resp->addHeader('Access-Control-Allow-Credentials', 'true');
            $resp->addHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
            $resp->addHeader('Access-Control-Allow-Headers', 'origin, content-type, accept, x-tracy-ajax');
            $resp->addHeader('Access-Control-Expose-Headers', 'origin, location, content-type, accept, x-tracy-ajax');

            $resp->addHeader('Access-Control-Max-Age', "1728000");
        }        
    }
	
	public function renderDefault()
	{
		\Tracy\Debugger::barDump($this->getHttpRequest(), 'nějaký dump');
		$this->sendJson([ 'time' => date('Y-m-d H:i:s') ]);
	}
    
}
