<div class="mt-4">
    <h4 class="title">Sign Up</h4>
    <?php echo $this->Form->create('User', array(
        'class' => 'h-adr',
        'novalidate' => true
    )); ?>
    <fieldset>
        <?php
        echo $this->Form->input('username', array(
            'div' => array(
                'class' => 'form-group'),
            'class' => 'form-control',
            'error' => array(
                'attributes' => array(
                    'wrap'=>'div',
                    'class'=>'mt-2 p-1 alert alert-danger')),
            ));
        echo $this->Form->input('password', array(
            'div' => array(
                'class' => 'form-group'),
            'class' => 'form-control',
            'error' => array(
                'attributes' => array(
                    'wrap'=>'div',
                    'class'=>'mt-2 p-1 alert alert-danger')),
            ));
        echo $this->Form->input('email', array(
            'div' => array(
                'class' => 'form-group'),
            'class' => 'form-control',
            'type' => 'email',
            'error' => array(
                'attributes' => array(
                    'wrap'=>'div',
                    'class'=>'mt-2 p-1 alert alert-danger')),
            )); ?>
        <span class="p-country-name" style="display:none;">Japan</span>
        <?php
        echo $this->Form->input('zipcode', array(
            'class' => 'form-control',
            'id' => 'zipcode',
            'label' => '〒郵便番号(ハイフンなしの数字7文字で入力して下さい)',
            'error' => array(
                'attributes' => array(
                    'wrap'=>'div',
                    'class'=>'mt-2 p-1 alert alert-danger')),
            'div' => array(
                'class' => 'form-group'),
        ));
        echo $this->Form->input('adress_auto', array(
            'class' => 'form-control',
            'id' => 'adress',
            'div' => array(
                'class' => 'form-group'),
            'label' => '都道府県市区町村',
            'error' => array(
                'attributes' => array(
                    'wrap'=>'div',
                    'class'=>'mt-2 p-1 alert alert-danger')),
        ));
        echo $this->Form->input('adress_manual', array(
            'class' => 'form-control',
            'id' => 'others',
            'div' => array(
                'class' => 'form-group'),
            'label' => '番地以降',
            'error' => array(
                'attributes' => array(
                    'wrap'=>'div',
                    'class'=>'mt-2 p-1 alert alert-danger')),
        ));
         ?>    
    </fieldset>
    <hr>
    <?php echo $this->Form->submit('Sign Up', array(
        'div' => array(
            'class' => 'text-right'),
            'class' => 'btn btn-secondary mb-0',
        )); ?>
    <?php echo $this->Form->end(); ?>
</div>
