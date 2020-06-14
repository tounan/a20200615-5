<?php
class UserModel extends Model {
    public function checkInfo($zym_11, $zym_10) {
        if ($zym_13 = $this->where(array(
            'name' => $zym_11
        ))->field('id,name,password,salt,status')->find()) {
            if ($zym_13['password'] == md5(md5($zym_10) . $zym_13['salt'])) {
                $zym_9 = array(
                    'id' => $zym_13['id'],
                    'login_ip' => get_ip() ,
                    'login_time' => NOW_TIME,
                );
                $this->edit($zym_9);
                return $zym_13;
            }
        }
        return false;
    }
    public function add($zym_11, $zym_10) {
        $zym_13 = $this->where(array(
            'name' => $zym_11
        ))->getfield('id');
        if ($zym_13) {
            return '用户名已经存在';
        }
        $zym_17['name'] = $zym_11;
        $zym_17['salt'] = substr(md5(NOW_TIME) , 0, 6);
        $zym_17['password'] = md5(md5($zym_10) . $zym_17['salt']);
        $zym_17['reg_ip'] = $zym_17['login_ip'] = get_ip();
        $zym_17['reg_time'] = $zym_17['login_time'] = NOW_TIME;
        if ($zym_5 = $this->insert($zym_17)) {
            $this->setLoginStatus(array(
                'id' => $zym_5,
                'name' => $zym_17['name'],
                'password' => $zym_17['password']
            ));
            return $zym_5;
        } else {
            return '注册失败';
        }
    }
    public function edit($zym_9) {
        $zym_15 = $this->update($zym_9);
        if (!empty($zym_9['id'])) {
            dc::refresh('user', $zym_9['id']);
        }
        return $zym_15;
    }
    public function getlist() {
        $zym_16 = $this->select();
        foreach ($zym_16 as & $zym_14) {
            $zym_14['reg_time'] = date('Y-m-d H:i:s', $zym_14['reg_time']);
            $zym_14['login_time'] = date('Y-m-d H:i:s', $zym_14['login_time']);
            $zym_14['url_edit'] = U('user.manage.edit', array(
                'id' => $zym_14['id']
            ));
            $zym_14['url_mark'] = U('user.mark.index', array(
                'userid' => $zym_14['id']
            ));
        }
        return $zym_16;
    }
    public function setLoginStatus($zym_9) {
        cookie('userid', $zym_9['id']);
        cookie('username', $zym_9['name']);
        cookie('token', md5($zym_9['name'] . '----' . $zym_9['password']));
    }
    public function delLoginStatus() {
        cookie('userid', null);
        cookie('username', null);
        cookie('token', null);
    }
    public function checkLoginStatus() {
        if ($zym_5 = cookie('userid')) {
            $zym_13 = $this->get('user', $zym_5);
            if (cookie('token') == md5($zym_13['name'] . '----' . $zym_13['password']) && $zym_13['status'] == 1) {
                $zym_6 = date('Ymd', NOW_TIME);
                if ($zym_6 > $zym_13['login_day']) {
                    $zym_9['login_day'] = $zym_6;
                    $zym_9['id'] = $zym_13['id'];
                    if ($zym_6 == date('Ymd', strtotime('+1 day', strtotime($zym_13['login_day'])))) {
                        $zym_9['login_num'] = $zym_13['login_num'] + 1;
                    } else {
                        $zym_9['login_num'] = 1;
                    }
                    $this->edit($zym_9);
                    $zym_13 = array_merge($zym_13, $zym_9);
                }
                unset($zym_13['password'], $zym_13['salt']);
                return $zym_13;
            } else {
                $this->delLoginStatus();
            }
        }
        return false;
    }
    public function dataAppend($zym_13) {
        $zym_13['marklist'] = (new User_MarkModel())->getMarkInfo($zym_13['id']);
        $zym_13['marknum'] = ((new User_MarkModel())->getMarkNum($zym_13['marklist']));
        return $zym_13;
    }
    public function checkOpenid($zym_7, $zym_8) {
        $zym_8.= 'id';
        if ($zym_13 = M('user')->field('id,name,password')->where(array(
            $zym_8 => $zym_7
        ))->find()) {
            return $zym_13;
        }
        return false;
    }
    public function del($zym_12) {
        $this->where($zym_12)->delete();
        return true;
    }
}
?>
