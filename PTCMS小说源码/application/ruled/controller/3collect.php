<?php
class CollectController extends AdminController
{
	public function init()
	{
		parent::init();
		$this->list=array();
		$this->model=new ruledModel();
	}
	public function indexAction()
	{
		$this->list=$this->model->field('id,name,siteid,create_user_id,create_time,update_user_id,update_time')->order('id asc')->getlist();
		$this->display();
	}
	public function addAction()
	{
		if(IS_POST)
		{
			if($zym_22=$this->model->add($_POST))
			{
				$this->success('添加成功',U('test',array('id' =>$zym_22)));
			}
			else
			{
				$this->error('添加失败');
			}
		}
		$this->sitelist=M('novelsearch_site')->where(array('status' =>1,'isoriginal'=>2))->order('id asc')->getfield('id,name',true);
		$this->display();
	}
	public function editAction()
	{
		$this->id=I('request.id','int',0);
		if(IS_POST)
		{
			if($this->model->edit($_POST,['id' =>$this->id]))
			{
				$this->success('修改成功',U('test',array('id' =>$_POST['id'])));
			}
			else
			{
				$this->error('修改失败',$this->model->geterror());
			}
		}
		$this->sitelist=M('novelsearch_site')->where(array('status' =>1))->order('id asc')->getfield('id,name',true);
		$this->display();
	}
	public function ajaxAction()
	{
		$zym_22=I('request.id','int',0);
		$zym_24=$this->model->geteditinfo($zym_22);
		$this->ajax($zym_24);
	}
	public function testAction()
	{
		ob_start();
		$zym_22=I('request.id','int',0);
		if($zym_22)
		{
			$zym_16=new collectModel($zym_22);
			$zym_16->test();
		}
		else
		{
			$this->error('找不到指定的规则');
		}
	}
	public function runAction()
	{
		$this->id=I('request.id','int',0);
		if(IS_POST)
		{
			if(!$this->id)
			{
				$this->error('请选择规则');
			}
			$zym_18=I('interval','int',30);
			if(empty($_POST['status']))
			{
				$this->redirect($this->config->get('cronurl',$this->config->get('siteurl')).U('ruled.collect.go',array('id' =>$this->id,'interval' =>$zym_18)));
			}
			$zym_27=M('cron')->where(array('action' =>'cron.task.down','param' =>$this->id))->find();
			if($zym_27)
			{
				$this->error('规则已经在计划任务中了');
			}
			else
			{
				$zym_24=$this->model->field('name')->find($this->id);
				if($zym_18==0)
				{
					$zym_18=1;
				}
				$zym_26=array('name' =>$zym_24['name'],'action' =>'cron.task.down','param' =>$this->id,'interval' =>$zym_18);
				if(M('cron')->add($zym_26))
				{
					$this->success('处理成功',U('cron.manage.index'));
				}
				else
				{
					$this->error('处理失败');
				}
			}
		}
		$this->list=$this->model->field('id,name')->order('id asc')->select();
		$this->display();
	}
	public function goAction()
	{
		ob_start();
		$zym_19=I('request.interval','int',0);
		$zym_20=$this->input->request('id');
		$zym_16=new CollectModel($zym_20);
		$zym_16->collectlist();
		exit;
		if($zym_19>0)
		{
			$zym_19*= 1000;
			$this->show('<script type="text/javascript">setTimeout(function(){window.location.href="' .__SELF__.'";},' .$zym_19.')</script>');
		}
	}
	public function listAction()
	{
		$this->ruleid=$zym_20=$this->input->request('id');
		if(isset($_GET['startid']))
		{
			$zym_26=['id' =>$zym_20,'startid' =>$this->input->request('startid','int',1),'endid' =>$this->input->request('endid','int',0),'interval' =>$this->input->request('interval','int',10),'url' =>$this->input->request('url','str',''),'runid' =>$this->input->request('runid','int',1)];
			if(!$zym_26['endid'])
			{
				$zym_26['endid']=$zym_26['startid'];
			}
			if($zym_26['runid']<$zym_26['startid'])
			{
				$zym_26['runid']=$zym_26['startid'];
			}
			if($zym_26['runid']>$zym_26['endid'])
			{
				$this->success('采集完成','',0);
			}
			if(!$zym_20)
			{
				$this->error('请选择规则');
			}
			$zym_16=new CollectModel($zym_20);
			$zym_16->collectlist($zym_26['url'],$zym_26['runid']);
			$zym_26['runid']++;
			$this->show('<script type="text/javascript">setTimeout(function(){window.location.href="' . U('rule.collect.list', $zym_26) . '";},' . $zym_26['interval'] * 1000 . ')</script>');
		}
		else 
		{
			$this->list=$this->model->field('id,name')->order('id asc')->select();
			$this->display();
		}
	}
	public function idAction()
	{
		$this->ruleid=$zym_20=$this->input->request('id');
		if(isset($_GET['startid']))
		{
			$zym_15=$this->input->request('startid','str',1);
			$zym_17=$this->input->request('endid','int',0);
			if(!$zym_20)
			{
				$this->error('请选择规则');
			}
			if(!$zym_15)
			{
				$this->error('请输入起始书号');
			}
			$zym_16=new CollectModel($zym_20);
			if(!$zym_17)
			{
				$zym_16->collectidone($zym_15);
			}
			else
			{
				$zym_12=$this->input->request('runid','int',$zym_15);
				if($zym_12<$zym_15)
				{
					$zym_12=$zym_15;
				}
				$zym_7=$this->input->request('limit','int',100);
				$zym_18=$this->input->request('interval','int',10);
				if($zym_12>$zym_17)
				{
					$this->success('采集完成','',0);
				}
				$zym_6=$zym_12+$zym_7;
				if($zym_6>$zym_17)
				{
					$zym_6=$zym_17+1;
				}
				$zym_16->collectid($zym_12,$zym_6);
				$zym_12=$zym_6;
				$this->show('<script type="text/javascript">setTimeout(function(){window.location.href="' .U('ruled.collect.id',['id' =>$zym_20,'startid' =>$zym_15,'endid' =>$zym_17,'limit' =>$zym_7,'interval' =>$zym_18,'runid' =>$zym_12]) . '";},' . $zym_18 * 1000 . ')</script>');
			}
		}
		else
		{
			$this->list=$this->model->field('id,name')->order('id asc')->select();
			$this->display();
		}
	}
	public function updateinfoAction()
	{
		if($this->request->isPost())
		{
			$zym_5=$this->getnovelids();
			$zym_25=[];
			$zym_25['id']=['in',$zym_5];
			if(isset($_POST['emptycover']))
			{
				$zym_25['cover']='';
			}
			if(isset($_POST['emptyintro']))
			{
				$zym_25['intro']='';
			}
			$zym_20=$this->input->post('ruleid');
			$zym_5=(new NovelSearch_infoModel())->where($zym_25)->getField('id',true);
			$zym_8=new Collect_OpModel();
			foreach($zym_5 as $var_1755)
			{
				$zym_8->updateinfo($var_1755,$zym_20);
			}
		}
		else
		{
			$this->rulelist=$this->model('rule')->field('id,name')->order('id asc')->select();
			$this->display();
		}
	}
	public function reAction()
	{
		if($this->request->isPost())
		{
			$zym_5=$this->getnovelids();
			$zym_20=$this->input->post('ruleid');
			$zym_13=$this->input->post('chapter');
			if($zym_13)
			{
				$zym_13=[$this->input->get('chapterstarttime',time,0),$this->input->get('chapterendtime',time,0)];
			}
			$zym_8=new Collect_OpModel();
			foreach($zym_5 as $zym_14)
			{
				if($zym_14)
				{
					$zym_8->recollect($zym_14,$zym_20,$zym_13);
				}
			}
		}
		else
		{
			$this->rulelist=$this->model('rule')->field('id,name')->order('id asc')->select();
			$this->display();
		}
	}
	public function reorderAction()
	{
		if($this->request->isPost())
		{
			$zym_5=$this->getnovelids();
			$zym_9=[$this->input->post('ruleid1'),$this->input->post('ruleid2'),$this->input->post('ruleid3')];
			$zym_9=array_unique(array_filter($zym_9,function($zym_23)
			{
				return $zym_23>0;
			}
			));
			$zym_8=new Collect_OpModel();
			foreach($zym_5 as $zym_14)
			{
				if($zym_14)
				{
					$zym_8->reorder($zym_14,$zym_9);
				}
			}
		}
		else
		{
			$this->rulelist=$this->model('rule')->field('id,name')->order('id asc')->select();
			$this->display();
		}
	}
	protected function getnovelids()
	{
		switch($this->input->post('type'))
		{
			case 0:$zym_14=$this->input->post('novelid');
			if(!$zym_14)
			{
				$this->error('未获取到书号');
			}
			return [$zym_14];
			case 1:$zym_5=explode('|',$this->input->post('novelids','str',''));
			if(!$zym_5)
			{
				$this->error('未获取到书号');
			}
			return $zym_5;
			case 2:$zym_15=$this->input->post('startid','int',0);
			$zym_17=$this->input->post('endid','int',0);
			if($zym_15==0|| $zym_15>$zym_17)
			{
				$this->error('书号范围有误');
			}
			$zym_5=[];
			for($zym_21=$zym_15;$zym_21<=$zym_17;$zym_21++)
			{
				$zym_5[]=$zym_21;
			}
			return $zym_5;
			case 3:$zym_11=strtotime($this->input->post('startupdatetime','str'));
			$zym_10=strtotime($this->input->post('endupdatetime','str'));
			if($zym_11==0|| $zym_11>$zym_10)
			{
				$this->error('书号范围有误');
			}
			$zym_5=(new NovelSearch_infoModel())->where(['lastupdate' =>['bwtween',[$zym_11,$zym_10]]])->getField('novelid',true);
			if(!$zym_5)
			{
				$this->error('未获取到书号');
			}
			return $zym_5;
			case 4:$zym_11=strtotime($this->input->post('startupdatetime','str'));
			$zym_10=strtotime($this->input->post('endupdatetime','str'));
			if($zym_11==0|| $zym_11>$zym_10)
			{
				$this->error('书号范围有误');
			}
			$zym_5=(new NovelSearch_infoModel())->where(['lastupdate' =>['bwtween',[$zym_11,$zym_10]]])->getField('novelid',true);
			if(!$zym_5)
			{
				$this->error('未获取到书号');
			}
			return $zym_5;
		}
	}
}
?>