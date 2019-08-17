<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku Tamu</title>
	<meta name="description" content="Buku tamu yang diperuntukkan Dinas Komunikasi dan Informatika Kabupaten Tanjung Jabung Timur" />
	<meta name="keywords" content="Dinas Komunikasi dan Informatika Kabupaten Tanjung Jabung Timur" />
	<meta name="author" content="Programer Diskominfo Tanjung Jabung Timur" />

	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/favicon.ico">

	<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/keyboard.css" rel="stylesheet" type="text/css">

	<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/jquery-latest-slim.min.js"></script>
	<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/jquery-ui-custom.min.js"></script>
	<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/jquery.keyboard.js"></script>
	<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/virtualkeyboard/jquery.mousewheel.js"></script>


	<script>
  //DEFAULT BAWAAN
  //$(function(){
  //   $('#keyboard4').keyboard(); });
  //UNTUK MENAMPILAKAN VIRTUAL KEYBOARD PER FORM ISIAN
  $(function () {
   $('#keyboard')
   .keyboard({
    layout: 'custom',
    customLayout: {
     'default': [
     'Q W E R T Y U I O P',
     'A S D F G H J K L',
     'Z X C V B N M , .',
     '{space}',
     '{bksp} {accept}',
     ]
   },
   restrictInput: true,
   preventPaste: true,
   autoAccept: true
 })
   .addTyping();
 });

  $(function () {
   $('#keyboard1')
   .keyboard({
    layout: 'custom',
    customLayout: {
     'default': [
     '1 2 3 4 5 6 7 8 9 0',
     'Q W E R T Y U I O P',
     'A S D F G H J K L',
     'Z X C V B N M , . -',
     '{space}',
     '{bksp} {accept}',
     ]
   },
   restrictInput: true,
   preventPaste: true,
   autoAccept: true
 })
   .addTyping();
 });

  $(function () {
   $('#keyboard2')
   .keyboard({
    layout: 'custom',
    customLayout: {
     'default': [
     '1 2 3 4 5 6 7 8 9 0',
     'Q W E R T Y U I O P',
     'A S D F G H J K L',
     'Z X C V B N M , . -',
     '{space}',
     '{bksp} {accept}',
     ]
   },
   restrictInput: true,
   preventPaste: true,
   autoAccept: true
 })
   .addTyping();
 });

  $(function () {
   $('#keyboard3')
   .keyboard({
    layout: 'custom',
    customLayout: {
     'default': [
     '1 2 3 4 5 6 7 8 9 0',
     'Q W E R T Y U I O P',
     'A S D F G H J K L .',
     'Z X C V B N M @ _ -',
     '{space}',
     '{bksp} {accept}',
     ]
   },
   restrictInput: true,
   preventPaste: true,
   autoAccept: true
 })
   .addTyping();
 });

  $(function () {
   $('#keyboard4')
   .keyboard({
    layout: 'custom',
    customLayout: {
     'default': [
     '1 2 3 4 5 6 7 8 9 0',
     'Q W E R T Y U I O P',
     'A S D F G H J K L',
     'Z X C V B N M , . -',
     '{space}',
     '{bksp} {accept}',
     ]
   },
   restrictInput: true,
   preventPaste: true,
   autoAccept: true
 })
   .addTyping();
 });

 // KEYBOARD KOSTUM UNTUK MEMASUKKAN INPUTAN NOMOR
 $(function () {
   $('#num')
   .keyboard({
    layout: 'custom',
    customLayout: {
     'default': [
     '1 2 3',
     '4 5 6',
     '7 8 9',
     '0 {bksp}',
     '{accept}',
     ]
   },
   restrictInput: true,
   preventPaste: true,
   autoAccept: true
 })
   .addTyping();
 });
</script>

<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/css/demo.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/css/component.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/css/cs-select.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/css/cs-skin-boxes.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/css/main.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/js/modernizr.custom.js"></script>

<style type="text/css">
<?php
$identitas = $this->M_view_tamu->kostum();
foreach($identitas->result() as $row) {
  ?>
  body{
    background: url(<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/background/<?php echo $row->latar_2; ?>);
    background-size:cover;
    overflow-y: hidden;
    overflow-x: hidden;
  }
<?php } ?>
video{
  width: 520px;
  float: left;

  border: 10px solid #fff;
  border-radius: 10px;
}
#myimage{

  border-radius: 10px;
}
#tbl{
  float: left;
  width: 350px;
  cursor: pointer;
}

