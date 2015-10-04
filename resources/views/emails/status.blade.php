
<p>Hello {{$name}},</p>
<p>Your account has been {{$status}}.</p>

@if($status=='activated')
<p>Your new login credentials are as follows:</p>
<p>email: {{$email}} </p>
<p>password: 123456  </p>
@else
<p>You are no longer permitted to login to the MNCH website.</p>
@endif

<p>Regards,</p>
<p>MNCH</p>