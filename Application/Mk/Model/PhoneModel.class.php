<?php
namespace Mk\Model;
use Think\Model;
Class PhoneModel extends Model{
	protected $autoCheckFields =false; 
  //���� �ж��Ƿ�Ϊ�ƶ��豸�Ĳ���
	public function judge(){
	
		 if(isset($_SERVER['HTTP_X_WAP_PROFILE']))  return TRUE;  
      
        //���via��Ϣ����wap��һ�����ƶ��豸,���ַ����̻����θ���Ϣ  
        if(isset($_SERVER['HTTP_VIA']))  
        {  
            //�Ҳ���Ϊflase,����Ϊtrue  
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;  
        }  
      
        //�ж��ֻ����͵Ŀͻ��˱�־,�������д����  
        if(isset($_SERVER['HTTP_USER_AGENT']))  
        {  
      
            $clientkeywords = array('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile');  
      
            //��HTTP_USER_AGENT�в����ֻ�������Ĺؼ���  
            if(preg_match('/('.implode('|', $clientkeywords).')/i', strtolower($_SERVER['HTTP_USER_AGENT'])))  
            {  
                return TRUE;  
            }  
        }  
      
        //Э�鷨����Ϊ�п��ܲ�׼ȷ���ŵ�����ж�  
        if(isset($_SERVER['HTTP_ACCEPT']))  
        {  
            //���ֻ֧��wml���Ҳ�֧��html��һ�����ƶ��豸  
            //���֧��wml��html����wml��html֮ǰ�����ƶ��豸  
            if((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) &&  
               (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false ||  
               (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))  
            {  
                    return TRUE;  
            }  
        }  
      
        return FALSE;  
		
		
		
	}
 
}