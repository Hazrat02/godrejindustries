<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wimbeldon</title>

</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <table border="0" cellpadding="0" cellspacing="0"
        style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-collapse: collapse;">
        <tr>
            <td style="padding: 20px;">

                <img src="https://backend.wimbledoninvestments.com/public/logo1.png" alt="Logo"
                    style="max-width: 230px; height: 80px; background-color: #333333;">


                <h1>Dear User,</h1>

                    <h4 style="color: #333333;">You have a {{$ex_rate['method']}} {{$ex_rate['type']}} that has been pre-credited. Details are as
                        follows:</h4>


                <br>

                <div style="display: flex;justify-content: space-between">
                    <h3 style="color: #666666;"> Amount :</h3>
                    <h3>{{ $amount * $ex_rate['ex_rate']  }} INR</h3>
                </div>
                                <div style="display: flex;justify-content: space-between">
                    <h3 style="color: #666666;"> Supported Currency :</h3>
                    <h3>INR</h3>
                </div>
                <div style="display: flex;justify-content: space-between">
                    <h3 style="color: #666666;"> Beneficiary :</h3>
                    <h3>{{ $bank->beneficiary  }}</h3>
                </div>

                <div style="display: flex;justify-content: space-between">
                    <h3 style="color: #666666;"> Account number :</h3>
                    <h3>{{  $bank->ac_num  }}</h3>
                </div>
                <div style="display: flex;justify-content: space-between">
                    <h3 style="color: #666666;"> Account type : </h3>
                    <h3>{{  $bank->ac_type  }}</h3>
                </div>
                <div style="display: flex;justify-content: space-between">
                    <h3 style="color: #666666;"> Bank  : </h3>
                    <h3>{{  $bank->branch   }}</h3>
                </div>
                <div style="display: flex;justify-content: space-between">
                    <h3 style="color: #666666;"> IFSC Code  : </h3>
                    <h3>{{  $bank->ifsc_code   }}</h3>
                </div>


               <div>

                @if ($ex_rate['type'] === 'withdraw')
                     <p>The transaction is being processed and will reflect in your {{$ex_rate['method']}} account soon.</p>
            
                @else
                     <p>Please refer to the bank information for local agent bank deposit. 
Once deposited please share the screenshot to your assigned relationship manager for further assistance.</p>
            
                @endif
                    
                   
               </div>

            </td>
        </tr>
        <tr>
            <td style="background-color: #f4f4f4; padding: 20px;">
                <h2 style="color: #333333;">Featured Article</h2>
                <p style="color: #666666;">Check out our latest article on a fascinating topic!</p>
                <a href="wimbledoninvestments.com/contact" style="color: #3498db; text-decoration: none;">Contact Us</a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; padding: 20px;">
                <p style="color: #999999;">You are receiving this email because you subscribed to our newsletter. To
                    unsubscribe, <a href="https://wimbledoninvestments.com/risk/disclosure"
                        style="color: #3498db; text-decoration: none;">click here</a>.</p>
            </td>
        </tr>
    </table>

</body>

</html>
