<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Useradmin_Controller_User {

	public function action_index()
			{
				// if the user has the admin role, redirect to admin_user controller
				if (Auth::instance()->logged_in('admin'))
				{
					$this->request->redirect('admin_user/index');
				}
				else
				{
					$this->request->redirect('user/dashboard');
				}
			}
	public function action_login()
		{
			// ajax login
			if ($this->request->is_ajax() && isset($_REQUEST['username'], $_REQUEST['password']))
			{
				$this->auto_render = false;
				$this->request->headers('Content-Type', 'application/json');

				if ( Auth::instance()->logged_in() != 0 )
				{
					$this->response->status(200);
					$this->template->content = $this->request->body('{ "success": "true" }');
					return;
				}
				else {
					if (Auth::instance()->login($_REQUEST['username'],$_REQUEST['password'],
	                                            Arr::get($_REQUEST,'remember',false)!=false)
	                ){
						$this->response->status(200);
						$this->template->content = $this->request->body('{ "success": "true" }');
						return;
					}
	            }

				$this->response->status(500);
				$this->template->content = $this->request->body('{ "success": "false" }');
				return;
			}
			else
			{
				// set the template title (see Controller_App for implementation)
				$this->template->title = __('login');

				// If user already signed-in
				if (Auth::instance()->logged_in() != 0)
				{

					// redirect to the user account
					$this->request->redirect(Session::instance()->get_once('returnUrl','user/dashboard'));
				}

				$view = View::factory('user/login');

				// If there is a post and $_POST is not empty
				if ($_REQUEST && isset($_REQUEST['username'], $_REQUEST['password']))
				{
					// Check Auth if the post data validates using the rules setup in the user model
					if (Auth::instance()->login($_REQUEST['username'], $_REQUEST['password'],
	                                            Arr::get($_REQUEST,'remember',false)!=false)
	                ){
						// redirect to the user dashboard
						if (Auth::instance()->logged_in('admin'))
							$this->request->redirect(Session::instance()->get_once('returnUrl','admin_user/index'));
						else
							$this->request->redirect(Session::instance()->get_once('returnUrl','user/dashboard'));
						return;
					}
					else
					{
						$view->set('username', $_REQUEST['username']);
						// Get errors for display in view
						$validation = Validation::factory($_REQUEST)
							->rule('username', 'not_empty')
							->rule('password', 'not_empty');
						if ($validation->check())
						{
							$validation->error('password', 'invalid');
						}
						$view->set('errors', $validation->errors('login'));
					}
				}

				// allow setting the username as a get param
				if (isset($_GET['username']))
				{
					$view->set('username', htmlspecialchars($_GET['username']));
				}

				$providers = Kohana::$config->load('useradmin.providers');
				$view->set('facebook_enabled',
				isset($providers['facebook']) ? $providers['facebook'] : false);
				$this->template->content = $view;
			}
		}
	public function action_dashboard()
	{
			// set the template title (see Controller_App for implementation)
		if ($this->request->is_ajax())
				{

					$this->auto_render = false;
					if (Auth::instance()->logged_in() == false)
								{
									// No user is currently logged in
									$this->response->status(401);
									$this->response->body(View::factory('user/login'));
								}
					else {
						$this->response->status(200);

						$this->response->body(View::factory('user/dashboard')->set('user', Auth::instance()->get_user()));
					}
				}

		else {
		$this->template->title = __('user.dashboard');
			if (Auth::instance()->logged_in() == false)
			{
				// No user is currently logged in
				$this->request->redirect('user/login');
			}
			$view = $this->template->content = View::factory('user/dashboard');
			// retrieve the current user and set the view variable accordingly
			$view->set('user', Auth::instance()->get_user());
		}
	}


	// cars stock action
	public function action_carstock()
	{

	}

}