<?php
class indexController extends Controller {
    public function init() {
        $this->response->disableRender();
    }
    public function indexAction() {
        $zym_13 = C('sitemap_num', null, 200);
        $zym_11 = M('novelsearch_info')->getcount(array());
        $zym_12 = ceil($zym_11 / $zym_13);
        $zym_14 = array();
        $zym_10 = C('wap_domain') . U('wapsitemap.index.info', array(
            'page' => '__PAGE__'
        ));
        for ($zym_18 = 1; $zym_18 <= $zym_12; $zym_18++) {
            $zym_14['sitemap'][] = array(
                'loc' => str_replace('__PAGE__', $zym_18, $zym_10) ,
                'lastmod' => date('Y-m-d') ,
            );
        }
        $zym_5 = new xmlModel();
        $zym_6 = $zym_5->xml_encode($zym_14, 'sitemapindex');
        $this->show($zym_6, 'text/xml');
    }
    public function infoAction() {
        $zym_9 = M('novelsearch_chapter');
        $zym_8 = I('get.page', 'int', 1);
        $zym_13 = C('sitemap_num', null, 200);
        $zym_10 = C('wap_domain');
        $zym_17 = M('novelsearch_info')->getpagelist(array() , 'lastupdate', $zym_8, $zym_13);
        if (C('sitemap_mode')) {
            foreach ($zym_17 as $zym_7 => $zym_15) {
                $zym_14['url'][] = array(
                    'loc' => $zym_10 . $zym_15['url']['info'],
                    'lastmod' => date('Y-m-d', $zym_15['last']['time']) . 'T' . date('H:i:s', $zym_15['last']['time']) ,
                    'changefreq' => 'daily',
                    'priority' => '0.8',
                    'data' => array(
                        'name' => $zym_15['novel']['name'],
                        'author' => array(
                            'name' => $zym_15['author']['name'],
                            'description' => '著名网络文学作家“' . $zym_15['author']['name'] . "”",
                            'url' => $zym_10 . $zym_15['author']['url'],
                        ) ,
                        'image' => ($zym_15['novel']['cover'] {
                            0
                        } == '/') ? $zym_10 . $zym_15['novel']['cover'] : $zym_15['novel']['cover'],
                        'description' => $zym_15['novel']['intro'],
                        'genre' => $zym_15['category']['name'],
                        'url' => $zym_10 . $zym_15['url']['info'],
                        'updateStatus' => '正在连载',
                        'trialStatus' => '免费',
                        'weeklyClick' => $zym_15['data']['weekvisit'],
                        'monthlyClick' => $zym_15['data']['monthvisit'],
                        'totalClick' => $zym_15['data']['allvisit'],
                        'newestChapter' => array(
                            'articleSection' => $zym_15['novel']['name'],
                            'headline' => $zym_15['last']['name'],
                            'url' => $zym_10 . $zym_15['last']['url'],
                            'dateModified' => date('Y-m-d', $zym_15['last']['time']) ,
                        ) ,
                        'dateModified' => date('Y-m-d', $zym_15['last']['time']) ,
                    )
                );
            }
        } else {
            foreach ($zym_17 as $zym_7 => $zym_15) {
                $zym_14['url'][] = array(
                    'loc' => $zym_10 . $zym_15['url']['info'],
                    'lastmod' => date('Y-m-d', $zym_15['last']['time']) . 'T' . date('H:i:s', $zym_15['last']['time']) ,
                    'changefreq' => 'daily',
                    'priority' => '0.8',
                );
            }
        }
        $zym_5 = new xmlModel();
        $zym_6 = $zym_5->xml_encode($zym_14, 'urlset');
        $this->show($zym_6, 'text/xml');
    }
    public function wappingAction() {
        $zym_10 = C('wap_domain');
        $zym_16 = $this->input->get('key', 'en', '');
        $zym_17 = unserialize(F(CACHE_PATH . '/wapping/' . $zym_16 . '.php'));
        if ($zym_17) {
            foreach ($zym_17 as $zym_7 => $zym_19) {
                $zym_15 = $this->model->get('novelsearch_info', $zym_19['id']);
                $zym_14['url'][] = array(
                    'loc' => $zym_10 . $zym_15['url']['info'],
                    'lastmod' => date('Y-m-d', $zym_15['last']['time']) . 'T' . date('H:i:s', $zym_15['last']['time']) ,
                    'changefreq' => 'daily',
                    'priority' => '0.8',
                    'data' => array(
                        'name' => $zym_15['novel']['name'],
                        'author' => array(
                            'name' => $zym_15['author']['name'],
                            'description' => '著名网络文学作家“' . $zym_15['author']['name'] . "”",
                            'url' => $zym_10 . $zym_15['author']['url'],
                        ) ,
                        'image' => ($zym_15['novel']['cover'] {
                            0
                        } == '/') ? $zym_10 . $zym_15['novel']['cover'] : $zym_15['novel']['cover'],
                        'description' => $zym_15['novel']['intro'],
                        'genre' => $zym_15['category']['name'],
                        'url' => $zym_10 . $zym_15['url']['info'],
                        'updateStatus' => '正在连载',
                        'trialStatus' => '免费',
                        'weeklyClick' => $zym_15['data']['weekvisit'],
                        'monthlyClick' => $zym_15['data']['monthvisit'],
                        'totalClick' => $zym_15['data']['allvisit'],
                        'newestChapter' => array(
                            'articleSection' => $zym_15['novel']['name'],
                            'headline' => $zym_15['last']['name'],
                            'url' => $zym_10 . $zym_15['last']['url'],
                            'dateModified' => date('Y-m-d', $zym_15['last']['time']) ,
                        ) ,
                        'dateModified' => date('Y-m-d', $zym_15['last']['time']) . 'T' . date('H:i:s', $zym_15['last']['time']) ,
                    )
                );
            }
            $zym_5 = new xmlModel();
            $zym_6 = $zym_5->xml_encode($zym_14, 'urlset');
            $this->show($zym_6, 'text/xml');
        }
    }
}
?>
