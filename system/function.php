<?php
function add_speaker($data)
{
	R::freeze(true);

	R::ext('xdispense', function($table_name) {
		return R::getRedBean()->dispense($table_name);
	});
	
$speaker = R::xdispense('speakers');
if(!empty($data['speaker_name']))
{
$speaker->name = $data['speaker_name'];
}
if(!empty($data['speaker_email']))
{
$speaker->email = $data['speaker_email'];
}
if(!empty($data['speaker_site']))
{
$speaker->site = $data['speaker_site'];
}
if(!empty($data['speaker_fb']))
{
$speaker->facebook = $data['speaker_fb'];
}
if(!empty($data['speaker_description']))
{
$speaker->desc = $data['speaker_description'];
}
if(!empty($data['speaker_position']))
{
$speaker->position = $data['speaker_position'];
}
// Проверяем установлен ли массив файлов и массив с переданными данными
if(isset($_FILES) && isset($_FILES['speaker_photo'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['speaker_photo'];
 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 200000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $imageFullName = $_SERVER['DOCUMENT_ROOT'].'/img/estate/speakers/' . $_FILES['speaker_photo']['name'];
 
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'image/jpeg' || $imageType == 'image/png'|| $imageType == 'image/jpg') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
      $speaker->photo = 'img/estate/speakers/'.$_FILES['speaker_photo']['name'];
    } else {
      $speaker->photo = 'img/estate/speakers/';
    }
  }
}

$count_course = count(get_courses());
$courses = '';
for($i = 1; $i <= $count_course; $i++)
{	
	if(isset($data['course'.$i]))
	{
		if(!empty($courses))
		{
		$courses .= ','.$i;
		}
		else {
		$courses .= $i;
		}
	}
}

if(!empty($courses)) {
	$speaker->id_courses = $courses;
}

$id = R::store( $speaker );
}

function add_course($data)
{
	R::freeze(true);

	R::ext('xdispense', function($table_name) {
		return R::getRedBean()->dispense($table_name);
	});
	
$courses = R::xdispense('courses');
if(!empty($data['course_name']))
{
$courses->title = $data['course_name'];
}
if(!empty($data['course_description']))
{
$courses->desc = $data['course_description'];
}
if(!empty($data['date_start']))
{
$courses->date = $data['date_start'];
}
if(!empty($data['course_status']))
{
$courses->active = 1;
}

if(isset($_FILES) && isset($_FILES['course_photo'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['course_photo'];
 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 200000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $imageFullName = $_SERVER['DOCUMENT_ROOT'].'/img/estate/courses/' . $_FILES['course_photo']['name'];
 
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'image/jpeg' || $imageType == 'image/png'|| $imageType == 'image/jpg') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
      $courses->photo = 'img/estate/courses/'.$_FILES['course_photo']['name'];
    } else {
      $courses->photo = 'img/estate/courses/';
    }
  }
}

if(isset($_FILES) && isset($_FILES['course_attach'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['course_attach'];
 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 1000000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $imageFullName = $_SERVER['DOCUMENT_ROOT'].'/download/' . $_FILES['course_attach']['name'];
 
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'text/plain' || $imageType == 'application/pdf') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
      $courses->attach = 'download/'.$_FILES['course_attach']['name'];
    } else {
      $courses->attach = 'download/';
    }
  }
}

$id = R::store( $courses );
}

// ** EDIT **

function edit_speaker($data)
{
	R::freeze(true);

	R::ext('xdispense', function($table_name) {
		return R::getRedBean()->dispense($table_name);
	});
	
$speaker = R::findOne('speakers', ' id = ? ', array($data['speaker_id']));
if(!empty($data['speaker_name']))
{
$speaker->name = $data['speaker_name'];
}
if(!empty($data['speaker_email']))
{
$speaker->email = $data['speaker_email'];
}
if(!empty($data['speaker_site']))
{
$speaker->site = $data['speaker_site'];
}
if(!empty($data['speaker_fb']))
{
$speaker->facebook = $data['speaker_fb'];
}
if(!empty($data['speaker_description']))
{
$speaker->desc = $data['speaker_description'];
}
if(!empty($data['speaker_position']))
{
$speaker->position = $data['speaker_position'];
}

if(isset($_FILES) && isset($_FILES['upload_photo_speaker'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['upload_photo_speaker'];
 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 200000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $imageFullName = $_SERVER['DOCUMENT_ROOT'].'/img/estate/speakers/' . $_FILES['upload_photo_speaker']['name'];
 
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'image/jpeg' || $imageType == 'image/png'|| $imageType == 'image/jpg') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
      $speaker->photo = 'img/estate/speakers/'.$_FILES['upload_photo_speaker']['name'];
    } else {
      $speaker->photo = 'img/estate/speakers/';
    }
  }
}

R::store( $speaker );
}

