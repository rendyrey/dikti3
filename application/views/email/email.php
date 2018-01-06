<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8"> <!-- utf-8 works for most cases -->
  <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
  <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
  <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

  <!-- Web Font / @font-face : BEGIN -->
  <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

  <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
  <!--[if mso]>
  <style>
  * {
  font-family: sans-serif !important;
}
</style>
<![endif]-->

<!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
<!--[if !mso]><!-->
<!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
<!--<![endif]-->

<!-- Web Font / @font-face : END -->

<!-- CSS Reset : BEGIN -->
<style>

/* What it does: Remove spaces around the email design added by some email clients. */
/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
html,
body {
  margin: 0 auto !important;
  padding: 0 !important;
  height: 100% !important;
  width: 100% !important;
}

/* What it does: Stops email clients resizing small text. */
* {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
  margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
  mso-table-lspace: 0pt !important;
  mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
table {
  border-spacing: 0 !important;
  border-collapse: collapse !important;
  table-layout: fixed !important;
  margin: 0 auto !important;
}
table table table {
  table-layout: auto;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
  -ms-interpolation-mode:bicubic;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.x-gmail-data-detectors,    /* Gmail */
.x-gmail-data-detectors *,
.aBn {
  border-bottom: 0 !important;
  cursor: default !important;
  color: inherit !important;
  text-decoration: none !important;
  font-size: inherit !important;
  font-family: inherit !important;
  font-weight: inherit !important;
  line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
.a6S {
  display: none !important;
  opacity: 0.01 !important;
}
/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
  display: none !important;
}

/* What it does: Prevents underlining the button text in Windows 10 */
.button-link {
  text-decoration: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size you'd like to fix */
/* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
  .email-container {
    min-width: 375px !important;
  }
}

@media screen and (max-width: 480px) {
  /* What it does: Forces Gmail app to display email full width */
  u ~ div .email-container {
    min-width: 100vw;
    width: 100% !important;
  }
}

</style>
<!-- CSS Reset : END -->

<!-- Progressive Enhancements : BEGIN -->
<style>

/* What it does: Hover styles for buttons */
.button-td,
.button-a {
  transition: all 100ms ease-in;
}
.button-td:hover,
.button-a:hover {
  background: #555555 !important;
  border-color: #555555 !important;
}

/* Media Queries */
@media screen and (max-width: 600px) {

  .email-container {
    width: 100% !important;
    margin: auto !important;
  }

  /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
  .fluid {
    max-width: 100% !important;
    height: auto !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }

  /* What it does: Forces table cells into full-width rows. */
  .stack-column,
  .stack-column-center {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    direction: ltr !important;
  }
  /* And center justify these ones. */
  .stack-column-center {
    text-align: center !important;
  }

  /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
  .center-on-narrow {
    text-align: center !important;
    display: block !important;
    margin-left: auto !important;
    margin-right: auto !important;
    float: none !important;
  }
  table.center-on-narrow {
    display: inline-block !important;
  }

  /* What it does: Adjust typography on small screens to improve readability */
  .email-container p {
    font-size: 17px !important;
  }
}

</style>
<!-- Progressive Enhancements : END -->

<!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
<!--[if gte mso 9]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->

</head>
<body width="100%" bgcolor="#222222" style="margin: 0; mso-line-height-rule: exactly;">
  <center style="width: 100%; background: #222222; text-align: left;">

    <!-- Visually Hidden Preheader Text : BEGIN -->
    <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.
    </div>
    <!-- Visually Hidden Preheader Text : END -->

    <!-- Email Header : BEGIN -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
      <tr>
        <td style="padding: 20px; text-align: center">
          <img src="http://i1236.photobucket.com/albums/ff441/rendy1412/unnamed.png" border="0" alt=" photo DSC00668.jpg"/>

        </td>
      </tr>
    </table>
    <table role="presentation" cellspacing="0" cellpadding="5" align="center" width="600" style="margin: auto;font-family: sans-serif;" class="email-container">
      <tr style="border:2px solid black;">
        <td bgcolor="#fff" align="center" colspan='3'>
          Report Overview
        </td>
      </tr>
      <tr bgcolor="#B8B8B8" align="center" style="border:2px solid black;">
        <td style="border:2px solid black;background-color:#90EE90;">Positive</td>
        <td style="border:2px solid black;background-color:#F08080;">Negative</td>
        <td style="border:2px solid black;">Neutral</td>
      </tr>
      <tr bgcolor="#fff" align="center">
        <td style="border:2px solid black;"><?=$positif;?></td>
        <td style="border:2px solid black;"><?=$negatif;?></td>
        <td style="border:2px solid black;"><?=$netral;?></td>
      </tr>
    </table>
    <!-- Email Header : END -->

    <!-- Email Body : BEGIN -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">

      <!-- Hero Image, Flush : BEGIN -->

      <!-- Hero Image, Flush : END -->

      <!-- 1 Column Text + Button : BEGIN -->



      <!-- 1 Column Text + Button : END -->

      <!-- Background Image with Text : BEGIN -->
      <tr>
        <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
        <td bgcolor="#222222" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;">
          <!--[if gte mso 9]>
          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:175px; background-position: center center !important;">
          <v:fill type="tile" src="http://placehold.it/600x230/222222/666666" color="#222222" />
          <v:textbox inset="0,0,0,0">
          <![endif]-->
          <div>
            <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td valign="middle" style="text-align: center; padding: 10px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #ffffff;">
                  <h3>Media Monitoring</h3>
                </td>
              </tr>
            </table>
          </div>
          <!--[if gte mso 9]>
        </v:textbox>
      </v:rect>
      <![endif]-->
    </td>
  </tr>
  <!-- Background Image with Text : END -->

  <!-- 2 Even Columns : BEGIN -->

  <!-- 2 Even Columns : END -->

  <!-- 3 Even Columns : BEGIN -->
  <tr>
    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 0px;">
      <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
        <?php
        for($i=0;$i<$jml_berita_today;$i++){
          $tgl_news = date('D, j F Y',strtotime($tgl_berita[$i]));
          ?>

          <?php
          $j=$i+1;

          ?>
          <tr>
            <!-- Column : BEGIN -->
            <?php
            if($tone_berita[$i]==1){
              ?>
              <td width="10%%" class="stack-column-center" style="vertical-align:top;background-color:#90EE90;" align="center">
                <h5><?=$j;?></h5>
              </td>
              <?php
            }else if($tone_berita[$i]==-1){
              ?>
              <td width="10%%" class="stack-column-center" style="vertical-align:top;background-color:#F08080;" align="center">
                <h5><?=$j;?></h5>
              </td>
              <?php
            }else{
              ?>
              <td width="10%%" class="stack-column-center" style="vertical-align:top;background-color:#B8B8B8;" align="center">
                <h5><?=$j;?></h5>
              </td>
              <?php
            }
            ?>

            <!-- Column : END -->
            <!-- Column : BEGIN -->
            <td width="70%" class="stack-column-center">
              <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                <tr>

                </tr>
                <tr>
                  <td style="font-family: sans-serif; font-size: 12px; line-height: 140%; color: #555555; padding: 0 10px 10px; text-align: left;" class="center-on-narrow">
                    <?php
                    if(filter_var($link_berita[$i], FILTER_VALIDATE_URL))
                    {?>
                      <strong><a href='<?=$link_berita[$i];?>'><?=$judul_berita[$i];?></a></strong><br>
                      <strong>Reporter: <?=$wartawan[$i];?> | </strong>
                      <strong><?=$nama_media[$i];?></strong> |
                      <?php echo "<a href=$link_berita[$i]>Link</a> | ";?>
                      <strong><?="$tgl_news, $jam_berita[$i]";?></strong><br><br>

                      <?php


                      //exit; // die well
                    }
                    else
                    {?>
                      <strong><?=$judul_berita[$i];?></strong><br>
                      <strong>Reporter: <?=$wartawan[$i];?> | </strong>
                      <strong><?=$nama_media[$i];?></strong> |
                      <?=$halaman[$i]." | ";?>
                      <strong><?="$tgl_news, $jam_berita[$i]";?></strong><br><br>


                      <?php
                      // my else codes goes
                    }
                    $string = strip_tags($isi_berita[$i]);
                    if (strlen($string) > 350) {
                      // truncate string
                      $stringCut = substr($string, 0, 450);
                      // make sure it ends in a word so assassinate doesn't become ass...
                      $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...";
                    }
                    ?>

                    <p style="margin: 0;"><?=$string;?></p>
                  </td>
                </tr>
              </table>
            </td>
            <!-- Column : END -->
            <!-- Column : BEGIN -->
            <td width="20%" class="stack-column-center" style="vertical-align:top">
              <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                <tr>
                  <td style="padding: 10px; text-align: center">
                    <a href="<?php echo base_url();?>assets/img_berita/<?=$gambar[$i]?>" style="background: #222222; border: 5px solid #222222; font-family: sans-serif; font-size: 11px; line-height: 100%; text-align: center; text-decoration: none; display: block; border-radius: 3px;" class="button-a" target="_blank">
                      <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;&nbsp;Attachment&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    </a>                                    </td>
                  </tr>

                </table>
              </td>
              <!-- Column : END -->
            </tr>
          <?php }?>
        </table>
      </td>
    </tr>
    <!-- 3 Even Columns : END -->

    <!-- Thumbnail Left, Text Right : BEGIN -->

    <!-- Thumbnail Left, Text Right : END -->

    <!-- Thumbnail Right, Text Left : BEGIN -->

    <!-- Thumbnail Right, Text Left : END -->

    <!-- Clear Spacer : BEGIN -->

    <!-- 1 Column Text : END -->

  </table>
  <!-- Email Body : END -->

  <!-- Email Footer : BEGIN -->
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 12px; line-height: 140%;">
    <tr>
      <td style="padding: 40px 10px; width: 100%; font-family: sans-serif; font-size: 12px; line-height: 140%; text-align: center; color: #888888;" class="x-gmail-data-detectors">
        <webversion style="color: #cccccc; text-decoration: underline; font-weight: bold;">Daily Report</webversion>
        <br><br>
        PT. Ratisa Media Citra<br>Citra Residence Blok F, No.4, Kota Bekasi<br>0857-1156-2345 (Hotline)<br>Email: inforatisa@gmail.com
        <br><br>
      </td>
    </tr>

  </table>
  <!-- Email Footer : END -->

  <!-- Full Bleed Background Section : BEGIN -->
  <table role="presentation" bgcolor="#709f2b" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
    <tr>
      <td valign="top" align="center">
        <div style="max-width: 600px; margin: auto;" class="email-container">
          <!--[if mso]>
          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" align="center">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
              <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 13px; line-height: 140%; color: #ffffff;">
                <p style="margin: 0;">This message is sent by or on behalf of PT. Radisa Media Citra.
                  Citra Residence Blok F, No.4, Kota Bekasi - Indonesia. Telp: 0857-1156-2345</p>
                </td>
              </tr>
            </table>
            <!--[if mso]>
          </td>
        </tr>
      </table>
      <![endif]-->
    </div>
  </td>
</tr>
</table>
<!-- Full Bleed Background Section : END -->

</center>
</body>
</html>