/**
* INI ADALAH DATA CLASS SELECT OPTION KEPERLUAN
*/
<?php foreach($keperluan as $p) { ?>
  .cs-skin-boxes .cs-options li.keperluan-<?php echo $p->id_kop_css;?> {
    background-color: <?php echo $p->kode_warna;?>;
  }
<?php } ?>

/**
* INI ADALAH DATA CLASS SELECT OPTION PEGAWAI YANG INGIN DITEMUI
*/
<?php foreach($ditemui as $p) { ?>
  .cs-skin-boxes .cs-options li.ditemui-<?php echo $p->id_kop_css;?> {
    background-color: <?php echo $p->kode_warna;?>;
  }
<?php } ?>

</style>
</head>
<body>
	<div class="container" style="background:rgba(17, 236, 217, 0.24);">
		<div class="fs-form-wrap" id="fs-form-wrap">
			<div class="fs-title">
        <?php
        $identitas = $this->M_view_tamu->kostum();
        foreach($identitas->result() as $row) { ?>
          <img src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/logo/<?php echo $row->logo_1;?>" width="100" style="float: left;padding: 5px;">
          <br>
          <span>
            <b>Buku Tamu <br> <?php echo $row->head_1;?> <br> <?php echo $row->head_2;?> <br> <?php echo $row->head_3;?></b>
          </span>
        <?php } ?>
      </div>
      <form action="<?php echo base_url() ?><?php echo $this->session->userdata("level") ?>/dashboard/simpan" method="post" id="myform" class="fs-form fs-form-full">
        <input type="hidden" name="id_p" value="Tidak Ada Foto" id="id_p">
        <ol class="fs-fields">
          <li>
           <video autoplay="true" id="video-webcam">
            Browsermu anda tidak mendukung fitur yang ada, download versi baru!
          </video>
          <button style="background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none; position:absolute; transition: .5s ease; top: 5%; left: 60%;"><img onclick="takeSnapshot()" id="tbl" src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/img/tmb.svg" ></button>
          <img width="520" id='myimage' />
          <canvas id='canvas'></canvas>
        </li>
        <li>
         <label class="fs-field-label fs-anim-upper" for="nama" data-info="Harap memasukkan nama lengkap anda">Nama</label>
         <input class="fs-anim-lower" id="keyboard" name="nama" type="text" placeholder="Ketik nama anda" required autocomplete="off"/>
       </li>
       <li>
         <label class="fs-field-label fs-anim-upper" for="instansi" data-info="Contoh instansi : Masyarakat, DPRD, Ormas, Dll">Instansi</label>
         <input class="fs-anim-lower" id="keyboard1" name="instansi" type="text" placeholder="Ketik nama anda" required autocomplete="off"/>
       </li>
       <li>
         <label class="fs-field-label fs-anim-upper" for="alamat">Alamat</label>
         <input class="fs-anim-lower" id="keyboard2" name="alamat" type="text" placeholder="Ketik alamat anda" required autocomplete="off"/>
       </li>
       <li>
         <label class="fs-field-label fs-anim-upper" for="nohp" data-info="Masukkan nomor HP anda dimulai dari angka 0 Contoh : 08xx xxxx xxxx">No HP</label>
         <input class="fs-anim-lower" id="num" name="nohp" type="text" placeholder="08xx xxxx xxxx" required autocomplete="off"/>
       </li>
       <li>
         <label class="fs-field-label fs-anim-upper" for="email" data-info="Anda dapat melewati tahap ini jika anda tidak memiliki alamat email">Email</label>
         <input class="fs-anim-lower" id="keyboard3" autocomplete="off" name="email" type="text" placeholder="Ketik nama anda"/>
       </li>
       <li>
         <label class="fs-field-label fs-anim-upper" for="saran" data-info="Masukkan saran atau saran anda">Apa saran anda untuk Instansi Kami?</label>
         <input class="fs-anim-lower" id="keyboard4" name="saran" type="text" placeholder="Ketik saran anda" required autocomplete="off"/>
       </li>
       <li data-input-trigger>
         <label for="keperluan" class="fs-field-label fs-anim-upper">Keperluan</label>
         <select  name="keperluan" class="cs-select cs-skin-boxes fs-anim-lower" required>
          <?php foreach($keperluan as $p) {
            echo '<option value="'.$p->nama_keperluan.'" data-class="keperluan-'.$p->id_kop_css.'">'.$p->nama_keperluan.'</option>';
          } ?>
        </select>

      </li>
      <li data-input-trigger>
       <label for="pegawai" class="fs-field-label fs-anim-upper" data-info="Silahkan klik PILIH, Lalu pilih orang yang ingin anda temui">Siapakah yang ingin anda temui?</label>
       <select  name="pegawai" class="cs-select cs-skin-boxes fs-anim-lower" required>
        <?php foreach($ditemui as $d) {
          echo '<option value="'.$d->nama_ditemui.'" data-class="ditemui-'.$d->id_kop_css.'">'.$d->nama_ditemui.'</option>';
        } ?>
      </select>
    </li>
    <li data-input-trigger>
     <label class="fs-field-label fs-anim-upper" for="penilaian" >Apakah anda puas dengan Pelayanan kami?</label>
     <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
      <span>
       <input id="penilaianIya" name="penilaian" type="radio" value="Iya"/>
       <label for="penilaianIya" class="suka" style="color: white;">Iya</label>
     </span>
     <span>
       <input id="penilaianTidak" name="penilaian" type="radio" value="Tidak"/>
       <label for="penilaianTidak" class="tidak-suka" style="color: white;">Tidak</label>
     </span>
   </div>
 </li>
