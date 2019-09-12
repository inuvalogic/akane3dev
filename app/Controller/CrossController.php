<?php

namespace Akaneapp\Controller;

use \Akane\Helper\Common;

class CrossController extends \Akane\Controller\BaseController
{
    public function adminListAction()
    {
        echo $this->http->getIPAddress();

        // $all = $this->artikelModel->all();
        // $get = $this->artikelModel->get(1);

        // var_dump($all);
        // var_dump($get);

        // $jml = count($all);
        // $url = __SITEURL__ . '/artikel/page/[[paged]]';

        // Common::$paged = $this->http->uri_segment(2);

        // $paging = Common::paginationSEO($jml, $url, 10);

        // $data = $this->artikelModel->all('id DESC', $paging['limit']);
    }
}