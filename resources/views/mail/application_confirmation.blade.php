<style>
	.auth-btn{
		font-weight: 600; background-color: #58094e; color: white; padding: 7px 12px; border: 1px solid transparent; border-radius: 5px; text-decoration:none;
	}
	.auth-btn:hover{
		background-color: transparent; border: 1px solid #58094e; color: #58094e;
	}
	.text-skezzole{
		color: #58094e;
	}
</style>
<div class="row">
	<div  class="col-12 text-left">
		<img src="{{ asset('images/icon/pagviy-01.png') }}"  style="width: 180px; margin-top: 20px;">
	</div>
</div>
<h3>Hi {{ $application->user->first_name }}</h3>

	<p>Thank you for subscribing to Pagviy {{$application->agency->name}} {{$application->mode}} </p>
    <p>To enjoy all the features with your package kindly open the following link and send a request which would enable you access to the telegram community.</p>
    <p>If you encounter any difficulties with this process, do not hesitate to reach us on whatsapp 09112589319 or email <strong>info@pagviysolution.com</strong> .</p>

    <p>
        Thank you,
    </p>

    <p>
       <strong>Pagviy Solution  </strong> 

    </p>
   
	
<hr>
	<p>This message was sent to you by Pagviy Solution</p>

	<p>For support, contact us via <a href="mail-to:info@pagviysolution.com"></a>info@pagviysolution.com</p>
	<img src="{{ asset('images/logo/pag_logo-01.png') }}"  style="width: 60px;">
	<p style="font-size:12px;">Copyright &copy; Pagviy - 2023 </p>
	{{-- src="assets/img/logo/logo.png" --}}