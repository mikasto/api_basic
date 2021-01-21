<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$js = <<< JS
jQuery.ajax({
  url: "/api/v1/news/index",
  async : true,
  contentType: 'application/json',
  dataType: 'json',
  headers : {'Authorization':'Bearer 100-token'},
  statusCode: {
    429: function() {
      alert("Too Many Requests");
    }
  },
  success: function (data, status, xhr) {
	  jQuery('.row').html('');
	  for (var i in data) {
		if (i >= 10)
			return;
		jQuery('.row').append(
			jQuery('<div class="col-lg-4">')
				.append(jQuery('<h2>').html(data[i].title))
				.append(jQuery('<p>').html(data[i].body))
			);
	  }
  }
});
JS;
$this->registerJs($js, yii\web\View::POS_READY);
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
			<h1>Loading...</h1>
        </div>

    </div>
</div>