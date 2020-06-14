<?php
class SiteLastChapterBlock extends Block {
    public function run($zym_10) {
        $zym_8 = $this->pt->input->param('novelid', 'int', 0, $zym_10);
        $zym_9 = dc::get('novelsearch_info', $zym_8, 'novel.pinyin');
        $zym_7 = new NovelSearch_chapterModel();
        $zym_7->setTableId($zym_8);
        $zym_5 = (new Novelsearch_SiteModel())->getnamelist();
        $zym_12 = $zym_7->fetchall('SELECT id,siteid,name,time FROM `ptcms_novelsearch_chapter_' . ($zym_8 % 100) . '` where id IN (select tid from (select max(id) as tid from `ptcms_novelsearch_chapter_' . ($zym_8 % 100) . '` where novelid=' . $zym_8 . ' group by siteid) as a)');
        foreach ($zym_12 as $zym_6 => $zym_11) {
            if ($zym_11['siteid']) {
                if (isset($zym_5[$zym_11['siteid']])) {
                    $zym_12[$zym_6]['sitename'] = $zym_5[$zym_11['siteid']]['name'];
                    $zym_12[$zym_6]['sitestyle'] = $zym_5[$zym_11['siteid']]['style'];
                    $zym_12[$zym_6]['sitedesc'] = $zym_5[$zym_11['siteid']]['desc'];
                    $zym_12[$zym_6]['url_dir'] = U('novelsearch.novel.dir', array(
                        'siteid' => $zym_11['siteid'],
                        'sitekey' => $zym_5[$zym_11['siteid']]['key'],
                        'novelid' => $zym_8,
                        'novelkey' => $zym_9
                    ));
                    $zym_12[$zym_6]['url_chapter'] = U('novelsearch.chapter.list', array(
                        'siteid' => $zym_11['siteid'],
                        'sitekey' => $zym_5[$zym_11['siteid']]['key'],
                        'novelid' => $zym_8,
                        'novelkey' => $zym_9,
                        'page' => 1
                    ));
                    $zym_12[$zym_6]['url_green'] = U('novelsearch.chapter.green', array(
                        'novelid' => $zym_8,
                        'novelkey' => $zym_9,
                        'chapterid' => $zym_11['id']
                    ));
                    $zym_12[$zym_6]['url_frame'] = U('novelsearch.chapter.frame', array(
                        'novelid' => $zym_8,
                        'novelkey' => $zym_9,
                        'chapterid' => $zym_11['id']
                    ));
                } else {
                    unset($zym_12[$zym_6]);
                }
            } else {
                $zym_12[$zym_6]['sitename'] = '本站原创';
                $zym_12[$zym_6]['sitestyle'] = '';
                $zym_12[$zym_6]['sitedesc'] = '';
                $zym_12[$zym_6]['url_dir'] = '';
                $zym_12[$zym_6]['url_chapter'] = '';
                $zym_12[$zym_6]['url_green'] = U('novelsearch.chapter.green', array(
                    'novelid' => $zym_8,
                    'novelkey' => $zym_9,
                    'chapterid' => $zym_11['id']
                ));
                $zym_12[$zym_6]['url_frame'] = U('novelsearch.chapter.frame', array(
                    'novelid' => $zym_8,
                    'novelkey' => $zym_9,
                    'chapterid' => $zym_11['id']
                ));
            }
        }
        return $zym_12;
    }
}
?>
