<?php

/**
 * Textile Addon
 *
 * @author markus[dot]staab[at]redaxo[dot]de Markus Staab
 *
 * @package redaxo5
 * @version svn:$Id$
 */

rex_perm::register('textile[]');
rex_perm::register('textile[help]', null, rex_perm::OPTIONS);

require_once rex_path::addon('textile', 'functions/function_textile.inc.php');

if (rex::isBackend())
{
  require_once rex_path::addon('textile', 'extensions/function_extensions.inc.php');
  require_once rex_path::addon('textile', 'functions/function_help.inc.php');

  rex_extension::register('PAGE_HEADER', 'rex_a79_css_add');
}