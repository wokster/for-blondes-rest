<?php
/* @var $this \yii\web\View*/
/**
 * Created by internetsite.com.ua
 * User: Tymofeiev Maksym
 * Date: 08.02.2019
 * Time: 17:55
 */

$this->registerAssetBundle(\yii\web\JqueryAsset::class);
$this->registerJs("
var logString = 'test:lambada';
$('#mybtb').on('click',function(){
 $.ajax({
	xhrFields: {
		withCredentials: true
	},
	headers: {
		'Authorization': 'Basic ' + btoa(logString)
	},
	url: '/v2/p/1',
	success: function (data) {
		console.log(data);
	},
	error: function (xhr, ajaxOptions, thrownError) {
		console.log(xhr.status);
		console.log(xhr.responseText);
    },
 });
});

$('#mybtb2').on('click',function(){
	$.ajax({
	    xhrFields: {
	        withCredentials: true
	    },
	    headers: {
	        'Authorization': 'Basic ' + btoa(logString)
	    },
	    url: '/v2/p/2',
        success: function (data) {
			console.log(data);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			console.log(xhr.status);
			console.log(xhr.responseText);
    },
	});
});

$('#mybtb3').on('click',function(){
    var xhr = new XMLHttpRequest();
	xhr.open('GET', '/v2/p/3', true);
	xhr.withCredentials = true;
	xhr.setRequestHeader('Authorization', 'Basic ' + btoa(logString));
	xhr.onload = function () {
	    console.log(xhr.responseText);
	};
	xhr.send();
});

$('#mybtb4').on('click',function(){
	var myHeaders = new Headers();
	myHeaders.append('Authorization', 'Basic ' + btoa(logString));
	fetch('/v2/p/4', {
	    credentials: 'include',
	    headers: myHeaders
	}).then(function (response) {
	    return response.json();
	}).then(function (json) {
	    console.log(json);
	});
});
");

echo \yii\bootstrap\Html::button('Jquery и beforeSend',['id'=>'mybtb','class'=>'btn btn-info']);
echo \yii\bootstrap\Html::button('Jquery и headers',['id'=>'mybtb2','class'=>'btn btn-info']);
echo \yii\bootstrap\Html::button('чистый js и XMLHttpRequest',['id'=>'mybtb3','class'=>'btn btn-info']);
echo \yii\bootstrap\Html::button('чистый js и Fetch API',['id'=>'mybtb4','class'=>'btn btn-info']);
?>
