function dragenter(e){ 
	e.stopPropagation(); 
	e.preventDefault(); 
} 
function dragexit(e){ 
	e.stopPropagation(); 
	e.preventDefault(); 
} 
function dragover(e){ 
	e.stopPropagation(); 
	e.preventDefault(); 
} 
function dropUpload(e){ 
	e.stopPropagation(); 
	e.preventDefault();
	var uploader = document.getElementById("message");
	uploader.style.top="95px";
	var files = e.dataTransfer.files; 
	var filesLen = files.length; 
	var i = 0; 
	while(i < filesLen){ 
		uploadFile(files[i]); 
		i++; 
	} 
} 
function uploadFile(file){ 
	var data = new FormData(); 
	var xhr = new XMLHttpRequest(); 
	data.append('file[]', file); 
	var div = document.createElement("div"); 
	div.setAttribute("class","fileInfo");
	var message = document.getElementById("message"); 
	message.appendChild(div); 
	xhr.upload.addEventListener("progress", function(e){ 
		var percentComplete = Math.round((e.loaded / e.total)*100); 
		div.innerHTML="<span><p class='fileName'>"+file.name+"</p></span>";
		div.style.width=percentComplete+"%"; 
	}); 
	//event for when upload is finished 
	xhr.upload.addEventListener('load', function(e){ 
		div.innerHTML="<span><p class='fileName'>"+file.name+"</p></span>";
		div.style.width="100%"; 
		div.style.background="#3ab05d";
	}); 
	/*xhr.onreadystatechange=function(){
		if (xhr.readyState==4 && xhr.status==200){
			console.log(xhr.responseText);
		}
	}*/
	xhr.open("POST", "../php/fileUpload.php"); 
	xhr.setRequestHeader("Cache-Control", "no-cache"); 
	xhr.send(data);
} 
function browseUpload(e){
	var uploader = document.getElementById("message");
	uploader.style.top="95px";
	var fileInputfield = document.getElementById("uploadFile"); 
	var files = fileInputfield.files; 
	var filesLen = files.length; 
	var i = 0; 
	while(i < filesLen){ 
		uploadFile(files[i]); 
		//$("#message div:nth-child("+(i+1)+")").attr("id", i); 
		i++; 
	} 
} 
window.addEventListener("load", function(e){ 
	var droparea = document.getElementById("droparea"); 
	droparea.addEventListener("dragenter", dragenter); 
	droparea.addEventListener("dragexit", dragexit); 
	droparea.addEventListener("dragover", dragover); 
	droparea.addEventListener("drop", dropUpload); 
	var fileInput = document.getElementById("uploadFile");
	if(fileInput == null){
	    return [];
	}
	fileInput.addEventListener("change", browseUpload); 
});
