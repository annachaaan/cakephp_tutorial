<!-- 成功した時のフラッシュメッセージテンプレ -->
<div style="width:30%; text-align:center;" id="<?php echo $key; ?>Message" class="alert alert-info <?php echo !empty($params['class']) ? $params['class'] : 'message'; ?>">
    <?php echo $message; ?>
</div>