</ol>
<input type="hidden" id="id_tamu" name="id_tamu" value="<?php echo uniqid(); ?>">
<input type="hidden" id="status" name="status" value="1">
<input name="ip" type="hidden" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
<input type="hidden" id="jammasuk" name="jammasuk" value="<?php echo date('H:i:s'); ?>" readonly="readonly">
<input type="hidden" id="tanggal" name="tanggal" value="<?php echo date('Ymd'); ?>" readonly="readonly">
<button class="fs-submit" type="submit">Selesai</button>
</form>
</div>
</div>

<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/js/classie.js"></script>
<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/js/selectFx.js"></script>
<script src="<?php echo base_url() ?>assets/<?php echo $this->session->userdata("level") ?>/3301/js/fullscreenForm.js"></script>
<script>
 (function() {
  var formWrap = document.getElementById( 'fs-form-wrap' );
  [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
   new SelectFx( el, {
    stickyPlaceholder: false,
    onChange: function(val){
     document.querySelector('span.cs-placeholder').style.backgroundColor = val;
   }
 });
 } );

  new FForm( formWrap, {
   onReview : function() {
    classie.add( document.body, 'overview' );
  }
} );
})
 ();
</script>

<script type="text/javascript">
// seleksi elemen video
var video = document.querySelector("#video-webcam");
// minta izin user
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
// jika user memberikan izin
if (navigator.getUserMedia) {
// jalankan fungsi handleVideo, dan videoError jika izin ditolak
navigator.getUserMedia({ video: true }, handleVideo, videoError);
}
// fungsi ini akan dieksekusi jika  izin telah diberikan
function handleVideo(stream) {
  video.srcObject = stream;
}
// fungsi ini akan dieksekusi kalau user menolak izin
function videoError(e) {
// do something
alert("Harap izinkan akses kamera untuk mengambil foto anda!")
}
//FUNGSI MENANGKAP WEBCAM LALU DIUBAH KE DALAM CANVAS
function takeSnapshot()
{
 var img = document.getElementById('myimage');
 var context;
 var width = video.offsetWidth, height = video.offsetHeight;
 canvas = document.getElementById('canvas');
 canvas.width = width;
 canvas.height = height;
 context = canvas.getContext('2d');
 context.drawImage(video, 0, 0, width, height);
 img.src = canvas.toDataURL('image/jpg');
 var x = document.getElementById('video-webcam');
 x.style.display = 'none';
 var y = document.getElementById('tbl');
 y.style.display = 'none';

 //FUNGSI AJAX UNTUK MELAKUKAN UPLOAD KE FOLDER SERVER SETELAH CANVAS DI UBAH KE BASE64
 var image_canvas = document.getElementById("canvas");
 var canvasData = image_canvas.toDataURL("image/jpg");
 var postData = "canvasData="+canvasData;

 //var dataform = $("#myform").serialize();
 <?php //echo $this->session->userdata("level") ?>
 //$sesi
 var ajax = new XMLHttpRequest();
 ajax.open("POST","<?php echo base_url().$this->session->userdata("level"). '/Dashboard/simpan_foto_ke_folder'; ?>",true);
 ajax.setRequestHeader('Content-Type', 'canvas/upload');
 ajax.onreadystatechange=function()
 {
   if (ajax.readyState == 4)
   {

//alert(ajax.responseText);
var a = document.getElementById("id_p");
a.value = ajax.responseText;

//document.getElementById("myimage").innerHTML="Saved as<br><a target='_blank' href='"+ajax.responseText+"'>"+ajax.responseText+"</a>";
}
}
ajax.send(postData);
console.log(postData);
//alert(postData);
//$('input[type=text].id_p').val('000000');
}
</script>
</body>
</html>