<?php
class chapterlistblock extends Block
{
    public function run($zym_10)
    {
        $zym_8 = $this->pt->input->param('novelid', 'int', 0, $zym_10);
        $zym_7 = $this->pt->input->param('siteid', 'int', 0, $zym_10);
        $zym_5 = $this->pt->input->param('page', 'int', 1);
        $zym_6 = $this->pt->input->param('pagesize', 'int', 0);
		$oldnum = $zym_10['oldnum']?$zym_10['oldnum']:0;
        if (!$zym_8) {
            return array();
        }
        if ($zym_7) {
            $zym_9 = $this->pt->model('novelsearch_chapter')->getlist($zym_8, $zym_7, $zym_5, $zym_6);
        } else {
            $zym_9 = $this->pt->model('novelsearch_chapter')->getolist($zym_8, $zym_5, $zym_6);
        }
        if (isset($zym_10['sort']) && $zym_10['sort'] == 'desc') {
            rsort($zym_9);
        }
        if (isset($zym_10['num']) && $zym_10['num'] < count($zym_9)) {
            $zym_9 = array_slice($zym_9, $oldnum, $zym_10['num']);
		}
        return $zym_9;
    }
}