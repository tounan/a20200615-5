<?php
class NovelSearch_SiteModel extends Model {
    public function add($zym_13) {
        $zym_13 = array_merge(['style' => '', 'desc' => '', 'isoriginal' => 0, 'status' => 1, 'weight' => 10, 'ip' => 0, ], $zym_13);
        $zym_14 = $this->insert($zym_13);
        cache::rm('site_namelist_key2name');
        return $zym_14;
    }
    public function edit($zym_13) {
        $zym_14 = $this->update($zym_13);
        cache::rm('site_namelist_key2name');
        return $zym_14;
    }
    public function del($zym_15) {
        $this->where($zym_15)->delete();
        cache::rm('site_namelist_key2name');
    }
    public function getlist() {
        $zym_12 = $this->select();
        foreach ($zym_12 as & $zym_16) {
            $zym_16['url_edit'] = U('novelsearch.site.edit', array(
                'id' => $zym_16['id']
            ));
        }
        return $zym_12;
    }
    public function getinfobykey($zym_17) {
        $zym_11 = cache::get('site_namelist_' . $zym_17);
        if (!$zym_11 || APP_DEBUG) {
            $zym_11 = $this->where(array(
                'key' => $zym_17
            ))->find();
            if ($zym_11) cache::set('site_namelist_' . $zym_17, $zym_11);
        }
        return $zym_11;
    }
    public function getnamelist() {
        $zym_17 = 'site_namelist_key2name';
        $zym_12 = cache::get($zym_17);
        if (!$zym_12 || APP_DEBUG) {
            $zym_12 = M('novelsearch_site')->where(['status' => 1])->getfield('id,name,key,style,desc,status', true);
            cache::set($zym_17, $zym_12, 600);
        }
        return $zym_12;
    }
    public function getweight() {
        $zym_17 = 'site_weight';
        $zym_12 = $this->cache->get($zym_17);
        if (!$zym_12) {
            $zym_14 = $this->where(array(
                'status' => 1
            ))->field('id,weight')->order('weight desc,isoriginal desc,id asc')->select();
            $zym_12 = array_column($zym_14, 'weight', 'id');
            $this->cache->set($zym_17, $zym_12, 600);
        }
        return $zym_12;
    }
    public function getipsites() {
        $zym_17 = 'sites_ip_limit';
        $zym_6 = $this->cache->get($zym_17);
        if (!$zym_6) {
            $zym_6 = array();
            $zym_14 = $this->where(array(
                'status' => 1
            ))->field('id,ip')->select();
            $zym_5 = M('novelsearch_ipcount')->where(array(
                'date' => date('Ymd')
            ))->getfield('siteid,ip', true);
            foreach ($zym_14 as $zym_7 => $zym_16) {
                if (!isset($zym_5[$zym_16['id']]) || $zym_16['ip'] == 0 || $zym_16['ip'] * 1.1 > $zym_5[$zym_16['id']]['ip']) {
                    $zym_6[] = $zym_16['id'];
                }
            }
            $this->cache->set($zym_17, $zym_6, 300);
        }
        return $zym_6;
    }
    public function clearLog($zym_9) {
        (new NovelSearch_LogModel())->where(['siteid' => $zym_9])->delete();
        (new NovelSearch_infoModel())->where(['siteid' => $zym_9])->update(['siteid' => 9999]);
    }
    public function clearChapter($zym_9) {
        $zym_8 = new NovelSearch_chapterModel();
        for ($zym_10 = 0; $zym_10 < 100; $zym_10++) {
            $zym_8->setTableId(100 + $zym_10);
            $zym_8->where(['siteid' => $zym_9])->delete();
        }
        (new NovelSearch_LogModel())->where(['siteid' => $zym_9])->update(['lastid' => 0]);
    }
}
?>
