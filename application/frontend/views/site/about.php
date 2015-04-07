<?php
use yii\helpers\Html;
use kartik\icons\Icon;

Icon::map($this);
/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<body background="images/bg.jpg">
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h3>Career Placement Office</h3>
    <p>
    The Industry-Academe Cooperative Education Program, also known as the I-ACE Program, is an internship program of the Asia Pacific College, where students on their senior year are assigned to work full time for a company for a period of two consecutive terms.<br/>

	The objective of the program is to link industry and academe. This program is envisioned to be a good venue to expose the school to the relevant and changing needs of the industry. The industry sector, on the other hand, absorbs the intern and is encouraged to be involved in the education and development of future Information Technology and Business professionals from their respective courses and specializations.<br/>
	On their senior year, APC students enter the Industry-Academe Cooperative Education Program. They are assigned to work for a pre-identified company (assigned during the internship placement period), for a duration of two (2) consecutive terms of APC’s tri-mestral school calendar.<br/><br/>

	During the Internship Program, the Interns are not expected to enroll in any academic courses in school for they will be working full-time (eight hours a day, Mondays to Fridays) at their respective companies. Interns are invited to attend once a month Saturday sessions with the Career & Placement Office to discuss updates, issues or problems encountered.<br/><br/>

	As interns, they are expected to strictly follow office policies of the company they work for and abide by the principle of confidentiality with regard to any information / restricted materials on their assigned projects.<br/><br/>

	<h4><?= Icon::show('users') ?>Services</h4>
	<?= Icon::show('chevron-circle-right') ?> Job Placement<br/>
	<?= Icon::show('chevron-circle-right') ?> Training<br/>
	<?= Icon::show('chevron-circle-right') ?> Resume Database<br/>
	<?= Icon::show('chevron-circle-right') ?> Graduates/Alumni Directory<br/>
	<?= Icon::show('chevron-circle-right') ?> Job Invitation File<br/>
	<?= Icon::show('chevron-circle-right') ?> Company Profile Bank<br/>
	<?= Icon::show('chevron-circle-right') ?> Career Counseling Sessions<br/>
	<?= Icon::show('chevron-circle-right') ?> CPO Events and Activities<br/>
	</p>
</div>

	<div class="pull-right">
	<p><h4><?= Icon::show('codepen') ?><a href="devs"> The developers</a></h4></p>
	   </div>