function upload_photo_course($data) {
	R::freeze(true);
	R::ext('xdispense', function($table_name) {
		return R::getRedBean()->dispense($table_name);
	});
$courses = R::findOne('courses', ' id = ? ', array($data['course_id']));
	

	
$id = R::store( $courses );
}

function edit_course($data)
{
	R::freeze(true);

	R::ext('xdispense', function($table_name) {
		return R::getRedBean()->dispense($table_name);
	});
	
$courses = R::findOne('courses', ' id = ? ', array($data['course_id']));
if(!empty($data['course_name']))
{
$courses->title = $data['course_name'];
}
if(!empty($data['course_description']))
{
$courses->desc = $data['course_description'];
}
if(!empty($data['date_start']))
{
$courses->date = $data['date_start'];
}
if(!empty($data['course_status']))
{
$courses->active = 1;
} else {
$courses->active = 0;	
}

if(isset($_FILES) && isset($_FILES['course_photo'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['course_photo'];
 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 200000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $imageFullName = $_SERVER['DOCUMENT_ROOT'].'/img/estate/courses/' . $_FILES['course_photo']['name'];
 
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'image/jpeg' || $imageType == 'image/png'|| $imageType == 'image/jpg') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
      $courses->photo = 'img/estate/courses/'.$_FILES['course_photo']['name'];
    } else {
      $courses->photo = 'img/estate/courses/';
    }
  }
}

if(isset($_FILES) && isset($_FILES['course_attach'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['course_attach'];
 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 1000000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $imageFullName = $_SERVER['DOCUMENT_ROOT'].'/download/' . $_FILES['course_attach']['name'];
 
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'text/plain' || $imageType == 'application/pdf') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
      $courses->attach = 'download/'.$_FILES['course_attach']['name'];
    } else {
      $courses->attach = 'download/';
    }
  }
}

$id = R::store( $courses );
}

// Edit page info

function edit_pageinfo($data) {
	R::freeze(true);

	R::ext('xdispense', function($table_name) {
		return R::getRedBean()->dispense($table_name);
	});
	
$pageinfo = R::findAll('landing_text');

	if(isset($data['1th'])) {
		if(!empty($data['1th']))
		{
		$pageinfo[1]->text = $data['1th'];
		}
	}
	if(isset($data['text2'])) {
		if(!empty($data['2th']))
		{
		$pageinfo[2]->text = $data['2th'];
		}
		if(!empty($data['3th']))
		{
		$pageinfo[3]->title = $data['3th'];
		}
		if(!empty($data['4th']))
		{
		$pageinfo[3]->text = $data['4th'];
		}
		if(!empty($data['5th']))
		{
		$pageinfo[4]->title = $data['5th'];
		}
		if(!empty($data['6th']))
		{
		$pageinfo[4]->text = $data['6th'];
		}
		if(!empty($data['7th']))
		{
		$pageinfo[5]->title = $data['7th'];
		}
		if(!empty($data['8th']))
		{
		$pageinfo[5]->text = $data['8th'];
		}
	}
	if(isset($data['text3'])) {
		if(!empty($data['9th']))
		{
		$pageinfo[6]->title = $data['9th'];
		}
		if(!empty($data['10th']))
		{
		$pageinfo[6]->text = $data['10th'];
		}
	}
	if(isset($data['text4'])) {
		if(!empty($data['11th']))
		{
		$pageinfo[7]->title = $data['11th'];
		}
		if(!empty($data['12th']))
		{
		$pageinfo[7]->text = $data['12th'];
		}
	}
	if(isset($data['text5'])) {
		if(!empty($data['13th']))
		{
		$pageinfo[8]->title = $data['13th'];
		}
		if(!empty($data['14th']))
		{
		$pageinfo[8]->text = $data['14th'];
		}
	}
	if(isset($data['text6'])) {
		if(!empty($data['15th']))
		{
		$pageinfo[9]->text = $data['15th'];
		}
		if(!empty($data['16th'])) {
		$pageinfo[10]->text = $data['16th'];
		}
		if(!empty($data['17th'])) {
		$pageinfo[11]->text = $data['17th'];
		}
		if(!empty($data['18th'])) {
		$pageinfo[12]->text = $data['18th'];
		}
	}
	if(isset($data['text7'])) {
		if(!empty($data['19th']))
		{
		$pageinfo[13]->text = $data['19th'];
		}
		if(!empty($data['20th']))
		{
		$pageinfo[14]->text = $data['20th'];
		}
		if(!empty($data['21th']))
		{
		$pageinfo[15]->text = $data['21th'];
		}
	}
	if(isset($data['text8'])) {
		if(!empty($data['22th']))
		{
		$pageinfo[16]->text = $data['22th'];
		}
		if(!empty($data['23th']))
		{
		$pageinfo[17]->text = $data['23th'];
		}
	}


R::storeAll($pageinfo);
}


function show_allpages() {
	$result = R::getAll('SELECT * FROM pages ORDER BY name');
	return $result;
}

function show_pageinfo($data) {
	$result = R::findOne('pages', ' pid = ? ', array($data['id']));
	return $result;
}

