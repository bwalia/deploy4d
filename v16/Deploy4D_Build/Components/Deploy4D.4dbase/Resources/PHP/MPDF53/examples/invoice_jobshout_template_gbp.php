<?php
$watermarkTxt='PAID';

$html = '
<style>
body {font-family: arial;
    font-size: 8pt;
}
div {    margin: 0pt;
padding: 0pt;
}

h4 {
	font-family: sans;
	font-weight: bold;
	margin-top: 0.7em;
	margin-bottom: 0.5em;
}
div {
	padding:1em; 
	margin-bottom: 1em;
	text-align:justify; 
}

.tenthmatrixlogo { position: absolute; 
	overflow: visible; 
	left: 22; 
	top: 0; 
	padding-bottom: 10px; 
	font-family:sans; 
	margin: 0;
}

.trans_type { position: absolute; 
color: #666666;
	overflow: visible; 
	left: 22; 
	top: 60; 
	padding-bottom: 10px; 
	font-family:sans; 
	font-size: 26px;
	margin: 0;
}


td { vertical-align: top; }
.items td {
    border-left: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}

table thead td { background-color: #EEEEEE;
    text-align: center;
    border: 0.1mm solid #000000;
}
.items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #000000;
    border-top: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
.items td.totals {
    text-align: right;
    
    border: 0.1mm solid #333333;
}

.bankDetails
{
	background-color: #FFF;
	border-collapse: collapse; 
	border: 1px solid #827F85;
	margin: 4pt 0pt 0pt 0pt;
}
.bankDetails td 
{
     border: 1px solid #827F85;
}
.bankDetails thead td 
{ 
	background-color: #00A3D3;
	text-align: center;
	color:#FFF;
	font-size: 12pt;
	text-align: center;
	font-family:Verdana, Geneva, sans-serif;
}


</style>

<body>

<div class="tenthmatrixlogo">
<img src="/Users/balinderwalia/Dropbox/4D Databases/4Dv14_Dev/TenthmatrixCRMv14/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/jobshout_logo.jpg" width="180" />
</div>

<div class="trans_type">INVOICE</div>

<div style="width: 225px;
float: right;
position: absolute; 
	right: 25; 
	top: 1; 
	padding: 8px; 
	font-family:sans; 
	font-size: 0.9em;
	margin: 0;
">
<img src="tenthmatrix-logo.png" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 0207 118 7889<br />Email: billing@tenthmatrix.co.uk</div>
<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div style="margin-top: 90; margin-bottom: 0pt; width: 40%;
	border:0.1mm solid #220044; 
	background-color: #f0f2ff;
	background-gradient: linear #eeeeee #f0f2f0 0 1 0 0.5;">

<h4><b>Bill To:</b></h4>
CV Screen <br />Unit A12, Boughton Business Park, Bell L<br />Amersham, Buckinghamshire HP6 6GL<br /><br />
</div>


<div style="position: absolute; 
	overflow: visible; 
	right: 30; 
	top: 120; 
	padding-bottom: 10px; 
	font-family:sans; width: 300px;">

<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0009-001025</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">11/09/2015</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">11/09/2015</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">DOMAINS</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Ordered by</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Matt Iveson</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Your ref, PO number</td>
<td style="text-align: center;"></td>
</tr>
</table>
</div>


<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 90px;" cellpadding="8">
<thead>
<tr>
<td width="10%">ITEM</td>
<td width="10%">QUANTITY</td>
<td width="50%">DESCRIPTION</td>
<td width="15%">UNIT PRICE</td>
<td width="15%">AMOUNT</td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1</td>
<td align="center">1</td>
<td>Domain recruitmentagency-uk.uk.com renewal 1 yr &#163;37.36</td>
<td align="right">&#163;37.36</td>
<td align="right">&#163;37.36</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2</td>
<td align="center">2</td>
<td>Domain londonrecruitmentagency.com renewal 2 yrs &#163;17.98</td>
<td align="right">&#163;17.98</td>
<td align="right">&#163;35.96</td>
</tr>
<tr>

<td align="center">3</td>
<td align="center">2</td>
<td>Domain londonrecruitmentagencies.com renewal 2 yrs &#163;17.98</td>
<td align="right">&#163;17.98</td>
<td align="right">&#163;35.96</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">4</td>
<td align="center">2</td>
<td>Domain itrecruitment-uk.com renewal 2 yrs &#163;17.98</td>
<td align="right">&#163;17.98</td>
<td align="right">&#163;35.96</td>
</tr>
<tr>

<td align="center">5</td>
<td align="center">2</td>
<td>Domain recruitmentagencies-uk.com renewal 2 yrs &#163;17.98</td>
<td align="right">&#163;17.98</td>
<td align="right">&#163;35.96</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;181.20</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">36.24</td>
</tr>
<tr>
<td class="totals">Shipping:</td>
<td class="totals">&mdash;<!--#4DENDIF--></td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;217.44</b></td>
</tr>
<tr>
<td class="totals">PAID:</td>
<td class="totals">&#163;</td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b></b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
Please note that our payment terms for this Invoice are DUE ON RECEIPT.
<h4><u>Notes</u></h4>
<p>Domain Renewals:<br /><br />www.londonrecruitmentagency.com<br />www.londonrecruitmentagencies.com<br />www.recruitmentagencies-uk.com<br />www.itrecruitment-uk.com<br />www.recruitmentagency-uk.uk.com<br /></p>


<h4><u>PAYING BY DIRECT DEBIT OR STANDING ORDER</u></h4><h4>If you pay by direct debit or standing order, this invoice is for reference only - you do not need to make an additional payment.</h4>
<h4><u>PAYING BY DEBIT OR CREDIT CARD</u></h4><h4>Click on this link <a href="http://localhost:8080/index.shtml?pay=c032b49fa889bb105a15d4c2155fdad8">http://localhost:8080/index.shtml?pay=c032b49fa889bb105a15d4c2155fdad8</a> to Pay this Invoice now.</h4><h4>Invoice PIN: 6319</h4><h5><u>Refunds Policy</u></h5><p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html#refund_policy">http://www.tenthmatrix.co.uk/terms-of-business.html#refund_policy</a></p>

<h4><u>Paying online by BACS or Internet Banking</u></h4>
<h4>Please make payment by electronic transfer to:</h4>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>BACS Bank details</td><td>HSBC Hemel Hempstead Branch (UK)</td></tr><tr><td>Account name</td><td>Tenthmatrix</td></tr><tr><td>Sort code</td><td>40-24-07</td></tr><tr><td>Account number</td><td>91565850</td></tr><tr><td>Please use reference</td><td>DOMAINS-1025</td></tr></tbody></table><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>IBAN</td><td>GB65MIDL40240791565850</td></tr><tr><td>HSBC International SWIFT Code</td><td>MIDLGB22</td></tr><tr><td>Hemel Hempstead Branch (UK) Branch BIC code</td><td>MIDLGB2115F</td></tr></tbody></table>

<h4>To make payment via Internet Banking, you simply need to contact your bank with the above bank details. They can advise you if you should use the SWIFT Code or BIC code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Invoice was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 21/11/2015, Time: 12:19:32</p>

<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Dropbox/4D Databases/4Dv14_Dev/TenthmatrixCRMv14/TENTHMATRIX_CRM_DATA/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Dropbox/4D Databases/4Dv14_Dev/TenthmatrixCRMv14/Invoices/Invoice-9-1025.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>
