<?php

/**
 * @copyright Copyright (c) 2016, Robin Appelman <robin@icewind.nl>
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCP\Lockdown;

use OC\Authentication\Token\IToken;

/**
 * @since 9.2
 */
interface ILockdownManager {
	/**
	 * Enable the lockdown restrictions
	 *
	 * @since 9.2
	 */
	public function enable();

	/**
	 * Set the active token to get the restrictions from and enable the lockdown
	 *
	 * @param IToken $token
	 * @since 9.2
	 */
	public function setToken(IToken $token);

	/**
	 * Check whether or not filesystem access is allowed
	 *
	 * @return bool
	 * @since 9.2
	 */
	public function canAccessFilesystem();
}