function edit_page($data) {
		$page = R::findOne('pages', ' pid = ? ', array($data['page_id']));
		if(!empty($data['ptitle']))
		{
			$page->title = $data['ptitle'];
		}
		if(!empty($data['pdescription']))
		{
			$page->description = $data['pdescription'];
		}
		if(!empty($data['pkeywords']))
		{
			$page->keywords = $data['pkeywords'];
		}
		if(!empty($data['ptext']))
		{
			$page->text = $data['ptext'];
		}
		
		R::store( $page );
		return true;
}

function get_nearest_course() {
	$result = R::getAll( 'SELECT id,title,date,photo FROM courses ORDER BY date LIMIT 1');
	return $result;
}

function get_last_five() {
	$result = R::getAll( 'SELECT id,firstname,lastname FROM customers ORDER BY id DESC LIMIT 5');
	return $result;
}

function show_customers() {
	// $result = R::findAll( 'models', ' name LIKE ? ', [ $data.'%' ] );
	$result = R::getAll( 'SELECT id,firstname,lastname,email,id_courses FROM customers ORDER BY lastname LIMIT 15');
	return $result;
}

function get_customers_num($data) {
	$result = R::getAll( 'SELECT COUNT(id) FROM customers WHERE id_courses LIKE ?', ['%'.$data.'%']);
	return $result;
}

function get_speakers() {
	// $result = R::findAll( 'models', ' name LIKE ? ', [ $data.'%' ] );
	$result = R::getAll( 'SELECT id,name FROM speakers ORDER BY name');
	return $result;
}

function get_speakers_full() {
	$result = R::getAll( 'SELECT * FROM speakers ORDER BY position');
	return $result;
}

function get_courses() {
	// $result = R::findAll( 'models', ' name LIKE ? ', [ $data.'%' ] );
	$result = R::getAll( 'SELECT id,title FROM courses ORDER BY title');
	return $result;
}

function get_courses_full() {
	// $result = R::findAll( 'models', ' name LIKE ? ', [ $data.'%' ] );
	$result = R::getAll( 'SELECT * FROM courses ORDER BY id ASC');
	return $result;
}

function show_emails() {
	// $result = R::findAll( 'models', ' name LIKE ? ', [ $data.'%' ] );
	$result = R::getAll( 'SELECT id,email FROM customers');
	return $result;
}

function get_customer($data) {
	$result = R::findOne('customers', ' id = ? ', array($data));
	return $result;
}

function get_speaker($data) {
	$result = R::findOne('speakers', ' id = ? ', array($data));
	return $result;
}

function get_course($data) {
	$result = R::findOne('courses', ' id = ? ', array($data));
	return $result;
}

function get_year_word($year) {
	if($year == 1) {
		return 'год';
	} elseif($year > 1 && $year < 5) {
		return 'года';
	} elseif($year > 4) {
		return 'лет';
	}
}

function course_id2name($data) {
	// $result = R::findAll( 'models', ' name LIKE ? ', [ $data.'%' ] );
	$result = R::findOne('courses', ' id = ? ', array($data));
	return $result;
}

function speaker_id2name($data) {
	// $result = R::findAll( 'models', ' name LIKE ? ', [ $data.'%' ] );
	$result = R::findOne('speakers', ' id = ? ', array($data));
	return $result;
}

function file_force_download($file) {
  if (file_exists($file)) {
    // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
    // если этого не сделать файл будет читаться в память полностью!
    if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    // читаем файл и отправляем его пользователю
    readfile($file);
    exit;
  }
}

function get_text() {
	$result = R::getAll( 'SELECT * FROM landing_text');
	return $result;
}

if(isset($_POST['blocks']) && $_POST['blocks'] == true) {
	$model = R::findOne('landing_text', ' id = ? ', array($_POST['id']));
	if(!empty($_POST['text'])) {
		$model->text = $_POST['blocks'];
	}
	R::store( $model );
}

function get_photos() {
	$result = R::getAll( 'SELECT * FROM photo_gallery');
	return $result;
}

function insert_customers($data) {
	
	R::freeze(true);

	R::ext('xdispense', function($table_name) {
		return R::getRedBean()->dispense($table_name);
	});
	
$customers = R::xdispense('customers');
if(!empty($data['NAME']))
{
$customers->firstname = $data['NAME'];
}
if(!empty($data['second_name']))
{
$customers->lastname = $data['second_name'];
}
if(!empty($data['tel_number']))
{
$customers->phone = $data['tel_number'];
}
if(!empty($data['EMAIL']))
{
$customers->email = $data['EMAIL'];
}
if(!empty($data['region']))
{
$customers->region = $data['region'];
}
if(!empty($data['experience']))
{
$customers->exp = $data['experience'];
}
if(!empty($data['agency']))
{
$customers->agency = $data['agency'];
}
if(!empty($data['id_courses']))
{
$customers->id_courses = $data['id_courses'];
}

R::store( $customers );
}
?>