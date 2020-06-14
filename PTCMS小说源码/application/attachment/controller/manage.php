<?php
class ManageController extends AdminController {
    public function init() {
        $this->tableName = 'attachment';
        C('storage_path', C('upload_path', null, 'uploads'));
        parent::init();
    }
    public function indexAction() {
        $zym_5 = $this->_parsemap();
        $this->page = I('request.page', 'int', 1);
        $this->pagesize = C('admin_pagesie', null, 20);
        $this->list = $this->model->where($zym_5)->page($this->page)->limit($this->pagesize)->getlist();
        $this->totalnum = $this->model->where($zym_5)->count();
        $this->pagenum = ceil($this->totalnum / $this->pagesize);
        if (IS_AJAX) {
            $this->ajax(array(
                'data' => $this->list,
                'totalnum' => $this->totalnum,
                'pagenum' => $this->pagenum
            ));
        } else {
            $this->display();
        }
    }
}
?>
