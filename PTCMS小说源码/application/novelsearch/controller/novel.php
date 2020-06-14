<?php
class novelController extends CommonController
{
    public function indexAction()
    {
        $zym_17 = $this->getnovelid();
        $zym_20 = dc::get('novelsearch_info', $zym_17);
		
        if ($zym_20 === null or $zym_20['novel']['status'] == 0) {
            $this->error('小说不存在或者被禁止查看', 0, 0);
        }
        if (isset($this->userinfo['marklist'][$zym_17])) {
            $this->view->marked = 1;
            $this->view->lasturl = U('novelsearch.chapter.read', ['novelid' => $zym_17, 'novelkey' => $zym_20['novel']['pinyin'], 'chapterid' => $this->userinfo['marklist'][$zym_17]]);
        } else {
            $this->view->marked = 0;
        }
		$quenum = $zym_20['last']['id']-20;
		$oquenum = $zym_20['last']['id']-20+8;
		$this->view->quenum=$quenum;
		$this->view->oquenum=$oquenum;
        $this->view->set($zym_20);
        $this->display('info');    
    }
public function getdlistAction()
    {
        $zym_20 = dc::get('novelsearch_info', $_GET['id']);
        if ($zym_20 === null or $zym_20['novel']['status'] == 0) {
            $this->error('小说不存在或者被禁止查看', 0, 0);
        }
     
        $this->view->set($zym_20);
		$this->view->set($_GET);
        $this->display('getdlist');
    }
    public function desktopAction()
    {
        $zym_17 = $this->getnovelid();
        $zym_25 = dc::get('novelsearch_info', $zym_17);
        if ($zym_25 === null or $zym_25['novel']['status'] == 0) {
            $this->error('小说不存在或者被禁止查看', 0, 0);
        }
        $zym_16 = "[InternetShortcut]\n";
        $zym_16 .= "URL=" . $zym_25['novel']['url_chapterlist'] . "\n";
        $zym_16 .= "IDList=IconFile=" . $zym_25['novel']['url_chapterlist'] . "favicon.ico\n";
        $zym_16 .= "IconIndex=1\n";
        $zym_16 .= "[{000214A0-0000-0000-C000-000000000046}]\n";
        $zym_16 .= "Prop3=19,2";
        header('Content-Type:text/xml; charset=utf-8');
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=" . urlencode($zym_25['novel']['name'] . '_' . C('sitename')) . ".url;");
        echo $zym_16;
        exit;
    }
    public function authorAction()
    {
        if (isset($_GET['author'])) {
            $zym_18 = I('get.author', 'str', '');
        } elseif (isset($_GET['authorid'])) {
            $zym_18 = (new AuthorModel())->where(['id' => I('get.authorid', 'int')])->getfield('name');
        } elseif (isset($_GET['authorpinyin'])) {
            $zym_18 = (new AuthorModel())->where(['pinyin' => I('get.authorpinyin', 'en')])->getfield('name');
        } else {
            $zym_18 = "未知";
        }
        $this->view->author = ['name' => $zym_18, 'url' => __SELF__];
        $this->display('author');
    }
    public function dirAction()
    {
        $zym_17 = $this->getnovelid();
        $zym_20 = dc::get('novelsearch_info', $zym_17);
        if ($zym_20 === null or $zym_20['novel']['status'] == 0) {
            $this->error('小说不存在或者被禁止查看', 0, 0);
        }
        if ($this->request->isPost()) {
            $zym_19 = $this->input->get('sort', ['asc', 'desc'], 'asc');
            $zym_21 = explode('|', $this->cookie->get('descsort', ''));
            if ($zym_19 == 'asc') {
                $zym_14 = array_search($zym_17, $zym_21);
                if ($zym_14 !== false) {
                    unset($zym_21[$zym_14]);
                }
            } else {
                $zym_21[] = $zym_17;
                $zym_21 = array_unique($zym_21);
            }
            $this->cookie->set('descsort', implode('|', $zym_21));
            $this->success();
        }
        $zym_15 = $this->input->get('siteid', 'int', $this->input->get('sitekey', 'str', ''));
        if (!$zym_15) {
        } else {
            if (is_numeric($zym_15)) {
                $zym_12 = $this->model->get('novelsearch_site', $zym_15);
            } else {
                $zym_12 = $this->model('novelsearch_site')->getinfobykey($zym_15);
                $zym_15 = $zym_12['id'];
            }
        }
        $zym_24 = (new novelsearch_chapterModel())->getlist($zym_17, $zym_15);
        $zym_7 = explode('|', $this->cookie->get('descsort', ''));
        if (isset($_GET['sort'])) {
            $zym_19 = $this->input->get('sort', ['asc', 'desc'], 'asc');
        } else {
            $zym_19 = in_array($zym_17, $zym_7) ? 'desc' : 'asc';
        }
        if ($zym_19 == 'asc') {
            krsort($zym_24);
            array_values($zym_24);
        }
        $zym_6 = 0;
        foreach ($zym_24 as $zym_5 => $zym_23) {
            $zym_24[$zym_5]['num'] = ++$zym_6;
        }
        if ($this->request->isMobile()) {
            $zym_8 = $this->input->get('page', 'int', 1);
            $zym_13 = ['novelid' => $zym_17, 'novelkey' => $zym_20['novel']['pinyin']];
            if ($zym_15) {
                $zym_13['siteid'] = $zym_15;
                $zym_13['sitekey'] = $zym_12['key'];
            }
            $zym_9 = U('novelsearch.novel.dir', $zym_13);
            $zym_13 = ['page' => $zym_8];
            if ($zym_19 == 'asc') {
                $zym_14 = array_search($zym_17, $zym_7);
                if ($zym_14 !== false) {
                    unset($zym_7[$zym_14]);
                }
                $this->view->sorturl = $zym_9 . '?' . http_build_query(['page' => 1, 'sort' => 'desc']);
                $zym_13['sort'] = 'asc';
            } else {
                $zym_7[] = $zym_17;
                $zym_7 = array_unique($zym_7);
                $this->view->sorturl = $zym_9 . '?' . http_build_query(['page' => 1, 'sort' => 'asc']);
                $zym_13['sort'] = 'desc';
            }
            $this->cookie->set('descsort', implode('|', $zym_7));
            $this->view->totalnum = count($zym_24);
            $zym_11 = $this->config->get('pagesize_dir_wap', 0);
            if ($zym_11) {
                $zym_24 = array_slice($zym_24, $zym_8 * $zym_11 - $zym_11, $zym_11);
            }
            $this->view->sort = $zym_19;
            $this->view->page = $zym_8;
            $this->view->pagesize = $zym_11;
            $zym_13['page'] = '__PAGE__';
            $this->view->pageurl = $zym_9 . '?' . http_build_query($zym_13);
        }
        $this->view->set($zym_20);
        $this->view->dirlist = $zym_24;
        $this->view->sitename = empty($zym_12) ? '最佳来源' : $zym_12['name'];
        $this->display('dir');
    }
    public function downAction()
    {
        $zym_17 = $this->getnovelid();
        $zym_20 = dc::get('novelsearch_info', $zym_17);
		
        if ($zym_20 === null or $zym_20['novel']['status'] == 0) {
            $this->error('小说不存在或者被禁止查看', 0, 0);
        }
        if (isset($this->userinfo['marklist'][$zym_17])) {
            $this->view->marked = 1;
            $this->view->lasturl = U('novelsearch.chapter.read', ['novelid' => $zym_17, 'novelkey' => $zym_20['novel']['pinyin'], 'chapterid' => $this->userinfo['marklist'][$zym_17]]);
        } else {
            $this->view->marked = 0;
        }
		M('novelsearch_info')->where('id='.$zym_17)->setInc('downnum',1,60);
		$quenum = $zym_20['last']['id']-20;
		$oquenum = $zym_20['last']['id']-20+9;
		$this->view->quenum=$quenum;
		$this->view->oquenum=$oquenum;
        $this->view->set($zym_20);
        $this->display('down');  
    }
    public function readendAction()
    {
        $zym_17 = $this->getnovelid();
        $zym_20 = dc::get('novelsearch_info', $zym_17);
        if ($zym_20 === null or $zym_20['novel']['status'] == 0) {
            $this->error('小说不存在或者被禁止查看', 0, 0);
        }
        $this->view->set($zym_20);
        $this->display('readend');
    }
}