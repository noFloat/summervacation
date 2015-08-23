<?php 
namespace Curl;

/*
 *css获取
 */	
trait getCss{
	public function getCss($site,$gotaloutput){
		$pattern = '/href=\"[^http:|j]/';
    	$goaloutput = preg_replace($pattern, "href=\"".$site.'/', $goaloutput);
		$content="/<link(.*?)\n<link/";
		$goalarraynext='';
		preg_match_all($content,$goaloutput,$goalarray);

		foreach ($goalarray[0] as $key) {
			$goalarraynext.=$key;
		}
		$goalarray = $goalarraynext;
	}
}
/*
 *cookie存储路径
 *设置cookie
 */
trait setCookie{
	public function setCookiePosition($cookiePostion){
		$cookie_jar = dirname(__FILE__)."/pic.cookie";//绝对路径
	}

	public function setCookie(){
		curl_setopt($needsite, CURLOPT_COOKIEJAR, $cookie_jar);
	}
}

/*
 *curl初始化及设置
 */
trait curlSet{
	public function curlSet(){
		$needsite = curl_init();
		curl_setopt($needsite, CURLOPT_URL,  $goalsite);
		curl_setopt($needsite, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($needsite, CURLOPT_HEADER, 0);
		$goaloutput = curl_exec($needsite);	
	}

	public function dateCut($needsite){
		$needsite = json_decode($needsite);
	}
}
/*
 *模拟登陆的用户设置
 */
trait userSet{
	public function userSet($userValue,$user,$passwdValue,$passwd){
		$postarray =array($userValue => $user,$passwdValue => $passwd);
	}
	private function _loginmodel($needsite,$postarray){
		curl_setopt($needsite, CURLOPT_POSTFIELDS, $postarray);
	}
}



trait outContent{
	public function output($needsite){
		foreach($this->output as $output){
			echo $output;
		}
	}

}

class Curl{

	public function __destruct(){
		curl_close($this->site);
	}

}