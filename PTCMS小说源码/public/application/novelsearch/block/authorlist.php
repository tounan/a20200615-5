<?php
class AuthorlistBlock extends Block
{
    public function run($zym_10)
    {
        $zym_7 = I('ignoreid', 'int', 0, $zym_10);
        $zym_8 = I('author', 'str', '', $zym_10);
        $zym_6 = I('num', 'int', 10, $zym_10);
        $zym_12 = I('order', ['lastupdate', 'allvisit', 'monthvisit'], 'lastupdate');
        if (!$zym_8) {
            return array();
        }
        if ($zym_8 == '未知') {
            $zym_8 = '';
        }
        $zym_11 = (new novelsearch_infoModel())->where(array('author' => $zym_8))->limit($zym_6)->order($zym_12 . ' desc')->getlist();
        foreach ($zym_11 as $zym_5 => &$zym_9) {
            if ($zym_9['novel']['id'] == $zym_7) {
                unset($zym_11[$zym_5]);
            }
        }
        return $zym_11;
    }
}
?>
