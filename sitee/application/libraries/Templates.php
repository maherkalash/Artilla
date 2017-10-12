<?php
/**
 * 
 */
class Templates {
	var $CI;
	function __construct() {
		$this->CI = & get_instance();
	}
	
	public function active_mail($subject='', $name='', $url)
	{ 
		$res = '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
					<head>
						<!-- NAME: 1 COLUMN -->
						<!--[if gte mso 15]>
						<xml>
							<o:OfficeDocumentSettings>
							<o:AllowPNG/>
							<o:PixelsPerInch>96</o:PixelsPerInch>
							</o:OfficeDocumentSettings>
						</xml>
						<![endif]-->
						<meta charset="UTF-8">
				        <meta http-equiv="X-UA-Compatible" content="IE=edge">
				        <meta name="viewport" content="width=device-width, initial-scale=1">
						<title>*|MC:SUBJECT|*</title>
				        
				    <style type="text/css">
						p{
							margin:10px 0;
							padding:0;
						}
						table{
							border-collapse:collapse;
						}
						h1,h2,h3,h4,h5,h6{
							display:block;
							margin:0;
							padding:0;
						}
						img,a img{
							border:0;
							height:auto;
							outline:none;
							text-decoration:none;
						}
						body,#bodyTable,#bodyCell{
							height:100%;
							margin:0;
							padding:0;
							width:100%;
						}
						#outlook a{
							padding:0;
						}
						img{
							-ms-interpolation-mode:bicubic;
						}
						table{
							mso-table-lspace:0pt;
							mso-table-rspace:0pt;
						}
						.ReadMsgBody{
							width:100%;
						}
						.ExternalClass{
							width:100%;
						}
						p,a,li,td,blockquote{
							mso-line-height-rule:exactly;
						}
						a[href^=tel],a[href^=sms]{
							color:inherit;
							cursor:default;
							text-decoration:none;
						}
						p,a,li,td,body,table,blockquote{
							-ms-text-size-adjust:100%;
							-webkit-text-size-adjust:100%;
						}
						.ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
							line-height:100%;
						}
						a[x-apple-data-detectors]{
							color:inherit !important;
							text-decoration:none !important;
							font-size:inherit !important;
							font-family:inherit !important;
							font-weight:inherit !important;
							line-height:inherit !important;
						}
						#bodyCell{
							padding:10px;
						}
						.templateContainer{
							max-width:600px !important;
						}
						a.mcnButton{
							display:block;
						}
						.mcnImage{
							vertical-align:bottom;
						}
						.mcnTextContent{
							word-break:break-word;
						}
						.mcnTextContent img{
							height:auto !important;
						}
						.mcnDividerBlock{
							table-layout:fixed !important;
						}
						body,#bodyTable{
							background-color:#FAFAFA;
						}
						#bodyCell{
							border-top:0;
						}
						.templateContainer{
							border:0;
						}
						h1{
							color:#202020;
							font-family:Helvetica;
							font-size:26px;
							font-style:normal;
							font-weight:bold;
							line-height:125%;
							letter-spacing:normal;
							text-align:left;
						}
						h2{
							color:#202020;
							font-family:Helvetica;
							font-size:22px;
							font-style:normal;
							font-weight:bold;
							line-height:125%;
							letter-spacing:normal;
							text-align:left;
						}
						h3{
							color:#202020;
							font-family:Helvetica;
							font-size:20px;
							font-style:normal;
							font-weight:bold;
							line-height:125%;
							letter-spacing:normal;
							text-align:left;
						}
						h4{
							color:#202020;
							font-family:Helvetica;
							font-size:18px;
							font-style:normal;
							font-weight:bold;
							line-height:125%;
							letter-spacing:normal;
							text-align:left;
						}
						#templatePreheader{
							background-color:#FAFAFA;
							background-image:none;
							background-repeat:no-repeat;
							background-position:center;
							background-size:cover;
							border-top:0;
							border-bottom:0;
							padding-top:9px;
							padding-bottom:9px;
						}
						#templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
							color:#656565;
							font-family:Helvetica;
							font-size:12px;
							line-height:150%;
							text-align:left;
						}
						#templatePreheader .mcnTextContent a,#templatePreheader .mcnTextContent p a{
							color:#656565;
							font-weight:normal;
							text-decoration:underline;
						}
						#templateHeader{
							background-color:#FFFFFF;
							background-image:none;
							background-repeat:no-repeat;
							background-position:center;
							background-size:cover;
							border-top:0;
							border-bottom:0;
							padding-top:9px;
							padding-bottom:0;
						}
						#templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
							color:#202020;
							font-family:Helvetica;
							font-size:16px;
							line-height:150%;
							text-align:left;
						}
						#templateHeader .mcnTextContent a,#templateHeader .mcnTextContent p a{
							color:#2BAADF;
							font-weight:normal;
							text-decoration:underline;
						}
						#templateBody{
							background-color:#ffffff;
							background-image:none;
							background-repeat:no-repeat;
							background-position:center;
							background-size:cover;
							border-top:0;
							border-bottom:2px solid #EAEAEA;
							padding-top:0;
							padding-bottom:9px;
						}
						#templateBody .mcnTextContent,#templateBody .mcnTextContent p{
							color:#202020;
							font-family:Helvetica;
							font-size:16px;
							line-height:150%;
							text-align:left;
						}
						#templateBody .mcnTextContent a,#templateBody .mcnTextContent p a{
							color:#2BAADF;
							font-weight:normal;
							text-decoration:underline;
						}
						#templateFooter{
							background-color:#FAFAFA;
							background-image:none;
							background-repeat:no-repeat;
							background-position:center;
							background-size:cover;
							border-top:0;
							border-bottom:0;
							padding-top:9px;
							padding-bottom:9px;
						}
						#templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
							color:#656565;
							font-family:Helvetica;
							font-size:12px;
							line-height:150%;
							text-align:center;
						}
						#templateFooter .mcnTextContent a,#templateFooter .mcnTextContent p a{
							color:#656565;
							font-weight:normal;
							text-decoration:underline;
						}
					@media only screen and (min-width:768px){
						.templateContainer{
							width:600px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						body,table,td,p,a,li,blockquote{
							-webkit-text-size-adjust:none !important;
						}
				
				}	@media only screen and (max-width: 480px){
						body{
							width:100% !important;
							min-width:100% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						#bodyCell{
							padding-top:10px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnImage{
							width:100% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
							max-width:100% !important;
							width:100% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnBoxedTextContentContainer{
							min-width:100% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnImageGroupContent{
							padding:9px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
							padding-top:9px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
							padding-top:18px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnImageCardBottomImageContent{
							padding-bottom:9px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnImageGroupBlockInner{
							padding-top:0 !important;
							padding-bottom:0 !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnImageGroupBlockOuter{
							padding-top:9px !important;
							padding-bottom:9px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnTextContent,.mcnBoxedTextContentColumn{
							padding-right:18px !important;
							padding-left:18px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
							padding-right:18px !important;
							padding-bottom:0 !important;
							padding-left:18px !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcpreview-image-uploader{
							display:none !important;
							width:100% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						h1{
							font-size:22px !important;
							line-height:125% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						h2{
							font-size:20px !important;
							line-height:125% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						h3{
							font-size:18px !important;
							line-height:125% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						h4{
							font-size:16px !important;
							line-height:150% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						.mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
							font-size:14px !important;
							line-height:150% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						#templatePreheader{
							display:block !important;
						}
				
				}	@media only screen and (max-width: 480px){
						#templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
							font-size:14px !important;
							line-height:150% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						#templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
							font-size:16px !important;
							line-height:150% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						#templateBody .mcnTextContent,#templateBody .mcnTextContent p{
							font-size:16px !important;
							line-height:150% !important;
						}
				
				}	@media only screen and (max-width: 480px){
						#templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
							font-size:14px !important;
							line-height:150% !important;
						}
				
				}</style></head>
				    <body style="height: 100%;margin: 0;padding: 0;width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FAFAFA;">
				        <center>
				            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;background-color: #FAFAFA;">
				                <tr>
				                    <td align="center" valign="top" id="bodyCell" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 10px;width: 100%;border-top: 0;">
				                        <!-- BEGIN TEMPLATE // -->
										<!--[if gte mso 9]>
										<table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
										<tr>
										<td align="center" valign="top" width="600" style="width:600px;">
										<![endif]-->
				                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border: 0;max-width: 600px !important;">
				                            <tr>
				                                <td valign="top" id="templatePreheader" style="background:#FAFAFA none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FAFAFA;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 9px;padding-bottom: 9px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnImageBlockOuter">
				            <tr>
				                <td valign="top" style="padding: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnImageBlockInner">
				                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                        <tbody><tr>
				                            <td class="mcnImageContent" valign="top" style="padding-right: 0px;padding-left: 0px;padding-top: 0;padding-bottom: 0;text-align: center;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                
				                                    
				                                        <img align="center" alt="" src="https://gallery.mailchimp.com/826868fb277f25f1473804c2e/images/d3884bd6-22fd-4630-9d2c-65151d3b6a49.png" width="178.5" style="max-width: 357px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">
				                                    
				                                
				                            </td>
				                        </tr>
				                    </tbody></table>
				                </td>
				            </tr>
				    </tbody>
				</table></td>
				                            </tr>
				                            <tr>
				                                <td valign="top" id="templateHeader" style="background:#FFFFFF none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 9px;padding-bottom: 0;"></td>
				                            </tr>
				                            <tr>
				                                <td valign="top" id="templateBody" style="background:#ffffff none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #ffffff;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 2px solid #EAEAEA;padding-top: 0;padding-bottom: 9px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnTextBlockOuter">
				        <tr>
				            <td valign="top" class="mcnTextBlockInner" style="padding-top: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				              	<!--[if mso]>
								<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
								<tr>
								<![endif]-->
							    
								<!--[if mso]>
								<td valign="top" width="600" style="width:600px;">
								<![endif]-->
				                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width: 100%;min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" width="100%" class="mcnTextContentContainer">
				                    <tbody><tr>
				                        
				                        <td valign="top" class="mcnTextContent" style="padding: 0px 18px 9px;line-height: 200%;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: #202020;font-family: Helvetica;font-size: 16px;text-align: left;">
				                        
				                            <h1 class="null" style="text-align: center;display: block;margin: 0;padding: 0;color: #202020;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: normal;"><span style="color:#696969">We\'re glad you\'re here, 
				                            ' . $name . '</span></h1>
				
				<div style="text-align: center;"><span style="color:#696969">Click the button below to activate your account.</span></div>
				
				                        </td>
				                    </tr>
				                </tbody></table>
								<!--[if mso]>
								</td>
								<![endif]-->
				                
								<!--[if mso]>
								</tr>
								</table>
								<![endif]-->
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnImageBlockOuter">
				            <tr>
				                <td valign="top" style="padding: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnImageBlockInner">
				                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                        <tbody><tr>
				                            <td class="mcnImageContent" valign="top" style="padding-right: 0px;padding-left: 0px;padding-top: 0;padding-bottom: 0;text-align: center;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                
				                                    
				                                        <img align="center" alt="" src="https://gallery.mailchimp.com/826868fb277f25f1473804c2e/images/310fdba4-9caa-4a0e-81d2-927047ef978a.png" width="512" style="max-width: 1024px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">
				                                    
				                                
				                            </td>
				                        </tr>
				                    </tbody></table>
				                </td>
				            </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top-width: 2px;border-top-style: solid;border-top-color: #FFFFFF;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnButtonBlockOuter">
				        <tr>
				            <td style="padding-top: 0;padding-right: 18px;padding-bottom: 18px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" valign="top" align="center" class="mcnButtonBlockInner">
				                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;background-color: #FF3A1E;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody>
				                        <tr>
				                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Arial;font-size: 16px;padding: 15px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                <a class="mcnButton " title="My Profile" href="'.$url.'" target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;display: block;">Activate your Account</a>
				                            </td>
				                        </tr>
				                    </tbody>
				                </table>
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                            </tr>
				                            <tr>
				                                <td valign="top" id="templateFooter" style="background:#FAFAFA none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FAFAFA;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 9px;padding-bottom: 9px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnFollowBlockOuter">
				        <tr>
				            <td align="center" valign="top" style="padding: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowBlockInner">
				                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody><tr>
				        <td align="center" style="padding-left: 9px;padding-right: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContent">
				                <tbody><tr>
				                    <td align="center" valign="top" style="padding-top: 9px;padding-right: 9px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <tbody><tr>
				                                <td align="center" valign="top" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                    <!--[if mso]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
				                                    <tr>
				                                    <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="https://www.facebook.com/dubarah" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-facebook-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="https://twitter.com/dubarah" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-twitter-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="https://www.linkedin.com/company/dubarah" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-linkedin-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="https://www.instagram.com/dubarah/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-instagram-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 0;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://dubarah.com" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-dark-link-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                    <!--[if mso]>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                        </tbody></table>
				                    </td>
				                </tr>
				            </tbody></table>
				        </td>
				    </tr>
				</tbody></table>
				
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnTextBlockOuter">
				        <tr>
				            <td valign="top" class="mcnTextBlockInner" style="padding-top: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				              	<!--[if mso]>
								<table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
								<tr>
								<![endif]-->
							    
								<!--[if mso]>
								<td valign="top" width="600" style="width:600px;">
								<![endif]-->
				                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width: 100%;min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" width="100%" class="mcnTextContentContainer">
				                    <tbody><tr>
				                        
				                        <td valign="top" class="mcnTextContent" style="padding-top: 0;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: #656565;font-family: Helvetica;font-size: 12px;line-height: 150%;text-align: center;">
				                        
				                            Copyright © 2017 Dubarah Inc.™ , All rights reserved. Non-Profit Corporation, incorporated under the "Canada NFP Corporation Act. CN# 972045-6 - Toronto, Ontario, Canada<br>
				You can <a href="*|UPDATE_PROFILE|*" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #656565;font-weight: normal;text-decoration: underline;">update your preferences</a> or <a href="*|UNSUB|*" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #656565;font-weight: normal;text-decoration: underline;">unsubscribe from this list</a>
				                        </td>
				                    </tr>
				                </tbody></table>
								<!--[if mso]>
								</td>
								<![endif]-->
				                
								<!--[if mso]>
								</tr>
								</table>
								<![endif]-->
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 10px 18px 25px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top-width: 2px;border-top-style: solid;border-top-color: #EEEEEE;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                            </tr>
				                        </table>
										<!--[if gte mso 9]>
										</td>
										</tr>
										</table>
										<![endif]-->
				                        <!-- // END TEMPLATE -->
				                    </td>
				                </tr>
				            </table>
				        </center>
				    </body>
				</html>';
		return $res;
	}
	
	
	
	public function reset_pass($subject='', $name='', $url)
	{ 
		$res = '<!doctype html>
				<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
				    <head>
				        <!-- NAME: SURVEY -->
				        <!--[if gte mso 15]>
				        <xml>
				            <o:OfficeDocumentSettings>
				            <o:AllowPNG/>
				            <o:PixelsPerInch>96</o:PixelsPerInch>
				            </o:OfficeDocumentSettings>
				        </xml>
				        <![endif]-->
				        <meta charset="UTF-8">
				        <meta http-equiv="X-UA-Compatible" content="IE=edge">
				        <meta name="viewport" content="width=device-width, initial-scale=1">
				        <title>'.$subject.'</title>
				        
				    <style type="text/css">
				        p{
				            margin:10px 0;
				            padding:0;
				        }
				        table{
				            border-collapse:collapse;
				        }
				        h1,h2,h3,h4,h5,h6{
				            display:block;
				            margin:0;
				            padding:0;
				        }
				        img,a img{
				            border:0;
				            height:auto;
				            outline:none;
				            text-decoration:none;
				        }
				        body,#bodyTable,#bodyCell{
				            height:100%;
				            margin:0;
				            padding:0;
				            width:100%;
				        }
				        #outlook a{
				            padding:0;
				        }
				        img{
				            -ms-interpolation-mode:bicubic;
				        }
				        table{
				            mso-table-lspace:0pt;
				            mso-table-rspace:0pt;
				        }
				        .ReadMsgBody{
				            width:100%;
				        }
				        .ExternalClass{
				            width:100%;
				        }
				        p,a,li,td,blockquote{
				            mso-line-height-rule:exactly;
				        }
				        a[href^=tel],a[href^=sms]{
				            color:inherit;
				            cursor:default;
				            text-decoration:none;
				        }
				        p,a,li,td,body,table,blockquote{
				            -ms-text-size-adjust:100%;
				            -webkit-text-size-adjust:100%;
				        }
				        .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
				            line-height:100%;
				        }
				        a[x-apple-data-detectors]{
				            color:inherit !important;
				            text-decoration:none !important;
				            font-size:inherit !important;
				            font-family:inherit !important;
				            font-weight:inherit !important;
				            line-height:inherit !important;
				        }
				        .templateContainer{
				            max-width:600px !important;
				        }
				        a.mcnButton{
				            display:block;
				        }
				        .mcnImage{
				            vertical-align:bottom;
				        }
				        .mcnTextContent{
				            word-break:break-word;
				        }
				        .mcnTextContent img{
				            height:auto !important;
				        }
				        .mcnDividerBlock{
				            table-layout:fixed !important;
				        }
				        h1{
				            color:#222222;
				            font-family:Helvetica;
				            font-size:40px;
				            font-style:normal;
				            font-weight:bold;
				            line-height:150%;
				            letter-spacing:normal;
				            text-align:center;
				        }
				        h2{
				            color:#222222;
				            font-family:Helvetica;
				            font-size:34px;
				            font-style:normal;
				            font-weight:bold;
				            line-height:150%;
				            letter-spacing:normal;
				            text-align:left;
				        }
				        h3{
				            color:#444444;
				            font-family:Helvetica;
				            font-size:22px;
				            font-style:normal;
				            font-weight:bold;
				            line-height:150%;
				            letter-spacing:normal;
				            text-align:center;
				        }
				        h4{
				            color:#999999;
				            font-family:Georgia;
				            font-size:20px;
				            font-style:italic;
				            font-weight:normal;
				            line-height:125%;
				            letter-spacing:normal;
				            text-align:left;
				        }
				        #templateHeader{
				            background-color:#F7F7F7;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:54px;
				            padding-bottom:54px;
				        }
				        .headerContainer{
				            background-color:transparent;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:0;
				            padding-bottom:0;
				        }
				        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
				            color:#808080;
				            font-family:Helvetica;
				            font-size:16px;
				            line-height:150%;
				            text-align:left;
				        }
				        .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
				            color:#00ADD8;
				            font-weight:normal;
				            text-decoration:underline;
				        }
				        #templateBody{
				            background-color:#FFFFFF;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:27px;
				            padding-bottom:54px;
				        }
				        .bodyContainer{
				            background-color:transparent;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:0;
				            padding-bottom:0;
				        }
				        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
				            color:#808080;
				            font-family:Helvetica;
				            font-size:18px;
				            line-height:150%;
				            text-align:left;
				        }
				        .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
				            color:#00ADD8;
				            font-weight:normal;
				            text-decoration:underline;
				        }
				        #templateFooter{
				            background-color:#333333;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:45px;
				            padding-bottom:63px;
				        }
				        .footerContainer{
				            background-color:#333333;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:0;
				            padding-bottom:0;
				        }
				        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
				            color:#FFFFFF;
				            font-family:Helvetica;
				            font-size:12px;
				            line-height:150%;
				            text-align:center;
				        }
				        .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
				            color:#FFFFFF;
				            font-weight:normal;
				            text-decoration:underline;
				        }
				    @media only screen and (min-width:768px){
				        .templateContainer{
				            width:600px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        body,table,td,p,a,li,blockquote{
				            -webkit-text-size-adjust:none !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        body{
				            width:100% !important;
				            min-width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImage{
				            width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
				            max-width:100% !important;
				            width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnBoxedTextContentContainer{
				            min-width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageGroupContent{
				            padding:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
				            padding-top:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
				            padding-top:18px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageCardBottomImageContent{
				            padding-bottom:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageGroupBlockInner{
				            padding-top:0 !important;
				            padding-bottom:0 !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageGroupBlockOuter{
				            padding-top:9px !important;
				            padding-bottom:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnTextContent,.mcnBoxedTextContentColumn{
				            padding-right:18px !important;
				            padding-left:18px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
				            padding-right:18px !important;
				            padding-bottom:0 !important;
				            padding-left:18px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcpreview-image-uploader{
				            display:none !important;
				            width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h1{
				            font-size:30px !important;
				            line-height:125% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h2{
				            font-size:26px !important;
				            line-height:125% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h3{
				            font-size:20px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h4{
				            font-size:18px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
				            font-size:14px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
				            font-size:16px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
				            font-size:16px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
				            font-size:14px !important;
				            line-height:150% !important;
				        }
				
				}</style></head>
				    <body style="height: 100%;margin: 0;padding: 0;width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				        <center>
				            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;">
				                <tr>
				                    <td align="center" valign="top" id="bodyCell" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;">
				                        <!-- BEGIN TEMPLATE // -->
				                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <tr>
				                                <td align="center" valign="top" id="templateHeader" data-template-container style="background:#F7F7F7 none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #F7F7F7;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 54px;padding-bottom: 54px;">
				                                    <!--[if gte mso 9]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
				                                    <tr>
				                                    <td align="center" valign="top" width="600" style="width:600px;">
				                                    <![endif]-->
				                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;max-width: 600px !important;">
				                                        <tr>
				                                            <td valign="top" class="headerContainer" style="background:transparent none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: transparent;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 0;padding-bottom: 0;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnImageBlockOuter">
				            <tr>
				                <td valign="top" style="padding: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnImageBlockInner">
				                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                        <tbody><tr>
				                            <td class="mcnImageContent" valign="top" style="padding-right: 9px;padding-left: 9px;padding-top: 0;padding-bottom: 0;text-align: center;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                
				                                    
				                                        <img align="center" alt="" src="https://gallery.mailchimp.com/9be8e73cdfbc559e1b07109be/images/0aa8fb07-2ab0-4027-a062-b58ccee5346c.png" width="400" style="max-width: 400px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">
				                                    
				                                
				                            </td>
				                        </tr>
				                    </tbody></table>
				                </td>
				            </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnTextBlockOuter">
				        <tr>
				            <td valign="top" class="mcnTextBlockInner" style="padding-top: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <!--[if mso]>
				                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
				                <tr>
				                <![endif]-->
				                
				                <!--[if mso]>
				                <td valign="top" width="600" style="width:600px;">
				                <![endif]-->
				                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width: 100%;min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" width="100%" class="mcnTextContentContainer">
				                    <tbody><tr>
				                        
				                        <td valign="top" class="mcnTextContent" style="padding-top: 0;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: #808080;font-family: Helvetica;font-size: 16px;line-height: 150%;text-align: left;">
				                        
				                            <h1 style="display: block;margin: 0;padding: 0;color: #222222;font-family: Helvetica;font-size: 40px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;text-align: center;">Hello '.$name.' ! Click to change your password</h1>
				
				                        </td>
				                    </tr>
				                </tbody></table>
				                <!--[if mso]>
				                </td>
				                <![endif]-->
				                
				                <!--[if mso]>
				                </tr>
				                </table>
				                <![endif]-->
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                                        </tr>
				                                    </table>
				                                    <!--[if gte mso 9]>
				                                    </td>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="center" valign="top" id="templateBody" data-template-container style="background:#FFFFFF none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 27px;padding-bottom: 54px;">
				                                    <!--[if gte mso 9]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
				                                    <tr>
				                                    <td align="center" valign="top" width="600" style="width:600px;">
				                                    <![endif]-->
				                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;max-width: 600px !important;">
				                                        <tr>
				                                            <td valign="top" class="bodyContainer" style="background:transparent none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: transparent;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 0;padding-bottom: 0;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnButtonBlockOuter">
				        <tr>
				            <td style="padding-top: 0;padding-right: 18px;padding-bottom: 18px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" valign="top" align="center" class="mcnButtonBlockInner">
				                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #C0C0C0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody>
				                        <tr>
				                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Arial;font-size: 16px;padding: 15px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                <a class="mcnButton " title="Activate " href="'.$url .'" target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;display: block;">Change</a>
				                            </td>
				                        </tr>
				                    </tbody>
				                </table>
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 18px 18px 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 27px 18px 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                                        </tr>
				                                    </table>
				                                    <!--[if gte mso 9]>
				                                    </td>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="center" valign="top" id="templateFooter" data-template-container style="background:#333333 none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #333333;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 45px;padding-bottom: 63px;">
				                                    <!--[if gte mso 9]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
				                                    <tr>
				                                    <td align="center" valign="top" width="600" style="width:600px;">
				                                    <![endif]-->
				                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;max-width: 600px !important;">
				                                        <tr>
				                                            <td valign="top" class="footerContainer" style="background:#333333 none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #333333;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 0;padding-bottom: 0;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnFollowBlockOuter">
				        <tr>
				            <td align="center" valign="top" style="padding: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowBlockInner">
				                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody><tr>
				        <td align="center" style="padding-left: 9px;padding-right: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContent">
				                <tbody><tr>
				                    <td align="center" valign="top" style="padding-top: 9px;padding-right: 9px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <tbody><tr>
				                                <td align="center" valign="top" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                    <!--[if mso]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
				                                    <tr>
				                                    <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://www.facebook.com" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://www.twitter.com/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://www.instagram.com/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 0;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://mailchimp.com" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                    <!--[if mso]>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                        </tbody></table>
				                    </td>
				                </tr>
				            </tbody></table>
				        </td>
				    </tr>
				</tbody></table>
				
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                                        </tr>
				                                    </table>
				                                    <!--[if gte mso 9]>
				                                    </td>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                        </table>
				                        <!-- // END TEMPLATE -->
				                    </td>
				                </tr>
				            </table>
				        </center>
				    </body>
				</html>';
		return $res;
	}
	
	public function job_apply($subject='', $name='', $url)
	{ 
		$res = '<!doctype html>
				<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
				    <head>
				        <!-- NAME: SURVEY -->
				        <!--[if gte mso 15]>
				        <xml>
				            <o:OfficeDocumentSettings>
				            <o:AllowPNG/>
				            <o:PixelsPerInch>96</o:PixelsPerInch>
				            </o:OfficeDocumentSettings>
				        </xml>
				        <![endif]-->
				        <meta charset="UTF-8">
				        <meta http-equiv="X-UA-Compatible" content="IE=edge">
				        <meta name="viewport" content="width=device-width, initial-scale=1">
				        <title>'.$subject.'</title>
				        
				    <style type="text/css">
				        p{
				            margin:10px 0;
				            padding:0;
				        }
				        table{
				            border-collapse:collapse;
				        }
				        h1,h2,h3,h4,h5,h6{
				            display:block;
				            margin:0;
				            padding:0;
				        }
				        img,a img{
				            border:0;
				            height:auto;
				            outline:none;
				            text-decoration:none;
				        }
				        body,#bodyTable,#bodyCell{
				            height:100%;
				            margin:0;
				            padding:0;
				            width:100%;
				        }
				        #outlook a{
				            padding:0;
				        }
				        img{
				            -ms-interpolation-mode:bicubic;
				        }
				        table{
				            mso-table-lspace:0pt;
				            mso-table-rspace:0pt;
				        }
				        .ReadMsgBody{
				            width:100%;
				        }
				        .ExternalClass{
				            width:100%;
				        }
				        p,a,li,td,blockquote{
				            mso-line-height-rule:exactly;
				        }
				        a[href^=tel],a[href^=sms]{
				            color:inherit;
				            cursor:default;
				            text-decoration:none;
				        }
				        p,a,li,td,body,table,blockquote{
				            -ms-text-size-adjust:100%;
				            -webkit-text-size-adjust:100%;
				        }
				        .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
				            line-height:100%;
				        }
				        a[x-apple-data-detectors]{
				            color:inherit !important;
				            text-decoration:none !important;
				            font-size:inherit !important;
				            font-family:inherit !important;
				            font-weight:inherit !important;
				            line-height:inherit !important;
				        }
				        .templateContainer{
				            max-width:600px !important;
				        }
				        a.mcnButton{
				            display:block;
				        }
				        .mcnImage{
				            vertical-align:bottom;
				        }
				        .mcnTextContent{
				            word-break:break-word;
				        }
				        .mcnTextContent img{
				            height:auto !important;
				        }
				        .mcnDividerBlock{
				            table-layout:fixed !important;
				        }
				        h1{
				            color:#222222;
				            font-family:Helvetica;
				            font-size:40px;
				            font-style:normal;
				            font-weight:bold;
				            line-height:150%;
				            letter-spacing:normal;
				            text-align:center;
				        }
				        h2{
				            color:#222222;
				            font-family:Helvetica;
				            font-size:34px;
				            font-style:normal;
				            font-weight:bold;
				            line-height:150%;
				            letter-spacing:normal;
				            text-align:left;
				        }
				        h3{
				            color:#444444;
				            font-family:Helvetica;
				            font-size:22px;
				            font-style:normal;
				            font-weight:bold;
				            line-height:150%;
				            letter-spacing:normal;
				            text-align:center;
				        }
				        h4{
				            color:#999999;
				            font-family:Georgia;
				            font-size:20px;
				            font-style:italic;
				            font-weight:normal;
				            line-height:125%;
				            letter-spacing:normal;
				            text-align:left;
				        }
				        #templateHeader{
				            background-color:#F7F7F7;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:54px;
				            padding-bottom:54px;
				        }
				        .headerContainer{
				            background-color:transparent;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:0;
				            padding-bottom:0;
				        }
				        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
				            color:#808080;
				            font-family:Helvetica;
				            font-size:16px;
				            line-height:150%;
				            text-align:left;
				        }
				        .headerContainer .mcnTextContent a,.headerContainer .mcnTextContent p a{
				            color:#00ADD8;
				            font-weight:normal;
				            text-decoration:underline;
				        }
				        #templateBody{
				            background-color:#FFFFFF;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:27px;
				            padding-bottom:54px;
				        }
				        .bodyContainer{
				            background-color:transparent;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:0;
				            padding-bottom:0;
				        }
				        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
				            color:#808080;
				            font-family:Helvetica;
				            font-size:18px;
				            line-height:150%;
				            text-align:left;
				        }
				        .bodyContainer .mcnTextContent a,.bodyContainer .mcnTextContent p a{
				            color:#00ADD8;
				            font-weight:normal;
				            text-decoration:underline;
				        }
				        #templateFooter{
				            background-color:#333333;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:45px;
				            padding-bottom:63px;
				        }
				        .footerContainer{
				            background-color:#333333;
				            background-image:none;
				            background-repeat:no-repeat;
				            background-position:center;
				            background-size:cover;
				            border-top:0;
				            border-bottom:0;
				            padding-top:0;
				            padding-bottom:0;
				        }
				        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
				            color:#FFFFFF;
				            font-family:Helvetica;
				            font-size:12px;
				            line-height:150%;
				            text-align:center;
				        }
				        .footerContainer .mcnTextContent a,.footerContainer .mcnTextContent p a{
				            color:#FFFFFF;
				            font-weight:normal;
				            text-decoration:underline;
				        }
				    @media only screen and (min-width:768px){
				        .templateContainer{
				            width:600px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        body,table,td,p,a,li,blockquote{
				            -webkit-text-size-adjust:none !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        body{
				            width:100% !important;
				            min-width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImage{
				            width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
				            max-width:100% !important;
				            width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnBoxedTextContentContainer{
				            min-width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageGroupContent{
				            padding:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
				            padding-top:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
				            padding-top:18px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageCardBottomImageContent{
				            padding-bottom:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageGroupBlockInner{
				            padding-top:0 !important;
				            padding-bottom:0 !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageGroupBlockOuter{
				            padding-top:9px !important;
				            padding-bottom:9px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnTextContent,.mcnBoxedTextContentColumn{
				            padding-right:18px !important;
				            padding-left:18px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
				            padding-right:18px !important;
				            padding-bottom:0 !important;
				            padding-left:18px !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcpreview-image-uploader{
				            display:none !important;
				            width:100% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h1{
				            font-size:30px !important;
				            line-height:125% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h2{
				            font-size:26px !important;
				            line-height:125% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h3{
				            font-size:20px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        h4{
				            font-size:18px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
				            font-size:14px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
				            font-size:16px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
				            font-size:16px !important;
				            line-height:150% !important;
				        }
				
				}   @media only screen and (max-width: 480px){
				        .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
				            font-size:14px !important;
				            line-height:150% !important;
				        }
				
				}</style></head>
				    <body style="height: 100%;margin: 0;padding: 0;width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				        <center>
				            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;">
				                <tr>
				                    <td align="center" valign="top" id="bodyCell" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;">
				                        <!-- BEGIN TEMPLATE // -->
				                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <tr>
				                                <td align="center" valign="top" id="templateHeader" data-template-container style="background:#F7F7F7 none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #F7F7F7;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 54px;padding-bottom: 54px;">
				                                    <!--[if gte mso 9]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
				                                    <tr>
				                                    <td align="center" valign="top" width="600" style="width:600px;">
				                                    <![endif]-->
				                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;max-width: 600px !important;">
				                                        <tr>
				                                            <td valign="top" class="headerContainer" style="background:transparent none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: transparent;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 0;padding-bottom: 0;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnImageBlockOuter">
				            <tr>
				                <td valign="top" style="padding: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnImageBlockInner">
				                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                        <tbody><tr>
				                            <td class="mcnImageContent" valign="top" style="padding-right: 9px;padding-left: 9px;padding-top: 0;padding-bottom: 0;text-align: center;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                
				                                    
				                                        <img align="center" alt="" src="https://gallery.mailchimp.com/9be8e73cdfbc559e1b07109be/images/0aa8fb07-2ab0-4027-a062-b58ccee5346c.png" width="400" style="max-width: 400px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">
				                                    
				                                
				                            </td>
				                        </tr>
				                    </tbody></table>
				                </td>
				            </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnTextBlockOuter">
				        <tr>
				            <td valign="top" class="mcnTextBlockInner" style="padding-top: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <!--[if mso]>
				                <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
				                <tr>
				                <![endif]-->
				                
				                <!--[if mso]>
				                <td valign="top" width="600" style="width:600px;">
				                <![endif]-->
				                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width: 100%;min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" width="100%" class="mcnTextContentContainer">
				                    <tbody><tr>
				                        
				                        <td valign="top" class="mcnTextContent" style="padding-top: 0;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: #808080;font-family: Helvetica;font-size: 16px;line-height: 150%;text-align: left;">
				                        
				                            <h1 style="display: block;margin: 0;padding: 0;color: #222222;font-family: Helvetica;font-size: 40px;font-style: normal;font-weight: bold;line-height: 150%;letter-spacing: normal;text-align: center;">Hello '.$name.' ! You Have New Applicants ,Click To See Them</h1>
				
				                        </td>
				                    </tr>
				                </tbody></table>
				                <!--[if mso]>
				                </td>
				                <![endif]-->
				                
				                <!--[if mso]>
				                </tr>
				                </table>
				                <![endif]-->
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                                        </tr>
				                                    </table>
				                                    <!--[if gte mso 9]>
				                                    </td>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="center" valign="top" id="templateBody" data-template-container style="background:#FFFFFF none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 27px;padding-bottom: 54px;">
				                                    <!--[if gte mso 9]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
				                                    <tr>
				                                    <td align="center" valign="top" width="600" style="width:600px;">
				                                    <![endif]-->
				                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;max-width: 600px !important;">
				                                        <tr>
				                                            <td valign="top" class="bodyContainer" style="background:transparent none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: transparent;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 0;padding-bottom: 0;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnButtonBlockOuter">
				        <tr>
				            <td style="padding-top: 0;padding-right: 18px;padding-bottom: 18px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" valign="top" align="center" class="mcnButtonBlockInner">
				                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 3px;background-color: #C0C0C0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody>
				                        <tr>
				                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Arial;font-size: 16px;padding: 15px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                <a class="mcnButton " title="Activate " href="'.$url .'" target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;display: block;">SHOW Applicants</a>
				                            </td>
				                        </tr>
				                    </tbody>
				                </table>
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 18px 18px 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 27px 18px 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                                        </tr>
				                                    </table>
				                                    <!--[if gte mso 9]>
				                                    </td>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="center" valign="top" id="templateFooter" data-template-container style="background:#333333 none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #333333;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 45px;padding-bottom: 63px;">
				                                    <!--[if gte mso 9]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
				                                    <tr>
				                                    <td align="center" valign="top" width="600" style="width:600px;">
				                                    <![endif]-->
				                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;max-width: 600px !important;">
				                                        <tr>
				                                            <td valign="top" class="footerContainer" style="background:#333333 none no-repeat center/cover;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #333333;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;border-top: 0;border-bottom: 0;padding-top: 0;padding-bottom: 0;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody class="mcnFollowBlockOuter">
				        <tr>
				            <td align="center" valign="top" style="padding: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowBlockInner">
				                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentContainer" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				    <tbody><tr>
				        <td align="center" style="padding-left: 9px;padding-right: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContent">
				                <tbody><tr>
				                    <td align="center" valign="top" style="padding-top: 9px;padding-right: 9px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <tbody><tr>
				                                <td align="center" valign="top" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                    <!--[if mso]>
				                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
				                                    <tr>
				                                    <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://www.facebook.com" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-facebook-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://www.twitter.com/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-twitter-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 10px;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://www.instagram.com/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-instagram-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                        <!--[if mso]>
				                                        <td align="center" valign="top">
				                                        <![endif]-->
				                                        
				                                        
				                                            <table align="left" border="0" cellpadding="0" cellspacing="0" style="display: inline;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                <tbody><tr>
				                                                    <td valign="top" style="padding-right: 0;padding-bottom: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnFollowContentItemContainer">
				                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnFollowContentItem" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                            <tbody><tr>
				                                                                <td align="left" valign="middle" style="padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                        <tbody><tr>
				                                                                            
				                                                                                <td align="center" valign="middle" width="24" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                                                                                    <a href="http://mailchimp.com" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/outline-light-link-48.png" style="display: block;border: 0;height: auto;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" height="24" width="24" class=""></a>
				                                                                                </td>
				                                                                            
				                                                                            
				                                                                        </tr>
				                                                                    </tbody></table>
				                                                                </td>
				                                                            </tr>
				                                                        </tbody></table>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        
				                                        <!--[if mso]>
				                                        </td>
				                                        <![endif]-->
				                                    
				                                    <!--[if mso]>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                        </tbody></table>
				                    </td>
				                </tr>
				            </tbody></table>
				        </td>
				    </tr>
				</tbody></table>
				
				            </td>
				        </tr>
				    </tbody>
				</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnDividerBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;table-layout: fixed !important;">
				    <tbody class="mcnDividerBlockOuter">
				        <tr>
				            <td class="mcnDividerBlockInner" style="min-width: 100%;padding: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                <table class="mcnDividerContent" border="0" cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%;border-top: 2px solid #505050;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                    <tbody><tr>
				                        <td style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
				                            <span></span>
				                        </td>
				                    </tr>
				                </tbody></table>
				<!--            
				                <td class="mcnDividerBlockInner" style="padding: 18px;">
				                <hr class="mcnDividerContent" style="border-bottom-color:none; border-left-color:none; border-right-color:none; border-bottom-width:0; border-left-width:0; border-right-width:0; margin-top:0; margin-right:0; margin-bottom:0; margin-left:0;" />
				-->
				            </td>
				        </tr>
				    </tbody>
				</table></td>
				                                        </tr>
				                                    </table>
				                                    <!--[if gte mso 9]>
				                                    </td>
				                                    </tr>
				                                    </table>
				                                    <![endif]-->
				                                </td>
				                            </tr>
				                        </table>
				                        <!-- // END TEMPLATE -->
				                    </td>
				                </tr>
				            </table>
				        </center>
				    </body>
				</html>';
		return $res;
	}
	
	
}
	

