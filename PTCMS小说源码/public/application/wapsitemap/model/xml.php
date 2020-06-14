<?php
class xmlModel {
    public function xml_encode($zym_13, $zym_12 = 'ptcms', $zym_14 = '', $zym_15 = 'utf-8') {
        if (is_array($zym_14)) {
            $zym_11 = array();
            foreach ($zym_14 as $zym_16 => $zym_8) {
                $zym_11[] = "{$zym_16}=\"{$zym_8}\"";
            }
            $zym_14 = implode(' ', $zym_11);
        }
        $zym_14 = trim($zym_14);
        $zym_14 = empty($zym_14) ? '' : " {$zym_14}";
        $zym_5 = "<?xml version=\"1.0\" encoding=\"{$zym_15}\"?>";
        $zym_5.= "<{$zym_12}{$zym_14}>";
        $zym_5.= $this->data_to_xml($zym_13);
        $zym_5.= "</{$zym_12}>";
        return preg_replace('/[\x00-\x1f]/', '', $zym_5);
    }
    protected function data_to_xml($zym_13, $zym_6 = '') {
        $zym_5 = '';
        foreach ($zym_13 as $zym_16 => $zym_10) {
            if (is_numeric($zym_16)) {
                $zym_16 = $zym_6;
            }
            $zym_5.= "<{$zym_16}>";
            if (is_array($zym_10) || is_object($zym_10)) {
                $zym_9 = strlen("<{$zym_16}>");
                $zym_7 = $this->data_to_xml($zym_10, $zym_16);
                if (strpos($zym_7, "<{$zym_16}>") === 0) {
                    $zym_7 = substr($zym_7, $zym_9, -($zym_9 + 1));
                }
                $zym_5.= $zym_7;
            } elseif (strlen($zym_10) > 150 || preg_match('{[<>&\'|"]+}', $zym_10)) {
                $zym_5.= '<![CDATA[' . $zym_10 . ']]>';
            } else {
                $zym_5.= $zym_10;
            }
            $zym_5.= "</{$zym_16}>";
        }
        return $zym_5;
    }
}
?>
