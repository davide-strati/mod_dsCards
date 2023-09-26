<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_foo
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Module\DsCards\Site\Helper;

// No direct access to this file
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;

class DsCardsHelper
{
    public static function getIntro($params)
    {
        $intro = '';
        $intro = $params->get('intro');
        return $intro;
    }
    public static function getCardsData($params)
    {
        $cardElementsObj = $params->get('cardElements');
        $cardsData = [];

        foreach ($cardElementsObj as $cardElements) {
            $iconUrl = $iconWidth = $iconHeight = $buttonLink = $buttonStyled = '';
            $icon = isset($cardElements->cardIcon) ? self::cleanImage($cardElements->cardIcon) : null;

            if ($icon) {
                $iconUrl = $icon->url;
                $iconWidth = $icon->attributes["width"];
                $iconHeight = $icon->attributes["height"];
            }

            $showButton = $cardElements->showButton;
            if ($showButton == 1) {
                // Include button-related data
                $buttonStyle = $cardElements->buttonStyle;
                $buttonLink = $cardElements->buttonURL;
            } else {
                $buttonStyle = '';
                $buttonLink = '';
            }
            
            $target = $cardElements->buttonTarget;
            if ($target == 0) {
                $buttonTarget = '_self';
            } else {
                $buttonTarget = '_blank';
            }


            $cardsData[] = [
                'iconUrl' => $iconUrl,
                'iconWidth' => $iconWidth,
                'iconHeight' => $iconHeight,
                'alttext' => $cardElements->alttext,
                'cardTitle' => $cardElements->cardTitle,
                'cardContent' => $cardElements->cardContent,
                'showButton' => $cardElements->showButton,
                'buttonLink' => $buttonLink,
                'buttonStyle' => $cardElements->buttonStyle,
                'buttonText' => $cardElements->buttonText,
                'buttonTarget' => $buttonTarget,
            ];
        }

        return $cardsData;
    }

    public static function cleanImage($image)
    {
        $cleanedImage = HTMLHelper::cleanImageURL($image);
        return $cleanedImage;
    }
}
