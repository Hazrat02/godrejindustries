
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wimbeldon</title>

</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <table border="0" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-collapse: collapse;">
      <tr>
        <td style="padding: 20px;">
       
          <img   src="https://backend.wimbledoninvestments.com/public/logo1.png" alt="Logo" style="max-width: 230px; height: 80px; background-color: #333333;">
          

          <h1>Dear User,</h1>
          @if ($type == 'deposit')
          <h4 style="color: #333333;">You have a USDT deposit that has been pre-credited. Details are as follows:</h4>
          @else
          <h4 style="color: #333333;">The status of your withdrawal has been updated . You may check the relevant details on the your wimbledon dashboard.</h4>
          @endif

          <br>
          
          <div style="display: flex;justify-content: space-between">
            <h3 style="color: #666666;">Total {{$type}} amount :</h3><h3>{{$amount}} USDT</h3>
          </div>
       


          <a href="wimbledoninvestments.com/servics" style="display: inline-block; padding: 10px 20px; background-color: #3498db; color: #ffffff; text-decoration: none;">Read More</a>  
        
          
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
          <p style="color: #999999;">You are receiving this email because you subscribed to our newsletter. To unsubscribe, <a href="https://wimbledoninvestments.com/risk/disclosure" style="color: #3498db; text-decoration: none;">click here</a>.</p>
        </td>
      </tr>
    </table>
    
  </body>

</html>