<?php /* -- enphp : https://www.downzz.com
-- enphp : https://git.oschina.net/mz/mzphp2
 */ error_reporting(E_ALL^E_NOTICE);define('���', '�');�������Î��֝���;$_SERVER[���] = explode('|||', gzinflate(substr('�      eR�N�0���/8!�^����M�6RW��j�~<��i�8T{<S?r������cX֧��l7�"Ȇu4/�X����iR��8��*�Y5�	����~�<��4�/��-L#cJ*B��.�
�_�J�i�y�AԖ�����&����{d�����t�xg��U�9����c^(l=��Gu�,;�+��K%��$i��j�{��Lsc3s�c�I�¸hs�a�5L���)	s��3	HNv�>
S����wn#�P���z��3տ�Ce1�^�i͆�Iu���~f��  ',0x0a, -8)));�����̆���ފ���������ܾ�՝�ܓ����Ա��������������������������ߒ�����Գ����Ӎ��Î���֧����������Ɵ���֧֝�����������۟������˓��������;
 class Collect_OpModel extends Collect_BaseModel{protected $rules;public function reorder($��,$��,$���=true){$ّ�=&$_SERVER{���};static $ᶅ�,$矵,$�����;�ĝ�����폒�����Ѝ���ցϗ�������ʳ����������Ϸ��ȑ���ظ�������������Ԭ׿����ɼ�;if(!$ᶅ�){$ᶅ�=new $ّ�[0]();$矵=new $ّ�{0x001}();$�����=new $ّ�[0x0002]();}$���=$this->model->$ّ�{0x00003}($ّ�[0x000004],$��);$��=$���[$ّ�{0x05}][$ّ�[0x006]];����ؖ��������������ۋ;$�=$ᶅ�->$ّ�{0x0007}([$ّ�[0x00008] =>$��])->$ّ�{0x000009}($ّ�[0x0a],!0);foreach($�� as $��){$�����=$this->$ّ�{0x00b}($��,$���);if($ّ�[0x000c]($�����[$ّ�[0x0a]],$�)){$this->$ّ�{0x0000d}("《{$��}》使用基准规则 {$�����[$ّ�[0x006]]}");�������Ґ�����������������̋�����鸇;$矵->$ّ�[0x00000e]($��);�������Ē������·�������ۻ�����;$��=$矵->$ّ�{0x0f}($ّ�[0x0010])->$ّ�{0x0007}([$ّ�[0x00008] =>$��,$ّ�[0x0a] =>$�����[$ّ�[0x0a]]])->$ّ�{0x00011}();�������������脿���كԜ�����������Ó�����������;$���=0;��ݜ�����������߅��֓�����׃𶟺������������;foreach($�� as $�){$���++;����������ʌ񆪠�����;$矵->$ّ�{0x0007}([$ّ�[0x0010] =>$�[$ّ�[0x0010]]])->$ّ�[0x000012]([$ّ�{0x0000013} =>$���]);�䩆������ʮ����ѯ�õ��ȉ�������;}if($�����[$ّ�[0x0a]]==$���[$ّ�[0x014]][$ّ�[0x0a]]){(new $ّ�{0x0015}())->$ّ�{0x0007}([$ّ�[0x0010] =>$��])->$ّ�[0x000012]([$ّ�[0x00016] =>$���]);}$ᶅ�->$ّ�{0x0007}([$ّ�[0x00008] =>$��,$ّ�[0x0a] =>$�����[$ّ�[0x0a]]])->$ّ�[0x000012]([$ّ�{0x0000013} =>$���]);$this->$ّ�{0x0000d}("《{$��}》使用基准规则 重排完毕,开始处理其他站点");$��=$矵->$ّ�{0x0f}($ّ�{0x000017})->$ّ�{0x0007}(array($ّ�[0x00008] =>$��,$ّ�[0x0a] =>$�����[$ّ�[0x0a]]))->$ّ�[0x0000018]($ّ�{0x019})->$ّ�{0x00011}();����ꐐ�������;foreach($� as $��){if($��==$�����[$ّ�[0x0a]])continue;$�=$矵->$ّ�{0x0f}($ّ�{0x000017})->$ّ�{0x0007}(array($ّ�[0x00008] =>$��,$ّ�[0x0a] =>$��))->$ّ�[0x0000018]($ّ�{0x019})->$ّ�{0x00011}();foreach($� as $�����=>$�){$�[$�����][$ّ�{0x0000013}]=0;���ܮ�ȿ��������������ꑀ����⤢����ʐ�Б�؈�Ⱦ�ě�Ӭ������ԅ�;}$�=$�����->$ّ�[0x001a]($�,$��,$���);$�=0;foreach($� as $�){if($�<$�[$ّ�{0x0000013}])$�=$�[$ّ�{0x0000013}];$矵->$ّ�{0x0007}([$ّ�[0x0010] =>$�[$ّ�[0x0010]]])->$ّ�[0x000012]([$ّ�{0x0000013} =>$�[$ّ�{0x0000013}]]);�������������޾��뒷̫�;}$ᶅ�->$ّ�{0x0007}([$ّ�[0x00008] =>$��,$ّ�[0x0a] =>$��])->$ّ�[0x000012]([$ّ�{0x0000013} =>$�]);���ɭ�������ɕ�ݠ�����ŭ�����̀ͨ��և��ɽ��;if($�����[$ّ�[0x0a]]==$���[$ّ�[0x014]][$ّ�[0x0a]]){(new $ّ�{0x0015}())->$ّ�{0x0007}([$ّ�[0x0010] =>$��])->$ّ�[0x000012]([$ّ�[0x00016] =>$�]);}$this->$ّ�{0x0000d}("《{$��}》站点({$��})处理完毕");}$this->$ّ�{0x0000d}("《{$��}》所有站点处理完毕");�����������˙���;return;}}$this->$ّ�{0x0000d}("<{$��}>没有发现与之匹配的基准规则,跳过",$ّ�{0x0001b});}public function recollect($����,$�����,$��){$�=&$_SERVER{���};static $��,$��痷,$�з��,$�;if(!$��){$��=new $�[0]();$��痷=new $�{0x001}();$�з��=new $�[0x00001c]($�����);$�=$this->$�{0x00b}($�����);}$����=$��->$�{0x0007}([$�[0x00008] =>$����,$�[0x0a] =>$�[$�[0x0a]]])->$�{0x000001d}();if($����){$��痷->$�[0x00000e]($����);if($��){$��痷->$�{0x0007}([$�[0x00008] =>$����,$�[0x0a] =>$�[$�[0x0a]],$�[0x01e] =>[$�{0x001f},$��]])->$�[0x00020]();}else{$��痷->$�{0x0007}([$�[0x00008] =>$����,$�[0x0a] =>$�[$�[0x0a]]])->$�[0x00020]();}$��->$�{0x0007}([$�[0x00008] =>$����,$�[0x0a] =>$�[$�[0x0a]]])->$�[0x000012]([$�{0x000021} =>0]);$this->$�{0x0000d}("<{$����}>清除数据成功,重新采集");$�з��->$�[0x0000022]($����[$�{0x023}],!1);��;}else{$this->$�{0x0000d}("<{$����}>没有使用{$�[$�[0x006]]}采集过,跳过",$�{0x0001b});�����������㣮�;}}public function updateinfo($ҁ�,$�){$��=&$_SERVER{���};static $���,$��,$�,$�;if(!$���){$���=new $��[0]();$��=new $��[0x00001c]($�);$�=$this->$��{0x00b}($�);$�=new $��{0x0015}();}$����=$���->$��{0x0007}([$��[0x00008] =>$ҁ�,$��[0x0a] =>$�[$��[0x0a]]])->$��{0x000001d}();if($����){$�=$�[$��[0x0024]];$�[$��{0x00025}]=$��[0x000026]([$��{0x0000027},$��[0x028]],[$����[$��{0x023}],$��{0x0029}($����[$��{0x023}])],$�[$��{0x00025}]);$���=$��->$��[0x0002a]($�);if($���[$��{0x00002b}]==0){$this->$��{0x0000d}("<{$ҁ�}>获取信息失败",$��{0x0001b});}$���=[$��[0x0010] =>$ҁ�];if(isset($_POST[$��[0x000002c]])){$���[$��{0x02d}]=$���[$��[0x002e]][$��{0x02d}];}if(isset($_POST[$��{0x0002f}])){$���[$��[0x000030]]=$���[$��[0x002e]][$��[0x000030]];}if(isset($_POST[$��{0x0000031}])){$���[$��[0x032]]=$���[$��[0x002e]][$��[0x032]];}if(isset($_POST[$��{0x0033}])&& isset($���[$��[0x002e]][$��[0x00034]])){$���[$��[0x00034]]=$���[$��[0x002e]][$��[0x00034]];}if($���){$�->$��{0x0007}([$��[0x0010] =>$ҁ�])->$��{0x000035}($���);$this->$��{0x0000d}("<{$ҁ�}>更新成功");}else{$this->$��{0x0000d}("<{$ҁ�}>没有要更新的内容");�����������ڣ����ʾ�;}}else{$this->$��{0x0000d}("<{$ҁ�}>没有使用{$�[$��[0x006]]}采集过,跳过",$��{0x0001b});}}public function getrule($Ŗ�,$漬ʗ=true){$����=&$_SERVER{���};static $�;if(!$�){$�=new $����[0x0000036]();}if(isset($this->rules[$Ŗ�])){return $this->rules[$Ŗ�];}else{return $this->rules[$Ŗ�]=$漬ʗ?$�->$����{0x00b}($Ŗ�):$�->$����{0x037}($Ŗ�);}}}?>