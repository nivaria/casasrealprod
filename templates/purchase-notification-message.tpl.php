                                <tr>
                                    <td valign="top" class="bodycontent" style="border-collapse: collapse;">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="24" style="border-collapse: collapse;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td width="620" style="font-size:16px;border-collapse: collapse;"><?php print $info ?></td>
                                            </tr>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td valign="top" height="24" style="border-collapse: collapse;">&nbsp;</td>
                                            </tr>
                                        </table>
                                        <table border="0" cellpadding="16" cellspacing="0">
                                            <tr>
                                                <td valign="top" bgcolor="#fff" width="588" style="border-bottom:2px solid #ededed;border-collapse: collapse;font-size:20px;color:#000;"><?php print t('Rooms booking'); ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" bgcolor="#fff" width="588" style="border-collapse: collapse;">
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <?php foreach ($summary as $room): ?>
                                                        <tr>
                                                            <td bgcolor="#fff" width="452" valign="top" >
                                                                <div style="font-size:20px;color:#1f83b1;margin-bottom:8px;" ><?php print $room['title']; ?></div>
                                                                <div style="font-size:12px;margin-bottom:8px;">
                                                                  <img src="<?php print url($directory.'/images/email_check_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;<?php print t('Arrival date'); ?>: <?php print $room['departure_date']; ?>
                                                                </div>
                                                                <div style="font-size:12px;margin-bottom:8px;">
                                                                  <img src="<?php print url($directory.'/images/email_check_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;<?php print t('Departure date'); ?>: <?php print $room['departure_date']; ?>
                                                                </div>
                                                                <div style="font-size:12px;margin-bottom:8px;">
                                                                  <img src="<?php print url($directory.'/images/email_check_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;<?php print t('Occupants'); ?>: <?php print $room['occupants']; ?>
                                                                </div>
                                                            </td>
                                                            <td bgcolor="#fff" width="136" valign="top" >
                                                              <img typeof="foaf:Image" src="<?php print image_style_url('thumbnail', $room['image']); ?>" style="border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;">
                                                            </td>
                                                        </tr>                                                            
                                                        <?php endforeach; ?>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td valign="top" height="24" style="border-collapse: collapse;">&nbsp;</td>
                                            </tr>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td valign="top" bgcolor="#fff" cellpadding="0" width="298" style="border-collapse: collapse;">
                                                    <table border="0" cellpadding="16" cellspacing="0">
                                                        <tr>
                                                            <td valign="top" bgcolor="#fff" width="588" style="border-bottom:2px solid #ededed;border-collapse: collapse;font-size:20px;color:#000;">Remember</td>
                                                        </tr>
                                                        <tr>
                                                            <td bgcolor="#fff" valign="top" >
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td width="182" valign="top">
                                                                            <div style="margin-bottom:8px;"><?php print t('Your booking code is'); ?></div>
                                                                            <div style="margin-bottom:8px;"><?php print t('The total purchase price is'); ?></div>
                                                                            <div style="margin-bottom:8px;"><?php print t('You have already paid'); ?></div>
                                                                            <div style="margin-bottom:8px;"><?php print t('On arrival you must pay'); ?></div>
                                                                        </td>
                                                                        <td width="82" valign="top" style="text-align:right;">
                                                                            <div style="margin-bottom:8px;"><?php print $remember['order_id']; ?></div>
                                                                            <div style="margin-bottom:8px;"><?php print $remember['order_total']; ?></div>
                                                                            <div style="margin-bottom:8px;"><?php print $remember['order_paid']; ?></div>
                                                                            <div style="margin-bottom:8px;"><?php print $remember['order_pending']; ?></div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td valign="top" bgcolor="#ededed" cellpadding="0" width="24" style="border-collapse: collapse;">&nbsp;</td>
                                                <td valign="top" bgcolor="#fff" cellpadding="0" width="298" style="border-collapse: collapse;">
                                                      <table border="0" cellpadding="16" cellspacing="0">
                                                        <tr>
                                                            <td valign="top" bgcolor="#fff" width="588" style="border-bottom:2px solid #ededed;border-collapse: collapse;font-size:20px;color:#000;"><?php print t('Tell your friends'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td bgcolor="#fff" valign="top" >
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td width="266" valign="top">
                                                                            <div style="font-size:14px;margin-bottom:8px;"><img style="vertical-align:middle;" src="<?php print url($directory.'/images/email_facebook_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;color:#1f83b1;white-space:nowrap;" href="http://www.facebook.com/sharer.php?u=http://www.lascasasdelcaminoreal.com" style="color:#666;text-decoration:none;"><?php print t('Share in your wall'); ?></a></div>
                                                                            <div style="font-size:14px;margin-bottom:8px;"><img style="vertical-align:middle;" src="<?php print url($directory.'/images/email_twitter_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;color:#1f83b1;white-space:nowrap;" href="http://twitter.com/share?text=Casas%20del%20Camino%20Real&amp;url=http://www.lascasasdelcaminoreal.com" style="color:#666;text-decoration:none;"><?php print t('Publish in Twitter'); ?></a></div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td valign="top" height="24" style="border-collapse: collapse;">&nbsp;</td>
                                            </tr>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td valign="top" bgcolor="#fff" width="298" style="border-collapse: collapse;">
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <table border="0" cellpadding="16" cellspacing="0">
                                                                    <tr>
                                                                        <td valign="top" bgcolor="#fff" width="588" style="border-bottom:2px solid #ededed;border-collapse: collapse;font-size:20px;color:#000;"><?php print t('Mita and Nicolás'); ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#fff" valign="top" style="text-align:center;">
                                                                            <p><?php print t('Telephone'); ?>: (0034) 922 000 000</p>
                                                                            <p><?php print t('We speak english and spanish'); ?></p>
                                                                            <img typeof="foaf:Image" src="<?php print url(variable_get('file_public_path', conf_path() . '/files').'/bloques/bloque_mita_nicolas.jpg', array('absolute' => TRUE, 'language' => 'en')); ?>" width="184" height="137" alt="" style="border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;">
                                                                            <p><a href="<?php print url('contacto', array('absolute' => TRUE)); ?>" style="color:#666;text-decoration:none;"><img src="<?php print url($directory.'/images/email_contact_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/></a></p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td valign="top" bgcolor="#ededed" cellpadding="0" width="24" style="border-collapse: collapse;">&nbsp;</td>
                                                <td valign="top" cellpadding="0" width="298" style="border-collapse: collapse;">
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td valign="top" bgcolor="#fff" style="border-collapse: collapse;">
                                                                <table border="0" cellpadding="16" cellspacing="0">
                                                                    <tr>
                                                                        <td valign="top" bgcolor="#fff" width="588" style="text-align:center;border-bottom:2px solid #ededed;border-collapse: collapse;font-size:20px;color:#000;">Dónde estamos</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#fff" valign="top" style="text-align:center">
                                                                            <div>Las Casas del Camino Real</div>
                                                                            <div>Camino Real, Fasnia, Tenerife</div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <table border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td valign="top" style="text-align:center">
                                                                            <a target="_blank" href="https://maps.google.com/maps?daddr=28.2407197,-16.4334325&amp;ll=28.2407197,-16.4334325&amp;t=z&amp;z=15" style="color:#666;text-decoration:none;"><img style="vertical-align:middle;" src="<?php print url($directory.'/images/email_link_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/></a>
                                                                                                                                                </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" bgcolor="#ededed" height="24" style="border-collapse: collapse;">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" bgcolor="#fff" style="border-collapse: collapse;">
                                                                <table border="0" cellpadding="16" cellspacing="0">
                                                                    <tr>
                                                                        <td valign="top" bgcolor="#fff" width="588" style="border-bottom:2px solid #ededed;border-collapse: collapse;font-size:20px;color:#000;">No te pierdas</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#fff" valign="top" >
                                                                            <div style="font-size:12px;margin-bottom:8px;text-transform:uppercase;"><img src="<?php print url($directory.'/images/email_check_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;Servicios que puedes contratar</div>
                                                                            <div style="font-size:12px;margin-bottom:8px;text-transform:uppercase;"><img src="<?php print url($directory.'/images/email_check_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;Actividades que puedes realizar</div>
                                                                            <div style="font-size:12px;margin-bottom:8px;text-transform:uppercase;"><img src="<?php print url($directory.'/images/email_check_icon.png', array('absolute' => TRUE, 'language' => 'en')); ?>"/>&nbsp;¿Organizas un evento?</div>                                                              
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td valign="top" height="24" style="border-collapse: collapse;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>