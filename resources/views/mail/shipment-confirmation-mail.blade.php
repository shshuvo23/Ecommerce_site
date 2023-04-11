{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="div-one">
        <h5>Dear {{$value['name']}},</h5><p>Thankyou for purchase product from us</p><br>
        <h4>Order no: {{$value['order_no']}} </h4>
        <p>Product Name: {{$value['product_name']}}</p><p>Quantity: {{$value['quantity']}}</p>
        <h5>Your Bill:{{$value['total']}}</h5>
        <hr/>
        <p>Thank You</p>

    </div>

</body>
</html> --}}

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]-->
    <!--[if !mso]><!-- -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <!--<![endif]-->
</head>

<body>
    <div class="es-wrapper-color">
        <!--[if gte mso 9]>
<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
<v:fill type="tile" color="#C68B59"></v:fill>
</v:background>
<![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" align="center" cellpadding="0" cellspacing="0"
                                            width="600" style="background-color: transparent;"
                                            bgcolor="rgba(0, 0, 0, 0)">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p10t es-p10b es-p20r es-p20l"
                                                        align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-infoblock"
                                                                                        esd-links-color="#efefef">
                                                                                        <p style="color: #efefef;"><a
                                                                                                target="_blank"
                                                                                                style="color: #efefef;">View
                                                                                                online version</a></p>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" style="background-color: #ffffff;" width="600"
                                            cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p40b" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="es-m-p0r esd-container-frame"
                                                                        width="600" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0"
                                                                            cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-p10t es-p10b es-p40r es-p40l">
                                                                                        <p>Hi {{$value['name']}},<br>
                                                                                            Your order is on its way!</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    {{-- <td align="center"
                                                                                        class="esd-block-button es-p10t es-p20r es-p20l">
                                                                                        <span
                                                                                            class="es-button-border"><a
                                                                                                href="https://viewstripo.email"
                                                                                                class="es-button"
                                                                                                target="_blank">view
                                                                                                delivery details
                                                                                                —</a></span>
                                                                                    </td> --}}
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#ffffff" class="es-content-body" align="center"
                                            cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20" align="left" bgcolor="#C5B6AA"
                                                        style="background-color: #c5b6aa;">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="472" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" align="left"
                                                            class="es-left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="472"
                                                                        class="esd-container-frame es-m-p20b"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text">
                                                                                        <h1>ORDER INFO</h1>
                                                                                        <p style="display: none;"><br>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="20"></td><td width="68" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-right"
                                                            align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="68" align="left"
                                                                        class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="right"
                                                                                        class="esd-block-text es-p25t es-m-p0t es-m-txt-c">
                                                                                        <p><strong><u><a target="_blank"
                                                                                                        href="">MORE</a></u></strong>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p30b es-p20r es-p20l"
                                                        align="left">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-left"
                                                            align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="270"
                                                                        class="es-m-p20b esd-container-frame"
                                                                        align="left">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text">
                                                                                        <h3>Date Shipped&nbsp;</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text es-p10t es-m-txt-c">
                                                                                        <p>{{$value['shipment_date']}}</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="270"
                                                                        class="es-m-p20b esd-container-frame"
                                                                        align="left">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text es-p20t">
                                                                                        <h3>Shipped Via</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text es-p10t es-m-txt-c">
                                                                                        <p>Travel</p>
                                                                                        <p>House:7, Road:2, Block:C<br>Banani,
                                                                                            Dhaka</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="20"></td><td width="270" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-right"
                                                            align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="270" class="esd-container-frame"
                                                                        align="left">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text">
                                                                                        <h3>Tracking Number<br></h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text es-p10t es-m-txt-c">
                                                                                        <p>{{$value['tracking_id']}}</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="270" class="esd-container-frame"
                                                                        align="left">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text es-p20t">
                                                                                        <h3>Shipped To</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text es-p10t es-m-txt-c">
                                                                                        <address>{{$value['address']}}</address>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center" esd-custom-block-id="731068">
                                        <table bgcolor="#ffffff" class="es-content-body" align="center"
                                            cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20" align="left" bgcolor="#C5B6AA"
                                                        style="background-color: #c5b6aa;">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="472" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" align="left"
                                                            class="es-left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="472"
                                                                        class="esd-container-frame es-m-p20b"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text">
                                                                                        <h1>ITEMS SHIPPED</h1>
                                                                                        <p style="display: none;"><br>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="20"></td><td width="68" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-right"
                                                            align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="68" align="left"
                                                                        class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="right"
                                                                                        class="esd-block-text es-m-txt-c es-p25t es-m-p0">
                                                                                        <p><strong><u><a target="_blank"
                                                                                                        href="https://viewstripo.email">MORE</a></u></strong>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text">
                                                                                        <h2>Order Number: {{$value['order_no']}}</h2>
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
                                                @foreach($value['products'] as $product)
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p20r es-p20l esdev-adapt-off"
                                                        align="left" esdev-config="h2">
                                                        <table width="560" cellpadding="0" cellspacing="0"
                                                            class="esdev-mso-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="125"
                                                                                        class="es-m-p0r esd-container-frame"
                                                                                        align="center">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center"
                                                                                                        class="esd-block-image"
                                                                                                        style="font-size: 0px;">
                                                                                                        <a target="_blank"
                                                                                                            href=""><img
                                                                                                                class="p_image adapt-img"
                                                                                                                src=""
                                                                                                                alt
                                                                                                                style="display: block;"
                                                                                                                width="125"></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="165"
                                                                                        class="esd-container-frame"
                                                                                        align="center">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text es-p5t es-p5b">
                                                                                                        <h3
                                                                                                            class="p_name">
                                                                                                            {{$product['product_name']}}
                                                                                                        </h3>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="105" align="center"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text">
                                                                                                        <p
                                                                                                            class="p_description">
                                                                                                            Qty:<br>{{$product['quantity']}}
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-right" align="right">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="105" align="left"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text">
                                                                                                        <p
                                                                                                            class="p_price">
                                                                                                            Item
                                                                                                            Price<br>$
                                                                                                            {{$product['product_price']}}</p>
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
                                                    </td>
                                                </tr>
                                                @endforeach
                                                {{-- <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l esdev-adapt-off"
                                                        align="left" esdev-config="h3">
                                                        <table width="560" cellpadding="0" cellspacing="0"
                                                            class="esdev-mso-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="125"
                                                                                        class="es-m-p0r esd-container-frame"
                                                                                        align="center">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center"
                                                                                                        class="esd-block-image"
                                                                                                        style="font-size: 0px;">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"><img
                                                                                                                class="p_image adapt-img"
                                                                                                                src="https://tlr.stripocdn.email/content/guids/CABINET_f9a1aa031b0165640302dd0498af20c9/images/83001626939864210.jpg"
                                                                                                                alt
                                                                                                                style="display: block;"
                                                                                                                width="125"></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="165"
                                                                                        class="esd-container-frame"
                                                                                        align="center">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text es-p5t es-p5b">
                                                                                                        <h3
                                                                                                            class="p_name">
                                                                                                            Raincoat
                                                                                                        </h3>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="105" align="center"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text">
                                                                                                        <p
                                                                                                            class="p_description">
                                                                                                            Qty:<br>1
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-right" align="right">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="105" align="left"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text">
                                                                                                        <p
                                                                                                            class="p_price">
                                                                                                            Item
                                                                                                            Price<br>$
                                                                                                            125.00</p>
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
                                                    </td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <td class="esd-structure es-p20t es-p30b es-p20r es-p20l esdev-adapt-off"
                                                        align="left" esdev-config="h4">
                                                        <table width="560" cellpadding="0" cellspacing="0"
                                                            class="esdev-mso-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="125"
                                                                                        class="es-m-p0r esd-container-frame"
                                                                                        align="center">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center"
                                                                                                        class="esd-block-image"
                                                                                                        style="font-size: 0px;">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"><img
                                                                                                                class="p_image adapt-img"
                                                                                                                src="https://tlr.stripocdn.email/content/guids/CABINET_f9a1aa031b0165640302dd0498af20c9/images/50461626939864212.jpg"
                                                                                                                alt
                                                                                                                style="display: block;"
                                                                                                                width="125"></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="165"
                                                                                        class="esd-container-frame"
                                                                                        align="center">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text es-p5t es-p5b">
                                                                                                        <h3
                                                                                                            class="p_name">
                                                                                                            Folding
                                                                                                            chair</h3>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="105" align="center"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text">
                                                                                                        <p
                                                                                                            class="p_description">
                                                                                                            Qty:<br>1
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-right" align="right">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="105" align="left"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text">
                                                                                                        <p
                                                                                                            class="p_price">
                                                                                                            Item
                                                                                                            Price<br>$
                                                                                                            349.00</p>
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
                                                    </td>
                                                </tr> --}}
                                                <tr>
                                                    <td class="esd-structure es-p20" align="left" bgcolor="#C5B6AA"
                                                        style="background-color: #c5b6aa;">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left"
                                                                                        class="esd-block-text">
                                                                                        <h2>PURCHASE SUMMARY</h2>
                                                                                        <p style="display: none;"><br>
                                                                                        </p>
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
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p20b es-p20r es-p20l esdev-adapt-off"
                                                        align="left">
                                                        <table width="560" cellpadding="0" cellspacing="0"
                                                            class="esdev-mso-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-left" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="435" align="center"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text es-m-txt-l">
                                                                                                        <p>Subtotal:<br>Shipping:
                                                                                                        </p>

                                                                                                        <h3>Order Total:
                                                                                                        </h3>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td width="20"></td>
                                                                    <td class="esdev-mso-td" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            class="es-right" align="right">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="105" align="left"
                                                                                        class="esd-container-frame">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="left"
                                                                                                        class="esd-block-text">
                                                                                                        <p
                                                                                                            class="p_price">
                                                                                                            $
                                                                                                            {{$value['total']}}<br>$
                                                                                                            00.00</p>
                                                                                                        <h3
                                                                                                            class="p_price">
                                                                                                            {{$value['total']}}<br>
                                                                                                        </h3>
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
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#ffffff" class="es-content-body" align="center"
                                            cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="600" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-button es-p30b es-p20r es-p20l">
                                                                                        <span
                                                                                            class="es-button-border"><a
                                                                                                href="https://viewstripo.email"
                                                                                                class="es-button"
                                                                                                target="_blank">view
                                                                                                delivery details
                                                                                                —</a></span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-image"
                                                                                        style="font-size: 0px;"><a
                                                                                            target="_blank"><img
                                                                                                class="adapt-img"
                                                                                                src="https://tlr.stripocdn.email/content/guids/CABINET_f9a1aa031b0165640302dd0498af20c9/images/71311626942018157.png"
                                                                                                alt
                                                                                                style="display: block;"
                                                                                                width="600"></a>
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
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p30b es-p20r es-p20l"
                                                        align="left" bgcolor="#C5B6AA"
                                                        style="background-color: #c5b6aa;">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" align="left"
                                                            class="es-left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="270"
                                                                        class="esd-container-frame es-m-p20b"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%"
                                                                            style="border-left:1px solid #402218;border-right:1px solid #402218;border-top:1px solid #402218;border-bottom:1px solid #402218;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-p10t es-p10r es-p10l">
                                                                                        <h2>WE'RE HERE TO HELP</h2>
                                                                                        <p style="display: none;"><br>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-p15t es-p15b es-p10r es-p10l">
                                                                                        <p>Call <a target="_blank"
                                                                                                href="tel:(000)-123-456">(000)-123-456
                                                                                            </a>or <a target="_blank"
                                                                                                href="https://viewstripo.email">visit
                                                                                                us online</a> for expert
                                                                                            assistance.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="20"></td><td width="270" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-right"
                                                            align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="270" align="left"
                                                                        class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%"
                                                                            style="border-left:1px solid #402218;border-right:1px solid #402218;border-top:1px solid #402218;border-bottom:1px solid #402218;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-p10t es-p10r es-p10l">
                                                                                        <h2>OUR GUARANTEE</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-p15t es-p15b es-p10r es-p10l">
                                                                                        <p class="b_description">Your
                                                                                            satisfaction is 100%
                                                                                            guaranteed. See our <a
                                                                                                target="_blank"
                                                                                                href="https://viewstripo.email">Returns
                                                                                                and Exchanges policy</a>
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="600" class="esd-container-frame"
                                                                        align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-image"
                                                                                        style="font-size: 0px;"><a
                                                                                            target="_blank"><img
                                                                                                class="adapt-img"
                                                                                                src="https://tlr.stripocdn.email/content/guids/CABINET_f9a1aa031b0165640302dd0498af20c9/images/20691626942159128.png"
                                                                                                alt
                                                                                                style="display: block;"
                                                                                                width="600"></a>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-footer" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center" esd-custom-block-id="398491">
                                        <table class="es-footer-body" align="center" cellpadding="0" cellspacing="0"
                                            width="600" style="background-color: #ffffff;" bgcolor="#ffffff">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20b es-p20r es-p20l"
                                                        align="left" esd-custom-block-id="398493">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame"
                                                                        align="left">
                                                                        <table cellpadding="0" cellspacing="0"
                                                                            width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-menu"
                                                                                        esd-tmp-menu-padding="10|10"
                                                                                        esd-tmp-menu-color="#402218">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            width="100%"
                                                                                            class="es-menu">
                                                                                            <tbody>
                                                                                                <tr class="links">
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        width="25%"
                                                                                                        class="es-p10t es-p10b es-p5r es-p5l"
                                                                                                        style="padding-bottom: 10px;">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"
                                                                                                            style="color: #402218;">About
                                                                                                            us</a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        width="25%"
                                                                                                        class="es-p10t es-p10b es-p5r es-p5l"
                                                                                                        style="padding-bottom: 10px;">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"
                                                                                                            style="color: #402218;">News</a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        width="25%"
                                                                                                        class="es-p10t es-p10b es-p5r es-p5l"
                                                                                                        style="padding-bottom: 10px;">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"
                                                                                                            style="color: #402218;">Career</a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        width="25%"
                                                                                                        class="es-p10t es-p10b es-p5r es-p5l"
                                                                                                        style="padding-bottom: 10px;">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"
                                                                                                            style="color: #402218;">The
                                                                                                            shops</a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-social es-p10t es-p10b"
                                                                                        style="font-size:0">
                                                                                        <table cellpadding="0"
                                                                                            cellspacing="0"
                                                                                            class="es-table-not-adapt es-social">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        class="es-p20r"
                                                                                                        esd-tmp-icon-type="facebook">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"><img
                                                                                                                title="Facebook"
                                                                                                                src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/facebook-logo-colored.png"
                                                                                                                alt="Fb"
                                                                                                                width="24"
                                                                                                                height="24"></a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        class="es-p20r"
                                                                                                        esd-tmp-icon-type="twitter">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"><img
                                                                                                                title="Twitter"
                                                                                                                src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/twitter-logo-colored.png"
                                                                                                                alt="Tw"
                                                                                                                width="24"
                                                                                                                height="24"></a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        class="es-p20r"
                                                                                                        esd-tmp-icon-type="instagram">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"><img
                                                                                                                title="Instagram"
                                                                                                                src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/instagram-logo-colored.png"
                                                                                                                alt="Inst"
                                                                                                                width="24"
                                                                                                                height="24"></a>
                                                                                                    </td>
                                                                                                    <td align="center"
                                                                                                        valign="top"
                                                                                                        esd-tmp-icon-type="youtube">
                                                                                                        <a target="_blank"
                                                                                                            href="https://viewstripo.email"><img
                                                                                                                title="Youtube"
                                                                                                                src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-colored/youtube-logo-colored.png"
                                                                                                                alt="Yt"
                                                                                                                width="24"
                                                                                                                height="24"></a>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center"
                                                                                        class="esd-block-text es-p10t es-p10b">
                                                                                        <p
                                                                                            style="font-size: 12px; color: #402218;">
                                                                                            You are receiving this email
                                                                                            because you have visited our
                                                                                            site or asked us about the
                                                                                            regular newsletter. Make
                                                                                            sure our messages get to
                                                                                            your Inbox (and not your
                                                                                            bulk or junk
                                                                                            folders).<br><strong><a
                                                                                                    target="_blank"
                                                                                                    style="font-size: 12px; "
                                                                                                    href="https://viewstripo.email">Privacy
                                                                                                    police</a> | <a
                                                                                                    target="_blank"
                                                                                                    style="font-size: 12px; ">Unsubscribe</a></strong>
                                                                                        </p>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
