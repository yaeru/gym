<?php
/**
* @package Gym
*/

class GymPluginDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}