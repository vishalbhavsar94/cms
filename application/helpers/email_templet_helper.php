<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('add_user_email_tmpl'))
{
    function add_user_email_tmpl($userid,$password)
    {
		$html="
			
			
			<div class='container' align='center' style='
				font-family: sans-serif;
				background-color: aqua;
				background-image: -webkit-linear-gradient(left, #d209fa 1%, #4f81d4 100%);
				text-align:  center;'>

			<h1>Welcome to Rofel institute</h1>
			<h2>Basic Table</h2>
			<p>Userid and password for Rofel cms Softwear...</p>            
			<table class='table' border='1' align='center'>
				<tbody>
				<tr>
					<td>UserID</td>
					<td>$userid</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>$password</td>
				</tr>
				</tbody>
			</table>
			</div>";
		return $html;
    }   
}
