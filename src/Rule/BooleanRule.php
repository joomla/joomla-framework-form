<?php
/**
 * Part of the Joomla! Framework Form Package
 *
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Form\Rule;

use Joomla\Form\Rule;

/**
 * Boolean Form Rule class for the Joomla! Framework.
 *
 * Validates that a form field matches a boolean value
 *
 * @since       1.0
 * @deprecated  The joomla/form package is deprecated
 */
class BooleanRule extends Rule
{
	/**
	 * The regular expression to use in testing a form field value.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $regex = '^(?:[01]|true|false)$';

	/**
	 * The regular expression modifiers to use when testing a form field value.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $modifiers = 'i';
}
