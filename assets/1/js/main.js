/*
 *  Copyright (c) 2015 The WebRTC project authors. All Rights Reserved.
 *
 *  Use of this source code is governed by a BSD-style license
 *  that can be found in the LICENSE file in the root of the source
 *  tree.
 */

'use strict';

// Put variables in global scope to make them available to the browser console.
const video = document.querySelector('video');
const canvas = window.canvas = document.querySelector('canvas');
canvas.width = 480;
canvas.height = 360;

const button = document.querySelector('button');
button.onclick = function() {
  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
  canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
};


const constraints = {
  audio: false,
  video: true
};

function handleSuccess(stream) {
  window.stream = stream; // make stream available to browser console
  video.srcObject = stream;
}

function handleError(error) {
  console.log('navigator.MediaDevices.getUserMedia error: ', error.message, error.name);
}

function takeSnapshot()
{
	var canvas = document.getElementById('canvas');
	var context;
	var width = video.offsetWidth, height = video.offsetHeight;
	canvas = document.getElementById('button');
	button.width = width;
	button.height = height;
	context = button.getContext('2d');
	context.drawImage(video, 0, 0, width, height);
	img.src = canvas.toDataURL('image/jpg');
	var x = document.getElementById('video-webcam');
	x.style.display = 'none';
	var y = document.getElementById('tombol');
	y.style.display = 'none';
   var ajax = new XMLHttpRequest();
   ajax.open("POST","<?php echo base_url(). 'bukutamu/simpan_tes'; ?>",true);
   ajax.setRequestHeader('Content-Type', 'canvas/upload');
   ajax.onreadystatechange=function()
   {
   	if (ajax.readyState == 4)
   	{
   		alert(ajax.responseText);
   		//document.getElementById("myimage").innerHTML="Saved as<br><a target='_blank' href='"+ajax.responseText+"'>"+ajax.responseText+"</a>";
   	}
   }
   ajax.send(postData);
   console.log(postData);
   alert(postData);
}

navigator.mediaDevices.getUserMedia(constraints).then(handleSuccess).catch(handleError);

