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

<p>We are thrilled to see you here!</p>


	<p>Hello Admin</p>
	<p>A new application is here with details below</p>

    <ul>
        <li>
            First Name: {{$application->user->first_name}}
        </li>
        <li>
            Last Name: {{$application->user->last_name}}
        </li>
        <li>
            Middle Name: {{$application->user->middle_name}}
        </li>
        <li>
            Agency: {{$application->agency->name}}
        </li>
        <li>
            Phase: {{$application->phase->title}}
        </li>
        <li>
            Mode: {{$application->mode}}
        </li>

        <li>
            Amount Paid: {{$application->payment->amount}}
        </li>

        <li>
            Payment Reference: {{$application->payment->reference}}
        </li>
    </ul>
	
<hr>
	<p>This message was sent to you by Pagviy Solution</p>

	<p>For support, contact us via <a href="mail-to:support@skezzole.com.ng"></a>support@skezzole.com.ng</p>
	<img src="{{ asset('images/logo/pag_logo-01.png') }}"  style="width: 60px;">
	<p style="font-size:12px;">Copyright &copy; Pagviy - 2023 </p>
	{{-- src="assets/img/logo/logo.png" --}}