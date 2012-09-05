<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="/images/favicon.png">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<?php include '_global_bar.php'; ?>

    <div class="container">
    	<?php if (!empty($this->pageHeader) && !empty($this->pageHeaderSubtext)): ?>
    	<div class="page-header">
    		<h1>
           		<?php if (!empty($this->pageHeader)): ?><?php echo $this->pageHeader; ?><?php endif; ?>
	            <?php if (!empty($this->pageHeaderSubtext)): ?><small><?php echo $this->pageHeaderSubtext; ?></small><?php endif; ?>
    		</h1>
    	</div>
    	<?php endif; ?>

    	<div class="row">
    	<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
				'homeLink'=>array('label'=>'Home', 'url'=>array('/')),
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>
		</div>


		<?php echo $content; ?>

		<hr />
		<footer>
			<?php echo Yii::powered(); ?>
			<br />
			&copy; 2012 by Tarzan.
		</footer>
	</div>
</body>
</html>