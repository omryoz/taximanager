<div id="navigation">


    <ul class="menu">
        <?php
        if (Auth::instance()->logged_in())
        {
            if( Auth::instance()->logged_in('admin') )
            {
				echo '<div id="actionmenu" class="actionmenu">';
								echo '<div id="menuradio" class="navmenu">';
									echo '<input type="radio" id="menu_admindash_button" name="menuradio" /><label for="menu_admindash_button">'.__('dashboard').'</label>';
								echo '</div>';
								echo '</div>';

            }
			elseif (Auth::instance()->logged_in('login') )
			{
				echo '<div id="actionmenu" class="actionmenu">';
				echo '<div id="menuradio" class="navmenu">';
					echo '<input type="radio" id="menu_dash_button" name="menuradio" /><label for="menu_dash_button">'.__('dashboard').'</label>';
					echo '<input type="radio" id="menu_car_button" name="menuradio" /><label for="menu_car_button">'.__('cars').'</label>';
					echo '<input type="radio" id="menu_medallion_button" name="menuradio" /><label for="menu_medallion_button">'.__('medallions').'</label>';
					echo '<input type="radio" id="menu_brokerage_button" name="menuradio" /><label for="menu_brokerage_button">'.__('brokerage').'</label>';
					echo '<input type="radio" id="menu_clients_button" name="menuradio" /><label for="menu_clients_button">'.__('clients').'</label>';
					echo '<input type="radio" id="menu_queries_button" name="menuradio" /><label for="menu_queries_button">'.__('queries').'</label>';
				echo '</div>';
				echo '</div>';

			}
			echo '<div id="logmenu" class="logmenu">';
			echo '<div id="loginradio" class="loginradio">';
			echo '<input type="radio" id="profile_button" name="menuradio" /><label for="profile_button">'.__('my.profile').'</label>';
			echo '<input type="radio" id="logout_button" name="menuradio" /><label for="logout_button">'.__('logout').'</label>';
			echo '</div>';
			echo '</div>';

        }
        else
        {
            //echo '<li>'.Html::anchor('user/register', __('register')).'</li>';
            echo '<li>'.Html::anchor('user/login', __('login')).'</li>';
        }
        ?>
    </ul>

</div>