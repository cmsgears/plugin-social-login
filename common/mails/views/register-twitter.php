<?php
use yii\helpers\Html;
use yii\helpers\Url;

$logoUrl		= Yii::getAlias( "@web" );
$logoUrl		= Url::to( $logoUrl. "/images/logo-mail.png", true );

$logo 			= "<img class='logo' style='margin:10px;' src='$logoUrl'>";
$siteName		= $coreProperties->getSiteName();
$name 			= Html::encode( $user->getName() );
$email 			= Html::encode( $user->email );
$token			= Html::encode($user->verifyToken );
$confirmLink	= Url::toRoute( "/activate-account?token=$token&email=$email", true );
?>
<table cellspacing='0' cellpadding='2' border='0' align='center' width='805px' style='font-family: Calibri; color: #4f4f4f; font-size: 14px; font-weight: 400;'>
	<tbody>
		<tr>
 			<td>
 				<div style='width:100%; margin:0 auto; min-height:45px; background-color:#f6f9f4; text-align: center;'>
 					<?=$logo?>
 				</div>
 			</td>
		</tr>
		<tr>
			<td>
				<div style='margin-top:60px;'>Dear <?=$name?>,</div>
			</td>
		</tr>
		<tr>
			<td>
				<br/>Thank you for registering with <?=$siteName?> using your twitter profile. You can also login using your email by activating your account. Activate your account using the below mentioned details:
			</td>
		</tr>
		<tr>
			<td> <br/>Email: <?=$email?></td>
		</tr>
		<tr> 
			<td> Activation Link: <a href="<?=$confirmLink?>">Activate Account</a> </td>
		</tr>
		<tr> 
			<td>
  				<div style='line-height:15px; margin:0px; padding:0px; margin-top:30px;'>Sincerely,</div>
  				<div style='line-height:15px; margin:0px; padding:0px; margin-top:3px;'><?=$siteName?> Team</div>
  			</td>
		</tr>
	</tbody>
</table>