<div class="m-4">
    <div class="title">
        <h3 class="mt-2 mb-2"><?php echo ('name:' . $loginuser['User']['username']); ?></h3>
        <div class="btn-form d-flex flex-row-reverse">
        <?php
        if ($loginuser['User']['id'] == $auth) {
            echo $this->element('btn', ['id' => $loginuser['User']['id']]);
        } ?>
        </div>
        <?php echo 'email:' . $loginuser['User']['email']; ?>
        <br>
        <hr>
        <?php echo '住所: 〒' . $loginuser['User']['zipcode']; ?>
        <br>
        <?php echo $loginuser['User']['adress_auto'] . $loginuser['User']['adress_manual']; ?>
    </div>
</div>