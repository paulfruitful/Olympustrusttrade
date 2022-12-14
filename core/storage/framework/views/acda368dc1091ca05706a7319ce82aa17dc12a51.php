<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Confirmation</title>
</head>
<div style="word-spacing:normal;background-color:#f4f6f7">
  <div class="m_-3249132211638951850body" style="background-color:#f4f6f7">
    
    <div style="margin:0px auto;max-width:480px">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0;padding-bottom:25px;padding-top:30px;text-align:center">
              
              <div class="m_-3249132211638951850mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:100%">
                <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                  <tbody>
                    <tr>
                      <td style="vertical-align:middle;padding:0">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                          <tbody>
                            <tr>
                              <td align="center" style="font-size:0px;padding:0;word-break:break-word">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                  <tbody>
                                    <tr>
                                      <td style="width:240px">
                                        <img alt="bitganar.com logo" height="auto" src="https://bitganar.com/assets/img/logo.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px" width="240" class="CToWUd">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div class="m_-3249132211638951850wrapper" style="background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:12px;max-width:480px">
      <font color="#888888">
          </font><font color="#888888">
        </font><font color="#888888">
      </font><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;border-radius:12px">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0;text-align:center">
              
              <div class="m_-3249132211638951850main-section" style="margin:0px auto;max-width:480px">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0;padding-bottom:32px;padding-left:20px;padding-right:20px;padding-top:48px;text-align:center">
                        
                        <div class="m_-3249132211638951850mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                    <tbody>
                                      <tr>
                                        <td align="center" class="m_-3249132211638951850h1 m_-3249132211638951850fw500 m_-3249132211638951850blue-dark m_-3249132211638951850center" style="font-size:0px;padding:0;word-break:break-word">
                                          <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:center;color:#000000">
                                            <h1 class="m_-3249132211638951850h1 m_-3249132211638951850fw500 m_-3249132211638951850blue-dark m_-3249132211638951850center">Registration Confirmation</h1>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="left" class="m_-3249132211638951850p m_-3249132211638951850fw500 m_-3249132211638951850blue-dark" style="font-size:0px;padding:0;padding-top:20px;word-break:break-word">
                                          <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                            <p class="m_-3249132211638951850p m_-3249132211638951850fw500 m_-3249132211638951850blue-dark"> You've taken a bold step for registering with us at <a href="<?php echo e(env('APP_URL')); ?>"><b><?php echo e(env('APP_NAME')); ?></b></a><br>
        		To complete your registration and begin investing with us, please click the link below to activate your account. </p>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="center" class="m_-3249132211638951850button" style="font-size:0px;padding:0;padding-top:32px;word-break:break-word">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;width:100%;line-height:100%">
                                            <tbody>
                                              <tr>
                                                <td align="center" bgcolor="#0C6CF2" role="presentation" style="border:none;border-radius:8px;font-style:normal;height:48px;background:#0c6cf2" valign="middle">
                                                  <a href="<?php echo e(env('APP_URL')); ?>/registration/confirm/<?php echo e($md['usr']); ?>/<?php echo e($md['token']); ?>" style="display:inline-block;background:#0c6cf2;color:#ffffff;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-style:normal;font-weight:600;line-height:150%;margin:0;text-decoration:none;text-transform:none;padding:0 15px;border-radius:8px" target="_blank" > Confirm Registration </a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align="left" class="m_-3249132211638951850p m_-3249132211638951850fw500 m_-3249132211638951850blue-dark" style="font-size:0px;padding:0;padding-top:16px;word-break:break-word">
                                          <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div style="margin:0px auto;max-width:480px">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0;padding-bottom:15px;padding-left:20px;padding-right:20px;text-align:center">
                        
                        <div class="m_-3249132211638951850mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div style="margin:0px auto;max-width:480px">
                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
                  <tbody>
                    <tr>
                      <td style="direction:ltr;font-size:0px;padding:0;padding-bottom:20px;padding-left:50px;padding-right:50px;text-align:center">
                        
                        <div class="m_-3249132211638951850mj-column-per-50" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0;padding-right:5px;padding-bottom:5px;padding-left:5px">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                    <tbody>
                                      <tr>
                                        <td align="center" style="font-size:0px;padding:0;word-break:break-word">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                        <div class="m_-3249132211638951850mj-column-per-50" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td style="vertical-align:top;padding:0;padding-right:5px;padding-bottom:5px;padding-left:5px">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                    <tbody>
                                      <tr>
                                        <td align="center" style="font-size:0px;padding:0;word-break:break-word">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px">
                                            
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <font color="#888888">
                        
                      </font></td></tr></tbody></table><font color="#888888">
              </font></div><font color="#888888">
              
            </font></td></tr></tbody></table><font color="#888888">
    </font></div><font color="#888888">
    
    <div class="m_-3249132211638951850unsub-section" style="margin:0px auto;max-width:480px">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0;padding-bottom:30px;padding-left:20px;padding-right:20px;padding-top:25px;text-align:center">
              
              <div class="m_-3249132211638951850mj-column-per-100" style="font-size:0;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr">
                
                <div class="m_-3249132211638951850mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:middle;width:100%">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                    <tbody>
                      <tr>
                        <td style="vertical-align:middle;padding:0">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" class="m_-3249132211638951850h3 m_-3249132211638951850gray" style="font-size:0px;padding:0;word-break:break-word">
                                  <div style="font-family:Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000"><span class="m_-3249132211638951850h3 m_-3249132211638951850gray">?? Bitganar.com Investment - Thanks for Using Us.</span></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <div style="margin:0px auto;max-width:480px">
      <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%">
        <tbody>
          <tr>
            <td style="direction:ltr;font-size:0px;padding:0;text-align:center">
              
              <div class="m_-3249132211638951850mj-column-per-100" style="font-size:0;line-height:0;text-align:left;display:inline-block;width:100%;direction:ltr">
                
                <div class="m_-3249132211638951850mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                    <tbody>
                      <tr>
                        <td style="vertical-align:top;padding:0">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
              </div>
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
</html><?php /**PATH /home/overmvoo/fortunetradeinvest.com/core/resources/views/mail/regconfirm.blade.php ENDPATH**/ ?>