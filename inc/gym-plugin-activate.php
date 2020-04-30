<?php
/**
* @package Gym
*/

class GymPluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}