<?php
/**
 * Hooks for ScrollableTables extension
 *
 * @file
 * @ingroup Extensions
 */

class ScrollableTablesHooks {

	public static function registerModules(OutputPage &$out, Skin &$skin) {
		$out->addModules( [ 'ext.scrollableTables' ] );
	}
}
