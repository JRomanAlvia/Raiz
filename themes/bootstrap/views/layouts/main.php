<!DOCTYPE html>
 
<html lang="<?php echo Yii::app()->language;?>">
 
<head>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
 <link rel="icon" type="image/png" href="<?php echo Yii::app()->baseUrl.'../images/logoRaiz.png'; ?>" />
 <meta charset="<?php echo Yii::app()->charset;?>">
 
</head>
 
<body>
 
<header>
<?php
$this->widget(
    'booster.widgets.TbNavbar',
    array(
        'brand' => 'Raíz',
        'fixed' => false,
        'fluid' => true,
        'items' => array(
            array(
                'class' => 'booster.widgets.TbMenu',
            	'type' => 'navbar',
                'items' => array(
                    array('label' => 'Inicio', 'url' => '#'),
                    //array('label' => 'Mapa de Cultivos', 'url' => array('/site/mapa')),
                    array(
                        'label' => 'Usuarios',
                        'items' => array(
                            array('label' => 'Listar', 'url' => array('/Usuarios/index')),
                            array('label' => 'Crear', 'url' => array('/Usuarios/create')),
                            array('label' => 'Administrar', 'url' => array('/Usuarios/admin'))
                        )
                    ),
                    array(
                        'label' => 'Pestes',
                        'items' => array(
                            array('label' => 'Listar', 'url' => array('/Pestes/index')),
                            array('label' => 'Crear', 'url' => array('/Pestes/create')),
                            array('label' => 'Administrar', 'url' => array('/Pestes/admin'))
                        )
                    ),
                    array(
                        'label' => 'Pesticidas',
                        'items' => array(
                            array('label' => 'Listar', 'url' => array('/Pesticidas/index')),
                            array('label' => 'Crear', 'url' => array('/Pesticidas/create')),
                            array('label' => 'Administrar', 'url' => array('/Pesticidas/admin'))
                        )
                    ),
                    array(
                        'label' => 'Plantas',
                        'items' => array(
                            array('label' => 'Listar', 'url' => array('/Plantas/index')),
                            array('label' => 'Crear', 'url' => array('/Plantas/create')),
                            array('label' => 'Administrar', 'url' => array('/Plantas/admin'))
                        )
                    ),
                    array(
                        'label' => 'Notas',
                        'items' => array(
                            array('label' => 'Listar', 'url' => array('/Notas/index')),
                            array('label' => 'Crear', 'url' => array('/Notas/create')),
                            array('label' => 'Administrar', 'url' => array('/Notas/admin'))
                        )
                    ),
                    array(
                        'label' => 'Cultivos',
                        'items' => array(
                            array('label' => 'Listar', 'url' => array('/Cultivo/index')),
                            array('label' => 'Crear', 'url' => array('/Cultivo/create')),
                            array('label' => 'Administrar', 'url' => array('/Cultivo/admin'))
                        )
                    ),
                )
            )
        )
    )
);
/*
$this->widget('booster.widgets.TbNavbar', array(
 'type'=>'inverse', // null or 'inverse'
 'brand'=>CHtml::encode(Yii::app()->name),
 'brandUrl'=>array('/site/index'),
 'collapse'=>true, // requires bootstrap-responsive.css
 'items'=>array(
 array(
 'class'=>'booster.widgets.TbMenu',
 'items'=>array(
 array('label'=>'Aviso Legal', 'url'=>array('/site/page', 'view'=>'disclaimer')),
 array('label'=>'Contáctenos', 'url'=>array('/site/contact')),
 array('label'=>'FAQs' , 'url'=>array('/faqs/index'), 'visible'=>!Yii::app()->user->isGuest),
 ),
 ),
 array(
 'class'=>'booster.widgets.TbMenu',
 'htmlOptions'=>array('class'=>'pull-right'),
 'items'=>array(
 array('label'=>'Iniciar sesión'
 , 'url'=>Yii::app()->user->ui->loginUrl
 , 'visible'=>Yii::app()->user->isGuest),
 array('label'=>Yii::app()->user->name,
 'url'=>array('/cruge/ui/editprofile/'),
 'visible'=>!Yii::app()->user->isGuest),
 array('label'=>'Cerrar sesión ('.Yii::app()->user->name.')'
 , 'url'=>Yii::app()->user->ui->logoutUrl
 , 'visible'=>!Yii::app()->user->isGuest),
 // array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn'))
 ),
 ),
 ),
));
  */
 
?>
</header>
<div class="container" id="main">
 <?php if(isset($this->breadcrumbs)):?>
 <?php $this->widget('booster.widgets.TbBreadcrumbs', array(
 'links'=>$this->breadcrumbs,
 )); ?>
 <?php endif?>
 <?php echo $content; ?>
 <hr>
 <footer>
 Copyright &copy; <?php echo date('Y'); ?> <?php echo CHtml::encode(Yii::app()->params['empresa']); ?> | <?php echo CHtml::encode((Yii::app()->name).' '.Yii::app()->params['version']); ?><br/>

 </footer>
 
</div>
</body>
</html>