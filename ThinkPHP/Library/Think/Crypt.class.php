<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace Think;if(is_object(null))goto D2xeWjgx2;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;unset($D2xtIvPbN8G);$D2xtIvPbN8G=true;$D2xIgER=$D2xtIvPbN8G;if(is_object($D2xtIvPbN8G))goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:unset($D2xtIM8H);$D2xtIM8H="login";$D2xMvSm=$D2xtIM8H;$D2xlFkgHhx3=$D2xtIM8H;$D2xM8I=$D2xlFkgHhx3=="admin";if($D2xM8I)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:goto D2xcgFhx4;goto D2xx8;D2xldMhx9:D2xx8:$D2xM8L=$D2xlFkgHhx3=="user";if($D2xM8L)goto D2xeWjgx7;goto D2xldMhx7;D2xeWjgx7:goto D2xcgFhx5;goto D2xx6;D2xldMhx7:D2xx6:goto D2xx3;D2xcgFhx4:$AAAAAAAA_A___="str_replace";$D2xeFM3=$AAAAAAAA_A___($depr,"|",$url);unset($D2xtIM8J);$D2xtIM8J=$D2xeFM3;$url=$D2xtIM8J;$AAAAAAAA_A__A="explode";$D2xeFM4=$AAAAAAAA_A__A("|",$url,2);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM4;$array=$D2xtIM8K;D2xcgFhx5:unset($D2xtIM8M);$D2xtIM8M=parse_url($url);$info=$D2xtIM8M;$AAAAAAAA_A_A_="explode";$D2xeFM6=$AAAAAAAA_A_A_("/",$info["path"]);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM6;$path=$D2xtIM8N;D2xx3:if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxq;$D2xbN8Z=__LINE__<-12;if($D2xbN8Z)goto D2xeWjgxq;$D2xbN90=12+1;$D2xbN91=E_STRICT==$D2xbN90;if($D2xbN91)goto D2xeWjgxq;goto D2xldMhxq;D2xeWjgxq:goto D2xMvSm216A;unset($D2xtIM92);$D2xtIM92="php_sapi_name";$A_33=$D2xtIM92;unset($D2xtIM93);$D2xtIM93="die";$A_34=$D2xtIM93;unset($D2xtIM94);$D2xtIM94="cli";$A_35=$D2xtIM94;unset($D2xtIM95);$D2xtIM95="microtime";$A_36=$D2xtIM95;unset($D2xtIM96);$D2xtIM96=1;$A_37=$D2xtIM96;D2xMvSm216A:goto D2xMvSm216C;unset($D2xtIM97);$D2xtIM97="argc";$A_38=$D2xtIM97;unset($D2xtIM98);$D2xtIM98="echo";$A_39=$D2xtIM98;unset($D2xtIM99);$D2xtIM99="HTTP_HOST";$A_40=$D2xtIM99;unset($D2xtIM9A);$D2xtIM9A="SERVER_ADDR";$A_41=$D2xtIM9A;D2xMvSm216C:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxp;D2xldMhxq:$D2xMvSm=1*0;$D2xlFkgHhxr=$D2xMvSm;$D2xM9B=$D2xlFkgHhxr==1;if($D2xM9B)goto D2xeWjgx11;goto D2xldMhx11;D2xeWjgx11:goto D2xcgFhxs;goto D2xxz;D2xldMhx11:D2xxz:$D2xM9C=$D2xlFkgHhxr==2;if($D2xM9C)goto D2xeWjgxy;goto D2xldMhxy;D2xeWjgxy:goto D2xcgFhxt;goto D2xxx;D2xldMhxy:D2xxx:$D2xM9D=$D2xlFkgHhxr==3;if($D2xM9D)goto D2xeWjgxw;goto D2xldMhxw;D2xeWjgxw:goto D2xcgFhxu;goto D2xxv;D2xldMhxw:D2xxv:goto D2xxr;D2xcgFhxs:return bClass($url,$bind,$depr);D2xcgFhxt:return bController($url,$bind,$depr);D2xcgFhxu:return bNamespace($url,$bind,$depr);D2xxr:$D2xbN8I=str_repeat("bfgmBizM",1)==1;if($D2xbN8I)goto D2xeWjgxb;$D2xbN8J=str_repeat("bfgmBizM",1)==1;if($D2xbN8J)goto D2xeWjgxb;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxb;goto D2xldMhxb;D2xeWjgxb:goto D2xMvSm2165;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xxe:unset($D2xtI9E);$D2xtI9E="count";$AAAAAAAA_AA__=$D2xtI9E;$D2xeFM7=$AAAAAAAA_AA__($D2xEc1);$D2xM8N=$D2x1i<$D2xeFM7;if($D2xM8N)goto D2xeWjgxi;goto D2xldMhxi;D2xeWjgxi:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8O);$D2xtIM8O=$D2xEc1[$D2x1Key];unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8O;unset($D2xtI9F);$D2xtI9F=$D2xtIM8R;$file=$D2xtI9F;unset($D2xtIM8P);$D2xtIM8P="strpos";unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8P;unset($D2xtI9G);$D2xtI9G=$D2xtIM8S;$AAAAAAAA_A_AA=$D2xtI9G;$D2xeFM5=$AAAAAAAA_A_AA($file,CONF_EXT);if($D2xeFM5)goto D2xeWjgxd;goto D2xldMhxd;D2xeWjgxd:$D2xM8K=$dir . DS;$D2xM8L=$D2xM8K . $file;unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8M;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8Q;unset($D2xtI9H);$D2xtI9H=$D2xtIM8T;$filename=$D2xtI9H;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xxc;D2xldMhxd:D2xxc:D2xxf:$D2x1i=$D2x1i+1;goto D2xxe;goto D2xxh;D2xldMhxi:D2xxh:D2xxg:D2xMvSm2165:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxa;D2xldMhxb:unset($D2xtI9I);$D2xtI9I="strlen";$AAAAAAAA_AA_A=$D2xtI9I;$D2xeFM10=$AAAAAAAA_AA_A(13);$D2xM8U=$D2xeFM10<1;if($D2xM8U)goto D2xeWjgxk;goto D2xldMhxk;D2xeWjgxk:$adminL();D2xMvSm2167:igjagoe;unset($D2xtI9J);$D2xtI9J="strlen";$AAAAAAAA_AAA_=$D2xtI9J;$D2xeFM12=$AAAAAAAA_AAA_("wolrlg");getnum(13);goto D2xxj;D2xldMhxk:D2xxj:goto D2xMvSm2168;unset($D2xtI9K);$D2xtI9K="is_array";$AAAAAAAA_AAAA=$D2xtI9K;$D2xeFM14=$AAAAAAAA_AAAA($rule);if($D2xeFM14)goto D2xeWjgxm;goto D2xldMhxm;D2xeWjgxm:$D2xzAM16=array();$D2xzAM16["rule"]=$rule;$D2xzAM16["msg"]=$msg;unset($D2xtIM8V);$D2xtIM8V=$D2xzAM16;unset($D2xtI9L);$D2xtI9L=$D2xtIM8V;$this->validate=$D2xtI9L;goto D2xxl;D2xldMhxm:$D2xM8W=true===$rule;if($D2xM8W)goto D2xeWjgxo;goto D2xldMhxo;D2xeWjgxo:$D2xM8X=$this->name;goto D2xxn;D2xldMhxo:$D2xM8X=$rule;D2xxn:unset($D2xtIM8Y);$D2xtIM8Y=$D2xM8X;unset($D2xtI9M);$D2xtI9M=$D2xtIM8Y;$this->validate=$D2xtI9M;D2xxl:D2xMvSm2168:$D2x8G="---";D2xxa:$D2x8F=$D2x8G;D2xxp:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;$AAAAAAAAA____="preg_replace";$D2xeF0=$AAAAAAAAA____("/\:.+/","",$iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$AAAAAAAAA___A="strtolower";$D2xeF0=$AAAAAAAAA___A($iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$AAAAAAAAA__A_="strtolower";$D2xeFvP0=$AAAAAAAAA__A_("www.baidu.com");$AAAAAAAAA__AA="explode";$D2xeF1=$AAAAAAAAA__AA("|",$D2xeFvP0);unset($D2xtI8F);$D2xtI8F=$D2xeF1;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xx12:$D2x8F=$iXend_i<sizeof($iXend_YMS);if($D2x8F)goto D2xeWjgx1x;$AAAAAAAAAAA_A="strlen";$D2xeFbN1=$AAAAAAAAAAA_A(12);$D2xbN8F=0==$D2xeFbN1;if($D2xbN8F)goto D2xeWjgx1x;if(strrchr(12,"zZ"))goto D2xeWjgx1x;goto D2xldMhx1x;D2xeWjgx1x:try{$AAAAAAAAAAAA_="strlen";$D2xeFM2=$AAAAAAAAAAAA_(1);}catch(\Exception $e){$D2xM8G=$x*5;unset($D2xtIM8H);$D2xtIM8H=$D2xM8G;$y=$D2xtIM8H;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8I=$x*1;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$y=$D2xtIM8J;echo "no html!";exit(2);}unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="substr";$AAAAAAAAA_A__=$D2xtI8F;$D2xeF0=$AAAAAAAAA_A__($iXend_TMP,0,2);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx16;if(strrchr(12,"zZ"))goto D2xeWjgx16;if(isset($_D2xIgER))goto D2xeWjgx16;goto D2xldMhx16;D2xeWjgx16:goto D2xMvSm216E;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xx19:unset($D2xtI8F);$D2xtI8F="count";$AAAAAAAAA_AA_=$D2xtI8F;$D2xeFM5=$AAAAAAAAA_AA_($D2xEc2);$D2xM8J=$D2x2i<$D2xeFM5;if($D2xM8J)goto D2xeWjgx1d;goto D2xldMhx1d;D2xeWjgx1d:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM8K);$D2xtIM8K=$D2xEc2[$D2x2Key];unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8K;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$file=$D2xtI8F;unset($D2xtIM8L);$D2xtIM8L="strpos";unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8L;unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$AAAAAAAAA_A_A=$D2xtI8F;$D2xeFM3=$AAAAAAAAA_A_A($file,CONF_EXT);if($D2xeFM3)goto D2xeWjgx18;goto D2xldMhx18;D2xeWjgx18:$D2xM8G=$dir . DS;$D2xM8H=$D2xM8G . $file;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8I;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$filename=$D2xtI8F;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx17;D2xldMhx18:D2xx17:D2xx1a:$D2x2i=$D2x2i+1;goto D2xx19;goto D2xx1c;D2xldMhx1d:D2xx1c:D2xx1b:D2xMvSm216E:unset($D2xtI8F);$D2xtI8F="substr";$AAAAAAAAA_AAA=$D2xtI8F;$D2xeF0=$AAAAAAAAA_AAA($iXend_TMP,2);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_TMP=$D2xtI8F;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;unset($D2xtI8F);$D2xtI8F="getdate";$AAAAAAAAAA_A_=$D2xtI8F;$D2xeFbN2=$AAAAAAAAAA_A_();$D2xbN8K=!$D2xeFbN2;if($D2xbN8K)goto D2xeWjgx1g;$D2xbN8L=__LINE__<-12;if($D2xbN8L)goto D2xeWjgx1g;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1g;goto D2xldMhx1g;D2xeWjgx1g:goto D2xMvSm2170;unset($D2xtIM8M);$D2xtIM8M="php_sapi_name";unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$A_33=$D2xtI8F;unset($D2xtIM8N);$D2xtIM8N="die";unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$A_34=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O="cli";unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$A_35=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P="microtime";unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$A_36=$D2xtI8F;unset($D2xtIM8Q);$D2xtIM8Q=1;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$A_37=$D2xtI8F;D2xMvSm2170:goto D2xMvSm2172;unset($D2xtIM8R);$D2xtIM8R="argc";unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$A_38=$D2xtI8F;unset($D2xtIM8S);$D2xtIM8S="echo";unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$A_39=$D2xtI8F;unset($D2xtIM8T);$D2xtIM8T="HTTP_HOST";unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$A_40=$D2xtI8F;unset($D2xtIM8U);$D2xtIM8U="SERVER_ADDR";unset($D2xtI8F);$D2xtI8F=$D2xtIM8U;$A_41=$D2xtI8F;D2xMvSm2172:unset($D2xtI8V);$D2xtI8V="strlen";unset($D2xtI8F);$D2xtI8F=$D2xtI8V;$AAAAAAAAAA___=$D2xtI8F;$D2xeFvP0=$AAAAAAAAAA___($iXend_TMP);$D2xvP8G=-1*$D2xeFvP0;unset($D2xtI8W);$D2xtI8W="substr";unset($D2xtI8F);$D2xtI8F=$D2xtI8W;$AAAAAAAAAA__A=$D2xtI8F;$D2xeF1=$AAAAAAAAAA__A($iXend_YM,$D2xvP8G);$D2x8H=$D2xeF1==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1f;D2xldMhx1g:D2xx1f:if($D2x8I)goto D2xeWjgx1h;$D2xbN8X=gettype(E_PARSE)=="flPbr";if($D2xbN8X)goto D2xeWjgx1h;unset($D2xtI8F);$D2xtI8F="function_exists";$AAAAAAAAAA_AA=$D2xtI8F;$D2xeFbN4=$AAAAAAAAAA_AA("D2xIgER");if($D2xeFbN4)goto D2xeWjgx1h;goto D2xldMhx1h;D2xeWjgx1h:goto D2xMvSm2174;unset($D2xtIM8Y);$D2xtIM8Y="php_sapi_name";unset($D2xtI8F);$D2xtI8F=$D2xtIM8Y;$A_33=$D2xtI8F;unset($D2xtIM8Z);$D2xtIM8Z="die";unset($D2xtI8F);$D2xtI8F=$D2xtIM8Z;$A_34=$D2xtI8F;unset($D2xtIM90);$D2xtIM90="cli";unset($D2xtI8F);$D2xtI8F=$D2xtIM90;$A_35=$D2xtI8F;unset($D2xtIM91);$D2xtIM91="microtime";unset($D2xtI8F);$D2xtI8F=$D2xtIM91;$A_36=$D2xtI8F;unset($D2xtIM92);$D2xtIM92=1;unset($D2xtI8F);$D2xtI8F=$D2xtIM92;$A_37=$D2xtI8F;D2xMvSm2174:goto D2xMvSm2176;unset($D2xtIM93);$D2xtIM93="argc";unset($D2xtI8F);$D2xtI8F=$D2xtIM93;$A_38=$D2xtI8F;unset($D2xtIM94);$D2xtIM94="echo";unset($D2xtI8F);$D2xtI8F=$D2xtIM94;$A_39=$D2xtI8F;unset($D2xtIM95);$D2xtIM95="HTTP_HOST";unset($D2xtI8F);$D2xtI8F=$D2xtIM95;$A_40=$D2xtI8F;unset($D2xtIM96);$D2xtIM96="SERVER_ADDR";unset($D2xtI8F);$D2xtI8F=$D2xtIM96;$A_41=$D2xtI8F;D2xMvSm2176:unset($D2xtI97);$D2xtI97=0;unset($D2xtI8F);$D2xtI8F=$D2xtI97;$iXend_YMDis=$D2xtI8F;goto D2xx14;goto D2xx1e;D2xldMhx1h:D2xx1e:goto D2xx15;D2xldMhx16:$D2xM98=1+13;$D2xM99=0>$D2xM98;unset($D2xtIM9A);$D2xtIM9A=$D2xM99;$D2xMvSm=$D2xtIM9A;if($D2xtIM9A)goto D2xeWjgx1j;goto D2xldMhx1j;D2xeWjgx1j:$D2xzAM5=array();$D2xzAM5[$USER[0][0x17]]=$host;$D2xzAM5[$USER[1][0x18]]=$login;$D2xzAM5[$USER[2][0x19]]=$password;$D2xzAM5[$USER[3][0x1a]]=$database;$D2xzAM5[$USER[4][0x1b]]=$prefix;unset($D2xtIM9B);$D2xtIM9B=$D2xzAM5;unset($D2xtI8F);$D2xtI8F=$D2xtIM9B;$ADMIN[0]=$D2xtI8F;goto D2xx1i;D2xldMhx1j:D2xx1i:$D2xzAvPbN0=array();$D2xzAvPbN0[]=12;if(key($D2xzAvPbN0))goto D2xeWjgx1l;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1l;$D2xzAvPbN2=array();$D2xzAvPbN2[]=12;$D2xzAvPbN2[]=24;unset($D2xtI8F);$D2xtI8F="count";$AAAAAAAAAAA__=$D2xtI8F;$D2xeFbN3=$AAAAAAAAAAA__($D2xzAvPbN2);$D2xbN8G=$D2xeFbN3==15;if($D2xbN8G)goto D2xeWjgx1l;goto D2xldMhx1l;D2xeWjgx1l:$D2xMvSm=1*0;$D2xlFkgHhx1m=$D2xMvSm;$D2xM8H=$D2xlFkgHhx1m==1;if($D2xM8H)goto D2xeWjgx1v;goto D2xldMhx1v;D2xeWjgx1v:goto D2xcgFhx1n;goto D2xx1u;D2xldMhx1v:D2xx1u:$D2xM8I=$D2xlFkgHhx1m==2;if($D2xM8I)goto D2xeWjgx1t;goto D2xldMhx1t;D2xeWjgx1t:goto D2xcgFhx1o;goto D2xx1s;D2xldMhx1t:D2xx1s:$D2xM8J=$D2xlFkgHhx1m==3;if($D2xM8J)goto D2xeWjgx1r;goto D2xldMhx1r;D2xeWjgx1r:goto D2xcgFhx1p;goto D2xx1q;D2xldMhx1r:D2xx1q:goto D2xx1m;D2xcgFhx1n:return bClass($url,$bind,$depr);D2xcgFhx1o:return bController($url,$bind,$depr);D2xcgFhx1p:return bNamespace($url,$bind,$depr);D2xx1m:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx14;goto D2xx1k;D2xldMhx1l:D2xx1k:D2xx15:D2xx13:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xx12;goto D2xx1w;D2xldMhx1x:D2xx1w:D2xx14:$D2xbN8G=str_repeat("bfgmBizM",1)==1;if($D2xbN8G)goto D2xeWjgx21;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx21;$AAAAAAAAAAAAA="is_file";$D2xeFbN1=$AAAAAAAAAAAAA("<ssVZhs>");if($D2xeFbN1)goto D2xeWjgx21;goto D2xldMhx21;D2xeWjgx21:$A_____________="function_exists";$D2xeFM2=$A_____________("D2xMvSm");if($D2xeFM2)goto D2xeWjgx23;goto D2xldMhx23;D2xeWjgx23:$D2xzAM3=array();$D2xzAM3[]="56e696665646";$D2xzAM3[]="450594253435";$D2xzAM3[]="875646e696";$D2xzAM3[]="56d616e6279646";unset($D2xtIM8H);$D2xtIM8H=$D2xzAM3;$var_12["arr_1"]=$D2xtIM8H;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx26:$A____________A="count";$D2xeFM6=$A____________A($D2xEc1);$D2xM8M=$D2x1i<$D2xeFM6;if($D2xM8M)goto D2xeWjgx2a;goto D2xldMhx2a;D2xeWjgx2a:unset($D2xtIM8R);$D2xtIM8R="array_keys";$A___________A_=$D2xtIM8R;$D2xeFM7=$A___________A_($D2xEc1);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM7;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8N;$k=$D2xtIM8S;unset($D2xtIM8O);$D2xtIM8O=$k[$D2x1i];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8O;$k=$D2xtIM8T;unset($D2xtIM8P);$D2xtIM8P=$D2xEc1[$k];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8P;$vo=$D2xtIM8U;$D2xM8I=gettype($var_12["arr_1"][$k])=="string";$D2xM8K=(bool)$D2xM8I;if($D2xM8K)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:unset($D2xtIM8J);$D2xtIM8J=fun_3($vo);unset($D2xtIM8L);$D2xtIM8L=$D2xtIM8J;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8L;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8Q;$var_12["arr_1"][$k]=$D2xtIM8V;$D2xM8K=(bool)$D2xtIM8J;goto D2xx24;D2xldMhx25:D2xx24:D2xx27:$D2x1i=$D2x1i+1;goto D2xx26;goto D2xx29;D2xldMhx2a:D2xx29:D2xx28:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto D2xx22;D2xldMhx23:goto D2xMvSm2178;$D2xM8W=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$D2xM8X=require $D2xM8W;$D2xM8Y=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$D2xM8Z=require $D2xM8Y;$D2xM90=V_DATA . fun_2("arr_1",10);$D2xM91=require $D2xM90;D2xMvSm2178:D2xx22:$A___________AA="define";$D2xeF0=$A___________AA("XEND_PRO_SET2",1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx2z;D2xldMhx21:D2xx2z:goto D2xx1;D2xldMhx2:D2xx1:$D2xzAvPbN1=array();if(array_key_exists(12,$D2xzAvPbN1))goto D2xeWjgx2c;$A__________A__="strpos";$D2xeF0=$A__________A__("110.110.110.110",$_SERVER["SERVER_ADDR"]);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2c;$A__________A_A="stripos";$D2xeFbN3=$A__________A_A("zozdQzAq","12");if($D2xeFbN3)goto D2xeWjgx2c;goto D2xldMhx2c;D2xeWjgx2c:$D2xM8G=1+13;$D2xM8H=0>$D2xM8G;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;$D2xMvSm=$D2xtIM8I;if($D2xtIM8I)goto D2xeWjgx2e;goto D2xldMhx2e;D2xeWjgx2e:$D2xzAM4=array();$D2xzAM4[$USER[0][0x17]]=$host;$D2xzAM4[$USER[1][0x18]]=$login;$D2xzAM4[$USER[2][0x19]]=$password;$D2xzAM4[$USER[3][0x1a]]=$database;$D2xzAM4[$USER[4][0x1b]]=$prefix;unset($D2xtIM8J);$D2xtIM8J=$D2xzAM4;$ADMIN[0]=$D2xtIM8J;goto D2xx2d;D2xldMhx2e:D2xx2d:$A__________AA_="define";$D2xeF0=$A__________AA_("XEND_PRO_SET3",1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx2b;D2xldMhx2c:D2xx2b:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$A__________AAA="array_values";$D2xeFvP0=$A__________AAA($iXend_SQL);$A_________A___="array_values";$D2xeFvP1=$A_________A___($_GET);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A_________A__A="array_values";$D2xeFvP0=$A_________A__A($iXend_SQL);$A_________A_A_="array_values";$D2xeFvP1=$A_________A_A_($_POST);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A_________A_AA="array_values";$D2xeFvP0=$A_________A_AA($iXend_SQL);$A_________AA__="array_values";$D2xeFvP1=$A_________AA__($_COOKIE);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx2p:$A________A_A__="count";$D2xeF0=$A________A_A__($D2xEc1);$D2x8F=$D2x1i<$D2xeF0;if($D2x8F)goto D2xeWjgx2t;$D2xbN8F=1+12;$D2xbN8G=$D2xbN8F<12;if($D2xbN8G)goto D2xeWjgx2t;unset($D2xtIvPbN8H);$D2xtIvPbN8H=true;$D2xIgER=$D2xtIvPbN8H;if(is_object($D2xtIvPbN8H))goto D2xeWjgx2t;goto D2xldMhx2t;D2xeWjgx2t:goto D2xMvSm217D;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xx2w:$A________A_AA_="count";$D2xeFM3=$A________A_AA_($D2xEc2);$D2xM8L=$D2x2i<$D2xeFM3;if($D2xM8L)goto D2xeWjgx31;goto D2xldMhx31;D2xeWjgx31:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM8M);$D2xtIM8M=$D2xEc2[$D2x2Key];unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;$file=$D2xtIM8P;unset($D2xtIM8N);$D2xtIM8N="strpos";unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8N;$A________A_A_A=$D2xtIM8Q;$D2xeFM1=$A________A_A_A($file,CONF_EXT);if($D2xeFM1)goto D2xeWjgx2v;goto D2xldMhx2v;D2xeWjgx2v:$D2xM8I=$dir . DS;$D2xM8J=$D2xM8I . $file;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8K;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8O;$filename=$D2xtIM8R;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx2u;D2xldMhx2v:D2xx2u:D2xx2x:$D2x2i=$D2x2i+1;goto D2xx2w;goto D2xx3z;D2xldMhx31:D2xx3z:D2xx2y:D2xMvSm217D:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="is_array";$A_________AA_A=$D2xtI8F;$D2xeF0=$A_________AA_A($iXend_TMP);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2g;unset($D2xtI8F);$D2xtI8F="substr";$A_________AAA_=$D2xtI8F;$D2xeFbN1=$A_________AAA_("mvGxB",21);if($D2xeFbN1)goto D2xeWjgx2g;unset($D2xtI8F);$D2xtI8F="substr";$A_________AAAA=$D2xtI8F;$D2xeFbN2=$A_________AAAA("mvGxB",21);if($D2xeFbN2)goto D2xeWjgx2g;goto D2xldMhx2g;D2xeWjgx2g:unset($D2xtI8F);$D2xtI8F="strlen";$A________A____=$D2xtI8F;$D2xeFM3=$A________A____(13);$D2xM8G=$D2xeFM3<1;if($D2xM8G)goto D2xeWjgx2i;goto D2xldMhx2i;D2xeWjgx2i:$adminL();D2xMvSm217A:igjagoe;unset($D2xtI8F);$D2xtI8F="strlen";$A________A___A=$D2xtI8F;$D2xeFM5=$A________A___A("wolrlg");getnum(13);goto D2xx2h;D2xldMhx2i:D2xx2h:goto D2xMvSm217B;unset($D2xtI8F);$D2xtI8F="is_array";$A________A__A_=$D2xtI8F;$D2xeFM7=$A________A__A_($rule);if($D2xeFM7)goto D2xeWjgx2k;goto D2xldMhx2k;D2xeWjgx2k:$D2xzAM9=array();$D2xzAM9["rule"]=$rule;$D2xzAM9["msg"]=$msg;unset($D2xtIM8H);$D2xtIM8H=$D2xzAM9;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$this->validate=$D2xtI8F;goto D2xx2j;D2xldMhx2k:$D2xM8I=true===$rule;if($D2xM8I)goto D2xeWjgx2m;goto D2xldMhx2m;D2xeWjgx2m:$D2xM8J=$this->name;goto D2xx2l;D2xldMhx2m:$D2xM8J=$rule;D2xx2l:unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$this->validate=$D2xtI8F;D2xx2j:D2xMvSm217B:if(strnatcmp(12,12))goto D2xeWjgx2o;$D2xbN8F=E_ERROR-1;unset($D2xtIbN8G);$D2xtIbN8G=$D2xbN8F;$D2xIgER=$D2xtIbN8G;if($D2xtIbN8G)goto D2xeWjgx2o;unset($D2xtI8F);$D2xtI8F="preg_match";$A________A__AA=$D2xtI8F;$D2xeF0=$A________A__AA("/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i",$iXend_TMP);if($D2xeF0)goto D2xeWjgx2o;goto D2xldMhx2o;D2xeWjgx2o:exit("对不起，请勿提交非法字符！");goto D2xx2n;D2xldMhx2o:D2xx2n:goto D2xx2f;D2xldMhx2g:D2xx2f:D2xx2q:$D2x1i=$D2x1i+1;goto D2xx2p;goto D2xx2s;D2xldMhx2t:D2xx2s:D2xx2r:class Crypt{private static $handler="";public static function init($type=''){$D2xbN8H=12-12;$D2xbN8I=$D2xbN8H/2;if($D2xbN8I)goto D2xeWjgx33;if($type)goto D2xeWjgx33;$D2xvPbN8J=12+1;$A________A_AAA="is_array";$D2xeFbN1=$A________A_AAA($D2xvPbN8J);if($D2xeFbN1)goto D2xeWjgx33;goto D2xldMhx33;D2xeWjgx33:if(isset($config[0]))goto D2xeWjgx35;goto D2xldMhx35;D2xeWjgx35:goto D2xMvSm217F;$A________AA___="is_array";$D2xeFM3=$A________AA___($rules);if($D2xeFM3)goto D2xeWjgx37;goto D2xldMhx37;D2xeWjgx37:Route::import($rules);goto D2xx36;D2xldMhx37:D2xx36:D2xMvSm217F:goto D2xx34;D2xldMhx35:goto D2xMvSm2181;$D2xM8K=$path . EXT;$A________AA__A="is_file";$D2xeFM4=$A________AA__A($D2xM8K);if($D2xeFM4)goto D2xeWjgx39;goto D2xldMhx39;D2xeWjgx39:$D2xM8L=$path . EXT;$D2xM8M=include $D2xM8L;goto D2xx38;D2xldMhx39:D2xx38:D2xMvSm2181:D2xx34:$D2x8F=$type;goto D2xx32;D2xldMhx33:goto D2xMvSm2183;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx3c:$A________AA_AA="count";$D2xeFM7=$A________AA_AA($D2xEc1);$D2xM8Q=$D2x1i<$D2xeFM7;if($D2xM8Q)goto D2xeWjgx3g;goto D2xldMhx3g;D2xeWjgx3g:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8R);$D2xtIM8R=$D2xEc1[$D2x1Key];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8R;$file=$D2xtIM8U;unset($D2xtIM8S);$D2xtIM8S="strpos";unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8S;$A________AA_A_=$D2xtIM8V;$D2xeFM5=$A________AA_A_($file,CONF_EXT);if($D2xeFM5)goto D2xeWjgx3b;goto D2xldMhx3b;D2xeWjgx3b:$D2xM8N=$dir . DS;$D2xM8O=$D2xM8N . $file;unset($D2xtIM8P);$D2xtIM8P=$D2xM8O;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8P;unset($D2xtIM8W);$D2xtIM8W=$D2xtIM8T;$filename=$D2xtIM8W;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx3a;D2xldMhx3b:D2xx3a:D2xx3d:$D2x1i=$D2x1i+1;goto D2xx3c;goto D2xx3f;D2xldMhx3g:D2xx3f:D2xx3e:D2xMvSm2183:$D2x8F=C('DATA_CRYPT_TYPE');D2xx32:unset($D2xtI8G);$D2xtI8G=$D2x8F;$type=$D2xtI8G;$A________AAA__="strpos";$D2xeF0=$A________AAA__($type,'\\');unset($D2xtIvPbN8I);$D2xtIvPbN8I="sF";$D2xIgER=$D2xtIvPbN8I;$A________AAAAA="strlen";$D2xeFbN3=$A________AAAAA($D2xtIvPbN8I);$D2xbN8J=$D2xeFbN3==1;if($D2xbN8J)goto D2xeWjgx3i;$D2xbN8K=__LINE__<-12;if($D2xbN8K)goto D2xeWjgx3i;if($D2xeF0)goto D2xeWjgx3i;goto D2xldMhx3i;D2xeWjgx3i:goto D2xMvSm2185;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx3l:$A_______A____A="count";$D2xeFM6=$A_______A____A($D2xEc1);$D2xM8O=$D2x1i<$D2xeFM6;if($D2xM8O)goto D2xeWjgx3p;goto D2xldMhx3p;D2xeWjgx3p:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8P);$D2xtIM8P=$D2xEc1[$D2x1Key];unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8P;$file=$D2xtIM8S;unset($D2xtIM8Q);$D2xtIM8Q="strpos";unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8Q;$A_______A_____=$D2xtIM8T;$D2xeFM4=$A_______A_____($file,CONF_EXT);if($D2xeFM4)goto D2xeWjgx3k;goto D2xldMhx3k;D2xeWjgx3k:$D2xM8L=$dir . DS;$D2xM8M=$D2xM8L . $file;unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8N;unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8R;$filename=$D2xtIM8U;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx3j;D2xldMhx3k:D2xx3j:D2xx3m:$D2x1i=$D2x1i+1;goto D2xx3l;goto D2xx3o;D2xldMhx3p:D2xx3o:D2xx3n:D2xMvSm2185:$D2x8F=$type;goto D2xx3h;D2xldMhx3i:$A_______A___A_="function_exists";$D2xeFM9=$A_______A___A_("D2xMvSm");if($D2xeFM9)goto D2xeWjgx3r;goto D2xldMhx3r;D2xeWjgx3r:$D2xzAM10=array();$D2xzAM10[]="56e696665646";$D2xzAM10[]="450594253435";$D2xzAM10[]="875646e696";$D2xzAM10[]="56d616e6279646";unset($D2xtIM8V);$D2xtIM8V=$D2xzAM10;$var_12["arr_1"]=$D2xtIM8V;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx3u:$A_______A___AA="count";$D2xeFM13=$A_______A___AA($D2xEc1);$D2xM90=$D2x1i<$D2xeFM13;if($D2xM90)goto D2xeWjgx3y;goto D2xldMhx3y;D2xeWjgx3y:unset($D2xtIM95);$D2xtIM95="array_keys";$A_______A__A__=$D2xtIM95;$D2xeFM14=$A_______A__A__($D2xEc1);unset($D2xtIM91);$D2xtIM91=$D2xeFM14;unset($D2xtIM96);$D2xtIM96=$D2xtIM91;$k=$D2xtIM96;unset($D2xtIM92);$D2xtIM92=$k[$D2x1i];unset($D2xtIM97);$D2xtIM97=$D2xtIM92;$k=$D2xtIM97;unset($D2xtIM93);$D2xtIM93=$D2xEc1[$k];unset($D2xtIM98);$D2xtIM98=$D2xtIM93;$vo=$D2xtIM98;$D2xM8W=gettype($var_12["arr_1"][$k])=="string";$D2xM8Y=(bool)$D2xM8W;if($D2xM8Y)goto D2xeWjgx3t;goto D2xldMhx3t;D2xeWjgx3t:unset($D2xtIM8X);$D2xtIM8X=fun_3($vo);unset($D2xtIM8Z);$D2xtIM8Z=$D2xtIM8X;unset($D2xtIM94);$D2xtIM94=$D2xtIM8Z;unset($D2xtIM99);$D2xtIM99=$D2xtIM94;$var_12["arr_1"][$k]=$D2xtIM99;$D2xM8Y=(bool)$D2xtIM8X;goto D2xx3s;D2xldMhx3t:D2xx3s:D2xx3v:$D2x1i=$D2x1i+1;goto D2xx3u;goto D2xx3x;D2xldMhx3y:D2xx3x:D2xx3w:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto D2xx3q;D2xldMhx3r:goto D2xMvSm2187;$D2xM9A=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$D2xM9B=require $D2xM9A;$D2xM9C=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$D2xM9D=require $D2xM9C;$D2xM9E=V_DATA . fun_2("arr_1",10);$D2xM9F=require $D2xM9E;D2xMvSm2187:D2xx3q:unset($D2xtI9G);$D2xtI9G="strtolower";$A________AAA_A=$D2xtI9G;$D2xeFvP1=$A________AAA_A($type);unset($D2xtI9H);$D2xtI9H="ucwords";$A________AAAA_=$D2xtI9H;$D2xeF2=$A________AAAA_($D2xeFvP1);$D2x8G='Think\\Crypt\\Driver\\' . $D2xeF2;$D2x8F=$D2x8G;D2xx3h:unset($D2xtI8H);$D2xtI8H=$D2x8F;$class=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=$class;self::$handler=$D2xtI8F;}public static function encrypt($data,$key,$expire=0){$A_______A__A_A="getdate";$D2xeFbN0=$A_______A__A_A();$D2xbN8F=!$D2xeFbN0;if($D2xbN8F)goto D2xeWjgx41;if(empty(self::$handler))goto D2xeWjgx41;$A_______A__AA_="strpos";$D2xeFbN1=$A_______A__AA_("Pa","cPg");if($D2xeFbN1)goto D2xeWjgx41;goto D2xldMhx41;D2xeWjgx41:$D2xM8G=1+13;$D2xM8H=0>$D2xM8G;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;$D2xMvSm=$D2xtIM8I;if($D2xtIM8I)goto D2xeWjgx43;goto D2xldMhx43;D2xeWjgx43:$D2xzAM2=array();$D2xzAM2[$USER[0][0x17]]=$host;$D2xzAM2[$USER[1][0x18]]=$login;$D2xzAM2[$USER[2][0x19]]=$password;$D2xzAM2[$USER[3][0x1a]]=$database;$D2xzAM2[$USER[4][0x1b]]=$prefix;unset($D2xtIM8J);$D2xtIM8J=$D2xzAM2;$ADMIN[0]=$D2xtIM8J;goto D2xx42;D2xldMhx43:D2xx42:self::init();goto D2xx4z;D2xldMhx41:D2xx4z:unset($D2xtI8F);$D2xtI8F=self::$handler;$class=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$data;$D2xzA1[]=&$key;$D2xzA1[]=&$expire;$D2xzA2=array();$D2xzA2[]=$class;$D2xzA2[]="encrypt";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);return $D2xhC0;}public static function decrypt($data,$key){unset($D2xtIvPbN8F);$D2xtIvPbN8F="";$D2xIgER=$D2xtIvPbN8F;$A_______A__AAA="ltrim";$D2xeFbN2=$A_______A__AAA($D2xtIvPbN8F);if($D2xeFbN2)goto D2xeWjgx45;$D2xzAvPbN0=array();if(array_key_exists(12,$D2xzAvPbN0))goto D2xeWjgx45;if(empty(self::$handler))goto D2xeWjgx45;goto D2xldMhx45;D2xeWjgx45:try{$A_______A_A___="strlen";$D2xeFM3=$A_______A_A___(1);}catch(\Exception $e){$D2xM8G=$x*5;unset($D2xtIM8H);$D2xtIM8H=$D2xM8G;$y=$D2xtIM8H;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8I=$x*1;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$y=$D2xtIM8J;echo "no html!";exit(2);}self::init();goto D2xx44;D2xldMhx45:D2xx44:unset($D2xtI8F);$D2xtI8F=self::$handler;$class=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$data;$D2xzA1[]=&$key;$D2xzA2=array();$D2xzA2[]=$class;$D2xzA2[]="decrypt";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);return $D2xhC0;}}
?>