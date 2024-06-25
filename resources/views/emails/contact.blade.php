<!-- resources/views/emails/welcome.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
   <p>hello, you got new enquiry</p>

    <table>
        <tr>
          <td>name</td>
          <td>{{ $details['name'] }}</td>
        
        </tr>
        <tr>
          <td>city</td>
          <td>{{ $details['city'] }}</td>
        
        </tr>
        <tr>
          <td>phone</td>
          <td>{{ $details['phone'] }}</td>
         
        </tr>
        <tr>
            <td>email</td>
            <td>{{ $details['email'] }}</td>
           
          </tr>
          <tr>
            <td>subject</td>
            <td>{{ $details['subject'] }}</td>
           
          </tr>
          <tr>
            <td>message</td>
            <td>{{ $details['message'] }}</td>
           
          </tr>
         
      </table>
</body>
</html>

