<?php
class ruled_collectModel extends RuleModel
{
    public function collectlist($zym_32 = 1)
    {
        ob_end_clean();
        ob_start();
        echo str_repeat(' ', 2048);
        $this->response->setHeader();
        if (strpos($this->rule['url_list']['rule'], '[页码]')) {
            $this->rule['url_list']['rule'] = str_replace(array('[页码]', '[timestamp]'), array($zym_32), $this->rule['url_list']['rule']);
        }
        $this->content = collect::getcontent($this->rule['url_list']);
        $zym_34 = collect::getMatchAll($this->rule['list_novelid'], $this->content);
        $zym_31 = collect::getMatchAll($this->rule['list_novelname'], $this->content);
        $zym_30 = collect::getMatchAll($this->rule['list_lastid'], $this->content);
        if (count($zym_34) > 0 && count($zym_34) == count($zym_31) && count($zym_34) == count($zym_30)) {
            $zym_26 = $this->mergeParam(array('novelid' => $zym_34, 'novelname' => $zym_31, 'lastid' => $zym_30));
            foreach ($zym_26 as $zym_27 => $zym_47) {
                $zym_26[$zym_27]['infourl'] = $this->geturl('info_url', $zym_47, $this->rule['url_list']['rule']);
            }
            if ($this->rule['addnew']) {
                $zym_29 = $this->geturl('info_url', $zym_26, $this->rule['url_list']['rule']);
                foreach ($zym_26 as $zym_27 => &$zym_47) {
                    $zym_47['infourl'] = $zym_29[$zym_27];
                }
            }
            if ($this->rule['checkdir']) {
                $zym_29 = $this->geturl('dir_url', $zym_26, $this->rule['url_list']['rule']);
                foreach ($zym_26 as $zym_27 => &$zym_47) {
                    $zym_47['dirurl'] = $zym_29[$zym_27];
                }
            } else {
                $zym_35 = collect::getMatchAll($this->rule['chapter_name'], $this->content);
                if (count($zym_35) != count($zym_31)) {
                    return $this->error('章节名和书号获取到的数量不一致 chaptername' . count($zym_35) . ' novelid:' . count($zym_31));
                }
                $zym_36 = $this->geturl('chapter_url', $zym_26, $this->rule['url_list']['rule']);
                if (count($zym_36) != count($zym_31)) {
                    return $this->error('章节地址和书号获取到的数量不一致 chapterurl' . count($zym_36) . ' novelid:' . count($zym_31));
                }
                $zym_41 = $this->mergeParam(array('chaptername' => $zym_35, 'chapterurl' => $zym_36));
                foreach ($zym_26 as $zym_27 => &$zym_47) {
                    $zym_41[$zym_27]['chaptername'] = novel::nameformat($zym_41[$zym_27]['chaptername']);
                    $zym_47['chapter'] = array($zym_41[$zym_27]);
                    $zym_47['chapter']['0']['chapterid'] = $zym_47['lastid'];
                }
            }
            return $this->success($zym_26);
        } else {
            return $this->error('书号、书名、更新标识获取到的数量不一致 novelid' . count($zym_34) . ' novelname:' . count($zym_31) . ' lastid:' . count($zym_30) . ' 列表页内容长度:' . strlen($this->content));
        }
    }
    public function collectinfo($zym_42)
    {
        $this->rule['info_url']['rule'] = $zym_42;
        $this->content = collect::getcontent($this->rule['info_url']);
        $zym_48['novelname'] = collect::getMatch($this->rule['info_novelname'], $this->content);
        if (!$zym_48['novelname']) {
            return $this->error('采集小说名称失败');
        }
        $zym_48['category'] = collect::getMatch($this->rule['info_category'], $this->content);
        $zym_48['categoryid'] = novel::getcategory($zym_48['category']);
        $zym_48['author'] = collect::getMatch($this->rule['info_author'], $this->content);
        $zym_48['cover'] = collect::parseUrl(collect::getMatch($this->rule['info_cover'], $this->content), $this->rule['info_url']['rule']);
        if (C('collect_cover_check')) {
            $zym_48['cover'] = novel::checkCover($zym_48['cover']);
        }
        $zym_48['intro'] = novel::introformat(collect::getMatch($this->rule['info_intro'], $this->content));
        return $this->success($zym_48);
    }
    public function collectdir($zym_49)
    {
        $this->rule['dir_url']['rule'] = $zym_49['dirurl'];
        $this->content = collect::getcontent($this->rule['dir_url']);
        $zym_37 = collect::getMatchAll($this->rule['dir_chapterid'], $this->content);
        $zym_35 = collect::getMatchAll($this->rule['chapter_name'], $this->content);
        if (count($zym_37) != count($zym_35)) {
            $this->error('章节id和章节名称数量不一致');
        }
        $zym_51 = $zym_43 = $this->mergeParam(array('chapterid' => $zym_37, 'chaptername' => $zym_35));
        if (empty($this->rule['chapter_url']['option'])) {
            foreach ($zym_43 as &$zym_47) {
                $zym_47 = array_merge($zym_47, $zym_49);
            }
        }
        $zym_36 = $this->geturl('chapter_url', $zym_43, $this->rule['dir_url']['rule']);
        if (count($zym_37) != count($zym_36)) {
            $this->error('章节id和章节地址数量不一致');
        }
        foreach ($zym_51 as $zym_27 => &$zym_47) {
            $zym_47['chapterurl'] = $zym_36[$zym_27];
        }
        $zym_51 = msort($zym_51, 'chapterid');
        return $this->success($zym_51);
    }
    protected function geturl($zym_25, $zym_43, $zym_39 = '')
    {
        if (isset($this->rule[$zym_25]['option'])) {
            $zym_42 = collect::getMatchAll($this->rule[$zym_25], $this->content);
            foreach ($zym_42 as $zym_27 => $zym_47) {
                $zym_42[$zym_27] = collect::parseUrl($zym_47, $zym_39);
            }
            return $zym_42;
        } else {
            $zym_42 = array();
            $zym_22 = array_keys(current($zym_43));
            if (in_array('novelid', $zym_22)) {
                $zym_22[] = 'subnovelid';
            }
            foreach ($zym_22 as $zym_27 => $zym_47) {
                $zym_22[$zym_27] = '[' . $zym_47 . ']';
            }
            foreach ($zym_43 as $zym_47) {
                if (isset($zym_47['novelid'])) {
                    $zym_47[] = subid($zym_47['novelid']);
                }
                $zym_42[] = str_replace($zym_22, $zym_47, $this->rule[$zym_25]['rule']);
            }
            foreach ($zym_42 as &$zym_47) {
                $zym_47 = collect::parseUrl($zym_47, $zym_39);
            }
            return $zym_42;
        }
    }
    public function run()
    {
        set_time_limit(0);
        $zym_46 = I('request.id', 'int', 0);
        if ($zym_46 && $this->getrule($zym_46)) {
            $zym_51 = $this->collectlist();
            if ($zym_51['status'] == 1) {
                $this->progress(' 更新本站点数据，获取更新列表成功，更新列表共有' . count($zym_51['data']) . '条数据');
                foreach ($zym_51['data'] as $zym_27 => $zym_47) {
                    $this->_runitem($zym_47);
                }
            } else {
                $this->progress(' 获取列表数据失败');
            }
        } else {
            $this->error('找不到指定的规则');
        }
    }
    public function cron($zym_10, $zym_9)
    {
        set_time_limit(0);
        if ($zym_9 && ($zym_12 = $this->getrule($zym_9))) {
            $zym_51 = $this->collectlist();
            $zym_13 = cache::get("cron_{$zym_10}_pid");
            $zym_8 = M('cron');
            if ($zym_51['status'] == 1) {
                $this->progress(' 更新本站点数据，获取更新列表成功，更新列表共有' . count($zym_51['data']) . '条数据');
                foreach ($zym_51['data'] as $zym_27 => $zym_47) {
                    if ($zym_13 != cache::get("cron_{$zym_10}_pid")) {
                        exit('diff pid');
                    }
                    if (!$zym_8->getpower()) {
                        exit('cron stop');
                    }
                    cache::set("cron_{$zym_10}_novel", $zym_47['novelname']);
                    $this->_runitem($zym_47);
                    cache::rm("cron_{$zym_10}_novel");
                }
            }
        } else {
            $this->error('找不到指定的规则');
        }
    }
    protected function _runitem($zym_47)
    {
        $zym_5 = true;
        $zym_6 = M('novelsearch_log')->where(array('siteid' => $this->rule['siteid'], 'fromid' => $zym_47['novelid']))->find();
        if (!$zym_6) {
            $zym_5 = false;
            $this->progress("《{$zym_47['novelname']}》未采集过，获取本站ID");
            $zym_49 = array();
            if ($this->rule['addnew']) {
                $this->progress("《{$zym_47['novelname']}》获取小说信息备用");
                $zym_50 = $this->collectinfo($zym_47['infourl']);
                if ($zym_50['status'] == 1) {
                    $zym_49['name'] = $zym_50['data']['novelname'];
                    $zym_49['author'] = $zym_50['data']['author'];
                    $zym_49['cover'] = $zym_50['data']['cover'];
                    $zym_49['categoryid'] = $zym_50['data']['categoryid'];
                    $zym_49['intro'] = $zym_50['data']['intro'];
                    $zym_49['siteid'] = $this->rule['siteid'];
                }
            }
            $zym_11 = M('novelsearch_info')->where(array('name' => $zym_47['novelname'], 'siteid' => array('>', 0)))->field('id,siteid')->find();
            if (!$zym_11) {
                if ($zym_49 && !empty($zym_49['name']) && !empty($zym_49['author'])) {
                    if ($zym_49['name'] != $zym_47['novelname'] && strpos($zym_49['name'], novel::nameformat($zym_47['novelname']))) {
                        $this->progress("《{$zym_47['novelname']}》书名与信息页获取到的书名不一致,舍弃本书", 'error');
                        return;
                    } elseif ($zym_34 = M('novelsearch_info')->add($zym_49)) {
                        $this->progress("《{$zym_47['novelname']}》是新书，添加成功,书号:" . $zym_34);
                        $zym_11['siteid'] = $this->rule['siteid'];
                        $zym_11['id'] = $zym_34;
                    } else {
                        $this->progress("《{$zym_47['novelname']}》是新书，添加失败，跳过本书", 'error');
                        return;
                    }
                } else {
                    $this->progress("《{$zym_47['novelname']}》是新书，获取到本书信息不完整，跳过本书", 'error');
                    return;
                }
            } else {
                if ($zym_49 && $this->rule['newreplace']) {
                    $zym_49['chapternum'] = 0;
                    $zym_49['id'] = $zym_11['id'];
                    M('novelsearch_info')->edit($zym_49);
                    $this->progress("《{$zym_47['novelname']}》是老书，当前规则设置了更新信息，更新本书信息成功");
                }
            }
            $zym_6 = array('novelid' => $zym_11['id'], 'siteid' => $this->rule['siteid'], 'fromid' => $zym_47['novelid'], 'lastid' => $this->rule['checkdir'] && $this->rule['collectallchapter'] ? 0 : $zym_47['lastid'] - 1);
            if (false === M('novelsearch_log')->insert($zym_6)) {
                $this->progress("《{$zym_47['novelname']}》写日志失败!", 'error');
            }
        } else {
            $this->progress("《{$zym_47['novelname']}》获取日志采集进度成功");
        }
        if ($zym_47['lastid'] > $zym_6['lastid']) {
            $this->progress("《{$zym_47['novelname']}》开始更新最新章节信息");
            if ($this->rule['checkdir']) {
                $this->progress("《{$zym_47['novelname']}》进入目录页校验章节");
                $zym_24 = $this->collectdir($zym_47);
                if ($zym_24['status'] == 1 && !empty($zym_24['data'])) {
                    $zym_47['chapter'] = array();
                    foreach ($zym_24['data'] as $zym_21 => $zym_14) {
                        if ($zym_14['chapterid'] > $zym_6['lastid'] && $zym_14['chaptername'] && $zym_14['chapterurl']) {
                            $zym_47['chapter'][$zym_14['chapterid']] = $zym_14;
                        }
                    }
                    if (empty($zym_47['chapter']) && $zym_5 === false) {
                        $zym_47['chapter'][] = end($zym_24['data']);
                    }
                } else {
                    $this->progress('采集章节目录失败：' . $zym_47['dirurl'], 'error');
                    log::record('采集章节目录失败：' . $zym_47['dirurl']);
                    return;
                }
            }
            $this->progress("《{$zym_47['novelname']}》本次需要更新章节数" . count($zym_47['chapter']));
            if (empty($zym_47['chapter'])) {
                if (APP_DEBUG && $zym_6['lastid']) {
                }
                return;
            }
            $zym_23 = $this->model->get('novelsearch_info', $zym_6['novelid']);
            if (empty($zym_47['chapter'])) {
                return;
            }
            $zym_20 = $zym_19 = $zym_15 = array();
            $zym_19['novelid'] = $zym_6['novelid'];
            $zym_19['siteid'] = $zym_6['siteid'];
            foreach ($zym_47['chapter'] as $zym_14) {
                $zym_15 = $zym_14;
                $zym_19['name'] = trim(str_replace(array($zym_23['novel']['name'], $zym_23['author']['name']), '', $zym_14['chaptername']));
                $zym_19['url'] = $zym_14['chapterurl'];
                $zym_19['time'] = time();
                $zym_20[] = $zym_19;
            }
            $zym_16 = M('novelsearch_chapter')->addall($zym_20);
            if ($zym_16 === false) {
                $this->progress("《{$zym_47['novelname']}》写章节数据失败!" . M('novelsearch_chapter')->geterror(), 'error');
                return;
            }
            M('novelsearch_log')->where(array('novelid' => $zym_6['novelid'], 'siteid' => $zym_6['siteid'], 'fromid' => $zym_6['fromid']))->update(array('lastid' => $zym_15['chapterid']));
            $zym_11 = array('lastchapterid' => $zym_16, 'lastchaptername' => $zym_19['name'], 'lastsiteid' => $zym_19['siteid'], 'lastupdate' => time());
            if ($this->rule['addnew'] && dc::get('novelsearch_info', $zym_6['novelid'], 'source.siteid') == $zym_6['siteid']) {
                $zym_11['chaptersign'] = $zym_16;
            }
            M('novelsearch_info')->where(array('id' => $zym_6['novelid']))->update($zym_11);
            dc::rm('novelsearch_info', $zym_6['novelid']);
            $this->progress("《{$zym_47['novelname']}》更新完毕，更新日志、小说最新数据并清除缓存");
        } else {
            $this->progress("《{$zym_47['novelname']}》本次本书不需要更新");
        }
    }
    public function progress($zym_17, $zym_18 = 'success')
    {
        if (empty($_GET['backRun'])) {
            if ($zym_18 == 'success') {
                echo "<span style='color:green'>{$zym_17}</span><br />";
            } else {
                echo "<span style='color:red;font-weight: bold'>{$zym_17}</span><br>";
            }
            ob_flush();
            flush();
        } else {
            log::record($zym_17);
        }
    }
    public function collectchapter($zym_42)
    {
        if ($this->rule) {
            $zym_40 = $this->rule;
            if ($zym_40['url']) {
                $zym_42 = str_replace('[url]', urlencode($zym_42), $zym_40['url']);
            }
            $zym_7 = collect::getcontent($zym_42);
            $zym_38 = collect::getMatch($zym_40['rule'], $zym_7);
            $zym_38 = novel::chapterformat($zym_38);
            return $zym_38 ? $this->replacecontent($zym_38) : '';
        } else {
            return '';
        }
    }
    protected function replacecontent($zym_44)
    {
        $zym_45 = trim($this->config->get('content_replace', null, ''));
        if ($zym_45) {
            $zym_28 = explode("\n", $zym_45);
            foreach ($zym_28 as $zym_33) {
                $zym_33 = trim($zym_33);
                $zym_40 = explode('|||', $zym_33);
                if (!isset($zym_40['1'])) {
                    $zym_40['1'] = '';
                }
                $zym_44 = str_replace($zym_40['0'], $zym_40['1'], $zym_44);
            }
        }
        return $zym_44;
    }
}
?>