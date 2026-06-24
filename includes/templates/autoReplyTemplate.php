<?php

function autoReplyTemplate($name,$message){

$logo = "https://yourdomain.com/assets/portfolioLogo.png";

return "

<body style='margin:0;padding:0;background:linear-gradient(135deg,#eef2f7,#dfe7f3);font-family:Segoe UI,Roboto,Arial,sans-serif'>

<table width='100%' cellpadding='0' cellspacing='0' style='padding:40px 10px'>
<tr>
<td align='center'>

<table width='100%' cellpadding='0' cellspacing='0' style='max-width:620px'>



<!-- GLASS CARD -->

<tr>
<td>

<table width='100%' cellpadding='0' cellspacing='0'
style='background:rgba(255,255,255,0.65);
border-radius:14px;
border:1px solid rgba(255,255,255,0.4);
box-shadow:0 20px 50px rgba(0,0,0,0.08);
padding:35px 28px'>

<!-- HEADER -->

<tr>
<td style='text-align:flex-start;padding-bottom:20px'>
<img src='$logo' style='height:50px'>
</td>
</tr>
<tr>
<td>

<h2 style='margin:0;font-size:22px;color:#111;font-weight:600'>
Hello $name 👋
</h2>

<p style='margin-top:12px;font-size:14px;color:#4b5563;line-height:1.6'>
Thanks for contacting <strong>Nestor</strong>.
</p>

<p style='margin-top:6px;font-size:14px;color:#4b5563;line-height:1.6'>
Your message has been received and I will get back to you shortly.
</p>

</td>
</tr>

<!-- USER MESSAGE -->

<tr>
<td style='padding-top:22px'>

<div style='background:rgba(255,255,255,0.75);
border-radius:10px;
padding:20px 10px;
border:1px solid rgba(0,0,0,0.05);
font-size:14px;
color:#2d2f36;
line-height:1.6'>

<strong style='color:#111'>Your Message:</strong>
<br><br>

$message

</div>

</td>
</tr>

<!-- SIGNATURE -->

<tr>
<td style='padding-top:28px;font-size:14px;color:#4b5563'>

Best regards,<br>
<strong style='color:#111'>Nestor</strong>

</td>
</tr>

</table>

</td>
</tr>

<!-- FOOTER -->

<tr>
<td style='text-align:center;font-size:12px;color:#8b90a0;padding-top:20px'>

I’ll get back to you as soon as possible.

</td>
</tr>

</table>

</td>
</tr>
</table>

</body>

";

}