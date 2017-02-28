<div class="ui message error" style="display: block !important;">

    <div class="header">Please correct the following errors:</div>

    <?php if( is_array( $message ) ): ?>
        <ul class="list"><?= implode( $message ) ?></ul>
    <?php else: ?>
        <p><?= h( $message ) ?></p>
    <?php endif; ?>
    
</div>
