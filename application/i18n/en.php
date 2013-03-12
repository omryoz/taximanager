<?php defined('SYSPATH') or die('No direct script access.');

return array(
    //Languages
	'ar'	=>	'Arabic',

	'en'	=>	'English',

	'he'	=>	'Hebrew',

	// Controlers and Views text

	// \view\cars\index.php
		'cars.stock' => 'Car Stock',

	// \views\useradmin\nav.php
		'cars' => 'Cars',
		'medallions' => 'Medallions',
		'brokerage' => 'Brokerage',
		'clients' => 'Clients',
		'edit.client' => 'Edit Client',
		'add.client' => 'Add New Client',
		'search.client' => 'Search Client',
		'queries' => 'Queries',
		'sell.car' => 'Sell Car',
		'buy.car' => 'Buy Car',
		'activate.car' => 'Activate Car',
		'sell.medallion' => 'Sell Medallion',
		'buy.medallion' => 'Buy Medallion',
		'rentfrom.medallion' => 'Rent Medallion',
		'rentto.medallion' => 'Rent Out Medallion',
		'user.admin' => 'User Admin', // 9
		'dashboard' => 'Dashboard', // 9
		'company.dashboard' => 'Company Dashboard', // 9
		'my.profile' => 'My Profile', // 11
		'logout' => 'Logout', // 12
		'register' => 'Register', // 16
		'login' => 'Login', // 17
		'admin.control.panel' => 'Admin Control Panel' ,
		'management.system' => 'Management System',

		// \views\user\login.php
		'email.or.username' => 'Email or Company ID', // 23
		'password' => 'Password', // 26
		'?forgot.password' => 'Forgot your password?', // 27
		'remember.me' => 'Remember me', // 38
		'?dont.have.account' => 'Don\'t have an account?', // 54
		'register.new.account' => 'Register a new account', // 54
		'register.or.providerchange' => 'To register / log in using another account, please click your provider', // 57

		// \views\user\noaccess.php
		'access.denied' => 'Access denied', // 2
		'no.rights.to.access.functionality' => 'You do not have the necessary rights to access this functionality.', // 4

		// \views\user\profile.php
		'edit.profile' => 'Edit profile', // 4
		'delete.account' => 'Delete Account', // 5
		'user.profile' => 'User Profile', // 9
		'your.user.information' => 'This is your user information', // 11
		'username' => 'Company ID', // 13
		'email' => 'Email', // 13
		'login.activity' => 'Login Activity', // 16
		'total.nbr.logins' => 'Total number of logins', // 17
		'accounts.associated.with.profile' => 'Accounts associated with your user profile', // 23
		'additional.accountproviders' => 'Additional account providers', // 31
		'click.provider.icon.to.associate.account' => 'Click the provider icon to associate it with your existing account.', // 31

		// \views\user\profile_edit.php
		'roles' => 'Roles', // 19
		'role' => 'Role', // 21
		'description' => 'Description', // 21
		'save' => 'Save', // 40

		// \views\user\register.php
		'?already.have.account' => 'Already have a user account?', // 5
		'login.here' => 'Log in here.', // 5
		'enter.info.to.register' => 'Fill in the information below to register.', // 7
		'register.account' => 'Register new account', // 35

		// \views\user\unregister.php
		'confirm.remove.user.account' => 'Confirm removing your user account', // 2
		'?sure.to.remove.user.account' => 'Are you sure you want to remove your user account?', // 10
		'yes' => 'Yes', // 12
		'no' => 'No', // 13
		'confirm' => 'Confirm', // 15
		'cancel' => 'Cancel', // 19

		// \views\user\user_edit_form.php
		'allowed.usernames' => 'Must Be a valid P.C number', // 2
		'email.address' => 'Email address', // 3
		'allowed.passwords' => 'Password should be between 6-42 characters.', // 6
		'retype.password' => 'Retype Password', // 7

		// \views\user\reset\forgot.php
		'?forgot.password.or.username' => 'Forgot password or Company ID', // 3
		'send.password.resetlink' => 'Please send me a link to reset my password.', // 6
		'reset.password' => 'Reset password', // 14

		// \views\user\reset\reset.php
		'account.email.address' => 'Account email address', // 10
		'password.reset.token' => 'Password reset token', // 14

		// \views\user\admin\delete.php
		'?delete.user' => 'Delete user?', // 3
		'?sure.to.delete.user' => 'Are you sure you want to delete user ":user"', // 12
		'delete' => 'Delete', // 16

		// \views\user\admin\edit.php
		'?edit.or.add.user' => 'Edit/add user', // 18

		// \views\user\admin\index.php
		'?add.user' => 'Add new user', // 11
		'administer.users' => 'Administer users', // 15
		'edit' => 'Edit', // 31
		'last.login' => 'Last login', // 54
		'nbr.of.logins' => '# of logins', // 55
		'identities' => 'Identities', // 58
		'actions' => 'Actions', // 60

		// \views\template\useradmin.php
		'module.page.title' => 'Taxi Manager Login', // 15

		// \views\pagination\useradmin.php
		'first' => 'First', // 13
		'previous' => 'Previous', // 19
		'next' => 'Next', // 35
		'last' => 'Last', // 41

		// \messages\register\user.php
		'username.already.registered' => 'This company is already registered, please choose another one.', // 6
		'username.already.used' => 'This Company is already in use.', // 7
		'email.invalid' => 'This is not a valid email.', // 10
		'email.already.used' => 'This email address is already in use.', // 11
		'password.confirm.different' => 'The password and password confirmation are different.', // 20

		// \classes\useradmin\helper\format.php
		'one.second.ago' => 'one second ago', // 38
		'seconds.ago' => 'seconds ago', // 38
		'one.minute.ago' => 'one minute ago', // 42
		'minutes.ago' => 'minutes ago', // 46
		'one.hour.ago' => 'one hour ago', // 50
		'hours.ago' => 'hours ago', // 54
		'yesterday' => 'yesterday', // 58
		'days.ago' => 'days ago', // 62
		'one.month.ago' => 'one month ago', // 67
		'months.ago' => 'months ago', // 67
		'one.year.ago' => 'one year ago', // 72
		'years.ago' => 'years ago', // 72

		// \classes\useradmin\controller\user.php
		'values.saved' => 'Values saved', // 161
		'error.values.could.not.be.saved' => 'Error: Values could not be saved.', // 170
		'user.registration' => 'User registration', // 208
		'captcha.incorrect' => 'The captcha text is incorrect', // 235
		'please.try.again' => 'Please try again', // 235
		'close.user.account' => 'Close user account', // 277
		'user.deleted' => 'User deleted', // 308
		'forgot.password' => 'Forgot Password', // 424
		'account.password.reset' => 'Account password reset', // 436
		'email.password.reset.message.body' => 'You have requested a password reset. You can reset password to your account by visiting the page at:

	:reset_token_link

	If the above link is not clickable, please visit the following page:
	:reset_link

	and copy/paste the following Reset Token: :reset_token
	Your Company account ID is: :username
	', // 441
		'password.reset.email.sent' => 'Password reset email sent', // 457
		'could.not.send.email' => 'Could not send email', // 462
		'no.admin.account.email.password.reset' => 'Admin account password cannot be reset via email.', // 469
		'user.account.not.found' => 'User account could not be found.', // 473
		'email.password.reset.not.enabled' => 'Password reset via email is not enabled. Please contact the site administrator to reset your password.', // 488
		'password.reset' => 'Password reset', // 517
		'your.new.password.is :password' => 'Your password has been reset to: ":password".', // 519
		'please.log.in.below' => 'Please log in below.', // 521
		'change.password' => 'Change password', // 538
		'unable.to.change.password.?passwords.match' => 'Password could not be changed, please make sure that the passwords match.', // 565
		'already.logged.in' => 'You are already logged in', // 587
		'provider.not.enabled.select.different.or.login' => 'Provider is not enabled; please select another provider or log in normally.', // 603
		'click.yes.to.associate.account' => 'Please click Yes to confirm associating the account.', // 635
		'user.account.associated.with.provider' => 'Your user account has been associated with this provider.', // 688
		'unable.to.associate.account.with.provider' => 'We were unable to associate this account with the provider.
	                            Please make sure that there are no other accounts using this provider identity,
	                            as each 3rd party provider identity can only be associated with one user account.', // 696
		'error.associating.account.with.provider' => 'There was an error associating your account with this provider.', // 704
		'twitter.no.email.retrive.support' => 'The Twitter API does not support retrieving your email address; you will have to enter it manually.', // 790
		'logged.in.but.account.emails.do.not.match' => 'You are logged in, but the email received from the provider does not match the email associated with your account.', // 820
		'retrieving.info.from.provider.failed.register.below' => 'Retrieving information from the provider failed. Please register below.', // 826

		// \classes\useradmin\controller\admin\user.php
		'user.administration' => 'User Administration', // 43
		'edit.user' => 'Edit User', // 81
		'delete.user' => 'Delete User', // 223
		'user.already.deleted' => 'User is already deleted', // 240

		// Orphan phrases
//	'This username is already registered, please choose another one.'	=>	'',
//	'This username is already in use.'	=>	'',
//	'This is not a valid email.'	=>	'',
//	'This email address is already in use.'	=>'',
//	'The password and password confirmation are different.' =>'',
//	'The captcha text is incorrect, please try again.' =>'',
//	'First'		=>'',
//	'Previous'	=>'',
//	'Next'	=>'',
//	'Last'	=>'',
//	'Are you sure you want to delete user ":user"'	=>'',
//	'Yes'	=>'',
//	'No'	=>'',
//	'Cancel'	=>'',
//	'Delete'	=>'',
//	'Edit/add user'	=>'',
//	'Username'	=>'',
//	'Length between 1-32 characters. Letters, numbers, dot and underscore are allowed characters.'	=>'',
//	'Email address'	=>'',
//	'Password'	=>'',
//	'Password should be between 6-42 characters.'	=>'',
//	'Re-type Password'	=>'',
//	'Roles'	=>'',
//	'Role'	=>'',
//	'Description'	=>'',
//	'Save'	=>'',
//	'Administer users'	=>'',
//	'Edit'	=>'',
//	'Forgot password or username'	=>'',
//	'Please send me a link to reset my password.'	=>'',
//	'Your email address:'	=>'',
//	'Reset password'	=>'',
//	'Account email address'	=>'',
//	'Password reset token'	=>'',
//	'Access not allowed'	=>'',
//	'User profile'	=>'',
//	'Edit user profile'	=>'',
//	'Error: Values could not be saved.'	=>'',
//	'User registration'	=>'',
//	'Close user account'	=>'',
//	'Login'	=>'',
//	'Forgot password'	=>'',
//	'Account password reset'	=>'',
//	'Password reset email sent.'	=>'',
//	'Could not send email.'	=>'',
//	'User account could not be found.'	=>'',
//	'Your password has been reset to: ":password".'	=>'',
//	'Please log in below.'	=>'',
//	'Change password'	=>'',
//	'Values saved.'	=>'',
//	'Password could not be changed, please make sure that the passwords match.'	=>'',
//	'Your user account has been associated with this provider.'	=>'',
//	'User administration'	=>'',
//	'Edit user'	=>'',
//	'Delete user'	=>'',
//	'User deleted.'	=>'',
//	'User is already deleted.'	=>'',
//	'never'	=>'',
//	'Email or Username'	=>'Email or Company ID',
//	'Forgot your password?'	=>'',
//	'Remember me'	=>'',
//	'Don\'t have an account?'	=>'',
//	'Register a new account'	=>'',
//	'To register / log in using another account, please click your provider'=>'',
//	'Access denied'	=>'',
//	'You do not have the necessary rights to access this functionality.'	=>'',

);