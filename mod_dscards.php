<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\Module\DsCards\Site\Helper\DsCardsHelper;

// Get data from the model
$cardsData = DsCardsHelper::getCardsData($params);
$intro = DsCardsHelper::getIntro($params);

if ($params->def('prepare_content', 1)) {
    PluginHelper::importPlugin('content');
    $module->content = HTMLHelper::_('content.prepare', $module->content, '', 'mod_custom.content');
}


require ModuleHelper::getLayoutPath('mod_dscards', $params->get('layout', 'default'));
