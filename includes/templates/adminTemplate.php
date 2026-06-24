<?php

function adminTemplate($name, $email, $message)
{

    $logo = "https://yourdomain.com/assets/portfolioLogo.png";

    return "

<body style='margin:0;padding:0;background:#eef2f7;font-family:Segoe UI,Roboto,Arial,sans-serif'>

<table width='100%' cellpadding='0' cellspacing='0' style='padding:40px 10px'>
<tr>
<td align='center'>

<table width='100%' cellpadding='0' cellspacing='0' style='background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.08)'>

<!-- HEADER -->

<tr>
<td style='background: #2d7d97;padding:28px;text-align:center'>
<img src='$logo' style='height:46px'>
</td>
</tr>

<!-- TITLE -->

<tr>
<td style='padding:35px 25px 10px 25px'>

<h2 style='margin:0;font-size:22px;color:#111;font-weight:600'>
New Contact Message
</h2>

<p style='margin-top:8px;font-size:14px;color:#6b7280'>
Someone just reached out through your portfolio website.
</p>

</td>
</tr>

<!-- USER DETAILS -->

<tr>
<td style='padding:0 25px 25px 25px'>

<table width='100%' cellpadding='0' cellspacing='0' style='background:#f9fafc;border-radius:8px;padding:18px'>

<tr>
<td style='font-size:13px;color:#7b8190; margin-right: 5px;'>Name: </td>
<td style='font-size:14px;font-weight:600;color:#111'>$name</td>
</tr>

<tr>
<td style='font-size:13px;color:#7b8190;padding-top:8px; margin-right: 5px;'>Email: </td>
<td style='font-size:14px;font-weight:600;color:#111;padding-top:8px'>$email</td>
</tr>

</table>

</td>
</tr>

<!-- MESSAGE -->

<tr>
<td style='padding:0 25px 40px 25px'>

<div style='background:#f3f6fb;border-radius:8px;padding:22px;font-size:14px;color:#2d2f36;line-height:1.6'>

$message

</div>

</td>
</tr>

<!-- FOOTER -->

<tr>
<td style='background:#fafbfe;padding:16px 45px;font-size:12px;color:#8b90a0;text-align:center'>

This message was sent from your portfolio contact form.

</td>
</tr>

</table>

</td>
</tr>
</table>

</body>

";
}
