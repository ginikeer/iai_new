<?php
	
	define("ALIYUN_SMS_KEY" ,"LTAIxejRcvkp0xsG");					//短信接口key
	define("ALIYUN_SMS_SECRET" ,"DSOPTGqLiKt5HBUUeu0Xiq2ZC0PFzU");	//短信接口SECRET
	define("ALIYUN_SMS_SIGN", "艾卫艾");								//短信签名
	define("ALIYUN_SMS_TEMPLATE_CODE", "SMS_105045035");			//短信模板编号

	define("USER_INFO_NOT_COMPLETED", 0);
	define("USER_INFO_HAS_COMPLETED", 1);
	define("USER_IS_DELETED", 2);
	define("USER_INFO_NOT_COMPLETED_STRING", "未认证");
	define("USER_INFO_HAS_COMPLETED_STRING", "已认证");
	define("USER_IS_DELETED_STRING", "退会");
	
	define("USER_APPLY_SENT", 1);
	define("USER_APPLY_NOT_SENT", 0);
	define("USER_APPLY_SENT_STRING", "已发送");
	define("USER_APPLY_NOT_SENT_STRING", "未发送");
	
	define("IS_PUBLISH", 1);
	define("IS_NOT_PUBLISH", 0);
	define("IS_PUBLISH_STRING", "已公开");
	define("IS_NOT_PUBLISH_STRING", "未公开");
	
	define("PER", 20);
	
	define("PRODUCT_IMG_PATH", '/storage/app/uploads/product/img/');
	define("CASE_IMG_PATH", '/storage/app/uploads/case/img/');
	define("NEWS_IMG_PATH", '/storage/app/uploads/news/img/');
	
	define("PRODUCT_PDF_PATH", '/storage/app/uploads/product/pdf/');
	define("MANUAL_PDF_PATH", '/storage/app/uploads/manual/pdf/');
	define("CATALOG_PDF_PATH", '/storage/app/uploads/catalog/pdf/');
	define("NEWS_PDF_PATH", '/storage/app/uploads/news/pdf/');
	
	define("CASE_VIDEO_PATH", '/storage/app/uploads/case/video/');
	
	define("CASE_CODE_PATH", '/iai-new2/storage/app/uploads/code/img/');
	
?>