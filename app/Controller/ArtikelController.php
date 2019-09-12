<?php

namespace Akaneapp\Controller;

use \Akane\Helper\Common;

class ArtikelController extends \Akane\Controller\BaseController
{
	public function listAction()
	{
        $all = $this->artikelModel->all('id DESC','', ['status' => 'publish']);

        $jml = count($all);
        $url = __SITEURL__ . '/artikel/page/[[paged]]';

        Common::$paged = $this->http->uri_segment(2);

        $paging = Common::paginationSEO($jml, $url, 1);
        
        $data = $this->artikelModel->all('id DESC', $paging['limit'], ['status' => 'publish']);

        echo $this->layout->render('layout', [
            'content' => $this->layout->render('artikel/list', [
                'data' => $data,
                'pagination' => $paging['output'],
            ])
        ]);
	}
}