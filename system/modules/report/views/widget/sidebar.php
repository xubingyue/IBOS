<?php

use application\core\utils\IBOS;
?>
<li <?php if ( $inPersonal ): ?>class="active"<?php endif; ?>>
    <a href="<?php echo IBOS::app()->createUrl( 'report/stats/personal' ); ?>">
        <i class="os-personal-statistic"></i>
        <?php echo IBOS::lang( 'Personal statistics' ); ?>
    </a>
    <?php if ( $inPersonal ): ?>
        <?php echo $this->getController()->widget( 'application\modules\report\widgets\ReportType', array( 'type' => 'personal' ), true ); ?>
    <?php endif; ?>
</li>
<?php if ( $hasSub ): ?>
    <li <?php if ( $inReview ): ?>class="active"<?php endif; ?>>
        <a href="<?php echo IBOS::app()->createUrl( 'report/stats/review' ); ?>">
            <i class="os-statistics"></i>
            <?php echo IBOS::lang( 'Review statistics' ); ?>
        </a>
        <?php if ( $inReview ): ?>
            <?php echo $this->getController()->widget( 'application\modules\report\widgets\ReportType', array( 'type' => 'review' ), true ); ?>
            <?php echo $this->getController()->widget( 'application\modules\report\widgets\ReportSublist', array( 'stats' => true ), true ); ?>
        <?php endif; ?>
    </li>
<?php endif; ?>