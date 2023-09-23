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

use Joomla\CMS\Factory;

$modId = 'mod-custom' . $module->id;
?>

<div id="<?= $modId; ?>" class="dsCards cards--servizi">
    <?php  if(isset($intro)) { ?>
        <div class="intro">
            <?= $intro; ?>
        </div>
    <?php } ?>
    <div class="cards__container d-flex">
        <?php foreach ($cardsData as $cardData) : ?>
            <div class="card__container d-flex flex-column align-items-center">
                <img src="<?= $cardData['iconUrl']; ?>" width="<?= $cardData['iconWidth']; ?>" height="<?= $cardData['iconHeight']; ?>" alt="<?= $cardData['alttext']; ?>" class="card__image" loading="lazy">
                <h5 class="card__title"><?= $cardData['cardTitle']; ?></h5>
                <p class="card__content"><?= $cardData['cardContent']; ?></p>
                <?php if ($cardData['showButton'] == 1) : ?>
                    <a href="<?= $cardData['buttonLink']; ?>" class="card__btn btn <?= $cardData['buttonStyle']; ?>">Segui</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>