<?php
 class GreenController extends AdminController { public function init() { $this->tableName = 'rule_green'; $this->list = array(); parent::init(); } public function indexAction() { $this->list = $this->model->field('id,name,siteid,create_user_id,create_time,update_user_id,update_time')->order('id asc')->getlist(); $this->display(); } public function addAction() { if (IS_POST) { $_POST['create_user_id'] = $_SESSION['admin']['userid']; $_POST['create_time'] = NOW_TIME; if ($zym_7 = $this->model->insert($_POST)) { $this->success('添加成功', U('test', array('id' => $zym_7))); } else { $this->error('添加失败'); } } $this->sitelist = M('novelsearch_site')->where(array('status' => 1))->order('id asc')->getfield('id,name', true); $this->display(); } public function editAction() { $this->id = I('request.id', 'int', 0); if (IS_POST) { $_POST['update_user_id'] = $_SESSION['admin']['userid']; $_POST['update_time'] = NOW_TIME; if ($this->model->update($_POST)) { $this->success('修改成功', U('test', array('id' => $_POST['id']))); } else { $this->error('修改失败'); } } $this->sitelist = M('novelsearch_site')->where(array('status' => 1))->order('id asc')->getfield('id,name', true); $this->display(); } public function testAction() { $zym_6=$this->input->request('url','url',''); $zym_7=$this->input->request('id','int'); if ($zym_6){ $zym_5=$this->model->test($zym_7,$zym_6); $this->view->set('con',$zym_5); } $this->view->set('url',$zym_6); $this->view->set('id',$zym_7); $this->display(); } public function ajaxAction() { $zym_7 = I('request.id', 'int', 0); $zym_8 = $this->model->geteditinfo($zym_7); $this->ajax($zym_8); } }
?>