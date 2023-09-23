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
                <img src="<?= $cardData['iconUrl']; ?>" width="<?= $cardData['iconWidth']; ?>" height="<?= $cardData['iconHeight']; ?>" alt="<?= $cardData['alttext']; ?>" loading="lazy">
                <h5 class="text-center"><?= $cardData['cardTitle']; ?></h5>
                <p><?= $cardData['cardContent']; ?></p>
                <?php if ($cardData['showButton'] == 1) : ?>
                    <a href="<?= $cardData['buttonLink']; ?>" class="btn <?= $cardData['buttonStyle']; ?>">Segui</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>