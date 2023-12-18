<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail</title>
    <!-- <link rel="stylesheet" href="<?php# #echo base_url();?>assets/css/bootstrap.min.css" > -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body style="background: #dfe6e9;font-family: 'Open Sans', sans-serif;">
    <table style="width: 700px;margin:auto;">
        <thead style="text-align: center;"> 
            <tr>
                <td colspan="2" style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;">
                    <!-- <h1>LOGO</h1> -->
                    <img src="<?php echo base_url()?>assets/img/logo.png" style="height:200px" alt="" srcset="">
                </td>
            </tr>
        </thead>
        
        <tbody style="background: #ffffff;">
            <tr>
                <td colspan="2" style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;"><h3 style="text-align:center">Quelqu'un souhaite prendre contact avec vous</h3></td>
            </tr>
            <tr>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;"><span> Nom & Prénoms : </span></td>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;width:70%;" >
                    <span>
                        <?php echo $data['nom']." ".$data['prenoms'];?>
                    </span>
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;">
                    <span>Email : </span>
                </td>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;width:70%;" >
                    <span>
                        <?php echo $data['email'];?>
                    </span>
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;">
                    <span> Numero : </span>
                </td>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;width:70%;" >
                    <span>
                        <?php echo $data['phone'];?>
                    </span>
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;">
                    <span> Message : </span>
                </td>
                <td style="padding: 15px 20px 15px 20px;border-color: #eee none #eee none;width:70%;" >
                    <span>
                        <?php echo $data['message'];?>
                    </span>
                </td>
            </tr>
        </tbody>
        <tfoot style="text-align: center;">
            <tr>
                <td colspan="2"><h2> Association </h2></td>
            </tr>
            <tr>
                <td colspan="2"><span>adressemail@association.com</span></td>
            </tr>
            <tr>
                <td colspan="2"><span>Abidjan, Riviera Bonoumin vers la tantie de porc au four</span></td>
            </tr>
            <tr>
                <td colspan="2"><span> 07 07 07 07 07 / 05 05 05 05 05</span></td>
            </tr>
            
        </tfoot>
    </table>
    
</body>
</html>