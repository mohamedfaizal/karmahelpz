<?php
///////////////////////////////////////////////////////////////////////////////
// FORM CREATED WITH ARCLAB WEB FORM BUILDER 4.4
// COPYRIGHT 2015, ARCLAB SOFTWARE http://www.arclab.com
// FILE FORMAT: UTF-8 WITHOUT BOM
// DO NOT EDIT THE CODE BELOW!
///////////////////////////////////////////////////////////////////////////////
// SET ERROR REPORTING LEVEL
error_reporting(E_ERROR);
///////////////////////////////////////////////////////////////////////////////
// CHECK PHP VERSION
if(!function_exists('phpversion'))die('PHP version 5 (or higher) required!');
if(version_compare(phpversion(),'5.0.0','<'))die('PHP version 5 required. Detected: '.phpversion());
///////////////////////////////////////////////////////////////////////////////
// CHECK FOR GD EXTENSION AND MBSTRING
if(!function_exists('gd_info'))die('PHP GD extension not installed!');
if(!function_exists('mb_strpos'))die('PHP mbstring not enabled!');
mb_internal_encoding('UTF-8');
///////////////////////////////////////////////////////////////////////////////
// FILTER-FUNCTION USED FOR GET/POST
function A_2F84($a)
{
if(mb_detect_encoding($a)=="UTF-8"&&mb_check_encoding($a,"UTF-8")) 
return $a; 
else 
return utf8_encode($a); 
}
function A_2F7F($a)
{
if(is_array($a))
{$num=count($a);
for($x=0;$x<$num;$x++)$a[$x]=htmlspecialchars(A_2F84($a[$x]),ENT_QUOTES,'UTF-8');
return $a;}
else
{$b=htmlspecialchars(A_2F84($a),ENT_QUOTES,'UTF-8');
return trim($b);}
}
///////////////////////////////////////////////////////////////////////////////
// FILTER-FUNCTION AGAINST MAIL HEADER INJECTION
function A_2F70($a)
{
$b=htmlspecialchars_decode($a,ENT_QUOTES);
$r=array('/(\n+)/i','/(\r+)/i','/(\t+)/i','/(%0A+)/i','/(%0D+)/i','/(%08+)/i','/(%09+)/i');
$b=preg_replace($r,'',$b);
return $b;
}
///////////////////////////////////////////////////////////////////////////////
// VALUE OUTPUT
function A_2FD4($a)
{
if(is_array($a))$a=implode(',',$a);
return $a;
}
///////////////////////////////////////////////////////////////////////////////
// EMAIL SYNTAX CHECK
function A_2FAB($a)
{
return preg_match('/^[A-Z0-9._%-]+@[A-Z0-9][A-Z0-9.-]{0,61}[A-Z0-9]\.[A-Z]{2,6}$/i',$a);
}
///////////////////////////////////////////////////////////////////////////////
// SESSION
$A_2F9A=session_id();
if(empty($A_2F9A))
{
if(isset($_GET['sid'])){$A_2F9A=A_2F7F($_GET['sid']); session_id($A_2F9A);}
session_start();
if(empty($A_2F9A))$A_2F9A=session_id();
}
$A_2F81="";
foreach ($_GET as $A_2FD9 => $A_2FA8)
{if ($A_2FD9!="sid") $A_2F81.="&amp;".A_2F7F($A_2FD9)."=".A_2F7F($A_2FA8);}
$A_2F8B=A_2F7F($_SERVER['SCRIPT_NAME'])."?sid=".$A_2F9A.$A_2F81;
$A_2F99=0;
$A_2F8A=A_2F7F(str_replace(rtrim(str_replace("\\","/",$_SERVER['DOCUMENT_ROOT']),"/"),"",str_replace("\\","/",__FILE__)))."?sid=".$A_2F9A;
if(A_2FD7($A_2F8A,dirname(str_replace("\\","/",__FILE__)))!==false) $A_2F8A=A_2F7F(basename(str_replace("\\","/",__FILE__)))."?sid=".$A_2F9A;
///////////////////////////////////////////////////////////////////////////////
// PHP UTF-8 SUPPORT
function A_2FD2($a)
{return mb_strlen($a,'UTF-8');}
function A_2FD7($a,$b)
{return mb_strpos($a,$b,0,'UTF-8');}
///////////////////////////////////////////////////////////////////////////////
function A_2FF6()
{
$A_2FC9=$GLOBALS["A_2F8B"];
echo "
<!--*************** START Arclab Web Form Builder CSS ***************-->
<style type=\"text/css\">
#arclabwfb *,#arclabwfb *:before,#arclabwfb *:after { white-space:normal; position:relative; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box }
#arclabwfb p { margin:0; padding:0; }
#arclabwfb hr { height:1px; border:none; color:#000; background-color:#000; margin:0; padding:0; }
.aft { border:0; border-spacing:0; border-collapse:collapse; padding:0; font-family:Arial, Helvetica, sans-serif; font-size:15px; width:800px; margin:0 auto; }
.aft-rowsp { margin:0; padding:0; height:10px; }
.aft-spc { margin:0; padding:5px 0 0 0; }
.aft-spbo { margin:0; padding:0 0 5px 0; }
.aft-spv { margin:0; padding:0; height:5px; }
.aft-error { margin:0; padding:5px 0 0 0; color:#FF6600;}
.aft2 { margin:0; padding:0; border:0; border-spacing:0; border-collapse:collapse; font-family:Arial, Helvetica, sans-serif; font-size:100%; width:100%; }
.afl { margin:0; padding:0; font-family:inherit; font-size:inherit; width:20%; text-align:left; vertical-align:top; }
.afl-lab { }
.afl2 { margin:0; font-family:inherit; font-size:inherit; text-align:left; vertical-align:top; }
.afr { margin:0; padding:0; font-family:inherit; font-size:inherit; width:80%; text-align:left; vertical-align:top; }
.afr2 { margin:0; padding:0; font-family:inherit; font-size:inherit; text-align:left; vertical-align:top; }
.afi { margin:0; font-family:inherit; font-size:inherit; padding:2px; border:1px solid #707070; }
.afi-drop { margin:0; font-family:inherit; font-size:inherit; padding:1px; border:1px solid #707070; }
.afi2 { margin:0; font-family:inherit; }
.afi-b1 { margin:0px 5px 0px 0px; font-family:inherit; font-size:inherit; }
.afi-b2 { margin:0px 5px 0px 0px; font-family:inherit; font-size:inherit; }
.afi-b3 { margin:0px 5px 0px 0px; font-family:inherit; font-size:inherit; }
.afi-b4 { margin:0px 5px 0px 0px; font-family:inherit; font-size:inherit; }
.afi-cht { display:table; }
.afi-chl { display:table-cell; float:left; vertical-align:top; }
.afi-chr { display:table-cell; clear:both; vertical-align:top; }
.afi-el { margin: 2px 5px 0 0; vertical-align:top; }
.afi-en { margin: 2px 5px 0 5px; vertical-align:top; }
</style>
<!--*************** END - Arclab Web Form Builder CSS ***************-->
<!--*************** Form made with Arclab Web Form Builder 4.4 - Testversion ***************-->
<form action=\"$A_2FC9\" method=\"post\" enctype=\"multipart/form-data\">
<div id=\"arclabwfb\" style=\"text-align:center;\">
<table class=\"aft\">
";}
function A_2FEF()
{echo "</table>
<script type=\"text/javascript\">
function af_htmlencode(af_str)
{
var af_ret=af_str;
af_ret=af_ret.replace(/&/g,'&amp;');
af_ret=af_ret.replace(/</g,'&lt;');
af_ret=af_ret.replace(/>/g,'&gt;');
af_ret=af_ret.replace(/\"/g,'&quot;');
af_ret=af_ret.replace(/'/g,'&#39;');
af_ret=af_ret.replace(/(?:\\r\\n|\\r|\\n)/g, '<br />');
return af_ret;
}
function af_update(af_name,af_type)
{
var af_sfid = \"afid_\"+af_name+\"_afid\";
var af_ob = document.getElementsByTagName(\"*\");
var af_out=\"\";
switch (af_type)
{
case 1:
{
var af_ele=document.getElementsByName(af_name+\"[]\");
for (var z=0;z<af_ele.length;z++)
{
if (af_ele[z].checked)
{
if(af_out!=\"\")af_out+=\",\"; af_out+=af_ele[z].value;
}}
}
break;
default:
{
var af_ele=document.getElementsByName(af_name);
for (var z=0;z<af_ele.length;z++)
{
if(af_out!=\"\")af_out+=\",\";
af_out+=af_ele[z].value;
}}
break;
}
for (var i=0; i<af_ob.length;i++)
{
var af_id=af_ob[i].id;
if (af_id.search(af_sfid)!=-1)
{
document.getElementById(af_id).innerHTML=af_htmlencode(af_out);
}}
}
</script>
</div>
</form>
<!--*************** Form made with Arclab Web Form Builder 4.4 - Testversion ***************-->
";}
// --- ARCLAB WEBFORM CLASSES ---
class A_2FF0
{
public $A_2FF1='';
public $A_2FE5='';
public $A_2F98='';
public $A_2FF2='';
public $A_2F7C='';
public $A_2F79='';
public $A_2F67=false;
public $A_2F5F='';
public $A_2F9F='';
public $A_2FD5='';
public $A_2FDB='';
public $A_2FD3='';
public $A_2FDD='';
public $A_2FDE='';
public $A_2FE4='';
public $A_2FE1='';
public $A_2FD1='';
public $A_2FAF='';
public $A_2FA9='';
public $A_2FCB='';
public $A_2FB2='';
public $A_2FB6='';
public $A_2FC0='';
public $A_2FED=0;
public $A_2FE6=0;
public $A_2FE9=0;
public $A_2FEC=0;
public $A_2FEB=0;
public $A_2FEA=0;
public $A_2FE7=0;
public $A_2FEE=0;
public $A_2FE3=0;
public $A_2FD0=0;
public $A_2FE2=0;
public $A_2FE0=0;
public $A_2FDA=0;
public $A_2FDC=0;
public $A_2FA7=0;
public $A_2F9E=0;
public $A_2FA1=0;
public $A_2FA6=0;
public $A_2F9B=0;
public $A_2F90=array();
public $A_2F97=array();
public function A_2FBA(){return false;}
public function A_2F66(){$this->A_2FF3 ($this->A_2FBA());}
public function A_2F7B ()
{
$af_label=""; $af_input="";
if ($this->A_2FE3==1) {$af_label=" style=\"text-align:left;\""; $af_input=" style=\"text-align:left;\"";}
if ($this->A_2FE3==2) {$af_label=" style=\"text-align:left;\""; $af_input=" style=\"text-align:center;\"";}
if ($this->A_2FE3==3) {$af_label=" style=\"text-align:left;\""; $af_input=" style=\"text-align:right;\"";}
if ($this->A_2FE3==4) {$af_label=" style=\"text-align:center;\""; $af_input=" style=\"text-align:left;\"";}
if ($this->A_2FE3==5) {$af_label=" style=\"text-align:center;\""; $af_input=" style=\"text-align:center;\"";}
if ($this->A_2FE3==6) {$af_label=" style=\"text-align:center;\""; $af_input=" style=\"text-align:right;\"";}
if ($this->A_2FE3==7) {$af_label=" style=\"text-align:right;\""; $af_input=" style=\"text-align:left;\"";}
if ($this->A_2FE3==8) {$af_label=" style=\"text-align:right;\""; $af_input=" style=\"text-align:center;\"";}
if ($this->A_2FE3==9) {$af_label=" style=\"text-align:right;\""; $af_input=" style=\"text-align:right;\"";}
if (empty($this->A_2FA9)) echo"<tr><td class=\"afl afl-lab\"$af_label>$this->A_2F7C</td><td class=\"afr\"$af_input>";
if ($this->A_2FA9=='TOPLEFT') echo"<tr><td colspan=\"2\" class=\"afl2 aft-spbo\"$af_label>$this->A_2F7C</td></tr><tr><td colspan=\"2\" class=\"afr\"$af_input>";
if ($this->A_2FA9=='TOPC') echo"<tr><td class=\"afl\">&nbsp;</td><td class=\"afl2 aft-spbo\"$af_label>$this->A_2F7C</td></tr><tr><td class=\"afl\">&nbsp;</td><td class=\"afr\"$af_input>";
if ($this->A_2FA9=='HIDELEFT') echo"<tr><td colspan=\"2\" class=\"afr2\"$af_input>";
if ($this->A_2FA9=='HIDEC') echo"<tr><td class=\"afl\">&nbsp;</td><td class=\"afr\"$af_input>";
}
public function A_2F73($htm)
{
$v="<span id=\"afid_NAme_afid_".$GLOBALS['A_2F99']."\">".A_2FD4($GLOBALS['A_2F88'])."</span>";$htm=str_replace("[NAme]",$v,$htm);$GLOBALS['A_2F99']++;
$v="<span id=\"afid_emailid_afid_".$GLOBALS['A_2F99']."\">".A_2FD4($GLOBALS['A_2F1E'])."</span>";$htm=str_replace("[emailid]",$v,$htm);$GLOBALS['A_2F99']++;
$v="<span id=\"afid_Choose_what_to_donate_afid_".$GLOBALS['A_2F99']."\">".A_2FD4($GLOBALS['A_2F1E'])."</span>";$htm=str_replace("[Choose_what_to_donate]",$v,$htm);$GLOBALS['A_2F99']++;
$v="<span id=\"afid_Blood_GROUP_afid_".$GLOBALS['A_2F99']."\">".A_2FD4($GLOBALS['A_2F1E'])."</span>";$htm=str_replace("[Blood_GROUP]",$v,$htm);$GLOBALS['A_2F99']++;
return $htm;
}}
class A_2FC1 extends A_2FF0
{
public function A_2FBA()
{
$A_2F72=false;
$A_2F71=false;
$len=A_2FD2($this->A_2FE5);
if ($len==0&&$this->A_2F67)$A_2F71=true;
if ($this->A_2FE9==1)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if($this->A_2FE6!=0){if($len<$this->A_2FE6)$A_2F72=true;}
if($this->A_2FED!=0){if($len>$this->A_2FED)$A_2F72=true;}
if ($this->A_2F67==false&&$len==0)$A_2F72=false;
if($A_2F72||$A_2F71)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F72=false;
$A_2F71=false;
$len=A_2FD2($this->A_2FE5);
if ($len==0&&$this->A_2F67)$A_2F71=true;
if ($this->A_2FE9==1)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if($this->A_2FE6!=0){if($len<$this->A_2FE6)$A_2F72=true;}
if($this->A_2FED!=0){if($len>$this->A_2FED)$A_2F72=true;}
if ($this->A_2F67==false&&$len==0)$A_2F72=false;
$value=$this->A_2FE5;
$this->A_2F7B ();
echo"<input type=\"text\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$value\" class=\"afi\" style=\"width:$this->A_2FDB;\"";
if($this->A_2FED!=0)echo" maxlength=\"$this->A_2FED\"";
echo" />";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
if($A_2F89&&$A_2F72&&$A_2F71==false)echo"<div class=\"aft-error\">$this->A_2F9F</div>";
echo"</td></tr>\n";
}}
class A_2FCE extends A_2FF0
{
public function A_2FBA()
{
if (!$this->A_2F67) return false;
if (empty($this->A_2FE5)) return true;
return false;
}
public function A_2FF3 ($A_2F89)
{
$value=$this->A_2FE5;
$this->A_2F7B ();
echo"<textarea rows=\"$this->A_2FED\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" class=\"afi\" style=\"width:$this->A_2FDB;white-space:pre-wrap;\">$value</textarea>";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FCD extends A_2FF0
{
public function A_2FBA()
{
if (!$this->A_2F67&&empty($this->A_2FE5)&&empty($this->A_2FDD)) return false;
$A_2F71=empty($this->A_2FE5);
$A_2F89=false;
if($this->A_2FED==1&&$this->A_2FE5!=$this->A_2FDD)$A_2F89=true;
$len=A_2FD2($this->A_2FE5);
if($this->A_2FE6>0&&$len<$this->A_2FE6)$A_2F89=true;
if($this->A_2FE9>0&&$len>$this->A_2FE9)$A_2F89=true;
for ($i=0;$i<$len;$i++){if(A_2FD7($this->A_2FD5,$this->A_2FE5[$i])===FALSE)$A_2F89=true;}
if($A_2F89||$A_2F71)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$A_2F72=false;
if (empty($this->A_2FE5)&&empty($this->A_2FDD)) $A_2F71=true;
if($this->A_2FED==1 && $this->A_2FE5!=$this->A_2FDD) $A_2F72=true;
$len=A_2FD2($this->A_2FE5);
if($this->A_2FE6>0&&$len<$this->A_2FE6)$A_2F72=true;
if($this->A_2FE9>0&&$len>$this->A_2FE9)$A_2F72=true;
for ($i=0;$i<$len;$i++){if(A_2FD7($this->A_2FD5,$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
$this->A_2F7B ();
echo"<input type=\"password\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FE5\" class=\"afi\" style=\"width:$this->A_2FD3;\"";
if($this->A_2FE9!=0)echo" maxlength=\"$this->A_2FE9\"";
echo" />";
if($this->A_2FED==1)
{echo"<div class=\"aft-spc\">$this->A_2FDB</div>";
echo"<div class=\"aft-spc\"><input type=\"password\" name=\"$this->A_2FF1"."_RET"."\" value=\"$this->A_2FDD\" class=\"afi\" style=\"width:$this->A_2FD3;\"";
if($this->A_2FE9!=0)echo" maxlength=\"$this->A_2FE9\"";
echo" /></div>";}
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
if($A_2F89&&$A_2F72&&$A_2F71==false)echo"<div class=\"aft-error\">$this->A_2F9F</div>";
echo"</td></tr>\n";
}}
class A_2FBE extends A_2FF0
{
public function A_2FBA()
{
if (!$this->A_2F67&&empty($this->A_2FE5)&&empty($this->A_2FDD)) return false;
$A_2F71=empty($this->A_2FE5);
$A_2F72=false;
if($this->A_2FED==1&&$this->A_2FE5!=$this->A_2FDD)$A_2F72=true;
if (!A_2FAB($this->A_2FE5))$A_2F72=true;
if($A_2F72||$A_2F71)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$A_2F72=false;
if (empty($this->A_2FE5)&&empty($this->A_2FDD)) $A_2F71=true;
if($this->A_2FED==1&&$this->A_2FE5!=$this->A_2FDD)$A_2F72=true;
if (!A_2FAB($this->A_2FE5))$A_2F72=true;
$this->A_2F7B ();
echo"<input type=\"text\" maxlength=\"255\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FE5\" class=\"afi\" style=\"width:$this->A_2FDB;\" />";
if($this->A_2FED==1){echo"<div class=\"aft-spc\">$this->A_2FD5</div><div class=\"aft-spc\"><input type=\"text\" maxlength=\"255\" name=\"$this->A_2FF1"."_RET"."\" value=\"$this->A_2FDD\" class=\"afi\" style=\"width:$this->A_2FDB;\" /></div>";}
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
if($A_2F89&&$A_2F72&&$A_2F71==false)echo"<div class=\"aft-error\">$this->A_2F9F</div>";
echo"</td></tr>\n";
}}
class A_2FC4 extends A_2FF0
{
public function A_2FBA()
{
$this->A_2FE5=str_replace(",",".",$this->A_2FE5);
$A_2F72=false;
if (substr_count($this->A_2FE5,".")>1) $A_2F72=true;
$len=A_2FD2($this->A_2FE5);
if($this->A_2FED==0)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('+-.0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if($this->A_2FED==1)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('+-.0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
if ($this->A_2FE5!=round($this->A_2FE5,2))$A_2F72=true;
}
if($this->A_2FED==2)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('.0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
if ($this->A_2FE5!=round($this->A_2FE5,2))$A_2F72=true;
}
if($this->A_2FED==3)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if($this->A_2FED==4)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('+-0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if($this->A_2FA7!=0){if($this->A_2FE5<$this->A_2FA7)$A_2F72=true;}
if($this->A_2F9E!=0){if($this->A_2FE5>$this->A_2F9E)$A_2F72=true;}
if ($this->A_2FEC==1) $this->A_2FE5=str_replace(".",",",$this->A_2FE5);
if($A_2F72)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$this->A_2FE5=str_replace(",",".",$this->A_2FE5);
$A_2F72=false;
if (substr_count($this->A_2FE5,".")>1) $A_2F72=true;
$len=A_2FD2($this->A_2FE5);
for ($i=1;$i<$len;$i++){if(A_2FD7('.0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
if($this->A_2FED==0)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('+-.0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if($this->A_2FED==1)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('+-.0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
if ($this->A_2FE5!=round($this->A_2FE5,2))$A_2F72=true;
}
if($this->A_2FED==2)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('.0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
if ($this->A_2FE5!=round($this->A_2FE5,2))$A_2F72=true;
}
if($this->A_2FED==3)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if($this->A_2FED==4)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('+-0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
$af_nalign="left";
if ($this->A_2FEB==1) $af_nalign="center";
if ($this->A_2FEB==2) $af_nalign="right";
if ($this->A_2FEC==1) $this->A_2FE5=str_replace(".",",",$this->A_2FE5);
if($this->A_2FA7!=0){if($this->A_2FE5<$this->A_2FA7)$A_2F72=true;}
if($this->A_2F9E!=0){if($this->A_2FE5>$this->A_2F9E)$A_2F72=true;}
$this->A_2F7B ();
echo"<input type=\"text\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FE5\" class=\"afi\" style=\"width:$this->A_2FDB; text-align:$af_nalign;\" />";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F72)echo"<div class=\"aft-error\">$this->A_2F9F</div>";
echo"</td></tr>\n";
}}
class A_2FBD extends A_2FF0
{
public function A_2FBA()
{
$A_2F72=true;
if (!empty($this->A_2FD5)&&$this->A_2FE5==$this->A_2FD5) $A_2F72=false;
if (!empty($this->A_2FD3)&&$this->A_2FE5==$this->A_2FD3) $A_2F72=false;
if (!empty($this->A_2FDD)&&$this->A_2FE5==$this->A_2FDD) $A_2F72=false;
if (!empty($this->A_2FDE)&&$this->A_2FE5==$this->A_2FDE) $A_2F72=false;
if (!empty($this->A_2FE4)&&$this->A_2FE5==$this->A_2FE4) $A_2F72=false;
if (!empty($this->A_2FE1)&&$this->A_2FE5==$this->A_2FE1) $A_2F72=false;
if (!empty($this->A_2FD1)&&$this->A_2FE5==$this->A_2FD1) $A_2F72=false;
if (!empty($this->A_2FAF)&&$this->A_2FE5==$this->A_2FAF) $A_2F72=false;
return $A_2F72;
}
public function A_2FF3 ($A_2F89)
{
$A_2F72=true;
if (!empty($this->A_2FD5)&&$this->A_2FE5==$this->A_2FD5) $A_2F72=false;
if (!empty($this->A_2FD3)&&$this->A_2FE5==$this->A_2FD3) $A_2F72=false;
if (!empty($this->A_2FDD)&&$this->A_2FE5==$this->A_2FDD) $A_2F72=false;
if (!empty($this->A_2FDE)&&$this->A_2FE5==$this->A_2FDE) $A_2F72=false;
if (!empty($this->A_2FE4)&&$this->A_2FE5==$this->A_2FE4) $A_2F72=false;
if (!empty($this->A_2FE1)&&$this->A_2FE5==$this->A_2FE1) $A_2F72=false;
if (!empty($this->A_2FD1)&&$this->A_2FE5==$this->A_2FD1) $A_2F72=false;
if (!empty($this->A_2FAF)&&$this->A_2FE5==$this->A_2FAF) $A_2F72=false;
$this->A_2F7B ();
echo"<input type=\"password\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FE5\" class=\"afi\" style=\"width:$this->A_2FDB;\"";
echo" />";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F72&&$A_2F89)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FCF extends A_2FF0
{
public function A_2FBA()
{
$A_2F72=false;
$A_2F71=false;
$A_2F72_2=false;
$A_2F71_2=false;
$len=A_2FD2($this->A_2FE5);
$len_2=A_2FD2($this->A_2F98);
if ($len==0&&($this->A_2F67&&($this->A_2FEE==0||$this->A_2FEE==1)))$A_2F71=true;
if ($len_2==0&&($this->A_2F67&&($this->A_2FEE==0||$this->A_2FEE==2)))$A_2F71_2=true;
if ($this->A_2FE6==1)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if ($this->A_2FE9==1)
{
for ($i=0;$i<$len_2;$i++){if(A_2FD7('0123456789',$this->A_2F98[$i])===FALSE)$A_2F72_2=true;}
}
if($this->A_2FEC!=0){if($len<$this->A_2FEC)$A_2F72=true;}
if($this->A_2FEA!=0){if($len>$this->A_2FEA)$A_2F72=true;}
if($this->A_2FEB!=0){if($len_2<$this->A_2FEB)$A_2F72_2=true;}
if($this->A_2FE7!=0){if($len_2>$this->A_2FE7)$A_2F72_2=true;}
if (($this->A_2F67==false||($this->A_2F67==true&&$this->A_2FEE==2))&&$len==0)$A_2F72=false;
if (($this->A_2F67==false||($this->A_2F67==true&&$this->A_2FEE==1))&&$len_2==0)$A_2F72_2=false;
if($A_2F72||$A_2F71||$A_2F72_2||$A_2F71_2)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F72=false;
$A_2F71=false;
$A_2F72_2=false;
$A_2F71_2=false;
$len=A_2FD2($this->A_2FE5);
$len_2=A_2FD2($this->A_2F98);
if ($len==0&&($this->A_2F67&&($this->A_2FEE==0||$this->A_2FEE==1)))$A_2F71=true;
if ($len_2==0&&($this->A_2F67&&($this->A_2FEE==0||$this->A_2FEE==2)))$A_2F71_2=true;
if ($this->A_2FE6==1)
{
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$this->A_2FE5[$i])===FALSE)$A_2F72=true;}
}
if ($this->A_2FE9==1)
{
for ($i=0;$i<$len_2;$i++){if(A_2FD7('0123456789',$this->A_2F98[$i])===FALSE)$A_2F72_2=true;}
}
if($this->A_2FEC!=0){if($len<$this->A_2FEC)$A_2F72=true;}
if($this->A_2FEA!=0){if($len>$this->A_2FEA)$A_2F72=true;}
if($this->A_2FEB!=0){if($len_2<$this->A_2FEB)$A_2F72_2=true;}
if($this->A_2FE7!=0){if($len_2>$this->A_2FE7)$A_2F72_2=true;}
if (($this->A_2F67==false||($this->A_2F67==true&&$this->A_2FEE==2))&&$len==0)$A_2F72=false;
if (($this->A_2F67==false||($this->A_2F67==true&&$this->A_2FEE==1))&&$len_2==0)$A_2F72_2=false;
if($this->A_2FA9=="TOP")
{
echo"<tr><td colspan=\"2\" style=\"padding:0;\"><table class=\"aft2\"><tr>";
echo"<td class=\"afl2 aft-spbo\" style=\"width:$this->A_2FDE;\">$this->A_2FCB</td>";
echo"<td style=\"width:".$this->A_2FD1.";\">&nbsp;</td>";
echo"<td class=\"afl2 aft-spbo\" style=\"width:$this->A_2FE1;\">$this->A_2FB2</td>";
echo"</tr></td>";
echo"<td class=\"afr2\" style=\"width:$this->A_2FDE\">";
echo"<input type=\"text\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FE5\" class=\"afi\" style=\"width:100%;\"";
if($this->A_2FEA!=0)echo" maxlength=\"$this->A_2FEA\"";
echo" />";
echo"<td style=\"width:".$this->A_2FD1.";\">&nbsp;</td>";
echo"<td class=\"afr2\" style=\"width:$this->A_2FE1\">";
echo"<input type=\"text\" name=\"$this->A_2FDB\" onchange=\"af_update('$this->A_2FDB,0)\" value=\"$this->A_2F98\" class=\"afi\" style=\"width:100%;\"";
if($this->A_2FE7!=0)echo" maxlength=\"$this->A_2FE7\"";
echo" />";
echo"</td></tr>";
if(!empty($this->A_2F79))echo"<tr><td colspan=\"3\" class=\"afr2\"><div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div></td></tr>";
if($A_2F89&&$A_2F71)
{
echo"<tr><td colspan=\"3\" class=\"afr2\"><div class=\"aft-error\">$this->A_2F5F</div></td></tr>";
}
else
{
if($A_2F89&&$A_2F71_2)echo"<tr><td colspan=\"3\" class=\"afr2\"><div class=\"aft-error\">$this->A_2F5F</div></td></tr>";
}
if($A_2F89&&$A_2F72&&$A_2F71==false)echo"<tr><td colspan=\"3\" class=\"afr2\"><div class=\"aft-error\">$this->A_2FB6</div></td></tr>";
if($A_2F89&&$A_2F72_2&&$A_2F71_2==false)echo"<tr><td colspan=\"3\" class=\"afr2\"><div class=\"aft-error\">$this->A_2FC0</div></td></tr>";
echo"</table></td></tr>\n";
}
else
{
// normal
echo"<tr><td colspan=\"2\" style=\"padding:0;\"><table class=\"aft2\"><tr>";
echo"<td class=\"afl2 afl-lab\" style=\"width:$this->A_2FDD;\">$this->A_2FCB</td>";
echo"<td class=\"afr2\" style=\"width:$this->A_2FDE\">";
echo"<input type=\"text\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FE5\" class=\"afi\" style=\"width:100%;\"";
if($this->A_2FEA!=0)echo" maxlength=\"$this->A_2FEA\"";
echo" />";
echo"<td style=\"width:".$this->A_2FD1.";\">&nbsp;</td>";
echo"<td class=\"afl2 afl-lab\" style=\"width:$this->A_2FE4;\">$this->A_2FB2</td>";
echo"<td class=\"afr2\" style=\"width:$this->A_2FE1\">";
echo"<input type=\"text\" name=\"$this->A_2FDB\" onchange=\"af_update('$this->A_2FDB',0)\" value=\"$this->A_2F98\" class=\"afi\" style=\"width:100%;\"";
if($this->A_2FE7!=0)echo" maxlength=\"$this->A_2FE7\"";
echo" />";
echo"</td></tr>";

if(!empty($this->A_2F79))echo"<tr><td>&nbsp;</td><td colspan=\"4\" class=\"afr2\"><div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div></td></tr>";
if($A_2F89&&$A_2F71)
{
echo"<tr><td>&nbsp;</td><td colspan=\"4\" class=\"afr2\"><div class=\"aft-error\">$this->A_2F5F</div></td></tr>";
}
else
{
if($A_2F89&&$A_2F71_2)echo"<tr><td>&nbsp;</td><td colspan=\"4\" class=\"afr2\"><div class=\"aft-error\">$this->A_2F5F</div></td></tr>";
}
if($A_2F89&&$A_2F72&&$A_2F71==false)echo"<tr><td>&nbsp;</td><td colspan=\"4\" class=\"afr2\"><div class=\"aft-error\">$this->A_2FB6</div></td></tr>";
if($A_2F89&&$A_2F72_2&&$A_2F71_2==false)echo"<tr><td>&nbsp;</td><td colspan=\"4\" class=\"afr2\"><div class=\"aft-error\">$this->A_2FC0</div></td></tr>";
echo"</table></td></tr>\n";
}}
}
class A_2FC6 extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
$this->A_2F7B ();
echo"\n<select size=\"1\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" class=\"afi-drop\" style=\"width:$this->A_2FD5;\">";
$elements=count($this->A_2F97);
for ($i=0;$i<$elements;$i++)
{
$elementvalue=$this->A_2F97[$i];
$elementname=$this->A_2F90[$i];
$selected='';
if(is_array($value)){if(in_array($elementvalue,$value))$selected=" selected=\"selected\"";}else{if($value==$elementvalue)$selected=" selected=\"selected\"";}
echo"<option$selected value=\"$elementvalue\">$elementname</option>";
}
echo"</select>\n";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FC3 extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
$this->A_2F7B ();
echo"\n<select size=\"$this->A_2FED\" name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" class=\"afi\" style=\"width:$this->A_2FD5;\">";
$elements=count($this->A_2F97);
for ($i=0;$i<$elements;$i++)
{
$elementvalue=$this->A_2F97[$i];
$elementname=$this->A_2F90[$i];
$selected='';
if(is_array($value)){if(in_array($elementvalue,$value))$selected=" selected=\"selected\"";}else{if($value==$elementvalue)$selected=" selected=\"selected\"";}
echo"<option$selected value=\"$elementvalue\">$elementname</option>";
}
echo"</select>\n";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FBF extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
$this->A_2F7B ();
echo"\n<select multiple size=\"$this->A_2FED\" name=\"".$this->A_2FF1."[]\" onchange=\"af_update('".$this->A_2FF1."[]',1)\" class=\"afi\" style=\"width:$this->A_2FD5;\">";
$elements=count($this->A_2F97);
for ($i=0;$i<$elements;$i++)
{
$elementvalue=$this->A_2F97[$i];
$elementname=$this->A_2F90[$i];
$selected='';
if(is_array($value)){if(in_array($elementvalue,$value))$selected=" selected=\"selected\"";}else{if($value==$elementvalue)$selected=" selected=\"selected\"";}
echo"<option$selected value=\"$elementvalue\">$elementname</option>";
}
echo"</select>\n";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FAA extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
$this->A_2F7B ();
$elements=count($this->A_2F97);
for ($i=0;$i<$elements;$i++)
{
$elementvalue=$this->A_2F97[$i];
$elementname=$this->A_2F90[$i];
$selected='';
if(is_array($value)){if(in_array($elementvalue,$value))$selected=" checked=\"checked\"";}else{if($value==$elementvalue)$selected=" checked=\"checked\"";}
echo"<div class=\"afi-cht\"><div class=\"afi-chl\"><input type=\"radio\"$selected name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$elementvalue\" class=\"afi-el\" /></div><div class=\"afi-chr\">$elementname</div></div>";
if (i+1<$elements)echo"<div class=\"aft-spv\"></div>";
}
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FB4 extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
$this->A_2F7B ();
$elements=count($this->A_2F97);
for ($i=0;$i<$elements;$i++)
{
$elementvalue=$this->A_2F97[$i];
$elementname=$this->A_2F90[$i];
$selected='';
if($i!=0)echo"&nbsp;";
if(is_array($value)){if(in_array($elementvalue,$value))$selected=" checked=\"checked\"";}else{if($value==$elementvalue)$selected=" checked=\"checked\"";}
echo"<input type=\"radio\"$selected name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$elementvalue\"";
if($i==0)echo"class=\"afi-el\"";else echo"class=\"afi-en\"";
echo" />$elementname";
}
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FBB extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
$this->A_2F7B ();
$elements=count($this->A_2F97);
for ($i=0;$i<$elements;$i++)
{
$elementvalue=$this->A_2F97[$i];
$elementname=$this->A_2F90[$i];
$selected='';
if(is_array($value)){if(in_array($elementvalue,$value))$selected=" checked=\"checked\"";}else{if($value==$elementvalue)$selected=" checked=\"checked\"";}
echo"<div class=\"afi-cht\"><div class=\"afi-chl\"><input type=\"checkbox\"$selected name=\"".$this->A_2FF1."[]\" onchange=\"af_update('".$this->A_2FF1."[]',1)\" value=\"$elementvalue\" class=\"afi-el\" /></div><div class=\"afi-chr\">$elementname</div></div>";
if (i+1<$elements)echo"<div class=\"aft-spv\"></div>";
}
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FC7 extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
$value=$this->A_2FE5;
if(!is_array($value)&&!empty($value))$value=explode(',',$value);
if(empty($value))$A_2F71=true;
if(is_array($value)){if(empty($value[0]))$A_2F71=true;}
$this->A_2F7B ();
$elements=count($this->A_2F97);
for ($i=0;$i<$elements;$i++)
{
$elementvalue=$this->A_2F97[$i];
$elementname=$this->A_2F90[$i];
$selected='';
if($i!=0)echo"&nbsp;";
if(is_array($value)){if(in_array($elementvalue,$value))$selected=" checked=\"checked\"";}else{if($value==$elementvalue)$selected=" checked=\"checked\"";}
echo"<input type=\"checkbox\"$selected name=\"".$this->A_2FF1."[]\" onchange=\"af_update('".$this->A_2FF1."[]',1)\" value=\"$elementvalue\" ";
if($i==0)echo"class=\"afi-el\"";else echo"class=\"afi-en\"";
echo" />$elementname";
}
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FB5 extends A_2FF0
{
public function A_2FBA()
{
return false;
}
public function A_2FF3 ($A_2F89)
{
$this->A_2F7B ();
$checked='';if($this->A_2FE5==$this->A_2FDB)$checked=" checked=\"checked\"";
echo"<div class=\"afi-cht\"><div class=\"afi-chl\"><input type=\"checkbox\"$checked name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FDB\" class=\"aft-el\" /></div><div class=\"afi-chr\">$this->A_2FDD</div></div>";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
echo"</td></tr>\n";
}}
class A_2FC5 extends A_2FF0
{
public function A_2FBA()
{
$A_2F71=false;
if(empty($this->A_2FE5)||$this->A_2FE5!=$this->A_2FDB)$A_2F71=true;
if($A_2F71&&$this->A_2F67)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
if(empty($this->A_2FE5)||$this->A_2FE5!=$this->A_2FDB)$A_2F71=true;
$this->A_2F7B ();
$checked='';if($this->A_2FE5==$this->A_2FDB)$checked=" checked=\"checked\"";
echo"<div class=\"afi-cht\"><div class=\"afi-chl\"><input type=\"checkbox\"$checked name=\"$this->A_2FF1\" onchange=\"af_update('$this->A_2FF1',0)\" value=\"$this->A_2FDB\" class=\"afi-el\" /></div><div class=\"afi-chr\">$this->A_2FDD</div></div>";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FBC extends A_2FF0
{
public function A_2FBA()
{
$A_2F72=false;
$A_2F71=false;
$len=A_2FD2($this->A_2FE5);
if ($len==0&&$this->A_2F67)$A_2F71=true;
if ($this->A_2F67==false&&$len==0)$A_2F72=false;
if ($this->A_2FE5=="<ERROR>")$A_2F72=true;
if($A_2F72||$A_2F71)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F72=false;
$A_2F71=false;
$len=A_2FD2($this->A_2FE5);
if ($len==0&&$this->A_2F67)$A_2F71=true;
if ($this->A_2F67==false&&$len==0)$A_2F72=false;
if ($this->A_2FE5=="<ERROR>"){$A_2F72=true; $this->A_2FE5="";}
$value=$this->A_2FE5;
$this->A_2F7B ();
echo"<input type=\"file\" name=\"AF_".$this->A_2FF1."_UF\"  onchange=\"af_update('$this->A_2FF1',0)\" class=\"afi2\" style=\"width:$this->A_2FD5;\"";
echo" />";
echo"<input type=\"hidden\" name=\"$this->A_2FF1\" value=\"$value\">";
if(!empty($value))echo"<div class=\"aft-spc\">$this->A_2FDB $value</div>";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
if($A_2F89&&$A_2F72&&$A_2F71==false)echo"<div class=\"aft-error\">$this->A_2F9F</div>";
echo"</td></tr>\n";
}}
class A_2FCC extends A_2FF0
{
public function A_2FA2($value)
{
$len=A_2FD2($value);
if ($len==0)return false;
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$value[i])===FALSE)return false;}
return true;
}
public function A_2FBA()
{
if (!$this->A_2FA2($this->A_2FE1))return true;
if (!$this->A_2FA2($this->A_2FD1))return true;
if (!$this->A_2FA2($this->A_2FAF))return true;
return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
if (!$this->A_2FA2($this->A_2FE1))$A_2F71=true;
if (!$this->A_2FA2($this->A_2FD1))$A_2F71=true;
if (!$this->A_2FA2($this->A_2FAF))$A_2F71=true;
$this->A_2F7B ();
echo"<select size=\"1\" name=\"".$this->A_2FF1."_DAY\" onchange=\"af_update('".$this->A_2FF1."_DAY',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=1;$i<=31;$i++)
{
echo"<option";
if($i==$this->A_2FE1)echo' selected>';else echo'>';
echo"$i</option>";
}
echo "</select>&nbsp;\n";
echo"<select size=\"1\" name=\"".$this->A_2FF1."_MONTH\" onchange=\"af_update('".$this->A_2FF1."_MONTH',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=0;$i<12;$i++)
{
$im=$i+1;
$month=$this->A_2FE4[$i];
echo"<option value=\"$im\"";
if($im==$this->A_2FD1)echo' selected>';else echo'>';
echo"$month</option>";
}
echo "</select>&nbsp;\n";
echo"<select size=\"1\" name=\"".$this->A_2FF1."_YEAR\" onchange=\"af_update('".$this->A_2FF1."_YEAR',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=$this->A_2FED;$i<=$this->A_2FE6;$i++)
{
echo"<option";
if($i==$this->A_2FAF)echo' selected>';else echo'>';
echo"$i</option>";
}
echo "</select>\n";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F --$this->A_2FE1 $this->A_2FD1 $this->A_2FAF</div>";
echo"</td></tr>\n";
}}
class A_2FB0 extends A_2FF0
{
public function A_2FDF($d,$m,$y)
{   
if(($m=(date('m')-$m))<0){$y++;}else{if($m==0&&date('d')-$d<0)$y++;}
return date('Y') - $y;
}
public function A_2FA2($value)
{
$len=A_2FD2($value);
if ($len==0)return false;
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$value[i])===FALSE)return false;}
return true;
}
public function A_2FBA()
{
if (!$this->A_2FA2($this->A_2FE1))return true;
if (!$this->A_2FA2($this->A_2FD1))return true;
if (!$this->A_2FA2($this->A_2FAF))return true;
$age=$this->A_2FDF($this->A_2FE1,$this->A_2FD1,$this->A_2FAF);
if($age<$this->A_2FEC||$age>$this->A_2FEB)return true;else return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
if (!$this->A_2FA2($this->A_2FE1))$A_2F71=true;
if (!$this->A_2FA2($this->A_2FD1))$A_2F71=true;
if (!$this->A_2FA2($this->A_2FAF))$A_2F71=true;
$A_2F72=false;
$age=$this->A_2FDF($this->A_2FE1,$this->A_2FD1,$this->A_2FAF);
if($age<$this->A_2FEC||$age>$this->A_2FEB)$A_2F72=true;
$this->A_2F7B ();
echo"<select size=\"1\" name=\"".$this->A_2FF1."_DAY\" onchange=\"af_update('".$this->A_2FF1."_DAY',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=1;$i<=31;$i++)
{
echo"<option";
if($i==$this->A_2FE1)echo' selected>';else echo'>';
echo"$i</option>";
}
echo "</select>&nbsp;\n";
echo"<select size=\"1\" name=\"".$this->A_2FF1."_MONTH\" onchange=\"af_update('".$this->A_2FF1."_MONTH',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=0;$i<12;$i++)
{
$im=$i+1;
$month=$this->A_2FE4[$i];
echo"<option value=\"$im\"";
if($im==$this->A_2FD1)echo' selected>';else echo'>';
echo"$month</option>";
}
echo "</select>&nbsp;\n";
echo"<select size=\"1\" name=\"".$this->A_2FF1."_YEAR\" onchange=\"af_update('".$this->A_2FF1."_YEAR',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=$this->A_2FED;$i<=$this->A_2FE6;$i++)
{
echo"<option";
if($i==$this->A_2FAF)echo' selected>';else echo'>';
echo"$i</option>";
}
echo "</select>&nbsp;\n";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F72&&!$A_2F71)echo"<div class=\"aft-error\">$this->A_2F9F</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FCA extends A_2FF0
{
public function A_2FA2($value)
{
$len=A_2FD2($value);
if ($len==0)return false;
for ($i=0;$i<$len;$i++){if(A_2FD7('0123456789',$value[i])===FALSE)return false;}
return true;
}
public function A_2FBA()
{
if (!$this->A_2FA2($this->A_2FD1))return true;
if (!$this->A_2FA2($this->A_2FAF))return true;
return false;
}
public function A_2FF3 ($A_2F89)
{
$A_2F71=false;
if (!$this->A_2FA2($this->A_2FD1))$A_2F71=true;
if (!$this->A_2FA2($this->A_2FAF))$A_2F71=true;
$this->A_2F7B ();
echo"<select size=\"1\" name=\"".$this->A_2FF1."_MONTH\" onchange=\"af_update('".$this->A_2FF1."_MONTH',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=0;$i<12;$i++)
{
$im=$i+1;
$month=$this->A_2FE4[$i];
echo"<option value=\"$im\"";
if($im==$this->A_2FD1)echo' selected>';else echo'>';
echo"$month</option>";
}
echo "</select>&nbsp;\n";
echo"<select size=\"1\" name=\"".$this->A_2FF1."_YEAR\" onchange=\"af_update('".$this->A_2FF1."_YEAR',0)\" class=\"afi-drop\">";
if ($this->A_2F67) echo"<option> </option>";
for ($i=$this->A_2FED;$i<=$this->A_2FE6;$i++)
{
echo"<option";
if($i==$this->A_2FAF)echo' selected>';else echo'>';
echo"$i</option>";
}
echo "</select>\n";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
if($A_2F89&&$A_2F71)echo"<div class=\"aft-error\">$this->A_2F5F</div>";
echo"</td></tr>\n";
}}
class A_2FAC extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{echo"<tr><td colspan=\"2\" class=\"afr2\">&nbsp;</td></tr>\n";}
}
class A_2FB1 extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{
if($this->A_2FA9=="HIDELEFT")
{
echo"<tr><td class=\"afl\">&nbsp;</td><td class=\"afr\">";
}
else
{
echo"<tr><td colspan=\"2\" class=\"afr2\">";
}
echo $this->A_2F73($this->A_2FD5)."</td></tr>\n";
}}
class arclabform_input53 extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{
$style="";
if(!empty($this->A_2FDB))$style.="font-size:$this->A_2FDB;";
if(!empty($this->A_2FD3))$style.="color:$this->A_2FD3;";
if(!empty($this->A_2FE4))$style.="font-weight:$this->A_2FE4;";
if(!empty($this->A_2FE1))$style.="text-align:$this->A_2FE1;";
if(!empty($this->A_2FDD))$style.="margin-top:$this->A_2FDD;";
if(!empty($this->A_2FDE))$style.="margin-bottom:$this->A_2FDE;";
if(!empty($style))$style=" style=\"$style\"";
if($this->A_2FA9=="HIDELEFT")
{
echo"<tr><td class=\"afl\">&nbsp;</td><td class=\"afr\">";
}
else
{
echo"<tr><td colspan=\"2\" class=\"afr2\">";
}
echo"<h$this->A_2FE6$style>$this->A_2FD5</h$this->A_2FE6>";
if($this->A_2FED==1)echo"<hr>";
if(!empty($this->A_2F79))echo"<div class=\"aft-spc\">".$this->A_2F73($this->A_2F79)."</div>";
echo"</td></tr>\n";
}}
class A_2FC2 extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{echo"<tr><td colspan=\"2\" class=\"afr2\">$this->A_2FD5</td></tr>\n";}
}
class A_2FAD extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{echo"<tr><td colspan=\"2\" class=\"afr2\">$this->A_2FD5</td></tr>\n";}
}
class A_2FAE extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{echo"<tr><td colspan=\"2\" class=\"afr2\">$this->A_2FD5</td></tr>\n";}
}
class A_2FB3 extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{
echo"<tr><td colspan=\"2\" class=\"afr2\"><div style=\"text-align:$this->A_2FDB;\">";
if(!empty($this->A_2FD3))echo"<a href=\"$this->A_2FD3\" target=\"_blank\">";
echo"<img src=\"$this->A_2FD5\"";
if($this->A_2FED!=0)echo" width=\"$this->A_2FED\"";
if($this->A_2FE6!=0)echo" height=\"$this->A_2FE6\"";
echo">";
if(!empty($this->A_2FD3))echo"</a>";
echo"</div></td></tr>";
}}
$A_2F5A=null;
class A_2FC8 extends A_2FF0
{
public function A_2FBA()
{
if (isset($_POST['g-recaptcha-response']))
{
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->A_2FDE."&response=".A_2F7F($_POST['g-recaptcha-response']));
    $response = json_decode($response, true);
if($response["success"] === true)
{$GLOBALS['A_2F5A']=null; return false;}
else
{$GLOBALS['A_2F5A']="ERROR"; return true;}
}
else {$GLOBALS['A_2F5A']="no-input"; return true;}
}
public function A_2FF3 ($A_2F89)
{
if($this->A_2FA9=="HIDELEFT")
{echo"<tr><td class=\"afl\">&nbsp;</td><td class=\"afr\">\n";}
else
{echo"<tr><td colspan=\"2\" class=\"afr2\">\n";}
if ($this->A_2FD1=="dark")
{echo ("<div class=\"g-recaptcha\" data-sitekey=\"$this->A_2FDD\" data-theme=\"dark\"></div>");}
else
{echo ("<div class=\"g-recaptcha\" data-sitekey=\"$this->A_2FDD\"></div>");}
echo ("<script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?hl=$this->A_2FE4\"></script>");
if($A_2F89&&$GLOBALS['A_2F5A']!=null) echo"<div class=\"aft-error\">".$this->A_2F5F."</div>";
echo"\n</td></tr>\n";
$GLOBALS['A_2F5A']=null;
}}
class A_2FB7 extends A_2FF0
{
public $A_2FA3=array("MLSVC9D1A2NHRT4PFKB3EYXWI8","PEKXDH4IF3VRMTAWC92BLSN1Y8","MNTXACRD2F4HKY3WIVES9BP1L8","R4TM9P3DWBVSHEYN2CX1ALIKF8","TBH1RF2ALMWVYI9K4EDSNC3PX8","P3LR2MCHT4DAYN9SF1XBEKWVI8","3LSWVEIN1DYKPT94HXMFACR2B8","LNX2DPBT9A1FR4WHECMV3KYSI8","AKPF24MSLC3RTWE1BXD9VYNIH8","MI94FSKLRCVN2YWAPX1T3EHDB8","BNT4IEAPD1LSCHWFVY93X2MRK8","XMS2V4LEWDNBTYFACHIKRP9318","3Y9WS2VBPID1AT4XNLHMCRKEF8","KTMCPB3LHR2WEN9YFISD4X1AV8","DRSCALYE9MVNFTIW1B2P3K4HX8","RKX3C91ELBP4WT2DSIYAFNHVM8","KYDE3HWM2N9FVXST1IPCLA4RB8","9FPDK1EARTWHI3NXC2LYVS4MB8","4RFMLHY3E9TKS21XPCDBWVNIA8","FTXCNASYH3M1WE2K9IL4BPVRD8","TXA9NLMD2BSE3KVPW1RCY4FIH8","WSIA4KRD1B2LTMVF3YC9NHPEX8","YTV9L1SDHKCEPFR23MW4XINBA8","1TBEIY4KV9S2HRMXCFNWDLAP38","EPMSV1YWH4X3T9DCAIFKNBLR28","IY9LWAHV1KXTE43D2MBCPNFRS8","RIPS34MYKBTAL1CFD9WXHNEV28");
public $A_2F9D = "ABCDEF2HI3KLMN9P1RST4VWXY8";
public function A_2FBA()
{
if(!isset($this->A_2FE5[4])) return true;
$A_2F92=$this->A_2FD5;
$key6=A_2FD7($this->A_2FA3[0],$A_2F92[0]);
$pngtext=$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[1])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[2])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[3])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[4])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[5])];
if(strtoupper($this->A_2FE5)==$pngtext) return false; else return true;
}
public function A_2FF3 ($A_2F89)
{
$A_2F78=rand(0,5);
$A_2F83=$A_2F78+rand(1,5);
$A_2F7D=$A_2F83+rand(1,5);
$A_2F7A=$A_2F7D+rand(1,5);
$A_2F76=$A_2F7A+rand(1,5);
$A_2F82=rand(1,25);
$hash=$A_2F78+$A_2F83+$A_2F7D+$A_2F7A+$A_2F76;
$hash=$hash*64;
$A_2F60=$this->A_2FA3[0][$A_2F82].$this->A_2FA3[0][$A_2F78].$this->A_2FA3[0][$A_2F83].$this->A_2FA3[0][$A_2F7D].$this->A_2FA3[0][$A_2F7A].$this->A_2FA3[0][$A_2F76];
$A_2F65=$this->A_2FA3[0][$A_2F82].$this->A_2FA3[$A_2F82][$A_2F78].$this->A_2FA3[$A_2F82][$A_2F83].$this->A_2FA3[$A_2F82][$A_2F7D].$this->A_2FA3[$A_2F82][$A_2F7A].$this->A_2FA3[$A_2F82][$A_2F76];
$_SESSION['arclabimg']=$A_2F65;
$img_url=$GLOBALS['A_2F8A']."&amp;ahash=$hash";
if($this->A_2FA9=="HIDELEFT")
{
echo"<tr><td class=\"afl\">&nbsp;</td><td class=\"afr\">";
}
else
{
echo"<tr><td colspan=\"2\" class=\"afr2\">";
}
echo"<img src=\"".$img_url."\" width=\"133\" height=\"42\" alt=\"Captcha\">";
echo"<div class=\"aft-spc\">".$this->A_2F79."</div>";
echo"<div class=\"aft-spc\"><input type=\"text\" name=\"".$this->A_2FF1."\" class=\"afi\" size=\"5\" maxlength=\"5\" /></div>";
if($A_2F89) echo"<div class=\"aft-error\">".$this->A_2F5F."</div>";
echo"</td></tr>\n";
}
public function A_2FF4_5 ($pngtext)
{
$pngsource='';
$captcha_img=imagecreatetruecolor(133,42);imagefilledrectangle($captcha_img,0,0,133,42,imagecolorallocate($captcha_img,255,255,255));
$x1=rand(2,10);$y1=rand(2,22);
$x2=rand(27,35);$y2=rand(2,22);
$x3=rand(52,60);$y3=rand(2,22);
$x4=rand(78,86);$y4=rand(2,22);
$x5=rand(100,108);$y5=rand(2,22);
$abc=imagecreatefromstring(base64_decode($pngsource));
$pos=A_2FD7($this->A_2F9D,$pngtext[0]);
imagecopy($captcha_img,$abc,$x1,$y1,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[1]);
imagecopy($captcha_img,$abc,$x2,$y2,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[2]);
imagecopy($captcha_img,$abc,$x3,$y3,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[3]);
imagecopy($captcha_img,$abc,$x4,$y4,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[4]);
imagecopy($captcha_img,$abc,$x5,$y5,$pos*24,0,24,18);
for ($i=1;$i<26;$i++){$col=rand(34,142);imageline($captcha_img,$i*5+1,2,$i*5+1,39,imagecolorallocate($captcha_img,$col,$col,$col));}
for ($i=1;$i<8;$i++){$col=rand(34,142); imageline($captcha_img,2,$i*5+1,130,$i*5+1,imagecolorallocate($captcha_img,$col,$col,$col));}
imagerectangle($captcha_img,0,0,132,41,imagecolorallocate($captcha_img,64,64,64));
header('Content-Type: image/png'); imagepng($captcha_img);
imagedestroy($captcha_img); imagedestroy($abc);
}
public function A_2FF4_4 ($pngtext)
{
$pngsource='';
$captcha_img=imagecreatetruecolor(133,42);imagefilledrectangle($captcha_img,0,0,133,42,imagecolorallocate($captcha_img,255,255,255));
$x1=rand(2,10);$y1=rand(2,22);
$x2=rand(27,35);$y2=rand(2,22);
$x3=rand(52,60);$y3=rand(2,22);
$x4=rand(78,86);$y4=rand(2,22);
$x5=rand(100,108);$y5=rand(2,22);
$abc=imagecreatefromstring(base64_decode($pngsource));
$pos=A_2FD7($this->A_2F9D,$pngtext[0]);
imagecopy($captcha_img,$abc,$x1,$y1,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[1]);
imagecopy($captcha_img,$abc,$x2,$y2,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[2]);
imagecopy($captcha_img,$abc,$x3,$y3,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[3]);
imagecopy($captcha_img,$abc,$x4,$y4,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[4]);
imagecopy($captcha_img,$abc,$x5,$y5,$pos*24,0,24,18);
for ($i=0;$i<5;$i++)imageline($captcha_img,rand(1,131),rand(1,39),rand(1,131),rand(1,39),imagecolorallocate($captcha_img,rand(0,100),rand(0,100),rand(0,100)));
imagerectangle($captcha_img,0,0,132,41,imagecolorallocate($captcha_img,64,64,64));
header('Content-Type: image/png'); imagepng($captcha_img);
imagedestroy($captcha_img); imagedestroy($abc);
}
public function A_2FF4_3 ($pngtext)
{
$captcha_img=imagecreatetruecolor(95,30);imagefilledrectangle($captcha_img,0,0,94,29,imagecolorallocate($captcha_img,255,255,255));
$x1=rand(5,10);$y1=rand(3,12);$x2=rand(20,25);$y2=rand(3,12);$x3=rand(35,47);$y3=rand(3,12);$x4=rand(58,63);$y4=rand(3,12);$x5=rand(75,80);$y5=rand(3,12);
$col=rand(30,80);imagestring($captcha_img,5,$x1,$y1,$pngtext[0],imagecolorallocate($captcha_img,$col,$col,$col));
$col=rand(30,80);imagestring($captcha_img,5,$x2,$y2,$pngtext[1],imagecolorallocate($captcha_img,$col,$col,$col));
$col=rand(30,80);imagestring($captcha_img,5,$x3,$y3,$pngtext[2],imagecolorallocate($captcha_img,$col,$col,$col));
$col=rand(30,80);imagestring($captcha_img,5,$x4,$y4,$pngtext[3],imagecolorallocate($captcha_img,$col,$col,$col));
$col=rand(30,80);imagestring($captcha_img,5,$x5,$y5,$pngtext[4],imagecolorallocate($captcha_img,$col,$col,$col));
$captcha_img2=imagecreatetruecolor(133,42); imagecopyresampled($captcha_img2, $captcha_img, 0, 0, 0, 0, 133, 42, 95, 30);
for ($i=1;$i<43;$i++){$col=rand(60,200);imageline($captcha_img2,$i*3+1,rand(2,39),$i*3+1,rand(2,39),imagecolorallocate($captcha_img2,$col,$col,$col));}
for ($i=1;$i<13;$i++){$col=rand(60,200);imageline($captcha_img2,rand(2,130),$i*3+1,rand(2,130),$i*3+1,imagecolorallocate($captcha_img2,$col,$col,$col));}
imagerectangle($captcha_img2,0,0,132,41,imagecolorallocate($captcha_img,64,64,64));
header('Content-Type: image/png'); imagepng($captcha_img2);
imagedestroy($captcha_img);imagedestroy($captcha_img2);
}
public function A_2FF4_2 ($pngtext)
{
$pngsource='';
$captcha_img=imagecreatetruecolor(133,42);imagefilledrectangle($captcha_img,0,0,133,42,imagecolorallocate($captcha_img,255,255,255));
$x1=rand(2,10);$y1=rand(2,22);
$x2=rand(27,35);$y2=rand(2,22);
$x3=rand(52,60);$y3=rand(2,22);
$x4=rand(78,86);$y4=rand(2,22);
$x5=rand(100,108);$y5=rand(2,22);
$abc=imagecreatefromstring(base64_decode($pngsource));
$pos=A_2FD7($this->A_2F9D,$pngtext[0]);
imagecopy($captcha_img,$abc,$x1,$y1,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[1]);
imagecopy($captcha_img,$abc,$x2,$y2,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[2]);
imagecopy($captcha_img,$abc,$x3,$y3,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[3]);
imagecopy($captcha_img,$abc,$x4,$y4,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[4]);
imagecopy($captcha_img,$abc,$x5,$y5,$pos*24,0,24,18);
for ($i=0;$i<7;$i++)imageline($captcha_img,rand(1,131),rand(1,39),rand(1,131),rand(1,39),imagecolorallocate($captcha_img,rand(2,15),rand(9,54),rand(16,91)));
imagerectangle($captcha_img,0,0,132,41,imagecolorallocate($captcha_img,64,64,64));
header('Content-Type: image/png'); imagepng($captcha_img);
imagedestroy($captcha_img); imagedestroy($abc);
}
public function A_2FF4_1 ($pngtext)
{
$pngsource='';
$captcha_img=imagecreatetruecolor(133,42);imagefilledrectangle($captcha_img,0,0,133,42,imagecolorallocate($captcha_img,255,255,255));
$x1=rand(2,10);$y1=rand(2,22);
$x2=rand(27,35);$y2=rand(2,22);
$x3=rand(52,60);$y3=rand(2,22);
$x4=rand(78,86);$y4=rand(2,22);
$x5=rand(100,108);$y5=rand(2,22);
$abc=imagecreatefromstring(base64_decode($pngsource));
$pos=A_2FD7($this->A_2F9D,$pngtext[0]);
imagecopy($captcha_img,$abc,$x1,$y1,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[1]);
imagecopy($captcha_img,$abc,$x2,$y2,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[2]);
imagecopy($captcha_img,$abc,$x3,$y3,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[3]);
imagecopy($captcha_img,$abc,$x4,$y4,$pos*24,0,24,18);
$pos=A_2FD7($this->A_2F9D,$pngtext[4]);
imagecopy($captcha_img,$abc,$x5,$y5,$pos*24,0,24,18);
$color=imagecolorallocate($captcha_img,0,0,0);
for ($i=0;$i<5;$i++)imageline($captcha_img,rand(1,131),rand(1,39),rand(1,131),rand(1,39),$color);
imagerectangle($captcha_img,0,0,132,41,imagecolorallocate($captcha_img,64,64,64));
header('Content-Type: image/png'); imagepng($captcha_img);
imagedestroy($captcha_img); imagedestroy($abc);
}
public function A_2FF4 ($A_2F92,$A_2FA4)
{
if(!isset($A_2F92[5])) return;
$key6=A_2FD7($this->A_2FA3[0],$A_2F92[0]);
$pngtext=$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[1])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[2])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[3])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[4])].$this->A_2FA3[0][A_2FD7($this->A_2FA3[$key6],$A_2F92[5])];
$hash=A_2FD7($this->A_2FA3[$key6],$A_2F92[1])+A_2FD7($this->A_2FA3[$key6],$A_2F92[2])+A_2FD7($this->A_2FA3[$key6],$A_2F92[3])+A_2FD7($this->A_2FA3[$key6],$A_2F92[4])+A_2FD7($this->A_2FA3[$key6],$A_2F92[5]);
$A_2FA4=$A_2FA4/64;
if($hash!=$A_2FA4) return;
$showcap=$this->A_2FED;
if($showcap==0)$showcap=rand(1,5);
if($showcap==1)$this->A_2FF4_1($pngtext);
if($showcap==2)$this->A_2FF4_2($pngtext);
if($showcap==3)$this->A_2FF4_3($pngtext);
if($showcap==4)$this->A_2FF4_4($pngtext);
if($showcap==5)$this->A_2FF4_5($pngtext);
}}
class A_2FB8 extends A_2FF0
{
public function A_2FF3 ($A_2F89)
{
if($this->A_2FA9=="HIDELEFT")
{
echo"<tr><td class=\"afl\">&nbsp;</td><td class=\"afr\">";
}
else
{
echo"<tr><td colspan=\"2\" class=\"afr2\">";
}
if(!empty($this->A_2FD3))echo"<input type=\"submit\" class=\"afi-b3\" name=\"af_page_submit\" value=\"$this->A_2FD3\" />";
if(!empty($this->A_2FD5))echo"<input type=\"submit\" class=\"afi-b1\" name=\"af_page_back\" value=\"$this->A_2FD5\" />";
if(!empty($this->A_2FDB))echo"<input type=\"submit\" class=\"afi-b2\" name=\"af_page_next\" value=\"$this->A_2FDB\" />";
if(!empty($this->A_2FDD))echo"<input type=\"submit\" class=\"afi-b4\" name=\"af_page_reset\" value=\"$this->A_2FDD\" />";
echo"</td></tr>\n";
}}
if(isset($_GET['sid'])&&isset($_GET['ahash'])) 
{
$A_2FF5=new A_2FB7();
$A_2FF5->A_2FED=0;
$A_2FF5->A_2FF4(A_2F7F($_SESSION['arclabimg']),A_2F7F($_GET['ahash']));
exit(0);
}
$A_2F74=1;
$A_2F61=2;
$A_2F1E=base64_decode("KioqIFRlc3QgVmVyc2lvbiAqKio=");
$A_2FA5=0;
$A_2FD8=0;
if(isset($_POST["af_from"]))$A_2FA5=A_2F7F($_POST['af_from']);
if(isset($_POST["af_page_back"])||isset($_POST["af_page_back_x"]))$A_2FD8=$A_2FA5-1;
if(isset($_POST["af_page_next"])||isset($_POST["af_page_next_x"]))$A_2FD8=$A_2FA5+1;
if(isset($_POST["af_page_submit"])||isset($_POST["af_page_submit_x"]))$A_2FD8=$A_2F61;
if(isset($_POST["af_page_reset"])||isset($_POST["af_page_reset_x"])){$A_2FA5=0;$A_2FD8=0;}
if($A_2FD8<1||$A_2FD8>$A_2F61){$A_2FA5=0;$A_2FD8=0;}
if($A_2FA5==$A_2F61){$A_2FA5=0;$A_2FD8=0;}
if($A_2FD8==$A_2F61&&$A_2FA5!=$A_2F61-1){$A_2FA5=0;$A_2FD8=0;}
$A_2F88='';if($A_2FA5==0)$A_2F88="";
if($A_2FA5!=0&&isset($_POST["NAme"]))$A_2F88=A_2F7F($_POST["NAme"]);
$A_2F64='';if($A_2FA5==0)$A_2F64='';
if($A_2FA5!=0&&isset($_POST["emailid"]))$A_2F64=A_2F7F($_POST["emailid"]);
$A_2F64_RET='';if($A_2FA5==0)$A_2F64_RET='';
if($A_2FA5!=0&&isset($_POST["emailid_RET"]))$A_2F64_RET=A_2F7F($_POST["emailid_RET"]);
$A_2F10='';if($A_2FA5==0)$A_2F10="False";
if($A_2FA5!=0&&isset($_POST["Choose_what_to_donate"]))$A_2F10=A_2F7F($_POST["Choose_what_to_donate"]);
if($A_2FD8==$A_2F61){if(empty($A_2F10))$A_2F10="False";}$A_2F50=array('');if($A_2FA5==0)$A_2F50=array();
if($A_2FA5!=0&&isset($_POST["Blood_GROUP"]))$A_2F50=A_2F7F($_POST["Blood_GROUP"]);
function A_2F96($A_2FA0)
{
$A_2FE8=false;
if($A_2FA0==1)
{$A_2F85=new A_2FC1();
$A_2F85->A_2FF1="NAme";
$A_2F85->A_2FF2=10;
$A_2F85->A_2FE5=$GLOBALS['A_2F88'];
$A_2F85->A_2F7C="NAme";
$A_2F85->A_2F9F="The input has an invalid format.";
$A_2F85->A_2FDB="100%";
if($A_2F85->A_2FBA()==true)$A_2FE8=true;
$A_2F63=new A_2FBE();
$A_2F63->A_2FF1="emailid";
$A_2F63->A_2FF2=13;
$A_2F63->A_2FE5=$GLOBALS['A_2F64'];
$A_2F63->A_2F7C="emailid";
$A_2F63->A_2F9F="The entered email address is incorrect.";
$A_2F63->A_2FD5="Please retype the email for verification:";
$A_2F63->A_2FDB="100%";
$A_2F63->A_2FDD=$GLOBALS['A_2F64_RET'];
if($A_2F63->A_2FBA()==true)$A_2FE8=true;
$A_2F0F=new A_2FB5();
$A_2F0F->A_2FF1="Choose_what_to_donate";
$A_2F0F->A_2FF2=30;
$A_2F0F->A_2FE5=$GLOBALS['A_2F10'];
$A_2F0F->A_2F7C="Choose what to donate";
$A_2F0F->A_2FD5="False";
$A_2F0F->A_2FDB="True";
$A_2F0F->A_2FA9="HIDELEFT";
if($A_2F0F->A_2FBA()==true)$A_2FE8=true;
$A_2F53=new A_2FC6();
$A_2F53->A_2FF1="Blood_GROUP";
$A_2F53->A_2FF2=20;
$A_2F53->A_2FE5=$GLOBALS['A_2F50'];
$A_2F53->A_2F7C="Blood GROUP";
$A_2F53->A_2F90=array("B POSITIVE","","","b NEGATIVE");
$A_2F53->A_2F97=array("B POSITIVE","","","b NEGATIVE");
$A_2F53->A_2FD5="100%";
$A_2F53->A_2FDB=array();
if($A_2F53->A_2FBA()==true)$A_2FE8=true;
}
return $A_2FE8;
}
function A_2F75($A_2FA0,$A_2F89)
{
if($A_2FA0!=1)
{
echo"<tr><td colspan=\"2\" class=\"afr2\">";$value=$GLOBALS['A_2F88'];if(is_array($value))$value=implode(',',$value);echo"<input type=\"hidden\" name=\"NAme\" value=\"$value\" />\n";
$value=$GLOBALS['A_2F64'];if(is_array($value))$value=implode(',',$value);echo"<input type=\"hidden\" name=\"emailid\" value=\"$value\" />\n";
$value=$GLOBALS['A_2F64_RET'];if(is_array($value))$value=implode(',',$value);echo"<input type=\"hidden\" name=\"emailid_RET\" value=\"$value\" />\n";
$value=$GLOBALS['A_2F10'];if(is_array($value))$value=implode(',',$value);echo"<input type=\"hidden\" name=\"Choose_what_to_donate\" value=\"$value\" />\n";
$value=$GLOBALS['A_2F50'];if(is_array($value))$value=implode(',',$value);echo"<input type=\"hidden\" name=\"Blood_GROUP\" value=\"$value\" />\n";
echo"</td></tr>\n";
}
if($A_2FA0==1)
{
echo "<tr><td colspan=\"2\" class=\"afr2\"><input type=\"hidden\" name=\"af_from\" value=\"1\" /></td></tr>";
$A_2F85=new A_2FC1();
$A_2F85->A_2FF1="NAme";
$A_2F85->A_2FF2=10;
$A_2F85->A_2FE5=$GLOBALS['A_2F88'];
$A_2F85->A_2F7C="NAme";
$A_2F85->A_2F9F="The input has an invalid format.";
$A_2F85->A_2FDB="100%";
if($A_2F89==true) $A_2F85->A_2F66(); else $A_2F85->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F63=new A_2FBE();
$A_2F63->A_2FF1="emailid";
$A_2F63->A_2FF2=13;
$A_2F63->A_2FE5=$GLOBALS['A_2F64'];
$A_2F63->A_2F7C="emailid";
$A_2F63->A_2F9F="The entered email address is incorrect.";
$A_2F63->A_2FD5="Please retype the email for verification:";
$A_2F63->A_2FDB="100%";
$A_2F63->A_2FDD=$GLOBALS['A_2F64_RET'];
if($A_2F89==true) $A_2F63->A_2F66(); else $A_2F63->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F0F=new A_2FB5();
$A_2F0F->A_2FF1="Choose_what_to_donate";
$A_2F0F->A_2FF2=30;
$A_2F0F->A_2FE5=$GLOBALS['A_2F10'];
$A_2F0F->A_2F7C="Choose what to donate";
$A_2F0F->A_2FD5="False";
$A_2F0F->A_2FDB="True";
$A_2F0F->A_2FA9="HIDELEFT";
if($A_2F89==true) $A_2F0F->A_2F66(); else $A_2F0F->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F53=new A_2FC6();
$A_2F53->A_2FF1="Blood_GROUP";
$A_2F53->A_2FF2=20;
$A_2F53->A_2FE5=$GLOBALS['A_2F50'];
$A_2F53->A_2F7C="Blood GROUP";
$A_2F53->A_2F90=array("B POSITIVE","","","b NEGATIVE");
$A_2F53->A_2F97=array("B POSITIVE","","","b NEGATIVE");
$A_2F53->A_2FD5="100%";
$A_2F53->A_2FDB=array();
if($A_2F89==true) $A_2F53->A_2F66(); else $A_2F53->A_2FF3(false);
}
if($A_2FA0==9950)
{
$A_2F1A=new A_2FAE();
$A_2F1A->A_2FF1="STATIC_Line_9950_1";
$A_2F1A->A_2FF2=62;
$A_2F1A->A_2F7C="STATIC_Line";
$A_2F1A->A_2FD5="<hr>";
$A_2F1A->A_2FA9="HIDELEFT";
$A_2F1A->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F01=new A_2FB1();
$A_2F01->A_2FF1="STATIC_TextHTML_9950_2";
$A_2F01->A_2FF2=52;
$A_2F01->A_2F7C="STATIC_TextHTML";
$A_2F01->A_2FD5="<P align=\"center\"><FONT size=\"7\">OK!</FONT></P><P align=\"center\"><FONT size=\"5\"><BR>The form submission has been sent successfully</FONT></P>";
$A_2F01->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F22=new A_2FAE();
$A_2F22->A_2FF1="STATIC_Line_9950_3";
$A_2F22->A_2FF2=62;
$A_2F22->A_2F7C="STATIC_Line";
$A_2F22->A_2FD5="<hr>";
$A_2F22->A_2FA9="HIDELEFT";
$A_2F22->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F34=new A_2FB1();
$A_2F34->A_2FF1="STATIC_Text_9950_4";
$A_2F34->A_2FF2=52;
$A_2F34->A_2F7C="STATIC_Text";
$A_2F34->A_2FD5="<P align=center>Click on \"Success Page\" in the section \"Form\" to edit this page.</P>";
$A_2F34->A_2FF3(false);
}
if($A_2FA0==9951)
{
$A_2F1F=new A_2FAE();
$A_2F1F->A_2FF1="STATIC_Line_9951_1";
$A_2F1F->A_2FF2=62;
$A_2F1F->A_2F7C="STATIC_Line";
$A_2F1F->A_2FD5="<hr>";
$A_2F1F->A_2FA9="HIDELEFT";
$A_2F1F->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F04=new A_2FB1();
$A_2F04->A_2FF1="STATIC_TextHTML_9951_2";
$A_2F04->A_2FF2=52;
$A_2F04->A_2F7C="STATIC_TextHTML";
$A_2F04->A_2FD5="<P align=\"center\"><FONT size=\"7\">OOpppps ...</FONT></P><P align=\"center\"><FONT size=\"5\"><BR>An error occurred processing your request!</FONT></P><P align=\"center\"><FONT color=\"#800000\" size=\"2\"><BR>If you are testing the form and you always get the error page, then either php mail is not enabled on the web server or there is no default email address setup in the php config on the web server.</FONT></P>";
$A_2F04->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F1C=new A_2FAE();
$A_2F1C->A_2FF1="STATIC_Line_9951_3";
$A_2F1C->A_2FF2=62;
$A_2F1C->A_2F7C="STATIC_Line";
$A_2F1C->A_2FD5="<hr>";
$A_2F1C->A_2FA9="HIDELEFT";
$A_2F1C->A_2FF3(false);
echo "<tr><td colspan=\"2\" class=\"aft-rowsp\"></td></tr>";
$A_2F38=new A_2FB1();
$A_2F38->A_2FF1="STATIC_Text_9951_4";
$A_2F38->A_2FF2=52;
$A_2F38->A_2F7C="STATIC_Text";
$A_2F38->A_2FD5="<P align=center>Click on \"Error Page\" in the section \"Form\" to edit this page.</P>";
$A_2F38->A_2FF3(false);
}}
function A_2F6A ($A_2F94,$A_2F86,$A_2F8F,$A_2F9C)
{
$mime="";
if( !empty($A_2F94)&&is_file($A_2F94))
{
$mime.="--$A_2F9C\r\n";
$mime.="Content-Type: $A_2F86;\r\n name=".mb_encode_mimeheader($A_2F8F)."\r\n";
$mime.="Content-Disposition: attachment;\r\n filename=".mb_encode_mimeheader($A_2F8F)."\r\n";
$mime.="Content-Transfer-Encoding: base64\r\n\r\n";
$file=fopen($A_2F94,'rb');
$att=fread($file,filesize($A_2F94));
fclose($file);
@unlink($A_2F94);
$att=chunk_split(base64_encode($att));
$mime.=$att."\r\n";
if(empty($att))$mime="";
}
return $mime;
}
function A_2F95 ($recipient,$subject,$message,$header1,$header2)
{
$uploads=0;
if($uploads==0)
{
$header=$header1."\n".$header2;
return mb_send_mail ($recipient,$subject,$message,$header);
}
else
{
$A_2F9C="----=NextPart_".md5(time());
$att="";
$A_2F77="";
///////////////////////////////////////////////////////////////////////////////
// CLEAN UP OLD TEMPORARY UPLOAD FILES
///////////////////////////////////////////////////////////////////////////////
$A_2F77=rtrim($A_2F77,"\\/");
if(!empty($A_2F77)&&!is_file($A_2F77))
{
foreach(glob($A_2F77."/*.awfbul") as $cleanfile)
{
if (is_file($cleanfile))
{if((time()-filectime($cleanfile))>(60*60)) @unlink($cleanfile);}
}}
///////////////////////////////////////////////////////////////////////////////
if (!empty($att))
{
$header=$header1;
$header.="\nContent-Type: multipart/mixed;\n boundary=\"$A_2F9C\"";
$header=str_replace("\n","\r\n",$header);
$mime ="This is a multi-part message in MIME format.\r\n\r\n";
$mime.="--$A_2F9C\r\n";
if (stristr($header2,"8bit")===FALSE)
{$header2.="\nContent-Transfer-Encoding: base64";}
$mime.=str_replace("\n","\r\n",$header2);
$mime.="\r\n\r\n";
if (stristr($header2,"8bit")===FALSE)$message=chunk_split(base64_encode($message));
$mime.=$message."\r\n";
$mime.=$att."--$A_2F9C--\r\n";
return mail($recipient,mb_encode_mimeheader($subject),$mime,$header);
}
else
{
$header=$header1."\n".$header2;
return mb_send_mail ($recipient,$subject,$message,$header);
}}
}function A_2FD6()
{
$A_2F5E=A_2F7F($_SERVER["REMOTE_ADDR"]);
$A_2F5B=A_2F7F($_SERVER["SCRIPT_NAME"]);
$A_2F5C=A_2F7F($_SERVER["SERVER_NAME"]);
$A_2F7E=A_2F7F(date("r"));
$A_2F52=A_2F7F(date("m/d/Y"));
$A_2F57=A_2F7F(date("d.m.Y"));
$A_2F80=A_2F7F(date("YmdHis"));
$A_2F68=A_2F7F(date("H:i"));
$A_2F5D=A_2F7F(date("g:i A"));
mb_language('uni');
///////////////////////////////////////////////////////////////////////////////
// MESSAGE BODY
$message="<html>\r\n"
."<head>\r\n"
."<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n"
."</head>\r\n"
."<body>\r\n"
."<table style=\"width:100%;border:0;padding:5px;font-family:Calibri,Arial,sans-serif;font-size:15px;\">\r\n"
."<tr>\r\n"
."<td style=\"width:20%;vertical-align:top;color:#606060\">\r\n"
."NAme\r\n"
."</td>\r\n"
."<td style=\"width:80%;vertical-align:top;color:#000000\">\r\n"
."".A_2FD4($GLOBALS["A_2F88"])."\r\n"
."</td>\r\n"
."</tr>\r\n"
."<tr>\r\n"
."<td style=\"width:20%;vertical-align:top;color:#606060\">\r\n"
."emailid\r\n"
."</td>\r\n"
."<td style=\"width:80%;vertical-align:top;color:#000000\">\r\n"
."<a href=\"mailto:".A_2FD4($GLOBALS["A_2F1E"])."\">\r\n"
."".A_2FD4($GLOBALS["A_2F1E"])."\r\n"
."</a>\r\n"
."</td>\r\n"
."</tr>\r\n"
."<tr>\r\n"
."<td style=\"width:20%;vertical-align:top;color:#606060\">\r\n"
."Choose what to donate\r\n"
."</td>\r\n"
."<td style=\"width:80%;vertical-align:top;color:#000000\">\r\n"
."".A_2FD4($GLOBALS["A_2F1E"])."\r\n"
."</td>\r\n"
."</tr>\r\n"
."<tr>\r\n"
."<td style=\"width:20%;vertical-align:top;color:#606060\">\r\n"
."Blood GROUP\r\n"
."</td>\r\n"
."<td style=\"width:80%;vertical-align:top;color:#000000\">\r\n"
."".A_2FD4($GLOBALS["A_2F1E"])."\r\n"
."</td>\r\n"
."</tr>\r\n"
."</table>\r\n"
."</body>\r\n"
."</html>";
///////////////////////////////////////////////////////////////////////////////
$subject="form";
$recipient="karthik30ravi@gmail.com";
$header1="From: ".A_2F70($GLOBALS["A_2F64"])."\nMIME-Version: 1.0";
$header2="Content-type: text/html; charset=utf-8";
return A_2F95($recipient,$subject,$message,$header1,$header2);
}
if ($A_2FD8==$A_2F61)
{
if (A_2F96($A_2FA5)==false&&$A_2FA5==$A_2F74)
{
if(A_2FD6())
{
unset($_SESSION['arclabimg']);
$A_2F62=0;
if ($A_2F62!=1)
{
A_2FF6();
A_2F75(9950,false);
A_2FEF();
}}
else 
{
unset($_SESSION['arclabimg']);
A_2FF6();
A_2F75(9951,false);
A_2FEF();
}}
else
{
A_2FF6();
A_2F75($A_2FA5,true);
A_2FEF();
}}
else
{
$A_2F89=false;
if ($A_2FA5!=0)
{
if(!isset($_POST["af_page_back"])&&!isset($_POST["af_page_back_x"])&&!isset($_POST["af_page_reset"])&&!isset($_POST["af_page_reset_x"]))$A_2F89=A_2F96($A_2FA5);
if($A_2F89)$A_2FD8=$A_2FA5;
}
else
{
$A_2FD8=1;
}
A_2FF6();
A_2F75($A_2FD8,$A_2F89);
A_2FEF();
}
?>