<?php
class samemarkBlock extends Block {
    public function run($zym_9) {
        $zym_6 = I('novelid', 'int', 0, $zym_9);
        $zym_5 = I('num', 'int', 10, $zym_9);
        if (empty($zym_6)) return array();
        $zym_10 = M('user_mark')->field('userid')->where(array(
            'novelid' => $zym_9['novelid']
        ))->limit($zym_5)->order('chapterid desc')->select();
        foreach ($zym_10 as $zym_7 => $zym_8) {
            $zym_10[$zym_7] = dc::get('user', $zym_8['userid']);
        }
        return $zym_10;
    }
}
?>
