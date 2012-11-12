<?php
/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[mailkey].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $subject: The message subject.
 * - $body: The message body in HTML format.
 * - $mailkey: The message identifier.
 * - $recipient: An email address or user object who is receiving the message.
 * - $css: Internal style sheets.
 *
 * @see template_preprocess_mimemail_message()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php print $subject ?></title>
	<style type="text/css">
		/* Client-specific Styles */
		#outlook a {padding: 0;}  /* Force Outlook to provide a "view in browser" button. */
		body {width: 100% !important;}
		.ReadMsgBody {width: 100%;}
		.ExternalClass {width: 100%;}  /* Force Hotmail to display emails at full width */
		body {	-webkit-text-size-adjust: none;}  /* Prevent Webkit platforms from changing default text sizes. */
		/* Reset Styles */
		body {margin: 0;padding: 0;}
		img {border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;}
		table td {border-collapse: collapse;}
		ul{
			padding-left:0;
		}
		li{
			line-height:24px;
		}
		a{
			color:#666;
			text-decoration:none;
		}
	</style>
</head>
<body style="color: #666666;font-family: Arial, Helvetica, 'Nimbus Sans L', sans-serif;font-size: 14px;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="wrapper">
		<tr>
			<td align="center" valign="top" bgcolor="#ededed" >
				<table border="0" cellpadding="0" cellspacing="0" width="620" id="preheader">
					<tr>
						<td valign="top" height="30" bgcolor="#000" >&nbsp;</td>
					</tr>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="620">
					<tr>
						<td align="center" valign="top" height="126" bgcolor="#fff" >
							<table border="0" cellpadding="0" cellspacing="0" >
								<tr>
									<td width="620" height="126">
										<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="http://casasreal.nivaria.com/sites/all/themes/casasrealprod/images/logo-for-newsletter.png" alt="<?php print t('Home'); ?>" /></a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" width="620" id="content">
								<tr>
									<td valign="top" class="bodycontent"><?php print $body ?></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center" valign="top">
							<table border="0" cellpadding="20" cellspacing="0" width="620" >
								<tr>
									<td valign="top" bgcolor="#000" >
										<a href="/" style="color: #ccc;font-size:11px;font-family:arial;text-transform:upppercase;text-decoration:none;">Casas del Camino Real</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>