<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Confirmation</title>
  </head>

  <body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #0f172a; color: #e2e8f0; padding: 40px; margin: 0;">
    <div style="max-width: 600px; margin: auto; background: linear-gradient(135deg, #1e293b, #0f172a); border: 1px solid #334155; border-radius: 16px; padding: 32px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.6);">

      <h2 style="text-align:center; color:#6366f1; font-size: 26px; margin-bottom: 10px;">🎓 Cloud Computing 2025</h2>
      <p style="text-align:center; color:#94a3b8; margin-bottom: 24px;">Registration Confirmation</p>

      <p style="font-size: 15px; line-height: 1.7;">Hello <b style="color:#f8fafc;">{{ $formData['full_name'] }}</b>!</p>
      <p style="font-size: 15px; line-height: 1.7;">Congratulations! You have successfully registered for <b style="color:#818cf8;">Cloud Computing 2025</b>.</p>

      <div style="margin-top: 25px;">
        <h3 style="color:#a5b4fc; font-size: 18px; border-bottom: 1px solid #334155; padding-bottom: 8px;">📄 Registration Details</h3>
        <ul style="list-style:none; padding:0; margin:15px 0; line-height:1.8;">
          <li><b style="color:#cbd5e1;">Full Name:</b> {{ $formData['full_name'] }}</li>
          <li><b style="color:#cbd5e1;">Email:</b> {{ $formData['email'] }}</li>
          <li><b style="color:#cbd5e1;">Birthdate:</b> {{ \Carbon\Carbon::parse($formData['birthdate'])->format('F j, Y') }}</li>
          <li><b style="color:#cbd5e1;">Course:</b> Cloud Computing 2025</li>
        </ul>
      </div>

      <div style="text-align:center; margin: 30px 0;">
        <a href="#" style="background-color:#22c55e; color:white; text-decoration:none; padding:12px 24px; border-radius:10px; font-weight:bold; letter-spacing:0.5px; transition: all 0.3s ease;">Confirm My Registration</a>
      </div>

      <p style="font-size:14px; color:#94a3b8; text-align:center; line-height:1.6;">
        <b>Important:</b> Please confirm your registration within 7 days to secure your spot.<br>
        If you did not make this registration, please ignore this email.
      </p>

      <hr style="border: none; border-top: 1px solid #334155; margin: 30px 0;">

      <p style="text-align:center; font-size:12px; color:#64748b;">
        © 2025 Cloud Computing Event | University of Innovation<br>
        This is an automated message — please do not reply.
      </p>

    </div>
  </body>
</html>